<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
    name="csrf-token"
    content="{{ csrf_token() }}"
>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Matrícula de Aluno | SIFE</title>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    >

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >


    <style>

        :root {

            --primary-red: #d32f2f;

            --primary-red-hover: #b71c1c;

            --primary-red-soft: #fff5f5;

            --bg-light: #f8f9fa;

            --sidebar-width: 280px;

            --text-dark: #2d3436;

            --border-color: #edf2f7;

            --card-shadow:
                0 4px 20px rgba(0, 0, 0, 0.05);

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


        /* --- SIDEBAR --- */

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

            z-index: 100;

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

            box-shadow:
                0 4px 12px rgba(211, 47, 47, 0.2);

        }


        .nav-menu {

            display: flex;

            flex-direction: column;

            gap: 6px;

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


        /* --- CONTEÚDO PRINCIPAL --- */

        #content {

            flex-grow: 1;

            padding: 40px;

            overflow-y: auto;

        }


        .top-navbar {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 30px;

        }


        .card-custom {

            background: white;

            border-radius: 20px;

            border: 1px solid var(--border-color);

            box-shadow: var(--card-shadow);

            padding: 32px;

            margin-bottom: 24px;

        }


        /* --- ESTILIZAÇÃO DO FORMULÁRIO --- */

        .section-header {

            display: flex;

            align-items: center;

            gap: 10px;

            margin-top: 15px;

            margin-bottom: 25px;

            padding-bottom: 12px;

            border-bottom: 2px solid #f1f5f9;

            color: var(--text-dark);

            font-weight: 700;

            font-size: 1.1rem;

        }


        .section-header i {

            color: var(--primary-red);

            background: var(--primary-red-soft);

            padding: 8px;

            border-radius: 10px;

            font-size: 1rem;

        }


        .form-label {

            font-size: 0.75rem;

            font-weight: 700;

            color: #64748b;

            text-transform: uppercase;

            letter-spacing: 0.5px;

            margin-bottom: 8px;

            display: block;

        }


        .input-icon-group {

            position: relative;

        }


        .input-icon-group i {

            position: absolute;

            left: 16px;

            top: 50%;

            transform: translateY(-50%);

            color: #a0aec0;

            font-size: 0.95rem;

            transition: 0.2s;

            z-index: 2;

        }


        .form-control-custom {

            width: 100%;

            padding: 12px 16px 12px 42px;

            border-radius: 12px;

            border: 1px solid #e2e8f0;

            background: #f8fafc;

            font-weight: 500;

            color: var(--text-dark);

            transition: all 0.2s ease-in-out;

            font-size: 0.95rem;

        }


        .form-control-custom.no-icon {

            padding-left: 16px;

        }


        .form-control-custom:focus {

            outline: none;

            border-color: var(--primary-red);

            background: #ffffff;

            box-shadow:
                0 0 0 4px rgba(211, 47, 47, 0.08);

        }


        .form-control-custom:focus + i {

            color: var(--primary-red);

        }


        /* VALIDAÇÃO */

        .form-control-custom.input-valid {

            border-color: #198754;

            background-color: #f8fff9;

        }


        .form-control-custom.input-invalid {

            border-color: #dc3545;

            background-color: #fff8f8;

        }


        .validation-text {

            display: none;

            font-size: 0.72rem;

            margin-top: 5px;

        }


        .validation-text.error {

            color: #dc3545;

        }


        .validation-text.success {

            color: #198754;

        }


        .btn-save {

            background: var(--primary-red);

            color: white;

            border: none;

            padding: 14px 40px;

            border-radius: 14px;

            font-weight: 700;

            font-size: 0.95rem;

            transition: 0.2s;

            box-shadow:
                0 4px 15px rgba(211, 47, 47, 0.25);

            cursor: pointer;

            display: inline-flex;

            align-items: center;

            gap: 10px;

        }


        .btn-save:hover {

            background: var(--primary-red-hover);

            transform: translateY(-2px);

            box-shadow:
                0 6px 20px rgba(211, 47, 47, 0.35);

            color: white;

        }


        @media (max-width: 992px) {

            #sidebar {

                display: none;

            }

            #content {

                padding: 20px;

            }

        }

    </style>

</head>


<body>


