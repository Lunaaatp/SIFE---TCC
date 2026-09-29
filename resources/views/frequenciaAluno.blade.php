<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Minha Frequência - SIFE</title>

    <!-- BOOTSTRAP -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT AWESOME -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- GOOGLE FONT -->

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

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



        .wrapper {

            display: flex;

            min-height: 100vh;

            align-items: stretch;

        }



        /* =========================
           BOTÃO MENU MOBILE
        ========================= */

        .mobile-menu-btn {

            display: none;

        }

        .mobile-overlay {

            display: none;

        }

        .sidebar-close {

            display: none;

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



        /* =========================
           CARD DO USUÁRIO
        ========================= */

        .user-profile-item {

            display: flex;

            align-items: center;

            gap: 12px;

            padding: 12px;

            text-decoration: none;

            border-radius: 15px;

            background: var(--primary-red-soft);

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

            margin-bottom: 30px;

        }



        .page-title {

            font-weight: 800;

            color: #1a202c;

            font-size: 1.75rem;

            letter-spacing: -1px;

        }



        /* =========================
           CARD DE DESTAQUE
        ========================= */

        .freq-hero {

            background: white;

            border-radius: 30px;

            padding: 40px;

            border: 1px solid var(--border-color);

            margin-bottom: 35px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);

        }



        /* =========================
           GRÁFICO CIRCULAR
        ========================= */

        .percent-circle {

            width: 120px;

            height: 120px;

            border-radius: 50%;

            background:

                radial-gradient(

                    closest-side,

                    white 79%,

                    transparent 80% 100%

                ),

                conic-gradient(

                    var(--primary-red) 92%,

                    #edf2f7 0

                );

            display: flex;

            align-items: center;

            justify-content: center;

            position: relative;

        }



        .percent-circle span {

            font-size: 1.5rem;

            font-weight: 800;

            color: var(--primary-red);

        }



        /* =========================
           STATS CARDS
        ========================= */

        .card-stat {

            background: white;

            border-radius: 25px;

            padding: 30px;

            border: 1px solid var(--border-color);

            height: 100%;

        }



        .stat-icon {

            width: 50px;

            height: 50px;

            border-radius: 15px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 1.3rem;

            margin-bottom: 20px;

        }



        /* =========================
           TABELA
        ========================= */

        .table-custom-container {

            background: white;

            border-radius: 25px;

            padding: 30px;

            border: 1px solid var(--border-color);

            margin-top: 35px;

        }



        .table-freq {

            margin-top: 15px;

        }



        .table-freq thead th {

            background: #f8fafc;

            border: none;

            padding: 18px;

            font-size: 0.75rem;

            color: var(--text-muted);

            text-transform: uppercase;

        }



        .table-freq tbody td {

            padding: 18px;

            border-bottom: 1px solid #f1f5f9;

        }



        .progress {

            height: 8px;

            border-radius: 10px;

            background-color: #edf2f7;

        }



        .progress-bar {

            background-color: var(--primary-red);

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



            .freq-hero {

                flex-direction: column;

                text-align: center;

                gap: 20px;

            }

        }



        /* =========================
           MENU MOBILE SIFE
        ========================= */

        @media (max-width: 768px) {

            body {

                overflow-x: hidden;

            }



            body.menu-open {

                overflow: hidden;

            }



            /* BOTÃO HAMBÚRGUER */

            .mobile-menu-btn {

                display: flex;

                position: fixed;

                top: 15px;

                left: 15px;

                width: 48px;

                height: 48px;

                align-items: center;

                justify-content: center;

                border: none;

                border-radius: 14px;

                /* CORRIGIDO: BOTÃO BRANCO */

                background: #ffffff;

                /* CORRIGIDO: BARRINHAS VERMELHAS */

                color: var(--primary-red);

                font-size: 1.2rem;

                box-shadow: 0 5px 15px rgba(211, 47, 47, 0.25);

                z-index: 1200;

                cursor: pointer;

                transition: 0.3s;

            }



            .mobile-menu-btn:hover {

                background: #ffffff;

                color: var(--primary-red-hover);

            }



            /* ESCONDE O HAMBÚRGUER QUANDO O MENU ESTÁ ABERTO */

            .mobile-menu-btn.hidden {

                display: none !important;

            }



            /* FUNDO ESCURO */

            .mobile-overlay {

                display: block;

                position: fixed;

                inset: 0;

                background: rgba(0, 0, 0, 0.45);

                opacity: 0;

                visibility: hidden;

                transition: 0.3s ease;

                z-index: 1050;

            }



            .mobile-overlay.active {

                opacity: 1;

                visibility: visible;

            }



            /* SIDEBAR */

            #sidebar {

                position: fixed;

                left: -300px;

                top: 0;

                bottom: auto;

                width: min(280px, 85vw);

                min-width: 0;

                height: 100vh;

                padding: 25px 15px;

                background: #ffffff;

                border-right: 1px solid var(--border-color);

                border-top: none;

                box-shadow: 5px 0 25px rgba(0, 0, 0, 0.12);

                z-index: 1100;

                transition: left 0.3s ease;

                overflow-y: auto;

            }



            #sidebar.active {

                left: 0;

            }



            /* LOGO DO SIDEBAR */

            .sidebar-brand {

                display: flex;

                align-items: center;

                justify-content: space-between;

                gap: 12px;

                padding: 0 15px 35px;

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



            /* MENU NORMAL NO MOBILE */

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

                padding: 85px 16px 30px;

                overflow-y: visible;

            }



            .page-title {

                font-size: 1.45rem;

            }



            .freq-hero {

                padding: 25px 20px;

                border-radius: 24px;

            }



            .card-stat {

                padding: 24px;

                border-radius: 20px;

            }



            .table-custom-container {

                padding: 20px 15px;

                border-radius: 20px;

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

<div id="mobileOverlay" class="mobile-overlay"></div>



<div class="wrapper">



    <!-- =========================
         SIDEBAR
    ========================= -->

    <nav id="sidebar">



        <div class="sidebar-brand">

            <div class="d-flex align-items-center" style="gap: 12px;">

                <div class="brand-icon">

                    <i class="fas fa-graduation-cap"></i>

                </div>

                <span class="brand-name">

                    SIFE

                </span>

            </div>



            <!-- BOTÃO FECHAR MOBILE -->

            <button
                id="sidebarClose"
                class="sidebar-close"
                type="button"
                aria-label="Fechar menu"
            >

                <i class="fas fa-times"></i>

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
                class="nav-link active"
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
                class="nav-link"
            >

                <i class="fas fa-calendar-alt"></i>

                <span>

                    Eventos

                </span>

            </a>



        </div>



        <!-- =========================
             PERFIL DO ALUNO
        ========================= -->

        <div class="sidebar-footer">



            <div class="user-profile-item">



                <div class="avatar-circle">



                    @if(Auth::check())

                        @php

                            $nomes = explode(
                                ' ',
                                Auth::user()->nome
                            );

                            $primeiraLetra =
                                mb_substr(
                                    $nomes[0] ?? 'A',
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

                        US

                    @endif



                </div>



                <div class="overflow-hidden flex-grow-1">



                    <p class="m-0 small fw-bold text-dark text-truncate">

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



                <!-- =========================
                     BOTÃO SAIR
                ========================= -->

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

                Acompanhamento

            </p>



            <h2 class="page-title">

                Frequência Escolar

            </h2>



        </div>



        <!-- =========================
             DESTAQUE
        ========================= -->

        <div class="freq-hero">



            <div>



                <h3 class="fw-bold mb-2">

                    Presença Geral: 92%

                </h3>



                <p class="text-muted m-0">

                    Você possui

                    <strong>18 faltas</strong>

                    permitidas até o fim do semestre.

                </p>



                <div class="mt-3">

                    <span
                        class="badge bg-success-subtle text-success px-3 py-2 rounded-pill fw-bold"
                    >

                        SITUAÇÃO REGULAR

                    </span>

                </div>



            </div>



            <div class="percent-circle">

                <span>

                    92%

                </span>

            </div>



        </div>



        <!-- =========================
             CARDS
        ========================= -->

        <div class="row g-4">



            <div class="col-md-4">



                <div class="card-stat">



                    <div class="stat-icon bg-success-subtle text-success">

                        <i class="fas fa-user-check"></i>

                    </div>



                    <p class="text-muted small fw-bold mb-1">

                        TOTAL DE PRESENÇAS

                    </p>



                    <h3 class="fw-bold m-0">

                        184

                    </h3>



                    <small class="text-muted">

                        Aulas assistidas

                    </small>



                </div>



            </div>



            <div class="col-md-4">



                <div class="card-stat">



                    <div class="stat-icon bg-danger-subtle text-danger">

                        <i class="fas fa-user-times"></i>

                    </div>



                    <p class="text-muted small fw-bold mb-1">

                        TOTAL DE FALTAS

                    </p>



                    <h3 class="fw-bold m-0">

                        16

                    </h3>



                    <small class="text-muted">

                        No semestre atual

                    </small>



                </div>



            </div>



            <div class="col-md-4">



                <div class="card-stat">



                    <div class="stat-icon bg-primary-subtle text-primary">

                        <i class="fas fa-clock"></i>

                    </div>



                    <p class="text-muted small fw-bold mb-1">

                        CARGA HORÁRIA

                    </p>



                    <h3 class="fw-bold m-0">

                        200h

                    </h3>



                    <small class="text-muted">

                        Total contabilizado

                    </small>



                </div>



            </div>



        </div>



        <!-- =========================
             TABELA
        ========================= -->

        <div class="table-custom-container">



            <h5 class="fw-bold mb-4">

                <i class="fas fa-list-ul me-2 text-danger"></i>

                Frequência por Disciplina

            </h5>



            <div class="table-responsive">



                <table class="table table-freq">



                    <thead>

                        <tr>

                            <th>

                                Disciplina

                            </th>

                            <th>

                                Faltas

                            </th>

                            <th style="width: 300px;">

                                Progresso de Presença

                            </th>

                            <th class="text-end">

                                Porcentagem

                            </th>

                        </tr>

                    </thead>



                    <tbody>



                        <tr>

                            <td>

                                <strong>Matemática</strong>

                            </td>

                            <td>

                                4

                            </td>

                            <td>

                                <div class="progress">

                                    <div
                                        class="progress-bar"
                                        style="width: 90%;"
                                    ></div>

                                </div>

                            </td>

                            <td class="text-end fw-bold">

                                90%

                            </td>

                        </tr>



                        <tr>

                            <td>

                                <strong>Português</strong>

                            </td>

                            <td>

                                2

                            </td>

                            <td>

                                <div class="progress">

                                    <div
                                        class="progress-bar"
                                        style="width: 95%;"
                                    ></div>

                                </div>

                            </td>

                            <td class="text-end fw-bold">

                                95%

                            </td>

                        </tr>



                        <tr>

                            <td>

                                <strong>Física</strong>

                            </td>

                            <td>

                                8

                            </td>

                            <td>

                                <div class="progress">

                                    <div
                                        class="progress-bar bg-warning"
                                        style="width: 78%;"
                                    ></div>

                                </div>

                            </td>

                            <td class="text-end fw-bold text-warning">

                                78%

                            </td>

                        </tr>



                        <tr>

                            <td>

                                <strong>História</strong>

                            </td>

                            <td>

                                2

                            </td>

                            <td>

                                <div class="progress">

                                    <div
                                        class="progress-bar"
                                        style="width: 96%;"
                                    ></div>

                                </div>

                            </td>

                            <td class="text-end fw-bold">

                                96%

                            </td>

                        </tr>



                    </tbody>



                </table>



            </div>



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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



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



    /* =========================
       MENU MOBILE
    ========================= */

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

        /* ESCONDE O HAMBÚRGUER */

        mobileMenuBtn.classList.add('hidden');

        mobileMenuBtn.setAttribute(
            'aria-expanded',
            'true'
        );

        document.body.classList.add('menu-open');

    }



    function fecharMenu() {

        sidebar.classList.remove('active');

        mobileOverlay.classList.remove('active');

        /* FAZ O HAMBÚRGUER VOLTAR */

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



    /* FECHA AO CLICAR EM UMA OPÇÃO */

    document
        .querySelectorAll('#sidebar .nav-link')
        .forEach(link => {

            link.addEventListener('click', () => {

                if (window.innerWidth <= 768) {

                    fecharMenu();

                }

            });

        });



    /* FECHA COM ESC */

    document.addEventListener(
        'keydown',
        e => {

            if (
                e.key === 'Escape' &&
                sidebar.classList.contains('active')
            ) {

                fecharMenu();

            }

        }

    );



    /* RESET AO VOLTAR PARA DESKTOP */

    window.addEventListener(
        'resize',
        () => {

            if (window.innerWidth > 768) {

                sidebar.classList.remove('active');

                mobileOverlay.classList.remove('active');

                mobileMenuBtn.classList.remove('hidden');

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