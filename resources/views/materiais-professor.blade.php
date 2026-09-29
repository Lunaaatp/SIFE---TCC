<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Materiais - SIFE Professor</title>

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
        --text-muted: #718096;
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

    body.menu-open {
        overflow: hidden;
    }

    .wrapper {
        display: flex;
        min-height: 100vh;
    }

    /* ==========================
       SIDEBAR
    ========================== */

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

    .nav-link:hover i,
    .nav-link.active i {
        color: var(--primary-red);
    }

    /* ==========================
       SIDEBAR FOOTER
    ========================== */

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

    /* ==========================
       BOTÃO FECHAR MENU MOBILE
    ========================== */

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

    /* ==========================
       BOTÃO MENU MOBILE
    ========================== */

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

    /* ==========================
       CONTEÚDO
    ========================== */

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

    /* ==========================
       ARQUIVOS
    ========================== */

    .file-card {
        background: white;
        border-radius: 18px;
        border: 1px solid var(--border-color);
        padding: 20px;
        transition: 0.3s;
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
    }

    .file-card:last-child {
        margin-bottom: 0;
    }

    .file-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
    }

    .file-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        flex-shrink: 0;
    }

    .icon-pdf {
        background: #fff1f0;
        color: #ff4d4f;
    }

    .icon-doc {
        background: #e6f7ff;
        color: #1890ff;
    }

    .icon-zip {
        background: #f9f0ff;
        color: #722ed1;
    }

    .icon-file {
        background: #f1f5f9;
        color: #64748b;
    }

    /* ==========================
       BOTÃO NOVO ARQUIVO
    ========================== */

    .btn-upload-main {
        background: var(--primary-red);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 15px;
        font-weight: 700;
        box-shadow: 0 4px 15px rgba(211, 47, 47, 0.2);
        text-decoration: none;
        transition: 0.3s;
    }

    .btn-upload-main:hover {
        background: var(--primary-red-hover);
        color: white;
        transform: translateY(-2px);
    }

    /* ==========================
       BOTÕES DOS ARQUIVOS
    ========================== */

    .file-action {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.25s;
        cursor: pointer;
        text-decoration: none;
    }

    .download-action {
        background: #f8f9fa;
        color: #495057;
    }

    .download-action:hover {
        background: #e9ecef;
        color: #212529;
    }

    .delete-action {
        background: #fff5f5;
        color: #d32f2f;
    }

    .delete-action:hover {
        background: #d32f2f;
        color: white;
    }

    .alert {
        border-radius: 15px;
    }

    /* ==========================
       RESPONSIVIDADE TABLET
    ========================== */

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
    }

    /* ==========================
       MENU MOBILE
    ========================== */

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

    /* ==========================
       MOBILE PEQUENO
    ========================== */

    @media (max-width: 600px) {

        .file-card {
            padding: 15px;
        }

        .page-title {
            font-size: 1.4rem;
        }

        .btn-upload-main {
            padding: 10px 15px;
            font-size: 0.8rem;
        }

        #content {
            padding: 85px 15px 30px;
        }

        .file-card {
            align-items: flex-start;
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


<!-- =========================================
     SIDEBAR
========================================== -->

<nav id="sidebar">

    <!-- LOGO -->

    <div class="sidebar-brand">

        <div class="brand-icon">
            <i class="fas fa-chalkboard-teacher"></i>
        </div>

        <span class="brand-name">
            SIFE
        </span>

        <!-- BOTÃO FECHAR -->

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


        <a
            href="{{ route('materiais-professor') }}"
            class="nav-link active"
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


    <!-- =========================================
         PERFIL + SAIR
    ========================================== -->

    <div class="sidebar-footer">

        <!-- CARD DO PERFIL -->

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

                    @endphp

                    {{ strtoupper(
                        $primeiraLetra .
                        $segundaLetra
                    ) }}

                @else

                    PR

                @endif

            </div>


            <!-- DADOS DO PROFESSOR -->

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


            <!-- =====================================
                 BOTÃO SAIR
            ====================================== -->

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


<!-- =========================================
     CONTEÚDO
========================================== -->

<main id="content">

    <!-- CABEÇALHO -->

    <header
        class="d-flex justify-content-between align-items-end mb-4"
    >

        <div>

            <p
                class="text-muted fw-bold mb-1"
                style="
                    font-size: 0.75rem;
                    text-transform: uppercase;
                "
            >
                Repositório
            </p>

            <h2 class="page-title">
                Materiais de Aula
            </h2>

        </div>


        <!-- NOVO ARQUIVO -->

        <a
            class="btn btn-upload-main"
            href="{{ route('materiais-professor-adicionar') }}"
        >
            <i class="fas fa-plus me-2"></i>
            NOVO ARQUIVO
        </a>

    </header>


    <!-- =========================================
         MENSAGEM DE SUCESSO
    ========================================== -->

    @if(session('success'))

        <div
            class="alert alert-success alert-dismissible fade show"
            role="alert"
        >

            <i class="fas fa-check-circle me-2"></i>

            {{ session('success') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
            ></button>

        </div>

    @endif


    <!-- =========================================
         MENSAGEM DE ERRO
    ========================================== -->

    @if(session('error'))

        <div
            class="alert alert-danger alert-dismissible fade show"
            role="alert"
        >

            <i class="fas fa-exclamation-circle me-2"></i>

            {{ session('error') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
            ></button>

        </div>

    @endif


    <!-- =========================================
         MATERIAIS DO BANCO
    ========================================== -->

    <div class="card-custom">

        <!-- CABEÇALHO -->

        <div
            class="d-flex justify-content-between align-items-center mb-4"
        >

            <h6 class="fw-bold m-0">
                Arquivos Recentes
            </h6>


            <span class="badge bg-light text-muted rounded-pill">

                {{ isset($materiais)
                    ? $materiais->count()
                    : 0
                }}

                {{ isset($materiais) &&
                   $materiais->count() == 1
                    ? 'Arquivo'
                    : 'Arquivos'
                }}

            </span>

        </div>


        <!-- LISTA -->

        @if(isset($materiais) && $materiais->count() > 0)

            @foreach($materiais as $material)

                @php

                    $arquivo =
                        $material->arquivo ?? '';

                    $extensao =
                        strtolower(
                            pathinfo(
                                $arquivo,
                                PATHINFO_EXTENSION
                            )
                        );

                    $iconeClasse =
                        'icon-file';

                    $icone =
                        'fa-file';


                    if ($extensao === 'pdf') {

                        $iconeClasse =
                            'icon-pdf';

                        $icone =
                            'fa-file-pdf';

                    } elseif (

                        in_array(
                            $extensao,
                            ['doc', 'docx']
                        )

                    ) {

                        $iconeClasse =
                            'icon-doc';

                        $icone =
                            'fa-file-word';

                    } elseif (

                        in_array(
                            $extensao,
                            ['zip', 'rar']
                        )

                    ) {

                        $iconeClasse =
                            'icon-zip';

                        $icone =
                            'fa-file-archive';

                    }

                @endphp


                <div class="file-card">

                    <!-- ÍCONE -->

                    <div class="file-icon {{ $iconeClasse }}">

                        <i class="fas {{ $icone }}"></i>

                    </div>


                    <!-- INFORMAÇÕES -->

                    <div class="flex-grow-1">

                        <h6
                            class="fw-bold m-0"
                            style="font-size: 0.9rem;"
                        >

                            {{ $material->titulo
                                ?? 'Material sem título'
                            }}

                        </h6>


                        <p
                            class="text-muted m-0"
                            style="font-size: 0.75rem;"
                        >

                            @if(
                                isset($material->created_at)
                                &&
                                $material->created_at
                            )

                                {{
                                    \Carbon\Carbon::parse(
                                        $material->created_at
                                    )->format(
                                        'd/m/Y H:i'
                                    )
                                }}

                            @else

                                Data não disponível

                            @endif

                        </p>

                    </div>


                    <!-- AÇÕES -->

                    <div class="d-flex gap-2">

                        @if(!empty($material->arquivo))

                            <!-- DOWNLOAD -->

                            <a
                                href="{{ asset(
                                    'storage/' .
                                    $material->arquivo
                                ) }}"
                                class="file-action download-action"
                                title="Baixar arquivo"
                                download
                            >
                                <i class="fas fa-download"></i>
                            </a>

                        @endif

                    </div>

                </div>

            @endforeach

        @else

            <div class="alert alert-info mb-0">

                <i class="fas fa-info-circle me-2"></i>

                Nenhum material encontrado.

            </div>

        @endif

    </div>

</main>


</div>

<!-- =========================================
     ACESSIBILIDADE
========================================== -->

<x-acessibilidade />

<!-- =========================================
     BOOTSTRAP JS
========================================== -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- =========================================
     MENU MOBILE
========================================== -->

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


    linksMenu.forEach(function(link) {

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

<!-- =========================================
     VLIBRAS
========================================== -->

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

</script>

</body>

</html>
