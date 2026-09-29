<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lançar Notas - SIFE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
           FILTROS
        ========================= */

        .filter-container {
            background: white;
            border-radius: 25px;
            padding: 30px;
            border: 1px solid var(--border-color);
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: 700;
            color: var(--text-muted);
            font-size: 0.75rem;
            text-transform: uppercase;
        }

        .form-select {
            border-radius: 12px;
            padding: 12px;
            border: 1px solid var(--border-color);
            font-weight: 600;
        }

        /* =========================
           TABELA
        ========================= */

        .table-custom-container {
            background: white;
            border-radius: 25px;
            padding: 30px;
            border: 1px solid var(--border-color);
        }

        .table-notes thead th {
            background: #f8fafc;
            border: none;
            padding: 18px;
            font-size: 0.75rem;
            color: var(--text-muted);
            text-transform: uppercase;
        }

        .table-notes tbody td {
            padding: 18px;
            border-bottom: 1px solid #f1f5f9;
            vertical-align: middle;
        }

        .input-grade {
            width: 80px;
            padding: 8px;
            border-radius: 10px;
            border: 2px solid #edf2f7;
            text-align: center;
            font-weight: 800;
            color: var(--primary-red);
            transition: 0.3s;
        }

        .input-grade:focus {
            border-color: var(--primary-red);
            outline: none;
            background: var(--primary-red-soft);
        }

        /* =========================
           BOTÃO SALVAR
        ========================= */

        .btn-save {
            background: var(--primary-red);
            color: white;
            border: none;
            padding: 12px 35px;
            border-radius: 15px;
            font-weight: 700;
            transition: 0.3s;
            box-shadow: 0 4px 12px rgba(211, 47, 47, 0.2);
        }

        .btn-save:hover {
            background: var(--primary-red-hover);
            transform: translateY(-2px);
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
           RESPONSIVIDADE ORIGINAL
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
        }

        /* =========================
           RESPONSIVIDADE MOBILE
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

            .page-header {
                align-items: flex-start !important;
                flex-direction: column;
                gap: 20px;
            }

            .page-title {
                font-size: 1.5rem;
            }

            .btn-save {
                width: 100%;
            }

            .filter-container {
                padding: 20px;
                border-radius: 20px;
            }

            .table-custom-container {
                padding: 15px;
                border-radius: 20px;
            }

            .table-responsive {
                overflow-x: auto;
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

            <div class="menu-category">
                Gestão
            </div>


            <!-- DASHBOARD -->

            <a
                href="{{ route('painel-professor') }}"
                class="nav-link"
            >
                <i class="fas fa-th-large"></i>

                <span>
                    Dashboard
                </span>
            </a>


            <!-- MINHAS TURMAS -->

            <a
                href="{{ route('turmasProfessor') }}"
                class="nav-link"
            >
                <i class="fas fa-users"></i>

                <span>
                    Minhas Turmas
                </span>
            </a>


            <!-- LANÇAR NOTAS -->

            <a
                href="{{ route('notas-professor') }}"
                class="nav-link active"
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


            <!-- CONTEÚDO -->

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


    <!-- =========================
         CONTEÚDO
    ========================= -->

    <main id="content">

        <form
            action="{{ route('notas.salvar') }}"
            method="POST"
            id="formNotas"
        >

            @csrf


            <!-- CABEÇALHO -->

            <div class="page-header d-flex justify-content-between align-items-end">

                <div>

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
                        Lançamento de Notas
                    </h2>

                </div>


                <!-- SALVAR -->

                <button
                    type="submit"
                    class="btn btn-save"
                    onclick="salvarNotas()"
                >

                    <i class="fas fa-save me-2"></i>

                    SALVAR ALTERAÇÕES

                </button>

            </div>


            <!-- =========================
                 FILTROS
            ========================= -->

            <div class="filter-container">

                <div class="row g-3">


                    <!-- TURMA -->

                    <div class="col-md-4">

                        <label class="form-label">
                            Selecionar Turma
                        </label>

                        <select
                            class="form-select"
                            name="id_turma"
                            id="selectTurma"
                        >

                            <option value="">
                                Selecione uma turma
                            </option>

                            @foreach($turmas as $turma)

                                @php

                                    $idT =
                                        $turma->id_turma
                                        ?? $turma->id;

                                @endphp

                                <option value="{{ $idT }}">

                                    {{ $turma->nome_turma ?? $turma->nome }}

                                </option>

                            @endforeach

                        </select>

                    </div>


                    <!-- BIMESTRE -->

                    <div class="col-md-4">

                        <label class="form-label">
                            Bimestre
                        </label>

                        <select
                            class="form-select"
                            name="bimestre"
                            id="selectBimestre"
                        >

                            <option value="1">
                                1º Bimestre
                            </option>

                            <option value="2" selected>
                                2º Bimestre
                            </option>

                            <option value="3">
                                3º Bimestre
                            </option>

                            <option value="4">
                                4º Bimestre
                            </option>

                        </select>

                    </div>


                    <!-- AVALIAÇÃO -->

                    <div class="col-md-4">

                        <label class="form-label">
                            Avaliação
                        </label>

                        <select
                            class="form-select"
                            name="avaliacao"
                            id="selectAvaliacao"
                        >

                            <option value="Prova Mensal">
                                Prova Mensal
                            </option>

                            <option value="Atividade Prática">
                                Atividade Prática
                            </option>

                            <option value="Trabalho">
                                Trabalho
                            </option>

                        </select>

                    </div>

                </div>

            </div>


            <!-- =========================
                 TABELA
            ========================= -->

            <div class="table-custom-container">

                <div class="table-responsive">

                    <table class="table table-notes">

                        <thead>

                            <tr>

                                <th style="width: 80px;">
                                    Nº
                                </th>

                                <th>
                                    Estudante
                                </th>

                                <th class="text-center">
                                    Nota Atual
                                </th>

                                <th class="text-center">
                                    Nova Nota
                                </th>

                            </tr>

                        </thead>


                        <tbody id="tabelaAlunos">

                            <tr>

                                <td
                                    colspan="4"
                                    class="text-center text-muted py-4"
                                >
                                    Selecione uma turma para carregar
                                    a lista de alunos.
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </form>

    </main>

</div>


<!-- =========================
     JS LIBS
========================= -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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


<!-- =========================
     SCRIPT PARA BUSCA DOS ALUNOS
========================= -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const selectTurma =
        document.getElementById('selectTurma');

    const selectBimestre =
        document.getElementById('selectBimestre');

    const selectAvaliacao =
        document.getElementById('selectAvaliacao');

    const tabelaAlunos =
        document.getElementById('tabelaAlunos');


    function carregarAlunos() {

        const idTurma =
            selectTurma.value;

        const bimestre =
            selectBimestre.value;

        const avaliacao =
            selectAvaliacao.value;


        if (!idTurma) {

            tabelaAlunos.innerHTML = `

                <tr>

                    <td
                        colspan="4"
                        class="text-center text-muted py-4"
                    >

                        Selecione uma turma para carregar
                        a lista de alunos.

                    </td>

                </tr>

            `;

            return;
        }


        tabelaAlunos.innerHTML = `

            <tr>

                <td
                    colspan="4"
                    class="text-center text-muted py-4"
                >

                    <i class="fas fa-spinner fa-spin me-2"></i>

                    Carregando alunos...

                </td>

            </tr>

        `;


        const url =
            `{{ route('obter-alunos-turma') }}?id_turma=${encodeURIComponent(idTurma)}&bimestre=${encodeURIComponent(bimestre)}&avaliacao=${encodeURIComponent(avaliacao)}`;


        fetch(url, {

            headers: {

                'X-Requested-With':
                    'XMLHttpRequest',

                'Accept':
                    'application/json'

            }

        })

        .then(response => {

            if (!response.ok) {

                throw new Error(
                    'Erro na requisição'
                );

            }

            return response.json();

        })

        .then(data => {

            if (!data || data.length === 0) {

                tabelaAlunos.innerHTML = `

                    <tr>

                        <td
                            colspan="4"
                            class="text-center text-muted py-4"
                        >

                            Nenhum aluno encontrado
                            para a turma selecionada.

                        </td>

                    </tr>

                `;

                return;
            }


            let html = '';


            data.forEach((aluno, index) => {

                const idAluno =
                    aluno.id ?? aluno.id_aluno;

                const nomeAluno =
                    aluno.nome ?? aluno.nome_aluno;

                const notaAtual =
                    (
                        aluno.nota_atual !== null &&
                        aluno.nota_atual !== undefined
                    )
                        ? aluno.nota_atual
                        : '-';

                const num =
                    String(index + 1).padStart(2, '0');


                html += `

                    <tr>

                        <td>
                            ${num}
                        </td>

                        <td>

                            <strong>
                                ${nomeAluno}
                            </strong>

                        </td>

                        <td
                            class="text-center fw-bold"
                        >

                            ${notaAtual}

                        </td>

                        <td class="text-center">

                            <input
                                type="number"
                                data-id-aluno="${idAluno}"
                                class="input-nota input-grade"
                                step="0.1"
                                min="0"
                                max="10"
                                value="${notaAtual !== '-' ? notaAtual : ''}"
                            >

                        </td>

                    </tr>

                `;

            });


            tabelaAlunos.innerHTML = html;

        })

        .catch(error => {

            console.error(error);

            tabelaAlunos.innerHTML = `

                <tr>

                    <td
                        colspan="4"
                        class="text-center text-danger py-4"
                    >

                        <i
                            class="fas fa-exclamation-circle me-2"
                        ></i>

                        Erro ao carregar alunos.
                        Tente novamente.

                    </td>

                </tr>

            `;

        });

    }


    if (selectTurma) {

        selectTurma.addEventListener(
            'change',
            carregarAlunos
        );

    }


    if (selectBimestre) {

        selectBimestre.addEventListener(
            'change',
            carregarAlunos
        );

    }


    if (selectAvaliacao) {

        selectAvaliacao.addEventListener(
            'change',
            carregarAlunos
        );

    }

});


/* =========================
   SALVAR NOTAS
========================= */

