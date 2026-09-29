<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Criar Conta - SIFE</title>

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

        .signup-container {
            width: 100%;
            max-width: 500px;
            padding: 20px;
        }

        .signup-card {
            background: white;
            border-radius: 18px;
            padding: 40px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.10);
        }

        .logo {
            text-align: center;
            margin-bottom: 25px;
        }

        .logo h1 {
            margin: 0;
            color: #d32f2f;
            font-size: 38px;
            font-weight: 800;
        }

        .logo p {
            margin-top: 5px;
            color: #666;
            font-size: 14px;
        }

        .title {
            text-align: center;
            margin-bottom: 25px;
        }

        .title h2 {
            font-size: 25px;
            font-weight: 700;
            color: #222;
            margin-bottom: 8px;
        }

        .title p {
            color: #777;
            font-size: 14px;
        }

        .form-label {
            font-weight: 600;
            color: #333;
        }

        .form-control-custom {
            width: 100%;
            height: 48px;
            border: 1px solid #ddd;
            border-radius: 9px;
            padding: 0 14px;
            outline: none;
            transition: 0.2s;
        }

        .form-control-custom:focus {
            border-color: #d32f2f;
            box-shadow: 0 0 0 3px rgba(211, 47, 47, 0.10);
        }

        .btn-create {
            width: 100%;
            height: 48px;
            border: none;
            border-radius: 9px;
            background: #d32f2f;
            color: white;
            font-weight: 700;
            margin-top: 10px;
            transition: 0.2s;
        }

        .btn-create:hover {
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

<div class="signup-container">

    <div class="signup-card">

        <div class="logo">

            <h1>SIFE</h1>

            <p>
                Sistema Inteligente de Frequência Escolar
            </p>

        </div>


        <div class="title">

            <h2>Crie sua Conta</h2>

            <p>
                Cadastre um novo Professor ou Aluno
            </p>

        </div>


        {{-- Mensagens de erro --}}

        @if ($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        {{-- Mensagem de sucesso --}}

        @if (session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif


        <form
            action="{{ route('register.store') }}"
            method="POST"
        >

            @csrf


            {{-- Nome --}}

            <div class="mb-3">

                <label
                    for="name"
                    class="form-label"
                >
                    Nome completo
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control-custom"
                    value="{{ old('name') }}"
                    placeholder="Digite o nome completo"
                    required
                >

            </div>


            {{-- E-mail --}}

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
                    placeholder="Digite o e-mail"
                    required
                >

            </div>


            {{-- Senha --}}

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
                    placeholder="Digite uma senha"
                    required
                >

            </div>


            {{-- Tipo de usuário --}}

            <div class="mb-3">

                <label
                    for="registerRole"
                    class="form-label"
                >
                    Tipo de usuário
                </label>

                <select
                    id="registerRole"
                    name="role"
                    class="form-control-custom"
                    required
                >

                    <option
                        value=""
                        disabled
                        {{ old('role') ? '' : 'selected' }}
                    >
                        Cadastrar como...
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


            {{-- Botão --}}

            <button
                type="submit"
                class="btn-create"
            >
                Criar Conta
            </button>

        </form>


        <div class="auth-footer">

            Já tem uma conta?

            <a href="{{ route('login') }}">
                Fazer Login
            </a>

        </div>

    </div>

</div>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
></script>

</body>

</html>