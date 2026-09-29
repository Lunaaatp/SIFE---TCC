<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Apostila — Genética | SIFE</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

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

        /* TOPO */

        .topo {
            margin-bottom: 25px;
        }

        .acoes-topo {
            display: flex;
            gap: 10px;
            align-items: center;
            margin-bottom: 22px;
        }

        .voltar,
        .btn-baixar {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            height: 45px;
            padding: 0 20px;

            border-radius: 12px;

            text-decoration: none;

            font-size: 13px;
            font-weight: 800;

            transition: 0.2s;
        }

        .voltar {
            background: #fff3f3;
            color: #d92f3d;
        }

        .voltar:hover {
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
            line-height: 1.6;
        }

        /* AVISO */

        .aviso {
            display: flex;
            align-items: flex-start;
            gap: 12px;

            margin-bottom: 20px;
            padding: 16px 18px;

            background: #fff7f7;
            border-left: 4px solid #d92f3d;

            border-radius: 10px;

            color: #627991;
            font-size: 13px;
            line-height: 1.7;
        }

        .aviso i {
            color: #d92f3d;
            font-size: 17px;
            margin-top: 2px;
        }

        /* SEÇÕES */

        .secao {
            background: white;

            border: 1px solid #edf2f7;
            border-radius: 18px;

            padding: 28px;
            margin-bottom: 20px;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
        }

        .cabecalho-secao {
            display: flex;
            align-items: center;
            gap: 14px;

            margin-bottom: 18px;
        }

        .icone-secao {
            width: 46px;
            height: 46px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 12px;

            font-size: 18px;
            flex-shrink: 0;
        }

        .numero {
            color: #d92f3d;

            font-size: 11px;
            font-weight: 800;

            letter-spacing: 1px;

            margin-bottom: 3px;
        }

        .cabecalho-secao h2 {
            margin: 0;

            color: #071b35;

            font-size: 20px;
            font-weight: 800;
        }

        .secao p {
            color: #627991;

            font-size: 13px;
            line-height: 1.8;

            margin-bottom: 12px;
        }

        /* LISTAS */

        .lista {
            margin: 12px 0 0;
            padding-left: 22px;

            color: #627991;

            font-size: 13px;
            line-height: 1.8;
        }

        .lista li {
            margin-bottom: 6px;
        }

        /* CARDS */

        .grid-cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;

            margin-top: 18px;
        }

        .card-info {
            padding: 18px;

            background: #f8fafb;

            border: 1px solid #edf2f7;
            border-radius: 12px;
        }

        .card-info h3 {
            margin: 0 0 8px;

            color: #071b35;

            font-size: 14px;
            font-weight: 800;
        }

        .card-info p {
            margin: 0;

            color: #627991;

            font-size: 12px;
            line-height: 1.7;
        }

        /* DESTAQUE */

        .destaque {
            margin-top: 18px;

            padding: 16px 18px;

            background: #fff7f7;

            border-left: 4px solid #d92f3d;

            border-radius: 10px;

            color: #627991;

            font-size: 13px;
            line-height: 1.7;
        }

        .destaque strong {
            color: #071b35;
        }

        /* TABELA GENÉTICA */

        .tabela-container {
            overflow-x: auto;
            margin-top: 18px;
        }

        .tabela {
            width: 100%;
            border-collapse: collapse;

            font-size: 12px;
        }

        .tabela th {
            padding: 13px;

            background: #071b35;
            color: white;

            text-align: left;

            font-weight: 700;
        }

        .tabela td {
            padding: 13px;

            border-bottom: 1px solid #edf2f7;

            color: #627991;
        }

        .tabela tr:nth-child(even) {
            background: #f8fafb;
        }

        /* RESUMO */

        .resumo-final {
            background: #071b35;
            color: white;

            border-radius: 18px;

            padding: 28px;

            margin-bottom: 20px;
        }

        .resumo-final h2 {
            margin: 0 0 15px;

            font-size: 20px;
            font-weight: 800;
        }

        .resumo-final ul {
            margin: 0;

            padding-left: 20px;

            font-size: 13px;
            line-height: 1.9;
        }

        /* BOTÕES */

        .botoes-acoes {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .btn-voltar-final,
        .btn-baixar-final {
            flex: 1;

            height: 45px;

            display: flex;
            align-items: center;
            justify-content: center;

            gap: 8px;

            border-radius: 12px;

            text-decoration: none;

            font-size: 13px;
            font-weight: 800;

            transition: 0.2s;
        }

        .btn-voltar-final {
            background: #fff3f3;
            color: #d92f3d;
        }

        .btn-voltar-final:hover {
            background: #d92f3d;
            color: white;
        }

        .btn-baixar-final {
            background: #f3f6f9;
            color: #627991;
        }

        .btn-baixar-final:hover {
            background: #e8edf2;
            color: #071b35;
        }

        /* RESPONSIVO */

        @media (max-width: 700px) {

            .container-principal {
                padding: 25px 15px 45px;
            }

            .titulo-principal {
                font-size: 25px;
            }

            .secao,
            .resumo-final {
                padding: 20px;
            }

            .grid-cards {
                grid-template-columns: 1fr;
            }

            .acoes-topo,
            .botoes-acoes {
                flex-direction: column;
                align-items: stretch;
            }

            .voltar,
            .btn-baixar,
            .btn-voltar-final,
            .btn-baixar-final {
                width: 100%;
            }

        }

    </style>

</head>

<body>

<div class="container-principal">

    <!-- TOPO -->

    <div class="topo">

        <div class="acoes-topo">

            <a href="{{ route('materiais.biologia') }}" class="voltar">

                <i class="fa-solid fa-arrow-left"></i>

                Voltar para materiais

            </a>

            <a href="{{ route('apostilaBiologiaPdf') }}" class="btn-baixar">

                <i class="fa-solid fa-download"></i>

                Baixar

            </a>

        </div>

        <div class="titulo-pequeno">
            APOSTILA DE BIOLOGIA
        </div>

        <h1 class="titulo-principal">
            Genética
        </h1>

        <p class="subtitulo">
            Material completo sobre genética, genes, hereditariedade
            e os principais conceitos da transmissão das características.
        </p>

    </div>


    <!-- AVISO -->

    <div class="aviso">

        <i class="fa-solid fa-circle-info"></i>

        <span>
            <strong>Dica de estudo:</strong>
            preste atenção às diferenças entre DNA, gene, cromossomo,
            genótipo e fenótipo. Esses conceitos são fundamentais
            para compreender os demais assuntos da Genética.
        </span>

    </div>


    <!-- 1 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-dna"></i>
            </div>

            <div>

                <div class="numero">
                    01 — INTRODUÇÃO
                </div>

                <h2>
                    O que é Genética?
                </h2>

            </div>

        </div>

        <p>
            A Genética é a área da Biologia que estuda a
            <strong>hereditariedade</strong> e a transmissão das
            características dos seres vivos de uma geração para outra.
        </p>

        <p>
            Ela também estuda os genes, o DNA, os cromossomos,
            as variações genéticas e os mecanismos responsáveis
            pela transmissão das informações biológicas.
        </p>

        <div class="destaque">

            <strong>Hereditariedade:</strong>
            processo pelo qual características genéticas podem
            ser transmitidas dos pais para os descendentes.

        </div>

    </section>


    <!-- 2 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-layer-group"></i>
            </div>

            <div>

                <div class="numero">
                    02 — CONCEITOS FUNDAMENTAIS
                </div>

                <h2>
                    DNA, genes e cromossomos
                </h2>

            </div>

        </div>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    DNA
                </h3>

                <p>
                    Molécula que armazena as informações genéticas
                    dos organismos. Sua estrutura possui duas fitas
                    organizadas em uma dupla hélice.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Gene
                </h3>

                <p>
                    Segmento do DNA que contém informações relacionadas
                    a determinadas características ou funções biológicas.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Cromossomo
                </h3>

                <p>
                    Estrutura formada principalmente por DNA associado
                    a proteínas, responsável pela organização do material
                    genético.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Alelo
                </h3>

                <p>
                    Cada uma das formas alternativas que um gene pode
                    apresentar em uma determinada posição do cromossomo.
                </p>

            </div>

        </div>

    </section>


    <!-- 3 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-code-branch"></i>
            </div>

            <div>

                <div class="numero">
                    03 — MATERIAL GENÉTICO
                </div>

                <h2>
                    Estrutura do DNA
                </h2>

            </div>

        </div>

        <p>
            O DNA é formado por unidades chamadas
            <strong>nucleotídeos</strong>. Cada nucleotídeo possui
            um grupo fosfato, um açúcar chamado desoxirribose
            e uma base nitrogenada.
        </p>

        <p>
            As quatro bases nitrogenadas presentes no DNA são:
        </p>

        <ul class="lista">

            <li>
                <strong>Adenina (A)</strong>
            </li>

            <li>
                <strong>Timina (T)</strong>
            </li>

            <li>
                <strong>Citosina (C)</strong>
            </li>

            <li>
                <strong>Guanina (G)</strong>
            </li>

        </ul>

        <div class="destaque">

            <strong>Pareamento das bases:</strong>
            Adenina se liga à Timina (A–T) e Citosina se liga
            à Guanina (C–G).

        </div>

    </section>


    <!-- 4 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-dna"></i>
            </div>

            <div>

                <div class="numero">
                    04 — RNA
                </div>

                <h2>
                    DNA e RNA
                </h2>

            </div>

        </div>

        <p>
            O RNA também é um ácido nucleico e participa
            principalmente dos processos relacionados à produção
            de proteínas.
        </p>

        <div class="tabela-container">

            <table class="tabela">

                <thead>

                    <tr>

                        <th>Característica</th>

                        <th>DNA</th>

                        <th>RNA</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Açúcar</td>

                        <td>Desoxirribose</td>

                        <td>Ribose</td>

                    </tr>

                    <tr>

                        <td>Bases</td>

                        <td>A, T, C e G</td>

                        <td>A, U, C e G</td>

                    </tr>

                    <tr>

                        <td>Estrutura</td>

                        <td>Geralmente dupla fita</td>

                        <td>Geralmente fita simples</td>

                    </tr>

                    <tr>

                        <td>Função principal</td>

                        <td>Armazenar informação genética</td>

                        <td>Participar da expressão gênica</td>

                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- 5 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-user-group"></i>
            </div>

            <div>

                <div class="numero">
                    05 — HEREDITARIEDADE
                </div>

                <h2>
                    Genótipo e Fenótipo
                </h2>

            </div>

        </div>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Genótipo
                </h3>

                <p>
                    Conjunto de genes ou informações genéticas
                    de um indivíduo.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Fenótipo
                </h3>

                <p>
                    Características observáveis de um indivíduo,
                    resultantes da interação entre seu genótipo
                    e fatores ambientais.
                </p>

            </div>

        </div>

        <div class="destaque">

            <strong>Exemplo:</strong>
            a cor de uma característica pode depender de informações
            genéticas e também de condições ambientais, dependendo
            da característica analisada.

        </div>

    </section>


    <!-- 6 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-flask"></i>
            </div>

            <div>

                <div class="numero">
                    06 — MENDEL
                </div>

                <h2>
                    As leis de Mendel
                </h2>

            </div>

        </div>

        <p>
            Gregor Mendel realizou experimentos com plantas de ervilha
            e estabeleceu princípios fundamentais para o estudo da
            hereditariedade.
        </p>

        <h3 style="color:#071b35; font-size:16px; margin-top:20px;">
            Primeira Lei de Mendel
        </h3>

        <p>
            A Primeira Lei de Mendel é conhecida como
            <strong>Lei da Segregação dos Alelos</strong>.
            Ela estabelece que os dois alelos de um gene se separam
            durante a formação dos gametas, de modo que cada gameta
            recebe apenas um alelo.
        </p>

        <h3 style="color:#071b35; font-size:16px; margin-top:20px;">
            Segunda Lei de Mendel
        </h3>

        <p>
            A Segunda Lei de Mendel, ou
            <strong>Lei da Segregação Independente</strong>,
            descreve a distribuição independente de pares de alelos
            durante a formação dos gametas, considerando genes
            localizados em cromossomos diferentes ou suficientemente
            distantes no mesmo cromossomo.
        </p>

    </section>


    <!-- 7 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-square-root-variable"></i>
            </div>

            <div>

                <div class="numero">
                    07 — TERMOS IMPORTANTES
                </div>

                <h2>
                    Dominante, recessivo e homozigoto
                </h2>

            </div>

        </div>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Alelo dominante
                </h3>

                <p>
                    Alelo que pode determinar a manifestação de uma
                    característica mesmo quando está presente em apenas
                    uma das cópias do par.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Alelo recessivo
                </h3>

                <p>
                    Alelo cuja característica geralmente se manifesta
                    quando está presente em duas cópias em um indivíduo
                    diploide.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Homozigoto
                </h3>

                <p>
                    Indivíduo que possui dois alelos iguais para
                    determinado gene, como AA ou aa.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Heterozigoto
                </h3>

                <p>
                    Indivíduo que possui dois alelos diferentes para
                    determinado gene, como Aa.
                </p>

            </div>

        </div>

    </section>


    <!-- 8 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-table-cells"></i>
            </div>

            <div>

                <div class="numero">
                    08 — QUADRO DE PUNNETT
                </div>

                <h2>
                    Cruzamentos genéticos
                </h2>

            </div>

        </div>

        <p>
            O quadro de Punnett é uma ferramenta utilizada para
            representar possíveis combinações de alelos resultantes
            de um cruzamento genético.
        </p>

        <div class="tabela-container">

            <table class="tabela">

                <thead>

                    <tr>

                        <th></th>
                        <th>A</th>
                        <th>a</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <th>A</th>

                        <td>AA</td>

                        <td>Aa</td>

                    </tr>

                    <tr>

                        <th>a</th>

                        <td>Aa</td>

                        <td>aa</td>

                    </tr>

                </tbody>

            </table>

        </div>

        <div class="destaque">

            <strong>Exemplo:</strong>
            no cruzamento Aa × Aa, as possibilidades genotípicas
            são AA, Aa, Aa e aa.

        </div>

    </section>


    <!-- 9 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-arrows-rotate"></i>
            </div>

            <div>

                <div class="numero">
                    09 — DIVISÃO CELULAR
                </div>

                <h2>
                    Mitose e Meiose
                </h2>

            </div>

        </div>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Mitose
                </h3>

                <p>
                    Processo de divisão celular que normalmente origina
                    duas células-filhas geneticamente semelhantes à
                    célula que lhes deu origem.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Meiose
                </h3>

                <p>
                    Processo de divisão celular que reduz o número de
                    cromossomos pela metade e participa da formação
                    dos gametas em organismos que realizam reprodução
                    sexuada.
                </p>

            </div>

        </div>

        <div class="destaque">

            <strong>Importante:</strong>
            a meiose contribui para a variabilidade genética por meio
            de processos como a segregação dos cromossomos e a
            recombinação genética.

        </div>

    </section>


    <!-- 10 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-copy"></i>
            </div>

            <div>

                <div class="numero">
                    10 — EXPRESSÃO GÊNICA
                </div>

                <h2>
                    Do DNA às proteínas
                </h2>

            </div>

        </div>

        <p>
            A informação armazenada no DNA pode ser utilizada
            para produzir moléculas de RNA e, posteriormente,
            proteínas.
        </p>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Transcrição
                </h3>

                <p>
                    Processo em que uma sequência de DNA é utilizada
                    como molde para a produção de uma molécula de RNA.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Tradução
                </h3>

                <p>
                    Processo em que a informação presente no RNA
                    mensageiro é utilizada para a produção de uma
                    cadeia polipeptídica.
                </p>

            </div>

        </div>

    </section>


    <!-- 11 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-dna"></i>
            </div>

            <div>

                <div class="numero">
                    11 — MUTAÇÕES
                </div>

                <h2>
                    Variabilidade genética
                </h2>

            </div>

        </div>

        <p>
            Mutações são alterações no material genético.
            Elas podem ocorrer espontaneamente ou ser provocadas
            por determinados agentes mutagênicos.
        </p>

        <p>
            As mutações podem não produzir efeitos perceptíveis,
            podem alterar características ou, em determinadas situações,
            causar prejuízos ou benefícios ao organismo.
        </p>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Mutação gênica
                </h3>

                <p>
                    Alteração que ocorre na sequência de nucleotídeos
                    do DNA de um gene.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Mutação cromossômica
                </h3>

                <p>
                    Alteração relacionada à estrutura ou ao número
                    dos cromossomos.
                </p>

            </div>

        </div>

    </section>


    <!-- 12 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-people-arrows"></i>
            </div>

            <div>

                <div class="numero">
                    12 — HERANÇA GENÉTICA
                </div>

                <h2>
                    Como as características são transmitidas?
                </h2>

            </div>

        </div>

        <p>
            Na reprodução sexuada, cada progenitor contribui com
            material genético para o descendente. Os gametas possuem
            metade do número de cromossomos característico das células
            somáticas da espécie.
        </p>

        <p>
            Na fecundação, os gametas se unem e formam uma célula
            chamada <strong>zigoto</strong>, que recebe material
            genético de ambos os progenitores.
        </p>

        <div class="destaque">

            <strong>Para lembrar:</strong>
            gametas → fecundação → zigoto → desenvolvimento
            do novo organismo.

        </div>

    </section>


    <!-- 13 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-venus-mars"></i>
            </div>

            <div>

                <div class="numero">
                    13 — HERANÇA LIGADA AO SEXO
                </div>

                <h2>
                    Cromossomos sexuais
                </h2>

            </div>

        </div>

        <p>
            Em seres humanos, as células possuem 46 cromossomos,
            organizados em 23 pares. Um desses pares corresponde
            aos cromossomos sexuais.
        </p>

        <ul class="lista">

            <li>
                Mulheres: geralmente XX.
            </li>

            <li>
                Homens: geralmente XY.
            </li>

            <li>
                Os demais 22 pares são chamados de autossomos.
            </li>

        </ul>

        <p>
            Algumas características genéticas estão relacionadas
            a genes localizados nos cromossomos sexuais, sendo
            chamadas de características ligadas ao sexo.
        </p>

    </section>


    <!-- 14 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-stethoscope"></i>
            </div>

            <div>

                <div class="numero">
                    14 — GENÉTICA E SAÚDE
                </div>

                <h2>
                    Importância da Genética
                </h2>

            </div>

        </div>

        <p>
            O conhecimento genético possui diversas aplicações
            na ciência e na medicina.
        </p>

        <ul class="lista">

            <li>
                Estudo de doenças e condições de origem genética;
            </li>

            <li>
                Identificação de alterações no material genético;
            </li>

            <li>
                Desenvolvimento de métodos de diagnóstico;
            </li>

            <li>
                Estudos de hereditariedade;
            </li>

            <li>
                Pesquisas relacionadas a tratamentos e terapias;
            </li>

            <li>
                Estudos de parentesco e genética populacional.
            </li>

        </ul>

    </section>


    <!-- RESUMO FINAL -->

    <section class="resumo-final">

        <h2>
            <i class="fa-solid fa-book-open"></i>
            Resumo para memorizar
        </h2>

        <ul>

            <li>
                <strong>Genética:</strong>
                estudo da hereditariedade e da variação dos seres vivos.
            </li>

            <li>
                <strong>DNA:</strong>
                molécula que armazena informações genéticas.
            </li>

            <li>
                <strong>Gene:</strong>
                segmento de DNA relacionado a informações genéticas.
            </li>

            <li>
                <strong>Cromossomo:</strong>
                estrutura que organiza o material genético.
            </li>

            <li>
                <strong>Alelo:</strong>
                forma alternativa de um gene.
            </li>

            <li>
                <strong>Genótipo:</strong>
                conjunto de informações genéticas do indivíduo.
            </li>

            <li>
                <strong>Fenótipo:</strong>
                características observáveis resultantes da interação
                entre fatores genéticos e ambientais.
            </li>

            <li>
                <strong>Homozigoto:</strong>
                possui alelos iguais.
            </li>

            <li>
                <strong>Heterozigoto:</strong>
                possui alelos diferentes.
            </li>

            <li>
                <strong>Mitose:</strong>
                divisão celular que geralmente origina duas células.
            </li>

            <li>
                <strong>Meiose:</strong>
                divisão celular relacionada à formação dos gametas.
            </li>

            <li>
                <strong>Mutação:</strong>
                alteração no material genético.
            </li>

        </ul>

    </section>


    <!-- BOTÕES FINAIS -->

    <div class="botoes-acoes">

        <a href="{{ route('materiais.biologia') }}" class="btn-voltar-final">

            <i class="fa-solid fa-arrow-left"></i>

            Voltar para materiais

        </a>

        <a href="{{ route('apostilaBiologiaPdf') }}" class="btn-baixar-final">

            <i class="fa-solid fa-download"></i>

            Baixar

        </a>

    </div>

</div>

</body>

</html>