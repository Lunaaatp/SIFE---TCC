<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    /**
     * Exibe a página de alteração de senha (view: alterarSenha.blade.php)
     * Rota: GET /alterar-senha  (name: password.show)
     */
    public function show()
    {
        return view('alterarSenha');
    }

    /**
     * Processa a alteração de senha.
     * Rota: POST /alterar-senha  (name: password.update)
     *
     * Campos esperados no form:
     *  - senha_atual
     *  - nova_senha
     *  - nova_senha_confirmation  (exigido pela regra 'confirmed')
     */
    public function update(Request $request)
    {
        $request->validate([
            'senha_atual' => 'required',
            'nova_senha' => 'required|min:6|confirmed',
        ], [
            'senha_atual.required' => 'Informe sua senha atual.',
            'nova_senha.required' => 'Informe a nova senha.',
            'nova_senha.min' => 'A nova senha deve ter pelo menos 6 caracteres.',
            'nova_senha.confirmed' => 'A confirmação da senha não confere.',
        ]);

        $usuario = Auth::user();

        // Segurança extra: garante que há um usuário autenticado,
        // mesmo que a rota seja movida para fora do middleware 'auth' por engano.
        if (!$usuario) {
            return redirect()->route('login')
                ->withErrors(['senha_atual' => 'Sua sessão expirou. Faça login novamente.']);
        }

        // Verifica se a senha atual está correta
        if (!Hash::check($request->senha_atual, $usuario->senha)) {
            return back()
                ->withErrors([
                    'senha_atual' => 'A senha atual está incorreta.'
                ])
                ->withInput();
        }

        // Atualiza a senha no banco
        $usuario->senha = Hash::make($request->nova_senha);
        $usuario->save();

        return back()->with('success', 'Senha alterada com sucesso!');
    }
}