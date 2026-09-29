<!DOCTYPE html>

<html lang="pt-br">

<head>
    
<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>Minhas Turmas - SIFE</title>

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
>

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
>

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

    /* CARD DO PERFIL */

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

    /* AVATAR */

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

    /* BOTÃO SAIR */

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
       CARD DE TURMA
    ========================= */

    .card-class-full {
        background: white;
        border-radius: 30px;
        padding: 0;
        border: 1px solid var(--border-color);
        height: 100%;
        overflow: hidden;
        transition: 0.3s;
        box-shadow: 0 10px 30px rgba(0,0,0,0.02);
    }

    .card-class-full:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.06);
    }

    .card-class-header {
        padding: 30px;
        background: #fafbfc;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .class-badge {
        background: var(--primary-red);
        color: white;
        padding: 5px 12px;
        border-radius: 8px;
        font-size: 0.7rem;
        font-weight: 800;
    }

    .card-class-body {
        padding: 30px;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
        margin-bottom: 25px;
    }

    .stat-box {
        background: #f8fafc;
        padding: 15px;
        border-radius: 20px;
        text-align: center;
        border: 1px solid #eef2f6;
    }

    .stat-box span {
        display: block;
        font-size: 0.65rem;
        font-weight: 800;
        color: var(--text-muted);
        text-transform: uppercase;
        margin-bottom: 5px;
    }

    .stat-box strong {
        font-size: 1.1rem;
        color: #1a202c;
    }

    /* =========================
       PROGRESSO
    ========================= */

    .progress-label {
        display: flex;
        justify-content: space-between;
        font-size: 0.8rem;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .progress {
        height: 8px;
        border-radius: 10px;
        background-color: #edf2f7;
        margin-bottom: 25px;
    }

    .progress-bar {
        background-color: var(--primary-red);
    }

    /* =========================
       BOTÕES DAS TURMAS
    ========================= */

    .card-class-footer {
        padding: 20px 30px;
        background: #fff;
        display: flex;
        gap: 10px;
    }

    .btn-class-action {
        flex: 1;
        padding: 10px;
        border-radius: 12px;
        border: 1px solid var(--border-color);
        background: white;
        color: var(--text-main);
        font-weight: 700;
        font-size: 0.8rem;
        transition: 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .btn-class-action:hover {
        background: var(--primary-red-soft);
        border-color: var(--primary-red);
        color: var(--primary-red);
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
       BOTÃO FECHAR
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

        /* LOGO MOBILE */

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
    }

    /* =========================
       TELAS MENORES
    ========================= */

    @media (max-width: 576px) {

        .page-title {
            font-size: 1.5rem;
        }

        .card-class-header {
            padding: 25px;
        }

        .card-class-body {
            padding: 25px;
        }

        .card-class-footer {
            padding: 20px 25px;
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
    id="mobileOverlay"
    class="mobile-overlay"
></div>

<div class="wrapper">

    <!-- =========================
         SIDEBAR
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

        <!-- MENU -->

        <div class="nav-menu">

            <!-- GESTÃO -->

            <div class="menu-category">
                Gestão
            </div>

            <a
                href="{{ route('painel-professor') }}"
                class="nav-link"
            >
                <i class="fas fa-th-large"></i>

                <span>
                    Dashboard
                </span>
            </a>

            <a
                href="{{ route('turmasProfessor') }}"
                class="nav-link active"
            >
                <i class="fas fa-users"></i>

                <span>
                    Minhas Turmas
                </span>
            </a>

            <a
                href="{{ route('notas-professor') }}"
                class="nav-link"
            >
                <i class="fas fa-edit"></i>

                <span>
                    Lançar Notas
                </span>
            </a>

            <a
                href="{{ route('frequencia-professor') }}"
                class="nav-link"
            >
                <i class="fas fa-calendar-check"></i>

                <span>
                    Frequência
                </span>
            </a>

            <!-- CONTEÚDO -->

            <div class="menu-category">
                Conteúdo
            </div>

            <a
                href="#"
                class="nav-link"
            >
                <i class="fas fa-file-upload"></i>

                <span>
                    Materiais
                </span>
            </a>

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
             RODAPÉ / PERFIL
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

                <!-- INFORMAÇÕES DO PROFESSOR -->

                <div class="overflow-hidden flex-grow-1">

                    <p
                        class="m-0 small fw-bold text-dark text-truncate"
                    >
                        {{ Auth::check()
                            ? (Auth::user()->nome ?? Auth::user()->name)
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

        <!-- CABEÇALHO -->

        <div
            class="page-header d-flex justify-content-between align-items-end"
        >

            <div>

                <p
                    class="text-muted fw-bold mb-1"
                    style="
                        font-size: 0.75rem;
                        letter-spacing: 1px;
                        text-transform: uppercase;
                    "
                >
                    Docência
                </p>

                <h2 class="page-title">
                    Minhas Turmas
                </h2>

            </div>

        </div>

        <!-- =========================
             TURMAS DINÂMICAS
        ========================= -->

        <div class="row g-4">

            @forelse ($turmas as $turma)

                <div class="col-xl-4 col-md-6">

                    <div class="card-class-full">

                        <!-- CABEÇALHO DA TURMA -->

                        <div class="card-class-header">

                            <div>

                                <span
                                    class="class-badge mb-2 d-inline-block"
                                >
                                    {{ strtoupper(
                                        $turma->periodo ?? 'GERAL'
                                    ) }}
                                </span>

                                <h4 class="fw-bold m-0">
                                    {{ $turma->nome_turma }}
                                </h4>

                                <p class="text-muted small m-0">
                                    {{ $turma->serie
                                        ?? 'Série não informada'
                                    }}
                                </p>

                            </div>

                            <i class="fas fa-ellipsis-v text-muted"></i>

                        </div>

                        <!-- CORPO DA TURMA -->

                        <div class="card-class-body">

                            <div class="stats-grid">

                                <!-- TOTAL DE ALUNOS -->

                                <div class="stat-box">

                                    <span>
                                        Alunos
                                    </span>

                                    <strong>
                                        {{ $turma->total_alunos }}
                                    </strong>

                                </div>

                                <!-- PRESENÇA -->

                                <div class="stat-box">

                                    <span>
                                        Presença Média
                                    </span>

                                    <strong
                                        class="{{ $turma->progresso >= 70
                                            ? 'text-success'
                                            : 'text-warning'
                                        }}"
                                    >
                                        {{ $turma->progresso }}%
                                    </strong>

                                </div>

                            </div>

                            <!-- FREQUÊNCIA -->

                            <div class="progress-label">

                                <span>
                                    Frequência Geral
                                </span>

                                <span>
                                    {{ $turma->progresso }}%
                                </span>

                            </div>

                            <!-- BARRA DE PROGRESSO -->

                            <div class="progress">

                                <div
                                    class="progress-bar"
                                    style="
                                        width: {{ $turma->progresso }}%;
                                    "
                                ></div>

                            </div>

                        </div>

                        <!-- =========================
                             AÇÕES DA TURMA
                        ========================= -->

                        <div class="card-class-footer">

                            <a
                                href="{{ route(
                                    'frequencia-professor',
                                    [
                                        'id_turma' =>
                                        $turma->id_turma
                                    ]
                                ) }}"
                                class="btn-class-action text-decoration-none"
                            >

                                <i class="fas fa-user-check"></i>

                                Frequência

                            </a>

                            <a
                                href="{{ route(
                                    'relatorios',
                                    [
                                        'id_turma' =>
                                        $turma->id_turma
                                    ]
                                ) }}"
                                class="btn-class-action text-decoration-none"
                            >

                                <i class="fas fa-chart-bar"></i>

                                Relatório

                            </a>

                        </div>

                    </div>

                </div>

            @empty

                <!-- NENHUMA TURMA -->

                <div class="col-12">

                    <div
                        class="alert alert-info text-center p-4"
                    >

                        <i
                            class="fas fa-info-circle fa-2x mb-3 text-secondary"
                        ></i>

                        <h5>
                            Nenhuma turma cadastrada
                        </h5>

                        <p class="m-0 text-muted">
                            Não há turmas vinculadas para exibição
                            no momento.
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </main>

</div>

<!-- =========================
     ACESSIBILIDADE
========================= -->

<x-acessibilidade />

<!-- BOOTSTRAP -->

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
