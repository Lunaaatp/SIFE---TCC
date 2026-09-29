<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIFE - Central de Notificações</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    >

    <!-- Fonte -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

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
            box-shadow: 0 2px 8px rgba(211, 47, 47, 0.15);
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

        .title-with-badge {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .unread-count-badge {
            background: var(--primary-red);
            color: white;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 20px;
            line-height: 1.4;
        }

        .unread-count-badge.is-zero {
            display: none;
        }

        .card-custom {
            background: white;
            border-radius: 20px;
            border: 1px solid var(--border-color);
            box-shadow: var(--card-shadow);
            padding: 24px;
            margin-bottom: 24px;
        }

        .notif-item {
            padding: 18px 24px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            gap: 16px;
            transition: background 0.2s ease, border-left-color 0.2s ease;
            cursor: pointer;
            position: relative;
            border-left: 4px solid transparent;
        }

        .notif-item:last-child {
            border-bottom: none;
        }

        .notif-item:hover {
            background-color: #fafbfc;
        }

        .notif-item.unread {
            background-color: #fffbfb;
            border-left-color: var(--primary-red);
        }

        .notif-icon {
            width: 44px;
            height: 44px;
            min-width: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
        }

        .icon-system {
            background: #e0f2fe;
            color: #0284c7;
        }

        .icon-parent {
            background: #fef3c7;
            color: #d97706;
        }

        .icon-critical {
            background: #fee2e2;
            color: #dc2626;
        }

        .dot-unread {
            width: 8px;
            height: 8px;
            background: var(--primary-red);
            border-radius: 50%;
            position: absolute;
            right: 24px;
            top: 22px;
        }

        #markAllRead {
            transition: all 0.2s ease;
            white-space: nowrap;
        }

        #markAllRead:hover:not(:disabled) {
            background-color: var(--primary-red);
            color: white !important;
            border-color: var(--primary-red);
        }

        #markAllRead:disabled {
            opacity: 0.7;
            cursor: default;
        }

        .nav-pills-custom {
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 14px;
            padding: 6px;
            display: inline-flex;
        }

        .nav-pills-custom .nav-link {
            border-radius: 10px;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 8px 20px;
            color: #64748b;
            border: 1px solid transparent;
        }

        .nav-pills-custom .nav-link.active {
            background-color: var(--primary-red) !important;
            color: white !important;
        }

        /* ================================
           MENU MOBILE
        ================================= */

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
                gap: 16px;
            }

            #markAllRead {
                width: 100%;
                justify-content: center;
                display: flex;
                align-items: center;
            }

            .nav-pills-custom {
                width: 100%;
                justify-content: center;
            }
        }

    </style>
</head>

<body>

<!-- BOTÃO SANDUÍCHE -->
<button
    class="hamburger-btn"
    id="hamburgerBtn"
    aria-label="Abrir menu"
    type="button"
>
    <i class="fas fa-bars"></i>
</button>

<div class="sidebar-overlay" id="sidebarOverlay"></div>

