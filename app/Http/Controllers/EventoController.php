<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Exception;

class EventoController extends Controller
{
    /**
     * Exibe a listagem dos eventos na visão administrativa/geral.
     */
    public function index() 
    {
        try {
            // Busca todos os eventos cadastrados
            $eventos = Evento::orderBy('data', 'asc')->get();
        } catch (Exception $e) {
            $eventos = collect();
        }

        return view('index', compact('eventos'));
    }

    /**
     * Exibe a listagem dos eventos no painel do Aluno.
     */
    public function eventosAluno()
{
    try {
        // Trazer todos os eventos cadastrados
        $eventos = Evento::all();
    } catch (\Exception $e) {
        $eventos = collect();
    }

    return view('eventosAluno', compact('eventos'));
}

    /**
     * Exibe o formulário de cadastro de evento.
     */
    public function create()
    {
        return view('adicionar-evento');
    }

    /**
     * Salva o novo evento no banco de dados.
     */
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $validated = $request->validate([
            'titulo'      => 'required|string|max:255',
            'categoria'   => 'nullable|string',
            'publico'     => 'nullable|string|max:255',
            'data'        => 'required|date',
            'hora_inicio' => 'required',
            'hora_fim'    => 'nullable',
            'local'       => 'required|string|max:255',
            'descricao'   => 'nullable|string',
        ]);

        // Define valor padrão para categoria caso venha vazia
        $validated['categoria'] = $request->input('categoria', 'academic');

        try {
            // Grava no banco de dados
            Evento::create($validated);

            return redirect()->route('index')->with('success', 'Evento cadastrado com sucesso!');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Erro ao salvar o evento: ' . $e->getMessage());
        }
    }

    /**
     * Exibe os detalhes de um evento específico.
     */
    public function show($id)
    {
        $evento = Evento::findOrFail($id);
        return view('eventos.show', compact('evento'));
    }

    /**
     * Remove um evento do banco de dados.
     */
    public function destroy($id)
    {
        try {
            $evento = Evento::findOrFail($id);
            $evento->delete();

            return redirect()->back()->with('success', 'Evento removido com sucesso!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Erro ao remover o evento.');
        }
    }
}