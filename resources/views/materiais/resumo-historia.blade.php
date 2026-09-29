<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resumo — Primeira Guerra Mundial | SIFE</title>

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
            RESUMO DE HISTÓRIA
        </div>

        <h1 class="titulo-principal">
            Primeira Guerra Mundial
        </h1>

        <p class="subtitulo">
            Um resumo dos principais acontecimentos, causas,
            consequências e características da Primeira Guerra Mundial.
        </p>

    </div>


    <!-- 1. CONTEXTO -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-earth-europe"></i>
            </div>

            <div>

                <div class="numero">
                    01 — CONTEXTO
                </div>

                <h2>
                    O que foi a Primeira Guerra Mundial?
                </h2>

            </div>

        </div>

        <p>
            A Primeira Guerra Mundial foi um grande conflito militar
            que ocorreu entre 1914 e 1918, envolvendo diversas potências
            europeias e outros países.
        </p>

        <p>
            O conflito provocou milhões de mortes e transformou
            profundamente a política, a economia e a sociedade mundial.
        </p>

        <div class="destaque">

            <strong>Período:</strong>
            1914 a 1918.

            <br>

            <strong>Principal cenário:</strong>
            Europa, especialmente as regiões da Europa Ocidental
            e Oriental.

        </div>

    </section>


    <!-- 2. CAUSAS -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-triangle-exclamation"></i>
            </div>

            <div>

                <div class="numero">
                    02 — CAUSAS
                </div>

                <h2>
                    Principais causas da guerra
                </h2>

            </div>

        </div>

        <p>
            A Primeira Guerra Mundial não teve uma única causa.
            O conflito foi resultado de uma combinação de tensões
            políticas, econômicas e militares que se acumularam
            ao longo do tempo.
        </p>

        <ul class="lista">

            <li>
                <strong>Imperialismo:</strong>
                disputa entre as potências por territórios,
                mercados e áreas de influência.
            </li>

            <li>
                <strong>Nacionalismo:</strong>
                fortalecimento de sentimentos nacionalistas
                entre diferentes povos e países.
            </li>

            <li>
                <strong>Militarismo:</strong>
                aumento dos investimentos militares e da
                preparação para possíveis conflitos.
            </li>

            <li>
                <strong>Corrida armamentista:</strong>
                crescimento dos exércitos e da produção de armas.
            </li>

            <li>
                <strong>Alianças militares:</strong>
                formação de blocos que aumentaram a possibilidade
                de um conflito envolvendo vários países.
            </li>

        </ul>

    </section>


    <!-- 3. ALIANÇAS -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-handshake"></i>
            </div>

            <div>

                <div class="numero">
                    03 — ALIANÇAS
                </div>

                <h2>
                    Tríplice Aliança e Tríplice Entente
                </h2>

            </div>

        </div>

        <p>
            Antes da guerra, as principais potências europeias
            formaram alianças militares. Essas alianças contribuíram
            para ampliar o conflito quando a guerra começou.
        </p>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Tríplice Aliança
                </h3>

                <p>
                    Formada originalmente por Alemanha,
                    Áustria-Hungria e Itália.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Tríplice Entente
                </h3>

                <p>
                    Reuniu principalmente França,
                    Reino Unido e Rússia.
                </p>

            </div>

        </div>

        <div class="destaque">

            <strong>Importante:</strong>
            a composição dos grupos mudou durante o conflito.
            A Itália, por exemplo, deixou de apoiar a Tríplice Aliança
            e entrou na guerra ao lado da Entente em 1915.

        </div>

    </section>


    <!-- 4. ESTOPIM -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-bomb"></i>
            </div>

            <div>

                <div class="numero">
                    04 — ESTOPIM
                </div>

                <h2>
                    O assassinato de Francisco Ferdinando
                </h2>

            </div>

        </div>

        <p>
            O acontecimento que desencadeou diretamente a guerra foi
            o assassinato do arquiduque Francisco Ferdinando,
            herdeiro do Império Austro-Húngaro, em Sarajevo,
            em 28 de junho de 1914.
        </p>

        <p>
            O atentado provocou uma série de declarações de guerra
            entre países que já estavam envolvidos em fortes tensões
            políticas e militares.
        </p>

        <div class="destaque">

            <strong>Estopim da guerra:</strong>
            assassinato de Francisco Ferdinando em 1914.

        </div>

    </section>


    <!-- 5. FASES -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-clock"></i>
            </div>

            <div>

                <div class="numero">
                    05 — FASES DA GUERRA
                </div>

                <h2>
                    Como o conflito aconteceu?
                </h2>

            </div>

        </div>

        <div class="linha-tempo">

            <div class="evento">

                <div class="ano">
                    1914
                </div>

                <p>
                    Início da guerra e avanço das tropas alemãs
                    em direção à França.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1915–1916
                </div>

                <p>
                    Consolidação da guerra de trincheiras,
                    marcada por longos períodos de combate
                    e poucas mudanças territoriais.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1917
                </div>

                <p>
                    Os Estados Unidos entraram na guerra ao lado
                    da Entente. No mesmo ano, a Rússia iniciou
                    seu processo de saída do conflito.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1918
                </div>

                <p>
                    A Alemanha sofreu derrotas e assinou o armistício
                    em 11 de novembro de 1918.
                </p>

            </div>

        </div>

    </section>


    <!-- 6. TRINCHEIRAS -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-person-rifle"></i>
            </div>

            <div>

                <div class="numero">
                    06 — GUERRA DE TRINCHEIRAS
                </div>

                <h2>
                    As trincheiras
                </h2>

            </div>

        </div>

        <p>
            A guerra de trincheiras foi uma das principais características
            da Primeira Guerra Mundial, especialmente na Frente Ocidental.
        </p>

        <p>
            Os soldados permaneciam em grandes sistemas de valas
            construídas no solo, utilizando-as como proteção contra
            os ataques inimigos.
        </p>

        <ul class="lista">

            <li>Condições precárias de higiene;</li>
            <li>Frio, lama e doenças;</li>
            <li>Uso intenso de artilharia;</li>
            <li>Grandes perdas humanas;</li>
            <li>Avanços territoriais geralmente pequenos.</li>

        </ul>

    </section>


    <!-- 7. NOVAS ARMAS -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-gears"></i>
            </div>

            <div>

                <div class="numero">
                    07 — TECNOLOGIA MILITAR
                </div>

                <h2>
                    Novas armas e tecnologias
                </h2>

            </div>

        </div>

        <p>
            A guerra foi marcada pelo uso em larga escala de novas
            tecnologias militares, aumentando o poder de destruição
            dos exércitos.
        </p>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Metralhadoras
                </h3>

                <p>
                    Aumentaram significativamente o poder de fogo
                    das tropas.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Artilharia
                </h3>

                <p>
                    Foi utilizada intensamente durante os combates.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Gases tóxicos
                </h3>

                <p>
                    Foram empregados como armas químicas
                    durante o conflito.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Tanques e aviões
                </h3>

                <p>
                    Novas tecnologias que passaram a ter
                    participação crescente nos combates.
                </p>

            </div>

        </div>

    </section>


    <!-- 8. EUA E RUSSIA -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-flag"></i>
            </div>

            <div>

                <div class="numero">
                    08 — 1917
                </div>

                <h2>
                    Entrada dos Estados Unidos e saída da Rússia
                </h2>

            </div>

        </div>

        <p>
            Em 1917, os Estados Unidos entraram na guerra ao lado
            da Tríplice Entente. A participação norte-americana
            contribuiu para fortalecer o bloco aliado.
        </p>

        <p>
            No mesmo período, a Rússia passou por uma revolução
            e posteriormente iniciou sua retirada da guerra,
            assinando o Tratado de Brest-Litovsk em 1918.
        </p>

    </section>


    <!-- 9. FIM -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-flag-checkered"></i>
            </div>

            <div>

                <div class="numero">
                    09 — FIM DA GUERRA
                </div>

                <h2>
                    O armistício de 1918
                </h2>

            </div>

        </div>

        <p>
            Em 1918, a situação da Alemanha e de seus aliados
            tornou-se cada vez mais difícil.
        </p>

        <p>
            Em 11 de novembro de 1918, foi assinado o armistício
            que encerrou os combates da Primeira Guerra Mundial.
        </p>

        <div class="destaque">

            <strong>11 de novembro de 1918:</strong>
            fim dos combates da Primeira Guerra Mundial.

        </div>

    </section>


    <!-- 10. CONSEQUÊNCIAS -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-chart-line"></i>
            </div>

            <div>

                <div class="numero">
                    10 — CONSEQUÊNCIAS
                </div>

                <h2>
                    Consequências da Primeira Guerra Mundial
                </h2>

            </div>

        </div>

        <ul class="lista">

            <li>
                Milhões de mortos, feridos e deslocados.
            </li>

            <li>
                Grandes perdas econômicas e materiais.
            </li>

            <li>
                Queda de impérios, como o Alemão,
                Austro-Húngaro, Otomano e Russo.
            </li>

            <li>
                Alterações no mapa político da Europa.
            </li>

            <li>
                Criação de novos países e reorganização
                de territórios.
            </li>

            <li>
                Assinatura do Tratado de Versalhes.
            </li>

            <li>
                Criação da Liga das Nações.
            </li>

            <li>
                Fortalecimento de tensões políticas que
                contribuíram para o cenário que levaria
                à Segunda Guerra Mundial.
            </li>

        </ul>

    </section>


    <!-- 11. TRATADO -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-file-signature"></i>
            </div>

            <div>

                <div class="numero">
                    11 — TRATADO DE VERSALHES
                </div>

                <h2>
                    O acordo de paz
                </h2>

            </div>

        </div>

        <p>
            O Tratado de Versalhes foi assinado em 1919 e estabeleceu
            condições de paz para a Alemanha após a Primeira Guerra Mundial.
        </p>

        <p>
            A Alemanha sofreu diversas restrições militares e territoriais,
            além de ser responsabilizada pelos danos relacionados ao conflito
            e obrigada a realizar pagamentos de reparações.
        </p>

        <div class="destaque">

            O Tratado de Versalhes tornou-se um dos elementos importantes
            para compreender as tensões políticas existentes na Europa
            no período entre as duas guerras mundiais.

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
                A Primeira Guerra Mundial ocorreu entre 1914 e 1918.
            </li>

            <li>
                Entre suas causas estavam o imperialismo,
                o nacionalismo, o militarismo e as alianças militares.
            </li>

            <li>
                O assassinato de Francisco Ferdinando foi o
                estopim do conflito.
            </li>

            <li>
                A guerra de trincheiras marcou principalmente
                a Frente Ocidental.
            </li>

            <li>
                Em 1917, os Estados Unidos entraram na guerra
                ao lado da Entente.
            </li>

            <li>
                A Rússia iniciou sua saída do conflito após
                a Revolução Russa.
            </li>

            <li>
                O armistício de 11 de novembro de 1918 encerrou
                os combates.
            </li>

            <li>
                O Tratado de Versalhes foi assinado em 1919.
            </li>

            <li>
                A guerra provocou profundas transformações
                políticas, econômicas e sociais.
            </li>

        </ul>

    </section>


    <!-- BOTÕES -->

    <div class="botoes-acoes">

        <a href="{{ route('materiais.historia') }}" class="btn-voltar">

            <i class="fa-solid fa-arrow-left"></i>

            Voltar para materiais

        </a>

        <a href="{{ route('resumoHistoriaPdf') }}" class="btn-baixar">

            <i class="fa-solid fa-download"></i>

            Baixar

        </a>

    </div>

</div>

</body>

</html>