<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Apostila — Gramática | SIFE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

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

            flex-shrink: 0;

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

        .icone-card {
            color: #d92f3d;

            margin-right: 6px;
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

        .frase-exemplo {
            padding: 15px;

            background: #f8fafc;

            border-radius: 10px;

            color: #4a5568;

            font-size: 14px;

            line-height: 1.7;

            margin-bottom: 12px;
        }

        .palavra {
            color: #d92f3d;
            font-weight: 800;
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

        /* TABELA */

        .tabela-container {
            overflow-x: auto;

            margin-top: 20px;
        }

        .tabela {
            width: 100%;

            border-collapse: collapse;

            font-size: 13px;
        }

        .tabela th {
            background: #071b35;

            color: white;

            padding: 13px;

            text-align: left;
        }

        .tabela td {
            padding: 13px;

            border-bottom: 1px solid #edf2f7;

            color: #5f6c7b;
        }

        .tabela tr:nth-child(even) {
            background: #f8fafc;
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

        /* BOTÃO BAIXAR - PADRÃO SIFE */
a.btn-baixar {
    height: 45px !important;
    width: 100% !important;

    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 8px !important;

    padding: 0 !important;
    margin: 0 !important;

    background: #f3f6f9 !important;
    color: #627991 !important;

    border: none !important;
    border-radius: 12px !important;

    text-decoration: none !important;

    font-size: 13px !important;
    font-weight: 800 !important;

    box-sizing: border-box !important;
    transition: 0.2s !important;
}

a.btn-baixar:hover {
    background: #e8edf2 !important;
    color: #071b35 !important;
    text-decoration: none !important;
}

a.btn-baixar i {
    color: inherit !important;
    font-size: 14px !important;
}

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

        <a href="{{ route('materiaisPortugues') }}" class="voltar">
            <i class="fa-solid fa-arrow-left"></i>
            Voltar para materiais
        </a>

        <div class="cabecalho">

            <div class="icone-apostila">
                <i class="fa-solid fa-book-open"></i>
            </div>

            <div class="titulo-pequeno">
                APOSTILA DE PORTUGUÊS
            </div>

            <h1 class="titulo">
                Gramática
            </h1>

            <p class="subtitulo">
                Guia de revisão dos principais conteúdos de gramática
                da língua portuguesa.
            </p>

        </div>

    </div>


    <div class="conteudo">

        <!-- 1 -->

        <section class="secao">

            <div class="secao-titulo">

                <span class="numero-secao">
                    1
                </span>

                O que é Gramática?

            </div>

            <p class="texto">
                A <strong>gramática</strong> é o conjunto de regras e princípios
                que orientam o uso da língua. Ela ajuda a compreender como as
                palavras são formadas, organizadas e utilizadas nas frases.
            </p>

            <p class="texto">
                Estudar gramática é importante para desenvolver uma comunicação
                mais clara, tanto na escrita quanto na fala.
            </p>

            <div class="destaque">

                <strong>Importante:</strong>
                conhecer as regras gramaticais ajuda a escrever textos mais
                claros, organizados e adequados a diferentes situações.

            </div>

        </section>


        <!-- 2 -->

        <section class="secao">

            <div class="secao-titulo">

                <span class="numero-secao">
                    2
                </span>

                Classes de palavras

            </div>

            <p class="texto">
                As palavras da língua portuguesa podem ser classificadas
                de acordo com sua função dentro da frase.
            </p>

            <div class="cards">

                <div class="card-info">

                    <h3>
                        <i class="fa-solid fa-tag icone-card"></i>
                        Substantivo
                    </h3>

                    <p>
                        Nomeia pessoas, animais, objetos, lugares,
                        sentimentos e ideias.
                    </p>

                </div>

                <div class="card-info">

                    <h3>
                        <i class="fa-solid fa-person icone-card"></i>
                        Pronome
                    </h3>

                    <p>
                        Pode substituir ou acompanhar um substantivo,
                        indicando pessoas ou relações.
                    </p>

                </div>

                <div class="card-info">

                    <h3>
                        <i class="fa-solid fa-bolt icone-card"></i>
                        Verbo
                    </h3>

                    <p>
                        Indica ação, estado, fenômeno ou ocorrência.
                    </p>

                </div>

                <div class="card-info">

                    <h3>
                        <i class="fa-solid fa-star icone-card"></i>
                        Adjetivo
                    </h3>

                    <p>
                        Caracteriza ou atribui uma qualidade ao substantivo.
                    </p>

                </div>

                <div class="card-info">

                    <h3>
                        <i class="fa-solid fa-hashtag icone-card"></i>
                        Advérbio
                    </h3>

                    <p>
                        Modifica o sentido de um verbo, adjetivo ou outro
                        advérbio, indicando circunstâncias.
                    </p>

                </div>

                <div class="card-info">

                    <h3>
                        <i class="fa-solid fa-link icone-card"></i>
                        Conjunção
                    </h3>

                    <p>
                        Liga palavras, termos ou orações estabelecendo
                        relações entre eles.
                    </p>

                </div>

            </div>

            <div class="destaque">

                Além dessas classes, também temos artigo, numeral,
                preposição, interjeição e outras classificações importantes.

            </div>

        </section>


        <!-- 3 -->

        <section class="secao">

            <div class="secao-titulo">

                <span class="numero-secao">
                    3
                </span>

                Substantivo

            </div>

            <p class="texto">
                O <strong>substantivo</strong> é a palavra utilizada para
                nomear seres, objetos, lugares, sentimentos, ações e ideias.
            </p>

            <div class="exemplo">

                <div class="exemplo-topo">
                    Exemplos
                </div>

                <div class="exemplo-conteudo">

                    <div class="frase-exemplo">
                        <span class="palavra">Maria</span> foi à escola.
                    </div>

                    <div class="frase-exemplo">
                        O <span class="palavra">cachorro</span> está no jardim.
                    </div>

                    <div class="frase-exemplo">
                        A <span class="palavra">amizade</span> é importante.
                    </div>

                </div>

            </div>

            <div class="cards">

                <div class="card-info">

                    <h3>
                        Substantivo próprio
                    </h3>

                    <p>
                        Nomeia um ser específico.
                        Exemplo: <strong>Brasil, Ana, São Paulo.</strong>
                    </p>

                </div>

                <div class="card-info">

                    <h3>
                        Substantivo comum
                    </h3>

                    <p>
                        Nomeia seres de forma geral.
                        Exemplo: <strong>cidade, pessoa, escola.</strong>
                    </p>

                </div>

            </div>

        </section>


        <!-- 4 -->

        <section class="secao">

            <div class="secao-titulo">

                <span class="numero-secao">
                    4
                </span>

                Verbos

            </div>

            <p class="texto">
                Os <strong>verbos</strong> são palavras que podem indicar
                ações, estados, fenômenos da natureza ou acontecimentos.
            </p>

            <div class="exemplo">

                <div class="exemplo-topo">
                    Exemplos
                </div>

                <div class="exemplo-conteudo">

                    <div class="frase-exemplo">
                        João <span class="palavra">estuda</span> todos os dias.
                    </div>

                    <div class="frase-exemplo">
                        Os alunos <span class="palavra">aprenderam</span>
                        a matéria.
                    </div>

                    <div class="frase-exemplo">
                        A chuva <span class="palavra">caiu</span> durante a noite.
                    </div>

                </div>

            </div>

            <div class="destaque">

                <strong>Tempos verbais:</strong>
                os verbos podem indicar acontecimentos no passado,
                presente ou futuro.

            </div>

        </section>


        <!-- 5 -->

        <section class="secao">

            <div class="secao-titulo">

                <span class="numero-secao">
                    5
                </span>

                Concordância verbal

            </div>

            <p class="texto">
                A <strong>concordância verbal</strong> ocorre quando o verbo
                concorda com o sujeito da oração em número e pessoa.
            </p>

            <div class="exemplo">

                <div class="exemplo-topo">
                    Exemplos
                </div>

                <div class="exemplo-conteudo">

                    <div class="frase-exemplo">

                        <strong>Correto:</strong>
                        Os alunos <span class="palavra">estudam</span>
                        para a prova.

                    </div>

                    <div class="frase-exemplo">

                        <strong>Correto:</strong>
                        A menina <span class="palavra">estuda</span>
                        para a prova.

                    </div>

                </div>

            </div>

            <div class="dica">

                <i class="fa-solid fa-lightbulb"></i>

                <div class="dica-texto">

                    <strong>Dica:</strong>
                    primeiro identifique o sujeito da oração.
                    Depois verifique se o verbo está concordando com ele.

                </div>

            </div>

        </section>


        <!-- 6 -->

        <section class="secao">

            <div class="secao-titulo">

                <span class="numero-secao">
                    6
                </span>

                Concordância nominal

            </div>

            <p class="texto">
                A <strong>concordância nominal</strong> acontece quando
                palavras como artigos, adjetivos e pronomes concordam
                com o substantivo em gênero e número.
            </p>

            <div class="exemplo">

                <div class="exemplo-topo">
                    Exemplos
                </div>

                <div class="exemplo-conteudo">

                    <div class="frase-exemplo">
                        A menina <span class="palavra">bonita</span>.
                    </div>

                    <div class="frase-exemplo">
                        Os meninos <span class="palavra">inteligentes</span>.
                    </div>

                </div>

            </div>

        </section>


        <!-- 7 -->

        <section class="secao">

            <div class="secao-titulo">

                <span class="numero-secao">
                    7
                </span>

                Acentuação

            </div>

            <p class="texto">
                A acentuação gráfica indica, em determinadas palavras,
                a posição da sílaba tônica e ajuda a diferenciar palavras
                que possuem pronúncia ou significado diferentes.
            </p>

            <div class="tabela-container">

                <table class="tabela">

                    <thead>

                        <tr>
                            <th>Classificação</th>
                            <th>Exemplo</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>Oxítona</td>
                            <td>café, também, avó</td>
                        </tr>

                        <tr>
                            <td>Paroxítona</td>
                            <td>fácil, árvore, lápis</td>
                        </tr>

                        <tr>
                            <td>Proparoxítona</td>
                            <td>médico, matemática, lâmpada</td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <div class="destaque">

                <strong>Regra importante:</strong>
                todas as palavras proparoxítonas são acentuadas.

            </div>

        </section>


        <!-- 8 -->

        <section class="secao">

            <div class="secao-titulo">

                <span class="numero-secao">
                    8
                </span>

                Pontuação

            </div>

            <p class="texto">
                Os sinais de pontuação ajudam a organizar as ideias,
                indicar pausas e facilitar a compreensão de um texto.
            </p>

            <div class="cards">

                <div class="card-info">

                    <h3>
                        <span class="icone-card">.</span>
                        Ponto final
                    </h3>

                    <p>
                        Indica o encerramento de uma frase declarativa.
                    </p>

                </div>

                <div class="card-info">

                    <h3>
                        <span class="icone-card">,</span>
                        Vírgula
                    </h3>

                    <p>
                        Pode indicar uma pausa ou separar elementos
                        dentro de uma oração.
                    </p>

                </div>

                <div class="card-info">

                    <h3>
                        <span class="icone-card">?</span>
                        Interrogação
                    </h3>

                    <p>
                        Utilizada no final de perguntas diretas.
                    </p>

                </div>

                <div class="card-info">

                    <h3>
                        <span class="icone-card">!</span>
                        Exclamação
                    </h3>

                    <p>
                        Expressa surpresa, emoção, ordem ou intensidade.
                    </p>

                </div>

            </div>

            <div class="dica">

                <i class="fa-solid fa-lightbulb"></i>

                <div class="dica-texto">

                    <strong>Atenção:</strong>
                    a vírgula não deve ser utilizada para separar
                    o sujeito do predicado.

                </div>

            </div>

        </section>


        <!-- 9 -->

        <section class="secao">

            <div class="secao-titulo">

                <span class="numero-secao">
                    9
                </span>

                Exercícios de fixação

            </div>

            <p class="texto">
                Teste seus conhecimentos resolvendo as questões abaixo.
            </p>

            <div class="questoes">

                <div class="questao">

                    <div class="questao-numero">
                        QUESTÃO 01
                    </div>

                    <p>
                        Classifique a palavra "escola" quanto à classe
                        gramatical.
                    </p>

                </div>

                <div class="questao">

                    <div class="questao-numero">
                        QUESTÃO 02
                    </div>

                    <p>
                        Identifique o verbo na frase:
                        "Os alunos estudaram para a prova."
                    </p>

                </div>

                <div class="questao">

                    <div class="questao-numero">
                        QUESTÃO 03
                    </div>

                    <p>
                        A palavra "médico" é oxítona, paroxítona
                        ou proparoxítona?
                    </p>

                </div>

                <div class="questao">

                    <div class="questao-numero">
                        QUESTÃO 04
                    </div>

                    <p>
                        Identifique o adjetivo na frase:
                        "A menina inteligente resolveu o exercício."
                    </p>

                </div>

                <div class="questao">

                    <div class="questao-numero">
                        QUESTÃO 05
                    </div>

                    <p>
                        Qual sinal de pontuação deve ser usado
                        ao final de uma pergunta?
                    </p>

                </div>

                <div class="questao">

                    <div class="questao-numero">
                        QUESTÃO 06
                    </div>

                    <p>
                        Identifique o substantivo na frase:
                        "A amizade é muito importante."
                    </p>

                </div>

            </div>

            <div class="dica">

                <i class="fa-solid fa-lightbulb"></i>

                <div class="dica-texto">

                    <strong>Dica:</strong>
                    leia cada frase com atenção e observe a função
                    que cada palavra desempenha dentro dela.

                </div>

            </div>

        </section>


        <!-- 10 -->

        <section class="secao">

            <div class="secao-titulo">

                <span class="numero-secao">
                    <i class="fa-solid fa-check"></i>
                </span>

                Resumo rápido

            </div>

            <ul class="lista">

                <li>
                    <strong>Substantivo</strong> — nomeia seres, objetos,
                    lugares, sentimentos e ideias.
                </li>

                <li>
                    <strong>Adjetivo</strong> — caracteriza o substantivo.
                </li>

                <li>
                    <strong>Verbo</strong> — indica ação, estado ou fenômeno.
                </li>

                <li>
                    <strong>Pronome</strong> — substitui ou acompanha
                    o substantivo.
                </li>

                <li>
                    <strong>Advérbio</strong> — indica circunstâncias.
                </li>

                <li>
                    <strong>Concordância verbal</strong> — relação entre
                    sujeito e verbo.
                </li>

                <li>
                    <strong>Concordância nominal</strong> — relação entre
                    substantivo e seus modificadores.
                </li>

                <li>
                    <strong>Pontuação</strong> — organiza e facilita
                    a compreensão do texto.
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
                Revise os conteúdos, pratique os exercícios e continue
                aprimorando seus conhecimentos de Língua Portuguesa.
            </p>

        </div>


        <!-- BOTÕES -->

        <div class="botoes-acoes">

            <a href="{{ route('materiaisPortugues') }}" class="btn-voltar">

                <i class="fa-solid fa-arrow-left"></i>

                Voltar para materiais

            </a>

            <a href="{{ route('apostilaPortuguesPdf') }}" class="btn-baixar">

                <i class="fa-solid fa-download"></i>

                Baixar

            </a>

        </div>

    </div>

</div>

</body>
</html>