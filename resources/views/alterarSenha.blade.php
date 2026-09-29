<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Alterar Senha - SIFE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            background-color: #f4f7f9;
            font-family: Arial, sans-serif;
        }

        .senha-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .senha-card {
            background: white;
            width: 100%;
            max-width: 500px;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .icon-box {
            width: 70px;
            height: 70px;
            background: #fff5f5;
            color: #d32f2f;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin: 0 auto 20px;
        }

        .btn-sife {
            background-color: #d32f2f;
            border: none;
        }

        .btn-sife:hover {
            background-color: #b71c1c;
        }
    </style>
</head>

<body>

<div class="senha-container">
    <div class="senha-card">

        <div class="text-center">
            <div class="icon-box">
                <i class="fas fa-key"></i>
            </div>

            <h3 class="fw-bold">Alterar Senha</h3>
            <p class="text-muted mb-4">
                Informe sua senha atual e escolha uma nova senha.
            </p>
        </div>

        {{-- Mensagem de sucesso --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Erros --}}
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('password.update') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label fw-bold">
                    Senha Atual
                </label>

                <input
                    type="password"
                    name="senha_atual"
                    class="form-control form-control-lg"
                    required
                >
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">
                    Nova Senha
                </label>

                <input
                    type="password"
                    name="nova_senha"
                    class="form-control form-control-lg"
                    required
                >
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">
                    Confirmar Nova Senha
                </label>

                <input
                    type="password"
                    name="nova_senha_confirmation"
                    class="form-control form-control-lg"
                    required
                >
            </div>

            <button
                type="submit"
                class="btn btn-danger btn-sife w-100 py-3 fw-bold"
            >
                <i class="fas fa-save me-2"></i>
                SALVAR NOVA SENHA
            </button>

            <a
                href="{{ route('perfilAluno') }}"
                class="btn btn-outline-secondary w-100 py-3 mt-3 fw-bold"
            >
                VOLTAR
            </a>

        </form>

    </div>
</div>

</body>
</html>