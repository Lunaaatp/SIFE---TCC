<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Minhas Matérias - SIFE</title>

    <!-- =========================
         BOOTSTRAP
    ========================= -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- =========================
         FONT AWESOME
    ========================= -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    >

    <!-- =========================
         GOOGLE FONT
    ========================= -->
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
            overflow-x: hidden;
        }

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
            z-index: 1100;
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
           RODAPÉ DA SIDEBAR
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
            border-radius: 15px;
            background: var(--primary-red-soft);
        }

        /* =========================
           PERFIL CLICÁVEL
        ========================= */

        .profile-link {
            display: flex;
            align-items: center;
            gap: 12px;
            flex: 1;
            min-width: 0;
            text-decoration: none;
            color: inherit;
            border-radius: 10px;
        }

        .profile-link:hover {
            color: inherit;
        }

        /* =========================
           AVATAR
        ========================= */

        .avatar-circle {
            width: 42px;
            height: 42px;
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

        /* =========================
           BOTÃO SAIR
        ========================= */

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
           CONTEÚDO
        ========================= */

        #content {
            flex-grow: 1;
            padding: 40px;
            overflow-y: auto;
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
           CARDS DE MATÉRIA
        ========================= */

        .card-subject {
            background: white;
            border-radius: 30px;
            padding: 30px;
            border: 1px solid var(--border-color);
            height: 100%;
            transition: 0.3s;
            display: flex;
            flex-direction: column;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
        }

        .card-subject:hover {
            transform: translateY(-7px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.06);
        }

        .icon-box {
            width: 55px;
            height: 55px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 20px;
        }

        .subject-title {
            font-size: 1.25rem;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 5px;
        }

        .teacher-name {
            font-size: 0.85rem;
            color: var(--text-muted);
            font-weight: 600;
            margin-bottom: 20px;
        }

        .subject-info {
            background: #f8fafc;
            border-radius: 15px;
            padding: 15px;
            margin-bottom: 20px;
            font-size: 0.85rem;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .info-item:last-child {
            margin-bottom: 0;
        }

        .info-label {
            color: var(--text-muted);
            font-weight: 600;
        }

        .info-value {
            color: #2d3748;
            font-weight: 700;
        }

        /* =========================
           BOTÃO DE MATERIAIS
        ========================= */

        .btn-materiais {
            margin-top: auto;
            background: var(--primary-red-soft);
            color: var(--primary-red);
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 14px;
            font-weight: 700;
            transition: 0.3s;
            display: inline-block;
            text-align: center;
            text-decoration: none;
        }

        .btn-materiais:hover {
            background: var(--primary-red);
            color: white;
        }

        /* =========================
           BOTÃO MENU MOBILE
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

            /* BOTÃO BRANCO */
            background: #ffffff;

            /* BARRINHAS VERMELHAS */
            color: var(--primary-red);

            font-size: 1.25rem;
            align-items: center;
            justify-content: center;
            z-index: 12000;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        /* GARANTE QUE AS BARRINHAS FIQUEM VERMELHAS */
        .mobile-menu-btn i {
            color: var(--primary-red) !important;
        }

        /* QUANDO O MENU ESTIVER ABERTO */

        .mobile-menu-btn.hidden {
            display: none !important;
        }

        /* =========================
           OVERLAY MOBILE
        ========================= */

        .mobile-overlay {
            display: none;
        }

        /* =========================
           BOTÃO FECHAR SIDEBAR
        ========================= */

        .sidebar-close {
            display: none;
        }

        /* =========================
           RESPONSIVO
        ========================= */

        @media (max-width: 1100px) {

            .wrapper {
                flex-direction: column;
            }

            #sidebar {
                width: 100%;
                min-width: 100%;
                height: auto;
                position: relative;
            }

            #content {
                padding: 20px;
            }
        }

        /* =========================
           MENU MOBILE - PADRÃO SIFE
        ========================= */

        @media (max-width: 768px) {

            body.menu-open {
                overflow: hidden;
            }

            .wrapper {
                display: block;
                min-height: 100vh;
            }

            /* =========================
               BOTÃO HAMBÚRGUER
            ========================= */

            .mobile-menu-btn {
                display: flex;

                /* BRANCO */
                background: #ffffff;

                /* VERMELHO */
                color: var(--primary-red);
            }

            .mobile-menu-btn i {
                color: var(--primary-red) !important;
            }

            .mobile-menu-btn.hidden {
                display: none !important;
            }

            /* =========================
               SIDEBAR
            ========================= */

            #sidebar {
                position: fixed;
                left: -300px;
                top: 0;
                bottom: auto;
                z-index: 9999;
                width: min(280px, 85vw);
                min-width: 0;
                height: 100vh;
                padding: 25px 15px;
                background: #ffffff;
                border-right: 1px solid var(--border-color);
                border-top: none;
                box-shadow: 5px 0 20px rgba(0, 0, 0, 0.12);
                display: flex;
                transition: left 0.3s ease;
            }

            #sidebar.active {
                left: 0;
            }

            .sidebar-brand {
                display: flex;
                padding: 0 15px 35px;
                position: relative;
            }

            .menu-category {
                display: block;
            }

            .sidebar-footer {
                display: flex;
            }

            .nav-menu {
                width: 100%;
            }

            .nav-link {
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: flex-start;
                gap: 14px;
                height: auto;
                padding: 12px 18px;
                border-radius: 15px;
                margin-bottom: 4px;
                font-size: 1rem;
                text-align: left;
            }

            .nav-link i {
                width: 22px;
                margin: 0;
                font-size: 1.1rem;
            }

            /* =========================
               BOTÃO X
            ========================= */

            .sidebar-close {
                display: flex;
                position: absolute;
                top: 23px;
                right: 15px;
                width: 38px;
                height: 38px;
                border: none;
                border-radius: 12px;
                background: var(--primary-red-soft);
                color: var(--primary-red);
                align-items: center;
                justify-content: center;
                cursor: pointer;
                font-size: 1rem;
            }

            .sidebar-close:hover {
                background: var(--primary-red);
                color: white;
            }

            /* =========================
               OVERLAY
            ========================= */

            .mobile-overlay {
                position: fixed;
                inset: 0;
                background: rgba(0, 0, 0, 0.45);
                z-index: 9998;
                display: none;
            }

            .mobile-overlay.active {
                display: block;
            }

            /* =========================
               CONTEÚDO
            ========================= */

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

            .card-subject {
                padding: 22px;
                border-radius: 20px;
            }
        }

        @media (max-width: 480px) {

            #content {
                padding-left: 16px;
                padding-right: 16px;
            }

            .card-subject {
                padding: 20px;
            }

            .subject-info {
                padding: 13px;
            }

            .info-item {
                gap: 10px;
            }

            .info-value {
                text-align: right;
            }
        }

    </style>

