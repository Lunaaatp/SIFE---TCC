<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIFE - Relatórios e Exportação</title>

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

    <!-- Google Fonts -->
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

        * {
            box-sizing: border-box;
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

        /* =====================================
           SIDEBAR
        ====================================== */

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

        /* =====================================
           PERFIL + LOGOUT
        ====================================== */

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

        /* =====================================
           CONTEÚDO
        ====================================== */

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
            transition: 0.2s;
        }

        /* =====================================
           CARDS DOS RELATÓRIOS
        ====================================== */

        .report-type-card:hover {
            border-color: var(--primary-red);
            transform: translateY(-3px);
        }

        .icon-shape {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        .bg-blue {
            background: #e0f2fe;
            color: #0369a1;
        }

        .bg-green {
            background: #dcfce7;
            color: #15803d;
        }

        .bg-purple {
            background: #f3e8ff;
            color: #7e22ce;
        }

        /* =====================================
           TABELA
        ====================================== */

        .table-recent td {
            vertical-align: middle;
            padding: 15px;
            border-color: var(--border-color);
        }

        .table-recent th {
            padding: 15px;
            border-color: var(--border-color);
        }

        .file-badge {
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 0.7rem;
            font-weight: 800;
        }

        .pdf-badge {
            background: #fee2e2;
            color: #b91c1c;
        }

        .xls-badge {
            background: #dcfce7;
            color: #166534;
        }

        /* =====================================
           BOTÃO PDF
        ====================================== */

        .btn-pdf {
            border-color: var(--primary-red);
            color: var(--primary-red);
        }

        .btn-pdf:hover {
            background: var(--primary-red);
            color: white;
        }

        .download-btn {
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        /* =====================================
           CONFIGURAÇÃO PARA PDF
        ====================================== */

        .pdf-mode {
            background: white !important;
        }

        .pdf-mode .card-custom {
            box-shadow: none !important;
        }

        /* =====================================
           RESPONSIVO TABLET
        ====================================== */

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

        /* =====================================
           MENU SANDUÍCHE MOBILE
        ====================================== */

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

        @media (max-width: 768px) {

            .hamburger-btn {
                display: flex;
            }

            .wrapper {
                display: block;
                min-height: 100vh;
            }

            /* Sidebar vira painel deslizante */
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

            /* Conteúdo ocupa toda a tela */
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

            /* Cards ficam um embaixo do outro */
            .row.g-4 {
                --bs-gutter-y: 1rem;
            }

            .report-type-card {
                margin-bottom: 0;
            }

            /* Cabeçalho da tabela */
            .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-recent {
                min-width: 700px;
            }

            /* Cabeçalho dos arquivos */
            .card-custom > .bg-light {
                gap: 10px;
                flex-wrap: wrap;
            }
        }
    </style>
</head>

<body>

    <!-- =====================================
         BOTÃO SANDUÍCHE
    ====================================== -->

    <button
        class="hamburger-btn"
        id="hamburgerBtn"
        aria-label="Abrir menu"
        type="button"
    >
        <i class="fas fa-bars"></i>
    </button>

    <div
        class="sidebar-overlay"
        id="sidebarOverlay"
    ></div>

    <div class="wrapper">

        <!-- =====================================
             SIDEBAR
        ====================================== -->

        <nav id="sidebar">

            <!-- CABEÇALHO -->

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

            <!-- MENU -->

            <div class="nav-menu">

                <span class="menu-label">
                    Principal
                </span>

                <a
                    href="{{ route('frequencia') }}"
                    class="nav-link"
                >
                    <i class="fas fa-calendar-check"></i>
                    <span>
                        Frequência
                    </span>
                </a>

                <a
                    href="{{ route('table') }}"
                    class="nav-link"
                >
                    <i class="fas fa-users-rectangle"></i>
                    <span>
                        Turmas
                    </span>
                </a>

                <a
                    href="{{ route('typography') }}"
                    class="nav-link"
                >
                    <i class="fas fa-user-graduate"></i>
                    <span>
                        Alunos
                    </span>
                </a>

                <a
                    href="{{ route('widget') }}"
                    class="nav-link"
                >
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
                    class="nav-link"
                >
                    <i class="far fa-calendar-alt"></i>
                    <span>
                        Eventos
                    </span>
                </a>

                <a
                    href="{{ route('chart') }}"
                    class="nav-link"
                >
                    <i class="far fa-bell"></i>
                    <span>
                        Notificações
                    </span>
                </a>

                <!-- PÁGINA ATUAL -->

                <a
                    href="{{ route('button') }}"
                    class="nav-link active"
                >
                    <i class="far fa-file-alt"></i>
                    <span>
                        Relatórios
                    </span>
                </a>

            </div>

            <!-- =====================================
                 PERFIL + LOGOUT
            ====================================== -->

            <div class="sidebar-footer">

                @php
                    if (Auth::check()) {

                        $nomeCompletoSife =
                            Auth::user()->nome
                            ?? Auth::user()->name
                            ?? 'Coordenador';

                        $nomesSife =
                            explode(
                                ' ',
                                trim($nomeCompletoSife)
                            );

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
                                $pLetraSife .
                                $sLetraSife
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

                    <!-- AVATAR -->

                    <div class="avatar-circle">
                        {{ $iniciaisSife }}
                    </div>

                    <!-- INFORMAÇÕES -->

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

                    <!-- LOGOUT -->

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

        <!-- =====================================
             CONTEÚDO
        ====================================== -->

        <main id="content">

            <!-- CABEÇALHO -->

            <header class="top-navbar">

                <div>

                    <h3 class="fw-bold m-0">
                        Relatórios Estratégicos
                    </h3>

                    <p class="text-muted m-0 small">
                        Gere e exporte dados detalhados da instituição
                    </p>

                </div>

            </header>

            <!-- =====================================
                 CARDS
            ====================================== -->

            <div class="row g-4 mb-4">

                <!-- FREQUÊNCIA -->

                <div class="col-md-4">

                    <div
                        class="card-custom report-type-card h-100"
                        id="relatorio-frequencia"
                    >

                        <div class="icon-shape bg-blue">
                            <i class="fas fa-clipboard-user"></i>
                        </div>

                        <h5 class="fw-bold">
                            Frequência Escolar
                        </h5>

                        <p class="text-muted small">
                            Taxas de presença por turma, aluno ou período letivo completo.
                        </p>

                        <button
                            type="button"
                            class="btn btn-outline-danger btn-sm w-100 rounded-3 mt-3 btn-pdf"
                            onclick="gerarPDF('frequencia')"
                        >
                            <i class="fas fa-file-pdf me-2"></i>
                            Gerar PDF
                        </button>

                    </div>

                </div>

                <!-- DESEMPENHO -->

                <div class="col-md-4">

                    <div
                        class="card-custom report-type-card h-100"
                        id="relatorio-desempenho"
                    >

                        <div class="icon-shape bg-green">
                            <i class="fas fa-chart-bar"></i>
                        </div>

                        <h5 class="fw-bold">
                            Desempenho Acadêmico
                        </h5>

                        <p class="text-muted small">
                            Análise de notas, médias e comparação entre disciplinas.
                        </p>

                        <button
                            type="button"
                            class="btn btn-outline-danger btn-sm w-100 rounded-3 mt-3 btn-pdf"
                            onclick="gerarPDF('desempenho')"
                        >
                            <i class="fas fa-file-pdf me-2"></i>
                            Gerar PDF
                        </button>

                    </div>

                </div>

                <!-- ALUNOS EM RISCO -->

                <div class="col-md-4">

                    <div
                        class="card-custom report-type-card h-100"
                        id="relatorio-risco"
                    >

                        <div class="icon-shape bg-purple">
                            <i class="fas fa-user-shield"></i>
                        </div>

                        <h5 class="fw-bold">
                            Alunos em Risco
                        </h5>

                        <p class="text-muted small">
                            Identificação antecipada de alunos com alta taxa de faltas ou notas baixas.
                        </p>

                        <button
                            type="button"
                            class="btn btn-outline-danger btn-sm w-100 rounded-3 mt-3 btn-pdf"
                            onclick="gerarPDF('risco')"
                        >
                            <i class="fas fa-file-pdf me-2"></i>
                            Gerar PDF
                        </button>

                    </div>

                </div>

            </div>

            <!-- =====================================
                 ARQUIVOS RECENTES
            ====================================== -->

            <div class="card-custom p-0 overflow-hidden">

                <div
                    class="bg-light p-3 border-bottom d-flex justify-content-between align-items-center"
                >

                    <h6 class="m-0 fw-bold">
                        Arquivos Gerados Recentemente
                    </h6>

                    <span class="badge bg-white text-dark border">
                        Últimos 7 dias
                    </span>

                </div>

                <div class="table-responsive">

                    <table class="table table-recent m-0">

                        <thead>

                            <tr class="small text-muted">

                                <th>
                                    NOME DO ARQUIVO
                                </th>

                                <th>
                                    DATA DE GERAÇÃO
                                </th>

                                <th>
                                    FORMATO
                                </th>

                                <th>
                                    TAMANHO
                                </th>

                                <th class="text-end">
                                    AÇÃO
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            <!-- PDF FREQUÊNCIA -->

                            <tr>

                                <td>

                                    <div class="d-flex align-items-center gap-2">

                                        <i class="far fa-file-pdf text-danger"></i>

                                        <span class="fw-bold small">
                                            frequencia_8anoB_maio_2026.pdf
                                        </span>

                                    </div>

                                </td>

                                <td class="small">
                                    12/05/2026 - 08:30
                                </td>

                                <td>

                                    <span class="file-badge pdf-badge">
                                        PDF
                                    </span>

                                </td>

                                <td class="small text-muted">
                                    1.2 MB
                                </td>

                                <td class="text-end">

                                    <button
                                        type="button"
                                        class="btn btn-light btn-sm rounded-circle download-btn"
                                        onclick="baixarPDFExistente('frequencia_8anoB_maio_2026.pdf')"
                                        title="Baixar PDF"
                                    >
                                        <i class="fas fa-download"></i>
                                    </button>

                                </td>

                            </tr>

                            <!-- EXCEL -->

                            <tr>

                                <td>

                                    <div class="d-flex align-items-center gap-2">

                                        <i class="far fa-file-excel text-success"></i>

                                        <span class="fw-bold small">
                                            lista_alunos_ativos_geral.xlsx
                                        </span>

                                    </div>

                                </td>

                                <td class="small">
                                    10/05/2026 - 15:45
                                </td>

                                <td>

                                    <span class="file-badge xls-badge">
                                        XLSX
                                    </span>

                                </td>

                                <td class="small text-muted">
                                    840 KB
                                </td>

                                <td class="text-end">

                                    <a
                                        href="{{ asset('storage/relatorios/lista_alunos_ativos_geral.xlsx') }}"
                                        class="btn btn-light btn-sm rounded-circle download-btn"
                                        download
                                        title="Baixar Excel"
                                    >
                                        <i class="fas fa-download"></i>
                                    </a>

                                </td>

                            </tr>

                            <!-- PDF ALUNOS EM RISCO -->

                            <tr>

                                <td>

                                    <div class="d-flex align-items-center gap-2">

                                        <i class="far fa-file-pdf text-danger"></i>

                                        <span class="fw-bold small">
                                            relatorio_evasao_risco_T1.pdf
                                        </span>

                                    </div>

                                </td>

                                <td class="small">
                                    08/05/2026 - 10:20
                                </td>

                                <td>

                                    <span class="file-badge pdf-badge">
                                        PDF
                                    </span>

                                </td>

                                <td class="small text-muted">
                                    2.4 MB
                                </td>

                                <td class="text-end">

                                    <button
                                        type="button"
                                        class="btn btn-light btn-sm rounded-circle download-btn"
                                        onclick="baixarPDFExistente('relatorio_evasao_risco_T1.pdf')"
                                        title="Baixar PDF"
                                    >
                                        <i class="fas fa-download"></i>
                                    </button>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

                <div class="p-3 text-center border-top">

                    <a
                        href="#"
                        class="text-decoration-none small fw-bold text-danger"
                    >
                        Ver histórico completo
                    </a>

                </div>

            </div>

        </main>

    </div>

    <!-- =====================================
         ACESSIBILIDADE
    ====================================== -->

    <x-acessibilidade />

    <!-- =====================================
         VLIBRAS
    ====================================== -->

    <div vw class="enabled">

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

    <!-- =====================================
         HTML2PDF
    ====================================== -->

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
    ></script>

    <!-- =====================================
         BOOTSTRAP
    ====================================== -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    ></script>

    <!-- =====================================
         MENU SANDUÍCHE MOBILE
    ====================================== -->

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

    <!-- =====================================
         GERAR PDF
    ====================================== -->

    <script>

        function gerarPDF(tipo) {

            let elemento;
            let nomeArquivo;

            if (tipo === 'frequencia') {

                elemento =
                    document.getElementById(
                        'relatorio-frequencia'
                    );

                nomeArquivo =
                    'relatorio_frequencia.pdf';

            }

            else if (tipo === 'desempenho') {

                elemento =
                    document.getElementById(
                        'relatorio-desempenho'
                    );

                nomeArquivo =
                    'relatorio_desempenho_academico.pdf';

            }

            else if (tipo === 'risco') {

                elemento =
                    document.getElementById(
                        'relatorio-risco'
                    );

                nomeArquivo =
                    'relatorio_alunos_em_risco.pdf';

            }

            if (!elemento) {

                alert(
                    'Não foi possível encontrar o relatório.'
                );

                return;
            }

            const botao =
                elemento.querySelector('.btn-pdf');

            if (botao) {
                botao.style.display = 'none';
            }

            const opcoes = {

                margin: 10,

                filename: nomeArquivo,

                image: {
                    type: 'jpeg',
                    quality: 0.98
                },

                html2canvas: {
                    scale: 2,
                    useCORS: true,
                    backgroundColor: '#ffffff'
                },

                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait'
                }

            };

            html2pdf()
                .set(opcoes)
                .from(elemento)
                .save()

                .then(function () {

                    if (botao) {
                        botao.style.display = '';
                    }

                })

                .catch(function (erro) {

                    console.error(
                        'Erro ao gerar PDF:',
                        erro
                    );

                    if (botao) {
                        botao.style.display = '';
                    }

                    alert(
                        'Não foi possível gerar o PDF.'
                    );

                });

        }

        /* =====================================
           DOWNLOAD DE PDF EXISTENTE
        ====================================== */

        function baixarPDFExistente(nomeArquivo) {

            const caminho =
                "{{ asset('storage/relatorios') }}/" +
                nomeArquivo;

            fetch(caminho, {
                method: 'HEAD'
            })

            .then(function (response) {

                if (response.ok) {

                    const link =
                        document.createElement('a');

                    link.href = caminho;
                    link.target = '_blank';
                    link.download = nomeArquivo;

                    document.body.appendChild(link);

                    link.click();

                    document.body.removeChild(link);

                    return;
                }

                gerarPDFTemporario(nomeArquivo);

            })

            .catch(function () {

                gerarPDFTemporario(nomeArquivo);

            });

        }

        /* =====================================
           GERAR PDF TEMPORÁRIO
        ====================================== */

        function gerarPDFTemporario(nomeArquivo) {

            const conteudo =
                document.createElement('div');

            conteudo.style.width = '100%';
            conteudo.style.padding = '30px';
            conteudo.style.background = '#ffffff';
            conteudo.style.fontFamily =
                'Arial, sans-serif';
            conteudo.style.color =
                '#333333';

            conteudo.innerHTML = `

                <div style="
                    text-align: center;
                    border-bottom: 2px solid #d32f2f;
                    padding-bottom: 15px;
                    margin-bottom: 25px;
                ">

                    <h1 style="
                        color: #d32f2f;
                        margin: 0;
                        font-size: 28px;
                    ">
                        SIFE
                    </h1>

                    <p style="
                        margin: 5px 0 0;
                        color: #666;
                        font-size: 13px;
                    ">
                        Sistema Integrado de Frequência Escolar
                    </p>

                </div>

                <h2 style="
                    font-size: 20px;
                    margin-bottom: 20px;
                ">
                    ${nomeArquivo
                        .replace('.pdf', '')
                        .replaceAll('_', ' ')}
                </h2>

                <p style="
                    font-size: 13px;
                    color: #555;
                ">
                    Este arquivo foi gerado automaticamente
                    pelo sistema SIFE.
                </p>

                <table style="
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 25px;
                ">

                    <thead>

                        <tr>

                            <th style="
                                background: #d32f2f;
                                color: white;
                                padding: 10px;
                                text-align: left;
                            ">
                                Informação
                            </th>

                            <th style="
                                background: #d32f2f;
                                color: white;
                                padding: 10px;
                                text-align: left;
                            ">
                                Valor
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td style="
                                border: 1px solid #ddd;
                                padding: 10px;
                            ">
                                Arquivo
                            </td>

                            <td style="
                                border: 1px solid #ddd;
                                padding: 10px;
                            ">
                                ${nomeArquivo}
                            </td>

                        </tr>

                        <tr>

                            <td style="
                                border: 1px solid #ddd;
                                padding: 10px;
                            ">
                                Data de geração
                            </td>

                            <td style="
                                border: 1px solid #ddd;
                                padding: 10px;
                            ">
                                ${new Date().toLocaleString('pt-BR')}
                            </td>

                        </tr>

                        <tr>

                            <td style="
                                border: 1px solid #ddd;
                                padding: 10px;
                            ">
                                Situação
                            </td>

                            <td style="
                                border: 1px solid #ddd;
                                padding: 10px;
                            ">
                                Arquivo temporário
                            </td>

                        </tr>

                    </tbody>

                </table>

                <div style="
                    margin-top: 40px;
                    text-align: center;
                    color: #777;
                    font-size: 11px;
                ">
                    SIFE - Sistema Integrado de Frequência Escolar
                </div>

            `;

            document.body.appendChild(conteudo);

            const opcoes = {

                margin: 10,

                filename: nomeArquivo,

                image: {
                    type: 'jpeg',
                    quality: 0.98
                },

                html2canvas: {
                    scale: 2,
                    useCORS: true,
                    backgroundColor: '#ffffff'
                },

                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait'
                }

            };

            html2pdf()
                .set(opcoes)
                .from(conteudo)
                .save()

                .then(function () {

                    document.body.removeChild(
                        conteudo
                    );

                })

                .catch(function (erro) {

                    console.error(
                        'Erro ao gerar PDF temporário:',
                        erro
                    );

                    document.body.removeChild(
                        conteudo
                    );

                    alert(
                        'Não foi possível gerar o PDF.'
                    );

                });

        }

    </script>

</body>

</html>