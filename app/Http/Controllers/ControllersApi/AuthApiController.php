<?php

namespace App\Http\Controllers\ControllersApi;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends Controller
{
    /**
     * POST /api/login
     * Body: email, password, role (professor)
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $usuario = Usuario::where('email', $request->email)->first();

        // Mesma resposta para "não existe" e "senha errada" (não revela se o e-mail existe)
        if (!$usuario || !Hash::check($request->password, $usuario->senha)) {
            return response()->json([
                'success' => false,
                'message' => 'E-mail ou senha inválidos.',
            ], 401);
        }

        $role = $request->input('role', 'professor');

        $professor = DB::table('professor')
            ->where('id_usuario', $usuario->id_usuario)
            ->first();

        if ($role === 'professor' && !$professor) {
            return response()->json([
                'success' => false,
                'message' => 'Este usuário não é um professor.',
            ], 403);
        }

        // Um token por aparelho/app: remove o anterior e gera outro
        $usuario->tokens()->where('name', 'flutter-app')->delete();
        $token = $usuario->createToken('flutter-app')->plainTextToken;

        return response()->json([
            'success' => true,
            'token'   => $token,
            'usuario' => [
                'id_usuario'   => $usuario->id_usuario,
                'id_professor' => $professor->id_professor ?? null,
                'nome'         => $usuario->nome,
                'email'        => $usuario->email,
            ],
        ], 200);
    }

    /**
     * POST /api/logout
     */
    public function logout(Request $request)
    {
        $request->user()?->currentAccessToken()?->delete();

        return response()->json(['success' => true]);
    }
}
