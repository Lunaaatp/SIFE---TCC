<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Aluno</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f3f4f6;
            display: flex;
        }

        /* MENU */

        .sidebar {
            width: 250px;
            height: 100vh;
            background: white;
            padding: 30px 20px;
            position: fixed;
            left: 0;
            top: 0;
        }

        .logo {
            font-size: 35px;
            font-weight: bold;
            color: #e63946;
            margin-bottom: 50px;
        }

        .menu-title {
            color: #9ca3af;
            font-size: 13px;
            margin-top: 30px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: #374151;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 10px;
            transition: 0.3s;
        }

        .menu a:hover {
            background: #f3f4f6;
        }

        /* CONTEÚDO */

        .content {
            margin-left: 270px;
            width: calc(100% - 270px);
            padding: 30px;
        }

        /* TOPO */

        .top-card {
            background: white;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }

        .banner {
            height: 180px;
            background: linear-gradient(to right, #d62828, #ff4d4d);
        }

        .profile-info {
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: -70px;
        }

        .profile-left {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .avatar {
            width: 140px;
            height: 140px;
            border-radius: 30px;
            background: #d62828;
            color: white;
            font-size: 60px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 8px solid white;
        }

        .student-name {
            font-size: 50px;
            font-weight: bold;
        }

        .student-role {
            color: #6b7280;
            font-size: 18px;
        }

        .edit-btn {
            background: #e63946;
            border: none;
            color: white;
            padding: 15px 30px;
            border-radius: 12px;
            font-weight: bold;
        }

        /* CARDS */

        .cards {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 25px;
        }

        .card-custom {
            background: white;
            border-radius: 25px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .card-title {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .info-box {
            background: #f3f4f6;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .info-label {
            color: #9ca3af;
            font-size: 14px;
            font-weight: bold;
        }

        .info-value {
            font-size: 22px;
            margin-top: 8px;
        }

        .btn-red {
            width: 100%;
            background: #e63946;
            border: none;
            color: white;
            padding: 18px;
            border-radius: 15px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- MENU -->
    <div class="sidebar">

        <div class="logo">
            SIFE
        </div>

        <div class="menu">

            <div class="menu-title">PRINCIPAL</div>

            <a href="#">
                <i class="fa-solid fa-calendar-check"></i>
                Frequência
            </a>

            <a href="#">
                <i class="fa-solid fa-book"></i>
                Matérias
            </a>

            <a href="#">
                <i class="fa-solid fa-chart-column"></i>
                Notas
            </a>

            <a href="#">
                <i class="fa-solid fa-users"></i>
                Eventos
            </a>

        </div>

    </div>

    <!-- CONTEÚDO -->
    <div class="content">

        <!-- PERFIL -->
        <div class="top-card">

            <div class="banner"></div>

            <div class="profile-info">

                <div class="profile-left">

                    <div class="avatar">
                        JS
                    </div>

                    <div>
                        <div class="student-name">
                            João Silva
                        </div>

                        <div class="student-role">
                            Aluno - Desenvolvimento de Sistemas
                        </div>
                    </div>

                </div>

                <button class="edit-btn">
                    <i class="fa-solid fa-pen"></i>
                    Editar Perfil
                </button>

            </div>

        </div>

        <!-- CARDS -->
        <div class="cards">

            <!-- ESQUERDA -->
            <div class="card-custom">

                <div class="card-title">
                    Informações do Aluno
                </div>
                 
                <div class="info-box">
                    <div class="info-label">FREQUÊNCIA TOTAL</div>
                    <div class="info-value">92%</div>
                </div>

                <div class="info-box">
                    <div class="info-label">FREQUÊNCIA POR MATÉRIA</div>
                    <div class="info-value">
                        Matemática - 95% <br>
                        Português - 90% <br>
                        História - 88%
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-label">NOTAS POR MATÉRIA</div>
                    <div class="info-value">
                        Matemática - 8.5 <br>
                        Português - 9.0 <br>
                        História - 7.8
                    </div>
                </div>

            </div>

            <!-- DIREITA -->
            <div class="card-custom">

                <div class="card-title">
                    Eventos Próximos
                </div>

                <div class="info-box">
                    <div class="info-value">
                        📅 Prova de Matemática - 28/05
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-value">
                        📅 Feira de Ciências - 02/06
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-value">
                        📅 Entrega do TCC - 10/06
                    </div>
                </div>

                <a href="{{ route('index') }}" class="btn-red">
    Ver Agenda
</a>

            </div>

        </div>

    </div>

    <!-- ADICIONE APENAS ESTA LINHA AQUI: -->
    <x-acessibilidade />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</body>

</html>
