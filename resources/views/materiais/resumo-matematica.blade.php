<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resumo — Funções Matemáticas | SIFE</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background: #f4f7f9;
            font-family: 'Inter', sans-serif;
            color: #071b35;
        }

        /* =========================
           CONTAINER
        ========================= */

        .container-principal {
            max-width: 1100px;
            margin: 0 auto;
            padding: 25px 25px 60px;
        }

        /* =========================
           VOLTAR
        ========================= */

        .voltar {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #758ba3;
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 25px;
            transition: 0.2s;
        }

        .voltar:hover {
            color: #d92f3d;
        }

        /* =========================
           CABEÇALHO
        ========================= */

        .cabecalho {
            background: white;
            border-radius: 28px;
            padding: 32px;
            margin-bottom: 22px;
            box-shadow: 0 8px 25px rgba(15, 42, 70, 0.04);
        }

        .cabecalho-topo {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .icone-resumo {
            width: 70px;
            height: 70px;
            min-width: 70px;
            border-radius: 20px;
            background: #d9f3e8;
            color: #16915f;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
        }

        .titulo-pequeno {
            color: #16915f;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .titulo {
            margin: 0;
            font-size: 30px;
            font-weight: 800;
            color: #071b35;
        }

        .subtitulo {
            margin: 7px 0 0;
            color: #91a7bf;
            font-size: 14px;
            font-weight: 600;
        }

        /* =========================
           CONTEÚDO
        ========================= */

        .conteudo {
            background: white;
            border-radius: 28px;
            padding: 35px;
            box-shadow: 0 8px 25px rgba(15, 42, 70, 0.04);
        }

        .secao {
            margin-bottom: 35px;
        }

        .secao:last-child {
            margin-bottom: 0;
        }

        .secao-titulo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
        }

        .secao-titulo i {
            width: 38px;
            height: 38px;
            border-radius: 11px;
            background: #fff3f3;
            color: #d92f3d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .secao-titulo h2 {
            margin: 0;
            font-size: 21px;
            font-weight: 800;
            color: #071b35;
        }

        .texto {
            color: #60758c;
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 12px;
        }

        /* =========================
           DESTAQUE
        ========================= */

        .destaque {
            background: #f7f9fb;
            border-left: 5px solid #16915f;
            border-radius: 14px;
            padding: 18px 20px;
            margin: 18px 0;
        }

        .destaque strong {
            color: #071b35;
        }

        /* =========================
           FÓRMULAS
        ========================= */

        .formula {
            background: #fff3f3;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            margin: 15px 0;
            color: #d92f3d;
            font-size: 20px;
            font-weight: 800;
        }

        .formula-pequena {
            background: #f7f9fb;
            border-radius: 13px;
            padding: 15px;
            text-align: center;
            margin: 10px 0;
            color: #071b35;
            font-size: 17px;
            font-weight: 700;
        }

        /* =========================
           CARDS
        ========================= */

        .cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            margin-top: 18px;
        }

        .card-resumo {
            background: #f7f9fb;
            border-radius: 18px;
            padding: 22px;
        }

        .card-resumo h3 {
            margin: 0 0 10px;
            color: #071b35;
            font-size: 17px;
            font-weight: 800;
        }

        .card-resumo p {
            margin: 0;
            color: #71869d;
            font-size: 13px;
            line-height: 1.7;
        }

        /* =========================
           TABELA
        ========================= */

        .tabela-container {
            overflow-x: auto;
            margin-top: 18px;
        }

        .tabela {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 15px;
        }

        .tabela th {
            background: #071b35;
            color: white;
            padding: 14px;
            text-align: left;
            font-size: 13px;
        }

        .tabela td {
            padding: 14px;
            border-bottom: 1px solid #e8edf2;
            color: #60758c;
            font-size: 13px;
        }

        .tabela tr:last-child td {
            border-bottom: none;
        }

        /* =========================
           EXEMPLO
        ========================= */

        .exemplo {
            background: #f0f7ff;
            border-radius: 18px;
            padding: 22px;
            margin-top: 18px;
        }

        .exemplo-titulo {
            color: #367be8;
            font-size: 15px;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .exemplo p {
            color: #60758c;
            font-size: 13px;
            line-height: 1.7;
            margin-bottom: 8px;
        }

        /* =========================
           LISTA
        ========================= */

        .lista {
            padding-left: 20px;
            margin-top: 12px;
        }

        .lista li {
            color: #60758c;
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 6px;
        }

        .botoes-acoes {
    display: flex;
    gap: 10px;
    align-items: center;
    margin-top: 25px;
}

.btn-baixar {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 13px 20px;
    border-radius: 12px;
    background: #f3f6f9;
    color: #627991;
    text-decoration: none;
    font-size: 14px;
    font-weight: 700;
    transition: 0.2s;
}

.btn-baixar:hover {
    background: #e8edf2;
    color: #071b35;
    transform: translateY(-1px);
}

        /* =========================
           RODAPÉ
        ========================= */

        .rodape {
            margin-top: 22px;
            background: white;
            border-radius: 20px;
            padding: 18px;
            text-align: center;
            color: #9aafc4;
            font-size: 12px;
            font-weight: 600;
        }

        /* =========================
           RESPONSIVIDADE
        ========================= */

        @media (max-width: 700px) {

            .container-principal {
                padding: 18px 15px 40px;
            }

            .cabecalho,
            .conteudo {
                padding: 22px;
                border-radius: 22px;
            }

            .cabecalho-topo {
                align-items: flex-start;
            }

            .titulo {
                font-size: 24px;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .icone-resumo {
                width: 58px;
                height: 58px;
                min-width: 58px;
                font-size: 24px;
            }

            .secao-titulo h2 {
                font-size: 18px;
            }
        }

    </style>
</head>

<body>

<div class="container-principal">

    <!-- =========================
         VOLTAR
    ========================= -->

    <a href="{{ route('materiaisMatematica') }}" class="voltar">
        <i class="fa-solid fa-arrow-left"></i>
        Voltar para materiais
    </a>


    <!-- =========================
         CABEÇALHO
    ========================= -->

    <div class="cabecalho">

        <div class="cabecalho-topo">

            <div class="icone-resumo">
                <i class="fa-solid fa-book"></i>
            </div>

            <div>

                <div class="titulo-pequeno">
                    RESUMO DE MATEMÁTICA
                </div>

                <h1 class="titulo">
                    Funções Matemáticas
                </h1>

                <p class="subtitulo">
                    Resumo dos principais conceitos estudados em sala.
                </p>

            </div>

        </div>

    </div>


    <!-- =========================
         CONTEÚDO
    ========================= -->

    <div class="conteudo">


        <!-- INTRODUÇÃO -->

        <div class="secao">

            <div class="secao-titulo">

                <i class="fa-solid fa-lightbulb"></i>

                <h2>O que é uma função?</h2>

            </div>

            <p class="texto">
                Uma função é uma relação entre dois conjuntos em que cada
                elemento do primeiro conjunto está relacionado a exatamente
                um elemento do segundo conjunto.
            </p>

            <div class="destaque">

                <strong>Representação:</strong>

                Uma função pode ser representada por
                <strong>f(x)</strong>, onde x representa o valor de entrada
                e f(x) representa o valor de saída.

            </div>

            <div class="formula">
                f(x) = y
            </div>

        </div>


        <!-- DOMÍNIO -->

        <div class="secao">

            <div class="secao-titulo">

                <i class="fa-solid fa-diagram-project"></i>

                <h2>Domínio, Contradomínio e Imagem</h2>

            </div>

            <div class="cards">

                <div class="card-resumo">

                    <h3>Domínio</h3>

                    <p>
                        É o conjunto formado por todos os valores que podem
                        ser utilizados como entrada da função.
                    </p>

                </div>

                <div class="card-resumo">

                    <h3>Contradomínio</h3>

                    <p>
                        É o conjunto que contém os possíveis valores de saída
                        da função.
                    </p>

                </div>

                <div class="card-resumo">

                    <h3>Imagem</h3>

                    <p>
                        É o conjunto formado pelos valores que realmente são
                        obtidos pela função.
                    </p>

                </div>

                <div class="card-resumo">

                    <h3>Variável independente</h3>

                    <p>
                        Normalmente representada por x, é o valor que podemos
                        escolher como entrada.
                    </p>

                </div>

            </div>

        </div>


        <!-- FUNÇÃO 1º GRAU -->

        <div class="secao">

            <div class="secao-titulo">

                <i class="fa-solid fa-chart-line"></i>

                <h2>Função do 1º Grau</h2>

            </div>

            <p class="texto">
                A função do primeiro grau é uma função cuja representação
                gráfica é uma reta.
            </p>

            <div class="formula">
                f(x) = ax + b
            </div>

            <p class="texto">
                Onde <strong>a</strong> e <strong>b</strong> são números reais,
                sendo que <strong>a ≠ 0</strong>.
            </p>

            <div class="cards">

                <div class="card-resumo">

                    <h3>Coeficiente angular — a</h3>

                    <p>
                        Indica a inclinação da reta. Quando a &gt; 0,
                        a função é crescente. Quando a &lt; 0,
                        a função é decrescente.
                    </p>

                </div>

                <div class="card-resumo">

                    <h3>Coeficiente linear — b</h3>

                    <p>
                        Indica o ponto em que a reta corta o eixo y.
                    </p>

                </div>

            </div>

            <div class="exemplo">

                <div class="exemplo-titulo">
                    <i class="fa-solid fa-calculator"></i>
                    Exemplo
                </div>

                <p>
                    Considere a função:
                </p>

                <div class="formula-pequena">
                    f(x) = 2x + 3
                </div>

                <p>
                    Para x = 2:
                </p>

                <div class="formula-pequena">
                    f(2) = 2(2) + 3 = 7
                </div>

                <p>
                    Portanto, quando x = 2, o valor da função é 7.
                </p>

            </div>

        </div>


        <!-- FUNÇÃO 2º GRAU -->

        <div class="secao">

            <div class="secao-titulo">

                <i class="fa-solid fa-chart-area"></i>

                <h2>Função do 2º Grau</h2>

            </div>

            <p class="texto">
                A função do segundo grau possui uma variável elevada ao
                quadrado e sua representação gráfica é uma parábola.
            </p>

            <div class="formula">
                f(x) = ax² + bx + c
            </div>

            <p class="texto">
                Nessa função, o valor de <strong>a</strong> deve ser diferente
                de zero.
            </p>

            <div class="cards">

                <div class="card-resumo">

                    <h3>a &gt; 0</h3>

                    <p>
                        A parábola possui concavidade voltada para cima.
                    </p>

                </div>

                <div class="card-resumo">

                    <h3>a &lt; 0</h3>

                    <p>
                        A parábola possui concavidade voltada para baixo.
                    </p>

                </div>

            </div>

        </div>


        <!-- DELTA -->

        <div class="secao">

            <div class="secao-titulo">

                <i class="fa-solid fa-square-root-variable"></i>

                <h2>Delta e Fórmula de Bhaskara</h2>

            </div>

            <p class="texto">
                Para encontrar as raízes de uma equação do segundo grau,
                podemos utilizar o discriminante Delta (Δ).
            </p>

            <div class="formula">
                Δ = b² - 4ac
            </div>

            <p class="texto">
                Depois de encontrar o valor de Δ, utilizamos a fórmula de
                Bhaskara:
            </p>

            <div class="formula">
                x = (-b ± √Δ) / 2a
            </div>

            <div class="cards">

                <div class="card-resumo">

                    <h3>Δ &gt; 0</h3>

                    <p>
                        A equação possui duas raízes reais diferentes.
                    </p>

                </div>

                <div class="card-resumo">

                    <h3>Δ = 0</h3>

                    <p>
                        A equação possui duas raízes reais iguais.
                    </p>

                </div>

                <div class="card-resumo">

                    <h3>Δ &lt; 0</h3>

                    <p>
                        A equação não possui raízes reais.
                    </p>

                </div>

            </div>

        </div>


        <!-- TABELA -->

        <div class="secao">

            <div class="secao-titulo">

                <i class="fa-solid fa-table"></i>

                <h2>Resumo das funções</h2>

            </div>

            <div class="tabela-container">

                <table class="tabela">

                    <thead>

                        <tr>
                            <th>Função</th>
                            <th>Forma</th>
                            <th>Gráfico</th>
                            <th>Principal característica</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>1º grau</td>
                            <td>f(x) = ax + b</td>
                            <td>Reta</td>
                            <td>Crescimento ou decrescimento</td>
                        </tr>

                        <tr>
                            <td>2º grau</td>
                            <td>f(x) = ax² + bx + c</td>
                            <td>Parábola</td>
                            <td>Possui concavidade</td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>


        <!-- DICAS -->

        <div class="secao">

            <div class="secao-titulo">

                <i class="fa-solid fa-star"></i>

                <h2>Dicas para resolver exercícios</h2>

            </div>

            <ul class="lista">

                <li>
                    Identifique primeiro qual tipo de função está sendo
                    trabalhada.
                </li>

                <li>
                    Organize os valores de a, b e c antes de realizar os
                    cálculos.
                </li>

                <li>
                    Em funções do 1º grau, observe o coeficiente angular.
                </li>

                <li>
                    Em funções do 2º grau, calcule primeiro o Delta.
                </li>

                <li>
                    Confira os sinais durante os cálculos.
                </li>

                <li>
                    Sempre verifique sua resposta substituindo o resultado
                    na função ou equação.
                </li>

            </ul>

        </div>


        <!-- CONCLUSÃO -->

        <div class="secao">

            <div class="secao-titulo">

                <i class="fa-solid fa-check-circle"></i>

                <h2>Resumo final</h2>

            </div>

            <div class="destaque">

                <strong>Para lembrar:</strong>

                funções relacionam valores de entrada e saída.
                A função do 1º grau possui representação em forma de reta,
                enquanto a função do 2º grau possui representação em forma
                de parábola.

            </div>

        </div>

    </div>


    <!-- =========================
         RODAPÉ
    ========================= -->

    <div class="rodape">

        <i class="fa-solid fa-graduation-cap"></i>

        Material de apoio — SIFE | Sistema Inteligente de Frequência Escolar

    </div>

</div>

</body>
</html>