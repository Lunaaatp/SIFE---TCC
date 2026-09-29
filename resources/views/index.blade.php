<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIFE - Calendário de Eventos</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">


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
           PERFIL E LOGOUT
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


        /* ==============================
           AGENDA
        ============================== */

        .event-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            padding: 20px;
            border-bottom: 1px solid var(--border-color);
            transition: background 0.2s;
        }


        .event-item:last-child {
            border-bottom: none;
        }


        .event-item:hover {
            background-color: #fafafa;
            border-radius: 15px;
        }


        .event-date-box {
            min-width: 65px;
            height: 65px;
            background: #f1f5f9;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px solid #e2e8f0;
        }


        .event-date-day {
            font-size: 1.5rem;
            font-weight: 800;
            line-height: 1;
            color: var(--text-dark);
        }


        .event-date-month {
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            color: #64748b;
        }


        .event-category {
            font-size: 0.65rem;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 6px;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 8px;
        }


        .cat-meeting {
            background: #e0f2fe;
            color: #0369a1;
        }


        .cat-academic {
            background: #fef3c7;
            color: #92400e;
        }


        .cat-holiday {
            background: #fce7f3;
            color: #9d174d;
        }


        .cat-social {
            background: #fef3c7;
            color: #78350f;
        }


        /* ==============================
           BOTÃO NOVO EVENTO
        ============================== */

        .btn-add-event {
            background: var(--primary-red);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 12px;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(211, 47, 47, 0.2);
            text-decoration: none;
            display: inline-block;
        }


        .btn-add-event:hover {
            background: #b71c1c;
            color: white;
        }


        /* ==============================
           BOTÕES EDITAR / EXCLUIR
        ============================== */

        .event-actions {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-left: auto;
            flex-shrink: 0;
        }


        .btn-event-action {
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s ease;
            text-decoration: none;
            font-size: 0.9rem;
        }


        /* EDITAR */

        .btn-edit-event {
            background: #eff6ff;
            color: #2563eb;
        }


        .btn-edit-event:hover {
            background: #2563eb;
            color: white;
            transform: translateY(-2px);
        }


        /* EXCLUIR */

        .btn-delete-event {
            background: #fff1f2;
            color: #dc2626;
        }


        .btn-delete-event:hover {
            background: #dc2626;
            color: white;
            transform: translateY(-2px);
        }


        /* ==============================
           MENU SANDUÍCHE
        ============================== */

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


        /* ==============================
           TABLET
        ============================== */

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


        /* ==============================
           MOBILE
        ============================== */

        @media (max-width: 768px) {

            .hamburger-btn {
                display: flex;
            }


            .wrapper {
                display: block;
                min-height: 100vh;
            }


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


            .top-navbar > a.btn-add-event {
                width: 100%;
                text-align: center;
            }


            .card-custom {
                padding: 18px;
                border-radius: 16px;
            }


            /* EVENTO NO CELULAR */

            .event-item {
                gap: 12px;
                padding: 18px 14px;
            }


            .event-date-box {
                min-width: 55px;
                width: 55px;
                height: 55px;
            }


            .event-date-day {
                font-size: 1.25rem;
            }


            .event-date-month {
                font-size: 0.6rem;
            }


            .event-item h5 {
                font-size: 1rem;
            }


            .event-item p {
                font-size: 0.75rem;
            }


            /* BOTÕES NO CELULAR */

            .event-actions {
                flex-direction: column;
                gap: 6px;
            }


            .btn-event-action {
                width: 36px;
                height: 36px;
                border-radius: 10px;
            }

        }

    </style>

</head>


