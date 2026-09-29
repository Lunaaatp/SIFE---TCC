<!DOCTYPE html>
<html lang="pt-BR">
<head>

    ...

    <style>

        /* TODO O CSS DA SUA VIDEOAULA AQUI */

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
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff3f3;
            color: #d92f3d;
            border-radius: 12px;
            font-size: 18px;
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

    </style>

</head>
<section class="secao-video">

    <div class="video-header">

        <div class="video-icone">
            <i class="fa-solid fa-play"></i>
        </div>

        <div>
            <div class="video-label">
                VIDEOAULA DE MATEMÁTICA
            </div>

            <h2>
                Função do 2º Grau
            </h2>

            <p>
                Aprenda sobre a função quadrática e como interpretar
                seu gráfico de forma simples.
            </p>
        </div>

    </div>

    <div class="video-container">

        <iframe
            src="https://www.youtube.com/embed/wgpmGZSj_R4"
            title="Videoaula - Função do 2º Grau"
            allowfullscreen>
        </iframe>

    </div>

    <div class="video-info">

        <i class="fa-solid fa-circle-info"></i>

        <span>
            Assista à videoaula e depois revise os conteúdos
            apresentados no material de Matemática.
        </span>

    </div>

</section>