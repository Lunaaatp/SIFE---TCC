<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Minhas Notas - SIFE</title>

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

        .wrapper {
            display: flex;
            min-height: 100vh;
            align-items: stretch;
        }

        /* BOTÃO MENU MOBILE */
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
           RODAPÉ SIDEBAR
        ========================= */

        .sidebar-footer {
            margin-top: auto;
            padding-top: 20px;
            border-top: 1px solid var(--border-color);
        }

        /* =========================
           PERFIL DO USUÁRIO
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

        .user-profile-item > a {
            color: inherit;
            text-decoration: none;
            min-width: 0;
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

        .user-profile-item .fw-bold {
            font-size: 14px;
            color: #1a202c;
        }

        .user-profile-item .text-muted {
            font-size: 12px !important;
        }

        /* =========================
           BOTÃO SAIR
           IGUAL AO DAS OUTRAS PÁGINAS
        ========================= */

        .logout-form {
            margin: 0;
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
            margin-bottom: 30px;
        }

        .page-title {
            font-weight: 800;
            color: #1a202c;
            font-size: 1.75rem;
            letter-spacing: -1px;
        }

        /* =========================
           BANNER
        ========================= */

        .grades-hero {
            background: var(--primary-red);
            border-radius: 30px;
            padding: 40px;
            color: white;
            margin-bottom: 35px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 15px 35px rgba(211, 47, 47, 0.2);
        }

        /* =========================
           CARDS
        ========================= */

        .card-grade {
            background: white;
            border-radius: 25px;
            padding: 25px;
            border: 1px solid var(--border-color);
            transition: 0.3s;
            height: 100%;
        }

        .card-grade:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        .subject-icon {
            width: 45px;
            height: 45px;
            background: var(--primary-red-soft);
            color: var(--primary-red);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .grade-badge {
            font-size: 1.5rem;
            font-weight: 800;
            color: #1a202c;
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

        .table-grades {
            margin-top: 15px;
        }

        .table-grades thead th {
            background: #f8fafc;
            border: none;
            padding: 18px;
            font-size: 0.75rem;
            color: var(--text-muted);
            text-transform: uppercase;
        }

        .table-grades tbody td {
            padding: 18px;
            vertical-align: middle;
            border-bottom: 1px solid #f1f5f9;
        }

        /* =========================
           NOTAS
        ========================= */

        .grade-circle {
            width: 35px;
            height: 35px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.85rem;
        }

        .grade-high {
            background: #e6fffa;
            color: #319795;
        }

        .grade-mid {
            background: #fffaf0;
            color: #dd6b20;
        }

        .grade-low {
            background: #fff5f5;
            color: #e53e3e;
        }

        .grade-muted {
            background: #f1f5f9;
            color: #94a3b8;
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
                height: auto;
                position: relative;
            }

            #content {
                padding: 20px;
            }
        }

        /* =========================
           MENU MOBILE
        ========================= */

        @media (max-width: 768px) {

            body {
                overflow-x: hidden;
            }

            body.menu-open {
                overflow: hidden;
            }

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
                background: #ffffff;
                color: var(--primary-red);
                font-size: 1.2rem;
                box-shadow: 0 5px 15px rgba(211, 47, 47, 0.25);
                z-index: 1200;
                cursor: pointer;
                transition: 0.3s;
            }

            .mobile-menu-btn:hover {
                background: var(--primary-red-hover);
            }

            .mobile-menu-btn.hidden {
                display: none !important;
            }

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

            .sidebar-brand {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 12px;
                padding: 0 15px 35px;
            }

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

            #content {
                width: 100%;
                padding: 85px 16px 30px;
                overflow-y: visible;
            }

            .page-title {
                font-size: 1.45rem;
            }

            .grades-hero {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
                padding: 30px;
            }

            .user-profile-item {
                padding: 12px;
            }

            .avatar-circle {
                width: 42px;
                height: 42px;
            }
        }

        @media (max-width: 576px) {

            .grades-hero {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
                padding: 30px;
            }

            .user-profile-item {
                padding: 12px;
            }

            .avatar-circle {
                width: 42px;
                height: 42px;
            }
        }

    </style>

