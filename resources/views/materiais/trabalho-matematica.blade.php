<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Trabalho — Matemática</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #f4f7f9;
            color: #2d3436;
        }

        .container-principal {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px 40px;
        }

        .materia-header {
            background: linear-gradient(135deg, #d92f3d, #b71c1c);
            color: white;
            padding: 35px;
            border-radius: 20px;
            margin-bottom: 25px;
            box-shadow: 0 8px 20px rgba(217, 47, 61, 0.18);
        }

        .materia-header h1 {
            margin: 0 0 10px;
            font-size: 28px;
            font-weight: 800;
        }

        .materia-header p {
            margin: 0;
            font-size: 15px;
            opacity: 0.95;
        }

        .conteudo {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .card-trabalho {
            background: white;
            border-radius: 18px;
            padding: 25px;
            border: 1px solid #edf2f7;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.04);
        }

        .titulo-card {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 18px;
        }

        .titulo-card i {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: #fff3f3;
            color: #d92f3d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .titulo-card h2 {
            margin: 0;
            font-size: 19px;
            font-weight: 800;
            color: #2d3436;
        }

        .card-trabalho p {
            line-height: 1.7;
            margin-bottom: 12px;
            color: #555;
        }

        .informacoes {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-top: 15px;
        }

        .info {
            background: #f8fafc;
            border: 1px solid #edf2f7;
            border-radius: 12px;
            padding: 15px;
        }

        .info strong {
            display: block;
            font-size: 13px;
            color: #d92f3d;
            margin-bottom: 5px;
        }

        .info span {
            font-size: 14px;
            color: #555;
        }

        .objetivos {
            padding-left: 20px;
            margin-bottom: 0;
        }

        .objetivos li {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .questao {
            background: #f8fafc;
            border: 1px solid #edf2f7;
            border-radius: 12px;
            padding: 18px;
            margin-bottom: 12px;
        }

        .questao:last-child {
            margin-bottom: 0;
        }

        .questao-numero {
            font-weight: 800;
            color: #d92f3d;
            margin-bottom: 8px;
        }

        .espaco-resposta {
            margin-top: 15px;
            height: 70px;
            border: 1px dashed #cbd5e1;
            border-radius: 10px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #a0aec0;
            font-size: 13px;
        }

        .observacao {
            background: #fff3f3;
            border-radius: 14px;
            padding: 18px;
            display: flex;
            gap: 14px;
            align-items: flex-start;
        }

        .observacao i {
            color: #d92f3d;
            font-size: 20px;
            margin-top: 2px;
        }

        .observacao strong {
            display: block;
            margin-bottom: 5px;
        }

        .btn-voltar {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 25px;
            padding: 13px 20px;
            border-radius: 12px;
            background: #d92f3d;
            color: white;
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
            transition: 0.2s;
        }

        .btn-voltar:hover {
            background: #b71c1c;
            color: white;
            transform: translateY(-1px);
        }

        /* BOTÃO PDF */
        .btn-pdf {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 10px;
            padding: 13px 20px;
            border: none;
            border-radius: 12px;
            background: #d92f3d;
            color: white;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn-pdf:hover {
            background: #b71c1c;
            transform: translateY(-1px);
        }

        /* CONFIGURAÇÃO PARA IMPRESSÃO / PDF */
        @media print {

            .btn-voltar,
            .btn-pdf {
                display: none !important;
            }

            body {
                background: white;
            }

            .container-principal {
                margin: 0;
                max-width: 100%;
                padding: 0;
            }

            .materia-header {
                box-shadow: none;
            }

            .card-trabalho {
                box-shadow: none;
                break-inside: avoid;
            }

            .questao {
                break-inside: avoid;
            }
        }

        @media (max-width: 700px) {

            .container-principal {
                margin: 20px auto;
            }

            .materia-header {
                padding: 25px;
            }

            .materia-header h1 {
                font-size: 23px;
            }

            .card-trabalho {
                padding: 20px;
            }

            .informacoes {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="container-principal">

    <!-- CABEÇALHO -->
    <div class="materia-header">

        <h1>
            <i class="fa-solid fa-file-pen"></i>
            Trabalho — Matemática
        </h1>

        <p>
            Atividade avaliativa para aplicar os conhecimentos estudados.
        </p>

    </div>

    <div class="conteudo">

        <!-- INFORMAÇÕES DO TRABALHO -->
        <div class="card-trabalho">

            <div class="titulo-card">

                <i class="fa-solid fa-circle-info"></i>

                <h2>Informações do Trabalho</h2>

            </div>

            <p>
                Este trabalho tem como objetivo revisar e aplicar os principais
                conteúdos estudados em Matemática.
            </p>

            <div class="informacoes">

                <div class="info">
                    <strong>Disciplina</strong>
                    <span>Matemática</span>
                </div>

                <div class="info">
                    <strong>Tipo</strong>
                    <span>Trabalho avaliativo</span>
                </div>

                <div class="info">
                    <strong>Conteúdo</strong>
                    <span>Equações e Funções</span>
                </div>

                <div class="info">
                    <strong>Valor</strong>
                    <span>10,0 pontos</span>
                </div>

            </div>

        </div>

        <!-- OBJETIVOS -->
        <div class="card-trabalho">

            <div class="titulo-card">

                <i class="fa-solid fa-bullseye"></i>

                <h2>Objetivos</h2>

            </div>

            <ul class="objetivos">

                <li>
                    Compreender e resolver equações do 1º grau.
                </li>

                <li>
                    Aplicar a fórmula de Bhaskara em equações do 2º grau.
                </li>

                <li>
                    Identificar os elementos de uma função.
                </li>

                <li>
                    Resolver problemas envolvendo funções matemáticas.
                </li>

                <li>
                    Desenvolver o raciocínio lógico e matemático.
                </li>

            </ul>

        </div>

        <!-- QUESTÕES -->
        <div class="card-trabalho">

            <div class="titulo-card">

                <i class="fa-solid fa-pencil"></i>

                <h2>Questões</h2>

            </div>

            <!-- QUESTÃO 1 -->
            <div class="questao">

                <div class="questao-numero">
                    Questão 1
                </div>

                <div>
                    Resolva a equação do 1º grau:
                    <br><br>

                    <strong>4x + 8 = 28</strong>
                </div>

                <div class="espaco-resposta">
                    Espaço para resposta
                </div>

            </div>

            <!-- QUESTÃO 2 -->
            <div class="questao">

                <div class="questao-numero">
                    Questão 2
                </div>

                <div>
                    Resolva a equação:
                    <br><br>

                    <strong>7x - 14 = 35</strong>
                </div>

                <div class="espaco-resposta">
                    Espaço para resposta
                </div>

            </div>

            <!-- QUESTÃO 3 -->
            <div class="questao">

                <div class="questao-numero">
                    Questão 3
                </div>

                <div>
                    Resolva a equação do 2º grau utilizando a fórmula de Bhaskara:
                    <br><br>

                    <strong>x² - 7x + 12 = 0</strong>
                </div>

                <div class="espaco-resposta">
                    Espaço para resposta
                </div>

            </div>

            <!-- QUESTÃO 4 -->
            <div class="questao">

                <div class="questao-numero">
                    Questão 4
                </div>

                <div>
                    Considere a função:
                    <br><br>

                    <strong>f(x) = 3x + 2</strong>
                    <br><br>

                    Calcule o valor de <strong>f(5)</strong>.
                </div>

                <div class="espaco-resposta">
                    Espaço para resposta
                </div>

            </div>

            <!-- QUESTÃO 5 -->
            <div class="questao">

                <div class="questao-numero">
                    Questão 5
                </div>

                <div>
                    Na função abaixo, identifique o coeficiente angular
                    e o coeficiente linear:
                    <br><br>

                    <strong>f(x) = -2x + 10</strong>
                </div>

                <div class="espaco-resposta">
                    Espaço para resposta
                </div>

            </div>

        </div>

        <!-- ENTREGA -->
        <div class="card-trabalho">

            <div class="titulo-card">

                <i class="fa-solid fa-check-circle"></i>

                <h2>Orientações para Entrega</h2>

            </div>

            <ul class="objetivos">

                <li>
                    Resolva todas as questões apresentando os cálculos.
                </li>

                <li>
                    Confira suas respostas antes de finalizar.
                </li>

                <li>
                    Organize seu trabalho de forma clara.
                </li>

                <li>
                    Não deixe nenhuma questão sem resposta.
                </li>

            </ul>

        </div>

        <!-- OBSERVAÇÃO -->
        <div class="observacao">

            <i class="fa-solid fa-lightbulb"></i>

            <div>

                <strong>Dica</strong>

                Leia cada questão com atenção e faça os cálculos
                passo a passo. Em Matemática, organizar o raciocínio
                ajuda a evitar erros.

            </div>

        </div>

    </div>

    <!-- BOTÕES -->
    <a href="{{ route('materiaisMatematica') }}" class="btn-voltar">

        <i class="fa-solid fa-arrow-left"></i>

        Voltar para Materiais

    </a>

    <button onclick="window.print()" class="btn-pdf">

        <i class="fa-solid fa-file-pdf"></i>

        Baixar em PDF

    </button>

</div>

</body>
</html>