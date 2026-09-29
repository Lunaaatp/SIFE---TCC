<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Revisão — Citologia | SIFE</title>

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

        .botoes-topo {
            display: flex;
            align-items: center;
            gap: 10px;
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
            line-height: 1.7;
        }

        /* CONTEÚDO */

        .conteudo {
            background: white;
            border-radius: 18px;
            padding: 30px;
            border: 1px solid #edf2f7;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
        }

        .secao {
            margin-bottom: 30px;
        }

        .secao:last-child {
            margin-bottom: 0;
        }

        .secao-titulo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 13px;
        }

        .icone-secao {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 11px;

            font-size: 17px;
            flex-shrink: 0;
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

        /* LISTAS */

        .lista {
            margin: 12px 0 0;
            padding-left: 21px;

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

        .resumo-final li {
            margin-bottom: 5px;
        }

        /* BOTÕES FINAIS */

        .botoes-acoes {
            display: flex;
            gap: 10px;
            align-items: center;
            margin-top: 25px;
        }

        .btn-voltar,
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

        .btn-voltar {
            background: #fff3f3;
            color: #d92f3d;
        }

        .btn-voltar:hover {
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

            .conteudo {
                padding: 20px;
            }

            .grid-cards {
                grid-template-columns: 1fr;
            }

            .botoes-topo {
                flex-wrap: wrap;
            }

            .botoes-acoes {
                flex-direction: column;
            }

            .btn-voltar,
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

        <div class="botoes-topo">

            <a href="{{ route('materiais.biologia') }}" class="voltar">

                <i class="fa-solid fa-arrow-left"></i>

                Voltar para materiais

            </a>

            <a href="{{ route('revisaoBiologiaPdf') }}" class="btn-baixar">

                <i class="fa-solid fa-download"></i>

                Baixar

            </a>

        </div>

        <div class="titulo-pequeno">

            REVISÃO DE BIOLOGIA

        </div>

        <h1 class="titulo-principal">

            Revisão — Citologia

        </h1>

        <p class="subtitulo">

            Material de revisão para a avaliação de Biologia,
            com os principais conceitos sobre células e organelas.

        </p>

    </div>


    <!-- CONTEÚDO -->

    <div class="conteudo">


        <!-- 1 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-cell"></i>

                </div>

                <h2>

                    1. O que é Citologia?

                </h2>

            </div>

            <p>

                Citologia é a área da Biologia que estuda as células,
                suas estruturas, funções e os processos que acontecem
                em seu interior.

            </p>

            <p>

                A célula é considerada a unidade estrutural e funcional
                básica dos seres vivos.

            </p>

            <div class="destaque">

                <i class="fa-solid fa-lightbulb"></i>

                <div>

                    <strong>Para lembrar:</strong>

                    todos os seres vivos são formados por uma ou mais células,
                    e as células realizam funções essenciais para a manutenção
                    da vida.

                </div>

            </div>

        </section>


        <!-- 2 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-book-open"></i>

                </div>

                <h2>

                    2. Teoria celular

                </h2>

            </div>

            <p>

                A teoria celular reúne princípios fundamentais sobre
                a organização dos seres vivos.

            </p>

            <ul class="lista">

                <li>
                    Todos os seres vivos são constituídos por células.
                </li>

                <li>
                    A célula é a unidade básica estrutural e funcional dos seres vivos.
                </li>

                <li>
                    Novas células surgem a partir de células preexistentes.
                </li>

            </ul>

        </section>


        <!-- 3 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-microscope"></i>

                </div>

                <h2>

                    3. Tipos de células

                </h2>

            </div>

            <p>

                As células podem ser classificadas, de maneira geral,
                em procariontes e eucariontes.

            </p>

            <div class="grid-cards">

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-circle"></i>

                        Célula procarionte

                    </h3>

                    <p>

                        Não possui núcleo delimitado por membrana.
                        O material genético fica localizado na região
                        chamada nucleoide. Bactérias são exemplos de
                        organismos procariontes.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-circle-nodes"></i>

                        Célula eucarionte

                    </h3>

                    <p>

                        Possui núcleo delimitado por membrana e apresenta
                        diversas organelas. Animais, plantas, fungos e
                        protistas possuem células eucariontes.

                    </p>

                </div>

            </div>

        </section>


        <!-- 4 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-shield-halved"></i>

                </div>

                <h2>

                    4. Membrana plasmática

                </h2>

            </div>

            <p>

                A membrana plasmática envolve a célula e controla a entrada
                e a saída de substâncias.

            </p>

            <p>

                Ela apresenta permeabilidade seletiva, permitindo que algumas
                substâncias atravessem com maior facilidade que outras.

            </p>

            <div class="grid-cards">

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-arrow-right-arrow-left"></i>

                        Difusão

                    </h3>

                    <p>

                        Movimento de partículas de uma região de maior
                        concentração para outra de menor concentração,
                        sem gasto direto de energia celular.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-droplet"></i>

                        Osmose

                    </h3>

                    <p>

                        Movimento de água através de uma membrana
                        semipermeável, relacionado à diferença de
                        concentração de solutos.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-bolt"></i>

                        Transporte ativo

                    </h3>

                    <p>

                        Transporte de substâncias através da membrana
                        que utiliza energia celular.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-filter"></i>

                        Permeabilidade seletiva

                    </h3>

                    <p>

                        Capacidade da membrana de controlar quais substâncias
                        entram e saem da célula.

                    </p>

                </div>

            </div>

        </section>


        <!-- 5 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-circle-dot"></i>

                </div>

                <h2>

                    5. Citoplasma e núcleo

                </h2>

            </div>

            <div class="grid-cards">

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-water"></i>

                        Citoplasma

                    </h3>

                    <p>

                        Região localizada entre a membrana plasmática
                        e o núcleo nas células eucariontes. Contém o
                        citosol e as organelas celulares.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-circle"></i>

                        Núcleo

                    </h3>

                    <p>

                        Estrutura que abriga o DNA nas células eucariontes
                        e participa do controle das atividades celulares.

                    </p>

                </div>

            </div>

        </section>


        <!-- 6 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-gears"></i>

                </div>

                <h2>

                    6. Principais organelas

                </h2>

            </div>

            <p>

                As organelas realizam diferentes funções dentro das
                células eucariontes.

            </p>

            <div class="tabela-wrapper">

                <table class="tabela">

                    <thead>

                        <tr>

                            <th>
                                Organela
                            </th>

                            <th>
                                Principal função
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>
                                Ribossomos
                            </td>

                            <td>
                                Participam da síntese de proteínas.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                Mitocôndrias
                            </td>

                            <td>
                                Participam da respiração celular e da produção de ATP.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                Retículo endoplasmático rugoso
                            </td>

                            <td>
                                Produção e transporte de proteínas, devido à presença de ribossomos.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                Retículo endoplasmático liso
                            </td>

                            <td>
                                Atua na síntese de lipídios e em outros processos celulares.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                Complexo de Golgi
                            </td>

                            <td>
                                Modifica, organiza e direciona substâncias, além de participar
                                da formação de vesículas.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                Lisossomos
                            </td>

                            <td>
                                Participam da digestão intracelular.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                Peroxissomos
                            </td>

                            <td>
                                Participam de reações metabólicas e da degradação de
                                determinadas substâncias.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                Centríolos
                            </td>

                            <td>
                                Participam da organização dos microtúbulos e da divisão celular
                                em células animais.
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </section>


        <!-- 7 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-leaf"></i>

                </div>

                <h2>

                    7. Célula vegetal

                </h2>

            </div>

            <p>

                As células vegetais são eucariontes e possuem estruturas
                que não estão presentes nas células animais, como parede
                celular, cloroplastos e um grande vacúolo central.

            </p>

            <div class="grid-cards">

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-square"></i>

                        Parede celular

                    </h3>

                    <p>

                        Estrutura externa à membrana plasmática que oferece
                        proteção e sustentação à célula vegetal.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-sun"></i>

                        Cloroplastos

                    </h3>

                    <p>

                        Organelas que possuem clorofila e estão relacionadas
                        à realização da fotossíntese.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-droplet"></i>

                        Vacúolo

                    </h3>

                    <p>

                        Participa do armazenamento de substâncias e da
                        regulação do equilíbrio de água na célula vegetal.

                    </p>

                </div>

            </div>

        </section>


        <!-- 8 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-industry"></i>

                </div>

                <h2>

                    8. Mitocôndria e cloroplasto

                </h2>

            </div>

            <div class="comparacao">

                <div class="card-conceito">

                    <h3>

                        Mitocôndria

                    </h3>

                    <p>

                        Está relacionada à respiração celular e à produção
                        de ATP, uma importante forma de energia utilizada
                        pelas células.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        Cloroplasto

                    </h3>

                    <p>

                        Está presente em células vegetais e realiza
                        fotossíntese, processo que utiliza energia luminosa
                        para produzir matéria orgânica.

                    </p>

                </div>

            </div>

        </section>


        <!-- 9 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-dna"></i>

                </div>

                <h2>

                    9. DNA e material genético

                </h2>

            </div>

            <p>

                O DNA é a molécula que armazena as informações genéticas.
                Nas células eucariontes, encontra-se principalmente no núcleo,
                embora também esteja presente em mitocôndrias e, nas plantas,
                nos cloroplastos.

            </p>

            <p>

                Os genes são segmentos de DNA que contêm informações
                relacionadas às características e funções dos organismos.

            </p>

            <div class="destaque">

                <i class="fa-solid fa-lightbulb"></i>

                <div>

                    <strong>Não confunda:</strong>

                    DNA é a molécula que armazena a informação genética;
                    gene é um segmento do DNA que contém determinada
                    informação genética.

                </div>

            </div>

        </section>


        <!-- 10 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-arrows-rotate"></i>

                </div>

                <h2>

                    10. Mitose e meiose

                </h2>

            </div>

            <p>

                A divisão celular é importante para o crescimento, renovação
                e reprodução dos organismos.

            </p>

            <div class="grid-cards">

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-copy"></i>

                        Mitose

                    </h3>

                    <p>

                        Produz, em condições usuais, duas células-filhas
                        geneticamente semelhantes à célula que lhes deu origem.
                        É importante para crescimento e renovação celular.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-code-branch"></i>

                        Meiose

                    </h3>

                    <p>

                        Produz células haploides e contribui para a formação
                        de gametas em organismos que realizam reprodução sexuada.

                    </p>

                </div>

            </div>

        </section>


        <!-- 11 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-list-check"></i>

                </div>

                <h2>

                    11. O que estudar para a avaliação?

                </h2>

            </div>

            <ul class="lista">

                <li>
                    Conceito de célula e Citologia.
                </li>

                <li>
                    Teoria celular.
                </li>

                <li>
                    Diferenças entre células procariontes e eucariontes.
                </li>

                <li>
                    Estrutura e função da membrana plasmática.
                </li>

                <li>
                    Difusão, osmose e transporte ativo.
                </li>

                <li>
                    Funções do citoplasma e do núcleo.
                </li>

                <li>
                    Principais organelas e suas funções.
                </li>

                <li>
                    Diferenças entre células animais e vegetais.
                </li>

                <li>
                    Funções das mitocôndrias e dos cloroplastos.
                </li>

                <li>
                    DNA, genes e material genético.
                </li>

                <li>
                    Diferenças básicas entre mitose e meiose.
                </li>

            </ul>

        </section>


        <!-- RESUMO -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-graduation-cap"></i>

                </div>

                <h2>

                    12. Resumo rápido

                </h2>

            </div>

            <div class="resumo-final">

                <h3>

                    Para memorizar antes da prova

                </h3>

                <ul>

                    <li>
                        <strong>Membrana plasmática:</strong>
                        controla a entrada e saída de substâncias.
                    </li>

                    <li>
                        <strong>Núcleo:</strong>
                        contém o DNA nas células eucariontes.
                    </li>

                    <li>
                        <strong>Ribossomo:</strong>
                        síntese de proteínas.
                    </li>

                    <li>
                        <strong>Mitocôndria:</strong>
                        respiração celular e produção de ATP.
                    </li>

                    <li>
                        <strong>Retículo rugoso:</strong>
                        produção e transporte de proteínas.
                    </li>

                    <li>
                        <strong>Retículo liso:</strong>
                        síntese de lipídios e outros processos.
                    </li>

                    <li>
                        <strong>Golgi:</strong>
                        modifica, organiza e direciona substâncias.
                    </li>

                    <li>
                        <strong>Lisossomo:</strong>
                        digestão intracelular.
                    </li>

                    <li>
                        <strong>Cloroplasto:</strong>
                        fotossíntese.
                    </li>

                    <li>
                        <strong>Vacúolo:</strong>
                        armazenamento e equilíbrio de água em células vegetais.
                    </li>

                    <li>
                        <strong>DNA:</strong>
                        armazenamento da informação genética.
                    </li>

                    <li>
                        <strong>Mitose:</strong>
                        crescimento e renovação celular.
                    </li>

                    <li>
                        <strong>Meiose:</strong>
                        formação de células haploides e participação na reprodução sexuada.
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

            <a href="{{ route('revisaoBiologiaPdf') }}" class="btn-baixar-final">

                <i class="fa-solid fa-download"></i>

                Baixar

            </a>

        </div>


    </div>

</div>

</body>

</html>