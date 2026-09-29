    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SIFE - Perfil do Usuário</title>
        
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
                --text-muted: #a0aec0;
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

            /* --- SIDEBAR (PADRÃO SIFE) --- */
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
            }

            .sidebar-header { padding: 10px 15px 30px; display: flex; align-items: center; gap: 12px; }
            .logo-box {
                background: var(--primary-red); color: white; width: 42px; height: 42px;
                display: flex; align-items: center; justify-content: center; border-radius: 12px;
                font-size: 1.4rem; box-shadow: 0 4px 12px rgba(211, 47, 47, 0.2);
            }

            .nav-menu { display: flex; flex-direction: column; gap: 6px; }
            .menu-label { font-size: 0.7rem; font-weight: 700; color: #adb5bd; text-transform: uppercase; letter-spacing: 1px; margin: 20px 0 10px 15px; }
            
            .nav-link {
                display: flex; align-items: center; gap: 14px; padding: 12px 18px;
                color: #4a5568; font-weight: 500; text-decoration: none; border-radius: 14px; transition: 0.2s;
            }
            .nav-link i { width: 22px; font-size: 1.1rem; color: #a0aec0; }
            .nav-link:hover, .nav-link.active { background-color: var(--primary-red-soft); color: var(--primary-red); }
            .nav-link.active i { color: var(--primary-red); }

            /* --- CONTEÚDO PRINCIPAL --- */
            #content { flex-grow: 1; padding: 40px; overflow-y: auto; }

            .card-custom {
                background: white; border-radius: 20px; border: 1px solid var(--border-color);
                box-shadow: var(--card-shadow); padding: 24px; margin-bottom: 24px;
            }

            /* --- COMPONENTES DO PERFIL --- */
            .profile-hero {
                background: white; border-radius: 24px; overflow: hidden;
                border: 1px solid var(--border-color); box-shadow: var(--card-shadow); margin-bottom: 30px;
            }
            .hero-banner { height: 160px; background: linear-gradient(135deg, var(--primary-red) 0%, #ef5350 100%); }
            .hero-body { padding: 0 35px 30px; margin-top: -55px; display: flex; align-items: flex-end; justify-content: space-between; flex-wrap: wrap; gap: 20px; }
            
            .hero-avatar {
                width: 120px; height: 120px; background: var(--primary-red); color: white;
                border: 6px solid white; border-radius: 28px; display: flex;
                align-items: center; justify-content: center; font-size: 3rem; font-weight: 800;
                box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            }

            .card-title { font-size: 1.1rem; font-weight: 700; color: #1a202c; margin-bottom: 20px; display: flex; align-items: center; gap: 10px; }
            .card-title i { color: var(--primary-red); }

            .info-group { margin-bottom: 18px; }
            .info-label { font-size: 0.72rem; font-weight: 700; color: #a0aec0; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px; }
            .info-value { 
                background: #f8fafc; border: 1px solid #edf2f7; border-radius: 12px; 
                padding: 12px 16px; font-weight: 600; color: #2d3748; font-size: 0.95rem;
            }

            /* Tabela de Logs */
            .activity-table thead th { background: #f8fafc; border: none; font-size: 0.75rem; color: #718096; padding: 14px; text-transform: uppercase; letter-spacing: 0.5px; }
            .activity-table tbody td { padding: 14px; border-bottom: 1px solid #f1f5f9; font-size: 0.88rem; font-weight: 500; }
            .status-pill { padding: 4px 10px; border-radius: 6px; font-size: 0.75rem; font-weight: 700; }

            @media (max-width: 992px) { #sidebar { display: none; } #content { padding: 20px; } }
        </style>
    </head>
    <body>

    <div class="wrapper">
        <!-- SIDEBAR (PADRÃO SIFE) -->
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
                <a href="{{route('index')}}" class="nav-link"><i class="far fa-calendar-alt"></i> <span>Eventos</span></a>
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
                        <p class="m-0 text-truncate" style="font-size: 11px; color: {{ $isProfilePage ? 'rgba(255,255,255,0.85)' : '#a0aec0' }};">
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
            <!-- BANNER DE PERFIL -->
            <div class="profile-hero">
                <div class="hero-banner"></div>
                <div class="hero-body">
                    <div class="d-flex align-items-end gap-3">
                        <div class="hero-avatar">{{ $iniciaisSife }}</div>
                        <div class="mb-1">
                            <h2 class="fw-bold m-0" style="letter-spacing: -0.5px;">{{ $nomeSife }}</h2>
                            <p class="text-muted fw-medium m-0 small"><i class="fas fa-shield-alt me-1 text-danger"></i> Administrador de Sistema</p>
                        </div>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="btn btn-danger px-4 py-2 rounded-3 fw-bold shadow-sm d-inline-flex align-items-center gap-2">
                        <i class="fas fa-user-edit"></i> Editar Perfil
                    </a>
                </div>
            </div>

            <div class="row g-4">
                <!-- DADOS PESSOAIS -->
                <div class="col-xl-8">
                    <div class="card-custom">
                        <h5 class="card-title"><i class="fas fa-address-card"></i> Informações Cadastrais</h5>
                        <div class="row">
                            <div class="col-md-6 info-group">
                                <label class="info-label">Nome Completo</label>
                                <div class="info-value">{{ $nomeSife }}</div>
                            </div>
                            <div class="col-md-6 info-group">
                                <label class="info-label">E-mail Institucional</label>
                                <div class="info-value">{{ $emailSife }}</div>
                            </div>
                            <div class="col-md-6 info-group">
                                <label class="info-label">CPF</label>
                                <div class="info-value">000.444.888-XX</div>
                            </div>
                            <div class="col-md-6 info-group">
                                <label class="info-label">WhatsApp / Contato</label>
                                <div class="info-value">(11) 98765-4321</div>
                            </div>
                            <div class="col-md-12 info-group">
                                <label class="info-label">Endereço Registrado</label>
                                <div class="info-value">Av. Paulista, 1000 - Bela Vista, São Paulo - SP</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PERMISSÕES E SEGURANÇA -->
                <div class="col-xl-4">
                    <div class="card-custom">
                        <h5 class="card-title"><i class="fas fa-shield-halved"></i> Segurança</h5>
                        <div class="info-group">
                            <label class="info-label">Nível de Permissão</label>
                            <div class="info-value d-flex align-items-center justify-content-between">
                                <span>Acesso Root</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                        </div>
                        <div class="info-group">
                            <label class="info-label">Última Atividade</label>
                            <div class="info-value">Hoje, às 08:19</div>
                        </div>
                        
                        <hr class="my-4" style="border-color: var(--border-color);">
                        
                        <div class="d-flex flex-column gap-2">
                                <i class="fas fa-key"></i> Alterar Senha
                            </a>
                        </div>
                    </div>
                </div>

                <!-- LOGS DE ATIVIDADE -->
                <div class="col-12">
                    <div class="card-custom p-0 overflow-hidden">
                        <div class="p-4 border-bottom">
                            <h5 class="card-title m-0"><i class="fas fa-list-check"></i> Histórico Recente de Ações</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table activity-table m-0">
                                <thead>
                                    <tr>
                                        <th>Ação Realizada</th>
                                        <th>Data e Hora</th>
                                        <th>Endereço IP</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Acessou Relatório de Frequência - Turma A</td>
                                        <td>Hoje, 08:10</td>
                                        <td>177.124.55.10</td>
                                        <td><span class="status-pill bg-success text-white">Concluído</span></td>
                                    </tr>
                                    <tr>
                                        <td>Atualizou Cadastro do Aluno: #552</td>
                                        <td>Ontem, 16:45</td>
                                        <td>177.124.55.10</td>
                                        <td><span class="status-pill bg-primary text-white">Modificado</span></td>
                                    </tr>
                                    <tr>
                                        <td>Alteração na chave de segurança do perfil</td>
                                        <td>04/08/2026, 09:20</td>
                                        <td>189.12.0.4</td>
                                        <td><span class="status-pill bg-warning text-dark">Segurança</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <x-acessibilidade />


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