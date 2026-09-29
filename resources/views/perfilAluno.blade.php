<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Meu Perfil Aluno - SIFE</title>

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

/* SIDEBAR */
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
    z-index: 100;
}

/* LOGO */
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

/* MENU */
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
    transition: 0.3s;
}

.nav-link:hover,
.nav-link.active {
    background: var(--primary-red-soft);
    color: var(--primary-red);
}

.nav-link:hover i,
.nav-link.active i {
    color: var(--primary-red);
}

/* RODAPÉ DA SIDEBAR */
.sidebar-footer {
    margin-top: auto;
    padding-top: 20px;
    border-top: 1px solid var(--border-color);
}

/* PERFIL DO USUÁRIO */
.user-profile-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px;
    text-decoration: none;
    border-radius: 15px;
    background: var(--primary-red-soft);
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

.user-profile-item .fw-bold {
    font-size: 14px;
    color: #1a202c;
}

.user-profile-item .text-muted {
    font-size: 11px !important;
}

/* BOTÃO SAIR */
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

/* CONTEÚDO */
#content {
    flex-grow: 1;
    padding: 40px;
    overflow-y: auto;
    max-width: calc(100% - var(--sidebar-width));
}

/* HERO DO PERFIL */
.profile-hero {
    background: white;
    border-radius: 30px;
    border: 1px solid var(--border-color);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
    margin-bottom: 35px;
    overflow: visible;
    position: relative;
}

.hero-banner {
    height: 180px;
    background: var(--primary-red);
    border-radius: 30px 30px 0 0;
    position: relative;
    z-index: 1;
}

.hero-banner::after {
    content: "ESTUDANTE";
    position: absolute;
    right: 30px;
    bottom: 80px;
    font-size: 5rem;
    font-weight: 900;
    color: rgba(255, 255, 255, 0.1);
}

.hero-body {
    padding: 0 45px 35px;
    margin-top: -70px;
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    position: relative;
    z-index: 5;
}

.hero-avatar {
    width: 140px;
    height: 140px;
    background: var(--primary-red);
    color: white;
    border: 8px solid white;
    border-radius: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3.5rem;
    font-weight: 800;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
}

/* CARDS */
.card-custom {
    background: white;
    border-radius: 25px;
    padding: 30px;
    border: 1px solid var(--border-color);
    height: 100%;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.02);
}

.card-title {
    font-size: 1.15rem;
    font-weight: 800;
    color: #1a202c;
    margin-bottom: 25px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.card-title i {
    color: var(--primary-red);
    font-size: 1rem;
}

/* INFORMAÇÕES */
.info-group {
    margin-bottom: 20px;
}

.info-label {
    font-size: 0.72rem;
    font-weight: 800;
    color: #a0aec0;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 6px;
}

.info-value {
    background: #f8fafc;
    border: 1px solid #eef2f6;
    border-radius: 12px;
    padding: 14px 18px;
    font-weight: 600;
    color: #2d3748;
}

/* BADGE ACADÊMICO */
.badge-academic {
    background: var(--primary-red-soft);
    color: var(--primary-red);
    padding: 6px 12px;
    border-radius: 8px;
    font-weight: 700;
    font-size: 0.75rem;
}

/* TABELA */
.activity-table thead th {
    background: #f8fafc;
    border: none;
    font-size: 0.75rem;
    color: #718096;
    padding: 15px;
}

.activity-table tbody td {
    padding: 15px;
    border-bottom: 1px solid #f1f5f9;
    font-size: 0.9rem;
    font-weight: 500;
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

/* RESPONSIVO */
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
        max-width: 100%;
        padding: 20px;
    }
}

/* MENU MOBILE */
@media (max-width: 768px) {

    body {
        overflow-x: hidden;
    }

    body.menu-open {
        overflow: hidden;
    }

    /* BOTÃO MENU */
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

    /* OVERLAY */
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

    /* SIDEBAR MOBILE */
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
        display: flex;
    }

    #sidebar.active {
        left: 0;
    }

    /* LOGO MOBILE */
    .sidebar-brand {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        padding: 0 15px 35px;
    }

    /* BOTÃO FECHAR */
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

    /* MENU MOBILE */
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

    /* HERO DO PERFIL */
    .hero-banner {
        height: 120px;
    }

    .hero-banner::after {
        font-size: 2.8rem;
        bottom: 40px;
        right: 18px;
    }

    .hero-body {
        flex-direction: column;
        align-items: flex-start;
        padding: 0 20px 25px;
        margin-top: -55px;
        gap: 15px;
    }

    .hero-body > .d-flex {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 15px !important;
    }

    .hero-avatar {
        width: 100px;
        height: 100px;
        font-size: 2.4rem;
        border-radius: 25px;
        border-width: 6px;
    }

    .hero-body h1 {
        font-size: 1.4rem;
    }
}

