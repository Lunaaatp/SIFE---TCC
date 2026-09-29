<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        // Exemplo básico de atualização
        $user = Auth::user();

        if ($user) {
            $user->update([
                'nome' => $request->input('nome'),
                'email' => $request->input('email'),
            ]);
        }

        return redirect()->route('profile')
            ->with('success', 'Perfil atualizado com sucesso!');
    }

    public function password()
    {
        return view('password');
    }
}