<div class="wrapper">


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <nav id="sidebar">


        <div class="sidebar-header">

            <div class="logo-box">

                <i class="fas fa-graduation-cap"></i>

            </div>


            <h4 class="fw-bold m-0">

                SIFE

            </h4>

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
                class="nav-link active"
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


            <a
                href="{{ route('button') }}"
                class="nav-link"
            >

                <i class="far fa-file-alt"></i>

                <span>
                    Relatórios
                </span>

            </a>


        </div>


        <!-- =====================================================
             USUÁRIO
        ====================================================== -->

        <div
            class="sidebar-footer"
            style="
                margin-top: auto;
                padding-top: 15px;
                border-top: 1px solid var(--border-color);
                display: flex;
                flex-direction: column;
                gap: 10px;
            "
        >


            @php

                if(Auth::check()) {

                    $nomesSife =
                        explode(' ', Auth::user()->nome);

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
                        Auth::user()->nome;

                    $emailSife =
                        Auth::user()->email;

                } else {

                    $iniciaisSife = "CC";

                    $nomeSife = "Coordenador";

                    $emailSife =
                        "coordenacao@sife.com";

                }

                $isProfilePage =
                    Request::is('profile') ||
                    Request::is('profile/*');

            @endphp


            <a
                href="{{ route('profile') }}"
                class="user-profile-item"
                style="
                    display: flex;
                    align-items: center;
                    gap: 12px;
                    padding: 12px;
                    text-decoration: none;
                    border-radius: 15px;
                    transition: 0.3s;
                    background:
                    {{ $isProfilePage
                        ? 'var(--primary-red)'
                        : 'var(--primary-red-soft)' }};
                "
            >


                <div
                    class="avatar-circle"
                    style="
                        width: 42px;
                        height: 42px;
                        flex-shrink: 0;
                        background:
                        {{ $isProfilePage
                            ? '#ffffff'
                            : 'var(--primary-red)' }};
                        color:
                        {{ $isProfilePage
                            ? 'var(--primary-red)'
                            : '#ffffff' }};
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-weight: 700;
                        font-size: 0.85rem;
                        border: 2px solid white;
                        box-shadow:
                        0 2px 8px rgba(211,47,47,0.15);
                    "
                >

                    {{ $iniciaisSife }}

                </div>


                <div
                    class="overflow-hidden"
                    style="flex-grow: 1;"
                >

                    <p
                        class="m-0 small fw-bold text-truncate"
                        style="
                            color:
                            {{ $isProfilePage
                                ? '#ffffff'
                                : '#2d3436' }};
                            font-size: 0.9rem;
                        "
                    >

                        {{ $nomeSife }}

                    </p>


                    <p
                        class="m-0 text-truncate"
                        style="
                            font-size: 11px;
                            color:
                            {{ $isProfilePage
                                ? 'rgba(255,255,255,0.85)'
                                : '#a0aec0' }};
                        "
                    >

                        {{ $emailSife }}

                    </p>

                </div>

            </a>


            <!-- SAIR -->

            <a
                href="#"
                class="nav-link text-danger logout-trigger"
                style="
                    display: flex;
                    align-items: center;
                    gap: 14px;
                    padding: 10px 18px;
                    font-weight: 600;
                    text-decoration: none;
                    border-radius: 15px;
                    transition: 0.3s;
                    font-size: 0.9rem;
                "
                onclick="
                    event.preventDefault();
                    document
                        .getElementById('sidebar-logout-form')
                        .submit();
                "
            >

                <i
                    class="fas fa-sign-out-alt"
                    style="
                        width: 22px;
                        font-size: 1.1rem;
                        color: var(--primary-red);
                    "
                ></i>

                <span>

                    Sair da Conta

                </span>

            </a>


            <form
                id="sidebar-logout-form"
                action="{{ route('logout') }}"
                method="POST"
                class="d-none"
            >

                @csrf

            </form>


        </div>

    </nav>


    <!-- =====================================================
         CONTEÚDO
    ====================================================== -->

    <main id="content">


        <header class="top-navbar">


            <div>

                <h3 class="fw-bold m-0">

                    Matricular Novo Aluno

                </h3>


                <p class="text-muted m-0 small">

                    Cadastre as informações para o prontuário escolar

                </p>

            </div>


            <a
                href="{{ route('typography') }}"
                class="btn btn-light px-4 py-2 rounded-3 border text-muted fw-bold d-flex align-items-center gap-2"
            >

                <i class="fas fa-arrow-left"></i>

                Voltar à Lista

            </a>


        </header>


        <!-- =====================================================
             ERROS DO LARAVEL
        ====================================================== -->

        @if ($errors->any())

            <div
                class="alert alert-danger border-0 rounded-4 shadow-sm mb-4"
            >

                <div
                    class="d-flex align-items-center gap-2 mb-2 fw-bold"
                >

                    <i class="fas fa-exclamation-circle"></i>

                    Verifique os campos abaixo:

                </div>


                <ul class="m-0 ps-3 small">

                    @foreach ($errors->all() as $error)

                        <li>

                            {{ $error }}

                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <!-- =====================================================
             CARD DO FORMULÁRIO
        ====================================================== -->

        <div class="card-custom">


            <form
                id="formMatriculaAluno"
                action="{{ route('alunos.salvar') }}"
                method="POST"
            >

                @csrf


                <!-- =================================================
                     SESSÃO 1
                ================================================== -->

                <div class="section-header">

                    <i class="fas fa-user-graduate"></i>

                    Informações Pessoais do Estudante

                </div>


                <div class="row g-3 mb-4">


                    <!-- NOME -->

                    <div class="col-md-6">

                        <label class="form-label">

                            Nome Completo

                        </label>


                        <div class="input-icon-group">


                            <input
                                type="text"
                                name="nome"
                                id="nome"
                                value="{{ old('nome') }}"
                                class="form-control-custom"
                                placeholder="Nome completo do aluno"
                                required
                            >


                            <i class="fas fa-user"></i>


                        </div>

                    </div>


                    <!-- DATA NASCIMENTO -->

                    <div class="col-md-3">

                        <label class="form-label">

                            Data de Nascimento

                        </label>


                        <div class="input-icon-group">


                            <input
                                type="date"
                                name="data_nascimento"
                                id="data_nascimento"
                                value="{{ old('data_nascimento') }}"
                                class="form-control-custom"
                                required
                            >


                            <i class="fas fa-calendar-alt"></i>


                        </div>

                    </div>


                    <!-- GÊNERO -->

                    <div class="col-md-3">

                        <label class="form-label">

                            Gênero

                        </label>


                        <div class="input-icon-group">


                            <select
                                name="genero"
                                class="form-control-custom"
                                required
                            >

                                <option
                                    value=""
                                    disabled
                                    {{ old('genero') ? '' : 'selected' }}
                                >

                                    Selecione...

                                </option>


                                <option
                                    value="Masculino"
                                    {{ old('genero') == 'Masculino' ? 'selected' : '' }}
                                >

                                    Masculino

                                </option>


                                <option
                                    value="Feminino"
                                    {{ old('genero') == 'Feminino' ? 'selected' : '' }}
                                >

                                    Feminino

                                </option>


                                <option
                                    value="Outro"
                                    {{ old('genero') == 'Outro' ? 'selected' : '' }}
                                >

                                    Outro

                                </option>


                            </select>


                            <i class="fas fa-venus-mars"></i>


                        </div>

                    </div>


                    <!-- =================================================
                         CPF
                    ================================================== -->

                    <div class="col-md-4">

                        <label class="form-label">

                            CPF do Aluno

                        </label>


                        <div class="input-icon-group">


                            <input
                                type="text"
                                name="cpf"
                                id="cpf"
                                value="{{ old('cpf') }}"
                                class="form-control-custom"
                                placeholder="000.000.000-00"
                                maxlength="14"
                                inputmode="numeric"
                                autocomplete="off"
                            >


                            <i class="fas fa-id-card"></i>


                        </div>


                        <div
                            id="cpfMensagem"
                            class="validation-text"
                        ></div>


                    </div>


                    <!-- =================================================
                         RG
                    ================================================== -->

                    <div class="col-md-4">

                        <label class="form-label">

                            RG

                        </label>


                        <div class="input-icon-group">


                            <input
                                type="text"
                                name="rg"
                                id="rg"
                                value="{{ old('rg') }}"
                                class="form-control-custom"
                                placeholder="00.000.000-0"
                                maxlength="12"
                                inputmode="numeric"
                                autocomplete="off"
                            >


                            <i class="fas fa-address-card"></i>


                        </div>


                    </div>


                    <!-- NACIONALIDADE -->

                    <div class="col-md-4">

                        <label class="form-label">

                            Nacionalidade

                        </label>


                        <div class="input-icon-group">


                            <input
                                type="text"
                                name="nacionalidade"
                                id="nacionalidade"
                                value="{{ old('nacionalidade', 'Brasileira') }}"
                                class="form-control-custom"
                            >


                            <i class="fas fa-flag"></i>


                        </div>

                    </div>


                </div>


                <!-- =================================================
                     SESSÃO 2
                ================================================== -->

                <div class="section-header">

                    <i class="fas fa-users-cog"></i>

                    Responsável Legal

                </div>


                <div class="row g-3 mb-4">


                    <!-- RESPONSÁVEL -->

                    <div class="col-md-6">

                        <label class="form-label">

                            Nome do Responsável

                        </label>


                        <div class="input-icon-group">


                            <input
                                type="text"
                                name="nome_responsavel"
                                id="nome_responsavel"
                                value="{{ old('nome_responsavel') }}"
                                class="form-control-custom"
                                placeholder="Nome do pai, mãe ou tutor legal"
                                required
                            >


                            <i class="fas fa-user-shield"></i>


                        </div>

                    </div>


                    <!-- PARENTESCO -->

                    <div class="col-md-3">

                        <label class="form-label">

                            Parentesco

                        </label>


                        <div class="input-icon-group">


                            <select
                                name="parentesco"
                                class="form-control-custom"
                            >

                                <option
                                    value="Pai / Mãe"
                                    {{ old('parentesco') == 'Pai / Mãe' ? 'selected' : '' }}
                                >

                                    Pai / Mãe

                                </option>


                                <option
                                    value="Avô / Avó"
                                    {{ old('parentesco') == 'Avô / Avó' ? 'selected' : '' }}
                                >

                                    Avô / Avó

                                </option>


                                <option
                                    value="Tutor Legal"
                                    {{ old('parentesco') == 'Tutor Legal' ? 'selected' : '' }}
                                >

                                    Tutor Legal

                                </option>


                            </select>


                            <i class="fas fa-hands-helping"></i>


                        </div>

                    </div>


                    <!-- TELEFONE -->

                    <div class="col-md-3">

                        <label class="form-label">

                            Telefone de Contato

                        </label>


                        <div class="input-icon-group">


                            <input
                                type="text"
                                name="telefone_responsavel"
                                id="telefone_responsavel"
                                value="{{ old('telefone_responsavel') }}"
                                class="form-control-custom"
                                placeholder="(00) 00000-0000"
                                maxlength="15"
                                inputmode="numeric"
                                autocomplete="off"
                                required
                            >


                            <i class="fas fa-phone-alt"></i>


                        </div>

                    </div>


                    <!-- E-MAIL -->

                    <div class="col-md-6">

                        <label class="form-label">

                            E-mail do Responsável

                        </label>


                        <div class="input-icon-group">


                            <input
                                type="email"
                                name="email_responsavel"
                                id="email_responsavel"
                                value="{{ old('email_responsavel') }}"
                                class="form-control-custom"
                                placeholder="exemplo@email.com"
                                required
                            >


                            <i class="fas fa-envelope"></i>


                        </div>

                    </div>


                </div>


                <!-- =================================================
                     SESSÃO 3
                ================================================== -->

                <div class="section-header">

                    <i class="fas fa-school"></i>

                    Vínculo Acadêmico

                </div>


                <div class="row g-3 mb-4">


                    <!-- TURMA -->

                    <div class="col-md-6">


                        <label class="form-label">

                            Turma de Destino

                        </label>


                        <div class="input-icon-group">


                            <select
                                name="id_turma"
                                class="form-control-custom"
                                required
                            >


                                <option
                                    value=""
                                    disabled
                                    {{ old('id_turma') ? '' : 'selected' }}
                                >

                                    Selecione uma turma...

                                </option>


                                @forelse($todasTurmas as $turma)

                                    <option
                                        value="{{ $turma->id_turma }}"
                                        {{ old('id_turma') == $turma->id_turma ? 'selected' : '' }}
                                    >

                                        {{ $turma->nome_turma }}

                                        {{ $turma->serie ? '- ' . $turma->serie : '' }}

                                        ({{ $turma->periodo }})

                                    </option>


                                @empty

                                    <option
                                        value=""
                                        disabled
                                    >

                                        Nenhuma turma cadastrada no sistema

                                    </option>

                                @endforelse


                            </select>


                            <i class="fas fa-graduation-cap"></i>


                        </div>


                    </div>


                    <!-- MATRÍCULA -->

                    <div class="col-md-6">


                        <label class="form-label">

                            Código de Matrícula (Opcional)

                        </label>


                        <div class="input-icon-group">


                            <input
                                type="text"
                                name="id_aluno"
                                id="id_aluno"
                                value="{{ old('id_aluno') }}"
                                class="form-control-custom"
                                placeholder="Gerado automaticamente se vazio"
                                inputmode="numeric"
                            >


                            <i class="fas fa-barcode"></i>


                        </div>


                    </div>

                    <!-- =================================================
     CARTÃO RFID AUTOMÁTICO
