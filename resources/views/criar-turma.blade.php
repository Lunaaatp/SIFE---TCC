<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Turma | SIFE - Sistema Integrado</title>
    
    <!-- FONTAWESOME 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-red: #d32f2f;
            --primary-red-soft: #fff5f5;
            --bg-light: #f4f7f9;
            --text-dark: #1e293b;
            --text-muted: #64748b;
            --border-color: #edf2f7;
        }

        /* CORREÇÃO DO FONT-FAMILY: Não usamos !important em '*' para não quebrar a fonte dos ícones */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background-color: var(--bg-light); color: var(--text-dark); }
        .wrapper { display: flex; min-height: 100vh; }

        /* Garante que os ícones usem o FontAwesome */
        i.fa-solid, i.fa-regular, i.fa-brands, i.fas, i.far, i.fab {
            font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands" !important;
        }

        /* --- SIDEBAR PADRÃO SIFE --- */
        #sidebar {
            width: 280px; min-width: 280px; background: white;
            border-right: 1px solid var(--border-color); display: flex; flex-direction: column;
            position: sticky; top: 0; height: 100vh; z-index: 1000; padding: 20px 15px;
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
        .nav-link i { width: 22px; font-size: 1.1rem; color: #a0aec0; text-align: center; }
        .nav-link:hover, .nav-link.active { background-color: var(--primary-red-soft); color: var(--primary-red); }
        .nav-link.active i { color: var(--primary-red); }

        /* --- CONTEÚDO DO FORMULÁRIO --- */
        .main-content { flex-grow: 1; padding: 40px; }
        .form-card { background: white; border-radius: 30px; padding: 40px; border: 1px solid #edf2f7; box-shadow: 0 10px 30px rgba(0,0,0,0.02); }
        
        .section-header { display: flex; align-items: center; gap: 12px; margin-top: 10px; margin-bottom: 25px; padding-bottom: 12px; border-bottom: 2px solid #f8fafc; color: var(--text-dark); font-weight: 800; font-size: 1.15rem; }
        .section-header i { color: var(--primary-red); font-size: 1.25rem; }

        .form-label { font-size: 0.75rem; font-weight: 800; color: #94a3b8; text-transform: uppercase; margin-bottom: 8px; display: block; }
        
        /* GRUPO DE INPUTS COM ÍCONES */
        .input-icon-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon-wrapper i {
            position: absolute;
            left: 16px;
            color: #94a3b8;
            font-size: 1rem;
            pointer-events: none;
            transition: 0.3s;
        }

        .form-control-custom {
            width: 100%;
            padding: 12px 18px 12px 45px;
            border-radius: 14px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
            font-weight: 500;
            transition: 0.3s;
            color: var(--text-dark);
        }

        .form-control-custom:focus {
            outline: none;
            border-color: var(--primary-red);
            background: white;
            box-shadow: 0 0 0 4px rgba(211, 47, 47, 0.08);
        }

        .form-control-custom:focus ~ i,
        .input-icon-wrapper:focus-within i {
            color: var(--primary-red);
        }

        .btn-save { background: var(--primary-red); color: white; border: none; padding: 18px 60px; border-radius: 18px; font-weight: 800; font-size: 1rem; transition: 0.3s; box-shadow: 0 8px 20px rgba(211, 47, 47, 0.25); cursor: pointer; display: flex; align-items: center; gap: 10px; }
        .btn-save:hover { background: #b71c1c; transform: translateY(-3px); box-shadow: 0 12px 25px rgba(211, 47, 47, 0.35); }
    </style>
</head>
<body>

<div class="wrapper">
    <!-- SIDEBAR -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <div class="logo-box"><i class="fa-solid fa-graduation-cap"></i></div>
            <h4 class="fw-bold m-0">SIFE</h4>
        </div>

        <div class="nav-menu">
            <span class="menu-label">Principal</span>
            <a href="{{ route('frequencia') }}" class="nav-link"><i class="fa-solid fa-calendar-check"></i> <span>Frequência</span></a>
            <a href="{{ route('table') }}" class="nav-link active"><i class="fa-solid fa-users"></i> <span>Turmas</span></a>
            <a href="{{ route('typography') }}" class="nav-link"><i class="fa-solid fa-user-graduate"></i> <span>Alunos</span></a>
            <a href="{{ route('widget') }}" class="nav-link"><i class="fa-solid fa-chart-line"></i> <span>Dashboard</span></a>

            <span class="menu-label">Administrativo</span>
            <a href="{{ route('index') }}" class="nav-link"><i class="fa-solid fa-calendar-days"></i> <span>Eventos</span></a>
            <a href="{{ route('chart') }}" class="nav-link"><i class="fa-solid fa-bell"></i> <span>Notificações</span></a>
            <a href="{{ route('button') }}" class="nav-link"><i class="fa-solid fa-file-lines"></i> <span>Relatórios</span></a>
        </div>

        <div class="sidebar-footer" style="margin-top: auto; padding-top: 15px; border-top: 1px solid var(--border-color, #edf2f7); display: flex; flex-direction: column; gap: 10px;">
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
               style="display: flex; align-items: center; gap: 12px; padding: 12px; text-decoration: none; border-radius: 15px; transition: 0.3s; background: {{ $isProfilePage ? 'var(--primary-red, #d32f2f)' : 'var(--primary-red-soft, #fff5f5)' }};">
                
                <div class="avatar-circle" style="width: 42px; height: 42px; flex-shrink: 0; background: {{ $isProfilePage ? '#ffffff' : 'var(--primary-red, #d32f2f)' }}; color: {{ $isProfilePage ? 'var(--primary-red, #d32f2f)' : '#ffffff' }}; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.85rem; border: 2px solid white; box-shadow: 0 2px 8px rgba(211,47,47,0.15);">
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
                <i class="fa-solid fa-right-from-bracket" style="width: 22px; font-size: 1.1rem; color: var(--primary-red, #d32f2f);"></i> 
                <span>Sair da Conta</span>
            </a>

            <form id="sidebar-logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </nav>

    <!-- CONTEÚDO PRINCIPAL -->
    <main class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h1 class="fw-bold m-0" style="letter-spacing: -1.5px; font-size: 2.2rem;">Nova Turma</h1>
                <p class="text-muted m-0">Configure uma nova unidade de ensino para o ano letivo.</p>
            </div>
            <a href="{{ route('table') }}" class="btn btn-light px-4 py-2 fw-bold rounded-3 border d-flex align-items-center gap-2">
                <i class="fa-solid fa-xmark text-secondary"></i> Cancelar
            </a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger border-0 rounded-4 shadow-sm mb-4">
                <div class="d-flex align-items-center gap-2 mb-1 fw-bold">
                    <i class="fa-solid fa-triangle-exclamation"></i> Erro ao cadastrar turma:
                </div>
                <ul class="m-0 ps-3 small">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-card shadow-sm">
            <form action="{{ route('turmas.salvar') }}" method="POST">
                @csrf
                
                <div class="section-header">
                    <i class="fa-solid fa-chalkboard-user"></i> Identificação da Turma
                </div>

                <div class="row g-4 mb-2">
                    <!-- NOME DA TURMA -->
                    <div class="col-md-6">
                        <label class="form-label">Nome da Turma</label>
                        <div class="input-icon-wrapper">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <input type="text" name="nome_turma" value="{{ old('nome_turma') }}" class="form-control-custom" placeholder="Ex: Turma A, 101, Desenvolvimento de Sistemas" required>
                        </div>
                    </div>

                    <!-- SÉRIE / ANO -->
                    <div class="col-md-3">
                        <label class="form-label">Série / Ano</label>
                        <div class="input-icon-wrapper">
                            <i class="fa-solid fa-layer-group"></i>
                            <input type="text" name="serie" value="{{ old('serie') }}" class="form-control-custom" placeholder="Ex: 9º Ano, 1º Módulo">
                        </div>
                    </div>

                    <!-- PERÍODO / TURNO -->
                    <div class="col-md-3">
                        <label class="form-label">Período / Turno</label>
                        <div class="input-icon-wrapper">
                            <i class="fa-solid fa-clock"></i>
                            <select name="periodo" class="form-control-custom" style="appearance: none;">
                                <option value="" disabled {{ old('periodo') ? '' : 'selected' }}>Selecione...</option>
                                <option value="Matutino" {{ old('periodo') == 'Matutino' ? 'selected' : '' }}>Matutino</option>
                                <option value="Vespertino" {{ old('periodo') == 'Vespertino' ? 'selected' : '' }}>Vespertino</option>
                                <option value="Noturno" {{ old('periodo') == 'Noturno' ? 'selected' : '' }}>Noturno</option>
                                <option value="Integral" {{ old('periodo') == 'Integral' ? 'selected' : '' }}>Integral</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- BOTÃO SALVAR -->
                <div class="d-flex justify-content-center mt-5 pt-4 border-top">
                    <button type="submit" class="btn-save">
                        <i class="fa-solid fa-circle-plus"></i> Criar Turma Agora
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>

<x-acessibilidade /> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 

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