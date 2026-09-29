<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIFE - Sistema de Frequência</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-red: #d32f2f;
            --primary-red-hover: #b71c1c;
            --primary-red-soft: #fff5f5;
            --bg-light: #f8f9fa;
            --sidebar-width: 280px;
            --text-dark: #2d3436;
            --border-color: #edf2f7;
            --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-dark);
            margin: 0;
        }

        .wrapper { display: flex; min-height: 100vh; }

        /* --- SIDEBAR MODERNA --- */
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

        .nav-menu { display: flex; flex-direction: column; gap: 6px; flex: 1; }

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
            transition: all 0.2s;
        }

        .nav-link i { width: 22px; font-size: 1.1rem; color: #a0aec0; }

        .nav-link:hover {
            background-color: var(--primary-red-soft);
            color: var(--primary-red);
        }

        .nav-link:hover i { color: var(--primary-red); }

        .nav-link.active {
            background-color: var(--primary-red-soft);
            color: var(--primary-red);
            font-weight: 600;
        }

        .nav-link.active i { color: var(--primary-red); }

        /* --- PERFIL E LOGOUT PADRONIZADOS --- */
        .sidebar-footer {
    margin-top: auto;
    padding-top: 15px;
    border-top: 1px solid var(--border-color, #edf2f7);
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
        .user-profile-item:hover { background:#ffe5e5; transform:translateY(-1px); }
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
        .logout-container { margin-top:12px; }
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

        /* --- CONTEÚDO PRINCIPAL --- */
        #content { flex-grow: 1; padding: 40px; overflow-y: auto; }

        .top-navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        /* CARDS E STATS */
        .card-custom {
            background: white;
            border-radius: 20px;
            border: 1px solid var(--border-color);
            box-shadow: var(--card-shadow);
            padding: 24px;
            margin-bottom: 24px;
        }

        .stat-card {
            text-align: center;
            padding: 20px;
        }

        .stat-title { font-size: 0.75rem; font-weight: 700; color: #94a3b8; text-transform: uppercase; }
        .stat-value { font-size: 2rem; font-weight: 800; margin-top: 5px; }

        /* TABELA DE ALUNOS */
        .student-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px;
            border-bottom: 1px solid var(--border-color);
            transition: background 0.2s;
        }

        .student-row:last-child { border-bottom: none; }
        .student-row:hover { background: #fafafa; border-radius: 12px; }

        .student-info { display: flex; align-items: center; gap: 15px; }
        .student-info img { width: 45px; height: 45px; border-radius: 12px; }

        /* BOTÕES DE STATUS */
        .btn-status {
            border-radius: 10px;
            padding: 8px 20px;
            font-size: 0.85rem;
            font-weight: 600;
            min-width: 120px;
            border: 1px solid transparent;
            transition: 0.2s;
        }

        .btn-presente { background: #e6fcf5; color: #0ca678; border-color: #b2f2bb; }
        .btn-ausente { background: #fff5f5; color: #fa5252; border-color: #ffc9c9; }

        .progress { height: 8px; border-radius: 10px; background: #edf2f7; margin-top: 10px; }

        /* =========================
           RESPONSIVO (TABLET)
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
           MENU SANDUÍCHE (MOBILE)
        ========================= */

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

            /* Sidebar vira painel deslizante (overlay) */
            #sidebar {
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

            .sidebar-header {
                display: flex;
            }

            .sidebar-close-btn {
                display: flex;
            }

            /* Conteúdo ocupa toda a largura, com espaço para o botão sanduíche */
            #content {
                width: 100%;
                padding: 90px 16px 30px;
                overflow-y: visible;
            }

            .top-navbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

        }
    </style>
</head>
<body>

<!-- =========================
     BOTÃO SANDUÍCHE (MOBILE)
========================= -->

<button class="hamburger-btn" id="hamburgerBtn" aria-label="Abrir menu" type="button">
    <i class="fas fa-bars"></i>
</button>

<div class="sidebar-overlay" id="sidebarOverlay"></div>

<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <div class="logo-box"><i class="fas fa-graduation-cap"></i></div>
            <h4 class="fw-bold m-0">SIFE</h4>
            <button class="sidebar-close-btn" id="sidebarCloseBtn" aria-label="Fechar menu" type="button">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="nav-menu">
            <span class="menu-label">Principal</span>
            <a href="{{route('frequencia')}}" class="nav-link active"><i class="fas fa-calendar-check"></i> <span>Frequência</span></a>
            <a href="{{route('table')}}" class="nav-link"><i class="fas fa-users-rectangle"></i> <span>Turmas</span></a>
            <a href="{{route('typography')}}" class="nav-link"><i class="fas fa-user-graduate"></i> <span>Alunos</span></a>
            <a href="{{route('widget')}}" class="nav-link"><i class="fas fa-chart-line"></i> <span>Dashboard</span></a>

            <span class="menu-label">Administrativo</span>
            <a href="{{route('index')}}" class="nav-link"><i class="far fa-calendar-alt"></i> <span>Eventos</span></a>
            <a href="{{route('chart')}}" class="nav-link"><i class="far fa-bell"></i> <span>Notificações</span></a>
            <a href="{{route('button')}}" class="nav-link"><i class="far fa-file-alt"></i> <span>Relatórios</span></a>
        </div>

        <div class="sidebar-footer">
    @php
        if(Auth::check()) {
            $nomeCompleto = Auth::user()->nome ?? Auth::user()->name ?? 'Coordenador';
            $nomesSife = preg_split('/\s+/', trim($nomeCompleto));
            $pLetraSife = mb_substr($nomesSife[0] ?? 'C', 0, 1);
            $sLetraSife = isset($nomesSife[1]) ? mb_substr($nomesSife[1], 0, 1) : '';
            $iniciaisSife = strtoupper($pLetraSife . $sLetraSife);
            $nomeSife = $nomeCompleto;
            $emailSife = Auth::user()->email ?? 'coordenacao@sife.com';
        } else {
            $iniciaisSife = 'CC';
            $nomeSife = 'Coordenador';
            $emailSife = 'coordenacao@sife.com';
        }
    @endphp

    <div class="user-profile-item">
        <div class="avatar-circle">
            {{ $iniciaisSife }}
        </div>

        <div class="overflow-hidden flex-grow-1">
            <p class="m-0 small fw-bold text-dark text-truncate">
                {{ $nomeSife }}
            </p>
            <p class="m-0 text-muted text-truncate" style="font-size: 11px;">
                {{ $emailSife }}
            </p>
        </div>

        <form action="{{ route('logout') }}" method="POST" class="m-0">
            @csrf
            <button type="submit" class="btn-logout-sidebar" title="Sair da Conta">
                <i class="fas fa-right-from-bracket"></i>
            </button>
        </form>
    </div>
</div>

</nav>

    <main id="content">
        <header class="top-navbar">
            <div>
                <h3 class="fw-bold m-0">Consulta de Frequência</h3>
                <p class="text-muted m-0 small">Painel de Acompanhamento Geral</p>
            </div>
            <div class="text-end">
                <span class="badge bg-secondary px-3 py-2 rounded-3"><i class="fas fa-lock me-1"></i> Modo Visualização</span>
            </div>
        </header>

        <div class="card-custom py-3 px-4 mb-4">
            <form method="GET" action="{{ route('frequencia') }}" id="formDataFrequencia">
                <div class="row g-3 align-items-end">

                    <div class="col-md-4">
                        <label class="form-label small fw-bold text-muted mb-0 text-uppercase">
                            TURMA SELECIONADA
                        </label>
<select name="id_turma"
        onchange="this.form.submit()"
        class="form-select border-0 bg-light rounded-3 shadow-none fw-medium py-2">

    @forelse($todasTurmas as $turma)
        <option value="{{ $turma->id_turma }}" 
            {{ (request('id_turma', $id_turma ?? '') == $turma->id_turma) ? 'selected' : '' }}>
            {{ $turma->nome_turma }} 
            {{ !empty($turma->serie) ? '- ' . $turma->serie : '' }} 
            {{ !empty($turma->periodo) ? '(' . $turma->periodo . ')' : '' }}
        </option>
    @empty
        <option value="" disabled selected>Nenhuma turma cadastrada no banco</option>
    @endforelse

</select>
                    </div>

                    <div class="col-md-4">
                        <label for="data_filtro" class="form-label small fw-bold text-muted mb-0 text-uppercase">
                            <i class="far fa-calendar-alt me-1 text-danger"></i>
                            DATA DA CHAMADA
                        </label>

                        <input
                            type="date"
                            id="data_filtro"
                            name="data"
                            value="{{ request('data', date('Y-m-d')) }}"
                            onchange="this.form.submit()"
                            class="form-control border-0 bg-light rounded-3 shadow-none fw-medium py-2">
                    </div>

                </div>
            </form>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="card-custom stat-card mb-0">
                    <span class="stat-title">Total Alunos</span>
                    <div class="stat-value" id="statTotal">{{ $totalAlunos }}</div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-custom stat-card mb-0">
                    <span class="stat-title text-success">Presentes</span>
                    <div class="stat-value text-success" id="statPresentes">{{ $presentes }}</div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-custom stat-card mb-0">
                    <span class="stat-title text-danger">Ausentes</span>
                    <div class="stat-value text-danger" id="statAusentes">{{ $totalAusentes }}</div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-custom stat-card mb-0">
                    <span class="stat-title">Aproveitamento</span>
                    <div class="stat-value" id="statTaxa">{{ $aproveitamento }}%</div>
                    <div class="progress mt-2">
                        <div id="progressBar" class="progress-bar bg-success" style="width: {{ $aproveitamento }}%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-custom p-0 overflow-hidden">
            <div class="bg-light p-3 border-bottom d-flex justify-content-between">
                <span class="small fw-bold text-muted">IDENTIFICAÇÃO DO ALUNO</span>
                <span class="small fw-bold text-muted">STATUS ATUAL</span>
            </div>
            <div id="listaAlunos">
                @foreach($alunos as $aluno)
                    <div class="student-row" data-id="{{ $aluno->id_aluno }}">
                        <div class="student-info">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($aluno->nome) }}&background=E3F2FD&color=1565C0" alt="">
                            <div>
                                <p class="m-0 fw-bold">{{ $aluno->nome }}</p>
                                <small class="text-muted">Mat: {{ $aluno->id_aluno }}</small>
                            </div>
                        </div>

                        @if($aluno->status == 'Falta')
                            <button class="btn-status btn-ausente pe-none">
                                Ausente
                            </button>
                        @else
                            <button class="btn-status btn-presente pe-none">
                                Presente
                            </button>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<x-acessibilidade />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- =========================
     MENU SANDUÍCHE (MOBILE)
========================= -->

<script>

    (function () {

        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        const closeBtn = document.getElementById('sidebarCloseBtn');

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

        hamburgerBtn.addEventListener('click', function () {

            if (sidebar.classList.contains('active')) {
                closeMenu();
            } else {
                openMenu();
            }

        });

        overlay.addEventListener('click', closeMenu);
        closeBtn.addEventListener('click', closeMenu);

        document
            .querySelectorAll('#sidebar .nav-link')
            .forEach(function (link) {
                link.addEventListener('click', closeMenu);
            });

    })();

</script>
<div vw class="enabled"><div vw-access-button class="active"></div><div vw-plugin-wrapper><div class="vw-plugin-top-wrapper"></div></div></div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
</body>
</html>