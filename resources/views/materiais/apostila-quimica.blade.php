<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Apostila — Tabela Periódica | SIFE</title>

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

        /* LISTA */

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

        /* ELEMENTO */

        .elemento {
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            width: 70px;
            height: 70px;

            margin: 10px 0;

            border-radius: 12px;

            background: #fff3f3;
            border: 1px solid #f2d1d4;
        }

        .elemento .numero {
            color: #7b8794;
            font-size: 9px;
            font-weight: 600;
        }

        .elemento .simbolo {
            color: #d92f3d;
            font-size: 23px;
            font-weight: 800;
            line-height: 1.2;
        }

        .elemento .nome {
            color: #627991;
            font-size: 8px;
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

        /* BOTÕES */

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

            .conteudo {
                padding: 20px;
            }

            .titulo-principal {
                font-size: 25px;
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

            <a href="{{ route('materiais.quimica') }}" class="voltar">

                <i class="fa-solid fa-arrow-left"></i>

                Voltar para materiais

            </a>

            <a href="{{ route('apostilaQuimicaPdf') }}" class="btn-baixar">

                <i class="fa-solid fa-download"></i>

                Baixar

            </a>

        </div>

        <div class="titulo-pequeno">

            APOSTILA DE QUÍMICA

        </div>

        <h1 class="titulo-principal">

            Tabela Periódica

        </h1>

        <p class="subtitulo">

            Material completo sobre a organização, classificação
            e principais propriedades dos elementos químicos.

        </p>

    </div>


    <!-- CONTEÚDO -->

    <div class="conteudo">


        <!-- 1 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-table-cells"></i>

                </div>

                <h2>

                    1. O que é a Tabela Periódica?

                </h2>

            </div>

            <p>

                A Tabela Periódica é uma forma de organizar os elementos
                químicos conhecidos de acordo principalmente com seu
                número atômico e suas propriedades.

            </p>

            <p>

                A organização periódica permite identificar padrões
                nas propriedades dos elementos e facilita o estudo
                da Química.

            </p>

            <div class="destaque">

                <i class="fa-solid fa-lightbulb"></i>

                <div>

                    <strong>Para lembrar:</strong>

                    os elementos estão organizados em ordem crescente
                    de <strong>número atômico (Z)</strong>.

                </div>

            </div>

        </section>


        <!-- 2 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-atom"></i>

                </div>

                <h2>

                    2. O elemento químico

                </h2>

            </div>

            <p>

                Um elemento químico é definido pelo número de prótons
                presentes no núcleo de seus átomos.

            </p>

            <p>

                O número de prótons corresponde ao número atômico,
                representado pela letra <strong>Z</strong>.

            </p>

            <div class="grid-cards">

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-hashtag"></i>

                        Número atômico — Z

                    </h3>

                    <p>

                        Corresponde ao número de prótons existentes
                        no núcleo do átomo.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-weight-hanging"></i>

                        Número de massa — A

                    </h3>

                    <p>

                        Corresponde à soma do número de prótons
                        e nêutrons do núcleo.

                    </p>

                </div>

            </div>

            <div class="destaque">

                <i class="fa-solid fa-calculator"></i>

                <div>

                    <strong>Fórmula:</strong>

                    A = Z + N

                    <br>

                    Portanto:

                    <strong>N = A − Z</strong>

                </div>

            </div>

        </section>


        <!-- 3 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-square-root-variable"></i>

                </div>

                <h2>

                    3. Como ler um elemento na tabela?

                </h2>

            </div>

            <p>

                Cada elemento é representado por informações que permitem
                identificá-lo.

            </p>

            <div style="text-align: center;">

                <div class="elemento">

                    <span class="numero">

                        6

                    </span>

                    <span class="simbolo">

                        C

                    </span>

                    <span class="nome">

                        Carbono

                    </span>

                </div>

            </div>

            <div class="tabela-wrapper">

                <table class="tabela">

                    <thead>

                        <tr>

                            <th>
                                Informação
                            </th>

                            <th>
                                Significado
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>
                                Número atômico
                            </td>

                            <td>
                                Identifica o elemento e corresponde ao número de prótons.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                Símbolo
                            </td>

                            <td>
                                Abreviação utilizada para representar o elemento.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                Nome
                            </td>

                            <td>
                                Nome oficial do elemento químico.
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </section>


        <!-- 4 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-grip"></i>

                </div>

                <h2>

                    4. Períodos

                </h2>

            </div>

            <p>

                As linhas horizontais da Tabela Periódica são chamadas
                de <strong>períodos</strong>.

            </p>

            <p>

                Atualmente, a Tabela Periódica possui <strong>7 períodos</strong>.
                O período de um elemento está relacionado ao maior nível
                de energia ocupado por seus elétrons no estado fundamental.

            </p>

            <div class="grid-cards">

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-arrow-right"></i>

                        Linhas horizontais

                    </h3>

                    <p>

                        Correspondem aos períodos da Tabela Periódica.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-layer-group"></i>

                        7 períodos

                    </h3>

                    <p>

                        A tabela é organizada em sete períodos,
                        numerados de 1 a 7.

                    </p>

                </div>

            </div>

        </section>


        <!-- 5 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-bars"></i>

                </div>

                <h2>

                    5. Grupos ou famílias

                </h2>

            </div>

            <p>

                As colunas verticais da Tabela Periódica são chamadas
                de <strong>grupos</strong> ou <strong>famílias</strong>.

            </p>

            <p>

                Elementos de um mesmo grupo apresentam configurações
                eletrônicas de valência relacionadas e, em geral,
                propriedades químicas semelhantes.

            </p>

            <div class="tabela-wrapper">

                <table class="tabela">

                    <thead>

                        <tr>

                            <th>
                                Grupo
                            </th>

                            <th>
                                Família
                            </th>

                            <th>
                                Exemplo
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>
                                1
                            </td>

                            <td>
                                Metais alcalinos
                            </td>

                            <td>
                                Li, Na, K
                            </td>

                        </tr>

                        <tr>

                            <td>
                                2
                            </td>

                            <td>
                                Metais alcalino-terrosos
                            </td>

                            <td>
                                Be, Mg, Ca
                            </td>

                        </tr>

                        <tr>

                            <td>
                                17
                            </td>

                            <td>
                                Halogênios
                            </td>

                            <td>
                                F, Cl, Br
                            </td>

                        </tr>

                        <tr>

                            <td>
                                18
                            </td>

                            <td>
                                Gases nobres
                            </td>

                            <td>
                                He, Ne, Ar
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </section>


        <!-- 6 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-cubes-stacked"></i>

                </div>

                <h2>

                    6. Metais, ametais e semimetais

                </h2>

            </div>

            <p>

                Os elementos podem ser classificados de acordo com
                suas propriedades físicas e químicas.

            </p>

            <div class="grid-cards">

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-industry"></i>

                        Metais

                    </h3>

                    <p>

                        Em geral, apresentam brilho, boa condutividade
                        térmica e elétrica e tendência a formar cátions.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-flask"></i>

                        Ametais

                    </h3>

                    <p>

                        Apresentam propriedades variadas e, em muitos
                        casos, menor condutividade elétrica que os metais.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-circle-half-stroke"></i>

                        Semimetais

                    </h3>

                    <p>

                        Apresentam algumas propriedades intermediárias
                        entre metais e ametais.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-wind"></i>

                        Gases nobres

                    </h3>

                    <p>

                        Elementos do grupo 18, geralmente pouco reativos
                        nas condições usuais.

                    </p>

                </div>

            </div>

        </section>


        <!-- 7 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-magnet"></i>

                </div>

                <h2>

                    7. Propriedades periódicas

                </h2>

            </div>

            <p>

                Algumas propriedades dos elementos variam de maneira
                regular ao longo dos períodos e grupos. Essas são chamadas
                de propriedades periódicas.

            </p>

            <div class="grid-cards">

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-expand"></i>

                        Raio atômico

                    </h3>

                    <p>

                        É uma medida relacionada ao tamanho do átomo.
                        Em geral, aumenta de cima para baixo em um grupo
                        e da direita para a esquerda em um período.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-bolt"></i>

                        Energia de ionização

                    </h3>

                    <p>

                        É a energia necessária para remover um elétron
                        de um átomo isolado no estado gasoso.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-magnet"></i>

                        Eletronegatividade

                    </h3>

                    <p>

                        Representa a tendência de um átomo atrair elétrons
                        em uma ligação química.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-arrow-up-right-dots"></i>

                        Afinidade eletrônica

                    </h3>

                    <p>

                        Está relacionada à variação de energia associada
                        à adição de um elétron a um átomo isolado no estado gasoso.

                    </p>

                </div>

            </div>

        </section>


        <!-- 8 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-arrows-left-right"></i>

                </div>

                <h2>

                    8. Tendências periódicas

                </h2>

            </div>

            <p>

                As propriedades periódicas apresentam tendências
                importantes que ajudam a comparar elementos.

            </p>

            <div class="destaque">

                <i class="fa-solid fa-arrow-trend-up"></i>

                <div>

                    <strong>Regra geral:</strong>

                    o raio atômico tende a aumentar para baixo e para a esquerda
                    da tabela, enquanto a eletronegatividade tende a aumentar
                    para cima e para a direita.

                </div>

            </div>

            <div class="tabela-wrapper">

                <table class="tabela">

                    <thead>

                        <tr>

                            <th>
                                Propriedade
                            </th>

                            <th>
                                Tendência geral
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>
                                Raio atômico
                            </td>

                            <td>
                                Aumenta para baixo e para a esquerda.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                Eletronegatividade
                            </td>

                            <td>
                                Aumenta para cima e para a direita.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                Energia de ionização
                            </td>

                            <td>
                                Em geral, aumenta para cima e para a direita.
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </section>


        <!-- 9 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-flask-vial"></i>

                </div>

                <h2>

                    9. Famílias importantes

                </h2>

            </div>

            <div class="tabela-wrapper">

                <table class="tabela">

                    <thead>

                        <tr>

                            <th>
                                Grupo
                            </th>

                            <th>
                                Nome
                            </th>

                            <th>
                                Características gerais
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>
                                1
                            </td>

                            <td>
                                Metais alcalinos
                            </td>

                            <td>
                                Metais muito reativos, especialmente com água.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                2
                            </td>

                            <td>
                                Alcalino-terrosos
                            </td>

                            <td>
                                Metais reativos, porém em geral menos que os alcalinos.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                17
                            </td>

                            <td>
                                Halogênios
                            </td>

                            <td>
                                Ametais bastante reativos.
                            </td>

                        </tr>

                        <tr>

                            <td>
                                18
                            </td>

                            <td>
                                Gases nobres
                            </td>

                            <td>
                                Apresentam baixa reatividade nas condições usuais.
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

                    <i class="fa-solid fa-atom"></i>

                </div>

                <h2>

                    10. Distribuição dos elétrons

                </h2>

            </div>

            <p>

                Os elétrons de um átomo distribuem-se em níveis e subníveis
                de energia. A distribuição eletrônica ajuda a compreender
                a posição e o comportamento dos elementos na Tabela Periódica.

            </p>

            <div class="grid-cards">

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-layer-group"></i>

                        Níveis de energia

                    </h3>

                    <p>

                        São representados pelos números 1, 2, 3, 4, 5, 6 e 7
                        e correspondem aos períodos da tabela.

                    </p>

                </div>

                <div class="card-conceito">

                    <h3>

                        <i class="fa-solid fa-circle-nodes"></i>

                        Elétrons de valência

                    </h3>

                    <p>

                        São os elétrons da camada mais externa do átomo
                        e têm grande importância no comportamento químico.

                    </p>

                </div>

            </div>

        </section>


        <!-- 11 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-link"></i>

                </div>

                <h2>

                    11. Tabela Periódica e ligações químicas

                </h2>

            </div>

            <p>

                A posição dos elementos na Tabela Periódica ajuda a prever
                como eles podem participar de ligações químicas.

            </p>

            <ul class="lista">

                <li>

                    <strong>Ligação iônica:</strong>

                    geralmente envolve transferência de elétrons entre
                    espécies, com formação de íons de cargas opostas.

                </li>

                <li>

                    <strong>Ligação covalente:</strong>

                    envolve compartilhamento de pares de elétrons
                    entre átomos.

                </li>

                <li>

                    <strong>Ligação metálica:</strong>

                    ocorre entre átomos metálicos e envolve elétrons
                    deslocalizados.

                </li>

            </ul>

            <div class="destaque">

                <i class="fa-solid fa-lightbulb"></i>

                <div>

                    <strong>Dica:</strong>

                    conhecer a posição de um elemento na Tabela Periódica
                    ajuda a compreender sua tendência de ganhar, perder
                    ou compartilhar elétrons.

                </div>

            </div>

        </section>


        <!-- 12 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-clock-rotate-left"></i>

                </div>

                <h2>

                    12. História da Tabela Periódica

                </h2>

            </div>

            <p>

                A organização dos elementos químicos foi desenvolvida
                gradualmente por diferentes cientistas.

            </p>

            <p>

                Dmitri Mendeleev teve papel fundamental ao organizar
                os elementos conhecidos de acordo com suas propriedades
                e massas atômicas, deixando espaços para elementos que
                ainda não haviam sido descobertos.

            </p>

            <p>

                Com o desenvolvimento da Química e da Física, a organização
                da tabela foi aprimorada. Atualmente, os elementos são
                organizados pelo número atômico.

            </p>

        </section>


        <!-- 13 -->

        <section class="secao">

            <div class="secao-titulo">

                <div class="icone-secao">

                    <i class="fa-solid fa-graduation-cap"></i>

                </div>

                <h2>

                    13. Resumo para estudar

                </h2>

            </div>

            <div class="resumo-final">

                <h3>

                    O que você precisa memorizar

                </h3>

                <ul>

                    <li>

                        A Tabela Periódica organiza os elementos químicos
                        em ordem crescente de número atômico.

                    </li>

                    <li>

                        O número atômico <strong>Z</strong> corresponde
                        ao número de prótons.

                    </li>

                    <li>

                        O número de massa <strong>A</strong> corresponde
                        à soma de prótons e nêutrons.

                    </li>

                    <li>

                        As linhas horizontais são os
                        <strong>períodos</strong>.

                    </li>

                    <li>

                        As colunas verticais são os
                        <strong>grupos ou famílias</strong>.

                    </li>

                    <li>

                        O grupo 1 é formado pelos metais alcalinos.

                    </li>

                    <li>

                        O grupo 2 corresponde aos metais
                        alcalino-terrosos.

                    </li>

                    <li>

                        O grupo 17 corresponde aos halogênios.

                    </li>

                    <li>

                        O grupo 18 corresponde aos gases nobres.

                    </li>

                    <li>

                        O raio atômico tende a aumentar para baixo
                        e para a esquerda.

                    </li>

                    <li>

                        A eletronegatividade tende a aumentar para cima
                        e para a direita.

                    </li>

                    <li>

                        Os elétrons de valência são importantes para
                        o comportamento químico dos elementos.

                    </li>

                </ul>

            </div>

        </section>


        <!-- BOTÕES -->

        <div class="botoes-acoes">

            <a href="{{ route('materiais.quimica') }}" class="btn-voltar">

                <i class="fa-solid fa-arrow-left"></i>

                Voltar para materiais

            </a>

            <a href="{{ route('apostilaQuimicaPdf') }}" class="btn-baixar-final">

                <i class="fa-solid fa-download"></i>

                Baixar

            </a>

        </div>


    </div>

</div>

</body>

</html>