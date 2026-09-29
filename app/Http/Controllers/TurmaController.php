<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Aluno;
use App\Models\Frequencia;
use App\Models\Aula;
use Illuminate\Support\Facades\DB;

class TurmaController extends Controller
{
    /**
     * Exibe a listagem administrativa de turmas
     */
    public function index()
    {
        return $this->table();
    }

    /**
     * Exibe o formulário de cadastro de nova turma
     */
    public function criar()
    {
        return view('criar-turma');
    }

    /**
     * Recebe o POST do formulário e salva a nova turma
     */
    public function salvar(Request $request)
    {
        $request->validate([
            'nome_turma' => 'required|string|max:255',
            'serie'      => 'nullable|string|max:100',
            'periodo'    => 'nullable|string|max:100',
        ]);

        try {
            $turma = new Turma();

            $turma->nome_turma = $request->nome_turma;
            $turma->serie = $request->serie;
            $turma->periodo = $request->periodo;

            // Se não vier professor, usa 1 como padrão
            $turma->id_professor = $request->input('id_professor', 1);

            $turma->save();

            return redirect()
                ->route('table')
                ->with('sucesso', 'Turma cadastrada com sucesso!');

        } catch (\Exception $e) {

            return redirect()
                ->back()
                ->withInput()
                ->withErrors([
                    'erro' => 'Erro ao salvar no banco: ' . $e->getMessage()
                ]);
        }
    }

    /**
     * Exibe o painel geral de turmas com médias de presença
     */
    public function element()
    {
        $totalTurmas = DB::table('Turmas')->count();

        $totalAlunos = Aluno::count();

        $totalRegistros = Frequencia::count();

        $totalPresentes = Frequencia::where(
            'status',
            'Presente'
        )->count();

        $mediaPresenca = $totalRegistros > 0
            ? ($totalPresentes / $totalRegistros) * 100
            : 0;

        $mediaPresenca = round($mediaPresenca, 2);

        $turmas = Turma::all();

        foreach ($turmas as $turma) {

            $turmaId = $turma->id_turma;

            $turma->total_alunos = Aluno::where(
                'id_turma',
                $turmaId
            )->count();

            $aulasIds = Aula::where(
                'id_turma',
                $turmaId
            )->pluck('id_aula');

            $frequencias = Frequencia::whereIn(
                'id_aula',
                $aulasIds
            );

            $total = $frequencias->count();

            $presentes = (clone $frequencias)
                ->where('status', 'Presente')
                ->count();

            $turma->presenca = $total > 0
                ? round(($presentes / $total) * 100, 2)
                : 0;
        }

        return view('frequencia', compact(
            'totalTurmas',
            'totalAlunos',
            'mediaPresenca',
            'turmas'
        ));
    }

    /**
     * Tela de visualização geral de frequência
     */
    public function frequencia(Request $request)
    {
        // Busca todas as turmas
        $todasTurmas = DB::table('Turmas')->get();

        if ($todasTurmas->isEmpty()) {
            $todasTurmas = DB::table('turmas')->get();
        }

        $idTurma = $request->input(
            'id_turma',
            $todasTurmas->first()->id_turma ?? 1
        );

        $dataFiltro = $request->input(
            'data',
            date('Y-m-d')
        );

        // Busca a aula atual
        $aulaAtual = DB::table('Aula')
            ->where('id_turma', $idTurma)
            ->where('data', $dataFiltro)
            ->first();

        // Busca os alunos e o status da frequência
        $alunos = DB::table('alunos')
            ->join(
                'Usuario',
                'alunos.id_usuario',
                '=',
                'Usuario.id_usuario'
            )
            ->leftJoin(
                'Frequencia',
                function ($join) use ($aulaAtual) {

                    $join->on(
                        'alunos.id_aluno',
                        '=',
                        'Frequencia.id_aluno'
                    );

                    if ($aulaAtual) {

                        $join->where(
                            'Frequencia.id_aula',
                            '=',
                            $aulaAtual->id_aula
                        );

                    } else {

                        $join->whereRaw('1 = 0');
                    }
                }
            )
            ->where(
                'alunos.id_turma',
                $idTurma
            )
            ->select(
                'alunos.id_aluno',
                'Usuario.nome',
                'Frequencia.status'
            )
            ->orderBy(
                'Usuario.nome',
                'asc'
            )
            ->get();

        foreach ($alunos as $aluno) {

            if (is_null($aluno->status)) {
                $aluno->status = 'Presente';
            }
        }

        $totalAlunos = DB::table('alunos')
            ->where(
                'id_turma',
                $idTurma
            )
            ->count();

        if ($aulaAtual) {

            $presentes = DB::table('Frequencia')
                ->where(
                    'id_aula',
                    $aulaAtual->id_aula
                )
                ->where(
                    'status',
                    'Presente'
                )
                ->count();

            $totalAusentes = DB::table('Frequencia')
                ->where(
                    'id_aula',
                    $aulaAtual->id_aula
                )
                ->where(
                    'status',
                    'Falta'
                )
                ->count();

            $totalRegistros = DB::table('Frequencia')
                ->where(
                    'id_aula',
                    $aulaAtual->id_aula
                )
                ->count();

        } else {

            $presentes = $totalAlunos;
            $totalAusentes = 0;
            $totalRegistros = $totalAlunos;
        }

        $aproveitamento = $totalRegistros > 0
            ? round(
                ($presentes / $totalRegistros) * 100,
                2
            )
            : 100;

        return view('frequencia', compact(
            'alunos',
            'presentes',
            'totalAlunos',
            'totalAusentes',
            'aproveitamento',
            'todasTurmas',
            'idTurma'
        ));
    }

