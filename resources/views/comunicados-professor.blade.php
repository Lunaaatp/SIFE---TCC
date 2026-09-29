<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Comunicados - SIFE Professor</title>

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
        min-height: 100vh;
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

    /* BOTÃO X DO MENU */

    .sidebar-close {
        display: none;
        margin-left: auto;
        width: 38px;
        height: 38px;
        border: none;
        border-radius: 12px;
        background: #f4f7f9;
        color: #4a5568;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 1rem;
    }

    .sidebar-close:hover {
        background: #edf2f7;
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

    .nav-link:hover {
        background: var(--primary-red-soft);
        color: var(--primary-red);
    }

    .nav-link:hover i {
        color: var(--primary-red);
    }

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
        border-radius: 15px;
        background: var(--primary-red-soft);
        color: inherit;
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
        min-width: 0;
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

    /* =========================
       FORMULÁRIO
    ========================= */

    .form-label {
        font-size: 0.75rem;
        font-weight: 800;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-control,
    .form-select {
        border-radius: 12px;
        padding: 12px;
        border: 1px solid var(--border-color);
        font-weight: 500;
    }

    .form-control:focus,
    .form-select:focus {
        box-shadow: none;
        border-color: var(--primary-red);
    }

    textarea.form-control {
        resize: vertical;
        min-height: 130px;
    }

    /* =========================
       BOTÃO
    ========================= */

    .btn-send {
        background: var(--primary-red);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 15px;
        font-weight: 700;
        box-shadow: 0 4px 15px rgba(211, 47, 47, 0.2);
        transition: 0.3s;
    }

    .btn-send:hover {
        background: var(--primary-red-hover);
        color: white;
        transform: translateY(-2px);
    }

    /* =========================
       COMUNICADOS
    ========================= */

    .announcement-item {
        padding: 20px;
        border-radius: 18px;
        background: #fff;
        border: 1px solid var(--border-color);
        margin-bottom: 15px;
        transition: 0.3s;
    }

    .announcement-item:hover {
        border-color: #f5c6c6;
        background: #fafafa;
    }

    .tag-turma {
        font-size: 0.65rem;
        font-weight: 800;
        padding: 5px 10px;
        border-radius: 8px;
        background: var(--primary-red-soft);
        color: var(--primary-red);
        text-transform: uppercase;
    }

    .announcement-date {
        font-size: 0.75rem;
        color: #a0aec0;
        font-weight: 600;
    }

    /* =========================
       ALERTAS
    ========================= */

    .alert {
        border-radius: 12px;
        border: none;
    }

    /* =========================
       RESPONSIVO
    ========================= */

    @media (max-width: 1100px) {
        .wrapper {
            display: flex;
            flex-direction: row;
            min-height: 100vh;
        }

        #sidebar {
            position: sticky;
            top: 0;
            width: var(--sidebar-width);
            min-width: var(--sidebar-width);
            height: 100vh;
        }

        #content {
            padding: 25px;
        }
    }

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
    }

    @media (max-width: 600px) {
        #content {
            padding: 85px 15px 30px;
        }

        .page-title {
            font-size: 1.4rem;
        }

        .card-custom {
            padding: 18px;
        }
    }
</style>


</head>

<body>

<div class="wrapper">


<!-- BOTÃO MENU MOBILE -->
<button
    type="button"
    class="mobile-menu-btn"
    id="mobileMenuBtn"
    aria-label="Abrir menu"
    aria-expanded="false"
>
    <i class="fas fa-bars"></i>
</button>

<!-- OVERLAY MOBILE -->
<div
    class="mobile-overlay"
    id="mobileOverlay"
></div>

<!-- =====================================
     SIDEBAR
