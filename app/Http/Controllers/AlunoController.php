<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;

class AlunoController extends Controller
{
    /**
     * Lista de alunos
     */
    public function index(Request $request)
    {
        $query = Aluno::query()
            ->select(
    'alunos.*',
    'usuario.nome as nome',
    'usuario.cpf as cpf',
    'usuario.email as email_responsavel',
    'turmas.nome_turma as turma_nome'
)
            ->leftJoin(
                'usuario',
                'alunos.id_usuario',
                '=',
                'usuario.id_usuario'
            )
            ->leftJoin(
                'turmas',
                'alunos.id_turma',
                '=',
                'turmas.id_turma'
            );

        // Filtro de busca
        if ($request->filled('busca')) {

            $busca = $request->busca;

            $query->where(function ($q) use ($busca) {

                $q->where(
                    'usuario.nome',
                    'LIKE',
                    '%' . $busca . '%'
                )
                ->orWhere(
                    'alunos.id_aluno',
                    'LIKE',
                    '%' . $busca . '%'
                );

            });
        }

        // Filtro de turma
        if ($request->filled('turma')) {

            $query->where(
                'alunos.id_turma',
                $request->turma
            );
        }

        

        // Paginação
        $alunos = $query
            ->paginate(10)
            ->appends($request->all());

        // Cards
        $totalAlunos = Aluno::count();

        $novosAlunos = $totalAlunos;

        $aguardandoDocumentos = 0;

        // Todas as turmas
        $todasTurmas = Turma::all();

        return view(
            'typography',
            compact(
                'alunos',
                'totalAlunos',
                'novosAlunos',
                'aguardandoDocumentos',
                'todasTurmas'
            )
        );
    }


    /**
     * Tela de cadastro
     */
    public function criar()
    {
        $todasTurmas = Turma::all();

        return view(
            'criar-aluno',
            compact('todasTurmas')
        );
    }


    /**
 * Salvar aluno
 */
public function salvar(Request $request)
{
    $request->validate([
        'nome' => 'required|string|max:255',

        'cpf' => [
            'required',
            'string',
            'max:14',
            'unique:usuario,cpf'
        ],

        'email_responsavel' => 'required|email',

        'data_nascimento' => 'required|date',

        'id_turma' => 'required',

        'rfid_uid' => [
            'nullable',
            'string',
            'max:50',
            'unique:alunos,rfid_uid',
        ],
    ]);

    DB::beginTransaction();

    try {

        // =====================================================
        // NORMALIZAR CPF
        // =====================================================

        $cpf = preg_replace(
            '/[^0-9]/',
            '',
            $request->cpf
        );

        // =====================================================
        // NORMALIZAR RFID
        // =====================================================

        $rfidUid = null;

        if ($request->filled('rfid_uid')) {

            $rfidUid = strtoupper(
                trim($request->rfid_uid)
            );
        }

        // =====================================================
        // CRIAR USUÁRIO
        // =====================================================

        $usuario = new Usuario();

        $usuario->nome = $request->nome;

        $usuario->cpf = $cpf;

        $usuario->email = $request->email_responsavel;

        $usuario->senha = Hash::make('123456');

        $usuario->data_cadastro = now();

        $usuario->save();

        // =====================================================
        // CRIAR ALUNO
        // =====================================================

        $aluno = new Aluno();

        $aluno->id_usuario = $usuario->id_usuario;

        $aluno->id_turma = $request->id_turma;

        $aluno->data_nascimento = $request->data_nascimento;

        // =====================================================
        // RFID
        // =====================================================

        $aluno->rfid_uid = $rfidUid;

        $aluno->save();

        // =====================================================
        // FINALIZAR
        // =====================================================

        DB::commit();

        return redirect()
            ->route('typography')
            ->with(
                'sucesso',
                'Aluno cadastrado com sucesso!'
            );

    } catch (\Exception $e) {

        DB::rollBack();

        return redirect()
            ->back()
            ->withInput()
            ->withErrors([
                'erro' =>
                    'Erro ao salvar no banco: ' .
                    $e->getMessage()
            ]);
    }
}

    /**
     * Visualizar aluno
     *
     * Retorna os dados do aluno em JSON.
     * É utilizado pelo botão 👁️ da tela de gestão.
     */
    public function visualizar($id)
    {
        $aluno = Aluno::query()
            ->select(
                'alunos.*',
                'usuario.nome as nome',
                'usuario.email as email_responsavel',
                'turmas.nome_turma as turma_nome'
            )
            ->leftJoin(
                'usuario',
                'alunos.id_usuario',
                '=',
                'usuario.id_usuario'
            )
            ->leftJoin(
                'turmas',
                'alunos.id_turma',
                '=',
                'turmas.id_turma'
            )
            ->where(
                'alunos.id_aluno',
                $id
            )
            ->first();

        if (!$aluno) {

            return response()->json([
                'success' => false,
                'message' => 'Aluno não encontrado.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'aluno' => $aluno
        ]);
    }


    /**
     * Atualizar aluno
     */
    public function atualizar(
        Request $request,
        $id
    ) {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14',
            'email_responsavel' => 'required|email',
            'data_nascimento' => 'required|date',
            'id_turma' => 'required',
        ]);

        DB::beginTransaction();

