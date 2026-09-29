<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista — Movimento Uniforme | SIFE</title>

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

        .botoes-acoes {
            display: flex;
            gap: 10px;
            align-items: center;
            margin-bottom: 25px;
        }

        .btn-voltar,
        .btn-baixar {
            height: 45px;
            padding: 0 20px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
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

        /* CARD INFORMAÇÃO */

        .info {
            background: #fff3f3;
            border: 1px solid #f7d9dc;
            border-radius: 15px;
            padding: 18px 20px;
            margin-bottom: 20px;
            color: #627991;
            font-size: 13px;
            line-height: 1.7;
        }

        .info i {
            color: #d92f3d;
            margin-right: 7px;
        }

        /* QUESTÕES */

        .questao {
            background: white;
            border-radius: 18px;
            padding: 25px;
            margin-bottom: 16px;
            border: 1px solid #edf2f7;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
        }

        .numero {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            border-radius: 10px;
            background: #fff3f3;
            color: #d92f3d;
            font-size: 13px;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .pergunta {
            color: #071b35;
            font-size: 15px;
            font-weight: 700;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .formula {
            background: #f8fafc;
            border: 1px solid #edf2f7;
            border-radius: 10px;
            padding: 12px 15px;
            margin: 12px 0;
            color: #071b35;
            text-align: center;
            font-size: 14px;
            font-weight: 700;
        }

        /* ALTERNATIVAS */

        .alternativas {
            display: grid;
            gap: 8px;
            margin-top: 12px;
        }

        .alternativa {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 14px;
            background: #f8fafc;
            border: 1px solid #edf2f7;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.2s;
            color: #627991;
            font-size: 13px;
        }

        .alternativa:hover {
            background: #f3f6f9;
            border-color: #d8e0e8;
        }

        .alternativa input {
            accent-color: #d92f3d;
        }

        /* CAMPOS */

        .resposta {
            width: 100%;
            min-height: 85px;
            resize: vertical;
            border: 1px solid #dfe6ec;
            border-radius: 11px;
            padding: 13px 15px;
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            color: #2d3436;
            outline: none;
            transition: 0.2s;
        }

        .resposta:focus {
            border-color: #d92f3d;
            box-shadow: 0 0 0 3px rgba(217, 47, 61, 0.08);
        }

        /* FEEDBACK */

        .feedback {
            display: none;
            margin-top: 12px;
            padding: 12px 14px;
            border-radius: 10px;
            font-size: 12px;
            line-height: 1.6;
        }

        .feedback.correto {
            display: block;
            background: #edf9f1;
            color: #247a43;
            border: 1px solid #cdebd7;
        }

        .feedback.errado {
            display: block;
            background: #fff0f0;
            color: #b42332;
            border: 1px solid #f3c9ce;
        }

        /* BOTÃO FINALIZAR */

        .area-finalizar {
            background: white;
            border-radius: 18px;
            padding: 25px;
            margin-top: 20px;
            border: 1px solid #edf2f7;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
            text-align: center;
        }

        .btn-finalizar {
            border: none;
            height: 48px;
            padding: 0 28px;
            border-radius: 12px;
            background: #d92f3d;
            color: white;
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            font-weight: 800;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn-finalizar:hover {
            background: #b71c1c;
            transform: translateY(-1px);
        }

        .btn-tentar {
            display: none;
            margin-left: 8px;
            border: none;
            height: 48px;
            padding: 0 25px;
            border-radius: 12px;
            background: #f3f6f9;
            color: #627991;
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            font-weight: 800;
            cursor: pointer;
        }

        .btn-tentar:hover {
            background: #e8edf2;
            color: #071b35;
        }

        /* RESULTADO */

        #resultado {
            display: none;
            margin-top: 20px;
            padding: 20px;
            border-radius: 14px;
            background: #f8fafc;
            border: 1px solid #edf2f7;
        }

        .nota {
            color: #071b35;
            font-size: 26px;
            font-weight: 800;
            margin-bottom: 6px;
        }

        .mensagem {
            color: #627991;
            font-size: 13px;
        }

        /* RESPONSIVO */

        @media (max-width: 700px) {

            .container-principal {
                padding: 25px 15px 45px;
            }

            .titulo-principal {
                font-size: 25px;
            }

            .botoes-acoes {
                flex-direction: column;
                align-items: stretch;
            }

            .btn-voltar,
            .btn-baixar {
                width: 100%;
            }

            .questao {
                padding: 20px;
            }

            .btn-tentar {
                margin-left: 0;
                margin-top: 8px;
            }

        }

    </style>

</head>

<body>

<div class="container-principal">

    <!-- TOPO -->

    <div class="topo">

        <div class="botoes-acoes">

            <a href="{{ route('materiais.fisica') }}" class="btn-voltar">
                <i class="fa-solid fa-arrow-left"></i>
                Voltar para materiais
            </a>

            <a href="{{ route('listaFisicaPdf') }}" class="btn-baixar">
                <i class="fa-solid fa-download"></i>
                Baixar
            </a>

        </div>

        <div class="titulo-pequeno">
            ATIVIDADE DE FÍSICA
        </div>

        <h1 class="titulo-principal">
            Lista — Movimento Uniforme
        </h1>

        <p class="subtitulo">
            Resolva as questões abaixo e teste seus conhecimentos sobre
            Movimento Uniforme.
        </p>

    </div>


    <!-- INFORMAÇÃO -->

    <div class="info">

        <i class="fa-solid fa-circle-info"></i>

        <strong>Dica:</strong>
        no Movimento Uniforme, a velocidade permanece constante.
        A principal fórmula utilizada é:

        <div class="formula">
            S = S<sub>0</sub> + V · t
        </div>

    </div>


    <!-- QUESTÃO 1 -->

    <div class="questao">

        <div class="numero">01</div>

        <div class="pergunta">
            Um carro percorre uma estrada com velocidade constante de
            20 m/s durante 10 segundos. Qual distância ele percorre?
        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q1" value="A">
                A) 100 m
            </label>

            <label class="alternativa">
                <input type="radio" name="q1" value="B">
                B) 150 m
            </label>

            <label class="alternativa">
                <input type="radio" name="q1" value="C">
                C) 200 m
            </label>

            <label class="alternativa">
                <input type="radio" name="q1" value="D">
                D) 250 m
            </label>

        </div>

        <div class="feedback" id="feedback1"></div>

    </div>


    <!-- QUESTÃO 2 -->

    <div class="questao">

        <div class="numero">02</div>

        <div class="pergunta">
            Um ciclista percorre 300 metros em 20 segundos, mantendo
            velocidade constante. Qual é sua velocidade?
        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q2" value="A">
                A) 10 m/s
            </label>

            <label class="alternativa">
                <input type="radio" name="q2" value="B">
                B) 15 m/s
            </label>

            <label class="alternativa">
                <input type="radio" name="q2" value="C">
                C) 20 m/s
            </label>

            <label class="alternativa">
                <input type="radio" name="q2" value="D">
                D) 25 m/s
            </label>

        </div>

        <div class="feedback" id="feedback2"></div>

    </div>


    <!-- QUESTÃO 3 -->

    <div class="questao">

        <div class="numero">03</div>

        <div class="pergunta">
            Um ônibus se desloca com velocidade constante de 15 m/s.
            Qual distância ele percorrerá em 8 segundos?
        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q3" value="A">
                A) 80 m
            </label>

            <label class="alternativa">
                <input type="radio" name="q3" value="B">
                B) 100 m
            </label>

            <label class="alternativa">
                <input type="radio" name="q3" value="C">
                C) 120 m
            </label>

            <label class="alternativa">
                <input type="radio" name="q3" value="D">
                D) 150 m
            </label>

        </div>

        <div class="feedback" id="feedback3"></div>

    </div>


    <!-- QUESTÃO 4 -->

    <div class="questao">

        <div class="numero">04</div>

        <div class="pergunta">
            Um móvel parte da posição 10 m e se movimenta com velocidade
            constante de 5 m/s. Qual será sua posição após 6 segundos?
        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q4" value="A">
                A) 30 m
            </label>

            <label class="alternativa">
                <input type="radio" name="q4" value="B">
                B) 35 m
            </label>

            <label class="alternativa">
                <input type="radio" name="q4" value="C">
                C) 40 m
            </label>

            <label class="alternativa">
                <input type="radio" name="q4" value="D">
                D) 45 m
            </label>

        </div>

        <div class="feedback" id="feedback4"></div>

    </div>


    <!-- QUESTÃO 5 -->

    <div class="questao">

        <div class="numero">05</div>

        <div class="pergunta">
            Qual das situações abaixo representa um Movimento Uniforme?
        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q5" value="A">
                A) Um carro aumentando sua velocidade.
            </label>

            <label class="alternativa">
                <input type="radio" name="q5" value="B">
                B) Uma bicicleta freando.
            </label>

            <label class="alternativa">
                <input type="radio" name="q5" value="C">
                C) Um carro mantendo velocidade constante em uma estrada reta.
            </label>

            <label class="alternativa">
                <input type="radio" name="q5" value="D">
                D) Uma bola caindo sob ação da gravidade.
            </label>

        </div>

        <div class="feedback" id="feedback5"></div>

    </div>


    <!-- QUESTÃO 6 -->

    <div class="questao">

        <div class="numero">06</div>

        <div class="pergunta">
            Um trem percorre 900 metros em 30 segundos com velocidade
            constante. Qual é sua velocidade em m/s?
        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q6" value="A">
                A) 20 m/s
            </label>

            <label class="alternativa">
                <input type="radio" name="q6" value="B">
                B) 25 m/s
            </label>

            <label class="alternativa">
                <input type="radio" name="q6" value="C">
                C) 30 m/s
            </label>

            <label class="alternativa">
                <input type="radio" name="q6" value="D">
                D) 35 m/s
            </label>

        </div>

        <div class="feedback" id="feedback6"></div>

    </div>


    <!-- QUESTÃO 7 -->

    <div class="questao">

        <div class="numero">07</div>

        <div class="pergunta">
            Um carro possui velocidade constante de 72 km/h.
            Qual é essa velocidade em m/s?
        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q7" value="A">
                A) 10 m/s
            </label>

            <label class="alternativa">
                <input type="radio" name="q7" value="B">
                B) 15 m/s
            </label>

            <label class="alternativa">
                <input type="radio" name="q7" value="C">
                C) 20 m/s
            </label>

            <label class="alternativa">
                <input type="radio" name="q7" value="D">
                D) 25 m/s
            </label>

        </div>

        <div class="feedback" id="feedback7"></div>

    </div>


    <!-- QUESTÃO 8 -->

    <div class="questao">

        <div class="numero">08</div>

        <div class="pergunta">
            Um móvel possui posição inicial de 50 m e velocidade constante
            de 10 m/s. Qual será sua posição após 5 segundos?
        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q8" value="A">
                A) 80 m
            </label>

            <label class="alternativa">
                <input type="radio" name="q8" value="B">
                B) 90 m
            </label>

            <label class="alternativa">
                <input type="radio" name="q8" value="C">
                C) 100 m
            </label>

            <label class="alternativa">
                <input type="radio" name="q8" value="D">
                D) 110 m
            </label>

        </div>

        <div class="feedback" id="feedback8"></div>

    </div>


    <!-- QUESTÃO 9 -->

    <div class="questao">

        <div class="numero">09</div>

        <div class="pergunta">
            Um corredor mantém uma velocidade constante de 8 m/s.
            Quanto tempo ele levará para percorrer 160 metros?
        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q9" value="A">
                A) 10 s
            </label>

            <label class="alternativa">
                <input type="radio" name="q9" value="B">
                B) 15 s
            </label>

            <label class="alternativa">
                <input type="radio" name="q9" value="C">
                C) 20 s
            </label>

            <label class="alternativa">
                <input type="radio" name="q9" value="D">
                D) 25 s
            </label>

        </div>

        <div class="feedback" id="feedback9"></div>

    </div>


    <!-- QUESTÃO 10 -->

    <div class="questao">

        <div class="numero">10</div>

        <div class="pergunta">
            Um veículo percorre uma distância de 600 metros em 30 segundos.
            Considerando que o movimento é uniforme, determine sua velocidade.
        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q10" value="A">
                A) 15 m/s
            </label>

            <label class="alternativa">
                <input type="radio" name="q10" value="B">
                B) 20 m/s
            </label>

            <label class="alternativa">
                <input type="radio" name="q10" value="C">
                C) 25 m/s
            </label>

            <label class="alternativa">
                <input type="radio" name="q10" value="D">
                D) 30 m/s
            </label>

        </div>

        <div class="feedback" id="feedback10"></div>

    </div>


    <!-- FINALIZAR -->

    <div class="area-finalizar">

        <button class="btn-finalizar" onclick="corrigirAtividade()">
            <i class="fa-solid fa-check"></i>
            Finalizar atividade
        </button>

        <button class="btn-tentar" id="btnTentar" onclick="tentarNovamente()">
            <i class="fa-solid fa-rotate-right"></i>
            Tentar novamente
        </button>

        <div id="resultado">

            <div class="nota" id="nota"></div>

            <div class="mensagem" id="mensagem"></div>

        </div>

    </div>

