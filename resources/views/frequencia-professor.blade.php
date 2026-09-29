<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Frequência - SIFE Professor</title>

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

<!-- SWEETALERT -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

    .user-profile-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px;
        text-decoration: none;
        border-radius: 15px;
        background: var(--primary-red-soft);
        width: 100%;
        transition: 0.3s;
    }

    .user-profile-item:hover {
        background: #ffe5e5;
        transform: translateY(-1px);
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

    /* =========================
       CONTEÚDO
    ========================= */

    #content {
        flex-grow: 1;
        padding: 40px;
        overflow-y: auto;
    }

    .page-title {
        font-weight: 800;
        color: #1a202c;
        font-size: 1.75rem;
        letter-spacing: -1px;
    }

    .card-custom {
        background: white;
        border-radius: 20px;
        border: 1px solid var(--border-color);
        padding: 24px;
        margin-bottom: 24px;
    }

    .stat-title {
        font-size: 0.75rem;
        font-weight: 700;
        color: #94a3b8;
        text-transform: uppercase;
    }

    .stat-value {
        font-size: 1.8rem;
        font-weight: 800;
        margin-top: 5px;
    }

    /* =========================
       ALUNOS
    ========================= */

    .student-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 16px;
        border-bottom: 1px solid var(--border-color);
        transition: 0.2s;
    }

    .student-row:hover {
        background: #fafafa;
        border-radius: 12px;
    }

    .student-info {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .student-info img {
        width: 45px;
        height: 45px;
        border-radius: 12px;
    }

    /* =========================
       BOTÕES DE STATUS
    ========================= */

    .btn-status {
        border-radius: 10px;
        padding: 8px 20px;
        font-size: 0.85rem;
        font-weight: 600;
        min-width: 120px;
        border: 1px solid transparent;
        transition: 0.2s;
        cursor: pointer;
    }

    .btn-presente {
        background: #e6fcf5;
        color: #0ca678;
        border-color: #b2f2bb;
    }

    .btn-ausente {
        background: #fff5f5;
        color: #fa5252;
        border-color: #ffc9c9;
    }

    /* =========================
       PROGRESSO
    ========================= */

    .progress {
        height: 8px;
        border-radius: 10px;
        background: #edf2f7;
        margin-top: 10px;
    }

    /* =========================
       SALVAR
    ========================= */

    .btn-save-main {
        background: var(--primary-red);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 15px;
        font-weight: 700;
        box-shadow: 0 4px 15px rgba(211, 47, 47, 0.2);
    }

    .btn-save-main:hover {
        background: var(--primary-red-hover);
        color: white;
    }

    /* =========================
       MENU MOBILE
    ========================= */

    body.menu-open {
        overflow: hidden;
    }

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

    .sidebar-close {
        display: none;
        margin-left: auto;
        width: 40px;
        height: 40px;
        border: none;
        border-radius: 12px;
        background: #f8fafc;
        color: #4a5568;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 1rem;
        flex-shrink: 0;
    }

    /* =========================
       RESPONSIVO ORIGINAL
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
            padding: 25px;
        }
    }

    /* =========================
       RESPONSIVO MOBILE
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
            z-index: 10000;
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
            max-width: 100%;
        }

        header {
            align-items: flex-start !important;
            flex-direction: column;
            gap: 20px;
        }

        .btn-save-main {
            width: 100%;
        }

        .card-custom {
            border-radius: 18px;
        }

        .student-row {
            gap: 15px;
        }

        .student-info {
            min-width: 0;
        }

        .student-info > div {
            min-width: 0;
        }

        .student-info p {
            max-width: 160px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .btn-status {
            min-width: 100px;
            padding: 8px 12px;
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

<!-- =========================
     FUNDO ESCURO
========================= -->

<div
    class="mobile-overlay"
    id="mobileOverlay"
></div>

<div class="wrapper">


<!-- =====================================================
     SIDEBAR
====================================================== -->

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
            class="nav-link"
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
            class="nav-link active"
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
            href="{{ route('materiais-professor') }}"
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

    <!-- =====================================================
         PERFIL + BOTÃO SAIR
    ====================================================== -->

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

                <p class="m-0 small fw-bold text-dark text-truncate">

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

<!-- =====================================================
     CONTEÚDO PRINCIPAL
====================================================== -->

<main id="content">

    <!-- CABEÇALHO -->

    <header class="d-flex justify-content-between mb-4">

        <div style="text-align: left;">

            <!-- TEXTO SUPERIOR PADRONIZADO -->

            <p
                class="text-muted fw-bold mb-1"
                style="
                    font-size: 0.75rem;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                "
            >
                Registro de Aula
            </p>

            <!-- TÍTULO PRINCIPAL -->

            <h2 class="page-title">
                Frequência da Turma
            </h2>

        </div>

        <!-- BOTÃO SALVAR -->

        <button
            class="btn btn-save-main"
            onclick="salvarNoBanco(this)"
        >
            <i class="fas fa-cloud-upload-alt me-2"></i>
            SALVAR CHAMADA
        </button>

    </header>

    <!-- =====================================================
         FILTROS
    ====================================================== -->

    <div class="card-custom">

        <form
            method="GET"
            action="{{ route('frequencia-professor') }}"
            id="formFiltroFrequencia"
        >

            <div class="row g-3 align-items-end">

                <!-- TURMA -->

                <div class="col-md-4">

                    <label
                        class="form-label small fw-bold text-muted mb-2 text-uppercase"
                    >
                        TURMA SELECIONADA
                    </label>

                    <select
                        name="id_turma"
                        onchange="document.getElementById('formFiltroFrequencia').submit()"
                        class="form-select border-0 bg-light rounded-3 shadow-none fw-medium py-2"
                    >

                        @forelse($todasTurmas as $turma)

                            <option
                                value="{{ $turma->id_turma }}"
                                {{ request('id_turma', $id_turma ?? '') == $turma->id_turma ? 'selected' : '' }}
                            >

                                {{ $turma->nome_turma }}

                                {{ !empty($turma->serie)
                                    ? '- ' . $turma->serie
                                    : ''
                                }}

                                {{ !empty($turma->periodo)
                                    ? '(' . $turma->periodo . ')'
                                    : ''
                                }}

                            </option>

                        @empty

                            <option
                                value=""
                                disabled
                                selected
                            >
                                Nenhuma turma cadastrada no banco
                            </option>

                        @endforelse

                    </select>

                </div>

                <!-- DATA -->

                <div class="col-md-3">

                    <label
                        for="data_filtro"
                        class="form-label small fw-bold text-muted mb-2 text-uppercase"
                    >
                        DATA
                    </label>

                    <input
                        type="date"
                        name="data"
                        id="data_filtro"
                        class="form-control border-0 bg-light rounded-3 shadow-none fw-medium py-2"
                        value="{{ request('data', date('Y-m-d')) }}"
                        max="{{ date('Y-m-d') }}"
                        onchange="
                            document
                            .getElementById('formFiltroFrequencia')
                            .submit()
                        "
                    >

                </div>

                <!-- BOTÕES -->

                <div class="col-md-5 d-flex gap-2">

                    <button
                        type="button"
                        class="btn btn-outline-danger w-100 rounded-3 fw-bold py-2"
                        onclick="marcarTodos(true)"
                    >
                        Todos Presentes
                    </button>

                    <button
                        type="button"
                        class="btn btn-outline-secondary w-100 rounded-3 fw-bold py-2"
                        onclick="marcarTodos(false)"
                    >
                        Todos Ausentes
                    </button>

                </div>

            </div>

        </form>

    </div>

    <!-- =====================================================
         ESTATÍSTICAS
    ====================================================== -->

    <div class="row g-3 mb-4">

        <!-- TOTAL -->

        <div class="col-md-3">

            <div class="card-custom text-center mb-0">

                <span class="stat-title">
                    Total Alunos
                </span>

                <div
                    class="stat-value"
                    id="statTotal"
                >
                    {{ $totalAlunos ?? 0 }}
                </div>

            </div>

        </div>

        <!-- PRESENTES -->

        <div class="col-md-3">

            <div class="card-custom text-center mb-0">

                <span class="stat-title text-success">
                    Presentes
                </span>

                <div
                    class="stat-value text-success"
                    id="statPresentes"
                >
                    {{ $presentes ?? 0 }}
                </div>

            </div>

        </div>

        <!-- AUSENTES -->

        <div class="col-md-3">

            <div class="card-custom text-center mb-0">

                <span class="stat-title text-danger">
                    Ausentes
                </span>

                <div
                    class="stat-value text-danger"
                    id="statAusentes"
                >
                    {{ $totalAusentes ?? 0 }}
                </div>

            </div>

        </div>

        <!-- APROVEITAMENTO -->

        <div class="col-md-3">

            <div class="card-custom text-center mb-0">

                <span class="stat-title">
                    Aproveitamento
                </span>

                <div
                    class="stat-value"
                    id="statTaxa"
                >
                    {{ $aproveitamento ?? 0 }}%
                </div>

                <div class="progress">

                    <div
                        id="progressBar"
                        class="progress-bar bg-success"
                        style="width: {{ $aproveitamento ?? 0 }}%"
                    ></div>

                </div>

            </div>

        </div>

    </div>

    <!-- =====================================================
         LISTA DE ALUNOS
    ====================================================== -->

    <div class="card-custom p-0 overflow-hidden">

        <!-- CABEÇALHO DA LISTA -->

        <div class="bg-light p-3 border-bottom d-flex justify-content-between">

            <span class="small fw-bold text-muted">
                ESTUDANTE
            </span>

            <span class="small fw-bold text-muted">
                PRESENÇA
            </span>

        </div>

        <!-- ALUNOS -->

        <div id="listaAlunos">

            @foreach($alunos as $aluno)

                <div
                    class="student-row"
                    data-id="{{ $aluno->id_aluno }}"
                    data-status="{{ $aluno->status ?? 'Presente' }}"
                >

                    <!-- INFORMAÇÕES -->

                    <div class="student-info">

                        <img
                            src="https://ui-avatars.com/api/?name={{ urlencode($aluno->nome) }}&background=E3F2FD&color=1565C0"
                            alt="{{ $aluno->nome }}"
                        >

                        <div>

                            <p class="m-0 fw-bold">
                                {{ $aluno->nome }}
                            </p>

                            <small class="text-muted">
                                Mat: {{ $aluno->id_aluno }}
                            </small>

                        </div>

                    </div>

                    <!-- BOTÃO STATUS -->

                    <button class="btn-status"></button>

                </div>

            @endforeach

        </div>

    </div>

</main>

</div>

<!-- =====================================================
     JQUERY
====================================================== -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- =====================================================
     MENU MOBILE
====================================================== -->

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

    const linksMenu =
        sidebar.querySelectorAll('.nav-link');

    linksMenu.forEach(link => {

        link.addEventListener(
            'click',
            fecharMenu
        );

    });

    document.addEventListener(
        'keydown',
        function(event) {

            if (event.key === 'Escape') {
                fecharMenu();
            }

        }
    );

    window.addEventListener(
        'resize',
        function() {

            if (window.innerWidth > 768) {

                sidebar.classList.remove('active');

                mobileOverlay.classList.remove('active');

                mobileMenuBtn.classList.remove('hidden');

                mobileMenuBtn.setAttribute(
                    'aria-expanded',
                    'false'
                );

                document.body.classList.remove('menu-open');

            }

        }
    );

</script>

<!-- =====================================================
     JAVASCRIPT
====================================================== -->

<script>

let estadoPresenca = {};

/* =====================================================
   CARREGAMENTO DA PÁGINA
===================================================== */

$(document).ready(function () {

    $('.student-row').each(function () {

        let id =
            $(this).data('id');

        let statusBanco =
            $(this).data('status');

        estadoPresenca[id] =
            (statusBanco !== 'Falta');

    });

    atualizarInterface();

    /* ALTERAR STATUS DO ALUNO */

    $(document).on(
        'click',
        '.btn-status',
        function () {

            let id =
                $(this)
                .closest('.student-row')
                .data('id');

            estadoPresenca[id] =
                !estadoPresenca[id];

            atualizarInterface();

        }
    );

});

/* =====================================================
   ATUALIZAR INTERFACE
===================================================== */

function atualizarInterface() {

    let total = 0;

    let presentes = 0;

    $('.student-row').each(function () {

        let id =
            $(this).data('id');

        let btn =
            $(this).find('.btn-status');

        total++;

        if (estadoPresenca[id]) {

            presentes++;

            btn.text('Presente')
               .removeClass('btn-ausente')
               .addClass('btn-presente');

        } else {

            btn.text('Falta')
               .removeClass('btn-presente')
               .addClass('btn-ausente');

        }

    });

    let taxa =
        total > 0
            ? Math.round(
                (presentes / total) * 100
            )
            : 0;

    $('#statTotal')
        .text(total);

    $('#statPresentes')
        .text(presentes);

    $('#statAusentes')
        .text(total - presentes);

    $('#statTaxa')
        .text(taxa + '%');

    $('#progressBar')
        .css(
            'width',
            taxa + '%'
        );

}

/* =====================================================
   MARCAR TODOS
===================================================== */

function marcarTodos(valor) {

    Object.keys(
        estadoPresenca
    ).forEach(function (id) {

        estadoPresenca[id] =
            valor;

    });

    atualizarInterface();

}

/* =====================================================
   SALVAR NO BANCO
===================================================== */

function salvarNoBanco(btn) {

    /* CONFIRMAÇÃO */

    Swal.fire({

        title: 'Salvar Chamada?',

        text: 'Deseja confirmar o lançamento da frequência para esta turma?',

        icon: 'question',

        showCancelButton: true,

        confirmButtonColor: '#28a745',

        cancelButtonColor: '#6c757d',

        confirmButtonText:
            '<i class="fas fa-check me-1"></i> Sim, salvar!',

        cancelButtonText:
            'Cancelar',

        reverseButtons: true

    }).then((result) => {

        if (result.isConfirmed) {

            /* CARREGAMENTO */

            Swal.fire({

                title: 'Salvando...',

                text: 'Aguarde um momento enquanto registramos a frequência.',

                allowOutsideClick: false,

                allowEscapeKey: false,

                didOpen: () => {

                    Swal.showLoading();

                }

            });

            /* ARRAY DE FREQUÊNCIAS */

            let frequencias = [];

            $('.student-row').each(function () {

                let idAluno =
                    $(this).data('id');

                frequencias.push({

                    id_aluno: idAluno,

                    status:
                        estadoPresenca[idAluno]
                            ? 'Presente'
                            : 'Falta'

                });

            });

            /* AJAX */

            $.ajax({

                url:
                    "{{ route('frequencia.salvar') }}",

                method:
                    "POST",

                data: {

                    _token:
                        "{{ csrf_token() }}",

                    id_turma:
                        $("select[name='id_turma']").val(),

                    data:
                        $("#data_filtro").val()
                        ||
                        $("input[name='data']").val(),

                    frequencias:
                        frequencias

                },

                /* SUCESSO */

                success: function (response) {

                    Swal.fire({

                        icon: 'success',

                        title: 'Sucesso!',

                        text:
                            response.message
                            ||
                            'Frequência salva com sucesso!',

                        confirmButtonColor:
                            '#28a745'

                    });

                },

                /* ERRO */

                error: function (xhr) {

                    Swal.fire({

                        icon: 'error',

                        title: 'Ops! Ocorreu um erro',

                        text:
                            xhr.responseJSON?.message
                            ||
                            'Erro ao salvar a frequência.',

                        confirmButtonColor:
                            '#d33'

                    });

                    console.error(
                        xhr
                    );

                }

            });

        }

    });

}

</script>

<!-- =====================================================
     ACESSIBILIDADE
====================================================== -->

<x-acessibilidade />

<!-- BOOTSTRAP JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- =====================================================
     VLIBRAS
====================================================== -->

<div
    vw
    class="enabled"
>


<div
    vw-access-button
    class="active"
></div>

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
