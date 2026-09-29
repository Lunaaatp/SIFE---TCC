<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Videoaula — Revolução Francesa | SIFE</title>

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

        .lista-conteudo {
            margin-top: 15px;

            padding-left: 20px;

            color: #627991;

            font-size: 13px;

            line-height: 1.8;
        }

        .lista-conteudo li {
            margin-bottom: 5px;
        }

        /* DESTAQUE */

        .destaque {
            display: flex;
            align-items: flex-start;

            gap: 10px;

            margin-top: 18px;

            padding: 15px 17px;

            background: #fff7f7;

            border-left: 4px solid #d92f3d;

            border-radius: 10px;

            color: #627991;

            font-size: 12px;

            line-height: 1.7;
        }

        .destaque i {
            color: #d92f3d;

            margin-top: 2px;
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
            VIDEOAULA DE HISTÓRIA
        </div>

        <h1 class="titulo-principal">
            Revolução Francesa
        </h1>

        <p class="subtitulo">
            Aula explicativa sobre as causas, principais acontecimentos
            e consequências da Revolução Francesa.
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
                    VIDEOAULA DE HISTÓRIA
                </div>

                <h2>
                    Revolução Francesa
                </h2>

                <p>
                    Causas, fases e consequências da Revolução Francesa.
                </p>

            </div>

        </div>


        <div class="video-container">

            <iframe
                src="https://www.youtube.com/embed/xXKzpJBnzmo"
                title="Videoaula - Revolução Francesa"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>

        </div>


        <div class="video-info">

            <i class="fa-solid fa-circle-info"></i>

            <span>
                Assista à videoaula com atenção e depois revise
                os principais conceitos apresentados nesta página.
            </span>

        </div>

    </section>


    <!-- CONTEÚDO -->

    <section class="conteudo">

        <h3>
            O que você vai aprender?
        </h3>

        <p>
            Nesta aula, você vai estudar a Revolução Francesa,
            movimento iniciado em 1789 que provocou profundas
            transformações políticas e sociais na França e teve
            repercussões em diferentes partes do mundo.
        </p>


        <ul class="lista-conteudo">

            <li>
                O contexto do Antigo Regime;
            </li>

            <li>
                A divisão da sociedade francesa em Estados;
            </li>

            <li>
                A influência das ideias iluministas;
            </li>

            <li>
                A crise econômica e social da França;
            </li>

            <li>
                A convocação dos Estados Gerais;
            </li>

            <li>
                A Queda da Bastilha;
            </li>

            <li>
                A Declaração dos Direitos do Homem e do Cidadão;
            </li>

            <li>
                O período do Terror;
            </li>

            <li>
                A ascensão de Napoleão Bonaparte;
            </li>

            <li>
                As consequências da Revolução Francesa.
            </li>

        </ul>


        <div class="destaque">

            <i class="fa-solid fa-lightbulb"></i>

            <span>
                <strong>Dica de estudo:</strong>
                durante a aula, observe principalmente a relação entre
                a crise do Antigo Regime, as ideias iluministas,
                as desigualdades sociais e as transformações políticas
                provocadas pela Revolução.
            </span>

        </div>

    </section>

</div>

</body>

</html>