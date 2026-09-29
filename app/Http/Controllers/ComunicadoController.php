<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComunicadoController extends Controller
{
    public function index()
    {
        // Busca apenas as turmas cadastradas no banco
        $turmas = DB::table('turmas')
            ->select('id_turma', 'nome_turma')
            ->get();

        // Busca o histórico real de comunicados
        $comunicados = DB::table('comunicados')
            ->leftJoin('turmas', 'comunicados.turma_id', '=', 'turmas.id_turma')
            ->select(
                'comunicados.*',
                'turmas.nome_turma'
            )
            ->orderBy('comunicados.created_at', 'desc')
            ->get();

        return view('comunicados-professor', compact('turmas', 'comunicados'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'mensagem' => 'required|string',
            'turma_id' => 'nullable'
        ]);

        DB::table('comunicados')->insert([
            'turma_id' => $request->turma_id,
            'titulo' => $request->titulo,
            'mensagem' => $request->mensagem,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Comunicado enviado aos alunos!');
    }
}