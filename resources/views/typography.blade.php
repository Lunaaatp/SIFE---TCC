<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>SIFE - Gestão de Alunos</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    >

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
            --text-muted: #a0aec0;

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

        .table-custom thead th {

            background: #f8fafc;
            border: none;
            color: #64748b;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 15px;

        }

        .table-custom tbody td {

            padding: 15px;
            vertical-align: middle;
            border-color: var(--border-color);

        }

        .student-profile {

            display: flex;
            align-items: center;
            gap: 12px;

        }

        .student-profile img {

            width: 40px;
            height: 40px;
            border-radius: 10px;
            object-fit: cover;

        }

        .badge-status {

            padding: 6px 12px;
            border-radius: 8px;
            font-size: 0.75rem;
            font-weight: 600;

        }

        .bg-success-soft {

            background: #e6fcf5;
            color: #0ca678;

        }

        .bg-danger-soft {

            background: #fff5f5;
            color: #fa5252;

        }

        .btn-action {

            width: 35px;
            height: 35px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #edf2f7;
            color: #718096;
            background: white;
            transition: 0.2s;
            text-decoration: none;
            cursor: pointer;

        }

        .btn-action:hover {

            background: var(--primary-red);
            color: white;
            border-color: var(--primary-red);

        }

        .acoes-aluno {

            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 8px;
            flex-wrap: nowrap;
            white-space: nowrap;

        }

        .acoes-aluno .btn-action {

            flex-shrink: 0;

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
            color: var(--text-muted);
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

            .top-navbar > a.btn {

                width: 100%;
                justify-content: center;

            }

        }

    </style>

</head>

