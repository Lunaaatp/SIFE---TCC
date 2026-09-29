<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | COORDENADOR ÚNICO
    |--------------------------------------------------------------------------
    |
    | Somente o usuário com este e-mail poderá entrar como coordenador.
    |
    */

    private const EMAIL_COORDENADOR = 'coordenador@sife.com';


    /*
    |--------------------------------------------------------------------------
    | CADASTRO
    |--------------------------------------------------------------------------
    |
    | O cadastro público permite somente:
    | - Professor
    | - Aluno
    |
    | Coordenador NÃO pode ser criado pela tela de cadastro.
    |
    */

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:usuario,email',
            'password' => 'required|string|min:6',
            'role' => 'required|in:aluno,professor',
        ], [
            'name.required' => 'O nome é obrigatório.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Digite um e-mail válido.',
            'email.unique' => 'Este e-mail já está cadastrado.',
            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha deve ter pelo menos 6 caracteres.',
            'role.required' => 'Selecione o tipo de usuário.',
            'role.in' => 'Tipo de usuário inválido.',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Cria o usuário
        |--------------------------------------------------------------------------
        */

        $idUsuario = DB::table('usuario')->insertGetId([
            'nome' => $request->name,
            'email' => strtolower(trim($request->email)),
            'senha' => Hash::make($request->password),
            'data_cadastro' => now()->format('Y-m-d'),
        ]);

        /*
        |--------------------------------------------------------------------------
        | Professor
        |--------------------------------------------------------------------------
        */

        if ($request->role === 'professor') {

            DB::table('professor')->insert([
                'id_usuario' => $idUsuario,
                'telefone' => null,
                'disciplina_principal' => null,
                'tempo_servico' => null,
                'instituicao' => null,
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Aluno
        |--------------------------------------------------------------------------
        */

        elseif ($request->role === 'aluno') {

            DB::table('alunos')->insert([
                'id_usuario' => $idUsuario,
                'id_turma' => null,
                'data_nascimento' => null,
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Login automático
        |--------------------------------------------------------------------------
        */

        $usuario = DB::table('usuario')
            ->where('id_usuario', $idUsuario)
            ->first();

        if (!$usuario) {
            return back()->withErrors([
                'email' => 'Não foi possível criar o usuário.'
            ])->withInput();
        }

        Auth::login($usuario);

        $request->session()->regenerate();

        /*
        |--------------------------------------------------------------------------
        | Redirecionamento
        |--------------------------------------------------------------------------
        */

        if ($request->role === 'professor') {
            return redirect()->route('painel-professor');
        }

        if ($request->role === 'aluno') {
            return redirect()->route('eventosAluno');
        }

        return redirect()->route('login');
    }


    /*
    |--------------------------------------------------------------------------
    | LOGIN
    |--------------------------------------------------------------------------
    */

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:aluno,professor,coordenador',
        ], [
            'email.required' => 'Informe seu e-mail.',
            'email.email' => 'Digite um e-mail válido.',
            'password.required' => 'Informe sua senha.',
            'role.required' => 'Selecione como deseja acessar.',
            'role.in' => 'Tipo de acesso inválido.',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Procura o usuário
        |--------------------------------------------------------------------------
        */

        $usuario = DB::table('usuario')
            ->where('email', strtolower(trim($request->email)))
            ->first();

        if (!$usuario) {
            return back()
                ->withErrors([
                    'email' => 'E-mail ou senha incorretos.'
                ])
                ->withInput($request->only('email', 'role'));
        }

        /*
        |--------------------------------------------------------------------------
        | Verifica a senha
        |--------------------------------------------------------------------------
        */

        if (!Hash::check($request->password, $usuario->senha)) {
            return back()
                ->withErrors([
                    'email' => 'E-mail ou senha incorretos.'
                ])
                ->withInput($request->only('email', 'role'));
        }


        /*
        |--------------------------------------------------------------------------
        | LOGIN COMO COORDENADOR
        |--------------------------------------------------------------------------
        |
        | Somente o e-mail definido em EMAIL_COORDENADOR pode entrar
        | como coordenador.
        |
        */

        if ($request->role === 'coordenador') {

            if (
                strtolower(trim($usuario->email))
                !== strtolower(self::EMAIL_COORDENADOR)
            ) {
                return back()
                    ->withErrors([
                        'email' => 'Este usuário não possui acesso de Coordenador.'
                    ])
                    ->withInput($request->only('email', 'role'));
            }

            Auth::login(
                $usuario,
                $request->boolean('remember')
            );

            $request->session()->regenerate();

            return redirect()->route('frequencia');
        }


        /*
        |--------------------------------------------------------------------------
        | LOGIN COMO PROFESSOR
        |--------------------------------------------------------------------------
        */

        if ($request->role === 'professor') {

            $isProfessor = DB::table('professor')
                ->where('id_usuario', $usuario->id_usuario)
                ->exists();

            if (!$isProfessor) {
                return back()
                    ->withErrors([
                        'email' => 'Este usuário não está cadastrado como Professor.'
                    ])
                    ->withInput($request->only('email', 'role'));
            }

            Auth::login(
                $usuario,
                $request->boolean('remember')
            );

            $request->session()->regenerate();

            return redirect()->route('painel-professor');
        }


        /*
        |--------------------------------------------------------------------------
        | LOGIN COMO ALUNO
        |--------------------------------------------------------------------------
        */

        if ($request->role === 'aluno') {

            $isAluno = DB::table('alunos')
                ->where('id_usuario', $usuario->id_usuario)
                ->exists();

            if (!$isAluno) {
                return back()
                    ->withErrors([
                        'email' => 'Este usuário não está cadastrado como Aluno.'
                    ])
                    ->withInput($request->only('email', 'role'));
            }

            Auth::login(
                $usuario,
                $request->boolean('remember')
            );

            $request->session()->regenerate();

            return redirect()->route('eventosAluno');
        }


        /*
        |--------------------------------------------------------------------------
        | Caso inesperado
        |--------------------------------------------------------------------------
        */

        return back()
            ->withErrors([
                'email' => 'Tipo de acesso inválido.'
            ])
            ->withInput($request->only('email', 'role'));
    }


    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }


    /*
    |--------------------------------------------------------------------------
    | LOGIN DA API
    |--------------------------------------------------------------------------
    */

    public function apiLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:professor,aluno,coordenador',
        ]);

        $usuario = DB::table('usuario')
            ->where('email', strtolower(trim($request->email)))
            ->first();

        if (!$usuario || !Hash::check($request->password, $usuario->senha)) {
            return response()->json([
                'success' => false,
                'message' => 'E-mail ou senha incorretos.'
            ], 401);
        }


        /*
        |--------------------------------------------------------------------------
        | API - Coordenador
        |--------------------------------------------------------------------------
        */

        if ($request->role === 'coordenador') {

            if (
                strtolower(trim($usuario->email))
                !== strtolower(self::EMAIL_COORDENADOR)
            ) {
                return response()->json([
                    'success' => false,
                    'message' => 'Este usuário não possui acesso de Coordenador.'
                ], 403);
            }

            return response()->json([
                'success' => true,
                'message' => 'Login realizado com sucesso.',
                'tipo' => 'coordenador',
                'id_usuario' => $usuario->id_usuario,
                'nome' => $usuario->nome,
                'email' => $usuario->email,
            ]);
        }


        /*
        |--------------------------------------------------------------------------
        | API - Professor
        |--------------------------------------------------------------------------
        */

        if ($request->role === 'professor') {

            $professor = DB::table('professor')
                ->where('id_usuario', $usuario->id_usuario)
                ->first();

            if (!$professor) {
                return response()->json([
                    'success' => false,
                    'message' => 'Este usuário não é um Professor.'
                ], 403);
            }

            return response()->json([
                'success' => true,
                'message' => 'Login realizado com sucesso.',
                'tipo' => 'professor',
                'id_usuario' => $usuario->id_usuario,
                'id_professor' => $professor->id_professor,
                'nome' => $usuario->nome,
                'email' => $usuario->email,
            ]);
        }


        /*
        |--------------------------------------------------------------------------
        | API - Aluno
        |--------------------------------------------------------------------------
        */

        if ($request->role === 'aluno') {

            $aluno = DB::table('alunos')
                ->where('id_usuario', $usuario->id_usuario)
                ->first();

            if (!$aluno) {
                return response()->json([
                    'success' => false,
                    'message' => 'Este usuário não é um Aluno.'
                ], 403);
            }

            return response()->json([
                'success' => true,
                'message' => 'Login realizado com sucesso.',
                'tipo' => 'aluno',
                'id_usuario' => $usuario->id_usuario,
                'id_aluno' => $aluno->id_aluno,
                'nome' => $usuario->nome,
                'email' => $usuario->email,
            ]);
        }


        return response()->json([
            'success' => false,
            'message' => 'Tipo de acesso inválido.'
        ], 400);
    }
}