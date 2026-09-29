<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIFE - Editar Perfil</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-red: #d32f2f;
            --primary-red-hover: #b71c1c;
            --primary-red-soft: #fff5f5;
            --bg-light: #f8f9fa;
            --sidebar-width: 280px;
            --text-dark: #2d3436;
            --text-muted: #a0aec0;
            --border-color: #edf2f7;
            --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-dark);
            margin: 0;
        }

        .wrapper { display: flex; min-height: 100vh; }

        /* --- SIDEBAR (PADRÃO SIFE) --- */
        #sidebar {
            width: var(--sidebar-width);
            background: #ffffff;
            border-right: 1px solid var(--border-color);
            padding: 20px 15px;
            display: flex;
            flex-direction: column;
            position: sticky;
            top: 0;
            height: 100vh;
        }

        .sidebar-header { padding: 10px 15px 30px; display: flex; align-items: center; gap: 12px; }
        .logo-box {
            background: var(--primary-red); color: white; width: 42px; height: 42px;
            display: flex; align-items: center; justify-content: center; border-radius: 12px;
            font-size: 1.4rem; box-shadow: 0 4px 12px rgba(211, 47, 47, 0.2);
        }

        .nav-menu { display: flex; flex-direction: column; gap: 6px; }
        .menu-label { font-size: 0.7rem; font-weight: 700; color: #adb5bd; text-transform: uppercase; letter-spacing: 1px; margin: 20px 0 10px 15px; }
        
        .nav-link {
            display: flex; align-items: center; gap: 14px; padding: 12px 18px;
            color: #4a5568; font-weight: 500; text-decoration: none; border-radius: 14px; transition: 0.2s;
        }
        .nav-link i { width: 22px; font-size: 1.1rem; color: #a0aec0; }
        .nav-link:hover, .nav-link.active { background-color: var(--primary-red-soft); color: var(--primary-red); }
        .nav-link.active i { color: var(--primary-red); }

        /* --- CONTEÚDO PRINCIPAL --- */
        #content { flex-grow: 1; padding: 40px; overflow-y: auto; }
        .top-navbar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }

        /* FORMULÁRIO ESTILIZADO */
        .card-custom {
            background: white; border-radius: 20px; border: 1px solid var(--border-color);
            box-shadow: var(--card-shadow); padding: 35px; margin-bottom: 24px;
        }

        .form-label-custom {
            font-size: 0.75rem;
            font-weight: 700;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .form-control-custom {
            background: #f8fafc;
            border: 1px solid #edf2f7;
            border-radius: 12px;
            padding: 12px 16px;
            font-weight: 600;
            color: #2d3748;
            transition: 0.3s;
        }

        .form-control-custom:focus {
            outline: none;
            border-color: var(--primary-red);
            background: white;
            box-shadow: 0 0 0 4px rgba(211, 47, 47, 0.08);
        }

        .avatar-edit-section {
            display: flex;
            align-items: center;
            gap: 24px;
            margin-bottom: 35px;
            padding-bottom: 25px;
            border-bottom: 1px solid var(--border-color);
        }

        .avatar-big {
            width: 85px; height: 85px;
            background: var(--primary-red); color: white;
            border-radius: 50%; display: flex;
            align-items: center; justify-content: center;
            font-size: 2rem; font-weight: 800;
            box-shadow: 0 4px 15px rgba(211, 47, 47, 0.2);
        }

        @media (max-width: 992px) { #sidebar { display: none; } #content { padding: 20px; } }
    </style>
</head>
<body>

<div class="wrapper">
    <!-- SIDEBAR (PADRÃO SIFE) -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <div class="logo-box"><i class="fas fa-graduation-cap"></i></div>
            <h4 class="fw-bold m-0">SIFE</h4>
        </div>

        <div class="nav-menu">
            <span class="menu-label">Principal</span>
            <a href="{{ route('frequencia') }}" class="nav-link"><i class="fas fa-calendar-check"></i> <span>Frequência</span></a>
            <a href="{{ route('table') }}" class="nav-link"><i class="fas fa-users-rectangle"></i> <span>Turmas</span></a>
            <a href="{{ route('typography') }}" class="nav-link"><i class="fas fa-user-graduate"></i> <span>Alunos</span></a>
            <a href="{{ route('widget') }}" class="nav-link"><i class="fas fa-chart-line"></i> <span>Dashboard</span></a>

            <span class="menu-label">Administrativo</span>
            <a href="{{ route('index') }}" class="nav-link"><i class="far fa-calendar-alt"></i> <span>Eventos</span></a>
            <a href="{{ route('chart') }}" class="nav-link"><i class="far fa-bell"></i> <span>Notificações</span></a>
            <a href="{{ route('button') }}" class="nav-link"><i class="far fa-file-alt"></i> <span>Relatórios</span></a>
        </div>

        <div class="sidebar-footer" style="margin-top: auto; padding-top: 15px; border-top: 1px solid var(--border-color); display: flex; flex-direction: column; gap: 10px;">
            @php
                if(Auth::check()) {
                    $nomesSife = explode(' ', Auth::user()->nome);
                    $pLetraSife = mb_substr($nomesSife[0] ?? 'C', 0, 1);
                    $sLetraSife = isset($nomesSife[1]) ? mb_substr($nomesSife[1], 0, 1) : '';
                    $iniciaisSife = strtoupper($pLetraSife . $sLetraSife);
                    $nomeSife = Auth::user()->nome;
                    $emailSife = Auth::user()->email;
                } else {
                    $iniciaisSife = "CC";
                    $nomeSife = "Coordenador";
                    $emailSife = "coordenacao@sife.com";
                }
                $isProfilePage = Request::is('profile') || Request::is('profile/*');
            @endphp

            <a href="{{ route('profile') }}" 
               class="user-profile-item" 
               style="display: flex; align-items: center; gap: 12px; padding: 12px; text-decoration: none; border-radius: 15px; transition: 0.3s; background: {{ $isProfilePage ? 'var(--primary-red)' : 'var(--primary-red-soft)' }};">
                
                <div class="avatar-circle" style="width: 42px; height: 42px; flex-shrink: 0; background: {{ $isProfilePage ? '#ffffff' : 'var(--primary-red)' }}; color: {{ $isProfilePage ? 'var(--primary-red)' : '#ffffff' }}; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.85rem; border: 2px solid white; box-shadow: 0 2px 8px rgba(211,47,47,0.15);">
                    {{ $iniciaisSife }}
                </div>
                
                <div class="overflow-hidden" style="flex-grow: 1;">
                    <p class="m-0 small fw-bold text-truncate" style="color: {{ $isProfilePage ? '#ffffff' : '#2d3436' }}; font-size: 0.9rem;">
                        {{ $nomeSife }}
                    </p>
                    <p class="m-0 text-truncate" style="font-size: 11px; color: {{ $isProfilePage ? 'rgba(255,255,255,0.85)' : '#a0aec0' }};">
                        {{ $emailSife }}
                    </p>
                </div>
            </a>

            <a href="#" 
               class="nav-link text-danger logout-trigger" 
               style="display: flex; align-items: center; gap: 14px; padding: 10px 18px; font-weight: 600; text-decoration: none; border-radius: 15px; transition: 0.3s; font-size: 0.9rem;"
               onclick="event.preventDefault(); document.getElementById('sidebar-logout-form').submit();">
                <i class="fas fa-sign-out-alt" style="width: 22px; font-size: 1.1rem; color: var(--primary-red);"></i> 
                <span>Sair da Conta</span>
            </a>

            <form id="sidebar-logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </nav>

    <!-- CONTEÚDO PRINCIPAL -->
    <main id="content">
        <header class="top-navbar">
            <div>
                <h3 class="fw-bold m-0">Editar Perfil</h3>
                <p class="text-muted m-0 small">Atualize suas informações cadastrais e de contato</p>
            </div>
            <a href="{{ route('profile') }}" class="btn btn-light px-4 rounded-3 border fw-bold text-muted">
                Cancelar
            </a>
        </header>

        <div class="card-custom">
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="avatar-edit-section">
                    <div class="avatar-big">{{ $iniciaisSife }}</div>
                    <div>
                        <button type="button" class="btn btn-sm btn-outline-danger rounded-3 fw-bold px-3 py-2">
                            <i class="fas fa-camera me-1"></i> Alterar Foto
                        </button>
                        <p class="text-muted small mt-2 mb-0">Formatos recomendados: JPG ou PNG de até 2MB.</p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label-custom">Nome Completo</label>
                        <input type="text" class="form-control form-control-custom w-100" value="{{ $nomeSife }}" name="nome" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label-custom">E-mail Institucional</label>
                        <input type="email" class="form-control form-control-custom w-100" value="{{ $emailSife }}" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label-custom">Telefone / WhatsApp</label>
                        <input type="text" class="form-control form-control-custom w-100" value="(11) 98765-4321" name="telefone">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label-custom">Cargo / Função</label>
                        <input type="text" class="form-control form-control-custom w-100" value="Administrador de Sistema" name="cargo">
                    </div>
                </div>

                <div class="mt-5 pt-4 border-top d-flex justify-content-between align-items-center flex-wrap gap-3">
                    <a href="{{ route('password') }}" class="text-danger fw-bold text-decoration-none small">
                        <i class="fas fa-lock me-1"></i> Deseja alterar sua senha?
                    </a>
                    
                    <button type="submit" class="btn btn-danger px-5 py-2 rounded-3 fw-bold shadow-sm">
                        <i class="fas fa-check me-1"></i> Salvar Alterações
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<x-acessibilidade />


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