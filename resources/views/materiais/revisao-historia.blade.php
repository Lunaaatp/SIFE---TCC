<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Revisão — História do Brasil | SIFE</title>

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
            min-width: 105px;

            color: #d92f3d;

            font-size: 13px;
            font-weight: 800;
        }

        .evento p {
            margin: 0;
        }

        /* FÓRMULAS / CONCEITOS */

        .conceito {
            margin-top: 15px;

            padding: 15px 17px;

            background: #f8fafb;

            border-radius: 10px;

            border: 1px solid #edf2f7;
        }

        .conceito strong {
            display: block;

            margin-bottom: 5px;

            color: #071b35;

            font-size: 13px;
        }

        .conceito span {
            color: #627991;

            font-size: 12px;
            line-height: 1.7;
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

            .evento {
                flex-direction: column;
                gap: 5px;
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

            <a href="{{ route('materiais.historia') }}" class="voltar">

                <i class="fa-solid fa-arrow-left"></i>

                Voltar para materiais

            </a>

            <a href="{{ route('revisaoHistoriaPdf') }}" class="btn-baixar">

                <i class="fa-solid fa-download"></i>

                Baixar

            </a>

        </div>

        <div class="titulo-pequeno">
            MATERIAL DE REVISÃO — HISTÓRIA
        </div>

        <h1 class="titulo-principal">
            História do Brasil
        </h1>

        <p class="subtitulo">
            Material de revisão para a próxima avaliação.
            Relembre os principais acontecimentos e períodos
            da História do Brasil.
        </p>

    </div>


    <!-- AVISO -->

    <div class="aviso">

        <i class="fa-solid fa-circle-info"></i>

        <span>
            <strong>Dica de estudo:</strong>
            leia cada período com atenção, observe as datas principais
            e tente relacionar os acontecimentos políticos, econômicos
            e sociais apresentados.
        </span>

    </div>


    <!-- 1 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-flag"></i>
            </div>

            <div>

                <div class="numero">
                    01 — PRIMEIRA REPÚBLICA
                </div>

                <h2>
                    República Velha
                </h2>

            </div>

        </div>

        <p>
            A Primeira República brasileira teve início com a
            Proclamação da República, em 1889, e terminou com a
            Revolução de 1930.
        </p>

        <p>
            O período foi marcado pela forte influência das
            oligarquias estaduais e pela importância econômica
            da produção agrícola, especialmente do café.
        </p>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Política dos Governadores
                </h3>

                <p>
                    Mecanismo político que fortaleceu a relação
                    entre o governo federal e as oligarquias estaduais.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Café com Leite
                </h3>

                <p>
                    Expressão associada à influência política
                    de São Paulo e Minas Gerais durante a Primeira República.
                </p>

            </div>

        </div>

        <div class="conceito">

            <strong>Para lembrar:</strong>

            <span>
                1889 → Proclamação da República
                &nbsp; | &nbsp;
                1930 → Revolução de 1930
            </span>

        </div>

    </section>


    <!-- 2 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-landmark"></i>
            </div>

            <div>

                <div class="numero">
                    02 — ERA VARGAS
                </div>

                <h2>
                    Getúlio Vargas
                </h2>

            </div>

        </div>

        <p>
            A Era Vargas começou em 1930, após a Revolução de 1930,
            e teve seu primeiro grande período encerrado em 1945.
        </p>

        <p>
            Vargas promoveu uma forte centralização do poder,
            estimulou a industrialização e criou importantes
            medidas relacionadas à legislação trabalhista.
        </p>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Governo Provisório
                </h3>

                <p>
                    1930–1934. Período de reorganização política
                    e aumento da centralização do governo federal.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Governo Constitucional
                </h3>

                <p>
                    1934–1937. Período marcado pela Constituição
                    de 1934 e por conflitos políticos.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Estado Novo
                </h3>

                <p>
                    1937–1945. Regime autoritário caracterizado
                    pela concentração de poder e censura.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    CLT
                </h3>

                <p>
                    A Consolidação das Leis do Trabalho foi criada
                    em 1943, reunindo normas trabalhistas.
                </p>

            </div>

        </div>

    </section>


    <!-- 3 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-industry"></i>
            </div>

            <div>

                <div class="numero">
                    03 — INDUSTRIALIZAÇÃO
                </div>

                <h2>
                    Transformações econômicas
                </h2>

            </div>

        </div>

        <p>
            Durante a Era Vargas, o Estado passou a atuar de maneira
            mais intensa na economia e houve estímulo à industrialização
            brasileira.
        </p>

        <ul class="lista">

            <li>
                Desenvolvimento da indústria de base;
            </li>

            <li>
                Maior participação do Estado na economia;
            </li>

            <li>
                Criação da Companhia Siderúrgica Nacional;
            </li>

            <li>
                Incentivo à produção industrial brasileira.
            </li>

        </ul>

    </section>


    <!-- 4 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-scale-balanced"></i>
            </div>

            <div>

                <div class="numero">
                    04 — PERÍODO DEMOCRÁTICO
                </div>

                <h2>
                    República de 1945 a 1964
                </h2>

            </div>

        </div>

        <p>
            Após o fim do Estado Novo, o Brasil iniciou uma nova
            fase política marcada pela retomada das instituições
            democráticas.
        </p>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Eurico Gaspar Dutra
                </h3>

                <p>
                    Primeiro presidente eleito após o Estado Novo,
                    governando entre 1946 e 1951.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Getúlio Vargas
                </h3>

                <p>
                    Retornou à Presidência pelo voto direto em 1951
                    e permaneceu no cargo até 1954.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Juscelino Kubitschek
                </h3>

                <p>
                    Governou de 1956 a 1961, destacando-se pelo
                    Plano de Metas e pela construção de Brasília.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    João Goulart
                </h3>

                <p>
                    Assumiu a Presidência em 1961 e permaneceu
                    no cargo até o movimento de 1964.
                </p>

            </div>

        </div>

    </section>


    <!-- 5 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-building-columns"></i>
            </div>

            <div>

                <div class="numero">
                    05 — DITADURA MILITAR
                </div>

                <h2>
                    Regime Militar
                </h2>

            </div>

        </div>

        <p>
            O período iniciado em 1964 foi marcado pelo governo
            dos militares, pela restrição de direitos políticos
            e por medidas de repressão e censura.
        </p>

        <p>
            O regime permaneceu até 1985, quando ocorreu a transição
            para um período de redemocratização.
        </p>

        <ul class="lista">

            <li>
                Instalação do regime militar em 1964;
            </li>

            <li>
                Restrição de direitos políticos;
            </li>

            <li>
                Censura aos meios de comunicação;
            </li>

            <li>
                Repressão a movimentos de oposição;
            </li>

            <li>
                Processo de abertura política;
            </li>

            <li>
                Fim do regime em 1985.
            </li>

        </ul>

    </section>


    <!-- 6 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-users"></i>
            </div>

            <div>

                <div class="numero">
                    06 — REDEMOCRATIZAÇÃO
                </div>

                <h2>
                    Nova República
                </h2>

            </div>

        </div>

        <p>
            A Nova República corresponde ao período iniciado com
            a redemocratização brasileira após o fim do regime militar.
        </p>

        <p>
            Um dos principais marcos desse processo foi a Constituição
            Federal de 1988, que estabeleceu novas bases para o
            funcionamento democrático do país.
        </p>

        <div class="destaque">

            <strong>Constituição de 1988:</strong>

            conhecida como Constituição Cidadã, tornou-se um
            importante marco da redemocratização brasileira.

        </div>

    </section>


    <!-- 7 LINHA DO TEMPO -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-timeline"></i>
            </div>

            <div>

                <div class="numero">
                    07 — DATAS IMPORTANTES
                </div>

                <h2>
                    Linha do tempo
                </h2>

            </div>

        </div>

        <div class="linha-tempo">

            <div class="evento">

                <div class="ano">
                    1889
                </div>

                <p>
                    Proclamação da República.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1930
                </div>

                <p>
                    Revolução de 1930 e início da Era Vargas.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1937
                </div>

                <p>
                    Início do Estado Novo.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1943
                </div>

                <p>
                    Criação da CLT.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1945
                </div>

                <p>
                    Fim do Estado Novo.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1956
                </div>

                <p>
                    Início do governo de Juscelino Kubitschek.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1964
                </div>

                <p>
                    Início do Regime Militar.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1985
                </div>

                <p>
                    Fim do Regime Militar e início do processo
                    de redemocratização.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1988
                </div>

                <p>
                    Promulgação da Constituição Federal.
                </p>

            </div>

        </div>

    </section>


    <!-- 8 PONTOS PARA PROVA -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-lightbulb"></i>
            </div>

            <div>

                <div class="numero">
                    08 — PARA AVALIAÇÃO
                </div>

                <h2>
                    Pontos que você deve lembrar
                </h2>

            </div>

        </div>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    República Velha
                </h3>

                <p>
                    1889–1930. Oligarquias, política dos governadores
                    e economia cafeeira.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Era Vargas
                </h3>

                <p>
                    1930–1945. Centralização, industrialização,
                    legislação trabalhista e Estado Novo.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Governo JK
                </h3>

                <p>
                    Plano de Metas, industrialização e construção
                    de Brasília.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Ditadura Militar
                </h3>

                <p>
                    1964–1985. Regime militar, censura,
                    repressão e abertura política.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Constituição de 1988
                </h3>

                <p>
                    Marco importante do processo de redemocratização
                    e conhecida como Constituição Cidadã.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Nova República
                </h3>

                <p>
                    Período associado à redemocratização
                    e ao retorno das instituições democráticas.
                </p>

            </div>

        </div>

    </section>


    <!-- RESUMO FINAL -->

    <section class="resumo-final">

        <h2>
            <i class="fa-solid fa-book-open"></i>
            Resumo para memorizar
        </h2>

        <ul>

            <li>
                <strong>1889:</strong> Proclamação da República.
            </li>

            <li>
                <strong>1889–1930:</strong> Primeira República ou República Velha.
            </li>

            <li>
                <strong>1930:</strong> Revolução de 1930 e chegada de Getúlio Vargas ao poder.
            </li>

            <li>
                <strong>1937–1945:</strong> Estado Novo.
            </li>

            <li>
                <strong>1943:</strong> criação da CLT.
            </li>

            <li>
                <strong>1956–1961:</strong> governo de Juscelino Kubitschek.
            </li>

            <li>
                <strong>1964:</strong> início do Regime Militar.
            </li>

            <li>
                <strong>1985:</strong> fim do Regime Militar e redemocratização.
            </li>

            <li>
                <strong>1988:</strong> Constituição Federal, conhecida como Constituição Cidadã.
            </li>

        </ul>

    </section>


    <!-- BOTÕES FINAIS -->

    <div class="botoes-acoes">

        <a href="{{ route('materiais.historia') }}" class="btn-voltar-final">

            <i class="fa-solid fa-arrow-left"></i>

            Voltar para materiais

        </a>

        <a href="{{ route('revisaoHistoriaPdf') }}" class="btn-baixar-final">

            <i class="fa-solid fa-download"></i>

            Baixar

        </a>

    </div>

</div>

</body>

</html>