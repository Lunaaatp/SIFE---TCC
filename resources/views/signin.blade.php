<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Login - SIFE</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7f9;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            width: 100%;
            max-width: 500px;
            padding: 20px;
        }

        .login-card {
            background: #ffffff;
            border-radius: 18px;
            padding: 40px;

            box-shadow:
                0 8px 30px rgba(0, 0, 0, 0.10);
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h1 {
            margin: 0;

            color: #d32f2f;

            font-size: 42px;

            font-weight: 800;
        }

        .logo p {
            margin-top: 5px;

            color: #777;

            font-size: 14px;
        }

        .title {
            text-align: center;

            margin-bottom: 25px;
        }

        .title h2 {
            color: #222;

            font-size: 26px;

            font-weight: 700;

            margin-bottom: 8px;
        }

        .title p {
            color: #777;

            font-size: 14px;
        }

        .form-label {
            color: #333;

            font-weight: 600;

            margin-bottom: 7px;
        }

        .form-control-custom {
            width: 100%;

            height: 48px;

            border: 1px solid #ddd;

            border-radius: 9px;

            padding: 0 14px;

            outline: none;

            transition: 0.2s;

            background: #fff;
        }

        .form-control-custom:focus {
            border-color: #d32f2f;

            box-shadow:
                0 0 0 3px rgba(211, 47, 47, 0.10);
        }

        .remember-area {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-top: 15px;

            margin-bottom: 20px;
        }

        .remember {
            display: flex;

            align-items: center;

            gap: 7px;

            color: #666;

            font-size: 14px;
        }

        .remember input {
            cursor: pointer;
        }

        .forgot-password {
            color: #d32f2f;

            text-decoration: none;

            font-size: 14px;

            font-weight: 600;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;

            height: 48px;

            border: none;

            border-radius: 9px;

            background: #d32f2f;

            color: white;

            font-weight: 700;

            transition: 0.2s;
        }

        .btn-login:hover {
            background: #b71c1c;
        }

        .auth-footer {
            text-align: center;

            margin-top: 25px;

            color: #666;

            font-size: 14px;
        }

        .auth-footer a {
            color: #d32f2f;

            text-decoration: none;

            font-weight: 700;
        }

        .auth-footer a:hover {
            text-decoration: underline;
        }

        .alert {
            font-size: 14px;
        }

    </style>

</head>

<body>

<div class="login-container">

    <div class="login-card">


        {{-- LOGO --}}

        <div class="logo">

            <h1>SIFE</h1>

            <p>
                Sistema Inteligente de Frequência Escolar
            </p>

        </div>


        {{-- TÍTULO --}}

        <div class="title">

            <h2>Bem-vindo!</h2>

            <p>
                Entre na sua conta para continuar
            </p>

        </div>


        {{-- ERROS --}}

        @if ($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach ($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        {{-- SUCESSO --}}

        @if (session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif


        {{-- FORMULÁRIO --}}

        <form
            action="{{ route('login.auth') }}"
            method="POST"
        >

            @csrf


            {{-- E-MAIL --}}

            <div class="mb-3">

                <label
                    for="email"
                    class="form-label"
                >
                    E-mail
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control-custom"
                    value="{{ old('email') }}"
                    placeholder="Digite seu e-mail"
                    required
                >

            </div>


            {{-- SENHA --}}

            <div class="mb-3">

                <label
                    for="password"
                    class="form-label"
                >
                    Senha
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    class="form-control-custom"
                    placeholder="Digite sua senha"
                    required
                >

            </div>


            {{-- TIPO DE ACESSO --}}

            <div class="mb-3">

                <label
                    for="role"
                    class="form-label"
                >
                    Tipo de acesso
                </label>

                <select
                    name="role"
                    id="role"
                    class="form-control-custom"
                    required
                >

                    <option
                        value=""
                        disabled
                        {{ old('role') ? '' : 'selected' }}
                    >
                        Acessar como...
                    </option>

                    <option
                        value="coordenador"
                        {{ old('role') == 'coordenador' ? 'selected' : '' }}
                    >
                        Coordenador
                    </option>

                    <option
                        value="professor"
                        {{ old('role') == 'professor' ? 'selected' : '' }}
                    >
                        Professor
                    </option>

                    <option
                        value="aluno"
                        {{ old('role') == 'aluno' ? 'selected' : '' }}
                    >
                        Aluno
                    </option>

                </select>

            </div>


            {{-- LEMBRAR / ESQUECI --}}

            <div class="remember-area">

                <label class="remember">

                    <input
                        type="checkbox"
                        name="remember"
                        value="1"
                    >

                    <span>
                        Lembrar-me
                    </span>

                </label>


                <a
                    href="#"
                    class="forgot-password"
                >
                    Esqueci minha senha
                </a>

            </div>


            {{-- BOTÃO --}}

            <button
                type="submit"
                class="btn-login"
            >
                Entrar
            </button>

        </form>


        {{-- CADASTRO --}}

        <div class="auth-footer">

            Não tem conta?

            <a href="{{ route('signup') }}">
                Criar Conta
            </a>

        </div>

    </div>

</div>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
></script>

</body>

</html>