<div class="wrapper">

    <!-- SIDEBAR -->
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
                type="button"
            >
                <i class="fas fa-times"></i>
            </button>

        </div>

        <div class="nav-menu">

            <span class="menu-label">
                Principal
            </span>

            <a
                href="{{ route('frequencia') }}"
                class="nav-link"
            >
                <i class="fas fa-calendar-check"></i>
                <span>Frequência</span>
            </a>

            <a
                href="{{ route('table') }}"
                class="nav-link"
            >
                <i class="fas fa-users-rectangle"></i>
                <span>Turmas</span>
            </a>

            <a
                href="{{ route('typography') }}"
                class="nav-link"
            >
                <i class="fas fa-user-graduate"></i>
                <span>Alunos</span>
            </a>

            <a
                href="{{ route('widget') }}"
                class="nav-link"
            >
                <i class="fas fa-chart-line"></i>
                <span>Dashboard</span>
            </a>

            <span class="menu-label">
                Administrativo
            </span>

            <a
                href="{{ route('index') }}"
                class="nav-link"
            >
                <i class="far fa-calendar-alt"></i>
                <span>Eventos</span>
            </a>

            <a
                href="{{ route('chart') }}"
                class="nav-link active"
            >
                <i class="far fa-bell"></i>
                <span>Notificações</span>
            </a>

            <a
                href="{{ route('button') }}"
                class="nav-link"
            >
                <i class="far fa-file-alt"></i>
                <span>Relatórios</span>
            </a>

        </div>

        <!-- PERFIL -->
        <div class="sidebar-footer">

            @php

                if (Auth::check()) {

                    $nomeCompletoSife =
                        Auth::user()->nome
                        ?? Auth::user()->name
                        ?? 'Coordenador';

                    $nomesSife =
                        explode(' ', trim($nomeCompletoSife));

                    $pLetraSife =
                        mb_substr(
                            $nomesSife[0] ?? 'C',
                            0,
                            1
                        );

                    $sLetraSife =
                        isset($nomesSife[1])
                        ? mb_substr(
                            $nomesSife[1],
                            0,
                            1
                        )
                        : '';

                    $iniciaisSife =
                        strtoupper(
                            $pLetraSife . $sLetraSife
                        );

                    $nomeSife =
                        $nomeCompletoSife;

                    $emailSife =
                        Auth::user()->email
                        ?? 'coordenacao@sife.com';

                } else {

                    $iniciaisSife = "CC";
                    $nomeSife = "Coordenador";
                    $emailSife = "coordenacao@sife.com";

                }

            @endphp

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


    <!-- CONTEÚDO -->
    <main id="content">

        <header class="top-navbar">

            <div>

                <div class="title-with-badge">

                    <h3 class="fw-bold m-0">
                        Centro de Notificações
                    </h3>

                    <span
                        class="unread-count-badge"
                        id="unreadCountBadge"
                    >
                        2 novas
                    </span>

                </div>

                <p class="text-muted m-0 small">
                    Fique por dentro das atualizações
                    do sistema
                </p>

            </div>

            <button
                type="button"
                id="markAllRead"
                class="btn btn-light px-4 rounded-3 border fw-bold text-muted"
            >
                <i class="fas fa-check-double me-2"></i>
                Marcar todas como lidas
            </button>

        </header>


        <!-- FILTRO -->
        <ul class="nav nav-pills nav-pills-custom mb-4 gap-2">

            <li class="nav-item">

                <a
                    class="nav-link active"
                    href="#"
                >
                    Todas
                </a>

            </li>

        </ul>


        <!-- CARD -->
        <div class="card-custom p-0 overflow-hidden">

            <div class="notif-list">


                <!-- NOTIFICAÇÃO 1 -->
                <div
                    class="notif-item unread"
                    data-notification="1"
                    title="Clique para marcar como lida/não lida"
                >

                    <div class="notif-icon icon-critical">

                        <i class="fas fa-exclamation-circle"></i>

                    </div>

                    <div class="flex-grow-1">

                        <div class="d-flex justify-content-between mb-1 pe-4">

                            <h6 class="fw-bold m-0">
                                Alerta de Frequência Crítica
                            </h6>

                            <small class="text-muted">
                                Há 10 min
                            </small>

                        </div>

                        <p class="text-muted small m-0">

                            O aluno
                            <strong>Bruno Gomes</strong>
                            atingiu o limite de faltas permitido
                            na disciplina de Matemática.

                        </p>

                        <div class="dot-unread"></div>

                    </div>

                </div>


                <!-- NOTIFICAÇÃO 2 -->
                <div
                    class="notif-item unread"
                    data-notification="2"
                    title="Clique para marcar como lida/não lida"
                >

                    <div class="notif-icon icon-parent">

                        <i class="fas fa-envelope"></i>

                    </div>

                    <div class="flex-grow-1">

                        <div class="d-flex justify-content-between mb-1 pe-4">

                            <h6 class="fw-bold m-0">
                                Nova Mensagem de Responsável
                            </h6>

                            <small class="text-muted">
                                Há 45 min
                            </small>

                        </div>

                        <p class="text-muted small m-0">

                            Maria Luzia
                            (Mãe da Ana)
                            enviou uma justificativa médica
                            para a ausência de hoje.

                        </p>

                        <div class="dot-unread"></div>

                    </div>

                </div>


                <!-- NOTIFICAÇÃO 3 -->
                <div
                    class="notif-item"
                    data-notification="3"
                    title="Clique para marcar como lida/não lida"
                >

                    <div class="notif-icon icon-system">

                        <i class="fas fa-sync"></i>

                    </div>

                    <div class="flex-grow-1">

                        <div class="d-flex justify-content-between mb-1 pe-4">

                            <h6 class="fw-bold m-0">
                                Atualização de Sistema Concluída
                            </h6>

                            <small class="text-muted">
                                Hoje, 08:30
                            </small>

                        </div>

                        <p class="text-muted small m-0">

                            O módulo de relatórios trimestrais
                            foi atualizado para a versão 2.0.
                            Confira as novas métricas.

                        </p>

                    </div>

                </div>


                <!-- NOTIFICAÇÃO 4 -->
                <div
                    class="notif-item"
                    data-notification="4"
                    title="Clique para marcar como lida/não lida"
                >

                    <div class="notif-icon icon-system">

                        <i class="fas fa-bullhorn"></i>

                    </div>

                    <div class="flex-grow-1">

                        <div class="d-flex justify-content-between mb-1 pe-4">

                            <h6 class="fw-bold m-0">
                                Comunicado: Reunião de Planejamento
                            </h6>

                            <small class="text-muted">
                                Ontem
                            </small>

                        </div>

                        <p class="text-muted small m-0">

                            A reunião pedagógica foi confirmada
                            para sexta-feira, às 14:00,
                            no auditório.

                        </p>

                    </div>

                </div>

            </div>


            <!-- NOTIFICAÇÕES ANTIGAS -->
            <div class="bg-light p-3 text-center border-top">

                <a
                    href="#"
                    class="text-decoration-none small fw-bold text-muted"
                >
                    Ver notificações mais antigas
                </a>

            </div>

        </div>

    </main>