@media (max-width: 576px) {

    .user-profile-item {
        padding: 12px;
    }

    .avatar-circle {
        width: 42px;
        height: 42px;
        min-width: 42px;
    }

    .hero-body .d-flex.align-items-center.gap-2 {
        flex-wrap: wrap;
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
<div
    id="mobileOverlay"
    class="mobile-overlay"
></div>

<div class="wrapper">

    <!-- SIDEBAR -->
    <nav id="sidebar">

        <!-- LOGO -->
        <div class="sidebar-brand">

            <div class="brand-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>

            <span class="brand-name">
                SIFE
            </span>

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
                class="nav-link active"
            >
                <i class="fas fa-user-circle"></i>
                <span>
                    Meu Perfil
                </span>
            </a>

            <!-- MINHAS NOTAS -->
            <a
                href="{{ route('notasAluno') }}"
                class="nav-link"
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

        <!-- PERFIL DO ALUNO -->
        <div class="sidebar-footer">

            <div class="user-profile-item">

                <!-- AVATAR -->
                <div class="avatar-circle">

                    @if(Auth::check())

                        @php

                            $nomeCompleto =
                                Auth::user()->nome
                                ?? Auth::user()->name
                                ?? 'Aluno';

                            $nomes =
                                explode(
                                    ' ',
                                    trim($nomeCompleto)
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

                <!-- INFORMAÇÕES -->
                <div class="overflow-hidden flex-grow-1">

                    <p
                        class="m-0 small fw-bold text-dark text-truncate"
                    >
                        {{ Auth::user()->nome
                            ?? Auth::user()->name
                            ?? 'Usuário'
                        }}
                    </p>

                    <p
                        class="m-0 text-muted text-truncate"
                        style="font-size: 11px;"
                    >
                        {{ Auth::user()->email
                            ?? 'aluno@sife.com'
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

    <!-- CONTEÚDO PRINCIPAL -->
    <main id="content">

        <!-- HERO -->
        <div class="profile-hero">

            <div class="hero-banner"></div>

            <div class="hero-body">

                <div class="d-flex align-items-end gap-4">

                    <!-- AVATAR PRINCIPAL -->
                    <div class="hero-avatar">

                        @php

                            $nomeUser =
                                Auth::user()->nome
                                ?? Auth::user()->name
                                ?? 'AL';

                            $partesNome =
                                explode(
                                    ' ',
                                    trim($nomeUser)
                                );

                            $siglaAvatar =
                                mb_substr(
                                    $partesNome[0],
                                    0,
                                    1
                                );

                            if (count($partesNome) > 1) {

                                $siglaAvatar .=
                                    mb_substr(
                                        end($partesNome),
                                        0,
                                        1
                                    );

                            }

                            echo strtoupper(
                                $siglaAvatar
                            );

                        @endphp

                    </div>

                    <!-- INFORMAÇÕES DO ALUNO -->
                    <div class="mb-2">

                        <div
                            class="d-flex align-items-center gap-2 mb-1"
                        >

                            <h1
                                class="fw-bold m-0"
                                style="
                                    letter-spacing: -1px;
                                    color: #1a202c;
                                "
                            >
                                {{ Auth::user()->nome
                                    ?? Auth::user()->name
                                    ?? 'Estudante SIFE'
                                }}
                            </h1>

                            <span class="badge-academic">
                                {{ strtoupper(
                                    Auth::user()->status
                                    ?? 'ATIVO'
                                ) }}
                            </span>

                        </div>

                        <p class="text-muted fw-medium m-0">

                            <i
                                class="fas fa-book me-1 text-danger"
                            ></i>

                            {{ Auth::user()->turma->nome
                                ?? Auth::user()->turma
                                ?? 'Turma Não Informada'
                            }}

                        </p>

                    </div>

                </div>

            </div>

        </div>

        <!-- CARDS -->
        <div class="row g-4">

            <!-- INFORMAÇÕES ACADÊMICAS -->
            <div class="col-xl-8">

                <div class="card-custom">

                    <h5 class="card-title">

                        <i class="fas fa-id-card"></i>

                        Informações Acadêmicas

                    </h5>

                    <div class="row">

                        <div class="col-md-6 info-group">

                            <label class="info-label">
                                Nome Completo
                            </label>

                            <div class="info-value">
                                {{ Auth::user()->nome
                                    ?? Auth::user()->name
                                    ?? 'Não Informado'
                                }}
                            </div>

                        </div>

                        <div class="col-md-6 info-group">

                            <label class="info-label">
                                Registro Acadêmico (RA)
                            </label>

                            <div class="info-value">
                                {{ Auth::user()->ra
                                    ?? 'Não Gerado'
                                }}
                            </div>

                        </div>

                        <div class="col-md-6 info-group">

                            <label class="info-label">
                                E-mail Institucional
                            </label>

                            <div class="info-value">
                                {{ Auth::user()->email
                                    ?? 'Não Informado'
                                }}
                            </div>

                        </div>

                        <div class="col-md-6 info-group">

                            <label class="info-label">
                                Data de Nascimento
                            </label>

                            <div class="info-value">

                                @if(!empty(Auth::user()->data_nascimento))

                                    {{ \Carbon\Carbon::parse(
                                        Auth::user()->data_nascimento
                                    )->format('d/m/Y') }}

                                @else

                                    Não cadastrada

                                @endif

                            </div>

                        </div>

                        <div class="col-md-12 info-group">

                            <label class="info-label">
                                Nome do Responsável
                            </label>

                            <div class="info-value">
                                {{ Auth::user()->nome_responsavel
                                    ?? 'Não Informado'
                                }}
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- CONTA E ACESSO -->
            <div class="col-xl-4">

                <div class="card-custom">

                    <h5 class="card-title">

                        <i class="fas fa-shield-halved"></i>

                        Conta e Acesso

                    </h5>

                    <div class="info-group">

                        <label class="info-label">
                            Status da Matrícula
                        </label>

                        <div
                            class="info-value d-flex align-items-center justify-content-between"
                        >

                            <span>
                                {{ ucfirst(
                                    Auth::user()->status
                                    ?? 'Regular'
                                ) }}
                            </span>

                            <i
                                class="fas fa-check-circle text-success"
                            ></i>

                        </div>

                    </div>

                    <div
                        class="d-flex flex-column gap-3 mt-4"
                    >

                        <!-- ALTERAR SENHA -->
                        <button
                            class="btn btn-danger w-100 py-3 rounded-4 fw-bold shadow-sm"
                            onclick="window.location.href='{{ route('password.show') }}'"
                        >
                            <i class="fas fa-key me-2"></i>
                            ALTERAR SENHA
                        </button>

                        <!-- SAIR DO PORTAL -->
                        <form
                            action="{{ route('logout') }}"
                            method="POST"
                            class="w-100"
                        >

                            @csrf

                            <button
                                type="submit"
                                class="btn btn-outline-secondary w-100 py-3 rounded-4 fw-bold"
                            >
                                <i
                                    class="fas fa-sign-out-alt me-2"
                                ></i>

                                SAIR DO PORTAL

                            </button>

                        </form>

                    </div>

                </div>

            </div>

            <!-- DESEMPENHO -->
            <div class="col-12">

                <div class="card-custom">

                    <h5 class="card-title">

                        <i class="fas fa-chart-line"></i>

                        Desempenho Geral Recente

                    </h5>

                    <div class="table-responsive">

                        <table class="table activity-table m-0">

                            <thead>

                                <tr>

                                    <th>
                                        MATÉRIA
                                    </th>

                                    <th>
                                        FREQUÊNCIA (%)
                                    </th>

                                    <th>
                                        MÉDIA ATUAL
                                    </th>

                                    <th>
                                        SITUAÇÃO
                                    </th>

                                </tr>

                            </thead>

                            <tbody>

                                @forelse($desempenho ?? [] as $materia)

                                    <tr>

                                        <td>
                                            <strong>
                                                {{ $materia->nome_materia }}
                                            </strong>
                                        </td>

                                        <td>
                                            {{ $materia->frequencia }}%
                                        </td>

                                        <td>
                                            {{ number_format(
                                                $materia->media,
                                                1,
                                                ',',
                                                '.'
                                            ) }}
                                        </td>

                                        <td>

                                            @if($materia->media >= 7.0)

                                                <span
                                                    class="badge bg-success-subtle text-success px-3 py-2 rounded-3 fw-bold"
                                                >
                                                    APROVADO
                                                </span>

                                            @elseif($materia->media >= 5.0)

                                                <span
                                                    class="badge bg-warning-subtle text-warning px-3 py-2 rounded-3 fw-bold"
                                                >
                                                    RECUPERAÇÃO
                                                </span>

                                            @else

                                                <span
                                                    class="badge bg-danger-subtle text-danger px-3 py-2 rounded-3 fw-bold"
                                                >
                                                    REPROVADO
                                                </span>

                                            @endif

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td
                                            colspan="4"
                                            class="text-center text-muted py-4"
                                        >
                                            Nenhum registro de desempenho encontrado.
                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </main>

</div>

<!-- VLIBRAS -->
<div vw class="enabled">

    <div vw-access-button class="active"></div>

    <div vw-plugin-wrapper>

        <div class="vw-plugin-top-wrapper"></div>

    </div>

</div>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
></script>

<script
    src="https://vlibras.gov.br/app/vlibras-plugin.js"
></script>

<script>
    new window.VLibras.Widget(
        'https://vlibras.gov.br/app'
    );

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

        mobileMenuBtn.classList.add('hidden');

        mobileMenuBtn.setAttribute(
            'aria-expanded',
            'true'
        );

        document.body.classList.add(
            'menu-open'
        );
    }

    function fecharMenu() {

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

    document
        .querySelectorAll('#sidebar .nav-link')
        .forEach(link => {

            link.addEventListener(
                'click',
                () => {

                    if (
                        window.innerWidth <= 768
                    ) {
                        fecharMenu();
                    }

                }
            );

        });

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

    window.addEventListener(
        'resize',
        () => {

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