<body>


    <!-- =========================
         BOTÃO SANDUÍCHE
    ========================= -->

    <button
        class="hamburger-btn"
        id="hamburgerBtn"
        aria-label="Abrir menu"
        type="button">

        <i class="fas fa-bars"></i>

    </button>


    <div
        class="sidebar-overlay"
        id="sidebarOverlay">
    </div>


    <div class="wrapper">


        <!-- ==============================
             SIDEBAR
        ============================== -->

        <nav id="sidebar">


            <div class="sidebar-header">

                <div class="logo-box">

                    <i class="fas fa-graduation-cap"></i>

                </div>


                <h4 class="fw-bold m-0">
                    SIFE
                </h4>


                <button
                    class="sidebar-close-btn"
                    id="sidebarCloseBtn"
                    aria-label="Fechar menu"
                    type="button">

                    <i class="fas fa-times"></i>

                </button>

            </div>


            <div class="nav-menu">


                <span class="menu-label">
                    Principal
                </span>


                <a
                    href="{{ route('frequencia') }}"
                    class="nav-link">

                    <i class="fas fa-calendar-check"></i>

                    <span>
                        Frequência
                    </span>

                </a>


                <a
                    href="{{ route('table') }}"
                    class="nav-link">

                    <i class="fas fa-users-rectangle"></i>

                    <span>
                        Turmas
                    </span>

                </a>


                <a
                    href="{{ route('typography') }}"
                    class="nav-link">

                    <i class="fas fa-user-graduate"></i>

                    <span>
                        Alunos
                    </span>

                </a>


                <a
                    href="{{ route('widget') }}"
                    class="nav-link">

                    <i class="fas fa-chart-line"></i>

                    <span>
                        Dashboard
                    </span>

                </a>


                <span class="menu-label">
                    Administrativo
                </span>


                <a
                    href="{{ route('index') }}"
                    class="nav-link active">

                    <i class="far fa-calendar-alt"></i>

                    <span>
                        Eventos
                    </span>

                </a>


                <a
                    href="{{ route('chart') }}"
                    class="nav-link">

                    <i class="far fa-bell"></i>

                    <span>
                        Notificações
                    </span>

                </a>


                <a
                    href="{{ route('button') }}"
                    class="nav-link">

                    <i class="far fa-file-alt"></i>

                    <span>
                        Relatórios
                    </span>

                </a>


            </div>


            <!-- ==============================
                 PERFIL
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


                    <div class="avatar-circle">

                        {{ $iniciaisSife }}

                    </div>


                    <div class="overflow-hidden flex-grow-1">

                        <p
                            class="m-0 small fw-bold text-dark text-truncate">

                            {{ $nomeSife }}

                        </p>


                        <p
                            class="m-0 text-muted text-truncate"
                            style="font-size: 11px;">

                            {{ $emailSife }}

                        </p>

                    </div>


                    <form
                        action="{{ route('logout') }}"
                        method="POST"
                        class="m-0">

                        @csrf

                        <button
                            type="submit"
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
                        Calendário de Eventos
                    </h3>

                    <p class="text-muted m-0 small">
                        Cronograma acadêmico e administrativo
                    </p>

                </div>


                <a
                    href="{{ route('adicionar-evento') }}"
                    class="btn-add-event"
                    role="button">

                    <i class="fas fa-plus"></i>

                    Novo Evento

                </a>


            </header>


            <!-- ==============================
                 CARDS
            ============================== -->

            <div class="row g-3 mb-4">


                <div class="col-md-4">

                    <div class="card-custom text-center">

                        <span
                            class="small fw-bold text-muted text-uppercase">

                            Total de Eventos

                        </span>

                        <h2 class="fw-bold mt-2 mb-0">

                            {{ isset($eventos) ? $eventos->count() : 0 }}

                        </h2>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="card-custom text-center">

                        <span
                            class="small fw-bold text-muted text-uppercase">

                            Próximo Evento

                        </span>


                        @if(isset($eventos) && $eventos->count() > 0)

                            <h5
                                class="fw-bold mt-2 mb-0 text-truncate">

                                {{ $eventos->first()->titulo }}

                            </h5>


                            <p
                                class="text-danger small mb-0 fw-bold">

                                {{ \Carbon\Carbon::parse($eventos->first()->data)->format('d/m/Y') }}

                            </p>

                        @else

                            <h5 class="fw-bold mt-2 mb-0">
                                Nenhum
                            </h5>

                            <p class="text-muted small mb-0">
                                Sem eventos agendados
                            </p>

                        @endif

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="card-custom text-center">

                        <span
                            class="small fw-bold text-muted text-uppercase">

                            Mês Atual

                        </span>


                        <h2
                            class="fw-bold mt-2 mb-0 text-primary">

                            {{ \Carbon\Carbon::now()->translatedFormat('M/Y') }}

                        </h2>

                    </div>

                </div>


            </div>


            <!-- ==============================
                 LISTA DE EVENTOS
            ============================== -->

            <div class="card-custom p-0 overflow-hidden">


                <div
                    class="bg-light p-3 border-bottom d-flex justify-content-between align-items-center">

                    <h6 class="m-0 fw-bold">

                        Lista de Eventos Cadastrados

                    </h6>

                </div>


                <div class="agenda-list">


                    @forelse($eventos ?? [] as $evento)


                        @php

                            $dataEvento =
                                \Carbon\Carbon::parse(
                                    $evento->data
                                );


                            $catClass = match($evento->categoria) {

                                'meeting' =>
                                    'cat-meeting',

                                'academic' =>
                                    'cat-academic',

                                'holiday' =>
                                    'cat-holiday',

                                'social' =>
                                    'cat-social',

                                default =>
                                    'cat-academic'

                            };


                            $catNome = match($evento->categoria) {

                                'meeting' =>
                                    'Reunião',

                                'academic' =>
                                    'Avaliação / Acadêmico',

                                'holiday' =>
                                    'Feriado',

                                'social' =>
                                    'Cultura & Lazer',

                                default =>
                                    $evento->categoria ?? 'Geral'

                            };

                        @endphp


                        <!-- EVENTO -->

                        <div class="event-item">


                            <!-- DATA -->

                            <div class="event-date-box">

                                <span class="event-date-day">

                                    {{ $dataEvento->format('d') }}

                                </span>


                                <span class="event-date-month">

                                    {{ $dataEvento->translatedFormat('M') }}

                                </span>

                            </div>


                            <!-- INFORMAÇÕES -->

                            <div class="flex-grow-1">


                                <span
                                    class="event-category {{ $catClass }}">

                                    {{ $catNome }}

                                </span>


                                <h5 class="fw-bold mb-1">

                                    {{ $evento->titulo }}

                                </h5>


                                <p class="text-muted small mb-2">


                                    <i class="far fa-clock me-1"></i>


                                    {{ $evento->hora_inicio
                                        ? \Carbon\Carbon::parse($evento->hora_inicio)->format('H:i')
                                        : '' }}


                                    {{ $evento->hora_fim
                                        ? ' - ' . \Carbon\Carbon::parse($evento->hora_fim)->format('H:i')
                                        : '' }}


                                    @if($evento->local)

                                        •

                                        <i
                                            class="fas fa-map-marker-alt ms-1 me-1">
                                        </i>

                                        {{ $evento->local }}

                                    @endif


                                    @if($evento->publico)

                                        •

                                        <i
                                            class="fas fa-users ms-1 me-1">
                                        </i>

                                        {{ $evento->publico }}

                                    @endif


                                </p>


                                @if($evento->descricao)

                                    <p
                                        class="text-muted m-0 small">

                                        {{ $evento->descricao }}

                                    </p>

                                @endif


                            </div>


                            <!-- ==============================
                                 BOTÕES VISUAIS
                            ============================== -->

                            <div class="event-actions">


                                <!-- EDITAR -->

                                <button
                                    type="button"
                                    class="btn-event-action btn-edit-event"
                                    title="Editar evento"
                                    aria-label="Editar evento">

                                    <i class="fas fa-pen"></i>

                                </button>


                                <!-- EXCLUIR -->

                                <button
                                    type="button"
                                    class="btn-event-action btn-delete-event"
                                    title="Excluir evento"
                                    aria-label="Excluir evento">

                                    <i class="fas fa-trash"></i>

                                </button>


                            </div>


                        </div>


                    @empty


                        <div
                            class="p-5 text-center text-muted">

                            <i
                                class="far fa-calendar-times fa-3x mb-3 text-secondary">
                            </i>


                            <h5>
                                Nenhum evento encontrado.
                            </h5>


                            <p class="small m-0">

                                Clique no botão "Novo Evento"
                                para agendar o primeiro compromisso.

                            </p>

                        </div>


                    @endforelse


                </div>

            </div>


        </main>

    </div>


    <!-- ==============================
         BOOTSTRAP
    ============================== -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    </script>


    <!-- ==============================
         MENU MOBILE
    ============================== -->

    <script>

        (function () {

            const hamburgerBtn =
                document.getElementById('hamburgerBtn');

            const sidebar =
                document.getElementById('sidebar');

            const overlay =
                document.getElementById('sidebarOverlay');

            const closeBtn =
                document.getElementById('sidebarCloseBtn');


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


            hamburgerBtn.addEventListener(
                'click',
                function () {

                    if (
                        sidebar.classList.contains('active')
                    ) {

                        closeMenu();

                    } else {

                        openMenu();

                    }

                }
            );


            overlay.addEventListener(
                'click',
                closeMenu
            );


            closeBtn.addEventListener(
                'click',
                closeMenu
            );


            document
                .querySelectorAll('#sidebar .nav-link')
                .forEach(function (link) {

                    link.addEventListener(
                        'click',
                        closeMenu
                    );

                });


        })();

    </script>


    <!-- ==============================
         ACESSIBILIDADE
    ============================== -->

    <x-acessibilidade />


    <!-- ==============================
         VLibrAS
    ============================== -->

    <div vw class="enabled">

        <div
            vw-access-button
            class="active">
        </div>


        <div vw-plugin-wrapper>

            <div class="vw-plugin-top-wrapper">
            </div>

        </div>

    </div>


    <script
        src="https://vlibras.gov.br/app/vlibras-plugin.js">
    </script>


    <script>

        new window.VLibras.Widget(
            'https://vlibras.gov.br/app'
        );

    </script>


</body>

</html>