<body>

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
                class="nav-link active"
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
                class="nav-link"
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


        <div class="sidebar-footer">

            @php

                if (Auth::check()) {

                    $nomeCompleto =
                        Auth::user()->nome
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
                        $nomeCompleto;

                    $emailSife =
                        Auth::user()->email
                        ?? 'coordenacao@sife.com';

                } else {

                    $iniciaisSife = 'CC';
                    $nomeSife = 'Coordenador';
                    $emailSife =
                        'coordenacao@sife.com';

                }

            @endphp


            <div class="user-profile-item">

                <div class="avatar-circle">

                    {{ $iniciaisSife }}

                </div>

                <div
                    class="overflow-hidden flex-grow-1"
                >

                    <p
                        class="m-0 small fw-bold text-dark text-truncate"
                    >

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

                        <i
                            class="fas fa-right-from-bracket"
                        ></i>

                    </button>

                </form>

            </div>

        </div>

    </nav>


    <main id="content">

        <header class="top-navbar">

            <div>

                <h3 class="fw-bold m-0">
                    Gestão de Alunos
                </h3>

                <p class="text-muted m-0 small">
                    Visualização e edição de registros estudantis
                </p>

            </div>

            <a
                href="{{ route('alunos.criar') }}"
                class="btn btn-danger px-4 py-2 rounded-3 shadow fw-bold d-flex align-items-center"
            >

                <i class="fas fa-plus me-2"></i>

                Novo Aluno

            </a>

        </header>


        @if (session('sucesso'))

            <div
                class="alert alert-success border-0 rounded-4 shadow-sm mb-4 d-flex align-items-center gap-2"
            >

                <i class="fas fa-check-circle fs-5"></i>

                <span>
                    {{ session('sucesso') }}
                </span>

            </div>

        @endif


        @if ($errors->has('erro'))

            <div
                class="alert alert-danger border-0 rounded-4 shadow-sm mb-4 d-flex align-items-center gap-2"
            >

                <i class="fas fa-exclamation-triangle fs-5"></i>

                <span>
                    {{ $errors->first('erro') }}
                </span>

            </div>

        @endif


        <div class="row g-3 mb-4">

            <div class="col-md-4">

                <div class="card-custom text-center">

                    <span
                        class="small fw-bold text-muted text-uppercase"
                    >
                        Total Matriculados
                    </span>

                    <h2 class="fw-bold mt-2 mb-0">

                        {{
                            is_object($alunos)
                            && method_exists($alunos, 'total')
                            ? $alunos->total()
                            : count($alunos ?? [])
                        }}

                    </h2>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card-custom text-center">

                    <span
                        class="small fw-bold text-muted text-uppercase"
                    >
                        Novos (Este Mês)
                    </span>

                    <h2
                        class="fw-bold mt-2 mb-0 text-success"
                    >
                        +{{ $novosAlunos ?? 0 }}
                    </h2>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card-custom text-center">

                    <span
                        class="small fw-bold text-muted text-uppercase"
                    >
                        Aguardando Documentos
                    </span>

                    <h2
                        class="fw-bold mt-2 mb-0 text-warning"
                    >
                        {{ $aguardandoDocumentos ?? 0 }}
                    </h2>

                </div>

            </div>

        </div>


        <div class="card-custom">

            <form
                method="GET"
                action="{{ route('typography') }}"
            >

                <div class="row g-3">

                    <div class="col-md-5">

                        <div class="input-group">

                            <span
                                class="input-group-text bg-light border-0"
                            >

                                <i
                                    class="fas fa-search text-muted"
                                ></i>

                            </span>

                            <input
                                type="text"
                                name="busca"
                                class="form-control border-0 bg-light"
                                placeholder="Buscar por nome, matrícula ou CPF..."
                                value="{{ request('busca') }}"
                            >

                        </div>

                    </div>


                    <div class="col-md-3">

                        <select
                            name="turma"
                            class="form-select border-0 bg-light"
                            onchange="this.form.submit()"
                        >

                            <option value="">
                                Todas as Turmas
                            </option>

                            @foreach(
                                $todasTurmas ?? []
                                as $t
                            )

                                @php

                                    $turmaId =
                                        $t->id_turma
                                        ?? $t->id;

                                    $turmaNome =
                                        $t->nome_turma
                                        ?? $t->nome;

                                @endphp

                                <option
                                    value="{{ $turmaId }}"
                                    {{
                                        request('turma') ==
                                        $turmaId
                                        ? 'selected'
                                        : ''
                                    }}
                                >

                                    {{ $turmaNome }}

                                </option>

                            @endforeach

                        </select>

                    </div>


                    <div class="col-md-2">

                        <select
                            name="status"
                            class="form-select border-0 bg-light"
                            onchange="this.form.submit()"
                        >

                            <option value="">
                                Status
                            </option>

                            <option
                                value="Ativo"
                                {{
                                    request('status') == 'Ativo'
                                    ? 'selected'
                                    : ''
                                }}
                            >
                                Ativo
                            </option>

                            <option
                                value="Inativo"
                                {{
                                    request('status') == 'Inativo'
                                    ? 'selected'
                                    : ''
                                }}
                            >
                                Inativo
                            </option>

                        </select>

                    </div>


                    <div class="col-md-2">

                        <button
                            type="submit"
                            class="btn btn-light w-100 border text-muted fw-bold"
                        >

                            <i
                                class="fas fa-filter me-1"
                            ></i>

                            Filtrar

                        </button>

                    </div>

                </div>

            </form>

        </div>


        <div class="card-custom p-0 overflow-hidden">

            <div class="table-responsive">

                <table
                    class="table table-custom m-0"
                >

                    <thead>

                        <tr>

                            <th>
                                Aluno
                            </th>

                            <th>
                                Matrícula
                            </th>

                            <th>
                                Turma
                            </th>

                            <th>
                                E-mail Responsável
                            </th>

                            <th>
                                Status
                            </th>

                            <th class="text-end">
                                Ações
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse(
                            $alunos ?? []
                            as $aluno
                        )

                            @php

                                $alunoObj =
                                    is_array($aluno)
                                    ? (object) $aluno
                                    : $aluno;

                                $nomeAluno =
                                    $alunoObj->nome
                                    ?? 'Estudante sem Nome';

                                $idAluno =
                                    $alunoObj->id_aluno
                                    ?? $alunoObj->id
                                    ?? 0;

                            @endphp


                            <tr>

                                <td>

                                    <div class="student-profile">

                                        <img
                                            src="https://ui-avatars.com/api/?name={{ urlencode($nomeAluno) }}&background=E3F2FD&color=1565C0"
                                            alt="Avatar de {{ $nomeAluno }}"
                                        >

                                        <div>

                                            <p class="m-0 fw-bold">
                                                {{ $nomeAluno }}
                                            </p>

                                            <small class="text-muted">

                                            
                                                    CPF: {{ $aluno->cpf ?? 'Não informado' }}

                                            </small>

                                        </div>

                                    </div>

                                </td>


                                <td
                                    class="text-muted fw-medium"
                                >

                                    {{ $idAluno }}

                                </td>


                                <td>

                                    <span
                                        class="badge bg-light text-dark fw-normal border"
                                    >

                                        {{
                                            $alunoObj->turma_nome
                                            ?? (
                                                $alunoObj->turma->nome_turma
                                                ?? 'Sem Turma'
                                            )
                                        }}

                                    </span>

                                </td>


                                <td class="small">

                                    {{
                                        $alunoObj->email_responsavel
                                        ?? 'Não informado'
                                    }}

                                </td>


                                <td>

                                    <span
                                        class="badge-status bg-success-soft"
                                    >

                                        {{
                                            $alunoObj->status
                                            ?? 'Ativo'
                                        }}

                                    </span>

                                </td>


                                <!-- =========================
                                     AÇÕES
                                ========================== -->

                                <td class="text-end">

                                    <div class="acoes-aluno">

                                        <!-- VISUALIZAR -->

                                        <button
                                            type="button"
                                            class="btn-action"
                                            title="Ver Perfil"
                                            onclick="visualizarAluno({{ $idAluno }})"
                                        >

                                            <i
                                                class="fas fa-eye"
                                            ></i>

                                        </button>


                                        <!-- EDITAR -->

                                        <button
                                            type="button"
                                            class="btn-action"
                                            title="Editar"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalEditarAluno{{ $idAluno }}"
                                        >

                                            <i
                                                class="fas fa-pen"
                                            ></i>

                                        </button>

                                    </div>

                                </td>

                            </tr>


                            <!-- =========================
                                 MODAL EDITAR
                            ========================== -->

                            <div
                                class="modal fade"
                                id="modalEditarAluno{{ $idAluno }}"
                                tabindex="-1"
                                aria-hidden="true"
                            >

                                <div
                                    class="modal-dialog modal-dialog-centered"
                                >

                                    <div
                                        class="modal-content border-0 rounded-4 shadow"
                                    >

                                        <form
                                            action="{{
                                                route(
                                                    'alunos.atualizar',
                                                    $idAluno
                                                )
                                            }}"
                                            method="POST"
                                        >

                                            @csrf

                                            @method('PUT')


                                            <div class="modal-header">

                                                <h5
                                                    class="modal-title fw-bold"
                                                >

                                                    <i
                                                        class="fas fa-pen text-danger me-2"
                                                    ></i>

                                                    Editar Aluno

                                                </h5>

                                                <button
                                                    type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                ></button>

                                            </div>


                                            <div class="modal-body">

                                                <div class="mb-3">

                                                    <label
                                                        class="form-label fw-semibold"
                                                    >
                                                        Nome do aluno
                                                    </label>

                                                    <input
                                                        type="text"
                                                        name="nome"
                                                        class="form-control"
                                                        value="{{ $nomeAluno }}"
                                                        required
                                                    >

                                                </div>


                                                <div class="mb-3">

                                                    <label
                                                        class="form-label fw-semibold"
                                                    >
                                                        E-mail do responsável
                                                    </label>

                                                    <input
                                                        type="email"
                                                        name="email_responsavel"
                                                        class="form-control"
                                                        value="{{
                                                            $alunoObj->email_responsavel
                                                            ?? ''
                                                        }}"
                                                        required
                                                    >

                                                </div>


                                                <div class="mb-3">

                                                    <label
                                                        class="form-label fw-semibold"
                                                    >
                                                        Data de nascimento
                                                    </label>

                                                    <input
                                                        type="date"
                                                        name="data_nascimento"
                                                        class="form-control"
                                                        value="{{
                                                            $alunoObj->data_nascimento
                                                            ?? ''
                                                        }}"
                                                        required
                                                    >

                                                </div>


                                                <div class="mb-3">

                                                    <label
                                                        class="form-label fw-semibold"
                                                    >
                                                        Turma
                                                    </label>

                                                    <select
                                                        name="id_turma"
                                                        class="form-select"
                                                        required
                                                    >

                                                        @foreach(
                                                            $todasTurmas ?? []
                                                            as $t
                                                        )

                                                            @php

                                                                $turmaId =
                                                                    $t->id_turma
                                                                    ?? $t->id;

                                                                $turmaNome =
                                                                    $t->nome_turma
                                                                    ?? $t->nome;

                                                            @endphp

                                                            <option
                                                                value="{{ $turmaId }}"
                                                                {{
                                                                    ($alunoObj->id_turma ?? '') ==
                                                                    $turmaId
                                                                    ? 'selected'
                                                                    : ''
                                                                }}
                                                            >

                                                                {{ $turmaNome }}

                                                            </option>

                                                        @endforeach

                                                    </select>

                                                </div>

                                            </div>


                                            <div class="modal-footer">

                                                <button
                                                    type="button"
                                                    class="btn btn-light border rounded-3"
                                                    data-bs-dismiss="modal"
                                                >
                                                    Cancelar
                                                </button>

                                                <button
                                                    type="submit"
                                                    class="btn btn-danger rounded-3 fw-bold"
                                                >

                                                    <i
                                                        class="fas fa-save me-1"
                                                    ></i>

                                                    Salvar Alterações

                                                </button>

                                            </div>

                                        </form>

                                    </div>

                                </div>

                            </div>


                        @empty

                            <tr>

                                <td
                                    colspan="6"
                                    class="text-center text-muted py-4"
                                >

                                    Nenhum estudante encontrado no sistema.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>


            @if(
                is_object($alunos)
                && method_exists($alunos, 'links')
            )

                <div
                    class="px-4 py-3 bg-light border-top d-flex justify-content-between align-items-center flex-wrap gap-2"
                >

                    <div
                        class="d-flex align-items-center gap-2"
                    >

                        <span
                            class="badge bg-white text-dark border px-3 py-2 fw-normal shadow-sm"
                        >

                            <i
                                class="fas fa-list text-muted me-1"
                            ></i>

                            Exibindo

                            <strong class="text-danger">
                                {{ $alunos->firstItem() ?? 0 }}
                            </strong>

                            a

                            <strong class="text-danger">
                                {{ $alunos->lastItem() ?? 0 }}
                            </strong>

                            de

                            <strong class="text-dark">
                                {{ $alunos->total() ?? 0 }}
                            </strong>

                            registros

                        </span>

                    </div>


                    <div class="m-0">

                        {{
                            $alunos->links(
                                'pagination::bootstrap-4'
                            )
                        }}

                    </div>

                </div>

            @endif

        </div>

    </main>

