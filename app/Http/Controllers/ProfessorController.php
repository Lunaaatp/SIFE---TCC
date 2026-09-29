<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Aluno;
use App\Models\Frequencia;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProfessorController extends Controller
{
    /**
     * Auxiliar interno para detectar o nome correto da tabela no MySQL
     * (trata divergências entre maiúsculas, minúsculas, singular e plural)
     */
    private function getTableName(array $opcoes)
    {
        foreach ($opcoes as $opcao) {
            if (Schema::hasTable($opcao)) {
                return $opcao;
            }
        }
        return $opcoes[0]; // Retorna a primeira por padrão
    }

    /**
     * Exibe a tela de Frequência do Professor (Edição e Lançamento)
     */
    public function frequenciaProfessor(Request $request)
    {
        $tabelaTurmas = $this->getTableName(['turmas', 'Turmas']);
        $tabelaAlunos = $this->getTableName(['alunos', 'Alunos', 'aluno', 'Aluno']);
        $tabelaFrequencias = $this->getTableName(['frequencias', 'Frequencias']);
        $tabelaUsuarios = $this->getTableName(['users', 'Users', 'usuarios', 'Usuarios']);

        // 1. Busca TODAS as turmas direto do banco de dados
        $todasTurmas = DB::table($tabelaTurmas)->get();

        // 2. Captura os filtros da requisição
        $primeiraTurma = $todasTurmas->first();
        $id_turma = $request->get('id_turma', $primeiraTurma->id_turma ?? 1);
        $data = $request->get('data', date('Y-m-d'));

        // 3. Busca os alunos da turma selecionada cruzando com a frequência do dia
        $alunos = DB::table($tabelaAlunos)
            ->leftJoin($tabelaFrequencias, function($join) use ($data, $tabelaAlunos, $tabelaFrequencias) {
                $join->on("{$tabelaAlunos}.id_aluno", '=', "{$tabelaFrequencias}.id_aluno")
                     ->where("{$tabelaFrequencias}.data", '=', $data);
            })
            ->leftJoin($tabelaUsuarios, function($join) use ($tabelaAlunos, $tabelaUsuarios) {
                $join->on("{$tabelaUsuarios}.id", '=', "{$tabelaAlunos}.id_usuario")
                     ->orOn("{$tabelaUsuarios}.id", '=', "{$tabelaAlunos}.user_id");
            })
            ->where("{$tabelaAlunos}.id_turma", $id_turma)
            ->select(
                "{$tabelaAlunos}.id_aluno", 
                DB::raw("COALESCE({$tabelaUsuarios}.name, {$tabelaUsuarios}.nome, {$tabelaAlunos}.nome, {$tabelaAlunos}.nome_aluno, 'Aluno sem nome') as nome"), 
                "{$tabelaFrequencias}.status"
            )
            ->orderBy('nome', 'asc')
            ->get();

        // Se o status for nulo, define 'Presente' por padrão na tela
        foreach ($alunos as $aluno) {
            if (is_null($aluno->status)) {
                $aluno->status = 'Presente';
            }
        }

        // 4. Cálculos dos Cards de Estatísticas
        $totalAlunos = $alunos->count();
        $totalAusentes = $alunos->where('status', 'Falta')->count();
        $presentes = $totalAlunos - $totalAusentes;
        $aproveitamento = $totalAlunos > 0 ? round(($presentes / $totalAlunos) * 100) : 100;

        // 5. Retorna a view injetando os dados
        return view('frequencia-professor', compact(
            'todasTurmas',
            'id_turma',
            'data',
            'alunos', 
            'totalAlunos', 
            'totalAusentes', 
            'presentes', 
            'aproveitamento'
        ));
    }

    /**
     * Salva ou atualiza a chamada enviada via AJAX pelo painel do professor
     */
    public function salvarFrequencia(Request $request)
    {
        $id_turma = $request->id_turma;
        $data = $request->data;
        $frequencias = $request->frequencias;

        if (empty($frequencias)) {
            return response()->json(['message' => 'Nenhum dado de frequência enviado.'], 400);
        }

        $tabelaFrequencias = $this->getTableName(['frequencias', 'Frequencias']);

        // Executa em transação para garantir consistência
        DB::transaction(function () use ($frequencias, $data, $id_turma, $tabelaFrequencias) {
            foreach ($frequencias as $freq) {
                DB::table($tabelaFrequencias)->updateOrInsert(
                    [
                        'id_aluno' => $freq['id_aluno'],
                        'data'     => $data
                    ],
                    [
                        'id_turma'   => $id_turma,
                        'status'     => $freq['status'],
                        'updated_at' => now(),
                        'created_at' => now()
                    ]
                );
            }
        });

        return response()->json(['message' => 'Frequência salva e atualizada com sucesso no sistema SIFE!']);
    }

    public function element()
    {
        $tabelaTurmas = $this->getTableName(['turmas', 'Turmas']);
        $tabelaAlunos = $this->getTableName(['alunos', 'Alunos', 'aluno', 'Aluno']);
        $tabelaFrequencias = $this->getTableName(['frequencias', 'Frequencias']);

        $totalTurmas = DB::table($tabelaTurmas)->count();
        $totalAlunos = DB::table($tabelaAlunos)->count();

        $totalRegistros = DB::table($tabelaFrequencias)->count();
        $totalPresentes = DB::table($tabelaFrequencias)->where('status', 'Presente')->count();

        $mediaPresenca = $totalRegistros > 0 
            ? ($totalPresentes / $totalRegistros) * 100 
            : 0;

        $mediaPresenca = round($mediaPresenca, 2);

        return view('element', compact(
            'totalTurmas',
            'totalAlunos',
            'mediaPresenca'
        ));
    }

    public function exportarDashboardPdf()
    {
        return Pdf::loadView('pdf.dashboard')
            ->setPaper('a4', 'landscape')
            ->download('dashboard.pdf');
    }

    public function turmasProfessor()
    {
        $tabelaTurmas = $this->getTableName(['turmas', 'Turmas']);
        $tabelaAlunos = $this->getTableName(['alunos', 'Alunos', 'aluno', 'Aluno']);
        $tabelaFrequencias = $this->getTableName(['frequencias', 'Frequencias']);

        // 1. Busca as turmas
        $turmas = DB::table($tabelaTurmas)->get();

        // 2. Calcula dados de cada turma com proteções contra erro de banco
        foreach ($turmas as $turma) {
            // Conta alunos
            if (Schema::hasTable($tabelaAlunos)) {
                $turma->total_alunos = DB::table($tabelaAlunos)
                    ->where('id_turma', $turma->id_turma)
                    ->count();
            } else {
                $turma->total_alunos = 0;
            }

            // Conta frequência
            if (Schema::hasTable($tabelaFrequencias)) {
                $totalFrequencias = DB::table($tabelaFrequencias)
                    ->where('id_turma', $turma->id_turma)
                    ->count();

                $totalPresentes = DB::table($tabelaFrequencias)
                    ->where('id_turma', $turma->id_turma)
                    ->where('status', 'Presente')
                    ->count();

                $turma->progresso = $totalFrequencias > 0 
                    ? round(($totalPresentes / $totalFrequencias) * 100) 
                    : 100;
            } else {
                $turma->progresso = 100;
            }
        }

        return view('turmasProfessor', compact('turmas'));
    }

    public function notasProfessor(Request $request)
    {
        $tabelaAlunos = $this->getTableName(['alunos', 'Alunos', 'aluno', 'Aluno']);
        $tabelaTurmas = $this->getTableName(['turmas', 'Turmas']);
        $tabelaUsuarios = $this->getTableName(['users', 'Users', 'usuarios', 'Usuarios']);

        $turmas = DB::table($tabelaTurmas)->get();
        $primeiraTurma = $turmas->first();
        $id_turma = $request->get('id_turma', $primeiraTurma->id_turma ?? 1);
        $bimestre = $request->get('bimestre', 1);

        $alunos = DB::table($tabelaAlunos)
            ->leftJoin($tabelaUsuarios, function($join) use ($tabelaAlunos, $tabelaUsuarios) {
                $join->on("{$tabelaUsuarios}.id", '=', "{$tabelaAlunos}.id_usuario")
                     ->orOn("{$tabelaUsuarios}.id", '=', "{$tabelaAlunos}.user_id");
            })
            ->leftJoin('Nota', function($join) use ($bimestre, $tabelaAlunos) {
                $join->on("{$tabelaAlunos}.id_aluno", '=', "Nota.id_aluno")
                     ->where("Nota.bimestre", '=', $bimestre);
            })
            ->where("{$tabelaAlunos}.id_turma", $id_turma)
            ->select(
                "{$tabelaAlunos}.id_aluno",
                DB::raw("COALESCE({$tabelaUsuarios}.name, {$tabelaUsuarios}.nome, {$tabelaAlunos}.nome, {$tabelaAlunos}.nome_aluno, 'Aluno sem nome') as nome"),
                "Nota.nota"
            )
            ->get();

        return view('notas-professor', compact('turmas', 'alunos', 'id_turma', 'bimestre'));
    }

    /**
     * Salva ou Atualiza as notas no banco de dados
     */
    public function salvarNotas(Request $request)
    {
        $id_turma = $request->id_turma;
        $bimestre = $request->bimestre;
        $notas = $request->notas;

        if (empty($notas)) {
            return back()->with('erro', 'Nenhuma nota enviada para salvar.');
        }

        // Percorre e salva/atualiza a nota na tabela 'Nota' (singular com N maiúsculo)
        foreach ($notas as $id_aluno => $valorNota) {
            if ($valorNota !== null && $valorNota !== '') {
                DB::table('Nota')->updateOrInsert(
                    [
                        'id_aluno' => $id_aluno,
                        'bimestre' => $bimestre,
                    ],
                    [
                        'id_turma'   => $id_turma,
                        'nota'       => $valorNota,
                        'updated_at' => now(),
                        'created_at' => now()
                    ]
                );
            }
        }

        return back()->with('sucesso', "Notas do {$bimestre}º Bimestre salvas com sucesso!");
    }
}