</head>

<body>

<!-- BOTÃO MENU MOBILE -->
<button
    id="mobileMenuBtn"
    class="mobile-menu-btn"
    type="button"
    aria-label="Abrir menu"
    aria-expanded="false"
>
    <i class="fas fa-bars"></i>
</button>

<!-- OVERLAY MOBILE -->
<div id="mobileOverlay" class="mobile-overlay"></div>

<div class="wrapper">

    <!-- =========================
         SIDEBAR
    ========================= -->

    <nav id="sidebar">

        <!-- LOGO -->
        <div class="sidebar-brand">

            <div class="d-flex align-items-center gap-12">

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

        <!-- MENU -->
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
                class="nav-link active"
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
                class="nav-link"
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
             PERFIL DO ALUNO
        ========================= -->

        <div class="sidebar-footer">

            <div class="user-profile-item">

                <!-- PERFIL -->
                <a
                    href="{{ route('perfilAluno') }}"
                    class="d-flex align-items-center gap-3 text-decoration-none flex-grow-1 overflow-hidden"
                >

                    <!-- AVATAR -->
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

                    <!-- INFORMAÇÕES -->
                    <div class="overflow-hidden flex-grow-1">

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

                <!-- =========================
                     BOTÃO SAIR
                ========================= -->

                <form
                    action="{{ route('logout') }}"
                    method="POST"
                    class="logout-form"
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
                Acadêmico
            </p>

            <h2 class="page-title">
                Boletim Escolar
            </h2>

        </div>

        <!-- =========================
             BANNER
        ========================= -->

        <div class="grades-hero">

            <div>

                <h4 class="fw-bold m-0">

                    Média Geral:
                    {{ $mediaGeral ?? '0.0' }}

                </h4>

                <p class="m-0 opacity-75">

                    @if(($mediaGeral ?? 0) >= 7)

                        Você está acima da média da turma!

                    @else

                        Foque nos estudos para recuperar a média!

                    @endif

                </p>

            </div>

            <div class="text-end">

                <span
                    class="badge bg-white text-danger px-3 py-2 rounded-pill fw-bold"
                >
                    ANO LETIVO 2026
                </span>

            </div>

        </div>

        <!-- =========================
             CARDS DAS NOTAS
        ========================= -->

        <div class="row g-4">

            @forelse($notas as $nota)

                @php

                    $nomeMateria =
                        $nota->disciplina
                        ?? $nota->notasAluno
                        ?? 'Disciplina';

                @endphp

                <div class="col-md-3">

                    <div class="card-grade text-center">

                        <div class="subject-icon mx-auto">

                            <i class="fas fa-book"></i>

                        </div>

                        <p class="text-muted small fw-bold mb-1">

                            {{ strtoupper($nomeMateria) }}

                        </p>

                        <div class="grade-badge">

                            {{ isset($nota->media_final)
                                ? number_format(
                                    $nota->media_final,
                                    1
                                )
                                : '-'
                            }}

                        </div>

                        @if(($nota->media_final ?? 0) >= 8)

                            <span class="text-success small fw-bold">

                                <i class="fas fa-caret-up"></i>

                                Ótimo

                            </span>

                        @elseif(($nota->media_final ?? 0) >= 6)

                            <span class="text-warning small fw-bold">

                                Regular

                            </span>

                        @else

                            <span class="text-danger small fw-bold">

                                <i class="fas fa-caret-down"></i>

                                Atenção

                            </span>

                        @endif

                    </div>

                </div>

            @empty

                <div class="col-12 text-center text-muted py-4">

                    <p class="m-0 fw-semibold">
                        Nenhuma nota cadastrada até o momento.
                    </p>

                </div>

            @endforelse

        </div>

        <!-- =========================
             TABELA
        ========================= -->

        <div class="table-custom-container">

            <div
                class="d-flex justify-content-between align-items-center mb-4"
            >

                <h5 class="fw-bold m-0">

                    <i class="fas fa-list-check me-2 text-danger"></i>

                    Detalhamento por Bimestre

                </h5>

                <button
                    id="btnPdf"
                    class="btn btn-outline-danger btn-sm fw-bold rounded-pill px-3"
                >
                    <i class="fas fa-download me-1"></i>
                    PDF
                </button>

            </div>

            <div class="table-responsive">

                <table class="table table-grades">

                    <thead>

                        <tr>

                            <th>
                                Disciplina
                            </th>

                            <th class="text-center">
                                1º Bim
                            </th>

                            <th class="text-center">
                                2º Bim
                            </th>

                            <th class="text-center">
                                3º Bim
                            </th>

                            <th class="text-center">
                                4º Bim
                            </th>

                            <th class="text-center">
                                Média Final
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @php

                            $getHelperClass = function ($grade) {

                                if (
                                    is_null($grade) ||
                                    $grade === ''
                                ) {
                                    return 'grade-muted';
                                }

                                if ($grade >= 8) {
                                    return 'grade-high';
                                }

                                if ($grade >= 6) {
                                    return 'grade-mid';
                                }

                                return 'grade-low';

                            };

                        @endphp

                        @forelse($notas as $nota)

                            @php

                                $nomeMateria =
                                    $nota->disciplina
                                    ?? $nota->notasAluno
                                    ?? 'Disciplina';

                            @endphp

                            <tr>

                                <td>

                                    <strong>
                                        {{ $nomeMateria }}
                                    </strong>

                                </td>

                                <td class="text-center">

                                    <div
                                        class="grade-circle {{ $getHelperClass($nota->bim1 ?? null) }}"
                                    >

                                        {{ isset($nota->bim1)
                                            ? number_format(
                                                $nota->bim1,
                                                1
                                            )
                                            : '-'
                                        }}

                                    </div>

                                </td>

                                <td class="text-center">

                                    <div
                                        class="grade-circle {{ $getHelperClass($nota->bim2 ?? null) }}"
                                    >

                                        {{ isset($nota->bim2)
                                            ? number_format(
                                                $nota->bim2,
                                                1
                                            )
                                            : '-'
                                        }}

                                    </div>

                                </td>

                                <td class="text-center">

                                    <div
                                        class="grade-circle {{ $getHelperClass($nota->bim3 ?? null) }}"
                                    >

                                        {{ isset($nota->bim3)
                                            ? number_format(
                                                $nota->bim3,
                                                1
                                            )
                                            : '-'
                                        }}

                                    </div>

                                </td>

                                <td class="text-center">

                                    <div
                                        class="grade-circle {{ $getHelperClass($nota->bim4 ?? null) }}"
                                    >

                                        {{ isset($nota->bim4)
                                            ? number_format(
                                                $nota->bim4,
                                                1
                                            )
                                            : '-'
                                        }}

                                    </div>

                                </td>

                                <td class="text-center">

                                    <div
                                        class="grade-circle {{ $getHelperClass($nota->media_final ?? null) }}"
                                    >

                                        {{ isset($nota->media_final)
                                            ? number_format(
                                                $nota->media_final,
                                                1
                                            )
                                            : '-'
                                        }}

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="6"
                                    class="text-center text-muted py-4"
                                >
                                    Nenhum detalhamento disponível no momento.
                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </main>

</div>

<!-- =========================
     PDF
========================= -->

<script>

    document
        .getElementById('btnPdf')
        .addEventListener('click', function () {

            window.location.href =
                "{{ Route::has('notas.pdf')
                    ? route('notas.pdf')
                    : '/notas-pdf'
                }}";

        });

</script>

<!-- =========================
     ACESSIBILIDADE
========================= -->

<x-acessibilidade />

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>

<!-- =========================
     VLIBRAS
========================= -->

<div vw class="enabled">

    <div vw-access-button class="active"></div>

    <div vw-plugin-wrapper>

        <div class="vw-plugin-top-wrapper"></div>

    </div>

</div>

<script src="https://vlibras.gov.br/app/vlibras-plugin.js">
</script>

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