</div>


<!-- =========================
     MODAL VISUALIZAR ALUNO
========================= -->

<div
    class="modal fade"
    id="modalVisualizarAluno"
    tabindex="-1"
    aria-hidden="true"
>

    <div
        class="modal-dialog modal-dialog-centered"
    >

        <div
            class="modal-content border-0 rounded-4 shadow"
        >

            <div class="modal-header">

                <h5 class="modal-title fw-bold">

                    <i
                        class="fas fa-user-graduate text-danger me-2"
                    ></i>

                    Dados do Aluno

                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                ></button>

            </div>


            <div class="modal-body">

                <div
                    id="dadosVisualizarAluno"
                >

                    <div class="text-center py-4">

                        <div
                            class="spinner-border text-danger"
                            role="status"
                        ></div>

                        <p class="text-muted mt-3 mb-0">
                            Carregando dados...
                        </p>

                    </div>

                </div>

            </div>


            <div class="modal-footer">

                <button
                    type="button"
                    class="btn btn-secondary rounded-3"
                    data-bs-dismiss="modal"
                >
                    Fechar
                </button>

            </div>

        </div>

    </div>

</div>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
></script>

<x-acessibilidade />


<script>

    /*
    ==========================================
    MENU MOBILE
    ==========================================
    */

    (function () {

        const hamburgerBtn =
            document.getElementById(
                'hamburgerBtn'
            );

        const sidebar =
            document.getElementById(
                'sidebar'
            );

        const overlay =
            document.getElementById(
                'sidebarOverlay'
            );

        const closeBtn =
            document.getElementById(
                'sidebarCloseBtn'
            );


        function openMenu() {

            sidebar.classList.add(
                'active'
            );

            overlay.classList.add(
                'active'
            );

            hamburgerBtn.classList.add(
                'is-hidden'
            );

            document.body.style.overflow =
                'hidden';

        }


        function closeMenu() {

            sidebar.classList.remove(
                'active'
            );

            overlay.classList.remove(
                'active'
            );

            hamburgerBtn.classList.remove(
                'is-hidden'
            );

            document.body.style.overflow =
                '';

        }


        hamburgerBtn.addEventListener(
            'click',
            function () {

                if (
                    sidebar.classList.contains(
                        'active'
                    )
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
            .querySelectorAll(
                '#sidebar .nav-link'
            )
            .forEach(
                function (link) {

                    link.addEventListener(
                        'click',
                        closeMenu
                    );

                }
            );

    })();


    /*
    ==========================================
    VISUALIZAR ALUNO
    ==========================================
    */

    function visualizarAluno(id) {

        const container =
            document.getElementById(
                'dadosVisualizarAluno'
            );


        container.innerHTML = `

            <div class="text-center py-4">

                <div
                    class="spinner-border text-danger"
                    role="status"
                ></div>

                <p class="text-muted mt-3 mb-0">
                    Carregando dados...
                </p>

            </div>

        `;


        const modalElement =
            document.getElementById(
                'modalVisualizarAluno'
            );


        const modal =
            bootstrap.Modal.getOrCreateInstance(
                modalElement
            );


        modal.show();


        fetch(
            "{{ url('/alunos') }}/" +
            id +
            "/visualizar",
            {
                method: 'GET',
                headers: {
                    'Accept':
                        'application/json'
                }
            }
        )
        .then(
            async response => {

                const data =
                    await response.json();


                if (!response.ok) {

                    throw new Error(
                        data.message ||
                        'Não foi possível carregar o aluno.'
                    );

                }


                return data;

            }
        )
        .then(
            data => {

                const aluno =
                    data.aluno;


                let dataNascimento =
                    'Não informado';


                if (
                    aluno.data_nascimento
                ) {

                    const partes =
                        aluno.data_nascimento
                            .split('-');


                    if (
                        partes.length === 3
                    ) {

                        dataNascimento =
                            partes[2] +
                            '/' +
                            partes[1] +
                            '/' +
                            partes[0];

                    }

                }


                container.innerHTML = `

                    <div class="text-center mb-4">

                        <img
                            src="https://ui-avatars.com/api/?name=${encodeURIComponent(aluno.nome || 'Aluno')}&background=E3F2FD&color=1565C0"
                            width="80"
                            height="80"
                            class="rounded-circle"
                            alt="Aluno"
                        >

                        <h5 class="fw-bold mt-3 mb-1">
                            ${aluno.nome || 'Sem nome'}
                        </h5>

                        <span class="text-muted">
                            Matrícula:
                            ${aluno.id_aluno || '-'}
                        </span>

                    </div>


                    <div class="row g-3">

                        <div class="col-12">

                            <label class="small text-muted">
                                E-mail do responsável
                            </label>

                            <div class="fw-medium">
                                ${aluno.email_responsavel || 'Não informado'}
                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="small text-muted">
                                Turma
                            </label>

                            <div class="fw-medium">
                                ${aluno.turma_nome || 'Sem turma'}
                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="small text-muted">
                                Data de nascimento
                            </label>

                            <div class="fw-medium">
                                ${dataNascimento}
                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="small text-muted">
                                Status
                            </label>

                            <div>

                                <span
                                    class="badge-status bg-success-soft"
                                >
                                    ${aluno.status || 'Ativo'}
                                </span>

                            </div>

                        </div>

                    </div>

                `;

            }
        )
        .catch(
            error => {

                container.innerHTML = `

                    <div
                        class="alert alert-danger border-0 rounded-3"
                    >

                        <i
                            class="fas fa-exclamation-triangle me-2"
                        ></i>

                        ${error.message}

                    </div>

                `;

            }
        );

    }

</script>


<!-- VLibras -->

<div
    vw
    class="enabled"
>

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

</script>

</body>

</html>