    /**
     * Tela do professor
     */
    public function frequenciaProfessor(Request $request)
    {
        // Busca todas as turmas
        $todasTurmas = DB::table('Turmas')->get();

        if ($todasTurmas->isEmpty()) {
            $todasTurmas = DB::table('turmas')->get();
        }

        $idTurma = $request->input(
            'id_turma',
            $todasTurmas->first()->id_turma ?? 1
        );

        $dataFiltro = $request->input(
            'data',
            date('Y-m-d')
        );

        // Busca a aula correspondente
        $aulaAtual = DB::table('Aula')
            ->where(
                'id_turma',
                $idTurma
            )
            ->where(
                'data',
                $dataFiltro
            )
            ->first();

        // Busca os alunos
        $alunos = DB::table('alunos')
            ->join(
                'Usuario',
                'alunos.id_usuario',
                '=',
                'Usuario.id_usuario'
            )
            ->leftJoin(
                'Frequencia',
                function ($join) use ($aulaAtual) {

                    $join->on(
                        'alunos.id_aluno',
                        '=',
                        'Frequencia.id_aluno'
                    );

                    if ($aulaAtual) {

                        $join->where(
                            'Frequencia.id_aula',
                            '=',
                            $aulaAtual->id_aula
                        );

                    } else {

                        $join->whereRaw('1 = 0');
                    }
                }
            )
            ->where(
                'alunos.id_turma',
                $idTurma
            )
            ->select(
                'alunos.id_aluno',
                'Usuario.nome',
                'Frequencia.status'
            )
            ->orderBy(
                'Usuario.nome',
                'asc'
            )
            ->get();

        foreach ($alunos as $aluno) {

            if (is_null($aluno->status)) {
                $aluno->status = 'Presente';
            }
        }

        $totalAlunos = DB::table('alunos')
            ->where(
                'id_turma',
                $idTurma
            )
            ->count();

        if ($aulaAtual) {

            $presentes = DB::table('Frequencia')
                ->where(
                    'id_aula',
                    $aulaAtual->id_aula
                )
                ->where(
                    'status',
                    'Presente'
                )
                ->count();

            $totalAusentes = DB::table('Frequencia')
                ->where(
                    'id_aula',
                    $aulaAtual->id_aula
                )
                ->where(
                    'status',
                    'Falta'
                )
                ->count();

        } else {

            $presentes = $totalAlunos;
            $totalAusentes = 0;
        }

        $totalRegistros = $presentes + $totalAusentes;

        $aproveitamento = $totalRegistros > 0
            ? round(
                ($presentes / $totalRegistros) * 100,
                2
            )
            : 100;

        return view(
            'frequencia-professor',
            compact(
                'alunos',
                'presentes',
                'totalAlunos',
                'totalAusentes',
                'aproveitamento',
                'todasTurmas',
                'idTurma'
            )
        );
    }