================================================== -->

<div class="col-md-6">

    <label class="form-label">
        Cartão RFID do Aluno
    </label>

    <div
        style="
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 18px;
        "
    >

        <div class="d-flex align-items-center gap-3">

            <div
                id="rfidIcon"
                style="
                    width: 48px;
                    height: 48px;
                    min-width: 48px;
                    border-radius: 12px;
                    background: var(--primary-red-soft);
                    color: var(--primary-red);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.2rem;
                "
            >
                <i class="fas fa-id-card"></i>
            </div>

            <div style="flex: 1;">

                <div
                    id="rfidStatus"
                    style="
                        font-size: 0.85rem;
                        font-weight: 700;
                        color: #64748b;
                        margin-bottom: 3px;
                    "
                >
                    Aguardando leitura
                </div>

                <div
                    id="rfidMensagem"
                    style="
                        font-size: 0.78rem;
                        color: #94a3b8;
                    "
                >
                    Clique no botão e aproxime o cartão.
                </div>

            </div>

        </div>

        <!-- UID CAPTURADO -->

        <div
            id="rfidResultado"
            style="
                display: none;
                margin-top: 15px;
            "
        >

            <label
                style="
                    font-size: 0.7rem;
                    font-weight: 700;
                    color: #64748b;
                    text-transform: uppercase;
                    display: block;
                    margin-bottom: 6px;
                "
            >
                UID do cartão
            </label>

            <div
                style="
                    position: relative;
                "
            >

                <input
                    type="text"
                    name="rfid_uid"
                    id="rfid_uid"
                    value="{{ old('rfid_uid') }}"
                    class="form-control-custom"
                    readonly
                    style="
                        padding-left: 42px;
                        background: #f8fff9;
                        border-color: #198754;
                        font-weight: 700;
                        letter-spacing: 1px;
                    "
                >

                <i
                    class="fas fa-check-circle"
                    style="
                        color: #198754;
                    "
                ></i>

            </div>

        </div>

        <!-- BOTÃO -->

        <button
            type="button"
            id="btnLerRFID"
            class="btn-save"
            style="
                margin-top: 15px;
                width: 100%;
                justify-content: center;
                padding: 11px 20px;
                font-size: 0.85rem;
            "
        >

            <i class="fas fa-wifi"></i>

            <span id="textoBotaoRFID">
                Ler cartão RFID
            </span>

        </button>

    </div>

    <small
        class="text-muted d-block mt-2"
    >
        Aproxime o cartão do leitor RC522. O UID será preenchido automaticamente.
    </small>

