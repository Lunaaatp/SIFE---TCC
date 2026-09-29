<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Videoaula — Reações Químicas | SIFE</title>

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

        /* VIDEO */

        .secao-video {
            background: white;

            border-radius: 18px;

            padding: 28px;

            margin-bottom: 20px;

            border: 1px solid #edf2f7;

            box-shadow:
                0 5px 18px rgba(0, 0, 0, 0.035);
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

            box-shadow:
                0 5px 18px rgba(0, 0, 0, 0.035);
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
            margin-bottom: 6px;
        }

        /* CARDS */

        .cards {
            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 12px;

            margin-top: 18px;
        }

        .card-conteudo {
            padding: 16px;

            background: #f8fafb;

            border: 1px solid #edf2f7;

            border-radius: 12px;
        }

        .card-conteudo h4 {
            margin: 0 0 7px;

            color: #071b35;

            font-size: 14px;

            font-weight: 800;
        }

        .card-conteudo h4 i {
            color: #d92f3d;

            margin-right: 6px;
        }

        .card-conteudo p {
            color: #627991;

            font-size: 12px;

            line-height: 1.6;
        }

        /* DICA */

        .dica {
            display: flex;

            align-items: flex-start;

            gap: 12px;

            margin-top: 20px;

            padding: 15px 17px;

            background: #fff7f7;

            border-left: 4px solid #d92f3d;

            border-radius: 10px;

            color: #627991;

            font-size: 12px;

            line-height: 1.7;
        }

        .dica i {
            color: #d92f3d;

            margin-top: 3px;
        }

        .dica strong {
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

            .cards {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>

<div class="container-principal">


    <!-- TOPO -->

    <div class="topo">

        <a
            href="{{ route('materiais.quimica') }}"
            class="voltar"
        >

            <i class="fa-solid fa-arrow-left"></i>

            Voltar para materiais

        </a>


        <div class="titulo-pequeno">

            VIDEOAULA DE QUÍMICA

        </div>


        <h1 class="titulo-principal">

            Reações Químicas

        </h1>


        <p class="subtitulo">

            Aula sobre os principais tipos de reações químicas
            e como identificá-las.

        </p>

    </div>


    <!-- VIDEO -->

    <section class="secao-video">


        <div class="video-header">

            <div class="video-icone">

                <i class="fa-solid fa-play"></i>

            </div>


            <div>

                <div class="video-label">

                    VIDEOAULA DE QUÍMICA

                </div>


                <h2>

                    Principais Reações Químicas

                </h2>


                <p>

                    Aprenda a reconhecer os principais tipos
                    de reações químicas.

                </p>

            </div>

        </div>


        <div class="video-container">

            <iframe
                src="https://www.youtube.com/embed/9iR8KzM9x0I"
                title="Videoaula - Reações Químicas"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>

        </div>


        <div class="video-info">

            <i class="fa-solid fa-circle-info"></i>

            <span>

                Assista à videoaula com atenção e depois
                revise os exemplos apresentados no material
                de Química.

            </span>

        </div>


    </section>


    <!-- CONTEÚDO -->

    <section class="conteudo">


        <h3>

            O que você vai aprender?

        </h3>


        <p>

            Nesta aula, você poderá revisar os conceitos básicos
            das reações químicas e aprender a diferenciar os
            principais tipos de transformação química.

        </p>


        <div class="cards">


            <div class="card-conteudo">

                <h4>

                    <i class="fa-solid fa-arrows-rotate"></i>

                    O que é uma reação?

                </h4>

                <p>

                    Entenda como substâncias reagentes podem ser
                    transformadas em novas substâncias, chamadas produtos.

                </p>

            </div>


            <div class="card-conteudo">

                <h4>

                    <i class="fa-solid fa-plus"></i>

                    Síntese

                </h4>

                <p>

                    Reação em que duas ou mais substâncias
                    formam um único produto.

                </p>

            </div>


            <div class="card-conteudo">

                <h4>

                    <i class="fa-solid fa-scissors"></i>

                    Decomposição

                </h4>

                <p>

                    Uma substância se transforma em duas ou mais
                    substâncias mais simples.

                </p>

            </div>


            <div class="card-conteudo">

                <h4>

                    <i class="fa-solid fa-right-left"></i>

                    Simples troca

                </h4>

                <p>

                    Um elemento desloca outro elemento presente
                    em uma substância.

                </p>

            </div>


            <div class="card-conteudo">

                <h4>

                    <i class="fa-solid fa-shuffle"></i>

                    Dupla troca

                </h4>

                <p>

                    Ocorre uma troca de íons entre duas substâncias,
                    formando novos compostos.

                </p>

            </div>


            <div class="card-conteudo">

                <h4>

                    <i class="fa-solid fa-fire"></i>

                    Combustão

                </h4>

                <p>

                    Reação que normalmente envolve uma substância
                    combustível e oxigênio, liberando energia.

                </p>

            </div>


        </div>


        <div class="dica">

            <i class="fa-solid fa-lightbulb"></i>

            <div>

                <strong>Dica de estudo:</strong>

                depois de assistir à videoaula, tente identificar
                os reagentes e produtos em cada reação e observe
                como as substâncias foram transformadas.

            </div>

        </div>


        <ul class="lista-conteudo">

            <li>

                Identifique os <strong>reagentes</strong> no lado esquerdo
                de uma equação química.

            </li>

            <li>

                Identifique os <strong>produtos</strong> no lado direito
                da equação.

            </li>

            <li>

                Observe os coeficientes utilizados para representar
                as quantidades relativas das substâncias.

            </li>

            <li>

                Lembre-se de que, em uma reação química, os átomos
                são reorganizados.

            </li>

        </ul>


    </section>


</div>

</body>

</html>