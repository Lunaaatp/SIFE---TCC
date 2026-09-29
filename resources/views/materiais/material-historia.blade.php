<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Material — Era Vargas | SIFE</title>

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

            border-radius: 12px;

            background: #fff3f3;
            color: #d92f3d;

            text-decoration: none;

            font-size: 13px;
            font-weight: 800;

            transition: 0.2s;

            margin-bottom: 22px;
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
            line-height: 1.6;
        }

        /* SEÇÕES */

        .secao {
            background: white;
            border-radius: 18px;
            padding: 28px;
            margin-bottom: 20px;

            border: 1px solid #edf2f7;

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

        .secao p:last-child {
            margin-bottom: 0;
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
            margin-bottom: 7px;
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

        /* LINHA DO TEMPO */

        .linha-tempo {
            margin-top: 10px;
        }

        .evento {
            display: flex;
            gap: 15px;

            padding: 15px 0;

            border-bottom: 1px solid #edf2f7;
        }

        .evento:last-child {
            border-bottom: none;
        }

        .ano {
            min-width: 100px;

            color: #d92f3d;
            font-size: 13px;
            font-weight: 800;
        }

        .evento p {
            margin: 0;
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

            .evento {
                flex-direction: column;
                gap: 5px;
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

        <a href="{{ route('materiais.historia') }}" class="voltar">
            <i class="fa-solid fa-arrow-left"></i>
            Voltar para materiais
        </a>

        <div class="titulo-pequeno">
            MATERIAL DE APOIO — HISTÓRIA
        </div>

        <h1 class="titulo-principal">
            Era Vargas
        </h1>

        <p class="subtitulo">
            Conteúdo de apoio sobre o período da Era Vargas
            e suas principais transformações no Brasil.
        </p>

    </div>


    <!-- 1. INTRODUÇÃO -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-landmark"></i>
            </div>

            <div>

                <div class="numero">
                    01 — INTRODUÇÃO
                </div>

                <h2>
                    O que foi a Era Vargas?
                </h2>

            </div>

        </div>

        <p>
            A Era Vargas foi o período da história brasileira marcado
            pela liderança política de Getúlio Vargas, entre 1930 e 1945.
        </p>

        <p>
            Esse período foi caracterizado por importantes transformações
            políticas, econômicas e sociais, incluindo a centralização
            do poder, a industrialização e a criação de leis trabalhistas.
        </p>

        <div class="destaque">

            <strong>Período:</strong> 1930 a 1945.

            <br>

            <strong>Principal personagem:</strong> Getúlio Vargas.

        </div>

    </section>


    <!-- 2. REVOLUÇÃO DE 1930 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-flag"></i>
            </div>

            <div>

                <div class="numero">
                    02 — 1930
                </div>

                <h2>
                    A Revolução de 1930
                </h2>

            </div>

        </div>

        <p>
            A Revolução de 1930 provocou uma ruptura na política
            da Primeira República e levou Getúlio Vargas ao poder.
        </p>

        <p>
            O movimento ocorreu em meio a uma crise política e econômica
            e encerrou o período conhecido como República Velha.
        </p>

        <ul class="lista">

            <li>
                Crise política da Primeira República;
            </li>

            <li>
                Contestação das antigas estruturas de poder;
            </li>

            <li>
                Crise econômica relacionada à produção de café;
            </li>

            <li>
                Chegada de Getúlio Vargas ao poder.
            </li>

        </ul>

    </section>


    <!-- 3. GOVERNO PROVISÓRIO -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-building-columns"></i>
            </div>

            <div>

                <div class="numero">
                    03 — 1930–1934
                </div>

                <h2>
                    Governo Provisório
                </h2>

            </div>

        </div>

        <p>
            Entre 1930 e 1934, Vargas governou de forma provisória,
            promovendo mudanças na estrutura política e administrativa
            do país.
        </p>

        <p>
            Durante esse período, houve maior centralização do poder
            federal e nomeação de interventores para governar os estados.
        </p>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Centralização
                </h3>

                <p>
                    O governo federal aumentou sua influência
                    sobre os estados brasileiros.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Mudanças administrativas
                </h3>

                <p>
                    Foram criados novos ministérios e órgãos
                    para fortalecer a atuação do governo.
                </p>

            </div>

        </div>

    </section>


    <!-- 4. GOVERNO CONSTITUCIONAL -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-scale-balanced"></i>
            </div>

            <div>

                <div class="numero">
                    04 — 1934–1937
                </div>

                <h2>
                    Governo Constitucional
                </h2>

            </div>

        </div>

        <p>
            Em 1934, uma nova Constituição foi promulgada e Vargas
            passou a governar dentro de um novo período constitucional.
        </p>

        <p>
            O período foi marcado por conflitos entre diferentes
            grupos políticos e ideológicos.
        </p>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Ação Integralista Brasileira
                </h3>

                <p>
                    Movimento político de orientação nacionalista
                    e autoritária.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Aliança Nacional Libertadora
                </h3>

                <p>
                    Organização de oposição que reuniu diferentes
                    setores políticos, incluindo comunistas.
                </p>

            </div>

        </div>

    </section>


    <!-- 5. ESTADO NOVO -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-shield-halved"></i>
            </div>

            <div>

                <div class="numero">
                    05 — 1937–1945
                </div>

                <h2>
                    Estado Novo
                </h2>

            </div>

        </div>

        <p>
            Em 1937, Getúlio Vargas instaurou o Estado Novo,
            um regime autoritário que permaneceu até 1945.
        </p>

        <p>
            O período foi marcado pela concentração de poder nas mãos
            do governo federal, pela redução das liberdades políticas
            e pelo controle sobre os meios de comunicação.
        </p>

        <ul class="lista">

            <li>
                Fechamento do Congresso Nacional;
            </li>

            <li>
                Suspensão das atividades partidárias;
            </li>

            <li>
                Censura aos meios de comunicação;
            </li>

            <li>
                Forte centralização política;
            </li>

            <li>
                Propaganda oficial do governo.
            </li>

        </ul>

    </section>


    <!-- 6. TRABALHO -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-briefcase"></i>
            </div>

            <div>

                <div class="numero">
                    06 — DIREITOS TRABALHISTAS
                </div>

                <h2>
                    A legislação trabalhista
                </h2>

            </div>

        </div>

        <p>
            Uma das marcas da Era Vargas foi a criação e consolidação
            de diversas medidas relacionadas aos direitos dos trabalhadores.
        </p>

        <p>
            Em 1943, foi criada a Consolidação das Leis do Trabalho (CLT),
            reunindo normas trabalhistas existentes e estabelecendo
            importantes direitos para os trabalhadores.
        </p>

        <ul class="lista">

            <li>Regulamentação das relações de trabalho;</li>

            <li>Direitos relacionados à jornada de trabalho;</li>

            <li>Férias remuneradas;</li>

            <li>Regulamentação do salário mínimo;</li>

            <li>Proteção ao trabalhador formal.</li>

        </ul>

        <div class="destaque">

            A legislação trabalhista tornou-se uma das principais
            marcas da política social do governo Vargas.

        </div>

    </section>


    <!-- 7. INDUSTRIALIZAÇÃO -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-industry"></i>
            </div>

            <div>

                <div class="numero">
                    07 — ECONOMIA
                </div>

                <h2>
                    Industrialização e economia
                </h2>

            </div>

        </div>

        <p>
            Durante a Era Vargas, o governo estimulou a industrialização
            e buscou reduzir a dependência da economia brasileira
            em relação à exportação de produtos agrícolas.
        </p>

        <p>
            O Estado passou a participar de forma mais intensa
            da economia, criando instituições e empresas estratégicas.
        </p>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Indústria de base
                </h3>

                <p>
                    O governo estimulou setores fundamentais
                    para o desenvolvimento industrial.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Companhia Siderúrgica Nacional
                </h3>

                <p>
                    Criada em 1941, teve papel importante no
                    desenvolvimento da indústria siderúrgica brasileira.
                </p>

            </div>

        </div>

    </section>


    <!-- 8. ESTADO E PROPAGANDA -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-bullhorn"></i>
            </div>

            <div>

                <div class="numero">
                    08 — PROPAGANDA
                </div>

                <h2>
                    Propaganda e controle da informação
                </h2>

            </div>

        </div>

        <p>
            Durante o Estado Novo, o governo utilizou a propaganda
            como instrumento para divulgar suas ações e fortalecer
            a imagem de Vargas.
        </p>

        <p>
            O Departamento de Imprensa e Propaganda (DIP) foi criado
            em 1939 e atuou na divulgação da propaganda oficial
            e na censura dos meios de comunicação.
        </p>

        <div class="destaque">

            <strong>DIP:</strong>
            Departamento de Imprensa e Propaganda, responsável
            por atividades relacionadas à propaganda oficial
            e ao controle da informação durante o Estado Novo.

        </div>

    </section>


    <!-- 9. SEGUNDA GUERRA -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-earth-americas"></i>
            </div>

            <div>

                <div class="numero">
                    09 — SEGUNDA GUERRA MUNDIAL
                </div>

                <h2>
                    O Brasil na Segunda Guerra Mundial
                </h2>

            </div>

        </div>

        <p>
            Durante a Segunda Guerra Mundial, o Brasil inicialmente
            manteve uma posição de neutralidade, mas posteriormente
            passou a apoiar os Aliados.
        </p>

        <p>
            Em 1944, a Força Expedicionária Brasileira (FEB)
            foi enviada para combater na Itália.
        </p>

        <div class="destaque">

            <strong>FEB:</strong>
            Força Expedicionária Brasileira, formada por militares
            brasileiros que participaram dos combates na Itália
            durante a Segunda Guerra Mundial.

        </div>

    </section>


    <!-- 10. FIM DA ERA VARGAS -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-flag-checkered"></i>
            </div>

            <div>

                <div class="numero">
                    10 — 1945
                </div>

                <h2>
                    O fim da Era Vargas
                </h2>

            </div>

        </div>

        <p>
            Em 1945, o Estado Novo chegou ao fim. A pressão pela
            redemocratização aumentou, especialmente após a participação
            do Brasil na Segunda Guerra Mundial ao lado dos países aliados.
        </p>

        <p>
            Vargas foi deposto pelos militares em outubro de 1945,
            encerrando seu primeiro longo período de governo.
        </p>

    </section>


    <!-- 11. LINHA DO TEMPO -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-timeline"></i>
            </div>

            <div>

                <div class="numero">
                    11 — LINHA DO TEMPO
                </div>

                <h2>
                    Principais acontecimentos
                </h2>

            </div>

        </div>

        <div class="linha-tempo">

            <div class="evento">

                <div class="ano">
                    1930
                </div>

                <p>
                    Revolução de 1930 e chegada de Getúlio Vargas ao poder.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1930–1934
                </div>

                <p>
                    Governo Provisório.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1934
                </div>

                <p>
                    Promulgação de uma nova Constituição e início
                    do Governo Constitucional.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1937
                </div>

                <p>
                    Vargas instaura o Estado Novo.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1939
                </div>

                <p>
                    Criação do Departamento de Imprensa e Propaganda (DIP).
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1943
                </div>

                <p>
                    Criação da Consolidação das Leis do Trabalho (CLT).
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1944
                </div>

                <p>
                    A Força Expedicionária Brasileira participa
                    dos combates na Itália.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1945
                </div>

                <p>
                    Fim do Estado Novo e deposição de Getúlio Vargas.
                </p>

            </div>

        </div>

    </section>


    <!-- RESUMO FINAL -->

    <section class="resumo-final">

        <h2>
            <i class="fa-solid fa-book-open"></i>
            Resumo rápido
        </h2>

        <ul>

            <li>
                A Era Vargas ocorreu entre 1930 e 1945.
            </li>

            <li>
                Getúlio Vargas chegou ao poder após a Revolução de 1930.
            </li>

            <li>
                O período foi dividido em Governo Provisório,
                Governo Constitucional e Estado Novo.
            </li>

            <li>
                O Estado Novo foi um regime autoritário iniciado em 1937.
            </li>

            <li>
                A legislação trabalhista foi uma das principais marcas
                do governo Vargas.
            </li>

            <li>
                A CLT foi criada em 1943.
            </li>

            <li>
                O governo estimulou a industrialização e aumentou
                a participação do Estado na economia.
            </li>

            <li>
                O DIP foi utilizado para propaganda oficial
                e controle da informação durante o Estado Novo.
            </li>

            <li>
                O Brasil participou da Segunda Guerra Mundial
                ao lado dos Aliados.
            </li>

            <li>
                A Era Vargas terminou em 1945, com a deposição
                de Getúlio Vargas.
            </li>

        </ul>

    </section>


    <!-- BOTÕES -->

    <div class="botoes-acoes">

        <a href="{{ route('materiais.historia') }}" class="btn-voltar">

            <i class="fa-solid fa-arrow-left"></i>

            Voltar para materiais

        </a>

        <a href="{{ route('materialEraVargasPdf') }}" class="btn-baixar">

            <i class="fa-solid fa-download"></i>

            Baixar

        </a>

    </div>

</div>

</body>

</html>