```php
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agenda de Eventos - SIFE</title>

    <!-- BOOTSTRAP -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- FONT AWESOME -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    >

    <!-- GOOGLE FONT -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <style>

        :root {
            --primary-red: #d32f2f;
            --primary-red-hover: #b71c1c;
            --primary-red-soft: #fff5f5;
            --bg-body: #f4f7f9;
            --sidebar-width: 280px;
            --text-main: #2d3436;
            --text-muted: #a0aec0;
            --border-color: #edf2f7;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-body);
            color: var(--text-main);
        }

        body.menu-open {
            overflow: hidden;
        }

        /* =========================
           WRAPPER
        ========================= */

        .wrapper {
            display: flex;
            min-height: 100vh;
            align-items: stretch;
        }

        /* =========================
           SIDEBAR
        ========================= */

        #sidebar {
            width: var(--sidebar-width);
            min-width: var(--sidebar-width);
            background: #ffffff;
            border-right: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
            padding: 25px 15px;
            position: sticky;
            top: 0;
            height: 100vh;
            z-index: 10000;
        }

        .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 15px 35px;
        }

        .brand-icon {
            background: var(--primary-red);
            color: white;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            font-size: 1.2rem;
        }

        .brand-name {
            font-weight: 800;
            font-size: 1.5rem;
            color: #1a202c;
            letter-spacing: -0.5px;
        }

        /* Botão fechar no mobile */

        .sidebar-close {
            display: none;
            margin-left: auto;
            width: 38px;
            height: 38px;
            border: none;
            border-radius: 10px;
            background: var(--primary-red-soft);
            color: var(--primary-red);
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .menu-category {
            font-size: 0.7rem;
            font-weight: 800;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 1.2px;
            margin: 25px 0 10px 15px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 12px 18px;
            color: #4a5568;
            font-weight: 600;
            text-decoration: none;
            border-radius: 15px;
            transition: 0.3s;
            margin-bottom: 4px;
        }

        .nav-link i {
            width: 22px;
            font-size: 1.1rem;
            color: var(--text-muted);
        }

        .nav-link:hover,
        .nav-link.active {
            background: var(--primary-red-soft);
            color: var(--primary-red);
        }

        .nav-link.active i {
            color: var(--primary-red);
        }

        /* =========================
           RODAPÉ SIDEBAR
        ========================= */

        .sidebar-footer {
            margin-top: auto;
            padding-top: 20px;
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
        }

        .btn-logout-sidebar {
            width: 38px;
            height: 38px;
            border: none;
            border-radius: 12px;
            background: white;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-logout-sidebar:hover {
            background: var(--primary-red);
            color: white;
        }

        /* =========================
           MENU MOBILE
        ========================= */

        .mobile-menu-btn {
            display: none;
            position: fixed;
            top: 15px;
            left: 15px;
            width: 48px;
            height: 48px;
            border: none;
            border-radius: 14px;
            background: white;
            color: var(--primary-red);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.10);
            z-index: 10001;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            cursor: pointer;
        }

        .mobile-menu-btn.hidden {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            pointer-events: none !important;
        }

        .mobile-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            z-index: 9998;
        }

        .mobile-overlay.active {
            display: block;
        }

        /* =========================
           CONTEÚDO
        ========================= */

        #content {
            flex-grow: 1;
            padding: 40px;
            overflow-y: auto;
            min-width: 0;
        }

        .page-header {
            margin-bottom: 35px;
        }

        .page-title {
            font-weight: 800;
            color: #1a202c;
            font-size: 1.75rem;
            letter-spacing: -1px;
        }

        /* =========================
           FILTROS
        ========================= */

        .filter-container {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .filter-pill {
            padding: 10px 20px;
            border-radius: 12px;
            border: 1px solid var(--border-color);
            background: white;
            color: #4a5568;
            font-weight: 600;
            font-size: 0.85rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .filter-pill:hover {
            background: var(--primary-red-soft);
            color: var(--primary-red);
            border-color: #ffd6d6;
        }

        .filter-pill.active {
            background: var(--primary-red);
            color: white;
            border-color: var(--primary-red);
        }

        /* =========================
           CARDS DE EVENTO
        ========================= */

        .event-card {
            background: white;
            border-radius: 25px;
            padding: 25px;
            border: 1px solid var(--border-color);
            margin-bottom: 20px;
            transition: 0.3s;
            display: flex;
            align-items: center;
            gap: 25px;
            border-left: 6px solid #cbd5e0;
        }

        .event-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.06);
        }

        /* =========================
           CORES DAS CATEGORIAS
        ========================= */

        .card-exam {
            border-left-color: var(--primary-red);
        }

        .card-meeting {
            border-left-color: #3182ce;
        }

        .card-holiday {
            border-left-color: #38a169;
        }

        .card-social {
            border-left-color: #805ad5;
        }

        /* =========================
           DATA
        ========================= */

        .event-date-box {
            min-width: 80px;
            height: 80px;
            background: #f8fafc;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px solid #eef2f7;
        }

        .date-day {
            font-size: 1.5rem;
            font-weight: 800;
            color: #1a202c;
            line-height: 1;
        }

        .date-month {
            font-size: 0.7rem;
            font-weight: 800;
            color: var(--text-muted);
            text-transform: uppercase;
            margin-top: 4px;
        }

        /* =========================
           INFORMAÇÕES
        ========================= */

        .event-info {
            flex-grow: 1;
            min-width: 0;
        }

        .event-category {
            font-size: 0.65rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 4px;
            display: block;
        }

        .category-exam {
            color: var(--primary-red);
        }

        .category-meeting {
            color: #3182ce;
        }

        .category-holiday {
            color: #38a169;
        }

        .category-social {
            color: #805ad5;
        }

        .event-name {
            font-size: 1.15rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 8px;
        }

        .event-details {
            font-size: 0.85rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        .event-details i {
            margin-right: 6px;
            width: 14px;
            text-align: center;
        }

        /* =========================
           BOTÃO DE LEMBRETE
        ========================= */

        .btn-remind {
            width: 45px;
            height: 45px;
            min-width: 45px;
            border-radius: 12px;
            border: 1px solid #edf2f7;
            background: #f8fafc;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-remind:hover {
            background: var(--primary-red-soft);
            color: var(--primary-red);
            border-color: #ffd6d6;
        }

        .btn-remind.active {
            background: var(--primary-red);
            color: white;
            border-color: var(--primary-red);
        }

        /* =========================
           SEM RESULTADOS
        ========================= */

        .no-events {
            display: none;
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 25px;
            padding: 50px 30px;
            text-align: center;
            color: var(--text-muted);
        }

        .no-events i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #cbd5e0;
        }

        .no-events h4 {
            color: #4a5568;
            font-weight: 700;
            margin-bottom: 8px;
        }

        /* =========================
           TABLET
        ========================= */

        @media (max-width: 991px) {

            #content {
                padding: 30px;
            }

            .event-card {
                gap: 18px;
            }

        }

        /* =========================
           CELULAR
        ========================= */

        @media (max-width: 768px) {

            body {
                overflow-x: hidden;
            }

            .wrapper {
                display: block;
                min-height: 100vh;
            }

            .mobile-menu-btn {
                display: flex;
            }

            .mobile-menu-btn.hidden {
                display: none !important;
                visibility: hidden !important;
                opacity: 0 !important;
                pointer-events: none !important;
            }

            #sidebar {
                position: fixed;
                left: -300px;
                top: 0;
                bottom: 0;
                width: min(280px, 85vw);
                min-width: 0;
                height: 100vh;
                padding: 25px 15px;
                transition: left 0.3s ease;
                box-shadow: 8px 0 30px rgba(0, 0, 0, 0.12);
                overflow-y: auto;
            }

            #sidebar.active {
                left: 0;
            }

            .sidebar-brand {
                padding-bottom: 25px;
            }

            .sidebar-close {
                display: flex;
            }

            .menu-category {
                margin-top: 20px;
            }

            #content {
                width: 100%;
                padding: 85px 16px 30px;
                overflow-y: visible;
            }

            .page-header {
                margin-bottom: 25px;
            }

            .page-title {
                font-size: 1.45rem;
            }

            .filter-container {
                flex-wrap: nowrap;
                overflow-x: auto;
                padding-bottom: 5px;
                margin-bottom: 25px;
                scrollbar-width: none;
            }

            .filter-container::-webkit-scrollbar {
                display: none;
            }

            .filter-pill {
                flex: 0 0 auto;
                white-space: nowrap;
                padding: 9px 15px;
            }

            .event-card {
                flex-direction: column;
                align-items: flex-start;
                text-align: left;
                padding: 20px;
                gap: 15px;
                border-radius: 20px;
            }

            .event-date-box {
                width: 100%;
                height: 55px;
                min-width: 0;
                flex-direction: row;
                gap: 10px;
            }

            .date-day {
                font-size: 1.35rem;
            }

            .event-name {
                font-size: 1rem;
                line-height: 1.4;
            }

            .event-details {
                display: flex;
                flex-direction: column;
                gap: 8px;
            }

            .event-details .ms-3 {
                margin-left: 0 !important;
            }

            .btn-remind {
                align-self: flex-end;
                margin-top: -5px;
            }

        }

        /* =========================
           CELULARES PEQUENOS
        ========================= */

        @media (max-width: 400px) {

            #content {
                padding-left: 12px;
                padding-right: 12px;
            }

            .event-card {
                padding: 17px;
            }

            .page-title {
                font-size: 1.3rem;
            }

            .event-name {
                font-size: 0.95rem;
            }

            .event-details {
                font-size: 0.78rem;
            }

        }

    </style>

</head>

<body>

    <!-- =========================
         BOTÃO MENU MOBILE
    ========================= -->

    <button
        type="button"
        class="mobile-menu-btn"
        id="mobileMenuBtn"
        aria-label="Abrir menu"
        aria-controls="sidebar"
        aria-expanded="false"
    >
        <i class="fas fa-bars"></i>
    </button>

    <!-- FUNDO ESCURO -->

    <div
        class="mobile-overlay"
        id="mobileOverlay"
    ></div>

    <div class="wrapper">

        <!-- =========================
             SIDEBAR
        ========================= -->

        <nav id="sidebar">

            <div class="sidebar-brand">

                <div class="brand-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>

                <span class="brand-name">
                    SIFE
                </span>

                <button
                    type="button"
                    class="sidebar-close"
                    id="sidebarClose"
                    aria-label="Fechar menu"
                >
                    <i class="fas fa-xmark"></i>
                </button>

            </div>

            <div class="nav-menu">

                <div class="menu-category">
                    Meu Painel
                </div>

                <a
                    href="{{ route('perfilAluno') }}"
                    class="nav-link"
                >
                    <i class="fas fa-user-circle"></i>

                    <span>
                        Meu Perfil
                    </span>
                </a>

                <a
                    href="{{ route('notasAluno') }}"
                    class="nav-link"
                >
                    <i class="fas fa-star"></i>

                    <span>
                        Minhas Notas
                    </span>
                </a>

                <a
                    href="{{ route('frequenciaAluno') }}"
                    class="nav-link"
                >
                    <i class="fas fa-calendar-check"></i>

                    <span>
                        Frequência
                    </span>
                </a>

                <div class="menu-category">
                    Acadêmico
                </div>

                <a
                    href="{{ route('materiaAluno') }}"
                    class="nav-link"
                >
                    <i class="fas fa-book-open"></i>

                    <span>
                        Matérias
                    </span>
                </a>

                <a
                    href="{{ route('eventosAluno') }}"
                    class="nav-link active"
                >
                    <i class="fas fa-calendar-alt"></i>

                    <span>
                        Eventos
                    </span>
                </a>

            </div>

            <!-- =========================
                 USUÁRIO
            ========================= -->

            <div class="sidebar-footer">

                <div class="user-profile-item">

                    <div class="avatar-circle">

                        @if(Auth::check())

                            @php

                                $nomeUsuario = Auth::user()->nome ?? Auth::user()->name ?? 'Usuário';

                                $nomes = explode(' ', trim($nomeUsuario));

                                $primeiraLetra = mb_substr(
                                    $nomes[0] ?? 'U',
                                    0,
                                    1
                                );

                                $segundaLetra = isset($nomes[1])
                                    ? mb_substr($nomes[1], 0, 1)
                                    : '';

                                echo strtoupper(
                                    $primeiraLetra . $segundaLetra
                                );

                            @endphp

                        @else

                            US

                        @endif

                    </div>

                    <div class="overflow-hidden flex-grow-1">

                        <p class="m-0 small fw-bold text-dark text-truncate">

                            {{ Auth::check() ? (Auth::user()->nome ?? Auth::user()->name) : 'Usuário' }}

                        </p>

                        <p
                            class="m-0 text-muted text-truncate"
                            style="font-size: 11px;"
                        >

                            {{ Auth::check() ? Auth::user()->email : 'RA: 20260000' }}

                        </p>

                    </div>

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

        <!-- =========================
             CONTEÚDO
        ========================= -->

        <main id="content">

            <div class="page-header">

                <p
                    class="text-muted fw-bold mb-1"
                    style="
                        font-size: 0.75rem;
                        letter-spacing: 1px;
                        text-transform: uppercase;
                    "
                >
                    Institucional
                </p>

                <h2 class="page-title">
                    Calendário de Eventos
                </h2>

            </div>

            <!-- =========================
                 FILTROS
            ========================= -->

            <div class="filter-container">

                <button
                    class="filter-pill active"
                    data-filter="todos"
                    type="button"
                >
                    Todos
                </button>

                <button
                    class="filter-pill"
                    data-filter="provas"
                    type="button"
                >
                    Provas
                </button>

                <button
                    class="filter-pill"
                    data-filter="reunioes"
                    type="button"
                >
                    Reuniões
                </button>

                <button
                    class="filter-pill"
                    data-filter="feriados"
                    type="button"
                >
                    Feriados
                </button>

                <button
                    class="filter-pill"
                    data-filter="social"
                    type="button"
                >
                    Cultura & Lazer
                </button>

            </div>

            <!-- =========================
                 LISTA DE EVENTOS
            ========================= -->

            <div class="event-list">

                <!-- PROVA DE BIOLOGIA -->

                <div
                    class="event-card card-exam"
                    data-category="provas"
                >

                    <div class="event-date-box">

                        <span class="date-day">
                            28
                        </span>

                        <span class="date-month">
                            Mai
                        </span>

                    </div>

                    <div class="event-info">

                        <span class="event-category category-exam">
                            Avaliação Bimestral
                        </span>

                        <h4 class="event-name">
                            Prova de Biologia - Genética
                        </h4>

                        <div class="event-details">

                            <span>
                                <i class="far fa-clock"></i>
                                08:00 - 10:00
                            </span>

                            <span class="ms-3">
                                <i class="fas fa-map-marker-alt"></i>
                                Bloco B - Sala 04
                            </span>

                        </div>

                    </div>

                    <button
                        class="btn-remind"
                        title="Me lembre"
                        type="button"
                    >
                        <i class="far fa-bell"></i>
                    </button>

                </div>

                <!-- REUNIÃO -->

                <div
                    class="event-card card-meeting"
                    data-category="reunioes"
                >

                    <div class="event-date-box">

                        <span class="date-day">
                            02
                        </span>

                        <span class="date-month">
                            Jun
                        </span>

                    </div>

                    <div class="event-info">

                        <span class="event-category category-meeting">
                            Reunião
                        </span>

                        <h4 class="event-name">
                            Conselho de Classe - 1º Semestre
                        </h4>

                        <div class="event-details">

                            <span>
                                <i class="far fa-clock"></i>
                                14:00
                            </span>

                            <span class="ms-3">
                                <i class="fas fa-video"></i>
                                Online via Google Meet
                            </span>

                        </div>

                    </div>

                    <button
                        class="btn-remind"
                        title="Me lembre"
                        type="button"
                    >
                        <i class="far fa-bell"></i>
                    </button>

                </div>

                <!-- FERIADO -->

                <div
                    class="event-card card-holiday"
                    data-category="feriados"
                >

                    <div class="event-date-box">

                        <span class="date-day">
                            11
                        </span>

                        <span class="date-month">
                            Jun
                        </span>

                    </div>

                    <div class="event-info">

                        <span class="event-category category-holiday">
                            Feriado Nacional
                        </span>

                        <h4 class="event-name">
                            Corpus Christi
                        </h4>

                        <div class="event-details">

                            <span>
                                <i class="fas fa-info-circle"></i>
                                Não haverá aulas presenciais ou online.
                            </span>

                        </div>

                    </div>

                </div>

                <!-- FESTA JUNINA -->

                <div
                    class="event-card card-social"
                    data-category="social"
                >

                    <div class="event-date-box">

                        <span class="date-day">
                            20
                        </span>

                        <span class="date-month">
                            Jun
                        </span>

                    </div>

                    <div class="event-info">

                        <span class="event-category category-social">
                            Cultura & Lazer
                        </span>

                        <h4 class="event-name">
                            Festa Junina do SIFE
                        </h4>

                        <div class="event-details">

                            <span>
                                <i class="far fa-clock"></i>
                                18:00 - 22:00
                            </span>

                            <span class="ms-3">
                                <i class="fas fa-map-marker-alt"></i>
                                Pátio Central / Ginásio
                            </span>

                        </div>

                    </div>

                    <button
                        class="btn-remind"
                        title="Me lembre"
                        type="button"
                    >
                        <i class="far fa-bell"></i>
                    </button>

                </div>

                <!-- PROVA DE MATEMÁTICA -->

                <div
                    class="event-card card-exam"
                    data-category="provas"
                >

                    <div class="event-date-box">

                        <span class="date-day">
                            25
                        </span>

                        <span class="date-month">
                            Jun
                        </span>

                    </div>

                    <div class="event-info">

                        <span class="event-category category-exam">
                            Avaliação Mensal
                        </span>

                        <h4 class="event-name">
                            Prova de Matemática - Trigonometria
                        </h4>

                        <div class="event-details">

                            <span>
                                <i class="far fa-clock"></i>
                                10:15 - 12:00
                            </span>

                            <span class="ms-3">
                                <i class="fas fa-map-marker-alt"></i>
                                Bloco A - Sala 08
                            </span>

                        </div>

                    </div>

                    <button
                        class="btn-remind"
                        title="Me lembre"
                        type="button"
                    >
                        <i class="far fa-bell"></i>
                    </button>

                </div>

            </div>

            <!-- =========================
                 SEM RESULTADOS
            ========================= -->

            <div
                class="no-events"
                id="noEvents"
            >

                <i class="fas fa-calendar-xmark"></i>

                <h4>
                    Nenhum evento encontrado
                </h4>

                <p class="mb-0">
                    Não existem eventos nesta categoria.
                </p>

            </div>

        </main>

    </div>

    <!-- =========================
         ACESSIBILIDADE
    ========================= -->

    <x-acessibilidade />

    <!-- =========================
         BOOTSTRAP
    ========================= -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    ></script>

    <!-- =========================
         VLIBRAS
    ========================= -->

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

    <!-- =========================
         JAVASCRIPT
    ========================= -->

    <script>

        /* =====================================
           MENU MOBILE
        ===================================== */

        const mobileMenuBtn =
            document.getElementById('mobileMenuBtn');

        const sidebar =
            document.getElementById('sidebar');

        const mobileOverlay =
            document.getElementById('mobileOverlay');

        const sidebarClose =
            document.getElementById('sidebarClose');


        function abrirMenu() {

            mobileMenuBtn.classList.add('hidden');

            sidebar.classList.add('active');

            mobileOverlay.classList.add('active');

            mobileMenuBtn.setAttribute(
                'aria-expanded',
                'true'
            );

            document.body.classList.add('menu-open');

        }


        function fecharMenu() {

            sidebar.classList.remove('active');

            mobileOverlay.classList.remove('active');

            mobileMenuBtn.classList.remove('hidden');

            mobileMenuBtn.setAttribute(
                'aria-expanded',
                'false'
            );

            document.body.classList.remove('menu-open');

        }


        mobileMenuBtn.addEventListener(
            'click',
            abrirMenu
        );


        sidebarClose.addEventListener(
            'click',
            fecharMenu
        );


        mobileOverlay.addEventListener(
            'click',
            fecharMenu
        );


        /* Fecha o menu quando clicar em alguma página */

        const linksMenu =
            sidebar.querySelectorAll('.nav-link');


        linksMenu.forEach(link => {

            link.addEventListener(
                'click',
                fecharMenu
            );

        });


        /* Fecha com ESC */

        document.addEventListener(
            'keydown',
            function(event) {

                if (event.key === 'Escape') {

                    fecharMenu();

                }

            }
        );


        /* =====================================
           FILTROS DOS EVENTOS
        ===================================== */

        const filtros =
            document.querySelectorAll('.filter-pill');

        const eventos =
            document.querySelectorAll('.event-card');

        const noEvents =
            document.getElementById('noEvents');


        filtros.forEach(filtro => {

            filtro.addEventListener(
                'click',
                function() {

                    filtros.forEach(item => {

                        item.classList.remove(
                            'active'
                        );

                    });


                    this.classList.add('active');


                    const categoriaSelecionada =
                        this.dataset.filter;


                    let eventosVisiveis = 0;


                    eventos.forEach(evento => {

                        const categoriaEvento =
                            evento.dataset.category;


                        if (
                            categoriaSelecionada ===
                            'todos'
                        ) {

                            evento.style.display =
                                'flex';

                            eventosVisiveis++;

                        }

                        else if (
                            categoriaEvento ===
                            categoriaSelecionada
                        ) {

                            evento.style.display =
                                'flex';

                            eventosVisiveis++;

                        }

                        else {

                            evento.style.display =
                                'none';

                        }

                    });


                    if (eventosVisiveis === 0) {

                        noEvents.style.display =
                            'block';

                    }

                    else {

                        noEvents.style.display =
                            'none';

                    }

                }
            );

        });


        /* =====================================
           BOTÕES DE LEMBRETE
           
           O estado dos lembretes é salvo no
           localStorage, então continua marcado
           mesmo depois de sair da página.
        ===================================== */

        const botoesLembrete =
            document.querySelectorAll('.btn-remind');


        /*
         * Recupera os lembretes salvos anteriormente.
         *
         * Se não existir nenhum, começa com
         * uma lista vazia.
         */
        let lembretesAtivos =
            JSON.parse(
                localStorage.getItem('sife_lembretes')
            ) || [];


        /*
         * Cria um ID único para cada evento.
         *
         * Usamos nome + dia + mês para que o
         * navegador saiba qual evento foi marcado.
         */
        function obterIdEvento(evento) {

            const nome =
                evento.querySelector(
                    '.event-name'
                )?.textContent.trim() || '';

            const data =
                evento.querySelector(
                    '.date-day'
                )?.textContent.trim() || '';

            const mes =
                evento.querySelector(
                    '.date-month'
                )?.textContent.trim() || '';


            return `${nome}-${data}-${mes}`;

        }


        /*
         * Atualiza o visual do botão.
         */
        function atualizarBotao(botao, ativo) {

            const icone =
                botao.querySelector('i');


            if (ativo) {

                botao.classList.add('active');

                icone.classList.remove('far');

                icone.classList.add('fas');

                botao.title =
                    'Lembrete ativado';

            }

            else {

                botao.classList.remove('active');

                icone.classList.remove('fas');

                icone.classList.add('far');

                botao.title =
                    'Me lembre';

            }

        }


        /*
         * Ao carregar a página, verifica quais
         * eventos já estavam marcados.
         */
        botoesLembrete.forEach(botao => {

            const evento =
                botao.closest('.event-card');


            const idEvento =
                obterIdEvento(evento);


            /*
             * Se o evento estiver salvo no
             * localStorage, deixa a campainha
             * ativada.
             */
            if (
                lembretesAtivos.includes(
                    idEvento
                )
            ) {

                atualizarBotao(
                    botao,
                    true
                );

            }


            /*
             * Quando o usuário clicar na
             * campainha.
             */
            botao.addEventListener(
                'click',
                function() {

                    const evento =
                        this.closest('.event-card');


                    const idEvento =
                        obterIdEvento(evento);


                    const jaAtivo =
                        this.classList.contains(
                            'active'
                        );


                    /*
                     * =========================
                     * DESATIVAR
                     * =========================
                     */

                    if (jaAtivo) {

                        atualizarBotao(
                            this,
                            false
                        );


                        lembretesAtivos =
                            lembretesAtivos.filter(
                                id =>
                                    id !== idEvento
                            );

                    }


                    /*
                     * =========================
                     * ATIVAR
                     * =========================
                     */

                    else {

                        atualizarBotao(
                            this,
                            true
                        );


                        /*
                         * Evita salvar o mesmo
                         * evento duas vezes.
                         */
                        if (
                            !lembretesAtivos.includes(
                                idEvento
                            )
                        ) {

                            lembretesAtivos.push(
                                idEvento
                            );

                        }

                    }


                    /*
                     * Salva a lista atualizada
                     * no navegador.
                     */
                    localStorage.setItem(
                        'sife_lembretes',
                        JSON.stringify(
                            lembretesAtivos
                        )
                    );

                }
            );

        });


        /* =====================================
           GARANTE O ESTADO CORRETO AO REDIMENSIONAR
        ===================================== */

        window.addEventListener(
            'resize',
            function() {

                if (window.innerWidth > 768) {

                    sidebar.classList.remove(
                        'active'
                    );

                    mobileOverlay.classList.remove(
                        'active'
                    );

                    mobileMenuBtn.classList.remove(
                        'hidden'
                    );

                    mobileMenuBtn.setAttribute(
                        'aria-expanded',
                        'false'
                    );

                    document.body.classList.remove(
                        'menu-open'
                    );

                }

            }
        );

    </script>

</body>

</html>
```