    /**
     * Salva a chamada/frequência da turma
     */
    public function salvarFrequencia(Request $request)
    {
        try {

            // --------------------------------------------------------
            // TURMA
            // --------------------------------------------------------

            $idTurma = $request->input(
                'id_turma',
                $request->input('turma_id')
            );

            if (!$idTurma) {

                return response()->json([
                    'success' => false,
                    'message' => 'Turma é obrigatória.'
                ], 422);
            }

            // --------------------------------------------------------
            // DATA
            // --------------------------------------------------------

            $data = $request->input(
                'data',
                now()->format('Y-m-d')
            );

            try {

                $data = \Carbon\Carbon::parse($data)
                    ->format('Y-m-d');

            } catch (\Exception $e) {

                return response()->json([
                    'success' => false,
                    'message' => 'Data inválida.'
                ], 422);
            }

            // --------------------------------------------------------
            // FREQUÊNCIAS
            // --------------------------------------------------------

            /*
             * O Blade envia todos os alunos dentro de:
             *
             * frequencias: [
             *     [
             *         id_aluno: 1,
             *         status: 'Presente'
             *     ],
             *     [
             *         id_aluno: 2,
             *         status: 'Falta'
             *     ]
             * ]
             */

            $frequencias = $request->input(
                'frequencias'
            );

            /*
             * Mantém compatibilidade caso alguma outra parte
             * do sistema envie somente um aluno.
             */

            if (!$frequencias) {

                $idAluno = $request->input(
                    'id_aluno',
                    $request->input('aluno_id')
                );

                if (!$idAluno) {

                    return response()->json([
                        'success' => false,
                        'message' => 'Aluno é obrigatório.'
                    ], 422);
                }

                $frequencias = [
                    [
                        'id_aluno' => $idAluno,
                        'status' => $request->input(
                            'status',
                            'Presente'
                        )
                    ]
                ];
            }

            // --------------------------------------------------------
            // VERIFICA O FORMATO
            // --------------------------------------------------------

            if (!is_array($frequencias)) {

                return response()->json([
                    'success' => false,
                    'message' => 'Formato das frequências inválido.'
                ], 422);
            }

            // --------------------------------------------------------
            // BUSCA OU CRIA A AULA
            // --------------------------------------------------------

            $aula = Aula::firstOrCreate(
                [
                    'id_turma' => $idTurma,
                    'data' => $data,
                ],
                [
                    'disciplina' => 'Frequência Geral',
                ]
            );

            // --------------------------------------------------------
            // SALVA CADA ALUNO
            // --------------------------------------------------------

            $salvos = [];

            foreach ($frequencias as $frequenciaItem) {

                $idAluno = $frequenciaItem['id_aluno'] ?? null;

                // Se não tiver aluno, ignora esse registro
                if (!$idAluno) {
                    continue;
                }

                // ----------------------------------------------------
                // CONFIRMA QUE O ALUNO PERTENCE À TURMA
                // ----------------------------------------------------

                $aluno = Aluno::where(
                    'id_aluno',
                    $idAluno
                )
                    ->where(
                        'id_turma',
                        $idTurma
                    )
                    ->first();

                if (!$aluno) {
                    continue;
                }

                // ----------------------------------------------------
                // STATUS
                // ----------------------------------------------------

                $statusRecebido = strtolower(
                    trim(
                        (string) (
                            $frequenciaItem['status']
                            ?? 'Presente'
                        )
                    )
                );

                if ($statusRecebido === 'presente') {

                    $status = 'Presente';

                } elseif (
                    $statusRecebido === 'ausente' ||
                    $statusRecebido === 'falta'
                ) {

                    $status = 'Falta';

                } else {

                    $status = 'Presente';
                }

                // ----------------------------------------------------
                // SALVA OU ATUALIZA A FREQUÊNCIA
                // ----------------------------------------------------

                $registro = Frequencia::updateOrCreate(
                    [
                        'id_aula' => $aula->id_aula,
                        'id_aluno' => $idAluno,
                    ],
                    [
                        'status' => $status,
                        'observacao' => 'Registrado via SIFE',
                    ]
                );

                $salvos[] = [
                    'id_aluno' => $idAluno,
                    'status' => $registro->status,
                ];
            }

            // --------------------------------------------------------
            // RESPOSTA
            // --------------------------------------------------------

            return response()->json([
                'success' => true,
                'message' => 'Chamada salva com sucesso!',
                'id_aula' => $aula->id_aula,
                'id_turma' => $idTurma,
                'data' => $data,
                'frequencias' => $salvos,
            ], 200);

        } catch (\Throwable $e) {

            \Log::error(
                'ERRO AO SALVAR FREQUÊNCIA',
                [
                    'mensagem' => $e->getMessage(),
                    'arquivo' => $e->getFile(),
                    'linha' => $e->getLine(),
                    'dados' => $request->all(),
                ]
            );

            return response()->json([
                'success' => false,
                'message' => 'Erro ao salvar frequência.',
                'erro' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Lista as tabelas administrativas de turmas
     */
    public function table()
    {
        $totalTurmas = DB::table('Turmas')->count();

        $totalAlunos = DB::table('alunos')->count();

        $mediaAlunos = $totalTurmas > 0
            ? round(
                $totalAlunos / $totalTurmas,
                1
            )
            : 0;

        $capacidadePorTurma = 30;

        $capacidadeTotal = (
            $totalTurmas * $capacidadePorTurma
        ) > 0
            ? round(
                (
                    $totalAlunos /
                    ($totalTurmas * $capacidadePorTurma)
                ) * 100,
                0
            )
            : 0;

        $turmas = DB::table('Turmas')
            ->select(
                'id_turma',
                'nome_turma',
                'serie',
                'periodo'
            )
            ->get();

        return view(
            'table',
            compact(
                'totalTurmas',
                'mediaAlunos',
                'capacidadeTotal',
                'turmas'
            )
        );
    }

    /**
     * Retorna a lista de turmas em JSON para o aplicativo Flutter
     */
    public function getTurmasApi()
    {
        try {

            $turmas = DB::table('Turmas')
                ->select(
                    'id_turma',
                    'nome_turma',
                    'serie',
                    'periodo'
                )
                ->get();

            return response()->json(
                $turmas,
                200
            );

        } catch (\Exception $e) {

            return response()->json([
                'erro' => 'Erro ao buscar turmas',
                'mensagem' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Retorna os alunos de uma turma em JSON
     * para o aplicativo Flutter
     */
    public function getAlunosDaTurma($id)
    {
        try {

            $alunos = DB::table('alunos')
                ->join(
                    'Usuario',
                    'alunos.id_usuario',
                    '=',
                    'Usuario.id_usuario'
                )
                ->where(
                    'alunos.id_turma',
                    $id
                )
                ->select(
                    'alunos.id_aluno',
                    'alunos.id_turma',
                    'alunos.id_usuario',
                    'alunos.data_nascimento',
                    'Usuario.nome'
                )
                ->orderBy(
                    'Usuario.nome',
                    'asc'
                )
                ->get();

            return response()->json(
                $alunos,
                200
            );

        } catch (\Exception $e) {

            return response()->json([
                'erro' => 'Erro ao buscar alunos da turma',
                'mensagem' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Registra presença através do RFID
     */
    public function registrarPresencaRFID(Request $request)
    {
        try {

            // --------------------------------------------------------
            // UID DO CARTÃO
            // --------------------------------------------------------

            $uid = strtoupper(
                trim(
                    $request->input(
                        'uid',
                        ''
                    )
                )
            );

            if (!$uid) {

                return response()->json([
                    'success' => false,
                    'message' => 'UID do cartão é obrigatório.'
                ], 422);
            }

            // --------------------------------------------------------
            // PROCURA O ALUNO PELO RFID
            // --------------------------------------------------------

            $aluno = Aluno::where(
                'rfid_uid',
                $uid
            )->first();

            if (!$aluno) {

                return response()->json([
                    'success' => false,
                    'message' => 'Cartão não cadastrado.',
                    'uid' => $uid
                ], 404);
            }

            // --------------------------------------------------------
            // REGISTRA COMO PRESENTE
            // --------------------------------------------------------

            $frequenciaRequest = new Request([
                'id_turma' => $aluno->id_turma,
                'id_aluno' => $aluno->id_aluno,
                'data' => date('Y-m-d'),
                'status' => 'Presente',
                'observacao' => 'Registrado via RFID',
            ]);

            // Reaproveita a mesma lógica da frequência normal
            $resultado = $this->salvarFrequencia(
                $frequenciaRequest
            );

            return $resultado;

        } catch (\Exception $e) {

            \Log::error(
                'ERRO AO REGISTRAR RFID',
                [
                    'mensagem' => $e->getMessage(),
                    'dados' => $request->all(),
                ]
            );

            return response()->json([
                'success' => false,
                'message' => 'Erro ao registrar presença pelo RFID.',
                'erro' => $e->getMessage(),
            ], 500);
        }
    }
}