<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Evento - SIFE</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

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

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: var(--bg-light); 
            color: var(--text-dark); 
        }

        .wrapper { display: flex; min-height: 100vh; align-items: stretch; }

        /* --- SIDEBAR (PADRÃO SIFE) --- */
        #sidebar {
            width: var(--sidebar-width);
            min-width: var(--sidebar-width);
            background: #ffffff;
            border-right: 1px solid var(--border-color);
            padding: 20px 15px;
            display: flex;
            flex-direction: column;
            position: sticky;
            top: 0;
            height: 100vh;
        }

        .sidebar-header { padding: 10px 15px 30px; display: flex; align-items: center; gap: 12px; }
        .logo-box {
            background: var(--primary-red); color: white; width: 42px; height: 42px;
            display: flex; align-items: center; justify-content: center; border-radius: 12px;
            font-size: 1.4rem; box-shadow: 0 4px 12px rgba(211, 47, 47, 0.2);
        }

        .nav-menu { display: flex; flex-direction: column; gap: 6px; }
        .menu-label { font-size: 0.75rem; font-weight: 700; color: #596575; text-transform: uppercase; letter-spacing: 1px; margin: 20px 0 10px 15px; }

        .nav-link {
            display: flex; align-items: center; gap: 14px; padding: 12px 18px;
            color: #2d3436; font-weight: 500; text-decoration: none; border-radius: 14px; transition: 0.2s;
        }
        .nav-link i { width: 22px; font-size: 1.1rem; color: #718096; }
        .nav-link:hover, .nav-link.active { background-color: var(--primary-red-soft); color: var(--primary-red); }
        .nav-link.active i { color: var(--primary-red); }

        /* --- CONTEÚDO --- */
        #content { flex-grow: 1; padding: 40px; overflow-y: auto; }

        .page-header { margin-bottom: 35px; }
        .page-title { font-weight: 800; color: #1a202c; font-size: 1.75rem; letter-spacing: -1px; }

        /* Estilo para Botões Superiores */
        .header-actions { display: flex; gap: 12px; }
        .btn-cancelar {
            background: white; border: 1px solid var(--border-color);
            padding: 10px 24px; border-radius: 15px; font-weight: 600; font-size: 0.9rem;
            color: #4a5568; text-decoration: none; transition: 0.3s; display: inline-flex; align-items: center; gap: 8px;
        }
        .btn-cancelar:hover { background: #f8fafc; color: var(--text-dark); }

        /* Container do Formulário */
        .form-card-container {
            background: white; border-radius: 20px; padding: 35px;
            border: 1px solid var(--border-color); box-shadow: var(--card-shadow);
        }

        .form-label { font-weight: 700; color: #4a5568; font-size: 0.75rem; text-transform: uppercase; margin-bottom: 8px; letter-spacing: 0.5px; }
        .form-control, .form-select {
            border-radius: 12px; padding: 12px 16px; border: 1px solid var(--border-color); font-weight: 500; font-size: 0.9rem; transition: 0.3s;
        }
        .form-control:focus, .form-select:focus { border-color: var(--primary-red); outline: none; box-shadow: none; }
        textarea.form-control { resize: none; }

        /* Categorias Estilizadas */
        .category-selector { display: flex; gap: 10px; margin-bottom: 25px; flex-wrap: wrap; }
        .filter-pill {
            padding: 10px 22px; border-radius: 12px; border: 1px solid var(--border-color);
            background: white; color: var(--text-dark); font-weight: 600; font-size: 0.85rem;
            cursor: pointer; transition: 0.3s; display: inline-flex; align-items: center; gap: 8px;
        }
        .filter-pill:hover { background: #f8fafc; border-color: #cbd5e0; }
        
        .filter-pill.active.exam { background: var(--primary-red); color: white; border-color: var(--primary-red); }
        .filter-pill.active.meeting { background: #0369a1; color: white; border-color: #0369a1; }
        .filter-pill.active.holiday { background: #9d174d; color: white; border-color: #9d174d; }
        .filter-pill.active.social { background: #78350f; color: white; border-color: #78350f; }
        .filter-pill.active.other { background: #475569; color: white; 
        border-color: #475569; 
}

        .btn-submit {
            background: var(--primary-red); color: white; border: none;
            padding: 14px 35px; border-radius: 15px; font-weight: 700; font-size: 0.95rem;
            transition: 0.3s; box-shadow: 0 4px 12px rgba(211, 47, 47, 0.2);
            display: inline-flex; align-items: center; gap: 8px;
        }
        .btn-submit:hover { background: var(--primary-red-hover); transform: translateY(-1px); }

        @media (max-width: 992px) { 
            #sidebar { display: none; } 
            #content { padding: 20px; } 
            .page-header { flex-direction: column; align-items: flex-start !important; gap: 15px; }
            .header-actions { width: 100%; }
            .btn-cancelar { width: 100%; justify-content: center; }
        }
    </style>
</head>
<body>

<div class="wrapper">
    <!-- BARRA LATERAL (SIDEBAR) PADRONIZADA -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <div class="logo-box"><i class="fas fa-graduation-cap"></i></div>
            <h4 class="fw-bold m-0">SIFE</h4>
        </div>

        <div class="nav-menu">
            <span class="menu-label">Principal</span>
            <a href="{{route('frequencia')}}" class="nav-link"><i class="fas fa-calendar-check"></i> <span>Frequência</span></a>
            <a href="{{route('table')}}" class="nav-link"><i class="fas fa-users-rectangle"></i> <span>Turmas</span></a>
            <a href="{{route('typography')}}" class="nav-link"><i class="fas fa-user-graduate"></i> <span>Alunos</span></a>
            <a href="{{route('widget')}}" class="nav-link"><i class="fas fa-chart-line"></i> <span>Dashboard</span></a>

            <span class="menu-label">Administrativo</span>
            <a href="{{route('index')}}" class="nav-link active"><i class="far fa-calendar-alt"></i> <span>Eventos</span></a>
            <a href="{{route('chart')}}" class="nav-link"><i class="far fa-bell"></i> <span>Notificações</span></a>
            <a href="{{route('button')}}" class="nav-link"><i class="far fa-file-alt"></i> <span>Relatórios</span></a>
        </div>

        <div class="sidebar-footer" style="margin-top: auto; padding-top: 15px; border-top: 1px solid var(--border-color); display: flex; flex-direction: column; gap: 10px;">
            @php
                if(Auth::check()) {
                    $nomesSife = explode(' ', Auth::user()->nome);
                    $pLetraSife = mb_substr($nomesSife[0] ?? 'C', 0, 1);
                    $sLetraSife = isset($nomesSife[1]) ? mb_substr($nomesSife[1], 0, 1) : '';
                    $iniciaisSife = strtoupper($pLetraSife . $sLetraSife);
                    $nomeSife = Auth::user()->nome;
                    $emailSife = Auth::user()->email;
                } else {
                    $iniciaisSife = "CC";
                    $nomeSife = "Coordenador";
                    $emailSife = "coordenacao@sife.com";
                }
                $isProfilePage = Request::is('profile') || Request::is('profile/*');
            @endphp

            <a href="{{ route('profile') }}" 
               class="user-profile-item" 
               style="display: flex; align-items: center; gap: 12px; padding: 12px; text-decoration: none; border-radius: 15px; transition: 0.3s; background: {{ $isProfilePage ? 'var(--primary-red)' : 'var(--primary-red-soft)' }};">
                
                <div class="avatar-circle" style="width: 42px; height: 42px; flex-shrink: 0; background: {{ $isProfilePage ? '#ffffff' : 'var(--primary-red)' }}; color: {{ $isProfilePage ? 'var(--primary-red)' : '#ffffff' }}; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.85rem; border: 2px solid white; box-shadow: 0 2px 8px rgba(211,47,47,0.15);">
                    {{ $iniciaisSife }}
                </div>
                
                <div class="overflow-hidden" style="flex-grow: 1;">
                    <p class="m-0 small fw-bold text-truncate" style="color: {{ $isProfilePage ? '#ffffff' : '#2d3436' }}; font-size: 0.9rem;">
                        {{ $nomeSife }}
                    </p>
                    <p class="m-0 text-truncate" style="font-size: 11px; color: {{ $isProfilePage ? 'rgba(255,255,255,0.85)' : '#4a5568' }};">
                        {{ $emailSife }}
                    </p>
                </div>
            </a>

            <a href="#" 
               class="nav-link text-danger logout-trigger" 
               style="display: flex; align-items: center; gap: 14px; padding: 10px 18px; font-weight: 600; text-decoration: none; border-radius: 15px; transition: 0.3s; font-size: 0.9rem;"
               onclick="event.preventDefault(); document.getElementById('sidebar-logout-form').submit();">
                <i class="fas fa-sign-out-alt" style="width: 22px; font-size: 1.1rem; color: var(--primary-red);"></i> 
                <span>Sair da Conta</span>
            </a>

            <form id="sidebar-logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </nav>

    <!-- CONTEÚDO PRINCIPAL -->
    <main id="content">
        <div class="page-header d-flex justify-content-between align-items-end">
            <div>
                <p class="text-secondary fw-bold mb-1" style="font-size: 0.75rem; letter-spacing: 1px; text-transform: uppercase;">Institucional</p>
                <h1 class="page-title m-0">Criar Novo Evento</h1>
            </div>
            <div class="header-actions">
                <a href="{{ route('index') }}" class="btn-cancelar">
                    <i class="fas fa-times"></i> Cancelar
                </a>
            </div>
        </div>

        <div class="form-card-container">
            <form action="{{ route('eventos.store') }}" method="POST">
                @csrf

                <!-- Campo oculto para armazenar a categoria selecionada -->
                <input type="hidden" name="categoria" id="categoria_input" value="academic">

                <div class="row mb-4">
                    <div class="col-12">
                        <label class="form-label">Selecione a Categoria do Evento</label>
                        <div class="category-selector">
                            <button type="button" class="filter-pill active exam" data-value="academic"><i class="fas fa-graduation-cap"></i> Avaliação</button>
                            <button type="button" class="filter-pill meeting" data-value="meeting"><i class="fas fa-users"></i> Reunião</button>
                            <button type="button" class="filter-pill holiday" data-value="holiday"><i class="fas fa-leaf"></i> Feriado</button>
                            <button type="button" class="filter-pill social" data-value="social"><i class="fas fa-icons"></i> Cultura & Lazer</button>
                            <button type="button" class="filter-pill other" data-value="outros"><i class="fas fas fas fa-folder"></i> Outros</button>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-md-8">
                        <label class="form-label" for="event_title">Título do Evento</label>
                        <input type="text" id="event_title" name="titulo" class="form-control" placeholder="Ex: Prova de Biologia - Genética" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="event_target">Público Alvo</label>
                        <input type="text" id="event_target" name="publico" class="form-control" placeholder="Ex: Todos, 3º Ano A">
                    </div>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <label class="form-label" for="event_date">Data do Evento</label>
                        <input type="date" id="event_date" name="data" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="time_start">Horário de Início</label>
                        <input type="time" id="time_start" name="hora_inicio" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="time_end">Horário de Término</label>
                        <input type="time" id="time_end" name="hora_fim" class="form-control">
                    </div>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-12">
                        <label class="form-label" for="event_location">Localização ou Link da Reunião</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0 text-secondary" style="border-radius: 12px 0 0 12px;"><i class="fas fa-map-marker-alt"></i></span>
                            <input type="text" id="event_location" name="local" class="form-control border-start-0" style="border-radius: 0 12px 12px 0;" placeholder="Ex: Bloco B - Sala 04 ou Link do Google Meet" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="event_description">Informações Adicionais ou Descrição</label>
                        <textarea id="event_description" name="descricao" class="form-control" rows="4" placeholder="Adicione observações importantes para os participantes..."></textarea>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn-submit">
                        <i class="far fa-calendar-plus"></i> Agendar Evento
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Seletor de Categoria Ativa + Atualização do Input Oculto
    const pills = document.querySelectorAll('.filter-pill');
    const categoriaInput = document.getElementById('categoria_input');

    pills.forEach(pill => {
        pill.addEventListener('click', () => {
            pills.forEach(p => p.classList.remove('active'));
            pill.classList.add('active');
            categoriaInput.value = pill.getAttribute('data-value');
        });
    });
});
</script>


<!-- ADICIONE APENAS ESTA LINHA AQUI: --> <x-acessibilidade /> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> </body> </html>
 

<!-- VLibras -->
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>

<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>

<script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>
</body>
</html>