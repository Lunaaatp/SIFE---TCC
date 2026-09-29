<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercícios — Equações | SIFE</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background: #f4f7f9;
            font-family: 'Inter', sans-serif;
            color: #071b35;
        }

        /* =========================
           CONTAINER
        ========================= */

        .container-principal {
            max-width: 1200px;
            margin: 0 auto;
            padding: 25px 28px 60px;
        }

        /* =========================
           CABEÇALHO
        ========================= */

        .topo {
            margin-bottom: 25px;
        }

        .voltar {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #758ba3;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 22px;
            transition: 0.2s;
        }

        .voltar:hover {
            color: #d92f3d;
        }

        .titulo-pequeno {
            color: #60758c;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .titulo-principal {
            margin: 0;
            font-size: 34px;
            font-weight: 800;
            color: #071b35;
        }

        .subtitulo {
            margin-top: 8px;
            color: #94a9bf;
            font-size: 15px;
            font-weight: 600;
        }

        /* =========================
           CABEÇALHO DO EXERCÍCIO
        ========================= */

        .exercicio-header {
            background: white;
            border-radius: 24px;
            padding: 25px 30px;
            margin-bottom: 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            box-shadow: 0 8px 25px rgba(15, 42, 70, 0.04);
        }

        .header-info {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .icone-exercicio {
            width: 60px;
            height: 60px;
            border-radius: 17px;
            background: #dce9ff;
            color: #367be8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
        }

        .header-info h2 {
            margin: 0 0 5px;
            font-size: 20px;
            font-weight: 800;
        }

        .header-info p {
            margin: 0;
            color: #91a7bf;
            font-size: 13px;
            font-weight: 600;
        }

        .contador {
            background: #fff3f3;
            color: #d92f3d;
            border-radius: 30px;
            padding: 11px 18px;
            font-size: 13px;
            font-weight: 800;
            white-space: nowrap;
        }

        /* =========================
           QUESTÕES
        ========================= */

        .questoes {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .questao {
            background: white;
            border-radius: 22px;
            padding: 25px 28px;
            box-shadow: 0 8px 25px rgba(15, 42, 70, 0.04);
        }

        .numero-questao {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            width: 34px;
            height: 34px;

            border-radius: 10px;

            background: #f9dfe1;
            color: #d92f3d;

            font-size: 13px;
            font-weight: 800;

            margin-bottom: 13px;
        }

        .pergunta {
            margin: 0 0 18px;
            font-size: 16px;
            font-weight: 700;
            line-height: 1.6;
            color: #071b35;
        }

        .resposta {
            width: 100%;
            max-width: 450px;
            height: 46px;

            border: 1px solid #e3eaf0;
            border-radius: 12px;

            padding: 0 15px;

            outline: none;

            font-family: 'Inter', sans-serif;
            font-size: 14px;
            color: #071b35;

            transition: 0.2s;
        }

        .resposta:focus {
            border-color: #d92f3d;
            box-shadow: 0 0 0 3px rgba(217, 47, 61, 0.08);
        }

        .resposta::placeholder {
            color: #a8b8c8;
        }

        /* =========================
           BOTÃO FINALIZAR
        ========================= */

        .area-finalizar {
            margin-top: 25px;

            background: white;
            border-radius: 22px;

            padding: 25px;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;

            box-shadow: 0 8px 25px rgba(15, 42, 70, 0.04);
        }

        .texto-finalizar h3 {
            margin: 0 0 5px;
            font-size: 17px;
            font-weight: 800;
        }

        .texto-finalizar p {
            margin: 0;
            color: #91a6bb;
            font-size: 13px;
            font-weight: 500;
        }

        .btn-finalizar {
            border: none;

            height: 48px;
            padding: 0 25px;

            border-radius: 12px;

            background: #d92f3d;
            color: white;

            font-family: 'Inter', sans-serif;
            font-size: 13px;
            font-weight: 800;

            cursor: pointer;

            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            transition: 0.2s;
        }

        .btn-finalizar:hover {
            background: #b92331;
            transform: translateY(-1px);
        }

        /* =========================
           RESULTADO
        ========================= */

        #resultado {
            display: none;

            margin-top: 25px;

            background: white;
            border-radius: 22px;

            padding: 35px;

            text-align: center;

            box-shadow: 0 8px 25px rgba(15, 42, 70, 0.04);
        }

        .resultado-icone {
            width: 70px;
            height: 70px;

            margin: 0 auto 15px;

            border-radius: 50%;

            background: #eaf8ef;
            color: #219653;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 30px;
        }

        #resultado h2 {
            margin: 0 0 8px;

            font-size: 24px;
            font-weight: 800;
        }

        #resultado p {
            margin: 0;

            color: #91a6bb;
            font-size: 14px;
            font-weight: 600;
        }

        .nota {
            margin: 20px 0;

            font-size: 35px;
            font-weight: 800;
            color: #d92f3d;
        }

        .btn-tentar {
            border: none;

            height: 45px;
            padding: 0 22px;

            border-radius: 12px;

            background: #f3f6f9;
            color: #627991;

            font-family: 'Inter', sans-serif;
            font-size: 13px;
            font-weight: 800;

            cursor: pointer;

            transition: 0.2s;
        }

        .btn-tentar:hover {
            background: #e8edf2;
            color: #071b35;
        }

        /* =========================
           ACESSIBILIDADE
        ========================= */

        .vlibras {
            position: fixed;
            right: 0;
            top: 46%;

            width: 50px;
            height: 50px;

            border-radius: 12px 0 0 12px;

            background: #277de8;
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 22px;

            box-shadow: 0 5px 15px rgba(0,0,0,0.15);

            z-index: 1000;
        }

        .acessibilidade {
            position: fixed;
            right: 14px;
            bottom: 16px;

            width: 60px;
            height: 60px;

            border-radius: 50%;

            background: #d92f3d;
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 25px;

            border: 4px solid white;

            box-shadow: 0 4px 15px rgba(0,0,0,0.2);

            cursor: pointer;

            z-index: 1000;
        }

        /* =========================
           RESPONSIVIDADE
        ========================= */

        @media (max-width: 700px) {

            .container-principal {
                padding: 20px 15px 50px;
            }

            .titulo-principal {
                font-size: 28px;
            }

            .exercicio-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .area-finalizar {
                flex-direction: column;
                align-items: stretch;
            }

            .btn-finalizar {
                width: 100%;
            }

            .resposta {
                max-width: 100%;
            }

            .questao {
                padding: 20px;
            }

            .resposta.correta {
    border: 2px solid #219653;
    background: #eaf8ef;
    color: #219653;
}

.resposta.errada {
    border: 2px solid #d92f3d;
    background: #fff0f1;
    color: #d92f3d;
}
        }

    </style>

