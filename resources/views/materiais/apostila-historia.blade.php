<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Apostila — Revolução Industrial | SIFE</title>

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
            width: 45px;
            height: 45px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 12px;

            font-size: 18px;

            flex-shrink: 0;
        }

        .cabecalho-secao h2 {
            margin: 0;
            color: #071b35;
            font-size: 20px;
            font-weight: 800;
        }

        .numero {
            color: #d92f3d;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
            margin-bottom: 3px;
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

        .formula {
            margin: 15px 0;
            padding: 15px;

            background: #f3f6f9;
            border-radius: 10px;

            color: #071b35;

            text-align: center;

            font-size: 15px;
            font-weight: 800;
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

            font-size: 12px;
            line-height: 1.7;
        }

        .linha-tempo {
            margin-top: 18px;
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
            min-width: 90px;

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
            APOSTILA DE HISTÓRIA
        </div>

        <h1 class="titulo-principal">
            Revolução Industrial
        </h1>

        <p class="subtitulo">
            Entenda as transformações econômicas, sociais e tecnológicas
            provocadas pela Revolução Industrial.
        </p>

    </div>


    <!-- 1 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-industry"></i>
            </div>

            <div>

                <div class="numero">
                    01 — INTRODUÇÃO
                </div>

                <h2>
                    O que foi a Revolução Industrial?
                </h2>

            </div>

        </div>

        <p>
            A Revolução Industrial foi um processo de grandes transformações
            econômicas, sociais e tecnológicas que começou na Inglaterra,
            na segunda metade do século XVIII.
        </p>

        <p>
            Durante esse processo, a produção artesanal foi gradualmente
            substituída pela produção realizada em máquinas e fábricas.
            Isso modificou profundamente a maneira como as pessoas
            trabalhavam, produziam e viviam.
        </p>

        <div class="destaque">

            <strong>Em resumo:</strong>
            a Revolução Industrial marcou a passagem de uma produção
            predominantemente artesanal para uma produção mecanizada
            e em larga escala.

        </div>

    </section>


    <!-- 2 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-map-location-dot"></i>
            </div>

            <div>

                <div class="numero">
                    02 — ORIGEM
                </div>

                <h2>
                    Onde e quando começou?
                </h2>

            </div>

        </div>

        <p>
            A Primeira Revolução Industrial teve início na Inglaterra,
            aproximadamente na segunda metade do século XVIII.
        </p>

        <p>
            A Inglaterra reunia condições favoráveis para o desenvolvimento
            industrial, como disponibilidade de carvão mineral, recursos
            financeiros, crescimento do comércio e expansão dos mercados.
        </p>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Inglaterra
                </h3>

                <p>
                    Foi o principal centro da Primeira Revolução Industrial.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Carvão mineral
                </h3>

                <p>
                    Tornou-se uma importante fonte de energia para as máquinas
                    e locomotivas.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Capital
                </h3>

                <p>
                    Investimentos possibilitaram a criação e expansão
                    das fábricas.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Mercado consumidor
                </h3>

                <p>
                    O crescimento do comércio aumentou a demanda por produtos.
                </p>

            </div>

        </div>

    </section>


    <!-- 3 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-gears"></i>
            </div>

            <div>

                <div class="numero">
                    03 — TECNOLOGIA
                </div>

                <h2>
                    Principais invenções
                </h2>

            </div>

        </div>

        <p>
            O desenvolvimento de novas máquinas foi fundamental para
            aumentar a velocidade e a quantidade da produção.
        </p>

        <ul class="lista">

            <li>
                <strong>Máquina a vapor:</strong>
                utilizava a força do vapor para realizar trabalho mecânico.
            </li>

            <li>
                <strong>Máquinas têxteis:</strong>
                aumentaram significativamente a produção de tecidos.
            </li>

            <li>
                <strong>Locomotiva a vapor:</strong>
                contribuiu para transformar os meios de transporte.
            </li>

            <li>
                <strong>Ferrovias:</strong>
                facilitaram o transporte de pessoas, matérias-primas
                e mercadorias.
            </li>

        </ul>

    </section>


    <!-- 4 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-shirt"></i>
            </div>

            <div>

                <div class="numero">
                    04 — INDÚSTRIA
                </div>

                <h2>
                    A indústria têxtil
                </h2>

            </div>

        </div>

        <p>
            A indústria têxtil foi um dos setores que mais se desenvolveu
            durante a Primeira Revolução Industrial.
        </p>

        <p>
            Novas máquinas permitiram produzir tecidos em maior quantidade
            e em menos tempo. A mecanização aumentou a produtividade e
            contribuiu para o crescimento das fábricas.
        </p>

        <div class="destaque">

            A produção em fábricas permitiu a fabricação de grandes
            quantidades de mercadorias destinadas a mercados cada vez maiores.

        </div>

    </section>


    <!-- 5 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-users"></i>
            </div>

            <div>

                <div class="numero">
                    05 — SOCIEDADE
                </div>

                <h2>
                    Transformações sociais
                </h2>

            </div>

        </div>

        <p>
            A industrialização provocou mudanças profundas na sociedade.
            Muitas pessoas deixaram o campo e foram para as cidades
            em busca de trabalho nas fábricas.
        </p>

        <p>
            Esse processo contribuiu para o crescimento urbano e para
            o surgimento de uma nova organização social relacionada
            ao trabalho industrial.
        </p>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Burguesia industrial
                </h3>

                <p>
                    Grupo formado por proprietários de fábricas,
                    máquinas e capitais.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Operariado
                </h3>

                <p>
                    Trabalhadores que vendiam sua força de trabalho
                    em troca de salários.
                </p>

            </div>

        </div>

    </section>


    <!-- 6 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-city"></i>
            </div>

            <div>

                <div class="numero">
                    06 — URBANIZAÇÃO
                </div>

                <h2>
                    Crescimento das cidades
                </h2>

            </div>

        </div>

        <p>
            A industrialização estimulou a migração de trabalhadores
            para as cidades. Como consequência, muitos centros urbanos
            cresceram rapidamente.
        </p>

        <p>
            Porém, o crescimento urbano nem sempre foi acompanhado
            por boas condições de moradia, saneamento e infraestrutura.
        </p>

        <ul class="lista">

            <li>Crescimento acelerado das cidades;</li>
            <li>Aumento da população urbana;</li>
            <li>Formação de bairros operários;</li>
            <li>Problemas de saneamento e moradia;</li>
            <li>Aumento da concentração de trabalhadores próximos às fábricas.</li>

        </ul>

    </section>


    <!-- 7 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-person-digging"></i>
            </div>

            <div>

                <div class="numero">
                    07 — TRABALHO
                </div>

                <h2>
                    Condições de trabalho
                </h2>

            </div>

        </div>

        <p>
            Nas primeiras décadas da industrialização, muitos trabalhadores
            enfrentavam condições difíceis nas fábricas.
        </p>

        <ul class="lista">

            <li>Jornadas de trabalho muito longas;</li>

            <li>Baixos salários;</li>

            <li>Ambientes de trabalho perigosos;</li>

            <li>Falta de direitos trabalhistas;</li>

            <li>Emprego de mulheres e crianças em diversas atividades.</li>

        </ul>

        <div class="destaque">

            As condições de trabalho contribuíram para o surgimento
            de movimentos de trabalhadores que passaram a reivindicar
            melhores salários, redução da jornada e melhores condições
            de trabalho.

        </div>

    </section>


    <!-- 8 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-people-group"></i>
            </div>

            <div>

                <div class="numero">
                    08 — MOVIMENTOS OPERÁRIOS
                </div>

                <h2>
                    Reações dos trabalhadores
                </h2>

            </div>

        </div>

        <p>
            Com o crescimento das fábricas e das dificuldades enfrentadas
            pelos trabalhadores, surgiram diferentes formas de resistência
            e organização.
        </p>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Ludismo
                </h3>

                <p>
                    Movimento marcado pela destruição de máquinas
                    por trabalhadores que as consideravam responsáveis
                    pela perda de empregos e pela exploração.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Sindicatos
                </h3>

                <p>
                    Organizações criadas para representar os interesses
                    dos trabalhadores e reivindicar melhores condições.
                </p>

            </div>

        </div>

    </section>


    <!-- 9 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-arrow-trend-up"></i>
            </div>

            <div>

                <div class="numero">
                    09 — CONSEQUÊNCIAS
                </div>

                <h2>
                    Principais consequências
                </h2>

            </div>

        </div>

        <p>
            A Revolução Industrial modificou profundamente a economia
            e a sociedade.
        </p>

        <ul class="lista">

            <li>Expansão das fábricas;</li>

            <li>Aumento da produção de mercadorias;</li>

            <li>Desenvolvimento de novas tecnologias;</li>

            <li>Crescimento das cidades;</li>

            <li>Formação e expansão do operariado;</li>

            <li>Fortalecimento da burguesia industrial;</li>

            <li>Expansão dos mercados consumidores;</li>

            <li>Transformação das relações de trabalho;</li>

            <li>Surgimento e fortalecimento dos movimentos operários.</li>

        </ul>

    </section>


    <!-- 10 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-layer-group"></i>
            </div>

            <div>

                <div class="numero">
                    10 — FASES
                </div>

                <h2>
                    Primeira e Segunda Revolução Industrial
                </h2>

            </div>

        </div>

        <div class="grid-cards">

            <div class="card-info">

                <h3>
                    Primeira Revolução Industrial
                </h3>

                <p>
                    Iniciada na Inglaterra no século XVIII, teve como
                    destaque o uso do carvão mineral, da máquina a vapor
                    e o desenvolvimento da indústria têxtil.
                </p>

            </div>

            <div class="card-info">

                <h3>
                    Segunda Revolução Industrial
                </h3>

                <p>
                    Ocorreu principalmente a partir da segunda metade
                    do século XIX, com novas fontes de energia,
                    como eletricidade e petróleo, além do desenvolvimento
                    de novas indústrias.
                </p>

            </div>

        </div>

    </section>


    <!-- 11 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-clock"></i>
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
                    Século XVIII
                </div>

                <p>
                    Início da Primeira Revolução Industrial na Inglaterra.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    1760–1780
                </div>

                <p>
                    Expansão da mecanização e crescimento das primeiras
                    indústrias modernas.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    Século XIX
                </div>

                <p>
                    Expansão da industrialização para outras regiões
                    da Europa e para os Estados Unidos.
                </p>

            </div>

            <div class="evento">

                <div class="ano">
                    2ª metade do século XIX
                </div>

                <p>
                    Desenvolvimento da Segunda Revolução Industrial,
                    marcada por novas fontes de energia e tecnologias.
                </p>

            </div>

        </div>

    </section>


    <!-- RESUMO -->

    <section class="resumo-final">

        <h2>
            <i class="fa-solid fa-book-open"></i>
            Resumo rápido
        </h2>

        <ul>

            <li>
                A Revolução Industrial começou na Inglaterra,
                na segunda metade do século XVIII.
            </li>

            <li>
                A produção artesanal foi substituída gradualmente
                pela produção mecanizada nas fábricas.
            </li>

            <li>
                A máquina a vapor foi uma das principais tecnologias
                da Primeira Revolução Industrial.
            </li>

            <li>
                A industrialização provocou crescimento das cidades
                e mudanças nas relações sociais.
            </li>

            <li>
                Surgiram novos grupos sociais, como a burguesia industrial
                e o operariado.
            </li>

            <li>
                As difíceis condições de trabalho contribuíram para
                o surgimento de movimentos operários.
            </li>

            <li>
                A industrialização transformou a economia,
                os transportes, o trabalho e a sociedade.
            </li>

        </ul>

    </section>


    <!-- BOTÕES -->

    <div class="botoes-acoes">

        <a href="{{ route('materiais.historia') }}" class="btn-voltar">

            <i class="fa-solid fa-arrow-left"></i>

            Voltar para materiais

        </a>

        <a href="{{ route('apostilaHistoriaPdf') }}" class="btn-baixar">

            <i class="fa-solid fa-download"></i>

            Baixar

        </a>

    </div>

</div>

</body>

</html>