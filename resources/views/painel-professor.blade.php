<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>Painel do Professor - SIFE</title>

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

<!-- Fonte Inter -->
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
    }

    /* =========================
       LOGO
    ========================= */

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

    /* =========================
       MENU
    ========================= */

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

    /* =========================
       CARD DO PERFIL
    ========================= */

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

    .user-profile-item:hover {
        background: var(--primary-red-soft);
        color: inherit;
    }

    /* =========================
       AVATAR
    ========================= */

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

    /* =========================
       BOTÃO SAIR
    ========================= */

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

    /* =========================
       CONTEÚDO
    ========================= */

    #content {
        flex-grow: 1;
        padding: 40px;
        overflow-y: auto;
        max-width: calc(100% - var(--sidebar-width));
    }

    /* =========================
       WELCOME CARD
    ========================= */

    .welcome-card {
        background: var(--primary-red);
        border-radius: 30px;
        padding: 40px;
        color: white;
        margin-bottom: 35px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(211, 47, 47, 0.2);
    }

    .welcome-card i.bg-icon {
        position: absolute;
        right: -20px;
        bottom: -20px;
        font-size: 12rem;
        color: rgba(255, 255, 255, 0.1);
        transform: rotate(-15deg);
    }

    /* =========================
       STATUS CARDS
    ========================= */

    .card-stat {
        background: white;
        border-radius: 25px;
        padding: 25px;
        border: 1px solid var(--border-color);
        height: 100%;
    }

    .stat-icon {
        width: 45px;
        height: 45px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        margin-bottom: 15px;
    }

    /* =========================
       TURMAS
    ========================= */

    .class-card {
        background: white;
        border-radius: 25px;
        padding: 25px;
        border: 1px solid var(--border-color);
        transition: 0.3s;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .class-card:hover {
        transform: translateX(10px);
        border-color: var(--primary-red);
    }

    .class-info h5 {
        font-weight: 800;
        margin: 0;
        color: #1a202c;
    }

    .class-info span {
        font-size: 0.85rem;
        color: var(--text-muted);
        font-weight: 600;
    }

    .btn-action {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        border: none;
        background: var(--primary-red-soft);
        color: var(--primary-red);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.3s;
    }

    .btn-action:hover {
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
        background: white;
        color: #4a5568;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.10);
        z-index: 10001;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        cursor: pointer;
        transition: 0.3s;
    }

    .mobile-menu-btn:hover {
        background: #f8fafc;
        color: #2d3436;
    }

    .mobile-menu-btn.hidden {
        display: none !important;
        visibility: hidden !important;
        opacity: 0 !important;
        pointer-events: none !important;
    }

    /* =========================
       OVERLAY MOBILE
    ========================= */

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
       BOTÃO FECHAR SIDEBAR
    ========================= */

    .sidebar-close {
        display: none;
    }

    /* =========================
       MENU MOBILE
    ========================= */

    @media (max-width: 768px) {

        body {
            overflow-x: hidden;
        }

        .wrapper {
            display: block;
            min-height: 100vh;
        }

        /* BOTÃO HAMBÚRGUER */

        .mobile-menu-btn {
            display: flex;
        }

        .mobile-menu-btn.hidden {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            pointer-events: none !important;
        }

        /* SIDEBAR LATERAL */

        #sidebar {
            position: fixed;
            left: -300px;
            top: 0;
            bottom: 0;
            width: min(280px, 85vw);
            min-width: 0;
            height: 100vh;
            padding: 25px 15px;
            background: #ffffff;
            border-right: 1px solid var(--border-color);
            border-top: none;
            box-shadow: 8px 0 30px rgba(0, 0, 0, 0.12);
            z-index: 9999;
            transition: left 0.3s ease;
            overflow-y: auto;
        }

        #sidebar.active {
            left: 0;
        }

        /* LOGO */

        .sidebar-brand {
            padding-bottom: 25px;
            justify-content: space-between;
        }

        /* BOTÃO X */

        .sidebar-close {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border: none;
            border-radius: 12px;
            background: var(--primary-red-soft);
            color: var(--primary-red);
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .sidebar-close:hover {
            background: var(--primary-red);
            color: white;
        }

        /* MENU */

        .nav-menu {
            display: block;
            width: 100%;
            height: auto;
            padding: 0;
        }

        .menu-category {
            display: block;
            font-size: 0.7rem;
            margin: 25px 0 10px 15px;
        }

        .nav-link {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
            gap: 14px;
            padding: 12px 18px;
            margin-bottom: 4px;
            border-radius: 15px;
            font-size: 0.9rem;
            font-weight: 600;
            text-align: left;
        }

        .nav-link i {
            width: 22px;
            font-size: 1.1rem;
        }

        .sidebar-footer {
            display: block;
        }

        /* CONTEÚDO */

        #content {
            width: 100%;
            max-width: 100%;
            padding: 85px 16px 30px;
            overflow-y: visible;
        }

        /* WELCOME NO CELULAR */

        .welcome-card {
            padding: 30px 25px;
            border-radius: 25px;
        }

        .welcome-card i.bg-icon {
            font-size: 8rem;
        }

        /* CARDS DE ESTATÍSTICAS */

        .card-stat {
            padding: 25px;
        }

        /* TURMAS */

        .class-card {
            padding: 20px;
        }
    }

    /* =========================
       TELAS MENORES
    ========================= */

    @media (max-width: 576px) {

        .welcome-card h2 {
            font-size: 1.5rem;
        }

        .welcome-card p {
            font-size: 0.9rem;
        }

        .card-stat {
            padding: 20px;
        }

        .class-card {
            padding: 20px;
        }
    }
