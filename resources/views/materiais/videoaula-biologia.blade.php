<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Videoaula — DNA e RNA | SIFE</title>

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
            line-height: 1.6;
        }

        /* VÍDEO */

        .secao-video {

            background: white;

            border-radius: 18px;

            padding: 28px;

            margin-bottom: 20px;

            border: 1px solid #edf2f7;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
        }

        .video-header {

            display: flex;
            align-items: center;

            gap: 15px;

            margin-bottom: 22px;
        }

        .video-icone {

            width: 50px;
            height: 50px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 13px;

            font-size: 20px;

            flex-shrink: 0;
        }

        .video-label {

            color: #d92f3d;

            font-size: 11px;
            font-weight: 800;

            letter-spacing: 1px;

            margin-bottom: 4px;
        }

        .video-header h2 {

            margin: 0;

            color: #071b35;

            font-size: 21px;
            font-weight: 800;
        }

        .video-header p {

            margin: 5px 0 0;

            color: #7b8794;

            font-size: 13px;
        }

        .video-container {

            position: relative;

            width: 100%;

            aspect-ratio: 16 / 9;

            overflow: hidden;

            border-radius: 14px;

            background: #071b35;
        }

        .video-container iframe {

            width: 100%;
            height: 100%;

            border: none;
        }

        .video-info {

            display: flex;
            align-items: center;

            gap: 10px;

            margin-top: 15px;

            padding: 14px 16px;

            background: #f3f6f9;

            border-radius: 10px;

            color: #627991;

            font-size: 12px;

            line-height: 1.6;
        }

        .video-info i {

            color: #d92f3d;

            font-size: 15px;

            flex-shrink: 0;
        }

        /* CONTEÚDO */

        .conteudo {

            background: white;

            border-radius: 18px;

            padding: 25px;

            border: 1px solid #edf2f7;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
        }

        .conteudo h3 {

            margin: 0 0 12px;

            color: #071b35;

            font-size: 18px;

            font-weight: 800;
        }

        .conteudo p {

            margin: 0;

            color: #627991;

            font-size: 13px;

            line-height: 1.7;
        }

        /* CARDS */

        .grid-conteudo {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 14px;

            margin-top: 18px;
        }

        .card-conteudo {

            padding: 18px;

            background: #f8fafb;

            border: 1px solid #edf2f7;

            border-radius: 12px;

            transition: 0.2s;
        }

        .card-conteudo:hover {

            transform: translateY(-2px);
        }

        .card-conteudo .icone {

            width: 38px;
            height: 38px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-bottom: 10px;

            background: #fff3f3;

            color: #d92f3d;

            border-radius: 10px;

            font-size: 15px;
        }

        .card-conteudo h4 {

            margin: 0 0 7px;

            color: #071b35;

            font-size: 14px;

            font-weight: 800;
        }

        .card-conteudo p {

            margin: 0;

            color: #627991;

            font-size: 12px;

            line-height: 1.7;
        }

        /* DESTAQUE */

        .destaque {

            display: flex;

            align-items: flex-start;

            gap: 10px;

            margin-top: 18px;

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
        }

        .destaque strong {

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

            .secao-video,
            .conteudo {
                padding: 20px;
            }

            .video-header {
                align-items: flex-start;
            }

            .grid-conteudo {
                grid-template-columns: 1fr;
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

            VIDEOAULA DE BIOLOGIA

        </div>

        <h1 class="titulo-principal">

            DNA e RNA

        </h1>

        <p class="subtitulo">

            Aula sobre a estrutura, características e funções
            do DNA e do RNA no funcionamento das células.

        </p>

    </div>


    <!-- VÍDEO -->

    <section class="secao-video">

        <div class="video-header">

            <div class="video-icone">

                <i class="fa-solid fa-play"></i>

            </div>

            <div>

                <div class="video-label">

                    VIDEOAULA DE BIOLOGIA

                </div>

                <h2>

                    DNA e RNA

                </h2>

                <p>

                    Estrutura e funções dos ácidos nucleicos.

                </p>

            </div>

        </div>


        <div class="video-container">

            <iframe
                src="https://www.youtube.com/embed/POalSeti9cA"
                title="Videoaula — DNA e RNA"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>

        </div>


        <div class="video-info">

            <i class="fa-solid fa-circle-info"></i>

            <span>

                Assista à videoaula com atenção e depois revise
                os conceitos de DNA, RNA, genes e síntese de proteínas
                apresentados no material de Biologia.

            </span>

        </div>

    </section>


    <!-- CONTEÚDO -->

    <section class="conteudo">

        <h3>

            O que você vai aprender?

        </h3>

        <p>

            Nesta aula, você vai revisar os principais conceitos
            relacionados ao DNA e ao RNA, compreendendo suas estruturas,
            diferenças e funções no armazenamento e na utilização
            das informações genéticas.

        </p>


        <div class="grid-conteudo">


            <!-- DNA -->

            <div class="card-conteudo">

                <div class="icone">

                    <i class="fa-solid fa-dna"></i>

                </div>

                <h4>

                    DNA

                </h4>

                <p>

                    O DNA é a molécula responsável pelo armazenamento
                    das informações genéticas dos seres vivos.

                </p>

            </div>


            <!-- RNA -->

            <div class="card-conteudo">

                <div class="icone">

                    <i class="fa-solid fa-link"></i>

                </div>

                <h4>

                    RNA

                </h4>

                <p>

                    O RNA participa da utilização das informações
                    genéticas e possui diferentes funções celulares.

                </p>

            </div>


            <!-- NUCLEOTÍDEOS -->

            <div class="card-conteudo">

                <div class="icone">

                    <i class="fa-solid fa-layer-group"></i>

                </div>

                <h4>

                    Nucleotídeos

                </h4>

                <p>

                    DNA e RNA são formados por unidades chamadas
                    nucleotídeos, constituídas por açúcar, fosfato
                    e base nitrogenada.

                </p>

            </div>


            <!-- BASES -->

            <div class="card-conteudo">

                <div class="icone">

                    <i class="fa-solid fa-flask"></i>

                </div>

                <h4>

                    Bases nitrogenadas

                </h4>

                <p>

                    No DNA aparecem adenina, timina, citosina e guanina.
                    No RNA, a uracila substitui a timina.

                </p>

            </div>


            <!-- GENES -->

            <div class="card-conteudo">

                <div class="icone">

                    <i class="fa-solid fa-code"></i>

                </div>

                <h4>

                    Genes

                </h4>

                <p>

                    Os genes são segmentos de DNA que contêm informações
                    relacionadas a características e funções biológicas.

                </p>

            </div>


            <!-- PROTEÍNAS -->

            <div class="card-conteudo">

                <div class="icone">

                    <i class="fa-solid fa-cubes"></i>

                </div>

                <h4>

                    Síntese de proteínas

                </h4>

                <p>

                    A informação genética pode ser utilizada para
                    produzir proteínas por meio dos processos de
                    transcrição e tradução.

                </p>

            </div>

        </div>


        <!-- DESTAQUE -->

        <div class="destaque">

            <i class="fa-solid fa-lightbulb"></i>

            <div>

                <strong>Para lembrar:</strong>

                o DNA armazena a informação genética, enquanto o RNA
                participa de diferentes etapas da expressão dessa
                informação. No DNA, as bases se pareiam como A–T e C–G.

            </div>

        </div>

    </section>


</div>

</body>

</html>