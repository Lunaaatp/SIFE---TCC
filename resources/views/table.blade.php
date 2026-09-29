<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIFE - Gestão de Turmas</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-red: #d32f2f;
            --primary-red-soft: #fff5f5;
            --bg-light: #f8f9fa;
            --sidebar-width: 280px;
            --text-dark: #2d3436;
            --border-color: #edf2f7;
            --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            --text-muted: #a0aec0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-dark);
            margin: 0;
        }

        .wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* --- SIDEBAR --- */
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
            transition: all 0.3s;
        }

        .sidebar-header {
            padding: 10px 15px 30px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-box {
            background: var(--primary-red);
            color: white;
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            font-size: 1.4rem;
            box-shadow: 0 4px 12px rgba(211, 47, 47, 0.2);
        }

        .nav-menu {
            display: flex;
            flex-direction: column;
            gap: 6px;
            flex: 1;
        }

        .menu-label {
            font-size: 0.7rem;
            font-weight: 700;
            color: #adb5bd;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 20px 0 10px 15px;
        }
        
        .nav-link {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 12px 18px;
            color: #4a5568;
            font-weight: 500;
            text-decoration: none;
            border-radius: 14px;
            transition: 0.2s;
        }

        .nav-link i {
            width: 22px;
            font-size: 1.1rem;
            color: #a0aec0;
        }

        .nav-link:hover,
        .nav-link.active {
            background-color: var(--primary-red-soft);
            color: var(--primary-red);
        }

        .nav-link.active i {
            color: var(--primary-red);
        }

        /* --- PERFIL E LOGOUT PADRONIZADOS --- */

        .sidebar-footer {
            margin-top: auto;
            padding-top: 15px;
            border-top: 1px solid var(--border-color);
        }

        .user-profile-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            text-decoration: none;
            border-radius: 15px;
            background: var(--primary-red-soft);
            color: inherit;
            width: 100%;
        }

        .avatar-circle {
            width: 42px;
            height: 42px;
            min-width: 42px;
            background: var(--primary-red);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            border: 2px solid white;
            flex-shrink: 0;
        }

        .btn-logout-sidebar {
            width: 38px;
            height: 38px;
            min-width: 38px;
            border: none;
            border-radius: 12px;
            background: white;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: 0.3s;
            flex-shrink: 0;
        }

        .btn-logout-sidebar:hover {
            background: var(--primary-red);
            color: white;
        }

        /* --- CONTEÚDO --- */
        #content {
            flex-grow: 1;
            padding: 40px;
            overflow-y: auto;
        }

        .top-navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .card-custom {
            background: white;
            border-radius: 20px;
            border: 1px solid var(--border-color);
            box-shadow: var(--card-shadow);
            padding: 24px;
            margin-bottom: 24px;
            transition: transform 0.2s;
        }

        /* CARDS DE TURMA ESPECÍFICOS */
        .class-card:hover {
            transform: translateY(-5px);
            border-color: var(--primary-red);
        }
        
        .class-badge {
            font-size: 0.7rem;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 6px;
            text-transform: uppercase;
        }

        .bg-morning {
            background: #fff9db;
            color: #f59f00;
        }

        .bg-afternoon {
            background: #e3fafc;
            color: #1098ad;
        }

        .bg-night {
            background: #f3f0ff;
            color: #7950f2;
        }

        .teacher-info {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #f1f3f5;
        }

        /* =========================
           RESPONSIVO (TABLET)
        ========================= */

        @media (max-width: 1100px) {

            .wrapper {
                flex-direction: column;
            }

            #sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            #content {
                padding: 20px;
            }
        }

        /* =========================
           MENU SANDUÍCHE (MOBILE)
        ========================= */

        .hamburger-btn {
            display: none;

            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 10001;

            width: 46px;
            height: 46px;

            border: 1px solid var(--border-color);
            border-radius: 14px;

            background: white;
            color: var(--primary-red);

            align-items: center;
            justify-content: center;

            font-size: 1.25rem;

            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);

            cursor: pointer;

            transition: opacity 0.2s ease, visibility 0.2s ease;
        }

        .hamburger-btn.is-hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .sidebar-overlay {
            display: none;

            position: fixed;
            inset: 0;
            z-index: 9998;

            background: rgba(15, 23, 42, 0.45);

            opacity: 0;

            transition: opacity 0.3s ease;
        }

        .sidebar-overlay.active {
            display: block;
            opacity: 1;
        }

        .sidebar-close-btn {
            display: none;

            margin-left: auto;

            width: 34px;
            height: 34px;

            border: none;
            border-radius: 10px;

            background: #f8fafc;
            color: var(--text-muted);

            align-items: center;
            justify-content: center;

            font-size: 1rem;

            cursor: pointer;
        }

        @media (max-width: 768px) {

            .hamburger-btn {
                display: flex;
            }

            .wrapper {
                display: block;
                min-height: 100vh;
            }

            /* Sidebar vira painel deslizante (overlay) */
            #sidebar {
                position: fixed;
                top: 0;
                left: -300px;
                width: min(280px, 85vw);
                height: 100vh;

                z-index: 9999;

                box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);

                transition: left 0.3s ease;
            }

            #sidebar.active {
                left: 0;
            }

            .sidebar-header {
                display: flex;
            }

            .sidebar-close-btn {
                display: flex;
            }

            .menu-label {
                display: block;
            }

            .nav-menu {
                flex-direction: column;
                overflow: visible;
            }

            .nav-link {
                flex-direction: row;
                min-width: 0;
                height: auto;
                font-size: 1rem;
                text-align: left;
            }

            .sidebar-footer {
                display: block;
            }

            /* Conteúdo ocupa toda a largura, com espaço para o botão sanduíche */
            #content {
                width: 100%;
                padding: 90px 16px 30px;
                overflow-y: visible;
            }

            .top-navbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .top-navbar > a.btn {
                width: 100%;
                justify-content: center;
            }

        }
    </style>