</head>

<body>

<div class="container-principal">

    <!-- =========================
         CABEÇALHO
    ========================= -->

    <div class="topo">

        <a href="{{ route('materiaisMatematica') }}" class="voltar">
            <i class="fa-solid fa-arrow-left"></i>
            Voltar para materiais
        </a>

        <div class="titulo-pequeno">
            ATIVIDADE DE MATEMÁTICA
        </div>

        <h1 class="titulo-principal">
            Lista de Exercícios — Equações
        </h1>

        <p class="subtitulo">
            Resolva as questões abaixo e teste seus conhecimentos.
        </p>

    </div>


    <!-- =========================
         INFORMAÇÕES
    ========================= -->

    <div class="exercicio-header">

        <div class="header-info">

            <div class="icone-exercicio">
                <i class="fa-solid fa-pen-to-square"></i>
            </div>

            <div>

                <h2>
                    Equações do 1º e 2º Grau
                </h2>

                <p>
                    Exercícios de fixação — Matemática
                </p>

            </div>

        </div>

        <div class="contador">
            <i class="fa-solid fa-list-check"></i>
            20 questões
        </div>

    </div>


    <!-- =========================
         QUESTÕES
    ========================= -->

    <div class="questoes">

        <!-- QUESTÃO 1 -->
        <div class="questao">
            <span class="numero-questao">01</span>

            <p class="pergunta">
                Resolva a equação: <strong>x + 8 = 15</strong>
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="7"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 2 -->
        <div class="questao">
            <span class="numero-questao">02</span>

            <p class="pergunta">
                Resolva: <strong>2x = 18</strong>
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="9"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 3 -->
        <div class="questao">
            <span class="numero-questao">03</span>

            <p class="pergunta">
                Determine o valor de x: <strong>3x + 5 = 20</strong>
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="5"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 4 -->
        <div class="questao">
            <span class="numero-questao">04</span>

            <p class="pergunta">
                Resolva: <strong>5x - 10 = 20</strong>
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="6"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 5 -->
        <div class="questao">
            <span class="numero-questao">05</span>

            <p class="pergunta">
                Qual é o valor de x em <strong>4x + 4 = 24</strong>?
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="5"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 6 -->
        <div class="questao">
            <span class="numero-questao">06</span>

            <p class="pergunta">
                Resolva a equação: <strong>7x - 14 = 0</strong>
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="2"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 7 -->
        <div class="questao">
            <span class="numero-questao">07</span>

            <p class="pergunta">
                Determine x: <strong>2x + 6 = 16</strong>
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="5"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 8 -->
        <div class="questao">
            <span class="numero-questao">08</span>

            <p class="pergunta">
                Resolva: <strong>6x - 12 = 24</strong>
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="6"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 9 -->
        <div class="questao">
            <span class="numero-questao">09</span>

            <p class="pergunta">
                Qual é a solução de <strong>x - 9 = 4</strong>?
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="13"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 10 -->
        <div class="questao">
            <span class="numero-questao">10</span>

            <p class="pergunta">
                Resolva: <strong>3x = 27</strong>
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="9"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 11 -->
        <div class="questao">
            <span class="numero-questao">11</span>

            <p class="pergunta">
                Resolva a equação do 2º grau: <strong>x² - 9 = 0</strong>
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="3"
                placeholder="Digite o valor positivo de x..."
            >
        </div>


        <!-- QUESTÃO 12 -->
        <div class="questao">
            <span class="numero-questao">12</span>

            <p class="pergunta">
                Qual é a raiz positiva de <strong>x² - 16 = 0</strong>?
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="4"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 13 -->
        <div class="questao">
            <span class="numero-questao">13</span>

            <p class="pergunta">
                Resolva: <strong>x² - 25 = 0</strong>. Qual é a raiz positiva?
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="5"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 14 -->
        <div class="questao">
            <span class="numero-questao">14</span>

            <p class="pergunta">
                Na equação <strong>x² - 6x + 8 = 0</strong>, qual é a menor raiz?
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="2"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 15 -->
        <div class="questao">
            <span class="numero-questao">15</span>

            <p class="pergunta">
                Na equação <strong>x² - 7x + 12 = 0</strong>, qual é a maior raiz?
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="4"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 16 -->
        <div class="questao">
            <span class="numero-questao">16</span>

            <p class="pergunta">
                Resolva: <strong>x² - 10x + 25 = 0</strong>
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="5"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 17 -->
        <div class="questao">
            <span class="numero-questao">17</span>

            <p class="pergunta">
                Qual é o valor de x em <strong>x² - 4x = 0</strong>, considerando a raiz diferente de zero?
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="4"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 18 -->
        <div class="questao">
            <span class="numero-questao">18</span>

            <p class="pergunta">
                Resolva: <strong>x² + 5x + 6 = 0</strong>. Qual é a menor raiz?
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="-3"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 19 -->
        <div class="questao">
            <span class="numero-questao">19</span>

            <p class="pergunta">
                Na equação <strong>x² - x - 6 = 0</strong>, qual é a maior raiz?
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="3"
                placeholder="Digite sua resposta..."
            >
        </div>


        <!-- QUESTÃO 20 -->
        <div class="questao">
            <span class="numero-questao">20</span>

            <p class="pergunta">
                Resolva: <strong>x² - 3x - 10 = 0</strong>. Qual é a maior raiz?
            </p>

            <input
                type="text"
                class="resposta"
                data-resposta="5"
                placeholder="Digite sua resposta..."
            >
        </div>

    </div>


    <!-- =========================
         FINALIZAR
    ========================= -->

    <div class="area-finalizar">

        <div class="texto-finalizar">

            <h3>
                Terminou todos os exercícios?
            </h3>

            <p>
                Confira quantas questões você acertou.
            </p>

        </div>

        <button
            type="button"
            class="btn-finalizar"
            onclick="finalizarExercicios()">

            <i class="fa-solid fa-check"></i>

            Finalizar exercícios

        </button>

    </div>


    <!-- =========================
         RESULTADO
    ========================= -->

    <div id="resultado">

        <div class="resultado-icone">
            <i class="fa-solid fa-trophy"></i>
        </div>

        <h2>
            Exercícios finalizados!
        </h2>

        <p>
            Veja abaixo o seu resultado.
        </p>

        <div class="nota" id="nota">
            0 / 20
        </div>

        <p id="mensagemResultado"></p>

        <br>

        <button
            type="button"
            class="btn-tentar"
            onclick="tentarNovamente()">

            <i class="fa-solid fa-rotate-right"></i>
            Tentar novamente

        </button>

    </div>

