<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Relatório da Turma | SIFE</title>

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
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>

        :root {
            --primary-red: #d32f2f;
            --primary-red-hover: #b71c1c;
            --primary-red-soft: #fff5f5;
            --bg-body: #f4f7f9;
            --text-main: #2d3436;
            --text-muted: #a0aec0;
            --border-color: #edf2f7;
            --sidebar-width: 280px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg-body);
            color: var(--text-main);
        }

        .wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* =========================
           SIDEBAR
        ========================= */

        #sidebar {
            width: var(--sidebar-width);
            min-width: var(--sidebar-width);
            background: #fff;
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
        }

        .menu-category {
            font-size: .7rem;
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
            transition: .3s;
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
        }

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
            flex-shrink: 0;
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
            font-size: 1.8rem;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 5px;
        }

        .page-subtitle {
            color: #94a3b8;
            font-size: .9rem;
        }

        .btn-voltar {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #718096;
            font-size: .85rem;
            font-weight: 700;
            margin-bottom: 20px;
            transition: .2s;
        }

        .btn-voltar:hover {
            color: var(--primary-red);
        }

        /* =========================
           CABEÇALHO DO RELATÓRIO
        ========================= */

        .report-header {
            background: white;
            border-radius: 25px;
            padding: 28px 32px;
            border: 1px solid var(--border-color);
            box-shadow: 0 10px 30px rgba(0,0,0,.025);
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .report-title-area {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .report-icon {
            width: 62px;
            height: 62px;
            background: var(--primary-red-soft);
            color: var(--primary-red);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
        }

        .report-title-area h2 {
            font-size: 1.35rem;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .report-title-area p {
            margin: 0;
            color: #94a3b8;
            font-size: .85rem;
        }

        .btn-imprimir {
            border: none;
            background: var(--primary-red);
            color: white;
            padding: 12px 18px;
            border-radius: 12px;
            font-weight: 700;
            font-size: .8rem;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            transition: .2s;
        }

        .btn-imprimir:hover {
            background: var(--primary-red-hover);
            transform: translateY(-2px);
        }

        /* =========================
           CARDS DE INDICADORES
        ========================= */

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 25px;
        }

        .stat-card {
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 22px;
            padding: 22px;
            box-shadow: 0 8px 25px rgba(15,42,70,.025);
        }

        .stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .stat-icon {
            width: 42px;
            height: 42px;
            border-radius: 13px;
            background: var(--primary-red-soft);
            color: var(--primary-red);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .stat-label {
            color: #9aaabd;
            font-size: .7rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .stat-value {
            font-size: 1.65rem;
            font-weight: 800;
            color: #1a202c;
        }

        .stat-description {
            color: #94a3b8;
            font-size: .72rem;
            margin-top: 3px;
        }

        /* =========================
           CONTEÚDO EM DUAS COLUNAS
        ========================= */

        .content-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 22px;
            margin-bottom: 25px;
        }

        .panel {
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 24px;
            padding: 25px;
            box-shadow: 0 8px 25px rgba(15,42,70,.025);
        }

        .panel-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
        }

        .panel-title h3 {
            font-size: 1rem;
            font-weight: 800;
            margin: 0;
        }

        .panel-title span {
            color: #a0aec0;
            font-size: .72rem;
            font-weight: 600;
        }

        /* =========================
           BARRA DE FREQUÊNCIA
        ========================= */

        .frequency-item {
            margin-bottom: 20px;
        }

        .frequency-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .frequency-name {
            font-size: .8rem;
            font-weight: 700;
            color: #344054;
        }

        .frequency-value {
            font-size: .8rem;
            font-weight: 800;
            color: var(--primary-red);
        }

        .frequency-bar {
            height: 9px;
            background: #edf2f7;
            border-radius: 20px;
            overflow: hidden;
        }

        .frequency-progress {
            height: 100%;
            background: var(--primary-red);
            border-radius: 20px;
        }

        /* =========================
           RESUMO
        ========================= */

        .summary-list {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .summary-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 16px;
            border-radius: 15px;
            background: #f8fafc;
        }

        .summary-left {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .summary-icon {
            width: 35px;
            height: 35px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--primary-red-soft);
            color: var(--primary-red);
            font-size: .85rem;
        }

        .summary-name {
            font-size: .78rem;
            font-weight: 700;
            color: #475569;
        }

        .summary-value {
            font-size: .82rem;
            font-weight: 800;
            color: #1e293b;
        }

        /* =========================
           TABELA
        ========================= */

        .table-panel {
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 24px;
            padding: 25px;
            box-shadow: 0 8px 25px rgba(15,42,70,.025);
        }

        .table-responsive {
            border-radius: 15px;
            overflow: hidden;
        }

        .table {
            margin: 0;
        }

        .table thead th {
            background: #f8fafc;
            color: #8a9aad;
            border: none;
            padding: 15px;
            font-size: .68rem;
            text-transform: uppercase;
            letter-spacing: .6px;
            font-weight: 800;
        }

        .table tbody td {
            padding: 15px;
            border-color: #f0f3f6;
            vertical-align: middle;
            font-size: .78rem;
            color: #475569;
            font-weight: 500;
        }

        .student {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .student-avatar {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: var(--primary-red-soft);
            color: var(--primary-red);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .7rem;
            font-weight: 800;
        }

        .student-name {
            font-weight: 700;
            color: #334155;
        }

        .badge-status {
            display: inline-flex;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: .65rem;
            font-weight: 800;
        }

        .status-good {
            background: #eaf8ef;
            color: #218653;
        }

        .status-warning {
            background: #fff6dc;
            color: #c98a00;
        }

        .status-danger {
            background: #fff0f0;
            color: #d32f2f;
        }

        /* =========================
           RODAPÉ
        ========================= */

        .report-footer {
            margin-top: 25px;
            text-align: center;
            color: #a0aec0;
            font-size: .7rem;
        }

        /* =========================
           RESPONSIVO
        ========================= */

        @media (max-width: 1100px) {

            #sidebar {
                width: 220px;
                min-width: 220px;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .content-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 750px) {

            .wrapper {
                flex-direction: column;
            }

            #sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            #content {
                padding: 25px 18px;
            }

            .report-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .table-responsive {
                overflow-x: auto;
            }
        }

        /* =========================
           IMPRESSÃO
        ========================= */

        @media print {

            #sidebar,
            .btn-voltar,
            .btn-imprimir {
                display: none !important;
            }

            #content {
                padding: 20px;
            }

            body {
                background: white;
            }

            .panel,
            .stat-card,
            .report-header,
            .table-panel {
                box-shadow: none;
            }
        }

    </style>

</head>

<body>

<div class="wrapper">

    <!-- =========================
         SIDEBAR
    ========================= -->

    <nav id="sidebar">

        <div class="sidebar-brand">

            <div class="brand-icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>

            <span class="brand-name">
                SIFE
            </span>

        </div>

        <div class="nav-menu">

            <div class="menu-category">
                Gestão
            </div>

            <a href="{{ route('painel-professor') }}" class="nav-link">
                <i class="fas fa-th-large"></i>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('turmasProfessor') }}" class="nav-link active">
                <i class="fas fa-users"></i>
                <span>Minhas Turmas</span>
            </a>

            <a href="{{ route('notas-professor') }}" class="nav-link">
                <i class="fas fa-edit"></i>
                <span>Lançar Notas</span>
            </a>

            <a href="{{ route('frequencia-professor') }}" class="nav-link">
                <i class="fas fa-calendar-check"></i>
                <span>Frequência</span>
            </a>

            <div class="menu-category">
                Conteúdo
            </div>

            <a href="#" class="nav-link">
                <i class="fas fa-file-upload"></i>
                <span>Materiais</span>
            </a>

            <a href="{{ route('comunicados-professor') }}" class="nav-link">
                <i class="fas fa-bullhorn"></i>
                <span>Comunicados</span>
            </a>

        </div>

        <!-- RODAPÉ -->

        <div class="sidebar-footer">

            <a href="{{ route('profile') }}"
               class="user-profile-item mb-2">

                <div class="avatar-circle">

                    @if(Auth::check())

                        @php
                            $nomes = explode(' ', Auth::user()->nome);
                            $primeiraLetra = mb_substr($nomes[0] ?? 'P', 0, 1);
                            $segundaLetra = isset($nomes[1])
                                ? mb_substr($nomes[1], 0, 1)
                                : '';

                            echo strtoupper(
                                $primeiraLetra . $segundaLetra
                            );
                        @endphp

                    @else
                        PR
                    @endif

                </div>

                <div class="overflow-hidden">

                    <p class="m-0 small fw-bold text-dark text-truncate">
                        {{ Auth::check() ? Auth::user()->nome : 'Professor' }}
                    </p>

                    <p class="m-0 text-muted"
                       style="font-size: 11px;">

                        {{ Auth::check() ? Auth::user()->email : 'Professor' }}

                    </p>

                </div>

            </a>

            <a href="#"
               class="btn btn-sm btn-outline-danger w-100 d-flex align-items-center justify-content-center gap-2"
               style="border-radius: 12px; font-weight: 600;"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                <i class="fas fa-sign-out-alt"></i>

                <span>Sair da Conta</span>

            </a>

            <form id="logout-form"
                  action="{{ route('logout') }}"
                  method="POST"
                  class="d-none">

                @csrf

            </form>

        </div>

    </nav>


    <!-- =========================
         CONTEÚDO
    ========================= -->

    <main id="content">

        <div class="page-header">

            <a href="{{ route('turmasProfessor') }}"
               class="btn-voltar">

                <i class="fas fa-arrow-left"></i>

                Voltar para minhas turmas

            </a>

            <h1 class="page-title">
                Relatório Escolar
            </h1>

            <p class="page-subtitle">
                Acompanhe os principais indicadores de desempenho e frequência da turma.
            </p>

        </div>


        <!-- =========================
             CABEÇALHO RELATÓRIO
        ========================= -->

        <div class="report-header">

            <div class="report-title-area">

                <div class="report-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>

                <div>

                    <h2>
                        {{ $turma->nome_turma ?? 'Turma' }}
                    </h2>

                    <p>
                        {{ $turma->serie ?? 'Série não informada' }}
                        •
                        Relatório de acompanhamento escolar
                    </p>

                </div>

            </div>

            <button
                class="btn-imprimir"
                onclick="window.print()">

                <i class="fas fa-print"></i>

                Imprimir relatório

            </button>

        </div>


        <!-- =========================
             INDICADORES
        ========================= -->

        <div class="stats-grid">

            <div class="stat-card">

                <div class="stat-top">

                    <div class="stat-label">
                        Total de alunos
                    </div>

                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>

                </div>

                <div class="stat-value">
                    {{ $turma->total_alunos ?? 0 }}
                </div>

                <div class="stat-description">
                    Alunos matriculados na turma
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-top">

                    <div class="stat-label">
                        Frequência média
                    </div>

                    <div class="stat-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>

                </div>

                <div class="stat-value">
                    {{ $turma->progresso ?? 0 }}%
                </div>

                <div class="stat-description">
                    Presença média da turma
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-top">

                    <div class="stat-label">
                        Presentes
                    </div>

                    <div class="stat-icon">
                        <i class="fas fa-user-check"></i>
                    </div>

                </div>

                <div class="stat-value">
                    {{ $presentes ?? 0 }}
                </div>

                <div class="stat-description">
                    Registros de presença
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-top">

                    <div class="stat-label">
                        Faltas
                    </div>

                    <div class="stat-icon">
                        <i class="fas fa-user-xmark"></i>
                    </div>

                </div>

                <div class="stat-value">
                    {{ $faltas ?? 0 }}
                </div>

                <div class="stat-description">
                    Registros de ausência
                </div>

            </div>

        </div>


        <!-- =========================
             GRÁFICOS / RESUMO
        ========================= -->

        <div class="content-grid">

            <!-- FREQUÊNCIA -->

            <div class="panel">

                <div class="panel-title">

                    <h3>
                        Frequência dos alunos
                    </h3>

                    <span>
                        Percentual de presença
                    </span>

                </div>


                @forelse($alunos ?? [] as $aluno)

                    @php

                        $frequencia = $aluno->frequencia ?? 0;

                    @endphp

                    <div class="frequency-item">

                        <div class="frequency-header">

                            <span class="frequency-name">
                                {{ $aluno->nome ?? 'Aluno' }}
                            </span>

                            <span class="frequency-value">
                                {{ $frequencia }}%
                            </span>

                        </div>

                        <div class="frequency-bar">

                            <div
                                class="frequency-progress"
                                style="width: {{ min(100, max(0, $frequencia)) }}%;">
                            </div>

                        </div>

                    </div>

                @empty

                    <div class="text-center py-4">

                        <i
                            class="fas fa-chart-line mb-3"
                            style="font-size: 35px; color: #d8e0e8;">
                        </i>

                        <p class="text-muted small mb-0">
                            Nenhum dado de frequência disponível.
                        </p>

                    </div>

                @endforelse

            </div>


            <!-- RESUMO -->

            <div class="panel">

                <div class="panel-title">

                    <h3>
                        Resumo da turma
                    </h3>

                    <span>
                        Visão geral
                    </span>

                </div>

                <div class="summary-list">

                    <div class="summary-item">

                        <div class="summary-left">

                            <div class="summary-icon">
                                <i class="fas fa-users"></i>
                            </div>

                            <span class="summary-name">
                                Alunos matriculados
                            </span>

                        </div>

                        <span class="summary-value">
                            {{ $turma->total_alunos ?? 0 }}
                        </span>

                    </div>


                    <div class="summary-item">

                        <div class="summary-left">

                            <div class="summary-icon">
                                <i class="fas fa-user-check"></i>
                            </div>

                            <span class="summary-name">
                                Frequência média
                            </span>

                        </div>

                        <span class="summary-value">
                            {{ $turma->progresso ?? 0 }}%
                        </span>

                    </div>


                    <div class="summary-item">

                        <div class="summary-left">

                            <div class="summary-icon">
                                <i class="fas fa-user-clock"></i>
                            </div>

                            <span class="summary-name">
                                Alunos com atenção
                            </span>

                        </div>

                        <span class="summary-value">
                            {{ $alunosAtencao ?? 0 }}
                        </span>

                    </div>


                    <div class="summary-item">

                        <div class="summary-left">

                            <div class="summary-icon">
                                <i class="fas fa-calendar-days"></i>
                            </div>

                            <span class="summary-name">
                                Período
                            </span>

                        </div>

                        <span class="summary-value">
                            {{ date('Y') }}
                        </span>

                    </div>

                </div>

            </div>

        </div>


        <!-- =========================
             TABELA DE ALUNOS
        ========================= -->

        <div class="table-panel">

            <div class="panel-title">

                <h3>
                    Desempenho dos alunos
                </h3>

                <span>
                    Relatório individual
                </span>

            </div>

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>

                        <tr>

                            <th>
                                Aluno
                            </th>

                            <th>
                                Frequência
                            </th>

                            <th>
                                Presenças
                            </th>

                            <th>
                                Faltas
                            </th>

                            <th>
                                Situação
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($alunos ?? [] as $aluno)

                            @php

                                $frequencia =
                                    $aluno->frequencia ?? 0;

                                if ($frequencia >= 75) {
                                    $status = 'Regular';
                                    $classe = 'status-good';
                                } elseif ($frequencia >= 60) {
                                    $status = 'Atenção';
                                    $classe = 'status-warning';
                                } else {
                                    $status = 'Baixa frequência';
                                    $classe = 'status-danger';
                                }

                            @endphp

                            <tr>

                                <td>

                                    <div class="student">

                                        <div class="student-avatar">

                                            {{ strtoupper(
                                                mb_substr(
                                                    $aluno->nome ?? 'A',
                                                    0,
                                                    1
                                                )
                                            ) }}

                                        </div>

                                        <span class="student-name">
                                            {{ $aluno->nome ?? 'Aluno' }}
                                        </span>

                                    </div>

                                </td>

                                <td>

                                    <strong>
                                        {{ $frequencia }}%
                                    </strong>

                                </td>

                                <td>
                                    {{ $aluno->presencas ?? 0 }}
                                </td>

                                <td>
                                    {{ $aluno->faltas ?? 0 }}
                                </td>

                                <td>

                                    <span class="badge-status {{ $classe }}">
                                        {{ $status }}
                                    </span>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="5"
                                    class="text-center py-5">

                                    <i
                                        class="fas fa-users-slash mb-3"
                                        style="font-size: 30px; color: #d8e0e8;">
                                    </i>

                                    <p class="text-muted mb-0">
                                        Nenhum aluno encontrado.
                                    </p>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


        <!-- =========================
             RODAPÉ
        ========================= -->

        <div class="report-footer">

            <i class="fas fa-shield-halved"></i>

            Relatório gerado pelo SIFE —
            Sistema Inteligente de Frequência Escolar

        </div>

    </main>

</div>


<!-- ACESSIBILIDADE -->

<x-acessibilidade />


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
```
