<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Material — Evolução | SIFE</title>

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

        .voltar {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            height: 45px;
            padding: 0 20px;

            margin-bottom: 22px;

            border-radius: 12px;

            background: #fff3f3;
            color: #d92f3d;

            text-decoration: none;

            font-size: 13px;
            font-weight: 800;

            transition: 0.2s;
        }

        .voltar:hover {
            background: #d92f3d;
            color: white;
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
            line-height: 1.7;
        }

        /* CARD PRINCIPAL */

        .conteudo {
            background: white;

            border-radius: 18px;

            padding: 30px;

            border: 1px solid #edf2f7;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
        }

        /* SEÇÕES */

        .secao {
            margin-bottom: 28px;
        }

        .secao:last-child {
            margin-bottom: 0;
        }

        .secao-titulo {
            display: flex;
            align-items: center;
            gap: 12px;

            margin-bottom: 12px;
        }

        .icone-secao {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 11px;

            font-size: 17px;
        }

        .secao h2 {
            margin: 0;

            color: #071b35;

            font-size: 19px;
            font-weight: 800;
        }

        .secao p {
            margin: 0 0 10px;

            color: #627991;

            font-size: 13px;

            line-height: 1.8;
        }

        .secao p:last-child {
            margin-bottom: 0;
        }

        /* LISTA */

        .lista {
            margin: 12px 0 0;

            padding-left: 20px;

            color: #627991;

            font-size: 13px;

            line-height: 1.8;
        }

        .lista li {
            margin-bottom: 6px;
        }

        .lista li:last-child {
            margin-bottom: 0;
        }

        /* DESTAQUE */

        .destaque {
            display: flex;

            align-items: flex-start;

            gap: 12px;

            margin: 15px 0;

            padding: 16px 18px;

            background: #fff7f7;

            border-left: 4px solid #d92f3d;

            border-radius: 10px;

            color: #627991;

            font-size: 13px;

            line-height: 1.7;
        }

        .destaque i {
            color: #d92f3d;

            margin-top: 3px;

            flex-shrink: 0;
        }

        .destaque strong {
            color: #071b35;
        }

        /* CARDS */

        .grid-cards {
            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 14px;

            margin-top: 15px;
        }

        .card-conceito {
            padding: 18px;

            background: #f8fafb;

            border: 1px solid #edf2f7;

            border-radius: 13px;
        }

        .card-conceito h3 {
            margin: 0 0 8px;

            color: #071b35;

            font-size: 14px;

            font-weight: 800;
        }

        .card-conceito p {
            margin: 0;

            color: #627991;

            font-size: 12px;

            line-height: 1.7;
        }

        .card-conceito i {
            color: #d92f3d;

            margin-right: 6px;
        }

        /* COMPARAÇÃO */

        .comparacao {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 15px;

            margin-top: 15px;
        }

        .comparacao-card {
            padding: 20px;

            border-radius: 13px;

            border: 1px solid #edf2f7;

            background: #fafbfc;
        }

        .comparacao-card h3 {
            margin: 0 0 10px;

            color: #071b35;

            font-size: 15px;

            font-weight: 800;
        }

        .comparacao-card p {
            margin: 0;

            color: #627991;

            font-size: 12px;

            line-height: 1.7;
        }

        /* TABELA */

        .tabela-wrapper {
            overflow-x: auto;

            margin-top: 15px;
        }

        .tabela {
            width: 100%;

            border-collapse: collapse;

            font-size: 12px;
        }

        .tabela th {
            padding: 13px;

            background: #fff3f3;

            color: #071b35;

            text-align: left;

            font-weight: 800;

            border-bottom: 1px solid #edf2f7;
        }

        .tabela td {
            padding: 13px;

            color: #627991;

            border-bottom: 1px solid #edf2f7;

            line-height: 1.6;
        }

        .tabela tr:last-child td {
            border-bottom: none;
        }

        /* RESUMO */

        .resumo-final {
            background: #f3f6f9;

            border-radius: 14px;

            padding: 20px;

            margin-top: 10px;
        }

        .resumo-final h3 {
            margin: 0 0 12px;

            color: #071b35;

            font-size: 16px;

            font-weight: 800;
        }

        .resumo-final ul {
            margin: 0;

            padding-left: 20px;

            color: #627991;

            font-size: 13px;

            line-height: 1.8;
        }

        /* BOTÕES */

        .botoes-acoes {
            display: flex;

            gap: 10px;

            align-items: center;

            margin-top: 25px;
        }

        .btn-voltar,
        .btn-baixar {
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

        /* RESPONSIVO */

        @media (max-width: 700px) {

            .container-principal {
                padding: 25px 15px 45px;
            }

            .conteudo {
                padding: 20px;
            }

            .titulo-principal {
                font-size: 25px;
            }

            .grid-cards,
            .comparacao {
                grid-template-columns: 1fr;
            }

            .botoes-acoes {
                flex-direction: column;
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

        <a href="{{ route('materiais.biologia') }}" class="voltar">

            <i class="fa-solid fa-arrow-left"></i>

            Voltar para materiais

        </a>

        <div class="titulo-pequeno">

            MATERIAL DE BIOLOGIA

        </div>

        <h1 class="titulo-principal">

            Evolução

        </h1>

        <p class="subtitulo">

            Conteúdo de apoio sobre evolução biológica,
            seleção natural e os principais conceitos relacionados
            à diversidade dos seres vivos.

        </p>

    </div>


    <!-- CONTEÚDO -->

    <div class="conteudo">


        <!-- 1 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-dna"></i>

                </div>

                <h2>

                    1. O que é evolução?

                </h2>

            </div>

            <p>

                Evolução biológica é o processo de mudança nas características
                hereditárias das populações de seres vivos ao longo das gerações.

            </p>

            <p>

                Essas mudanças podem ocorrer por diferentes mecanismos e,
                ao longo de muitas gerações, podem contribuir para a diversidade
                de organismos encontrada na natureza.

            </p>

            <div class="destaque">

                <i class="fa-solid fa-lightbulb"></i>

                <div>

                    <strong>Importante:</strong>

                    evolução acontece em <strong>populações</strong> ao longo
                    das gerações. Um indivíduo não evolui durante sua vida
                    simplesmente porque desenvolveu uma característica.

                </div>

            </div>

        </section>


        <!-- 2 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-leaf"></i>

                </div>

                <h2>

                    2. Variabilidade genética

                </h2>

            </div>

            <p>

                Para que uma população possa mudar ao longo das gerações,
                é necessário que exista variação entre os indivíduos.

            </p>

            <p>

                A variabilidade genética pode surgir, entre outros fatores,
                por meio de mutações e da recombinação genética durante
                a reprodução sexuada.

            </p>

            <div class="grid-cards">

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-dna"></i>

                        Mutação

                    </h3>

                    <p>

                        Alteração no material genético. Algumas mutações
                        podem gerar novas variantes genéticas.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-shuffle"></i>

                        Recombinação genética

                    </h3>

                    <p>

                        Mistura de informações genéticas durante a reprodução
                        sexuada, contribuindo para a diversidade entre os descendentes.

                    </p>

                </div>

            </div>

        </section>


        <!-- 3 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-seedling"></i>

                </div>

                <h2>

                    3. Seleção natural

                </h2>

            </div>

            <p>

                A seleção natural é um dos principais mecanismos da evolução.
                Ela ocorre quando indivíduos que apresentam determinadas
                características hereditárias possuem maior chance de sobreviver
                e deixar descendentes em determinado ambiente.

            </p>

            <p>

                Quando uma característica favorece a sobrevivência ou reprodução,
                sua frequência pode aumentar na população ao longo das gerações.

            </p>

            <div class="destaque">

                <i class="fa-solid fa-circle-info"></i>

                <div>

                    <strong>Exemplo:</strong>

                    imagine uma população de insetos com diferentes características
                    de coloração. Se determinada coloração tornar alguns indivíduos
                    menos visíveis aos predadores, esses indivíduos podem ter maior
                    chance de sobreviver e se reproduzir.

                </div>

            </div>

        </section>


        <!-- 4 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-user-graduate"></i>

                </div>

                <h2>

                    4. Darwin e a seleção natural

                </h2>

            </div>

            <p>

                Charles Darwin foi um dos principais responsáveis pelo
                desenvolvimento da teoria da evolução por seleção natural.

            </p>

            <p>

                A partir de observações da diversidade dos seres vivos,
                Darwin propôs que indivíduos de uma mesma espécie apresentam
                variações e que algumas dessas variações podem favorecer
                a sobrevivência e a reprodução.

            </p>

            <p>

                Ao longo das gerações, essas características podem se tornar
                mais frequentes em uma população.

            </p>

        </section>


        <!-- 5 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-book"></i>

                </div>

                <h2>

                    5. Lamarck e Darwin

                </h2>

            </div>

            <p>

                Jean-Baptiste Lamarck também apresentou ideias importantes
                para a história do pensamento evolutivo.

            </p>

            <div class="comparacao">

                <div class="comparacao-card">

                    <h3>

                        Lamarck

                    </h3>

                    <p>

                        Defendia ideias relacionadas ao uso e desuso dos órgãos
                        e à transmissão de características adquiridas.

                    </p>

                </div>

                <div class="comparacao-card">

                    <h3>

                        Darwin

                    </h3>

                    <p>

                        Propôs a seleção natural como mecanismo capaz de explicar
                        a adaptação das populações ao ambiente.

                    </p>

                </div>

            </div>

            <div class="destaque">

                <i class="fa-solid fa-lightbulb"></i>

                <div>

                    <strong>Para a prova:</strong>

                    as explicações de Lamarck e Darwin são diferentes.
                    A teoria evolutiva moderna incorpora conhecimentos posteriores
                    da genética à seleção natural.

                </div>

            </div>

        </section>


        <!-- 6 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-paw"></i>

                </div>

                <h2>

                    6. Adaptação

                </h2>

            </div>

            <p>

                Adaptação é uma característica hereditária que aumenta a
                capacidade de sobrevivência e/ou reprodução de organismos
                em determinado ambiente.

            </p>

            <p>

                Uma característica pode ser vantajosa em um ambiente e não
                apresentar a mesma vantagem em outro.

            </p>

            <div class="grid-cards">

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-temperature-half"></i>

                        Ambiente

                    </h3>

                    <p>

                        As condições ambientais influenciam quais características
                        podem favorecer a sobrevivência e reprodução.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-chart-line"></i>

                        Frequência

                    </h3>

                    <p>

                        Características favoráveis podem aumentar de frequência
                        em uma população ao longo das gerações.

                    </p>

                </div>

            </div>

        </section>


        <!-- 7 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-tree"></i>

                </div>

                <h2>

                    7. Evidências da evolução

                </h2>

            </div>

            <p>

                A evolução biológica é sustentada por diversas evidências
                científicas.

            </p>

            <ul class="lista">

                <li>

                    <strong>Fósseis:</strong>
                    registram organismos e características de diferentes
                    períodos da história da vida.

                </li>

                <li>

                    <strong>Anatomia comparada:</strong>
                    compara estruturas corporais de diferentes organismos.

                </li>

                <li>

                    <strong>Estruturas homólogas:</strong>
                    possuem origem evolutiva comum, mesmo que possam apresentar
                    funções diferentes.

                </li>

                <li>

                    <strong>Embriologia comparada:</strong>
                    analisa semelhanças e diferenças durante o desenvolvimento
                    embrionário.

                </li>

                <li>

                    <strong>Evidências moleculares:</strong>
                    comparações de DNA e proteínas podem revelar relações
                    evolutivas entre organismos.

                </li>

            </ul>

        </section>


        <!-- 8 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-code-branch"></i>

                </div>

                <h2>

                    8. Especiação

                </h2>

            </div>

            <p>

                Especiação é o processo pelo qual novas espécies podem surgir
                a partir de populações ancestrais.

            </p>

            <p>

                O isolamento entre populações pode reduzir o fluxo gênico
                entre elas. Com o acúmulo de diferenças ao longo das gerações,
                essas populações podem se tornar geneticamente diferentes.

            </p>

            <div class="destaque">

                <i class="fa-solid fa-circle-info"></i>

                <div>

                    <strong>Conceito-chave:</strong>

                    isolamento reprodutivo é importante para o processo de
                    formação de novas espécies.

                </div>

            </div>

        </section>


        <!-- 9 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-arrows-spin"></i>

                </div>

                <h2>

                    9. Outros mecanismos evolutivos

                </h2>

            </div>

            <p>

                Além da seleção natural, outros processos podem alterar
                a composição genética das populações.

            </p>

            <div class="tabela-wrapper">

                <table class="tabela">

                    <thead>

                        <tr>

                            <th>
                                Mecanismo
                            </th>

                            <th>
                                Característica
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>
                                Seleção natural
                            </td>

                            <td>
                                Favorece características hereditárias associadas
                                a maior sucesso reprodutivo em determinado ambiente.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                Mutação
                            </td>

                            <td>
                                Pode gerar novas variantes genéticas.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                Deriva genética
                            </td>

                            <td>
                                Alterações aleatórias na frequência de variantes
                                genéticas, especialmente importantes em populações
                                pequenas.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                Fluxo gênico
                            </td>

                            <td>
                                Movimento de variantes genéticas entre populações
                                por migração e reprodução.
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </section>


        <!-- 10 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-graduation-cap"></i>

                </div>

                <h2>

                    10. Resumo para a prova

                </h2>

            </div>

            <div class="resumo-final">

                <h3>

                    Principais conceitos

                </h3>

                <ul>

                    <li>
                        Evolução é a mudança nas características hereditárias
                        das populações ao longo das gerações.
                    </li>

                    <li>
                        A variabilidade genética é importante para a evolução.
                    </li>

                    <li>
                        Mutações podem gerar novas variantes genéticas.
                    </li>

                    <li>
                        A seleção natural pode aumentar a frequência de
                        características favoráveis em determinado ambiente.
                    </li>

                    <li>
                        Darwin é associado à formulação da teoria da evolução
                        por seleção natural.
                    </li>

                    <li>
                        Adaptações são características hereditárias relacionadas
                        à sobrevivência e reprodução em determinado ambiente.
                    </li>

                    <li>
                        Fósseis, anatomia comparada e evidências moleculares
                        são exemplos de evidências da evolução.
                    </li>

                    <li>
                        Especiação é o processo pelo qual novas espécies podem surgir.
                    </li>

                </ul>

            </div>

        </section>


        <!-- BOTÕES -->

        <div class="botoes-acoes">

            <a href="{{ route('materiais.biologia') }}" class="btn-voltar">

                <i class="fa-solid fa-arrow-left"></i>

                Voltar para materiais

            </a>

            <a href="{{ route('materialEvolucaoPdf') }}" class="btn-baixar">

                <i class="fa-solid fa-download"></i>

                Baixar

            </a>

        </div>


    </div>

</div>

</body>

</html>