function salvarNotas() {

    if (typeof Swal === 'undefined') {

        alert(
            'A biblioteca SweetAlert2 não foi carregada corretamente.'
        );

        return;
    }


    let notasData = [];


    document
        .querySelectorAll('.input-nota')
        .forEach(input => {

            let idAluno =
                input.getAttribute(
                    'data-id-aluno'
                );

            let notaVal =
                input.value;


            if (notaVal !== '') {

                notasData.push({

                    id_aluno:
                        idAluno,

                    nota:
                        notaVal

                });

            }

        });


    if (notasData.length === 0) {

        Swal.fire({

            icon: 'warning',

            title: 'Atenção',

            text:
                'Preencha ao menos uma nota antes de salvar.',

            confirmButtonColor:
                '#d32f2f'

        });

        return;
    }


    Swal.fire({

        title:
            'Salvando notas...',

        text:
            'Por favor, aguarde.',

        allowOutsideClick:
            false,

        didOpen: () => {

            Swal.showLoading();

        }

    });


    const tokenCSRF =
        document
            .querySelector(
                'meta[name="csrf-token"]'
            )
            ?.getAttribute('content');


    fetch('/salvar-notas', {

        method: 'POST',

        headers: {

            'Content-Type':
                'application/json',

            'X-CSRF-TOKEN':
                tokenCSRF,

            'X-Requested-With':
                'XMLHttpRequest',

            'Accept':
                'application/json'

        },

        body: JSON.stringify({

            id_turma:
                document
                    .getElementById(
                        'selectTurma'
                    )
                    .value,

            bimestre:
                document
                    .getElementById(
                        'selectBimestre'
                    )
                    .value,

            notas:
                notasData

        })

    })

    .then(response => {

        if (!response.ok) {

            throw new Error(
                'Erro no servidor HTTP ' +
                response.status
            );

        }

        return response.json();

    })

    .then(data => {

        Swal.fire({

            icon:
                'success',

            title:
                'Sucesso!',

            text:
                'As notas foram salvas com sucesso.',

            confirmButtonColor:
                '#d32f2f',

            timer:
                2000,

            showConfirmButton:
                false

        });

    })

    .catch(error => {

        console.error(error);

        Swal.fire({

            icon:
                'error',

            title:
                'Erro ao salvar',

            text:
                'Não foi possível registrar as notas. Verifique se a rota "/salvar-notas" está configurada.',

            confirmButtonColor:
                '#d32f2f'

        });

    });

}

</script>


<!-- =========================
     MENSAGENS DA SESSÃO
========================= -->

@if(session('success'))

<script>

Swal.fire({

    icon:
        'success',

    title:
        'Sucesso!',

    text:
        "{{ session('success') }}",

    confirmButtonColor:
        '#d32f2f'

});

</script>

@endif


@if(session('error'))

<script>

Swal.fire({

    icon:
        'error',

    title:
        'Erro!',

    text:
        "{{ session('error') }}",

    confirmButtonColor:
        '#d32f2f'

});

</script>

@endif


</body>

</html>