====================================== -->

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
            <i class="fas fa-times"></i>
        </button>

    </div>

    <!-- MENU -->
    <div class="nav-menu">

        <div class="menu-category">
            Gestão
        </div>

        <!-- DASHBOARD -->
        <a
            href="{{ url('/painel-professor') }}"
            class="nav-link"
        >
            <i class="fas fa-th-large"></i>

            <span>
                Dashboard
            </span>
        </a>

        <!-- TURMAS -->
        <a
            href="{{ url('/turmas-professor') }}"
            class="nav-link"
        >
            <i class="fas fa-users"></i>

            <span>
                Minhas Turmas
            </span>
        </a>

        <!-- NOTAS -->
        <a
            href="{{ url('/notas-professor') }}"
            class="nav-link"
        >
            <i class="fas fa-edit"></i>

            <span>
                Lançar Notas
            </span>
        </a>

        <!-- FREQUÊNCIA -->
        <a
            href="{{ url('/frequencia-professor') }}"
            class="nav-link"
        >
            <i class="fas fa-calendar-check"></i>

            <span>
                Frequência
            </span>
        </a>

        <div class="menu-category">
            Conteúdo
        </div>

        <!-- MATERIAIS -->
        <a
            href="{{ url('/materiais-professor') }}"
            class="nav-link"
        >
            <i class="fas fa-file-upload"></i>

            <span>
                Materiais
            </span>
        </a>

        <!-- COMUNICADOS -->
        <a
            href="{{ url('/comunicados-professor') }}"
            class="nav-link active"
        >
            <i class="fas fa-bullhorn"></i>

            <span>
                Comunicados
            </span>
        </a>

    </div>

    <!-- =====================================
         PERFIL + BOTÃO SAIR
    ====================================== -->

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
                            preg_split(
                                '/\s+/',
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
                    @endphp

                    {{ strtoupper(
                        $primeiraLetra .
                        $segundaLetra
                    ) }}

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
                        : 'Professor'
                    }}

                </p>

            </div>

            <!-- BOTÃO DE SAIR -->
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
    <header class="mb-4">

        <p
            class="text-muted fw-bold mb-1"
            style="
                font-size: 0.75rem;
                text-transform: uppercase;
            "
        >
            Mural de Avisos
        </p>

        <h2 class="page-title">
            Comunicados
        </h2>

    </header>

    <!-- MENSAGEM DE SUCESSO -->
    @if(session('success'))

        <div class="alert alert-success">

            <i class="fas fa-check-circle me-2"></i>

            {{ session('success') }}

        </div>

    @endif

    <!-- MENSAGEM DE ERRO -->
    @if(session('erro'))

        <div class="alert alert-danger">

            <i class="fas fa-exclamation-circle me-2"></i>

            {{ session('erro') }}

        </div>

    @endif

    <!-- ERROS DE VALIDAÇÃO -->
    @if($errors->any())

        <div class="alert alert-danger">

            <strong>
                Verifique os dados:
            </strong>

            <ul class="mb-0 mt-2">

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif

    <div class="row">

        <!-- =================================
             NOVO COMUNICADO
        ================================== -->

        <div class="col-lg-5">

            <div class="card-custom">

                <h6 class="fw-bold mb-4">

                    <i
                        class="fas fa-bullhorn me-2"
                        style="color: #d32f2f;"
                    ></i>

                    Novo Comunicado

                </h6>

                <!-- FORM -->

                <form
                    method="POST"
                    action="{{ url('/comunicados-professor') }}"
                >

                    @csrf

                    <!-- TURMA -->

                    <div class="mb-3">

                        <label class="form-label">
                            Para qual turma?
                        </label>

                        <select
                            class="form-select"
                            name="turma_id"
                        >

                            <option value="">
                                Todas as Turmas
                            </option>

                            @forelse($turmas as $turma)

                                <option
                                    value="{{ $turma->id_turma }}"
                                    {{ old('turma_id') == $turma->id_turma ? 'selected' : '' }}
                                >
                                    {{ $turma->nome_turma }}
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

                    </div>

                    <!-- TÍTULO -->

                    <div class="mb-3">

                        <label class="form-label">
                            Título do Aviso
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            name="titulo"
                            value="{{ old('titulo') }}"
                            maxlength="255"
                            placeholder="Digite o título do comunicado"
                            required
                        >

                    </div>

                    <!-- MENSAGEM -->

                    <div class="mb-4">

                        <label class="form-label">
                            Mensagem
                        </label>

                        <textarea
                            class="form-control"
                            rows="5"
                            name="mensagem"
                            placeholder="Digite a mensagem que será enviada aos alunos..."
                            required
                        >{{ old('mensagem') }}</textarea>

                    </div>

                    <!-- BOTÃO -->

                    <button
                        type="submit"
                        class="btn btn-send w-100"
                    >

                        <i class="fas fa-paper-plane me-2"></i>

                        ENVIAR AOS ALUNOS

                    </button>

                </form>

            </div>

        </div>

        <!-- =================================
             COMUNICADOS ENVIADOS
        ================================== -->

        <div class="col-lg-7">

            <div class="card-custom">

                <h6 class="fw-bold mb-4">

                    <i
                        class="fas fa-history me-2"
                        style="color: #d32f2f;"
                    ></i>

                    Enviados Recentemente

                </h6>

                @forelse(($comunicados ?? collect()) as $comunicado)

                    <div class="announcement-item">

                        <div
                            class="d-flex justify-content-between align-items-start mb-2"
                        >

                            <!-- TURMA -->

                            <span class="tag-turma">

                                @if(
                                    isset($comunicado->turma)
                                    &&
                                    $comunicado->turma
                                )

                                    {{
                                        $comunicado->turma->nome_turma
                                        ??
                                        $comunicado->turma->nome
                                        ??
                                        'Turma'
                                    }}

                                @else

                                    Todas as Turmas

                                @endif

                            </span>

                            <!-- DATA -->

                            <small class="announcement-date">

                                @if(isset($comunicado->created_at))

                                    {{
                                        \Carbon\Carbon::parse(
                                            $comunicado->created_at
                                        )->format(
                                            'd/m/Y H\:i'
                                        )
                                    }}

                                @endif

                            </small>

                        </div>

                        <!-- TÍTULO -->

                        <h6 class="fw-bold text-dark mb-2">

                            {{ $comunicado->titulo }}

                        </h6>

                        <!-- MENSAGEM -->

                        <p class="text-muted small mb-0">

                            {{ $comunicado->mensagem }}

                        </p>

                    </div>

                @empty

                    <div class="alert alert-info mb-0">

                        <i class="fas fa-info-circle me-2"></i>

                        Nenhum comunicado enviado.

                    </div>

                @endforelse

            </div>

        </div>

    </div>

</main>


</div>

<!-- =====================================
     JAVASCRIPT DO MENU MOBILE
====================================== -->

<script>
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const sidebar = document.getElementById('sidebar');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const sidebarClose = document.getElementById('sidebarClose');

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

                document.body.classList.remove(
                    'menu-open'
                );
            }

        }
    );
</script>

<!-- =====================================
     BOOTSTRAP
====================================== -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
></script>

<!-- =====================================
     VLibras
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
