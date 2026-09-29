<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class NotaController extends Controller
{
    public function index()
    {
        $turmas = DB::table('turmas')->get();
        return view('notas-professor', compact('turmas'));
    }

    public function obterAlunosTurma(Request $request)
{
    try {
        $idTurma  = $request->query('id_turma');
        $bimestre = $request->query('bimestre');

        if (!$idTurma) {
            return response()->json([]);
        }

        // 1. Identifica os nomes exatos das tabelas no banco de dados
        $tabelaAluno   = Schema::hasTable('Aluno') ? 'Aluno' : (Schema::hasTable('alunos') ? 'alunos' : 'aluno');
        $tabelaUsuario = Schema::hasTable('Usuario') ? 'Usuario' : (Schema::hasTable('usuario') ? 'usuario' : 'users');

        // 2. Busca os alunos relacionando com os usuários cadastrados
        $alunos = DB::table($tabelaAluno)
            ->leftJoin($tabelaUsuario, "{$tabelaAluno}.id_usuario", '=', "{$tabelaUsuario}.id_usuario")
            ->where("{$tabelaAluno}.id_turma", $idTurma)
            ->select(
                "{$tabelaAluno}.id_aluno",
                "{$tabelaUsuario}.nome as nome_estudante"
            )
            ->get();

        $resultado = [];

        foreach ($alunos as $aluno) {
            // Define o nome (fallback caso não esteja cadastrado na tabela Usuario)
            $nomeFinal = $aluno->nome_estudante ?? 'Aluno sem nome (ID ' . $aluno->id_aluno . ')';

            // 3. Busca a nota na tabela Nota
            $notaAtual = null;
            if (Schema::hasTable('Nota')) {
                $notaReg = DB::table('Nota')
                    ->where('id_aluno', $aluno->id_aluno)
                    ->where('bimestre', $bimestre)
                    ->first();

                if ($notaReg && isset($notaReg->nota)) {
                    $notaAtual = $notaReg->nota;
                }
            }

            $resultado[] = [
                'id'         => $aluno->id_aluno,
                'nome'       => $nomeFinal,
                'nota_atual' => $notaAtual
            ];
        }

        return response()->json($resultado);

    } catch (\Throwable $e) {
        // Retorna o erro detalhado para caso ainda ocorra alguma exceção
        return response()->json([
            'mensagem' => 'Erro interno no servidor',
            'detalhes' => $e->getMessage(),
            'linha'    => $e->getLine()
        ], 500);
    }
}

    public function salvar(Request $request)
{
    $request->validate([
        'id_turma' => 'required',
        'bimestre' => 'required',
        'notas'    => 'required|array',
    ]);

    try {
        foreach ($request->notas as $alunoId => $valorNota) {
            if ($valorNota !== null && $valorNota !== '') {
                // Aponta diretamente para a tabela 'Nota'
                DB::table('Nota')->updateOrInsert(
                    [
                        'id_aluno' => $alunoId,
                        'bimestre' => $request->bimestre,
                    ],
                    [
                        'id_turma'   => $request->id_turma,
                        'nota'       => $valorNota,
                        'updated_at' => now(),
                        'created_at' => now(),
                    ]
                );
            }
        }

        return redirect()->back()->with('success', 'Notas salvas com sucesso!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Erro ao salvar: ' . $e->getMessage());
    }
}
public function salvarNotas(Request $request)
{
    try {
        $idTurma  = $request->input('id_turma');
        $bimestre = $request->input('bimestre');
        $notas    = $request->input('notas'); // Array com [{id_aluno: x, nota: y}]

        if (!$idTurma || !$bimestre || empty($notas)) {
            return response()->json(['erro' => 'Dados incompletos'], 400);
        }

        foreach ($notas as $item) {
            DB::table('Nota')->updateOrInsert(
                [
                    'id_aluno' => $item['id_aluno'],
                    'bimestre' => $bimestre,
                ],
                [
                    'id_turma'   => $idTurma,
                    'nota'       => $item['nota'],
                    'updated_at' => now(),
                    'created_at' => now()
                ]
            );
        }

        return response()->json(['sucesso' => true]);

    } catch (\Throwable $e) {
        return response()->json([
            'erro' => $e->getMessage()
        ], 500);
    }
}
}