</head>

<body>

    <!-- =========================
         BOTÃO MENU MOBILE
    ========================= -->

    <button
        id="mobileMenuBtn"
        class="mobile-menu-btn"
        type="button"
        aria-label="Abrir menu"
        aria-expanded="false"
    >
        <i class="fas fa-bars"></i>
    </button>

    <!-- =========================
         OVERLAY MOBILE
    ========================= -->

    <div
        id="mobileOverlay"
        class="mobile-overlay"
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

                <!-- BOTÃO FECHAR -->

                <button
                    id="sidebarClose"
                    class="sidebar-close"
                    type="button"
                    aria-label="Fechar menu"
                >
                    <i class="fas fa-xmark"></i>
                </button>

            </div>

            <div class="nav-menu">

                <div class="menu-category">
                    Meu Painel
                </div>

                <!-- MEU PERFIL -->

                <a
                    href="{{ route('perfilAluno') }}"
                    class="nav-link"
                >
                    <i class="fas fa-user-circle"></i>

                    <span>
                        Meu Perfil
                    </span>
                </a>

                <!-- MINHAS NOTAS -->

                <a
                    href="{{ route('notasAluno') }}"
                    class="nav-link"
                >
                    <i class="fas fa-star"></i>

                    <span>
                        Minhas Notas
                    </span>
                </a>

                <!-- FREQUÊNCIA -->

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

                <!-- MATÉRIAS -->

                <a
                    href="{{ route('materiaAluno') }}"
                    class="nav-link active"
                >
                    <i class="fas fa-book-open"></i>

                    <span>
                        Matérias
                    </span>
                </a>

                <!-- EVENTOS -->

                <a
                    href="{{ route('eventosAluno') }}"
                    class="nav-link"
                >
                    <i class="fas fa-calendar-alt"></i>

                    <span>
                        Eventos
                    </span>
                </a>

            </div>

            <!-- =========================
                 PERFIL NO RODAPÉ
            ========================= -->

            <div class="sidebar-footer">

                <div class="user-profile-item">

                    <!-- PERFIL -->

                    <a
                        href="{{ route('perfilAluno') }}"
                        class="profile-link"
                    >

                        <div class="avatar-circle">

                            @if(Auth::check())

                                @php

                                    $nomes = explode(
                                        ' ',
                                        Auth::user()->nome
                                    );

                                    $primeiraLetra = mb_substr(
                                        $nomes[0] ?? 'A',
                                        0,
                                        1
                                    );

                                    $segundaLetra = isset($nomes[1])
                                        ? mb_substr(
                                            $nomes[1],
                                            0,
                                            1
                                        )
                                        : '';

                                    echo strtoupper(
                                        $primeiraLetra .
                                        $segundaLetra
                                    );

                                @endphp

                            @else

                                US

                            @endif

                        </div>

                        <div class="overflow-hidden">

                            <p
                                class="m-0 small fw-bold text-dark text-truncate"
                            >
                                {{ Auth::check()
                                    ? Auth::user()->nome
                                    : 'Usuário'
                                }}
                            </p>

                            <p
                                class="m-0 text-muted text-truncate"
                                style="font-size: 11px;"
                            >
                                {{ Auth::check()
                                    ? Auth::user()->email
                                    : 'RA: 20260000'
                                }}
                            </p>

                        </div>

                    </a>

                    <!-- BOTÃO SAIR -->

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
             CONTEÚDO PRINCIPAL
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
                    Grade Curricular
                </p>

                <h2 class="page-title">
                    Minhas Matérias
                </h2>

            </div>

            <div class="row g-4">

                <!-- =========================
                     MATEMÁTICA
                ========================= -->

                <div class="col-xl-4 col-md-6">

                    <div class="card-subject">

                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-calculator"></i>
                        </div>

                        <h4 class="subject-title">
                            Matemática
                        </h4>

                        <p class="teacher-name">
                            Prof. Marcos Oliveira
                        </p>

                        <div class="subject-info">

                            <div class="info-item">

                                <span class="info-label">
                                    Horário:
                                </span>

                                <span class="info-value">
                                    Segunda e Quarta
                                </span>

                            </div>

                            <div class="info-item">

                                <span class="info-label">
                                    Sala:
                                </span>

                                <span class="info-value">
                                    Bloco B - Sala 04
                                </span>

                            </div>

                        </div>

                        <a
                            href="{{ route('materiaisMatematica') }}"
                            class="btn-materiais"
                        >
                            ACESSAR MATERIAIS
                        </a>

                    </div>

                </div>

                <!-- =========================
                     PORTUGUÊS
                ========================= -->

                <div class="col-xl-4 col-md-6">

                    <div class="card-subject">

                        <div class="icon-box bg-primary-subtle text-primary">
                            <i class="fas fa-language"></i>
                        </div>

                        <h4 class="subject-title">
                            Língua Portuguesa
                        </h4>

                        <p class="teacher-name">
                            Profa. Ana Beatriz Costa
                        </p>

                        <div class="subject-info">

                            <div class="info-item">

                                <span class="info-label">
                                    Horário:
                                </span>

                                <span class="info-value">
                                    Terça e Quinta
                                </span>

                            </div>

                            <div class="info-item">

                                <span class="info-label">
                                    Sala:
                                </span>

                                <span class="info-value">
                                    Bloco A - Sala 12
                                </span>

                            </div>

                        </div>

                        <a
                            href="{{ route('materiaisPortugues') }}"
                            class="btn-materiais"
                        >
                            ACESSAR MATERIAIS
                        </a>

                    </div>

                </div>

                <!-- =========================
                     FÍSICA
                ========================= -->

                <div class="col-xl-4 col-md-6">

                    <div class="card-subject">

                        <div class="icon-box bg-warning-subtle text-warning">
                            <i class="fas fa-atom"></i>
                        </div>

                        <h4 class="subject-title">
                            Física
                        </h4>

                        <p class="teacher-name">
                            Prof. Ricardo Santos
                        </p>

                        <div class="subject-info">

                            <div class="info-item">

                                <span class="info-label">
                                    Horário:
                                </span>

                                <span class="info-value">
                                    Quarta e Sexta
                                </span>

                            </div>

                            <div class="info-item">

                                <span class="info-label">
                                    Sala:
                                </span>

                                <span class="info-value">
                                    Laboratório 01
                                </span>

                            </div>

                        </div>

                        <a
                            href="{{ route('materiais.fisica') }}"
                            class="btn-materiais"
                        >
                            ACESSAR MATERIAIS
                        </a>

                    </div>

                </div>

                <!-- =========================
                     HISTÓRIA
                ========================= -->

                <div class="col-xl-4 col-md-6">

                    <div class="card-subject">

                        <div class="icon-box bg-success-subtle text-success">
                            <i class="fas fa-landmark"></i>
                        </div>

                        <h4 class="subject-title">
                            História
                        </h4>

                        <p class="teacher-name">
                            Profa. Juliana Mendes
                        </p>

                        <div class="subject-info">

                            <div class="info-item">

                                <span class="info-label">
                                    Horário:
                                </span>

                                <span class="info-value">
                                    Segunda e Sexta
                                </span>

                            </div>

                            <div class="info-item">

                                <span class="info-label">
                                    Sala:
                                </span>

                                <span class="info-value">
                                    Bloco C - Sala 02
                                </span>

                            </div>

                        </div>

                        <a
                            href="{{ route('materiais.historia') }}"
                            class="btn-materiais"
                        >
                            ACESSAR MATERIAIS
                        </a>

                    </div>

                </div>

                <!-- =========================
                     BIOLOGIA
                ========================= -->

                <div class="col-xl-4 col-md-6">

                    <div class="card-subject">

                        <div class="icon-box bg-info-subtle text-info">
                            <i class="fas fa-dna"></i>
                        </div>

                        <h4 class="subject-title">
                            Biologia
                        </h4>

                        <p class="teacher-name">
                            Prof. Fernando Rocha
                        </p>

                        <div class="subject-info">

                            <div class="info-item">

                                <span class="info-label">
                                    Horário:
                                </span>

                                <span class="info-value">
                                    Terça-feira
                                </span>

                            </div>

                            <div class="info-item">

                                <span class="info-label">
                                    Sala:
                                </span>

                                <span class="info-value">
                                    Laboratório 02
                                </span>

                            </div>

                        </div>

                        <a
                            href="{{ route('materiais.biologia') }}"
                            class="btn-materiais"
                        >
                            ACESSAR MATERIAIS
                        </a>

                    </div>

                </div>

                <!-- =========================
                     QUÍMICA
                ========================= -->

                <div class="col-xl-4 col-md-6">

                    <div class="card-subject">

                        <div
                            class="icon-box"
                            style="
                                background-color: #f3e5f5;
                                color: #7b1fa2;
                            "
                        >
                            <i class="fas fa-vial"></i>
                        </div>

                        <h4 class="subject-title">
                            Química
                        </h4>

                        <p class="teacher-name">
                            Profa. Cláudia Lima
                        </p>

                        <div class="subject-info">

                            <div class="info-item">

                                <span class="info-label">
                                    Horário:
                                </span>

                                <span class="info-value">
                                    Quinta-feira
                                </span>

                            </div>

                            <div class="info-item">

                                <span class="info-label">
                                    Sala:
                                </span>

                                <span class="info-value">
                                    Bloco B - Sala 08
                                </span>

                            </div>

                        </div>

                        <a
                            href="{{ route('materiais.quimica') }}"
                            class="btn-materiais"
                        >
                            ACESSAR MATERIAIS
                        </a>

                    </div>

                </div>

            </div>

        </main>

    </div>

    <!-- =========================
         ACESSIBILIDADE
    ========================= -->

    <x-acessibilidade />

    <!-- =========================
         BOOTSTRAP JS
    ========================= -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    ></script>

    <!-- =========================
         VLIBRAS
    ========================= -->

    <div vw class="enabled">

        <div
            vw-access-button
            class="active"
        ></div>

        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>

    </div>

    <script
        src="https://vlibras.gov.br/app/vlibras-plugin.js"
    ></script>

    <script>
        new window.VLibras.Widget(
            'https://vlibras.gov.br/app'
        );
    </script>

    <!-- =========================
         MENU MOBILE
    ========================= -->

    <script>

        const mobileMenuBtn =
            document.getElementById('mobileMenuBtn');

        const sidebar =
            document.getElementById('sidebar');

        const mobileOverlay =
            document.getElementById('mobileOverlay');

        const sidebarClose =
            document.getElementById('sidebarClose');


        function abrirMenu() {

            sidebar.classList.add('active');

            mobileOverlay.classList.add('active');

            /* SOME O BOTÃO HAMBÚRGUER */

            mobileMenuBtn.classList.add('hidden');

            mobileMenuBtn.setAttribute(
                'aria-expanded',
                'true'
            );

            document.body.classList.add(
                'menu-open'
            );
        }


        function fecharMenu() {

            sidebar.classList.remove('active');

            mobileOverlay.classList.remove('active');

            /* FAZ O BOTÃO HAMBÚRGUER VOLTAR */

            mobileMenuBtn.classList.remove('hidden');

            mobileMenuBtn.setAttribute(
                'aria-expanded',
                'false'
            );

            document.body.classList.remove(
                'menu-open'
            );
        }


        /* ABRIR MENU */

        mobileMenuBtn.addEventListener(
            'click',
            abrirMenu
        );


        /* FECHAR PELO X */

        sidebarClose.addEventListener(
            'click',
            fecharMenu
        );


        /* FECHAR CLICANDO FORA */

        mobileOverlay.addEventListener(
            'click',
            fecharMenu
        );


        /* FECHAR AO CLICAR EM UM LINK */

        document
            .querySelectorAll('#sidebar .nav-link')
            .forEach(link => {

                link.addEventListener(
                    'click',
                    () => {

                        if (
                            window.innerWidth <= 768
                        ) {

                            fecharMenu();

                        }

                    }
                );

            });


        /* FECHAR COM ESC */

        document.addEventListener(
            'keydown',
            function(event) {

                if (
                    event.key === 'Escape' &&
                    sidebar.classList.contains('active')
                ) {

                    fecharMenu();

                }

            }
        );


        /* GARANTE O ESTADO CORRETO AO REDIMENSIONAR */

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

                    document.body.classList.remove(
                        'menu-open'
                    );

                    mobileMenuBtn.setAttribute(
                        'aria-expanded',
                        'false'
                    );

                }

            }
        );

    </script>

</body>

</html>