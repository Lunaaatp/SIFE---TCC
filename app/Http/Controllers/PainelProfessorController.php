<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PainelProfessorController extends Controller
{
    public function index()
    {
        $totalTurmas = DB::table('turmas')
            ->leftJoin('alunos', 'turmas.id_turma', '=', 'alunos.id_turma')
            ->select(
                'turmas.id_turma as id',
                'turmas.nome_turma',
                DB::raw('COUNT(alunos.id_aluno) as alunos_count')
            )
            ->groupBy('turmas.id_turma', 'turmas.nome_turma')
            ->get();

        return view('painel-professor', compact('totalTurmas'));
    }
}