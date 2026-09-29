<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Apostila — Funções do 1º Grau | SIFE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f4f7f9;
            font-family: 'Inter', sans-serif;
            color: #2d3436;
        }

        .container-principal {
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
            padding: 35px 25px 60px;
        }

        /* TOPO */

        .topo {
            margin-bottom: 30px;
        }

        .voltar {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            padding: 11px 17px;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 10px;

            text-decoration: none;
            font-size: 13px;
            font-weight: 700;

            transition: 0.2s;
        }

        .voltar:hover {
            background: #d92f3d;
            color: white;
            transform: translateY(-1px);
        }

        .cabecalho {
            margin-top: 25px;
            background: white;
            border-radius: 18px;
            padding: 30px;
            border: 1px solid #edf2f7;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.04);
        }

        .titulo-pequeno {
            color: #d92f3d;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .titulo {
            margin: 0;
            color: #071b35;
            font-size: 30px;
            font-weight: 800;
        }

        .subtitulo {
            margin: 10px 0 0;
            color: #7b8794;
            font-size: 14px;
            line-height: 1.6;
        }

        .icone-apostila {
            width: 55px;
            height: 55px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 14px;

            font-size: 23px;

            margin-bottom: 18px;
        }

        /* CONTEÚDO */

        .conteudo {
            margin-top: 25px;
        }

        .secao {
            background: white;
            border-radius: 18px;
            padding: 28px;
            margin-bottom: 20px;

            border: 1px solid #edf2f7;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
        }

        .secao-titulo {
            display: flex;
            align-items: center;
            gap: 12px;

            color: #071b35;

            font-size: 20px;
            font-weight: 800;

            margin-bottom: 18px;
        }

        .numero-secao {
            width: 36px;
            height: 36px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #d92f3d;
            color: white;

            border-radius: 10px;

            font-size: 14px;
            font-weight: 800;
        }

        .texto {
            color: #5f6c7b;
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 12px;
        }

        .texto strong {
            color: #071b35;
        }

        /* DESTAQUE */

        .destaque {
            background: #fff5f5;
            border-left: 4px solid #d92f3d;

            padding: 17px 20px;

            border-radius: 10px;

            color: #5f3034;
            font-size: 14px;
            line-height: 1.7;

            margin: 18px 0;
        }

        /* FÓRMULA */

        .formula {
            background: #f7f9fb;

            border: 1px solid #e7edf3;

            border-radius: 14px;

            padding: 22px;

            text-align: center;

            margin: 20px 0;
        }

        .formula-label {
            display: block;

            color: #7b8794;

            font-size: 12px;
            font-weight: 700;

            margin-bottom: 8px;
        }

        .formula-principal {
            color: #071b35;

            font-size: 25px;
            font-weight: 800;
        }

        .formula-principal span {
            color: #d92f3d;
        }

        /* CARDS */

        .cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;

            margin-top: 20px;
        }

        .card-info {
            padding: 20px;

            background: #f8fafc;

            border: 1px solid #edf2f7;
            border-radius: 14px;
        }

        .card-info h3 {
            margin: 0 0 8px;

            color: #071b35;

            font-size: 15px;
            font-weight: 800;
        }

        .card-info p {
            margin: 0;

            color: #718096;

            font-size: 13px;
            line-height: 1.7;
        }

        .letra {
            color: #d92f3d;
            font-weight: 800;
        }

        /* EXEMPLO */

        .exemplo {
            margin-top: 20px;

            border: 1px solid #edf2f7;
            border-radius: 14px;

            overflow: hidden;
        }

        .exemplo-topo {
            background: #071b35;
            color: white;

            padding: 13px 18px;

            font-size: 13px;
            font-weight: 800;
        }

        .exemplo-conteudo {
            padding: 20px;
        }

        .passo {
            display: flex;
            gap: 12px;

            margin-bottom: 15px;
        }

        .passo:last-child {
            margin-bottom: 0;
        }

        .passo-numero {
            min-width: 28px;
            height: 28px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 8px;

            font-size: 12px;
            font-weight: 800;
        }

        .passo-texto {
            color: #5f6c7b;

            font-size: 13px;
            line-height: 1.7;
        }

        /* LISTA */

        .lista {
            padding-left: 20px;
            margin: 15px 0 0;
        }

        .lista li {
            color: #5f6c7b;

            font-size: 14px;
            line-height: 1.8;

            margin-bottom: 7px;
        }

        .lista li::marker {
            color: #d92f3d;
        }

        /* EXERCÍCIOS */

        .questoes {
            display: grid;
            grid-template-columns: 1fr 1fr;

            gap: 14px;

            margin-top: 20px;
        }

        .questao {
            padding: 18px;

            background: #f8fafc;

            border: 1px solid #edf2f7;

            border-radius: 13px;
        }

        .questao-numero {
            color: #d92f3d;

            font-size: 12px;
            font-weight: 800;

            margin-bottom: 7px;
        }

        .questao p {
            margin: 0;

            color: #4a5568;

            font-size: 13px;
            line-height: 1.6;
        }

        /* DICA */

        .dica {
            display: flex;
            align-items: flex-start;
            gap: 14px;

            margin-top: 20px;

            padding: 18px;

            background: #f3f6f9;

            border-radius: 13px;
        }

        .dica i {
            color: #d92f3d;
            font-size: 18px;

            margin-top: 2px;
        }

        .dica-texto {
            color: #627991;

            font-size: 13px;
            line-height: 1.7;
        }

        .dica-texto strong {
            color: #071b35;
        }

        /* FINAL */

        .final {
            background: #071b35;
            color: white;

            border-radius: 18px;

            padding: 30px;

            text-align: center;

            margin-top: 25px;
        }

        .final i {
            font-size: 28px;
            margin-bottom: 12px;
        }

        .final h2 {
            margin: 0 0 8px;

            font-size: 20px;
            font-weight: 800;
        }

        .final p {
            margin: 0;

            color: #cbd5e1;

            font-size: 13px;
            line-height: 1.7;
        }

        /* BOTÕES */

        .botoes-acoes {
            display: flex;
            gap: 10px;
            align-items: center;

            margin-top: 25px;
        }

        .btn-voltar {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

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

        /* RESPONSIVO */

        @media (max-width: 700px) {

            .container-principal {
                padding: 25px 15px 40px;
            }

            .titulo {
                font-size: 24px;
            }

            .cards,
            .questoes {
                grid-template-columns: 1fr;
            }

            .secao {
                padding: 22px 18px;
            }

            .botoes-acoes {
                flex-direction: column;
                align-items: stretch;
            }

            .btn-voltar,
            .btn-baixar {
                width: 100%;
            }
        }

    </style>
</head>

<body>

<div class="container-principal">

    <!-- TOPO -->

    <div class="topo">

        <a href="{{ route('materiaisMatematica') }}" class="voltar">
            <i class="fa-solid fa-arrow-left"></i>
            Voltar para materiais
        </a>

        <div class="cabecalho">

            <div class="icone-apostila">
                <i class="fa-solid fa-book-open"></i>
            </div>

            <div class="titulo-pequeno">
                APOSTILA DE MATEMÁTICA
            </div>

            <h1 class="titulo">
                Funções do 1º Grau
            </h1>

            <p class="subtitulo">
                Aprenda os principais conceitos, fórmulas e aplicações
                das funções do primeiro grau.
            </p>

        </div>

    </div>


    <div class="conteudo">

        <!-- SEÇÃO 1 -->

        <section class="secao">

            <div class="secao-titulo">
                <span class="numero-secao">1</span>
                O que é uma função?
            </div>

            <p class="texto">
                Uma <strong>função</strong> é uma relação entre duas grandezas
                na qual cada valor de entrada está associado a um único valor
                de saída.
            </p>

            <p class="texto">
                Em matemática, normalmente representamos a entrada pela letra
                <strong>x</strong> e a saída pela letra <strong>y</strong>
                ou <strong>f(x)</strong>.
            </p>

            <div class="destaque">
                <strong>Importante:</strong>
                em uma função, cada valor de x deve estar relacionado
                a apenas um valor de y.
            </div>

            <div class="formula">

                <span class="formula-label">
                    Representação de uma função
                </span>

                <div class="formula-principal">
                    y = f(<span>x</span>)
                </div>

            </div>

        </section>


        <!-- SEÇÃO 2 -->

        <section class="secao">

            <div class="secao-titulo">
                <span class="numero-secao">2</span>
                Função do 1º Grau
            </div>

            <p class="texto">
                A função do primeiro grau é uma função que pode ser representada
                pela expressão:
            </p>

            <div class="formula">

                <span class="formula-label">
                    Fórmula da função do 1º grau
                </span>

                <div class="formula-principal">
                    f(x) = <span>ax</span> + b
                </div>

            </div>

            <p class="texto">
                Nessa expressão, <strong>a</strong> e <strong>b</strong> são
                números reais, sendo que <strong>a ≠ 0</strong>.
            </p>

            <div class="cards">

                <div class="card-info">

                    <h3>
                        <span class="letra">a</span> — Coeficiente angular
                    </h3>

                    <p>
                        Determina a inclinação da reta e indica se a função
                        é crescente ou decrescente.
                    </p>

                </div>

                <div class="card-info">

                    <h3>
                        <span class="letra">b</span> — Coeficiente linear
                    </h3>

                    <p>
                        Indica o ponto onde a reta cruza o eixo y do gráfico.
                    </p>

                </div>

            </div>

        </section>


        <!-- SEÇÃO 3 -->

        <section class="secao">

            <div class="secao-titulo">
                <span class="numero-secao">3</span>
                Função crescente e decrescente
            </div>

            <p class="texto">
                Podemos descobrir o comportamento da função observando
                o valor do coeficiente <strong>a</strong>.
            </p>

            <div class="cards">

                <div class="card-info">

                    <h3>
                        <i class="fa-solid fa-arrow-trend-up"
                           style="color:#d92f3d;"></i>
                        Função crescente
                    </h3>

                    <p>
                        Quando <strong>a &gt; 0</strong>, a função é crescente.
                        Conforme x aumenta, o valor de f(x) também aumenta.
                    </p>

                </div>

                <div class="card-info">

                    <h3>
                        <i class="fa-solid fa-arrow-trend-down"
                           style="color:#d92f3d;"></i>
                        Função decrescente
                    </h3>

                    <p>
                        Quando <strong>a &lt; 0</strong>, a função é decrescente.
                        Conforme x aumenta, o valor de f(x) diminui.
                    </p>

                </div>

            </div>

            <div class="destaque">
                <strong>Resumo:</strong>
                se a &gt; 0 → crescente &nbsp;&nbsp; | &nbsp;&nbsp;
                se a &lt; 0 → decrescente.
            </div>

        </section>


        <!-- SEÇÃO 4 -->

        <section class="secao">

            <div class="secao-titulo">
                <span class="numero-secao">4</span>
                Como encontrar a raiz da função?
            </div>

            <p class="texto">
                A <strong>raiz da função</strong> é o valor de x para o qual
                o resultado da função é igual a zero.
            </p>

            <div class="formula">

                <span class="formula-label">
                    Para encontrar a raiz
                </span>

                <div class="formula-principal">
                    ax + b = 0
                </div>

            </div>

            <p class="texto">
                Isolando o x, encontramos:
            </p>

            <div class="formula">

                <div class="formula-principal">
                    x = <span>−b / a</span>
                </div>

            </div>

            <div class="destaque">
                A raiz da função corresponde ao ponto em que a reta
                cruza o <strong>eixo x</strong>.
            </div>

        </section>


        <!-- SEÇÃO 5 -->

        <section class="secao">

            <div class="secao-titulo">
                <span class="numero-secao">5</span>
                Exemplo resolvido
            </div>

            <p class="texto">
                Considere a função:
            </p>

            <div class="formula">

                <div class="formula-principal">
                    f(x) = <span>2x + 4</span>
                </div>

            </div>

            <div class="exemplo">

                <div class="exemplo-topo">
                    Encontrando a raiz da função
                </div>

                <div class="exemplo-conteudo">

                    <div class="passo">

                        <div class="passo-numero">
                            1
                        </div>

                        <div class="passo-texto">
                            Igualamos a função a zero:
                            <strong>2x + 4 = 0</strong>
                        </div>

                    </div>

                    <div class="passo">

                        <div class="passo-numero">
                            2
                        </div>

                        <div class="passo-texto">
                            Passamos o 4 para o outro lado:
                            <strong>2x = -4</strong>
                        </div>

                    </div>

                    <div class="passo">

                        <div class="passo-numero">
                            3
                        </div>

                        <div class="passo-texto">
                            Dividimos por 2:
                            <strong>x = -2</strong>
                        </div>

                    </div>

                    <div class="passo">

                        <div class="passo-numero">
                            ✓
                        </div>

                        <div class="passo-texto">
                            Portanto, a raiz da função é
                            <strong>x = -2</strong>.
                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- SEÇÃO 6 -->

        <section class="secao">

            <div class="secao-titulo">
                <span class="numero-secao">6</span>
                Gráfico da função do 1º grau
            </div>

            <p class="texto">
                O gráfico de uma função do primeiro grau é sempre uma
                <strong>reta</strong>.
            </p>

            <p class="texto">
                Para construir o gráfico, podemos escolher alguns valores
                para x e calcular os respectivos valores de y.
            </p>

            <div class="exemplo">

                <div class="exemplo-topo">
                    Exemplo: f(x) = 2x + 1
                </div>

                <div class="exemplo-conteudo">

                    <ul class="lista">

                        <li>
                            Para x = 0:
                            <strong>f(0) = 1</strong>
                        </li>

                        <li>
                            Para x = 1:
                            <strong>f(1) = 3</strong>
                        </li>

                        <li>
                            Para x = 2:
                            <strong>f(2) = 5</strong>
                        </li>

                    </ul>

                    <div class="destaque">
                        Com esses pontos podemos construir a reta que
                        representa a função no plano cartesiano.
                    </div>

                </div>

            </div>

        </section>


        <!-- SEÇÃO 7 -->

        <section class="secao">

            <div class="secao-titulo">
                <span class="numero-secao">7</span>
                Aplicações no cotidiano
            </div>

            <p class="texto">
                As funções do primeiro grau aparecem em diversas situações
                do nosso dia a dia.
            </p>

            <ul class="lista">

                <li>
                    Cálculo de preços de produtos.
                </li>

                <li>
                    Tarifas de transporte.
                </li>

                <li>
                    Salários e comissões.
                </li>

                <li>
                    Consumo de energia elétrica.
                </li>

                <li>
                    Distância percorrida em determinado tempo.
                </li>

                <li>
                    Cálculo de custos de serviços.
                </li>

            </ul>

            <div class="destaque">
                <strong>Exemplo:</strong>
                imagine um estacionamento que cobra R$ 10,00 de taxa fixa
                mais R$ 5,00 por hora. O custo pode ser representado por
                uma função do tipo <strong>f(x) = 5x + 10</strong>.
            </div>

        </section>


        <!-- SEÇÃO 8 -->

        <section class="secao">

            <div class="secao-titulo">
                <span class="numero-secao">8</span>
                Exercícios de fixação
            </div>

            <p class="texto">
                Resolva os exercícios abaixo para testar seus conhecimentos.
            </p>

            <div class="questoes">

                <div class="questao">
                    <div class="questao-numero">QUESTÃO 01</div>
                    <p>
                        Identifique os coeficientes a e b da função
                        f(x) = 3x + 5.
                    </p>
                </div>

                <div class="questao">
                    <div class="questao-numero">QUESTÃO 02</div>
                    <p>
                        A função f(x) = 4x - 8 é crescente ou decrescente?
                    </p>
                </div>

                <div class="questao">
                    <div class="questao-numero">QUESTÃO 03</div>
                    <p>
                        Determine a raiz da função f(x) = 2x + 6.
                    </p>
                </div>

                <div class="questao">
                    <div class="questao-numero">QUESTÃO 04</div>
                    <p>
                        Determine a raiz da função f(x) = 5x - 15.
                    </p>
                </div>

                <div class="questao">
                    <div class="questao-numero">QUESTÃO 05</div>
                    <p>
                        Calcule f(2) para a função f(x) = 3x + 1.
                    </p>
                </div>

                <div class="questao">
                    <div class="questao-numero">QUESTÃO 06</div>
                    <p>
                        Calcule f(5) para a função f(x) = 2x - 4.
                    </p>
                </div>

            </div>

            <div class="dica">

                <i class="fa-solid fa-lightbulb"></i>

                <div class="dica-texto">
                    <strong>Dica:</strong>
                    para resolver uma função, substitua o valor de x
                    na expressão e faça as operações normalmente.
                </div>

            </div>

        </section>


        <!-- RESUMO -->

        <section class="secao">

            <div class="secao-titulo">
                <span class="numero-secao">
                    <i class="fa-solid fa-check"></i>
                </span>

                Resumo rápido
            </div>

            <ul class="lista">

                <li>
                    A função do 1º grau possui a forma
                    <strong>f(x) = ax + b</strong>.
                </li>

                <li>
                    O coeficiente <strong>a</strong> determina se a função
                    é crescente ou decrescente.
                </li>

                <li>
                    O coeficiente <strong>b</strong> indica onde a reta
                    cruza o eixo y.
                </li>

                <li>
                    A raiz é encontrada fazendo
                    <strong>f(x) = 0</strong>.
                </li>

                <li>
                    O gráfico de uma função do 1º grau é uma
                    <strong>reta</strong>.
                </li>

            </ul>

        </section>


        <!-- FINAL -->

        <div class="final">

            <i class="fa-solid fa-graduation-cap"></i>

            <h2>
                Você chegou ao final da apostila!
            </h2>

            <p>
                Revise os conceitos, pratique os exercícios e tente
                identificar funções do 1º grau em situações do cotidiano.
            </p>

        </div>


        <!-- BOTÕES -->

        <div class="botoes-acoes">

            <a href="{{ route('materiaisMatematica') }}" class="btn-voltar">

                <i class="fa-solid fa-arrow-left"></i>

                Voltar para materiais

            </a>

        </div>

    </div>

</div>

</body>
</html>