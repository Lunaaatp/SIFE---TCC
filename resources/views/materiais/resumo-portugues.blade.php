<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resumo — Figuras de Linguagem | SIFE</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

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
            max-width: 1050px;
            margin: 0 auto;
            padding: 35px 20px 60px;
        }

        .topo {
            margin-bottom: 25px;
        }

        .botoes-acoes {
            display: flex;
            gap: 10px;
            align-items: center;
            margin-bottom: 22px;
        }

        .btn-voltar,
        .btn-baixar {
            height: 45px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 0 20px;
            border-radius: 12px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 800;
            transition: 0.2s;
        }

        .btn-voltar {
            background: #fff3f3;
            color: #d92f3d;
        }

        .btn-voltar:hover {
            background: #d92f3d;
            color: white;
        }

        .btn-baixar {
            background: #f3f6f9;
            color: #627991;
        }

        .btn-baixar:hover {
            background: #e8edf2;
            color: #071b35;
        }

        .titulo-pequeno {
            color: #d92f3d;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.2px;
            margin-bottom: 7px;
        }

        .titulo-principal {
            margin: 0;
            color: #071b35;
            font-size: 32px;
            font-weight: 800;
        }

        .subtitulo {
            margin: 8px 0 0;
            color: #7b8794;
            font-size: 14px;
        }

        .card {
            background: white;
            border-radius: 18px;
            padding: 28px;
            margin-bottom: 18px;
            border: 1px solid #edf2f7;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
        }

        .card h2 {
            margin: 0 0 12px;
            color: #071b35;
            font-size: 20px;
            font-weight: 800;
        }

        .card h3 {
            margin: 20px 0 8px;
            color: #071b35;
            font-size: 16px;
            font-weight: 800;
        }

        .card p {
            margin: 0 0 10px;
            color: #627991;
            font-size: 13px;
            line-height: 1.7;
        }

        .lista {
            margin: 10px 0 0;
            padding-left: 20px;
            color: #627991;
            font-size: 13px;
            line-height: 1.8;
        }

        .lista li {
            margin-bottom: 5px;
        }

        .destaque {
            background: #fff3f3;
            border-left: 4px solid #d92f3d;
            padding: 14px 16px;
            margin-top: 15px;
            border-radius: 10px;
            color: #627991;
            font-size: 13px;
            line-height: 1.7;
        }

        .figura {
            background: #f8fafc;
            border: 1px solid #edf2f7;
            border-radius: 12px;
            padding: 15px 17px;
            margin-top: 12px;
        }

        .figura strong {
            display: block;
            color: #d92f3d;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .figura span {
            display: block;
            color: #627991;
            font-size: 13px;
            line-height: 1.6;
        }

        .exemplo {
            margin-top: 8px;
            padding: 10px 12px;
            background: white;
            border-radius: 8px;
            color: #071b35;
            font-size: 12px;
            font-style: italic;
            border: 1px solid #edf2f7;
        }

        .resumo-final {
            background: #071b35;
            color: white;
            border-radius: 18px;
            padding: 25px;
            margin-top: 20px;
        }

        .resumo-final h2 {
            margin: 0 0 12px;
            font-size: 19px;
            font-weight: 800;
        }

        .resumo-final p {
            margin: 0;
            color: #dbe4ed;
            font-size: 13px;
            line-height: 1.7;
        }

        @media (max-width: 700px) {

            .container-principal {
                padding: 25px 15px 45px;
            }

            .titulo-principal {
                font-size: 25px;
            }

            .card {
                padding: 20px;
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

    <div class="topo">

        <div class="botoes-acoes">

            <a href="{{ route('materiaisPortugues') }}" class="btn-voltar">
                <i class="fa-solid fa-arrow-left"></i>
                Voltar para materiais
            </a>

            <a href="{{ route('resumoPortuguesPdf') }}" class="btn-baixar">
                <i class="fa-solid fa-download"></i>
                Baixar
            </a>

        </div>

        <div class="titulo-pequeno">
            RESUMO DE PORTUGUÊS
        </div>

        <h1 class="titulo-principal">
            Figuras de Linguagem
        </h1>

        <p class="subtitulo">
            Aprenda de forma simples as principais figuras de linguagem
            e como identificá-las.
        </p>

    </div>


    <!-- INTRODUÇÃO -->

    <section class="card">

        <h2>O que são Figuras de Linguagem?</h2>

        <p>
            Figuras de linguagem são recursos utilizados para deixar a
            comunicação mais expressiva, criativa e interessante.
            Elas modificam ou ampliam o sentido comum das palavras.
        </p>

        <div class="destaque">
            <strong>Dica:</strong>
            Para identificar uma figura de linguagem, observe se a frase
            apresenta comparação, exagero, oposição, repetição ou algum
            outro recurso que produza um efeito diferente do sentido literal.
        </div>

    </section>


    <!-- METÁFORA -->

    <section class="card">

        <h2>1. Metáfora</h2>

        <p>
            A metáfora acontece quando uma palavra ou expressão é utilizada
            com um sentido diferente do seu significado habitual, criando
            uma comparação implícita.
        </p>

        <div class="figura">

            <strong>Exemplo</strong>

            <span>
                "Meu irmão é um leão."
            </span>

            <div class="exemplo">
                A pessoa não é literalmente um leão. A frase indica que
                ela é corajosa ou forte.
            </div>

        </div>

    </section>


    <!-- COMPARAÇÃO -->

    <section class="card">

        <h2>2. Comparação</h2>

        <p>
            A comparação estabelece uma relação explícita entre dois
            elementos, geralmente utilizando palavras como
            <strong>"como"</strong>, <strong>"tal qual"</strong>,
            <strong>"assim como"</strong> ou <strong>"parece"</strong>.
        </p>

        <div class="figura">

            <strong>Exemplo</strong>

            <span>
                "Ela é rápida como um raio."
            </span>

        </div>

    </section>


    <!-- PERSONIFICAÇÃO -->

    <section class="card">

        <h2>3. Personificação</h2>

        <p>
            A personificação, também chamada de prosopopeia, acontece quando
            características, sentimentos ou ações humanas são atribuídos
            a animais, objetos ou elementos da natureza.
        </p>

        <div class="figura">

            <strong>Exemplo</strong>

            <span>
                "O vento cantava durante a noite."
            </span>

        </div>

    </section>


    <!-- HIPÉRBOLE -->

    <section class="card">

        <h2>4. Hipérbole</h2>

        <p>
            A hipérbole é o uso intencional do exagero para enfatizar
            uma ideia ou sentimento.
        </p>

        <div class="figura">

            <strong>Exemplo</strong>

            <span>
                "Estou morrendo de fome."
            </span>

            <div class="exemplo">
                A pessoa não está literalmente morrendo. O exagero serve
                para mostrar que está com muita fome.
            </div>

        </div>

    </section>


    <!-- EUFEMISMO -->

    <section class="card">

        <h2>5. Eufemismo</h2>

        <p>
            O eufemismo consiste em utilizar uma expressão mais suave
            para substituir uma ideia considerada desagradável,
            triste ou difícil.
        </p>

        <div class="figura">

            <strong>Exemplo</strong>

            <span>
                "Ele partiu desta vida."
            </span>

            <div class="exemplo">
                A expressão "partiu desta vida" é utilizada de forma
                mais suave para falar sobre a morte.
            </div>

        </div>

    </section>


    <!-- IRONIA -->

    <section class="card">

        <h2>6. Ironia</h2>

        <p>
            A ironia ocorre quando se diz algo querendo transmitir,
            geralmente, uma ideia diferente ou contrária ao sentido literal.
        </p>

        <div class="figura">

            <strong>Exemplo</strong>

            <span>
                "Que ótimo! Você chegou apenas uma hora atrasado."
            </span>

        </div>

    </section>


    <!-- ANTÍTESE -->

    <section class="card">

        <h2>7. Antítese</h2>

        <p>
            A antítese consiste na aproximação de palavras ou ideias
            que apresentam sentidos opostos.
        </p>

        <div class="figura">

            <strong>Exemplo</strong>

            <span>
                "O amor e o ódio caminham juntos."
            </span>

        </div>

    </section>


    <!-- PARADOXO -->

    <section class="card">

        <h2>8. Paradoxo</h2>

        <p>
            O paradoxo apresenta uma ideia aparentemente contraditória,
            mas que pode produzir um significado ou reflexão.
        </p>

        <div class="figura">

            <strong>Exemplo</strong>

            <span>
                "É uma dor que traz felicidade."
            </span>

        </div>

    </section>


    <!-- ONOMATOPEIA -->

    <section class="card">

        <h2>9. Onomatopeia</h2>

        <p>
            A onomatopeia representa sons ou ruídos por meio de palavras
            ou expressões.
        </p>

        <div class="figura">

            <strong>Exemplos</strong>

            <span>
                "Tic-tac", "miau", "toc-toc", "bum" e "au-au".
            </span>

        </div>

    </section>


    <!-- ALITERAÇÃO -->

    <section class="card">

        <h2>10. Aliteração</h2>

        <p>
            A aliteração consiste na repetição de sons consonantais
            semelhantes em uma sequência de palavras.
        </p>

        <div class="figura">

            <strong>Exemplo</strong>

            <span>
                "O rato roeu a roupa do rei de Roma."
            </span>

        </div>

    </section>


    <!-- RESUMO -->

    <section class="resumo-final">

        <h2>Resumo rápido</h2>

        <p>
            <strong>Metáfora:</strong> comparação implícita.<br>
            <strong>Comparação:</strong> comparação explícita.<br>
            <strong>Personificação:</strong> características humanas a seres não humanos.<br>
            <strong>Hipérbole:</strong> exagero intencional.<br>
            <strong>Eufemismo:</strong> suavização de uma ideia.<br>
            <strong>Ironia:</strong> sentido diferente ou contrário ao literal.<br>
            <strong>Antítese:</strong> aproximação de ideias opostas.<br>
            <strong>Paradoxo:</strong> ideia aparentemente contraditória.<br>
            <strong>Onomatopeia:</strong> representação de sons.<br>
            <strong>Aliteração:</strong> repetição de sons consonantais.
        </p>

    </section>

</div>

</body>

</html>