</style>
```

</head>

<body>

```
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

<!-- =========================
     OVERLAY MOBILE
========================= -->

<div
    class="mobile-overlay"
    id="mobileOverlay"
></div>

<div class="wrapper">

    <!-- =========================
         SIDEBAR PROFESSOR
    ========================= -->

    <nav id="sidebar">

        <!-- LOGO -->

        <div class="sidebar-brand">

            <div class="brand-icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>

            <span class="brand-name">
                SIFE
            </span>

            <!-- BOTÃO FECHAR MOBILE -->

            <button
                type="button"
                class="sidebar-close"
                id="sidebarClose"
                aria-label="Fechar menu"
            >
                <i class="fas fa-xmark"></i>
            </button>

        </div>

        <!-- =========================
             MENU
        ========================= -->

        <div class="nav-menu">

            <div class="menu-category">
                Gestão
            </div>

            <!-- DASHBOARD -->

            <a
                href="{{ route('painel-professor') }}"
                class="nav-link active"
            >
                <i class="fas fa-th-large"></i>

                <span>
                    Dashboard
                </span>
            </a>

            <!-- TURMAS -->

            <a
                href="{{ route('turmasProfessor') }}"
                class="nav-link"
            >
                <i class="fas fa-users"></i>

                <span>
                    Minhas Turmas
                </span>
            </a>

            <!-- NOTAS -->

            <a
                href="{{ route('notas-professor') }}"
                class="nav-link"
            >
                <i class="fas fa-edit"></i>

                <span>
                    Lançar Notas
                </span>
            </a>

            <!-- FREQUÊNCIA -->

            <a
                href="{{ route('frequencia-professor') }}"
                class="nav-link"
            >
                <i class="fas fa-calendar-check"></i>

                <span>
                    Frequência
                </span>
            </a>

            <div class="menu-category">
                Conteúdo
            </div>

            <!-- MATERIAIS -->

            <a
                href="{{ route('materiais-professor') }}"
                class="nav-link"
            >
                <i class="fas fa-file-upload"></i>

                <span>
                    Materiais
                </span>
            </a>

            <!-- COMUNICADOS -->

            <a
                href="{{ route('comunicados-professor') }}"
                class="nav-link"
            >
                <i class="fas fa-bullhorn"></i>

                <span>
                    Comunicados
                </span>
            </a>

        </div>

        <!-- =========================
             PERFIL + SAIR
        ========================= -->

        <div class="sidebar-footer">

            <div class="user-profile-item">

                <!-- AVATAR -->

                <div class="avatar-circle">

                    @if(Auth::check())

                        @php
                            $nomeCompleto =
                                Auth::user()->nome
                                ?? Auth::user()->name
                                ?? 'Professor';

                            $nomes =
                                explode(
                                    ' ',
                                    trim($nomeCompleto)
                                );

                            $primeiraLetra =
                                mb_substr(
                                    $nomes[0] ?? 'P',
                                    0,
                                    1
                                );

                            $segundaLetra =
                                isset($nomes[1])
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

                        PR

                    @endif

                </div>

                <!-- INFORMAÇÕES -->

                <div class="overflow-hidden flex-grow-1">

                    <p
                        class="m-0 small fw-bold text-dark text-truncate"
                    >
                        {{ Auth::check()
                            ? Auth::user()->nome
                            : 'Professor'
                        }}
                    </p>

                    <p
                        class="m-0 text-muted text-truncate"
                        style="font-size: 11px;"
                    >
                        {{ Auth::check()
                            ? Auth::user()->email
                            : 'ID: 2026-TX'
                        }}
                    </p>

                </div>

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

        <!-- =========================
             WELCOME
        ========================= -->

        <div class="welcome-card">

            <i
                class="fas fa-graduation-cap bg-icon"
            ></i>

            <h2 class="fw-bold mb-2">

                Bom dia, Prof.

                {{ Auth::check()
                    ? explode(' ', Auth::user()->nome)[0]
                    : 'Professor'
                }}!

            </h2>

            <p class="m-0 opacity-75">

                Você tem 3 aulas hoje e 12 trabalhos
                pendentes para correção.

            </p>

        </div>

        <!-- =========================
             CARDS DE ESTATÍSTICAS
        ========================= -->

        <div class="row g-4 mb-5">

            <!-- TOTAL DE ALUNOS -->

            <div class="col-md-4">

                <div class="card-stat">

                    <div
                        class="stat-icon bg-primary-subtle text-primary"
                    >
                        <i class="fas fa-user-graduate"></i>
                    </div>

                    <p
                        class="text-muted small fw-bold mb-1"
                    >
                        TOTAL DE ALUNOS
                    </p>

                    <h3 class="fw-bold m-0">
                        124
                    </h3>

                </div>

            </div>

            <!-- AULAS -->

            <div class="col-md-4">

                <div class="card-stat">

                    <div
                        class="stat-icon bg-warning-subtle text-warning"
                    >
                        <i class="fas fa-clock"></i>
                    </div>

                    <p
                        class="text-muted small fw-bold mb-1"
                    >
                        AULAS NA SEMANA
                    </p>

                    <h3 class="fw-bold m-0">
                        22h
                    </h3>

                </div>

            </div>

            <!-- NOTAS -->

            <div class="col-md-4">

                <div class="card-stat">

                    <div
                        class="stat-icon bg-danger-subtle text-danger"
                    >
                        <i class="fas fa-exclamation-circle"></i>
                    </div>

                    <p
                        class="text-muted small fw-bold mb-1"
                    >
                        NOTAS PENDENTES
                    </p>

                    <h3 class="fw-bold m-0">
                        08
                    </h3>

                </div>

            </div>

        </div>

        <!-- =========================
             TURMAS
        ========================= -->

        <div class="row">

            <div class="col-lg-7">

                <h5 class="fw-bold mb-4">
                    Minhas Turmas Ativas
                </h5>

                @forelse($totalTurmas as $turma)

                    <div class="class-card">

                        <div class="class-info">

                            <h5>
                                {{ $turma->nome_turma
                                    ?? 'Turma Sem Nome'
                                }}
                            </h5>

                            <span>

                                {{ $turma->disciplina
                                    ?? 'Geral'
                                }}

                                •

                                {{ $turma->alunos_count
                                    ?? $turma->quantidade_alunos
                                    ?? 0
                                }}

                                {{ ($turma->alunos_count ?? 0) == 1
                                    ? 'Aluno'
                                    : 'Alunos'
                                }}

                            </span>

                        </div>

                    </div>

                @empty

                    <div
                        class="alert alert-info border-0 rounded-4 p-4 text-center"
                    >

                        <i
                            class="fas fa-users-slash mb-2 d-block fa-2x text-muted"
                        ></i>

                        Nenhuma turma cadastrada.

                    </div>

                @endforelse

            </div>

        </div>

    </main>

