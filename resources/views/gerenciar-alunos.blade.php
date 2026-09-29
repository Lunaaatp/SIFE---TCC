<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Alunos - SIFE</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-red: #d32f2f;
            --primary-red-soft: #fff5f5;
            --bg-light: #f4f7f9;
        }

        body { font-family: 'Inter', sans-serif; background-color: var(--bg-light); margin: 0; }
        .main-wrapper { display: flex; min-height: 100vh; }
        
        /* --- SIDEBAR PADRÃO PAGINA BUTTON --- */
        #sidebar {
            width: 280px;
            min-width: 280px;
            background: white;
            border-end: 1px solid #edf2f7;
            display: flex;
            flex-direction: column;
            position: sticky;
            top: 0;
            height: 100vh;
        }

        .active-sife { 
            background-color: var(--primary-red-soft) !important; 
            color: var(--primary-red) !important; 
            font-weight: 600; 
        }

        /* --- CONTEÚDO --- */
        .content-area { flex-grow: 1; padding: 40px; }

        .data-card {
            background: white;
            border-radius: 25px;
            padding: 35px;
            border: 1px solid #edf2f7;
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
        }

        .table thead th {
            background-color: #f8fafc;
            border: none;
            color: #64748b;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 15px;
        }

        .table tbody td {
            padding: 20px 15px;
            vertical-align: middle;
            border-bottom: 1px solid #f1f5f9;
        }

        .avatar-initials {
            width: 40px; height: 40px;
            background: #f8fafc; color: var(--primary-red);
            border-radius: 50%; display: flex;
            align-items: center; justify-content: center;
            font-weight: 700; font-size: 0.8rem;
            border: 1px solid #edf2f7;
        }

        .btn-manage {
            background: var(--primary-red);
            color: white; border: none;
            padding: 10px 25px; border-radius: 12px;
            font-weight: 700; transition: 0.3s;
        }
        .btn-manage:hover { background: #b71c1c; transform: translateY(-2px); }

        .search-bar {
            background: #f1f5f9; border: none; border-radius: 12px;
            padding: 12px 20px; width: 350px; font-weight: 500;
        }
    </style>
</head>
<body>

<div class="main-wrapper">
    <nav id="sidebar" class="border-end">
        <div class="p-4">
            <div class="d-flex align-items-center gap-2 mb-4">
                <div class="bg-danger text-white rounded-3 p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <span class="fs-4 fw-bold">SIFE</span>
            </div>

            <div class="text-uppercase text-muted fw-bold mb-2" style="font-size: 0.7rem; letter-spacing: 1px;">Principal</div>
            <ul class="nav nav-pills flex-column mb-4 gap-1">
                <li><a href="{{ route('frequencia') }}" class="nav-link text-secondary d-flex align-items-center gap-3 p-3 rounded-4"><i class="far fa-calendar-check fs-5"></i> Frequência</a></li>
                <li><a href="{{ route('table') }}" class="nav-link active-sife d-flex align-items-center gap-3 p-3 rounded-4"><i class="fas fa-users fs-5"></i> Turmas</a></li>
                <li><a href="{{ route('typography') }}" class="nav-link text-secondary d-flex align-items-center gap-3 p-3 rounded-4"><i class="fas fa-user-graduate fs-5"></i> Alunos</a></li>
                <li><a href="{{ route('widget') }}" class="nav-link text-secondary d-flex align-items-center gap-3 p-3 rounded-4"><i class="fas fa-chart-line fs-5"></i> Dashboard</a></li>
            </ul>

            <div class="text-uppercase text-muted fw-bold mb-2" style="font-size: 0.7rem; letter-spacing: 1px;">Administrativo</div>
            <ul class="nav nav-pills flex-column gap-1">
                <li><a href="{{ route('index') }}" class="nav-link text-secondary d-flex align-items-center gap-3 p-3 rounded-4"><i class="far fa-calendar-alt fs-5"></i> Eventos</a></li>
                <li><a href="{{ route('chart') }}" class="nav-link text-secondary d-flex align-items-center gap-3 p-3 rounded-4"><i class="far fa-bell fs-5"></i> Notificações</a></li>
                <li><a href="{{ route('button') }}" class="nav-link text-secondary d-flex align-items-center gap-3 p-3 rounded-4"><i class="far fa-file-alt fs-5"></i> Relatórios</a></li>
            </ul>
        </div>

        <div class="mt-auto p-4 border-top">
            <a href="/profile" class="d-flex align-items-center gap-3 text-decoration-none p-2 rounded-4">
                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center fw-bold shadow-sm" style="width: 45px; height: 45px;">
                    AD
                </div>
                <div class="overflow-hidden">
                    <div class="fw-bold text-dark text-truncate" style="font-size: 0.9rem;">Carlos Silva</div>
                    <div class="text-muted text-truncate" style="font-size: 0.8rem;">carlos@sife.com</div>
                </div>
            </a>
        </div>
    </nav>

    <main class="content-area">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h2 class="fw-bold m-0">Gerenciar Alunos</h2>
                <p class="text-muted">Lista de alunos matriculados nesta turma</p>
            </div>
            <div class="d-flex gap-3">
                <input type="text" class="search-bar" placeholder="Pesquisar aluno...">
                <button class="btn btn-danger px-4 rounded-3 fw-bold shadow-sm">
                    <i class="fas fa-plus me-2"></i>Novo Aluno
                </button>
            </div>
        </div>

        <div class="data-card">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Aluno</th>
                            <th>ID Matrícula</th>
                            <th>Frequência</th>
                            <th>Status</th>
                            <th class="text-center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-initials">AS</div>
                                    <span class="fw-bold">Ana Sofia Oliveira</span>
                                </div>
                            </td>
                            <td class="text-muted fw-medium">#2026-090</td>
                            <td style="width: 200px;">
                                <div class="progress" style="height: 6px; border-radius: 10px;">
                                    <div class="progress-bar bg-success" style="width: 88%"></div>
                                </div>
                                <small class="fw-bold text-muted">88% de Presença</small>
                            </td>
                            <td><span class="badge rounded-pill bg-success-subtle text-success px-3 py-2">Regular</span></td>
                            <td class="text-center">
                                <button class="btn-manage shadow-sm">Acessar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-initials">JM</div>
                                    <span class="fw-bold">João Marcos Silva</span>
                                </div>
                            </td>
                            <td class="text-muted fw-medium">#2026-112</td>
                            <td>
                                <div class="progress" style="height: 6px; border-radius: 10px;">
                                    <div class="progress-bar bg-danger" style="width: 65%"></div>
                                </div>
                                <small class="fw-bold text-muted">65% de Presença</small>
                            </td>
                            <td><span class="badge rounded-pill bg-danger-subtle text-danger px-3 py-2">Alerta</span></td>
                            <td class="text-center">
                                <button class="btn-manage shadow-sm">Acessar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('table') }}" class="text-decoration-none text-muted fw-bold">
                <i class="fas fa-arrow-left me-2"></i>Voltar para Turmas
            </a>
        </div>
    </main>
</div>

</body>
</html>