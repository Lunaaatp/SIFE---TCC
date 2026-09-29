<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    /**
     * Lista os materiais
     */
    public function index()
    {
        $materiais = Material::orderBy(
            'created_at',
            'desc'
        )->get();

        return view(
            'materiais-professor',
            compact('materiais')
        );
    }

    /**
     * Tela para adicionar material
     */
    public function create()
    {
        return view(
            'materiais-professor-adicionar'
        );
    }

    /**
     * Salva o material
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => [
                'required',
                'string',
                'max:255'
            ],

            'arquivo' => [
                'required',
                'file',
                'max:10240'
            ],
        ]);

        $caminhoArquivo = $request
            ->file('arquivo')
            ->store(
                'materiais',
                'public'
            );

        Material::create([
            'titulo' => $request->titulo,
            'arquivo' => $caminhoArquivo,
        ]);

        return redirect()
            ->route('materiais-professor')
            ->with(
                'success',
                'Material enviado com sucesso!'
            );
    }

    /**
     * Exclui o material
     */
    public function destroy($id)
    {
        $material = Material::findOrFail($id);

        if (
            $material->arquivo &&
            Storage::disk('public')->exists(
                $material->arquivo
            )
        ) {
            Storage::disk('public')->delete(
                $material->arquivo
            );
        }

        $material->delete();

        return redirect()
            ->route('materiais-professor')
            ->with(
                'success',
                'Material removido com sucesso!'
            );
    }
}