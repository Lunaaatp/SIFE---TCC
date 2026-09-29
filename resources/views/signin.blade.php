    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - SIFE</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

        <style>
            :root {
                --primary-red: #d32f2f;
                --bg-light: #f4f7f9;
                --text-dark: #2d3436;
            }

            body {
                font-family: 'Inter', sans-serif;
                background-color: var(--bg-light);
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0;
            }

            .auth-container {
                display: flex;
                width: 1000px;
                max-width: 95%;
                height: 580px;
                background: white;
                border-radius: 30px;
                overflow: hidden;
                box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            }

            .auth-sidebar {
                flex: 1;
                background-color: var(--primary-red);
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 40px;
            }

            .logo-box {
                background: white;
                padding: 35px;
                border-radius: 20px;
                text-align: center;
                width: 100%;
                max-width: 320px;
            }

            .auth-form-section {
                flex: 1.2;
                padding: 60px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .brand-title {
                color: var(--primary-red);
                font-weight: 800;
                font-size: 2.8rem;
                margin-bottom: 0;
                text-align: center;
            }

            .brand-subtitle {
                color: #64748b;
                text-align: center;
                margin-bottom: 30px;
                font-size: 1rem;
                font-weight: 500;
            }

            .input-group-custom {
                display: flex;
                align-items: center;
                margin-bottom: 20px;
                position: relative;
            }

            .input-group-custom i {
                color: var(--primary-red);
                font-size: 1.1rem;
                margin-right: 15px;
                width: 20px;
                text-align: center;
            }

            .form-control-custom {
                flex: 1;
                padding: 12px 18px;
                border: 1px solid #e2e8f0;
                border-radius: 12px;
                background-color: #fff;
                transition: 0.3s;
                font-size: 0.95rem;
            }

            .form-control-custom:focus {
                outline: none;
                border-color: var(--primary-red);
                box-shadow: 0 0 0 4px rgba(211, 47, 47, 0.1);
            }

            .auth-options {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 25px;
                font-size: 0.85rem;
            }

            .auth-options a {
                color: var(--primary-red);
                text-decoration: none;
                font-weight: 600;
            }

            .btn-login {
                background-color: var(--primary-red);
                color: white;
                border: none;
                width: 100%;
                padding: 14px;
                border-radius: 12px;
                font-weight: 700;
                font-size: 1.1rem;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 12px;
                transition: 0.3s;
                box-shadow: 0 4px 12px rgba(211, 47, 47, 0.2);
            }

            .btn-login:hover {
                background-color: #b71c1c;
                transform: translateY(-2px);
            }

            .auth-footer {
                margin-top: 25px;
                text-align: center;
                font-size: 0.9rem;
                color: #64748b;
            }

            .auth-footer a {
                color: var(--primary-red);
                text-decoration: none;
                font-weight: 700;
            }

            @media (max-width: 768px) {
                .auth-container { flex-direction: column; height: auto; margin: 20px; }
                .auth-sidebar { display: none; }
                .auth-form-section { padding: 40px 25px; }
            }
        </style>
    </head>
    <body>

    <div class="auth-container">
        <div class="auth-sidebar">
            <div class="logo-box shadow-sm">
                <img src="{{ asset('assets/img/SIFE.png') }}" alt="SIFE Logo" style="width: 100%;">
            </div>
        </div>

        <div class="auth-form-section">
            <h1 class="brand-title">SIFE</h1>
            <p class="brand-subtitle">Sistema Inteligente de Frequência Escolar</p>

            @if ($errors->any())
                <div class="alert alert-danger p-2 rounded-3 small mb-3 text-center" style="font-size: 0.85rem;">
                    @foreach ($errors->all() as $error)
                        <i class="fas fa-exclamation-circle me-1"></i> {{ $error }}
                    @endforeach
                </div>
            @endif

            <form action="{{ route('login.auth') }}" method="POST">
                @csrf

                <div class="input-group-custom">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" class="form-control-custom" placeholder="Digite seu email" value="{{ old('email') }}" required>
                </div>

                <div class="input-group-custom">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" class="form-control-custom" placeholder="Digite sua senha" required>
                </div>

                <div class="input-group-custom">
                    <i class="fas fa-user-shield"></i>
                    <select name="role" class="form-control-custom" style="cursor: pointer;" required>
                        <option value="" disabled selected>Acessar como...</option>
                        <option value="coordenador">Coordenador</option>
                        <option value="professor">Professor</option>
                        <option value="aluno">Aluno</option>
                    </select>
                </div>

                <div class="auth-options">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label class="form-check-label text-muted" for="remember">Lembrar-me</label>
                    </div>
                    <a href="{{ route('password.show') }}">Esqueceu a senha?</a>
                </div>

                <button type="submit" class="btn-login">
                    <i class="fas fa-right-to-bracket"></i> Entrar
                </button>
            </form>

            <div class="auth-footer">
                Não tem conta? <a href="{{ route('signup') }}">Criar Conta</a>
            </div>
        </div>
    </div>

    <x-acessibilidade />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>