</div>


                </div>


                <!-- =================================================
                     BOTÕES
                ================================================== -->

                <div
                    class="d-flex justify-content-end align-items-center gap-3 pt-4 border-top"
                >


                    <a
                        href="{{ route('typography') }}"
                        class="btn btn-light px-4 py-2 rounded-3 border fw-bold text-muted"
                    >

                        Cancelar

                    </a>


                    <button
                        type="submit"
                        class="btn-save"
                    >

                        <i class="fas fa-check-circle"></i>

                        Finalizar Matrícula

                    </button>


                </div>


            </form>


        </div>


    </main>


</div>


<!-- =====================================================
     COMPONENTES
====================================================== -->

<x-acessibilidade />


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
></script>


<!-- =====================================================
     VLIBRAS
====================================================== -->

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

</script>


<!-- =====================================================
     MÁSCARAS E VALIDAÇÕES
====================================================== -->

<script>

    let tempoLimiteRFID = null;

// Dentro do evento do botão btnLerRFID:
tempoLimiteRFID = setTimeout(() => {
    if (procurandoRFID) {
        pararLeituraRFID();
        rfidStatus.textContent = 'Tempo esgotado';
        rfidStatus.style.color = '#dc3545';
        rfidMensagem.textContent = 'Nenhum cartão foi lido dentro do tempo limite. Tente novamente.';
        textoBotaoRFID.innerHTML = '<i class="fas fa-redo"></i> Tentar novamente';
        btnLerRFID.disabled = false;
        btnLerRFID.style.opacity = '1';
    }
}, 30000); // 30 segundos de limite

