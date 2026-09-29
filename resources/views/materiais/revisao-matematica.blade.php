<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Material de Revisão — Prova</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

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

        .card-revisao {
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

        .card-revisao p {
            line-height: 1.7;
            margin-bottom: 10px;
            color: #555;
        }

        .formula {
            background: #fff7f7;
            border-left: 4px solid #d92f3d;
            padding: 14px 18px;
            border-radius: 10px;
            margin: 12px 0;
            font-weight: 600;
            color: #444;
        }

        .lista {
            padding-left: 20px;
            margin-bottom: 0;
        }

        .lista li {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .questao {
            background: #f8fafc;
            border: 1px solid #edf2f7;
            border-radius: 12px;
            padding: 17px;
            margin-bottom: 12px;
        }

        .questao:last-child {
            margin-bottom: 0;
        }

        .questao strong {
            color: #d92f3d;
        }

        .dica {
            background: #fff3f3;
            border-radius: 14px;
            padding: 18px;
            display: flex;
            gap: 14px;
            align-items: flex-start;
        }

        .dica i {
            color: #d92f3d;
            font-size: 20px;
            margin-top: 2px;
        }

        .dica strong {
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

            .card-revisao {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<div class="container-principal">

    <!-- CABEÇALHO -->
    <div class="materia-header">
        <h1>
            <i class="fa-solid fa-file-circle-check"></i>
            Material de Revisão — Prova
        </h1>

        <p>
            Revise os principais conteúdos de Matemática antes da prova.
        </p>
    </div>

    <div class="conteudo">

        <!-- EQUAÇÕES -->
        <div class="card-revisao">

            <div class="titulo-card">
                <i class="fa-solid fa-equals"></i>

                <h2>1. Equações do 1º Grau</h2>
            </div>

            <p>
                Uma equação do primeiro grau possui uma incógnita que normalmente
                representamos pela letra <strong>x</strong>.
            </p>

            <div class="formula">
                ax + b = 0
            </div>

            <p>
                Para resolver, devemos deixar a incógnita sozinha em um dos lados
                da igualdade.
            </p>

            <div class="formula">
                Exemplo: 2x + 6 = 14<br>
                2x = 14 - 6<br>
                2x = 8<br>
                <strong>x = 4</strong>
            </div>

        </div>

        <!-- EQUAÇÕES DO 2º GRAU -->
        <div class="card-revisao">

            <div class="titulo-card">
                <i class="fa-solid fa-square-root-variable"></i>

                <h2>2. Equações do 2º Grau</h2>
            </div>

            <p>
                A equação do segundo grau possui a forma:
            </p>

            <div class="formula">
                ax² + bx + c = 0
            </div>

            <p>
                Para encontrar as raízes, podemos utilizar a fórmula de Bhaskara.
            </p>

            <div class="formula">
                Δ = b² - 4ac
            </div>

            <div class="formula">
                x = (-b ± √Δ) / 2a
            </div>

            <p>
                Lembre-se de calcular primeiro o valor de <strong>Δ</strong> e,
                depois, substituir na fórmula de Bhaskara.
            </p>

        </div>

        <!-- FUNÇÃO -->
        <div class="card-revisao">

            <div class="titulo-card">
                <i class="fa-solid fa-chart-line"></i>

                <h2>3. Função do 1º Grau</h2>
            </div>

            <p>
                A função do primeiro grau pode ser representada por:
            </p>

            <div class="formula">
                f(x) = ax + b
            </div>

            <ul class="lista">
                <li><strong>a</strong> representa o coeficiente angular;</li>
                <li><strong>b</strong> representa o coeficiente linear;</li>
                <li>O gráfico de uma função do 1º grau é uma reta.</li>
            </ul>

            <div class="formula">
                Exemplo: f(x) = 2x + 3
            </div>

        </div>

        <!-- FUNÇÃO QUADRÁTICA -->
        <div class="card-revisao">

            <div class="titulo-card">
                <i class="fa-solid fa-chart-area"></i>

                <h2>4. Função do 2º Grau</h2>
            </div>

            <p>
                A função quadrática possui a forma:
            </p>

            <div class="formula">
                f(x) = ax² + bx + c
            </div>

            <p>
                Seu gráfico é chamado de <strong>parábola</strong>.
            </p>

            <ul class="lista">
                <li>Se <strong>a &gt; 0</strong>, a parábola é voltada para cima.</li>
                <li>Se <strong>a &lt; 0</strong>, a parábola é voltada para baixo.</li>
                <li>As raízes são encontradas quando f(x) = 0.</li>
            </ul>

        </div>

        <!-- REVISÃO RÁPIDA -->
        <div class="card-revisao">

            <div class="titulo-card">
                <i class="fa-solid fa-list-check"></i>

                <h2>5. Revisão Rápida</h2>
            </div>

            <ul class="lista">
                <li>Revise as regras de sinais.</li>
                <li>Tenha atenção ao passar termos de um lado para o outro da igualdade.</li>
                <li>Na fórmula de Bhaskara, calcule primeiro o discriminante (Δ).</li>
                <li>Confira se a resposta encontrada realmente satisfaz a equação.</li>
                <li>Revise como identificar os coeficientes a, b e c.</li>
                <li>Pratique a interpretação de gráficos.</li>
            </ul>

        </div>

        <!-- QUESTÕES -->
        <div class="card-revisao">

            <div class="titulo-card">
                <i class="fa-solid fa-pencil"></i>

                <h2>6. Questões para Revisar</h2>
            </div>

            <div class="questao">
                <strong>Questão 1:</strong>
                Resolva a equação:
                <br><br>
                3x + 9 = 24
            </div>

            <div class="questao">
                <strong>Questão 2:</strong>
                Resolva a equação:
                <br><br>
                5x - 10 = 20
            </div>

            <div class="questao">
                <strong>Questão 3:</strong>
                Calcule o valor de Δ da equação:
                <br><br>
                x² - 5x + 6 = 0
            </div>

            <div class="questao">
                <strong>Questão 4:</strong>
                Determine o valor de f(3) para:
                <br><br>
                f(x) = 2x + 5
            </div>

            <div class="questao">
                <strong>Questão 5:</strong>
                Na função f(x) = -2x + 8, identifique os valores
                do coeficiente angular e do coeficiente linear.
            </div>

        </div>

        <!-- DICA -->
        <div class="dica">

            <i class="fa-solid fa-lightbulb"></i>

            <div>
                <strong>Dica para a prova</strong>

                Faça primeiro as questões que você considera mais fáceis.
                Depois volte para as questões mais difíceis e confira seus
                cálculos antes de entregar.
            </div>

        </div>

    </div>

    <!-- VOLTAR -->
    <a href="{{ route('materiaisMatematica') }}" class="btn-voltar">
        <i class="fa-solid fa-arrow-left"></i>
        Voltar para Materiais
    </a>

</div>

</body>
</html>