</div>


<!-- BOOTSTRAP -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
></script>


<!-- ACESSIBILIDADE -->
<x-acessibilidade />


<!-- MENU MOBILE -->
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

            if (sidebar.classList.contains('active')) {

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


<!-- ==========================================
     JAVASCRIPT DAS NOTIFICAÇÕES
     COM PERSISTÊNCIA NO LOCALSTORAGE
========================================== -->

<script>

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const button =
            document.getElementById(
                'markAllRead'
            );

        const notifications =
            document.querySelectorAll(
                '.notif-item'
            );

        const unreadBadge =
            document.getElementById(
                'unreadCountBadge'
            );


        /*
        ==========================================
        CHAVE DO LOCALSTORAGE
        ==========================================

        É onde o navegador vai guardar
        quais notificações estão lidas.

        O estado continua mesmo depois de:
        - fechar o site;
        - atualizar a página;
        - fechar o navegador;
        - entrar novamente no site.
        */

        const STORAGE_KEY =
            'sife_notificacoes_lidas';


        /*
        ==========================================
        PEGAR NOTIFICAÇÕES LIDAS
        ==========================================
        */

        function getReadNotifications() {

            try {

                const saved =
                    localStorage.getItem(
                        STORAGE_KEY
                    );

                if (!saved) {
                    return [];
                }

                const parsed =
                    JSON.parse(saved);

                return Array.isArray(parsed)
                    ? parsed
                    : [];

            } catch (error) {

                console.error(
                    'Erro ao carregar notificações:',
                    error
                );

                return [];

            }

        }


        /*
        ==========================================
        SALVAR NOTIFICAÇÕES LIDAS
        ==========================================
        */

        function saveReadNotifications(readIds) {

            try {

                localStorage.setItem(
                    STORAGE_KEY,
                    JSON.stringify(readIds)
                );

            } catch (error) {

                console.error(
                    'Erro ao salvar notificações:',
                    error
                );

            }

        }


        /*
        ==========================================
        MARCAR UMA NOTIFICAÇÃO COMO LIDA
        ==========================================
        */

        function markAsRead(notification) {

            const id =
                notification.dataset.notification;

            let readNotifications =
                getReadNotifications();


            if (!readNotifications.includes(id)) {

                readNotifications.push(id);

            }


            saveReadNotifications(
                readNotifications
            );

        }


        /*
        ==========================================
        MARCAR UMA NOTIFICAÇÃO COMO NÃO LIDA
        ==========================================
        */

        function markAsUnread(notification) {

            const id =
                notification.dataset.notification;

            let readNotifications =
                getReadNotifications();


            readNotifications =
                readNotifications.filter(
                    function (savedId) {

                        return savedId !== id;

                    }
                );


            saveReadNotifications(
                readNotifications
            );

        }


        /*
        ==========================================
        CRIAR / REMOVER BOLINHA
        ==========================================
        */

        function updateDot(notification) {

            const isUnread =
                notification.classList.contains(
                    'unread'
                );

            let dot =
                notification.querySelector(
                    '.dot-unread'
                );


            if (isUnread) {

                if (!dot) {

                    dot =
                        document.createElement(
                            'div'
                        );

                    dot.classList.add(
                        'dot-unread'
                    );

                    notification
                        .querySelector(
                            '.flex-grow-1'
                        )
                        .appendChild(dot);

                }

            } else {

                if (dot) {

                    dot.remove();

                }

            }

        }


        /*
        ==========================================
        APLICAR ESTADO SALVO
        ==========================================
        */

        function loadSavedState() {

            const readNotifications =
                getReadNotifications();


            notifications.forEach(
                function (notification) {

                    const id =
                        notification.dataset.notification;


                    if (
                        readNotifications.includes(id)
                    ) {

                        notification.classList.remove(
                            'unread'
                        );

                    } else {

                        notification.classList.add(
                            'unread'
                        );

                    }


                    updateDot(
                        notification
                    );

                }
            );

        }


        /*
        ==========================================
        ATUALIZAR BOTÃO E CONTADOR
        ==========================================
        */

        function updateButton() {

            const unread =
                document.querySelectorAll(
                    '.notif-item.unread'
                );


            if (unread.length > 0) {

                button.disabled = false;

                button.innerHTML =
                    '<i class="fas fa-check-double me-2"></i>' +
                    ' Marcar todas como lidas';


                unreadBadge.classList.remove(
                    'is-zero'
                );


                unreadBadge.textContent =
                    unread.length +
                    (
                        unread.length === 1
                            ? ' nova'
                            : ' novas'
                    );

            } else {

                button.disabled = true;

                button.innerHTML =
                    '<i class="fas fa-check me-2"></i>' +
                    ' Todas lidas';


                unreadBadge.classList.add(
                    'is-zero'
                );

            }

        }


        /*
        ==========================================
        MARCAR TODAS COMO LIDAS
        ==========================================
        */

        button.addEventListener(
            'click',
            function () {

                const allIds = [];


                notifications.forEach(
                    function (notification) {

                        const id =
                            notification.dataset.notification;


                        allIds.push(id);


                        notification.classList.remove(
                            'unread'
                        );


                        updateDot(
                            notification
                        );

                    }
                );


                /*
                Salva TODAS as notificações
                como lidas.
                */

                saveReadNotifications(
                    allIds
                );


                updateButton();

            }
        );


        /*
        ==========================================
        CLICAR EM UMA NOTIFICAÇÃO
        ==========================================
        */

        notifications.forEach(
            function (notification) {

                notification.addEventListener(
                    'click',
                    function () {

                        const isUnread =
                            notification.classList.contains(
                                'unread'
                            );


                        /*
                        Se estava não lida,
                        passa para lida.
                        */

                        if (isUnread) {

                            notification.classList.remove(
                                'unread'
                            );


                            markAsRead(
                                notification
                            );


                        }

                        /*
                        Se estava lida,
                        volta para não lida.
                        */

                        else {

                            notification.classList.add(
                                'unread'
                            );


                            markAsUnread(
                                notification
                            );

                        }


                        updateDot(
                            notification
                        );


                        updateButton();

                    }
                );

            }
        );


        /*
        ==========================================
        INICIALIZAÇÃO
        ==========================================
        */

        /*
        Primeiro carrega o que foi salvo
        no navegador.
        */

        loadSavedState();


        /*
        Depois atualiza contador e botão.
        */

        updateButton();

    }
);

</script>


<!-- ==========================================
     VLIBRAS
========================================== -->

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

</body>

</html>