// Dentro da função pararLeituraRFID():
function pararLeituraRFID() {
    procurandoRFID = false;
    if (intervaloRFID) {
        clearInterval(intervaloRFID);
        intervaloRFID = null;
    }
    if (tempoLimiteRFID) {
        clearTimeout(tempoLimiteRFID);
        tempoLimiteRFID = null;
    }
}

document.addEventListener(
    'DOMContentLoaded',
    function () {

        // =================================================
// RFID - LEITURA AUTOMÁTICA
// =================================================

const btnLerRFID =
    document.getElementById('btnLerRFID');

const rfidUid =
    document.getElementById('rfid_uid');

const rfidStatus =
    document.getElementById('rfidStatus');

const rfidMensagem =
    document.getElementById('rfidMensagem');

const rfidResultado =
    document.getElementById('rfidResultado');

const rfidIcon =
    document.getElementById('rfidIcon');

const textoBotaoRFID =
    document.getElementById('textoBotaoRFID');

let procurandoRFID = false;
let intervaloRFID = null;


// =================================================
// INICIAR LEITURA
// =================================================

if (btnLerRFID) {

    btnLerRFID.addEventListener(
        'click',
        async function () {

            if (procurandoRFID) {
                return;
            }

            procurandoRFID = true;

            // -----------------------------------------
            // ALTERA INTERFACE
            // -----------------------------------------

            btnLerRFID.disabled = true;

            btnLerRFID.style.opacity = '0.7';

            textoBotaoRFID.innerHTML =
                '<i class="fas fa-spinner fa-spin"></i> Aguardando cartão...';

            rfidStatus.textContent =
                'Aguardando cartão RFID';

            rfidStatus.style.color =
                'var(--primary-red)';

            rfidMensagem.textContent =
                'Aproxime o cartão do leitor RC522.';

            rfidIcon.style.background =
                'var(--primary-red-soft)';

            rfidIcon.style.color =
                'var(--primary-red)';

            try {

                // -------------------------------------
                // AVISA AO LARAVEL QUE ESTAMOS
                // AGUARDANDO UM CARTÃO
                // -------------------------------------

                const resposta =
                    await fetch(
                        '/api/rfid/iniciar-cadastro',
                        {
                            method: 'POST',

                            headers: {
                                'Content-Type':
                                    'application/json',

                                'Accept':
                                    'application/json',

                                'X-CSRF-TOKEN':
                                    document
                                        .querySelector(
                                            'meta[name="csrf-token"]'
                                        )?.getAttribute(
                                            'content'
                                        )
                            }
                        }
                    );

                if (!resposta.ok) {

                    throw new Error(
                        'Não foi possível iniciar a leitura RFID.'
                    );

                }

                // -------------------------------------
                // COMEÇA A CONSULTAR O LARAVEL
                // -------------------------------------

                intervaloRFID =
                    setInterval(
                        verificarCartaoRFID,
                        1000
                    );

            } catch (erro) {

                console.error(
                    'Erro RFID:',
                    erro
                );

                pararLeituraRFID();

                rfidStatus.textContent =
                    'Erro ao iniciar leitura';

                rfidStatus.style.color =
                    '#dc3545';

                rfidMensagem.textContent =
                    erro.message;

            }

        }
    );

}


// =================================================
// VERIFICAR SE O ESP32 LEU UM CARTÃO
// =================================================

async function verificarCartaoRFID() {

    try {

        const resposta =
            await fetch(
                '/api/rfid/ultimo',
                {
                    method: 'GET',

                    headers: {
                        'Accept':
                            'application/json'
                    },

                    cache: 'no-store'
                }
            );

        if (!resposta.ok) {
            return;
        }

        const dados =
            await resposta.json();

        console.log(
            'Resposta RFID:',
            dados
        );

        // -----------------------------------------
        // CARTÃO ENCONTRADO
        // -----------------------------------------

        if (
            dados.success &&
            dados.uid
        ) {

            const uid =
                dados.uid
                    .toUpperCase()
                    .trim();

            rfidUid.value =
                uid;

            rfidResultado.style.display =
                'block';

            rfidStatus.textContent =
                'Cartão identificado';

            rfidStatus.style.color =
                '#198754';

            rfidMensagem.textContent =
                'UID capturado automaticamente pelo leitor.';

            rfidIcon.style.background =
                '#eaf8ef';

            rfidIcon.style.color =
                '#198754';

            textoBotaoRFID.innerHTML =
                '<i class="fas fa-check"></i> Cartão capturado';

            btnLerRFID.disabled =
                true;

            btnLerRFID.style.background =
                '#198754';

            pararLeituraRFID();

            // -------------------------------------
            // CONFIRMAÇÃO VISUAL
            // -------------------------------------

            rfidUid.focus();

        }

    } catch (erro) {

        console.error(
            'Erro ao consultar RFID:',
            erro
        );

    }

}


// =================================================
// PARAR LEITURA
// =================================================

function pararLeituraRFID() {

    procurandoRFID =
        false;

    if (intervaloRFID) {

        clearInterval(
            intervaloRFID
        );

        intervaloRFID =
            null;

    }

}


        /* =================================================
           ELEMENTOS
        ================================================= */

        const cpf =
            document.getElementById('cpf');


        const cpfMensagem =
            document.getElementById(
                'cpfMensagem'
            );


        const rg =
            document.getElementById('rg');


        const telefone =
            document.getElementById(
                'telefone_responsavel'
            );


        const nome =
            document.getElementById('nome');


        const nomeResponsavel =
            document.getElementById(
                'nome_responsavel'
            );


        const nacionalidade =
            document.getElementById(
                'nacionalidade'
            );


        const matricula =
            document.getElementById(
                'id_aluno'
            );


        const nascimento =
            document.getElementById(
                'data_nascimento'
            );


        const email =
            document.getElementById(
                'email_responsavel'
            );


        const form =
            document.getElementById(
                'formMatriculaAluno'
            );


        /* =================================================
           FUNÇÃO CPF
        ================================================= */

        function formatarCPF(valor) {

            valor =
                valor.replace(
                    /\D/g,
                    ''
                );


            valor =
                valor.substring(
                    0,
                    11
                );


            if (
                valor.length > 9
            ) {

                return valor.replace(
                    /^(\d{3})(\d{3})(\d{3})(\d{1,2})$/,
                    '$1.$2.$3-$4'
                );

            }


            if (
                valor.length > 6
            ) {

                return valor.replace(
                    /^(\d{3})(\d{3})(\d{1,3})$/,
                    '$1.$2.$3'
                );

            }


            if (
                valor.length > 3
            ) {

                return valor.replace(
                    /^(\d{3})(\d{1,3})$/,
                    '$1.$2'
                );

            }


            return valor;

        }


        /* =================================================
           VALIDAR CPF
        ================================================= */

        function cpfValido(valor) {

            const numeros =
                valor.replace(
                    /\D/g,
                    ''
                );


            if (
                numeros.length !== 11
            ) {

                return false;

            }


            /*
             * Não permite:
             * 11111111111
             * 22222222222
             * etc.
             */

            if (
                /^(\d)\1{10}$/.test(
                    numeros
                )
            ) {

                return false;

            }


            let soma = 0;


            for (
                let i = 0;
                i < 9;
                i++
            ) {

                soma +=
                    Number(
                        numeros.charAt(i)
                    ) *
                    (10 - i);

            }


            let resto =
                (soma * 10) % 11;


            if (
                resto === 10
            ) {

                resto = 0;

            }


            if (
                resto !==
                Number(
                    numeros.charAt(9)
                )
            ) {

                return false;

            }


            soma = 0;


            for (
                let i = 0;
                i < 10;
                i++
            ) {

                soma +=
                    Number(
                        numeros.charAt(i)
                    ) *
                    (11 - i);

            }


            resto =
                (soma * 10) % 11;


            if (
                resto === 10
            ) {

                resto = 0;

            }


            return (
                resto ===
                Number(
                    numeros.charAt(10)
                )
            );

        }


        /* =================================================
           EVENTO CPF
        ================================================= */

        if (cpf) {

            cpf.addEventListener(
                'input',
                function () {


                    this.value =
                        formatarCPF(
                            this.value
                        );


                    const numeros =
                        this.value.replace(
                            /\D/g,
                            ''
                        );


                    /*
                     * Ainda digitando
                     */

                    if (
                        numeros.length < 11
                    ) {

                        this.classList.remove(
                            'input-valid',
                            'input-invalid'
                        );


                        cpfMensagem.style.display =
                            'none';


                        return;

                    }


                    /*
                     * CPF válido
                     */

                    if (
                        cpfValido(
                            this.value
                        )
                    ) {

                        this.classList.remove(
                            'input-invalid'
                        );


                        this.classList.add(
                            'input-valid'
                        );


                        cpfMensagem.textContent =
                            '✓ CPF válido';


                        cpfMensagem.className =
                            'validation-text success';


                        cpfMensagem.style.display =
                            'block';


                    }

                    /*
                     * CPF inválido
                     */

                    else {

                        this.classList.remove(
                            'input-valid'
                        );


                        this.classList.add(
                            'input-invalid'
                        );


                        cpfMensagem.textContent =
                            '✕ CPF inválido';


                        cpfMensagem.className =
                            'validation-text error';


                        cpfMensagem.style.display =
                            'block';

                    }

                }
            );

        }


        /* =================================================
           RG
           Formato:
           00.000.000-0
        ================================================= */

        if (rg) {

            rg.addEventListener(
                'input',
                function () {


                    let valor =
                        this.value.replace(
                            /\D/g,
                            ''
                        );


                    valor =
                        valor.substring(
                            0,
                            9
                        );


                    if (
                        valor.length > 8
                    ) {

                        valor =
                            valor.replace(
                                /^(\d{2})(\d{3})(\d{3})(\d)$/,
                                '$1.$2.$3-$4'
                            );

                    }

                    else if (
                        valor.length > 5
                    ) {

                        valor =
                            valor.replace(
                                /^(\d{2})(\d{3})(\d{1,3})$/,
                                '$1.$2.$3'
                            );

                    }

                    else if (
                        valor.length > 2
                    ) {

                        valor =
                            valor.replace(
                                /^(\d{2})(\d{1,3})$/,
                                '$1.$2'
                            );

                    }


                    this.value = valor;

                }
            );

        }


        /* =================================================
           TELEFONE
           Formato:
           (00) 00000-0000
        ================================================= */

        if (telefone) {

            telefone.addEventListener(
                'input',
                function () {


                    let valor =
                        this.value.replace(
                            /\D/g,
                            ''
                        );


                    valor =
                        valor.substring(
                            0,
                            11
                        );


                    if (
                        valor.length > 10
                    ) {

                        valor =
                            valor.replace(
                                /^(\d{2})(\d{5})(\d{1,4})$/,
                                '($1) $2-$3'
                            );

                    }

                    else if (
                        valor.length > 6
                    ) {

                        valor =
                            valor.replace(
                                /^(\d{2})(\d{4})(\d{1,4})$/,
                                '($1) $2-$3'
                            );

                    }

                    else if (
                        valor.length > 2
                    ) {

                        valor =
                            valor.replace(
                                /^(\d{2})(\d{1,5})$/,
                                '($1) $2'
                            );

                    }


                    this.value = valor;

                }
            );

        }


        /* =================================================
           APENAS LETRAS
        ================================================= */

        function apenasLetras(campo) {


            if (!campo) {

                return;

            }


            campo.addEventListener(
                'input',
                function () {


                    this.value =
                        this.value.replace(
                            /[^A-Za-zÀ-ÿ\s]/g,
                            ''
                        );

                }
            );

        }


        apenasLetras(nome);

        apenasLetras(nomeResponsavel);

        apenasLetras(nacionalidade);


        /* =================================================
           MATRÍCULA
           APENAS NÚMEROS
        ================================================= */

        if (matricula) {

            matricula.addEventListener(
                'input',
                function () {


                    this.value =
                        this.value.replace(
                            /\D/g,
                            ''
                        );

                }
            );

        }


        /* =================================================
           DATA DE NASCIMENTO
           NÃO PODE SER FUTURA
        ================================================= */

        if (nascimento) {


            const hoje =
                new Date()
                    .toISOString()
                    .split('T')[0];


            nascimento.max =
                hoje;


            nascimento.addEventListener(
                'change',
                function () {


                    if (
                        this.value > hoje
                    ) {

                        alert(
                            'A data de nascimento não pode ser futura.'
                        );


                        this.value = '';

                    }

                }
            );

        }


        /* =================================================
           E-MAIL
        ================================================= */

        if (email) {

            email.addEventListener(
                'input',
                function () {


                    if (
                        this.value === ''
                    ) {

                        this.classList.remove(
                            'input-valid',
                            'input-invalid'
                        );

                        return;

                    }


                    if (
                        this.checkValidity()
                    ) {

                        this.classList.remove(
                            'input-invalid'
                        );

                        this.classList.add(
                            'input-valid'
                        );

                    }

                    else {

                        this.classList.remove(
                            'input-valid'
                        );

                        this.classList.add(
                            'input-invalid'
                        );

                    }

                }
            );

        }


        /* =================================================
           VALIDAÇÃO FINAL DO FORMULÁRIO
        ================================================= */

        if (form) {

            form.addEventListener(
                'submit',
                function (event) {


                    /* CPF */

                    if (
                        cpf &&
                        cpf.value.trim() !== ''
                    ) {


                        if (
                            !cpfValido(
                                cpf.value
                            )
                        ) {


                            event.preventDefault();


                            alert(
                                'Digite um CPF válido antes de continuar.'
                            );


                            cpf.focus();


                            return;

                        }

                    }


                    /* TELEFONE */

                    if (
                        telefone &&
                        telefone.value.trim() !== ''
                    ) {


                        const telefoneNumeros =
                            telefone.value.replace(
                                /\D/g,
                                ''
                            );


                        if (
                            telefoneNumeros.length !== 10 &&
                            telefoneNumeros.length !== 11
                        ) {


                            event.preventDefault();


                            alert(
                                'Digite um telefone válido.'
                            );


                            telefone.focus();


                            return;

                        }

                    }


                    /* E-MAIL */

                    if (
                        email &&
                        !email.checkValidity()
                    ) {


                        event.preventDefault();


                        alert(
                            'Digite um e-mail válido.'
                        );


                        email.focus();


                        return;

                    }


                    /* DATA */

                    if (
                        nascimento &&
                        nascimento.value !== ''
                    ) {


                        const hoje =
                            new Date()
                                .toISOString()
                                .split('T')[0];


                        if (
                            nascimento.value > hoje
                        ) {


                            event.preventDefault();


                            alert(
                                'A data de nascimento não pode ser futura.'
                            );


                            nascimento.focus();


                            return;

                        }

                    }

                }
            );

        }


        /* =================================================
           VALIDAR CPF JÁ PREENCHIDO
        ================================================= */

        if (
            cpf &&
            cpf.value.trim() !== ''
        ) {


            cpf.value =
                formatarCPF(
                    cpf.value
                );


            const numeros =
                cpf.value.replace(
                    /\D/g,
                    ''
                );


            if (
                numeros.length === 11
            ) {


                if (
                    cpfValido(
                        cpf.value
                    )
                ) {


                    cpf.classList.add(
                        'input-valid'
                    );


                    cpfMensagem.textContent =
                        '✓ CPF válido';


                    cpfMensagem.className =
                        'validation-text success';


                    cpfMensagem.style.display =
                        'block';


                }

                else {


                    cpf.classList.add(
                        'input-invalid'
                    );


                    cpfMensagem.textContent =
                        '✕ CPF inválido';


                    cpfMensagem.className =
                        'validation-text error';


                    cpfMensagem.style.display =
                        'block';

                }

            }

        }


    }

);

<div class="mb-3">
    <label for="cpf" class="form-label">
        CPF
    </label>

    <input
        type="text"
        name="cpf"
        id="cpf"
        class="form-control"
        placeholder="000.000.000-00"
        maxlength="14"
        value="{{ old('cpf') }}"
        required
    >
</div>

<script>
document.getElementById('cpf').addEventListener('input', function (e) {

    let cpf = e.target.value.replace(/\D/g, '');

    cpf = cpf.substring(0, 11);

    cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
    cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2');

    e.target.value = cpf;
});
</script>

</script>


</body>

</html>