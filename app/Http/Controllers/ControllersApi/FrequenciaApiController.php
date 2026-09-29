<?php

namespace App\Http\Controllers\ControllersApi;

use App\Http\Controllers\Controller;
use App\Models\Aula;
use App\Models\Frequencia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrequenciaApiController extends Controller
{
    private ?string $statusAusenteCache = null;

    /**
     * Qual texto a coluna Frequencia.status aceita para "ausente"?
     * O script original do banco usa ENUM('Presente','Falta','Justificado').
     * Se você alterou o ENUM para 'Ausente', isto detecta sozinho.
     */
    private function statusAusenteDoBanco(): string
    {
        if ($this->statusAusenteCache !== null) {
            return $this->statusAusenteCache;
        }

        $coluna = DB::selectOne("SHOW COLUMNS FROM Frequencia LIKE 'status'");
        $tipo = $coluna->Type ?? '';

        $usaAusente = stripos($tipo, 'enum') === 0
            && stripos($tipo, "'Falta'") === false
            && stripos($tipo, "'Ausente'") !== false;

        return $this->statusAusenteCache = $usaAusente ? 'Ausente' : 'Falta';
    }

    /** Converte o que vier do app para o valor gravado no banco. */
    private function statusParaBanco($valor): ?string
    {
        $s = mb_strtolower(trim((string) $valor));

        return match (true) {
            $s === 'presente'                   => 'Presente',
            $s === 'ausente' || $s === 'falta'  => $this->statusAusenteDoBanco(),
            $s === 'justificado'                => 'Justificado',
            default                             => null,
        };
    }

    /** Converte o valor do banco para o que o app entende. */
    private function statusParaApp($valor): string
    {
        $s = mb_strtolower(trim((string) $valor));

        return match ($s) {
            'presente'    => 'Presente',
            'justificado' => 'Justificado',
            default       => 'Ausente',
        };
    }

    /**
     * GET /api/frequencia?id_turma=1&data=2026-09-29
     * Alunos da turma + status no dia.
     */
    public function index(Request $request)
    {
        try {
            $paramData = $request->input('data', $request->input('date'));
            $turmaId   = $request->input('id_turma', $request->input('turma_id'));

            $dataFormatada = $paramData
                ? Carbon::parse($paramData)->format('Y-m-d')
                : date('Y-m-d');

            $query = DB::table('alunos')
                ->join('Usuario', 'alunos.id_usuario', '=', 'Usuario.id_usuario')
                ->join('Turmas', 'alunos.id_turma', '=', 'Turmas.id_turma')
                // CORRIGIDO: a aula precisa ser da MESMA turma do aluno.
                // Antes, faltava esta condição e o aluno aparecia duplicado
                // quando outra turma tinha aula no mesmo dia.
                ->leftJoin('Aula', function ($join) use ($dataFormatada) {
                    $join->on('Aula.id_turma', '=', 'alunos.id_turma')
                         ->whereRaw('DATE(Aula.data) = ?', [$dataFormatada]);
                })
                ->leftJoin('Frequencia', function ($join) {
                    $join->on('Frequencia.id_aluno', '=', 'alunos.id_aluno')
                         ->on('Frequencia.id_aula', '=', 'Aula.id_aula');
                })
                ->select(
                    'alunos.id_aluno',
                    'Usuario.nome as nome_aluno',
                    'Usuario.email as email_aluno',
                    'Frequencia.status as status_banco'
                )
                ->orderBy('Usuario.nome');

            if ($turmaId) {
                $query->where('Turmas.id_turma', $turmaId);
            }

            // Se houver mais de uma aula no dia, "Presente" vence.
            $registros = $query->get()
                ->groupBy('id_aluno')
                ->map(function ($linhas) {
                    $primeira = $linhas->first();
                    $statusFinal = 'Ausente';

                    foreach ($linhas as $l) {
                        $s = $this->statusParaApp($l->status_banco);
                        if ($s === 'Presente') {
                            $statusFinal = 'Presente';
                            break;
                        }
                        if ($s === 'Justificado') {
                            $statusFinal = 'Justificado';
                        }
                    }

                    return [
                        'id_aluno' => $primeira->id_aluno,
                        'nome'     => $primeira->nome_aluno,
                        'email'    => $primeira->email_aluno,
                        'status'   => $statusFinal,
                    ];
                })
                ->values();

            $total     = $registros->count();
            $presentes = $registros->where('status', 'Presente')->count();
            $ausentes  = $registros->where('status', 'Ausente')->count();

            return response()->json([
                'success'       => true,
                'data_consulta' => $dataFormatada,
                'resumo'        => [
                    'total_alunos'   => $total,
                    'presentes'      => $presentes,
                    'ausentes'       => $ausentes,
                    'aproveitamento' => ($total > 0 ? round(($presentes / $total) * 100) : 0) . '%',
                ],
                'data'   => $registros,
                'alunos' => $registros,
            ], 200);

        } catch (\Throwable $e) {
            \Log::error('ERRO frequencia.index', ['erro' => $e->getMessage()]);

            return response()->json([
                'success' => false,
                'message' => 'Erro ao carregar a frequência.',
                'error'   => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * GET /api/turmas/{id}/alunos
     */
    public function alunosDaTurma($id)
    {
        $alunos = DB::table('alunos')
            ->join('Usuario', 'alunos.id_usuario', '=', 'Usuario.id_usuario')
            ->where('alunos.id_turma', $id)
            ->orderBy('Usuario.nome')
            ->select(
                'alunos.id_aluno',
                'Usuario.nome',
                'Usuario.email',
                DB::raw('(alunos.face_embedding IS NOT NULL) as tem_rosto')
            )
            ->get();

        return response()->json([
            'success' => true,
            'data'    => $alunos,
            'alunos'  => $alunos,
        ]);
    }

    /**
     * POST /api/frequencia
     *
     * Um aluno:   { id_turma, id_aluno, data, status }
     * Lote:       { id_turma, data, frequencias: [ {id_aluno, status}, ... ] }
     */
    public function salvarFrequencia(Request $request)
    {
        $idTurma = $request->input('id_turma', $request->input('turma_id'));

        if (!$idTurma) {
            return response()->json(['success' => false, 'message' => 'A turma é obrigatória.'], 422);
        }

        try {
            $data = Carbon::parse($request->input('data', date('Y-m-d')))->startOfDay();
        } catch (\Throwable $e) {
            return response()->json(['success' => false, 'message' => 'Data inválida.'], 422);
        }

        if ($data->isAfter(Carbon::today())) {
            return response()->json([
                'success' => false,
                'message' => 'Não é permitido registrar frequência em data futura.',
            ], 422);
        }

        $itens = $request->input('frequencias');

        if (!is_array($itens)) {
            $idAluno = $request->input('id_aluno', $request->input('aluno_id'));

            if (!$idAluno) {
                return response()->json(['success' => false, 'message' => 'O id_aluno é obrigatório.'], 422);
            }

            $itens = [[
                'id_aluno' => $idAluno,
                'status'   => $request->input('status', 'Presente'),
            ]];
        }

        $observacao = $request->input('origem') === 'totem'
            ? 'Registrado via Totem Facial'
            : 'Registrado pelo aplicativo';

        try {
            $salvos    = 0;
            $ignorados = [];

            DB::transaction(function () use ($idTurma, $data, $itens, $observacao, &$salvos, &$ignorados) {
                $aula = Aula::firstOrCreate(
                    ['id_turma' => $idTurma, 'data' => $data->format('Y-m-d')],
                    ['disciplina' => 'Frequência Geral']
                );

                foreach ($itens as $item) {
                    $idAluno = $item['id_aluno'] ?? $item['aluno_id'] ?? null;
                    $status  = $this->statusParaBanco($item['status'] ?? 'Presente');

                    if (!$idAluno || $status === null) {
                        $ignorados[] = $idAluno;
                        continue;
                    }

                    // O aluno precisa pertencer à turma
                    $pertence = DB::table('alunos')
                        ->where('id_aluno', $idAluno)
                        ->where('id_turma', $idTurma)
                        ->exists();

                    if (!$pertence) {
                        $ignorados[] = $idAluno;
                        continue;
                    }

                    Frequencia::updateOrCreate(
                        ['id_aula' => $aula->id_aula, 'id_aluno' => $idAluno],
                        ['status' => $status, 'observacao' => $observacao]
                    );

                    $salvos++;
                }
            });

            if ($salvos === 0) {
                return response()->json([
                    'success'   => false,
                    'message'   => 'Nenhum registro válido para salvar.',
                    'ignorados' => $ignorados,
                ], 422);
            }

            return response()->json([
                'success'   => true,
                'message'   => 'Frequência registrada com sucesso.',
                'salvos'    => $salvos,
                'ignorados' => $ignorados,
                'data'      => $data->format('Y-m-d'),
            ], 200);

        } catch (\Throwable $e) {
            \Log::error('ERRO frequencia.salvar', [
                'erro'  => $e->getMessage(),
                'linha' => $e->getLine(),
                'dados' => $request->all(),
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Erro ao salvar frequência.',
                'error'   => $e->getMessage(),
            ], 500);
        }
    }
}
