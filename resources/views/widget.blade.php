<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIFE - Dashboard Analítico</title>
    
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

        /* ==============================
           SIDEBAR
        ============================== */

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

        /* ==============================
           PERFIL + LOGOUT PADRONIZADO
        ============================== */

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
            color: #a0aec0;
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

        /* ==============================
           CONTEÚDO
        ============================== */

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
        }

        .trend-up {
            color: #10b981;
            font-size: 0.8rem;
            font-weight: 700;
        }

        .trend-down {
            color: #ef4444;
            font-size: 0.8rem;
            font-weight: 700;
        }

        .alert-item {
            display: flex;
            align-items: center;
            padding: 12px;
            border-radius: 12px;
            background: #fff5f5;
            margin-bottom: 10px;
            border-left: 4px solid var(--primary-red);
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
            color: #a0aec0;

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
                display: flex;
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

            .sidebar-close-btn {
                display: flex;
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

            .top-navbar .d-flex.gap-2 {
                width: 100%;
                flex-wrap: wrap;
            }

            .top-navbar .d-flex.gap-2 > * {
                flex: 1 1 auto;
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

    <!-- ==============================
         SIDEBAR
    ============================== -->

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

            <a href="{{ route('frequencia') }}" class="nav-link">
                <i class="fas fa-calendar-check"></i>
                <span>Frequência</span>
            </a>

            <a href="{{ route('table') }}" class="nav-link">
                <i class="fas fa-users-rectangle"></i>
                <span>Turmas</span>
            </a>

            <a href="{{ route('typography') }}" class="nav-link">
                <i class="fas fa-user-graduate"></i>
                <span>Alunos</span>
            </a>

            <a href="{{ route('widget') }}" class="nav-link active">
                <i class="fas fa-chart-line"></i>
                <span>Dashboard</span>
            </a>

            <span class="menu-label">Administrativo</span>

            <a href="{{ route('index') }}" class="nav-link">
                <i class="far fa-calendar-alt"></i>
                <span>Eventos</span>
            </a>

            <a href="{{ route('chart') }}" class="nav-link">
                <i class="far fa-bell"></i>
                <span>Notificações</span>
            </a>

            <a href="{{ route('button') }}" class="nav-link">
                <i class="far fa-file-alt"></i>
                <span>Relatórios</span>
            </a>

        </div>

        <!-- ==============================
             PERFIL + LOGOUT
        ============================== -->

        <div class="sidebar-footer">

            @php
                if(Auth::check()) {

                    $nomeCompleto = Auth::user()->nome
                        ?? Auth::user()->name
                        ?? 'Coordenador';

                    $nomesSife = preg_split(
                        '/\s+/',
                        trim($nomeCompleto)
                    );

                    $pLetraSife = mb_substr(
                        $nomesSife[0] ?? 'C',
                        0,
                        1
                    );

                    $sLetraSife = isset($nomesSife[1])
                        ? mb_substr(
                            $nomesSife[1],
                            0,
                            1
                        )
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

            <div class="user-profile-item">

                <!-- Avatar -->
                <div class="avatar-circle">
                    {{ $iniciaisSife }}
                </div>

                <!-- Informações -->
                <div class="overflow-hidden flex-grow-1">

                    <p class="m-0 small fw-bold text-dark text-truncate">
                        {{ $nomeSife }}
                    </p>

                    <p class="m-0 text-muted text-truncate"
                       style="font-size: 11px;">
                        {{ $emailSife }}
                    </p>

                </div>

                <!-- Logout -->
                <form action="{{ route('logout') }}"
                      method="POST"
                      class="m-0">

                    @csrf

                    <button type="submit"
                            class="btn-logout-sidebar"
                            title="Sair da Conta">

                        <i class="fas fa-right-from-bracket"></i>

                    </button>

                </form>

            </div>

        </div>

    </nav>


    <!-- ==============================
         CONTEÚDO PRINCIPAL
    ============================== -->

    <main id="content">

        <header class="top-navbar">

            <div>

                <h3 class="fw-bold m-0">
                    Dashboard Acadêmico
                </h3>

                <p class="text-muted m-0 small">
                    Visão geral do desempenho e engajamento
                </p>

            </div>

            <div class="d-flex gap-2">

                <button class="btn btn-outline-secondary px-3 rounded-3 bg-white">

                    <i class="far fa-calendar me-2"></i>

                    Últimos 30 dias

                </button>

                <a href="{{ route('dashboard.pdf') }}"
                   class="btn btn-danger px-4 rounded-3 shadow d-flex align-items-center">

                    <i class="fas fa-download me-2"></i>

                    Exportar PDF

                </a>

            </div>

        </header>


        <!-- ==============================
             CARDS SUPERIORES
        ============================== -->

        <div class="row g-3 mb-4">

            <!-- Média Frequência -->
            <div class="col-md-3">

                <div class="card-custom">

                    <span class="small fw-bold text-muted text-uppercase">
                        Média Frequência
                    </span>

                    <div class="d-flex align-items-baseline gap-2 mt-2">

                        <h2 class="fw-bold m-0">
                            {{ number_format($mediaFrequencia ?? 0, 1) }}%
                        </h2>

                        @if(($tendenciaFrequencia ?? 0) != 0)

                            <span class="{{ $tendenciaFrequencia >= 0 ? 'trend-up' : 'trend-down' }}">

                                <i class="fas fa-arrow-{{ $tendenciaFrequencia >= 0 ? 'up' : 'down' }}"></i>

                                {{ number_format(abs($tendenciaFrequencia), 1) }}%

                            </span>

                        @endif

                    </div>

                </div>

            </div>


            <!-- Novas Matrículas -->
            <div class="col-md-3">

                <div class="card-custom">

                    <span class="small fw-bold text-muted text-uppercase">
                        Novas Matrículas
                    </span>

                    <div class="d-flex align-items-baseline gap-2 mt-2">

                        <h2 class="fw-bold m-0">
                            {{ $novasMatriculas ?? 0 }}
                        </h2>

                    </div>

                </div>

            </div>


            <!-- Evasão -->
            <div class="col-md-3">

                <div class="card-custom">

                    <span class="small fw-bold text-muted text-uppercase">
                        Evasão (Mês)
                    </span>

                    <div class="d-flex align-items-baseline gap-2 mt-2">

                        <h2 class="fw-bold m-0">
                            {{ number_format($taxaEvasao ?? 0, 1) }}%
                        </h2>

                    </div>

                </div>

            </div>


            <!-- Avisos -->
            <div class="col-md-3">

                <div class="card-custom">

                    <span class="small fw-bold text-muted text-uppercase">
                        Avisos Enviados
                    </span>

                    <div class="d-flex align-items-baseline gap-2 mt-2">

                        <h2 class="fw-bold m-0">
                            {{ $avisosEnviados ?? 0 }}
                        </h2>

                    </div>

                </div>

            </div>

        </div>


        <!-- ==============================
             GRÁFICOS E ALERTAS
        ============================== -->

        <div class="row g-4">

            <!-- Gráfico de Frequência -->
            <div class="col-lg-8">

                <div class="card-custom h-100">

                    <h5 class="fw-bold mb-4">
                        Frequência Semanal por Turno
                    </h5>

                    <canvas id="graficoFrequencia"></canvas>

                </div>

            </div>


            <!-- Alertas -->
            <div class="col-lg-4">

                <div class="card-custom h-100">

                    <h5 class="fw-bold mb-4">
                        Risco de Evasão

                        <i class="fas fa-exclamation-triangle text-danger ms-2"></i>

                    </h5>

                    @forelse($alunosRisco ?? [] as $alunoRisco)

                        <div class="alert-item d-flex align-items-center mb-3">

                            <img src="https://ui-avatars.com/api/?name={{ urlencode($alunoRisco->nome) }}&background=random"
                                 class="rounded-circle me-3"
                                 width="35"
                                 alt="Avatar">

                            <div class="overflow-hidden">

                                <p class="m-0 small fw-bold">
                                    {{ $alunoRisco->nome }}
                                    ({{ $alunoRisco->turma }})
                                </p>

                                <small class="text-danger"
                                       style="font-size: 11px;">
                                    {{ $alunoRisco->motivo }}
                                </small>

                            </div>

                        </div>

                    @empty

                        <p class="text-muted small">
                            Nenhum aluno em risco crítico no momento.
                        </p>

                    @endforelse

                    <a href="#"
                       class="btn btn-light w-100 mt-3 rounded-3 border-0 fw-bold small py-2">

                        Ver todos os alertas

                    </a>

                </div>

            </div>


            <!-- Gráfico de Pizza -->
            <div class="col-md-6">

                <div class="card-custom">

                    <h5 class="fw-bold mb-4">
                        Matrículas por série
                    </h5>

                    <div style="position: relative; max-height: 250px; display: flex; justify-content: center;">

                        <canvas id="graficoPizza"></canvas>

                    </div>

                </div>

            </div>


            <!-- Próximos Eventos -->
            <div class="col-md-6">

                <div class="card-custom">

                    <h5 class="fw-bold mb-4">
                        Próximos Eventos
                    </h5>

                    @forelse($proximosEventos ?? [] as $evento)

                        @php

                            $campoData =
                                $evento->data
                                ?? $evento->data_evento
                                ?? $evento->created_at;

                            $dataEvento =
                                \Carbon\Carbon::parse($campoData);

                            $tituloEvento =
                                $evento->nome_evento
                                ?? $evento->titulo
                                ?? $evento->nome
                                ?? 'Evento sem título';

                            $localEvento =
                                $evento->local
                                ?? $evento->descricao
                                ?? 'Local não informado';

                            $bgClass =
                                $loop->first
                                ? 'bg-primary'
                                : 'bg-danger';

                        @endphp

                        <div class="d-flex align-items-center gap-3 p-2 border-bottom mb-2">

                            <div class="{{ $bgClass }} text-white p-2 rounded text-center"
                                 style="width: 50px; flex-shrink: 0;">

                                <span class="d-block fw-bold"
                                      style="line-height: 1;">

                                    {{ $dataEvento->format('d') }}

                                </span>

                                <small style="font-size: 10px;">

                                    {{ strtoupper($dataEvento->translatedFormat('M')) }}

                                </small>

                            </div>

                            <div class="overflow-hidden">

                                <p class="m-0 small fw-bold text-truncate">

                                    {{ $tituloEvento }}

                                </p>

                                <small class="text-muted text-truncate d-block">

                                    {{ $localEvento }}
                                    •
                                    {{ $dataEvento->format('H:i') }}

                                </small>

                            </div>

                        </div>

                    @empty

                        <div class="p-4 text-center text-muted small">

                            <i class="far fa-calendar-times d-block fs-4 mb-2"></i>

                            Nenhum evento cadastrado no banco de dados.

                        </div>

                    @endforelse

                </div>

            </div>

        </div>

    </main>

</div>


<!-- ==============================
     SCRIPTS
============================== -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>

document.addEventListener("DOMContentLoaded", function() {


    /* ==========================================
       1. GRÁFICO DE MATRÍCULAS POR SÉRIE
    ========================================== */

    const ctxPizza =
        document.getElementById('graficoPizza');

    if (ctxPizza) {

        new Chart(ctxPizza, {

            type: 'pie',

            data: {

                labels: {!! json_encode($labelsPizza ?? []) !!},

                datasets: [{

                    data: {!! json_encode($valoresPizza ?? []) !!},

                    backgroundColor: [
                        '#d32f2f',
                        '#1976d2',
                        '#388e3c',
                        '#fbc02d',
                        '#7b1fa2',
                        '#e65100'
                    ]

                }]

            },

            options: {

                responsive: true,

                maintainAspectRatio: false,

                plugins: {

                    legend: {
                        position: 'bottom'
                    }

                }

            }

        });

    }


    /* ==========================================
       2. GRÁFICO DE FREQUÊNCIA SEMANAL
    ========================================== */

    const ctxFreq =
        document.getElementById('graficoFrequencia');

    if (ctxFreq) {

        new Chart(ctxFreq, {

            type: 'bar',

            data: {

                labels: {!! json_encode($diasSemana ?? ['Seg', 'Ter', 'Qua', 'Qui', 'Sex']) !!},

                datasets: [

                    {

                        label: 'Manhã',

                        data: {!! json_encode($frequenciaManha ?? [0,0,0,0,0]) !!},

                        backgroundColor: '#d32f2f',

                        borderRadius: 6

                    },

                    {

                        label: 'Tarde',

                        data: {!! json_encode($frequenciaTarde ?? [0,0,0,0,0]) !!},

                        backgroundColor: '#1976d2',

                        borderRadius: 6

                    }

                ]

            },

            options: {

                responsive: true,

                scales: {

                    y: {

                        beginAtZero: true,

                        max: 100,

                        ticks: {

                            callback: function(value) {

                                return value + "%";

                            }

                        }

                    }

                }

            }

        });

    }

});

</script>


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


<!-- ACESSIBILIDADE -->

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

    new window.VLibras.Widget(
        'https://vlibras.gov.br/app'
    );

</script>

</body>
</html>