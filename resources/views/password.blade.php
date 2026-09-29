<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segurança - SIFE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-red: #d32f2f;
            --secondary-red: #b71c1c;
            --soft-red: #fff5f5;
            --text-dark: #1e293b;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f8f9fa 0%, #fff5f5 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 20px;
        }

        .password-container {
            animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            width: 100%;
            max-width: 550px;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .password-card {
            background: #ffffff;
            border-radius: 35px;
            padding: 50px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.08);
            border: 1px solid #f1f5f9;
        }

        .header-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .brand-icon-box {
            background: var(--primary-red);
            color: white;
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 22px;
            margin: 0 auto 20px;
            font-size: 1.8rem;
            box-shadow: 0 10px 20px rgba(211, 47, 47, 0.2);
        }

        .form-label {
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 10px;
            display: block;
        }

        .input-group-custom {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group-custom i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .form-control-custom {
            width: 100%;
            padding: 18px 20px 18px 55px;
            border-radius: 18px;
            border: 2px solid #e2e8f0;
            background: #f8fafc;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            color: var(--text-dark);
        }

        .form-control-custom:focus {
            outline: none;
            border-color: var(--primary-red);
            background: white;
            box-shadow: 0 0 0 5px rgba(211, 47, 47, 0.05);
        }

        .form-control-custom:focus + i {
            color: var(--primary-red);
            transform: translateY(-50%) scale(1.1);
        }

        .btn-submit {
            background: var(--primary-red);
            color: white;
            border: none;
            width: 100%;
            padding: 18px;
            border-radius: 18px;
            font-weight: 700;
            font-size: 1.1rem;
            margin-top: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(211, 47, 47, 0.2);
            cursor: pointer;
        }

        .btn-submit:hover {
            background: var(--secondary-red);
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(211, 47, 47, 0.3);
        }

        .info-panel {
            background: #f1f5f9;
            border-radius: 20px;
            padding: 20px;
            margin-top: 30px;
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .info-panel i {
            font-size: 1.5rem;
            color: var(--primary-red);
        }

        .info-text {
            font-size: 0.85rem;
            color: #475569;
            line-height: 1.5;
            margin: 0;
        }

        .footer-links {
            text-align: center;
            margin-top: 30px;
        }

        .back-link {
            color: #94a3b8;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: 0.3s;
        }

        .back-link:hover {
            color: var(--primary-red);
        }

        .alert-custom {
            border-radius: 15px;
            padding: 15px 20px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<div class="password-container">
    <div class="password-card">
        <div class="header-section">
            <div class="brand-icon-box">
                <i class="fas fa-lock"></i>
            </div>
            <h2 class="fw-bold text-dark">Redefinir Senha</h2>
            <p class="text-muted">Preencha os campos abaixo para atualizar seu acesso.</p>
        </div>

        {{-- Mensagens de erro de validação --}}
        @if ($errors->any())
            <div class="alert alert-danger alert-custom">
                <ul class="mb-0" style="padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Mensagem de sucesso --}}
        @if (session('success'))
            <div class="alert alert-success alert-custom">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('password.update') }}" method="POST">
            @csrf

            <div class="input-group-custom">
                <label class="form-label">Senha Atual</label>
                <input
                    type="password"
                    name="senha_atual"
                    class="form-control-custom"
                    placeholder="Sua senha de acesso atual"
                    required
                >
                <i class="fas fa-shield-alt"></i>
            </div>

            <div class="input-group-custom">
                <label class="form-label">Nova Senha</label>
                <input
                    type="password"
                    name="nova_senha"
                    class="form-control-custom"
                    placeholder="Digite a nova senha forte"
                    required
                    minlength="6"
                >
                <i class="fas fa-key"></i>
            </div>

            <div class="input-group-custom">
                <label class="form-label">Confirmar Nova Senha</label>
                <input
                    type="password"
                    name="nova_senha_confirmation"
                    class="form-control-custom"
                    placeholder="Repita a nova senha"
                    required
                    minlength="6"
                >
                <i class="fas fa-key"></i>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn-submit" style="width: 100%; max-width: 400px;">
                    Salvar Nova Senha
                </button>
            </div>

            <div class="text-center mt-3">
                <a href="{{ route('perfilAluno') }}" class="text-muted text-decoration-none fw-bold small">
                    <i class="fas fa-chevron-left me-1"></i> Cancelar e voltar
                </a>
            </div>

            <div class="info-panel">
                <i class="fas fa-lightbulb"></i>
                <p class="info-text">
                    <strong>Dica:</strong> Uma senha forte deve conter pelo menos 8 caracteres, misturando letras maiúsculas, números e símbolos como (@, #, !).
                </p>
            </div>
        </form>
    </div>
</div>

<x-acessibilidade />

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- VLibras -->
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>

<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>

</body>
</html>