        try {

            // Procurar aluno
            $aluno = Aluno::where(
                'id_aluno',
                $id
            )->first();

            if (!$aluno) {

                DB::rollBack();

                return redirect()
                    ->route('typography')
                    ->withErrors([
                        'erro' =>
                            'Aluno não encontrado.'
                    ]);
            }


            // Atualizar aluno
            $aluno->id_turma = $request->id_turma;
            $aluno->data_nascimento =
                $request->data_nascimento;

            $aluno->save();


            // Atualizar usuário relacionado
            $usuario = Usuario::where(
                'id_usuario',
                $aluno->id_usuario
            )->first();

            if ($usuario) {

                $usuario->nome =
                    $request->nome;

                $usuario->email =
                    $request->email_responsavel;

                $usuario->save();
            }


            DB::commit();

            return redirect()
                ->route('typography')
                ->with(
                    'sucesso',
                    'Aluno atualizado com sucesso!'
                );

        } catch (\Exception $e) {

            DB::rollBack();

            return redirect()
                ->route('typography')
                ->withErrors([
                    'erro' =>
                        'Erro ao atualizar aluno: ' .
                        $e->getMessage()
                ]);
        }
    }


    /**
     * Notas do aluno logado
     */
    public function notasAluno()
    {
        $usuarioId = auth()->id();

        // A tabela correta no banco é "alunos"
        $aluno = DB::table('alunos')
            ->where(
                'id_usuario',
                $usuarioId
            )
            ->first();

        if (!$aluno) {

            $notas = collect();

            $mediaGeral = '0.0';

            return view(
                'notasAluno',
                compact(
                    'notas',
                    'mediaGeral'
                )
            );
        }

        // Busca as notas do aluno
        $notas = DB::table('notas')
            ->leftJoin(
                'materia',
                'notas.id_materia',
                '=',
                'materia.id_materia'
            )
            ->where(
                'notas.id_aluno',
                $aluno->id_aluno
            )
            ->select(
                'notas.*',
                'materia.nome as disciplina'
            )
            ->get();

        // Média geral
        $mediaGeral = $notas->isNotEmpty()
            ? number_format(
                $notas->avg('media_final'),
                1
            )
            : '0.0';

        return view(
            'notasAluno',
            compact(
                'notas',
                'mediaGeral'
            )
        );
    }


    /**
     * API de alunos
     */
    public function apiIndex(Request $request)
    {
        $idTurma = $request->input(
            'id_turma',
            1
        );

        $alunos = DB::table('alunos')
            ->leftJoin(
                'usuario',
                'alunos.id_usuario',
                '=',
                'usuario.id_usuario'
            )
            ->leftJoin(
                'turmas',
                'alunos.id_turma',
                '=',
                'turmas.id_turma'
            )
            ->where(
                'alunos.id_turma',
                $idTurma
            )
            ->select(
                'alunos.id_aluno',
                'usuario.nome',
                'usuario.email',
                'turmas.nome_turma'
            )
            ->orderBy(
                'usuario.nome'
            )
            ->get();

        return response()->json([
            'success' => true,
            'alunos' => $alunos
        ]);
    }


    /**
     * Cadastro com foto
     */
    public function cadastrarComFoto(
        Request $request
    ) {
        $request->validate([
            'id_aluno' =>
                'required|integer|exists:alunos,id_aluno',

            'foto' =>
                'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        $aluno = DB::table('alunos')
            ->where(
                'id_aluno',
                $request->id_aluno
            )
            ->first();

        if (!$aluno) {

            return response()->json([
                'success' => false,
                'mensagem' =>
                    'Aluno não encontrado.'
            ], 404);
        }

        $caminhoFoto = $request
            ->file('foto')
            ->store(
                'alunos_fotos',
                'public'
            );

        DB::table(
            'reconhecimento_facial'
        )->updateOrInsert(
            [
                'id_aluno' =>
                    $request->id_aluno
            ],
            [
                'embedding' =>
                    json_encode([]),

                'updated_at' =>
                    now(),
            ]
        );

        return response()->json([
            'success' => true,

            'mensagem' =>
                'Foto do aluno cadastrada com sucesso!',

            'id_aluno' =>
                $request->id_aluno,

            'foto_url' =>
                asset(
                    'storage/' .
                    $caminhoFoto
                )
        ], 201);
    }


    /**
     * Gerar PDF das notas
     */
    public function gerarPdfNotas()
    {
        $usuarioId = auth()->id();

        // Tabela correta: alunos
        $aluno = DB::table('alunos')
            ->where(
                'id_usuario',
                $usuarioId
            )
            ->first();

        if (!$aluno) {

            $notas = collect();

            $mediaGeral = '0.0';

        } else {

            $notas = DB::table('notas')
                ->leftJoin(
                    'materia',
                    'notas.id_materia',
                    '=',
                    'materia.id_materia'
                )
                ->where(
                    'notas.id_aluno',
                    $aluno->id_aluno
                )
                ->select(
                    'notas.*',
                    'materia.nome as disciplina'
                )
                ->get();

            $mediaGeral = $notas->isNotEmpty()
                ? number_format(
                    $notas->avg('media_final'),
                    1
                )
                : '0.0';
        }

        $pdf = Pdf::loadView(
            'pdf.notas',
            compact(
                'notas',
                'mediaGeral'
            )
        );

        $pdf->setPaper(
            'a4',
            'portrait'
        );

        return $pdf->download(
            'Boletim.pdf'
        );
    }


/**
 * Cancelar leitura RFID
 */
public function cancelarCadastroRFID()
{
    cache()->forget('rfid_modo');
    cache()->forget('rfid_ultimo_uid');

    return response()->json([
        'success' => true,
        'message' =>
            'Leitura RFID cancelada.'
    ]);
}
}