</head>

<body>

<!-- =========================
     BOTÃO SANDUÍCHE (MOBILE)
========================= -->

<button class="hamburger-btn" id="hamburgerBtn" aria-label="Abrir menu" type="button">
    <i class="fas fa-bars"></i>
</button>

<div class="sidebar-overlay" id="sidebarOverlay"></div>

<div class="wrapper">

    <nav id="sidebar">

        <div class="sidebar-header">
            <div class="logo-box">
                <i class="fas fa-graduation-cap"></i>
            </div>

            <h4 class="fw-bold m-0">SIFE</h4>

            <button class="sidebar-close-btn" id="sidebarCloseBtn" aria-label="Fechar menu" type="button">
                <i class="fas fa-times"></i>
            </button>
        </div>


        <div class="nav-menu">

            <span class="menu-label">Principal</span>

            <a href="{{route('frequencia')}}" class="nav-link">
                <i class="fas fa-calendar-check"></i>
                <span>Frequência</span>
            </a>

            <a href="{{route('table')}}" class="nav-link active">
                <i class="fas fa-users-rectangle"></i>
                <span>Turmas</span>
            </a>

            <a href="{{route('typography')}}" class="nav-link">
                <i class="fas fa-user-graduate"></i>
                <span>Alunos</span>
            </a>

            <a href="{{route('widget')}}" class="nav-link">
                <i class="fas fa-chart-line"></i>
                <span>Dashboard</span>
            </a>


            <span class="menu-label">Administrativo</span>

            <a href="{{route('index')}}" class="nav-link">
                <i class="far fa-calendar-alt"></i>
                <span>Eventos</span>
            </a>

            <a href="{{route('chart')}}" class="nav-link">
                <i class="far fa-bell"></i>
                <span>Notificações</span>
            </a>

            <a href="{{route('button')}}" class="nav-link">
                <i class="far fa-file-alt"></i>
                <span>Relatórios</span>
            </a>

        </div>


        <!-- =====================================================
             PERFIL + LOGOUT
             MESMO PADRÃO DAS OUTRAS PÁGINAS
        ====================================================== -->

        <div class="sidebar-footer">

            @php
                if(Auth::check()) {

                    $nomeCompleto = Auth::user()->nome ?? Auth::user()->name ?? 'Coordenador';

                    $nomesSife = preg_split('/\s+/', trim($nomeCompleto));

                    $pLetraSife = mb_substr(
                        $nomesSife[0] ?? 'C',
                        0,
                        1
                    );

                    $sLetraSife = isset($nomesSife[1])
                        ? mb_substr($nomesSife[1], 0, 1)
                        : '';

                    $iniciaisSife = strtoupper(
                        $pLetraSife . $sLetraSife
                    );

                    $nomeSife = $nomeCompleto;

                    $emailSife = Auth::user()->email
                        ?? 'coordenacao@sife.com';

                } else {

                    $iniciaisSife = 'CC';
                    $nomeSife = 'Coordenador';
                    $emailSife = 'coordenacao@sife.com';

                }
            @endphp


            <!-- CARD DO PERFIL -->
            <div class="user-profile-item">

                <div class="avatar-circle">
                    {{ $iniciaisSife }}
                </div>


                <div class="overflow-hidden flex-grow-1">

                    <p class="m-0 small fw-bold text-dark text-truncate">
                        {{ $nomeSife }}
                    </p>

                    <p
                        class="m-0 text-muted text-truncate"
                        style="font-size: 11px;"
                    >
                        {{ $emailSife }}
                    </p>

                </div>


                <!-- LOGOUT DENTRO DO CARD -->
                <form
                    action="{{ route('logout') }}"
                    method="POST"
                    class="m-0"
                >

                    @csrf

                    <button
                        type="submit"
                        class="btn-logout-sidebar"
                        title="Sair da Conta"
                    >

                        <i class="fas fa-right-from-bracket"></i>

                    </button>

                </form>

            </div>

        </div>

    </nav>


    <main id="content">

        <header class="top-navbar">

            <div>

                <h3
                    class="fw-bold m-0"
                    style="font-family: 'Inter', sans-serif;"
                >
                    Gestão de Turmas
                </h3>

                <p class="text-muted m-0 small">
                    Configuração de salas e agrupamentos
                </p>

            </div>


            <a
                href="{{ route('turmas.criar') }}"
                class="btn btn-danger px-4 py-2 rounded-3 shadow fw-bold d-flex align-items-center"
            >

                <i class="fas fa-plus me-2"></i>

                Criar Nova Turma

            </a>

        </header>


        @if (session('sucesso'))

            <div
                class="alert alert-success border-0 rounded-4 shadow-sm mb-4 d-flex align-items-center gap-2"
            >

                <i class="fas fa-check-circle fs-5"></i>

                <span>
                    {{ session('sucesso') }}
                </span>

            </div>

        @endif


        <div class="row g-3 mb-4">


            <div class="col-md-4">

                <div class="card-custom text-center">

                    <span class="small fw-bold text-muted text-uppercase">
                        Turmas Ativas
                    </span>

                    <h2 class="fw-bold mt-2 mb-0">
                        {{ $totalTurmas ?? count($turmas) }}
                    </h2>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card-custom text-center">

                    <span class="small fw-bold text-muted text-uppercase">
                        Média de Alunos
                    </span>

                    <h2 class="fw-bold mt-2 mb-0">
                        {{ $mediaAlunos ?? 0 }}
                    </h2>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card-custom text-center">

                    <span class="small fw-bold text-muted text-uppercase">
                        Capacidade Total
                    </span>

                    <h2 class="fw-bold mt-2 mb-0 text-primary">
                        {{ $capacidadeTotal ?? 0 }}%
                    </h2>

                </div>

            </div>

        </div>


        <!-- CARDS DAS TURMAS CADASTRADAS NO BANCO -->

        <div class="row g-4">

            @forelse($turmas as $turma)

                @php

                    $badgeClass = 'bg-morning';

                    $periodoLower = strtolower(
                        $turma->periodo ?? ''
                    );

                    if (
                        str_contains(
                            $periodoLower,
                            'vespert'
                        )
                    ) {

                        $badgeClass = 'bg-afternoon';

                    } elseif (
                        str_contains(
                            $periodoLower,
                            'noturn'
                        )
                    ) {

                        $badgeClass = 'bg-night';

                    }

                @endphp


                <div class="col-md-4">

                    <div
                        class="card-custom class-card h-100 d-flex flex-column justify-content-between"
                    >

                        <div>

                            <div
                                class="d-flex justify-content-between align-items-start mb-3"
                            >

                                <span
                                    class="class-badge {{ $badgeClass }}"
                                >
                                    {{ $turma->periodo ?? 'Geral' }}
                                </span>

                                <span class="badge bg-light text-muted border">
                                    ID #{{ $turma->id_turma }}
                                </span>

                            </div>


                            <h4 class="fw-bold mb-1">
                                {{ $turma->nome_turma }}
                            </h4>

                            <p class="text-muted small mb-0">
                                {{ $turma->serie ?? 'Série não especificada' }}
                            </p>

                        </div>


                        <div>

                            <div class="teacher-info">

                                <div
                                    class="avatar-circle"
                                    style="
                                        width:32px;
                                        height:32px;
                                        background:#e2e8f0;
                                        color:#475569;
                                        border-radius:50%;
                                        display:flex;
                                        align-items:center;
                                        justify-content:center;
                                        font-weight:700;
                                        font-size:0.75rem;
                                    "
                                >

                                    <i class="fas fa-chalkboard-teacher"></i>

                                </div>


                                <div class="overflow-hidden">

                                    <p class="m-0 small fw-bold text-truncate">
                                        Turma Registrada
                                    </p>

                                    <small
                                        class="text-muted"
                                        style="font-size: 11px;"
                                    >
                                        SIFE
                                    </small>

                                </div>

                            </div>


                            <div class="mt-3">

                                <a
                                    href="{{ route('typography', ['turma' => $turma->id_turma]) }}"
                                    class="btn btn-light w-100 rounded-3 border-0 fw-bold small py-2 text-danger text-decoration-none text-center d-block"
                                >

                                    <i class="fas fa-users me-1"></i>

                                    Ver Alunos

                                </a>

                            </div>

                        </div>

                    </div>

                </div>


            @empty

                <div class="col-12">

                    <div class="card-custom text-center py-5">

                        <i class="fas fa-folder-open fa-3x text-muted mb-3"></i>

                        <h5 class="fw-bold text-muted">
                            Nenhuma turma cadastrada no banco de dados
                        </h5>

                        <p class="text-muted small mb-4">
                            Clique no botão abaixo para criar a primeira turma do sistema.
                        </p>

                        <a
                            href="{{ route('turmas.criar') }}"
                            class="btn btn-danger px-4 py-2 rounded-3 fw-bold"
                        >

                            <i class="fas fa-plus me-2"></i>

                            Criar Nova Turma

                        </a>

                    </div>

                </div>

            @endforelse

        </div>

    </main>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<x-acessibilidade />


<!-- =========================
     MENU SANDUÍCHE (MOBILE)
========================= -->

<script>

    (function () {

        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        const closeBtn = document.getElementById('sidebarCloseBtn');

        function openMenu() {
            sidebar.classList.add('active');
            overlay.classList.add('active');
            hamburgerBtn.classList.add('is-hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            sidebar.classList.remove('active');
            overlay.classList.remove('active');
            hamburgerBtn.classList.remove('is-hidden');
            document.body.style.overflow = '';
        }

        hamburgerBtn.addEventListener('click', function () {

            if (sidebar.classList.contains('active')) {
                closeMenu();
            } else {
                openMenu();
            }

        });

        overlay.addEventListener('click', closeMenu);
        closeBtn.addEventListener('click', closeMenu);

        document
            .querySelectorAll('#sidebar .nav-link')
            .forEach(function (link) {
                link.addEventListener('click', closeMenu);
            });

    })();

</script>


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