</div>


<script>

function corrigirAtividade() {

    const respostasCorretas = {
        q1: 'C',
        q2: 'B',
        q3: 'C',
        q4: 'B',
        q5: 'C',
        q6: 'C',
        q7: 'C',
        q8: 'C',
        q9: 'C',
        q10: 'B'
    };

    let acertos = 0;
    let respondidas = 0;

    for (let i = 1; i <= 10; i++) {

        const selecionada = document.querySelector(
            `input[name="q${i}"]:checked`
        );

        const feedback = document.getElementById(`feedback${i}`);

        if (selecionada) {

            respondidas++;

            if (selecionada.value === respostasCorretas[`q${i}`]) {

                acertos++;

                feedback.className = 'feedback correto';

                feedback.innerHTML =
                    '<i class="fa-solid fa-circle-check"></i> ' +
                    '<strong>Resposta correta!</strong> Muito bem!';

            } else {

                feedback.className = 'feedback errado';

                feedback.innerHTML =
                    '<i class="fa-solid fa-circle-xmark"></i> ' +
                    '<strong>Resposta incorreta.</strong> ' +
                    'Revise o conteúdo de Movimento Uniforme.';

            }

        } else {

            feedback.className = 'feedback errado';

            feedback.innerHTML =
                '<i class="fa-solid fa-circle-exclamation"></i> ' +
                '<strong>Questão não respondida.</strong>';

        }

    }

    const notaFinal = acertos;

    document.getElementById('resultado').style.display = 'block';

    document.getElementById('nota').innerHTML =
        `Nota: ${notaFinal.toFixed(1)} / 10`;

    let mensagem = '';

    if (notaFinal >= 9) {

        mensagem = 'Excelente! Você domina muito bem o conteúdo de Movimento Uniforme.';

    } else if (notaFinal >= 7) {

        mensagem = 'Muito bom! Você apresentou um bom domínio do conteúdo.';

    } else if (notaFinal >= 5) {

        mensagem = 'Bom trabalho! Revise algumas questões para melhorar seu resultado.';

    } else {

        mensagem = 'Continue estudando! Revise as fórmulas e os conceitos de Movimento Uniforme.';

    }

    document.getElementById('mensagem').textContent = mensagem;

    document.getElementById('btnTentar').style.display = 'inline-block';

    document.querySelector('.area-finalizar').scrollIntoView({
        behavior: 'smooth'
    });

}


function tentarNovamente() {

    document.querySelectorAll('input[type="radio"]').forEach(input => {
        input.checked = false;
    });

    document.querySelectorAll('.feedback').forEach(feedback => {
        feedback.className = 'feedback';
        feedback.innerHTML = '';
    });

    document.getElementById('resultado').style.display = 'none';

    document.getElementById('btnTentar').style.display = 'none';

    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });

}

</script>

</body>

</html>