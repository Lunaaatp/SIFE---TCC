<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | CADASTRO
    |--------------------------------------------------------------------------
    */

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:usuario,email',
            'password' => 'required|string|min:6',
            'role' => 'required|in:aluno,professor,coordenador',
        ]);

        DB::beginTransaction();

        try {
            // Cria o usuário
            $idUsuario = DB::table('usuario')->insertGetId([
                'nome' => $request->name,
                'email' => $request->email,
                'senha' => Hash::make($request->password),
                'data_cadastro' => now()->format('Y-m-d'),
            ]);

            /*
            |--------------------------------------------------------------------------
            | PROFESSOR
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
            | ALUNO
            |--------------------------------------------------------------------------
            */

            elseif ($request->role === 'aluno') {

                DB::table('alunos')->insert([
                    'id_usuario' => $idUsuario,
                    'id_turma' => 1,
                    'data_nascimento' => null,
                ]);
            }

            /*
            |--------------------------------------------------------------------------
            | COORDENADOR
            |--------------------------------------------------------------------------
            |
            | Não precisa inserir em outra tabela.
            | Se o usuário não é professor nem aluno,
            | ele é considerado coordenador.
            |
            */

            elseif ($request->role === 'coordenador') {
                // Não precisa fazer nada aqui.
            }

            DB::commit();

            // Busca o usuário criado
            $usuario = Usuario::find($idUsuario);

            if (!$usuario) {
                return back()
                    ->withErrors([
                        'error' => 'Usuário criado, mas não foi possível iniciar a sessão.'
                    ])
                    ->withInput();
            }

            // Faz login automático
            Auth::login($usuario);

            // Regenera a sessão
            $request->session()->regenerate();

            /*
            |--------------------------------------------------------------------------
            | REDIRECIONAMENTO
            |--------------------------------------------------------------------------
            */

            switch ($request->role) {

                case 'professor':
                    return redirect()->route('painel-professor');

                case 'coordenador':
                    return redirect()->route('frequencia');

                case 'aluno':
                    return redirect()->route('eventosAluno');

                default:
                    Auth::logout();

                    $request->session()->invalidate();
                    $request->session()->regenerateToken();

                    return redirect()->route('login');
            }

        } catch (\Throwable $e) {

            DB::rollBack();

            return back()
                ->withErrors([
                    'error' => 'Erro ao cadastrar usuário: ' . $e->getMessage()
                ])
                ->withInput();
        }
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
        ]);

        // Procura o usuário
        $usuario = Usuario::where('email', $request->email)->first();

        // Verifica usuário e senha
        if (!$usuario || !Hash::check($request->password, $usuario->senha)) {

            return back()
                ->withErrors([
                    'email' => 'E-mail ou senha incorretos.'
                ])
                ->withInput($request->only('email'));
        }


        /*
        |--------------------------------------------------------------------------
        | PROFESSOR
        |--------------------------------------------------------------------------
        */

        if ($request->role === 'professor') {

            $isProfessor = DB::table('professor')
                ->where('id_usuario', $usuario->id_usuario)
                ->exists();

            if (!$isProfessor) {

                return back()
                    ->withErrors([
                        'email' => 'Este usuário não é um Professor.'
                    ])
                    ->withInput($request->only('email'));
            }

            Auth::login($usuario, $request->has('remember'));

            $request->session()->regenerate();

            return redirect()->route('painel-professor');
        }


        /*
        |--------------------------------------------------------------------------
        | ALUNO
        |--------------------------------------------------------------------------
        */

        if ($request->role === 'aluno') {

            $isAluno = DB::table('alunos')
                ->where('id_usuario', $usuario->id_usuario)
                ->exists();

            if (!$isAluno) {

                return back()
                    ->withErrors([
                        'email' => 'Este usuário não é um Aluno.'
                    ])
                    ->withInput($request->only('email'));
            }

            Auth::login($usuario, $request->has('remember'));

            $request->session()->regenerate();

            return redirect()->route('eventosAluno');
        }


        /*
        |--------------------------------------------------------------------------
        | COORDENADOR
        |--------------------------------------------------------------------------
        |
        | Coordenador é o usuário que NÃO existe
        | na tabela professor e NÃO existe
        | na tabela alunos.
        |
        */

        if ($request->role === 'coordenador') {

            $isProfessor = DB::table('professor')
                ->where('id_usuario', $usuario->id_usuario)
                ->exists();

            $isAluno = DB::table('alunos')
                ->where('id_usuario', $usuario->id_usuario)
                ->exists();

            // Se for professor ou aluno, não pode entrar como coordenador
            if ($isProfessor || $isAluno) {

                return back()
                    ->withErrors([
                        'email' => 'Este usuário não é um Coordenador.'
                    ])
                    ->withInput($request->only('email'));
            }

            Auth::login($usuario, $request->has('remember'));

            $request->session()->regenerate();

            return redirect()->route('frequencia');
        }


        return back()
            ->withErrors([
                'email' => 'Não foi possível realizar o login.'
            ])
            ->withInput($request->only('email'));
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
        'password' => 'required|string',
        'role' => 'required|string',
    ]);

    // Busca o usuário pelo e-mail
    $usuario = Usuario::where('email', $request->email)->first();

    // Usuário não encontrado
    if (!$usuario) {
        return response()->json([
            'success' => false,
            'message' => 'E-mail ou senha incorretos.',
        ], 401);
    }

    // Verifica a senha
    if (!Hash::check($request->password, $usuario->senha)) {
        return response()->json([
            'success' => false,
            'message' => 'E-mail ou senha incorretos.',
        ], 401);
    }

    // Se o login for de professor, verifica a tabela professor
    if ($request->role === 'professor') {

        $professor = DB::table('professor')
            ->where('id_usuario', $usuario->id_usuario)
            ->first();

        if (!$professor) {
            return response()->json([
                'success' => false,
                'message' => 'Este usuário não possui acesso de professor.',
            ], 403);
        }

        return response()->json([
            'success' => true,
            'message' => 'Login realizado com sucesso.',
            'usuario' => [
                'id_usuario' => $usuario->id_usuario,
                'nome' => $usuario->nome,
                'email' => $usuario->email,
                'tipo' => 'professor',
            ],
        ], 200);
    }

    return response()->json([
        'success' => false,
        'message' => 'Tipo de usuário não permitido.',
    ], 403);
}

    
}