</div>

<!-- =========================
     ACESSIBILIDADE
========================= -->

<x-acessibilidade />

<!-- Bootstrap JS -->

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

        <div
            class="vw-plugin-top-wrapper"
        ></div>

    </div>

</div>

<script
    src="https://vlibras.gov.br/app/vlibras-plugin.js"
></script>

<script>

    new window.VLibras.Widget(
        'https://vlibras.gov.br/app'
    );

    /* =========================
       MENU MOBILE
    ========================= */

    const mobileMenuBtn =
        document.getElementById(
            'mobileMenuBtn'
        );

    const sidebar =
        document.getElementById(
            'sidebar'
        );

    const mobileOverlay =
        document.getElementById(
            'mobileOverlay'
        );

    const sidebarClose =
        document.getElementById(
            'sidebarClose'
        );

    /* =========================
       ABRIR MENU
    ========================= */

    function abrirMenu() {

        mobileMenuBtn.classList.add(
            'hidden'
        );

        sidebar.classList.add(
            'active'
        );

        mobileOverlay.classList.add(
            'active'
        );

        mobileMenuBtn.setAttribute(
            'aria-expanded',
            'true'
        );

        document.body.classList.add(
            'menu-open'
        );

    }

    /* =========================
       FECHAR MENU
    ========================= */

    function fecharMenu() {

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

    /* ABRIR */

    mobileMenuBtn.addEventListener(
        'click',
        abrirMenu
    );

    /* FECHAR PELO X */

    sidebarClose.addEventListener(
        'click',
        fecharMenu
    );

    /* FECHAR PELO FUNDO */

    mobileOverlay.addEventListener(
        'click',
        fecharMenu
    );

    /* FECHAR AO CLICAR EM UM LINK */

    const linksMenu =
        sidebar.querySelectorAll(
            '.nav-link'
        );

    linksMenu.forEach(link => {

        link.addEventListener(
            'click',
            fecharMenu
        );

    });

    /* FECHAR COM ESC */

    document.addEventListener(
        'keydown',
        function(event) {

            if (event.key === 'Escape') {
                fecharMenu();
            }

        }
    );

    /* RESETAR AO VOLTAR PARA DESKTOP */

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