</div>


<!-- =========================
     ACESSIBILIDADE
========================= -->

<div class="vlibras" title="Acessibilidade">
    <i class="fa-solid fa-hands"></i>
</div>

<div class="acessibilidade" title="Opções de acessibilidade">
    <i class="fa-solid fa-universal-access"></i>
</div>


<script>

    function finalizarExercicios() {

    const respostas = document.querySelectorAll('.resposta');

    let acertos = 0;

    respostas.forEach(function(input) {

        const respostaUsuario = input.value
            .trim()
            .replace(',', '.');

        const respostaCorreta = input.dataset.resposta
            .trim()
            .replace(',', '.');

        // Remove classes anteriores
        input.classList.remove('correta', 'errada');

        // Se deixou vazio, não marca como certo ou errado
        if (respostaUsuario === '') {
            return;
        }

        // Resposta correta
        if (respostaUsuario === respostaCorreta) {

            input.classList.add('correta');

            acertos++;

        } else {

            input.classList.add('errada');

        }

    });

    const total = respostas.length;

    document.getElementById('nota').textContent =
        acertos + ' / ' + total;

    let mensagem = '';

    if (acertos === 20) {

        mensagem = 'Excelente! Você acertou todas as questões! 🎉';

    } else if (acertos >= 16) {

        mensagem = 'Muito bem! Você teve um ótimo desempenho! 👏';

    } else if (acertos >= 10) {

        mensagem = 'Bom trabalho! Continue praticando para melhorar ainda mais.';

    } else {

        mensagem = 'Continue estudando e tente novamente. Você consegue! 💪';

    }

    document.getElementById('mensagemResultado').textContent =
        mensagem;

    document.getElementById('resultado').style.display = 'block';

    window.scrollTo({
        top: document.body.scrollHeight,
        behavior: 'smooth'
    });
}


    function tentarNovamente() {

    const respostas = document.querySelectorAll('.resposta');

    respostas.forEach(function(input) {

        input.value = '';

        input.classList.remove('correta', 'errada');

    });

    document.getElementById('resultado').style.display = 'none';

    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

</script>

</body>

</html>