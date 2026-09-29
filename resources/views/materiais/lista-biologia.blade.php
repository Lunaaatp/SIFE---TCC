<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de Exercícios — Genética | SIFE</title>

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

        .botoes-topo {
            display: flex;
            align-items: center;
            gap: 10px;
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

            background: #fff7f7;

            border-left: 4px solid #d92f3d;

            border-radius: 12px;

            padding: 16px 18px;

            margin-bottom: 20px;

            color: #627991;

            font-size: 13px;

            line-height: 1.6;
        }

        .aviso i {
            color: #d92f3d;
            margin-top: 3px;
        }

        .aviso strong {
            color: #071b35;
        }

        /* QUESTÕES */

        .questao {
            background: white;

            border: 1px solid #edf2f7;

            border-radius: 16px;

            padding: 22px;

            margin-bottom: 15px;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);

            transition: 0.2s;
        }

        .numero-questao {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            width: 34px;
            height: 34px;

            margin-bottom: 12px;

            border-radius: 10px;

            background: #fff3f3;
            color: #d92f3d;

            font-size: 13px;
            font-weight: 800;
        }

        .pergunta {
            margin: 0 0 16px;

            color: #071b35;

            font-size: 15px;

            font-weight: 700;

            line-height: 1.6;
        }

        .alternativa {
            display: flex;
            align-items: center;

            gap: 10px;

            width: 100%;

            padding: 12px 14px;

            margin-bottom: 8px;

            border: 1px solid #edf2f7;

            border-radius: 10px;

            background: #fafbfc;

            cursor: pointer;

            color: #627991;

            font-size: 13px;

            transition: 0.2s;
        }

        .alternativa:hover {
            background: #fff7f7;
            border-color: #f0c9cd;
        }

        .alternativa input {
            accent-color: #d92f3d;

            width: 16px;
            height: 16px;

            flex-shrink: 0;
        }

        .alternativa.correta {
            background: #eefaf2;
            border-color: #8ed1a5;
            color: #23743d;
        }

        .alternativa.errada {
            background: #fff0f0;
            border-color: #e8a1a1;
            color: #b4232f;
        }

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

            background: #eefaf2;
            color: #23743d;
        }

        .feedback.errado {
            display: block;

            background: #fff0f0;
            color: #b4232f;
        }

        /* RESULTADO */

        .resultado {
            display: none;

            background: white;

            border: 1px solid #edf2f7;

            border-radius: 18px;

            padding: 28px;

            margin-top: 20px;

            text-align: center;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
        }

        .resultado-icone {
            width: 60px;
            height: 60px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto 15px;

            border-radius: 16px;

            background: #fff3f3;
            color: #d92f3d;

            font-size: 25px;
        }

        .resultado h2 {
            margin: 0 0 8px;

            color: #071b35;

            font-size: 24px;

            font-weight: 800;
        }

        .nota {
            color: #d92f3d;

            font-size: 34px;

            font-weight: 800;

            margin: 5px 0 10px;
        }

        .mensagem {
            color: #627991;

            font-size: 13px;

            line-height: 1.6;

            margin-bottom: 20px;
        }

        /* BOTÕES */

        .acoes {
            display: flex;

            justify-content: center;

            gap: 10px;

            flex-wrap: wrap;
        }

        .btn-finalizar,
        .btn-tentar {

            height: 45px;

            padding: 0 22px;

            border: none;

            border-radius: 12px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            font-size: 13px;

            font-weight: 800;

            cursor: pointer;

            transition: 0.2s;
        }

        .btn-finalizar {
            background: #d92f3d;
            color: white;
        }

        .btn-finalizar:hover {
            background: #b71c1c;
        }

        .btn-tentar {
            background: #f3f6f9;
            color: #627991;
        }

        .btn-tentar:hover {
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

            .questao,
            .resultado {
                padding: 20px;
            }

            .botoes-topo {
                flex-wrap: wrap;
            }

        }

    </style>

</head>

<body>

<div class="container-principal">


    <!-- TOPO -->

    <div class="topo">

        <div class="botoes-topo">

            <a href="{{ route('materiais.biologia') }}" class="voltar">

                <i class="fa-solid fa-arrow-left"></i>

                Voltar para materiais

            </a>

            <a href="{{ route('listaBiologiaPdf') }}" class="btn-baixar">

                <i class="fa-solid fa-download"></i>

                Baixar

            </a>

        </div>

        <div class="titulo-pequeno">

            ATIVIDADE DE BIOLOGIA

        </div>

        <h1 class="titulo-principal">

            Lista de Exercícios — Genética

        </h1>

        <p class="subtitulo">

            Exercícios para revisar os principais conceitos de genética
            e hereditariedade.

        </p>

    </div>


    <!-- AVISO -->

    <div class="aviso">

        <i class="fa-solid fa-circle-info"></i>

        <div>

            <strong>Como fazer:</strong>

            leia cada questão com atenção e escolha apenas uma alternativa.
            Ao terminar, clique em <strong>Finalizar atividade</strong>
            para conferir sua nota e o feedback.

        </div>

    </div>


    <!-- QUESTÃO 1 -->

    <div class="questao" data-questao="q1">

        <div class="numero-questao">01</div>

        <p class="pergunta">

            1. O que é genética?

        </p>

        <label class="alternativa">

            <input type="radio" name="q1" value="A">

            A) Ciência que estuda apenas as células nervosas.

        </label>

        <label class="alternativa">

            <input type="radio" name="q1" value="B">

            B) Ciência que estuda a hereditariedade e a variação dos seres vivos.

        </label>

        <label class="alternativa">

            <input type="radio" name="q1" value="C">

            C) Ciência que estuda somente os órgãos humanos.

        </label>

        <label class="alternativa">

            <input type="radio" name="q1" value="D">

            D) Ciência que estuda exclusivamente os ecossistemas.

        </label>

        <div class="feedback"></div>

    </div>


    <!-- QUESTÃO 2 -->

    <div class="questao" data-questao="q2">

        <div class="numero-questao">02</div>

        <p class="pergunta">

            2. Qual molécula armazena a maior parte das informações genéticas
            dos seres vivos?

        </p>

        <label class="alternativa">

            <input type="radio" name="q2" value="A">

            A) DNA

        </label>

        <label class="alternativa">

            <input type="radio" name="q2" value="B">

            B) Glicose

        </label>

        <label class="alternativa">

            <input type="radio" name="q2" value="C">

            C) Lipídio

        </label>

        <label class="alternativa">

            <input type="radio" name="q2" value="D">

            D) Água

        </label>

        <div class="feedback"></div>

    </div>


    <!-- QUESTÃO 3 -->

    <div class="questao" data-questao="q3">

        <div class="numero-questao">03</div>

        <p class="pergunta">

            3. O que é um gene?

        </p>

        <label class="alternativa">

            <input type="radio" name="q3" value="A">

            A) Um tipo de organela celular.

        </label>

        <label class="alternativa">

            <input type="radio" name="q3" value="B">

            B) Um segmento de DNA que contém informação genética.

        </label>

        <label class="alternativa">

            <input type="radio" name="q3" value="C">

            C) Uma proteína responsável pela respiração.

        </label>

        <label class="alternativa">

            <input type="radio" name="q3" value="D">

            D) Um tipo de tecido.

        </label>

        <div class="feedback"></div>

    </div>


    <!-- QUESTÃO 4 -->

    <div class="questao" data-questao="q4">

        <div class="numero-questao">04</div>

        <p class="pergunta">

            4. Qual alternativa apresenta corretamente os conceitos
            de genótipo e fenótipo?

        </p>

        <label class="alternativa">

            <input type="radio" name="q4" value="A">

            A) Genótipo é o conjunto de características observáveis.

        </label>

        <label class="alternativa">

            <input type="radio" name="q4" value="B">

            B) Fenótipo é o conjunto de genes de um indivíduo.

        </label>

        <label class="alternativa">

            <input type="radio" name="q4" value="C">

            C) Genótipo corresponde à constituição genética, enquanto fenótipo
            corresponde às características observáveis.

        </label>

        <label class="alternativa">

            <input type="radio" name="q4" value="D">

            D) Genótipo e fenótipo são exatamente a mesma coisa.

        </label>

        <div class="feedback"></div>

    </div>


    <!-- QUESTÃO 5 -->

    <div class="questao" data-questao="q5">

        <div class="numero-questao">05</div>

        <p class="pergunta">

            5. Segundo a Primeira Lei de Mendel, os pares de fatores
            hereditários se:

        </p>

        <label class="alternativa">

            <input type="radio" name="q5" value="A">

            A) Misturam permanentemente durante a formação dos gametas.

        </label>

        <label class="alternativa">

            <input type="radio" name="q5" value="B">

            B) Separam-se durante a formação dos gametas.

        </label>

        <label class="alternativa">

            <input type="radio" name="q5" value="C">

            C) Transformam-se em proteínas.

        </label>

        <label class="alternativa">

            <input type="radio" name="q5" value="D">

            D) Desaparecem durante a reprodução.

        </label>

        <div class="feedback"></div>

    </div>


    <!-- QUESTÃO 6 -->

    <div class="questao" data-questao="q6">

        <div class="numero-questao">06</div>

        <p class="pergunta">

            6. Um indivíduo que possui dois alelos iguais para determinada
            característica é chamado de:

        </p>

        <label class="alternativa">

            <input type="radio" name="q6" value="A">

            A) Heterozigoto.

        </label>

        <label class="alternativa">

            <input type="radio" name="q6" value="B">

            B) Homozigoto.

        </label>

        <label class="alternativa">

            <input type="radio" name="q6" value="C">

            C) Recessivo obrigatório.

        </label>

        <label class="alternativa">

            <input type="radio" name="q6" value="D">

            D) Mutante.

        </label>

        <div class="feedback"></div>

    </div>


    <!-- QUESTÃO 7 -->

    <div class="questao" data-questao="q7">

        <div class="numero-questao">07</div>

        <p class="pergunta">

            7. Em genética, um alelo dominante é aquele que:

        </p>

        <label class="alternativa">

            <input type="radio" name="q7" value="A">

            A) Só aparece quando está em dose dupla.

        </label>

        <label class="alternativa">

            <input type="radio" name="q7" value="B">

            B) Pode se manifestar no fenótipo mesmo quando está acompanhado
            por um alelo recessivo.

        </label>

        <label class="alternativa">

            <input type="radio" name="q7" value="C">

            C) Nunca é transmitido aos descendentes.

        </label>

        <label class="alternativa">

            <input type="radio" name="q7" value="D">

            D) Não possui relação com os genes.

        </label>

        <div class="feedback"></div>

    </div>


    <!-- QUESTÃO 8 -->

    <div class="questao" data-questao="q8">

        <div class="numero-questao">08</div>

        <p class="pergunta">

            8. Qual é a principal função da meiose na reprodução sexuada?

        </p>

        <label class="alternativa">

            <input type="radio" name="q8" value="A">

            A) Produzir células com o dobro de cromossomos.

        </label>

        <label class="alternativa">

            <input type="radio" name="q8" value="B">

            B) Produzir gametas com metade do número de cromossomos.

        </label>

        <label class="alternativa">

            <input type="radio" name="q8" value="C">

            C) Produzir apenas células musculares.

        </label>

        <label class="alternativa">

            <input type="radio" name="q8" value="D">

            D) Impedir a formação de células reprodutivas.

        </label>

        <div class="feedback"></div>

    </div>


    <!-- QUESTÃO 9 -->

    <div class="questao" data-questao="q9">

        <div class="numero-questao">09</div>

        <p class="pergunta">

            9. Qual processo utiliza a informação do DNA para produzir
            uma molécula de RNA?

        </p>

        <label class="alternativa">

            <input type="radio" name="q9" value="A">

            A) Tradução.

        </label>

        <label class="alternativa">

            <input type="radio" name="q9" value="B">

            B) Transcrição.

        </label>

        <label class="alternativa">

            <input type="radio" name="q9" value="C">

            C) Mitose.

        </label>

        <label class="alternativa">

            <input type="radio" name="q9" value="D">

            D) Respiração celular.

        </label>

        <div class="feedback"></div>

    </div>


    <!-- QUESTÃO 10 -->

    <div class="questao" data-questao="q10">

        <div class="numero-questao">10</div>

        <p class="pergunta">

            10. O que é uma mutação?

        </p>

        <label class="alternativa">

            <input type="radio" name="q10" value="A">

            A) Uma alteração no material genético.

        </label>

        <label class="alternativa">

            <input type="radio" name="q10" value="B">

            B) Um processo que elimina todos os genes.

        </label>

        <label class="alternativa">

            <input type="radio" name="q10" value="C">

            C) Uma organela responsável pela produção de energia.

        </label>

        <label class="alternativa">

            <input type="radio" name="q10" value="D">

            D) Uma divisão celular que sempre produz gametas.

        </label>

        <div class="feedback"></div>

    </div>


    <!-- FINALIZAR -->

    <div class="acoes">

        <button
            type="button"
            class="btn-finalizar"
            onclick="corrigirAtividade()"
        >

            <i class="fa-solid fa-check"></i>

            Finalizar atividade

        </button>

    </div>


    <!-- RESULTADO -->

    <div class="resultado" id="resultado">

        <div class="resultado-icone">

            <i class="fa-solid fa-dna"></i>

        </div>

        <h2>

            Resultado da atividade

        </h2>

        <div class="nota" id="nota">

            0,0

        </div>

        <div class="mensagem" id="mensagem">

        </div>

        <div class="acoes">

            <button
                type="button"
                class="btn-tentar"
                onclick="tentarNovamente()"
            >

                <i class="fa-solid fa-rotate-right"></i>

                Tentar novamente

            </button>

        </div>

    </div>


</div>


<script>

    const respostasCorretas = {

        q1: "B",
        q2: "A",
        q3: "B",
        q4: "C",
        q5: "B",
        q6: "B",
        q7: "B",
        q8: "B",
        q9: "B",
        q10: "A"

    };


    const explicacoes = {

        q1:
            "Genética é a área da Biologia que estuda a hereditariedade e a variação dos seres vivos.",

        q2:
            "O DNA é a molécula responsável pelo armazenamento da maior parte das informações genéticas.",

        q3:
            "Um gene é um segmento de DNA que contém informações relacionadas a características e funções biológicas.",

        q4:
            "Genótipo corresponde à constituição genética do indivíduo, enquanto fenótipo corresponde às características observáveis.",

        q5:
            "A Primeira Lei de Mendel afirma que os fatores hereditários, hoje associados aos alelos, separam-se durante a formação dos gametas.",

        q6:
            "Homozigoto é o indivíduo que apresenta dois alelos iguais para determinada característica.",

        q7:
            "Um alelo dominante pode se manifestar no fenótipo mesmo quando está acompanhado por um alelo recessivo.",

        q8:
            "A meiose produz células haploides, como os gametas, que possuem metade do número de cromossomos da célula original.",

        q9:
            "Transcrição é o processo pelo qual a informação de uma sequência de DNA é utilizada para produzir RNA.",

        q10:
            "Mutação é uma alteração no material genético, podendo ocorrer em diferentes tipos de células e regiões do DNA."

    };


    function corrigirAtividade() {

        let acertos = 0;

        const total = Object.keys(respostasCorretas).length;


        Object.keys(respostasCorretas).forEach(function(questao) {

            const elemento = document.querySelector(
                `[data-questao="${questao}"]`
            );

            const respostaSelecionada = elemento.querySelector(
                `input[name="${questao}"]:checked`
            );

            const alternativas = elemento.querySelectorAll(
                '.alternativa'
            );

            const feedback = elemento.querySelector(
                '.feedback'
            );


            alternativas.forEach(function(alternativa) {

                alternativa.classList.remove(
                    'correta',
                    'errada'
                );

            });


            const respostaCorreta =
                respostasCorretas[questao];


            alternativas.forEach(function(alternativa) {

                const input =
                    alternativa.querySelector('input');


                if (input.value === respostaCorreta) {

                    alternativa.classList.add('correta');

                }

            });


            if (
                respostaSelecionada &&
                respostaSelecionada.value === respostaCorreta
            ) {

                acertos++;

                feedback.className =
                    'feedback correto';

                feedback.innerHTML =
                    '<i class="fa-solid fa-circle-check"></i> ' +
                    '<strong>Resposta correta!</strong> ' +
                    explicacoes[questao];

            } else {

                if (respostaSelecionada) {

                    respostaSelecionada
                        .closest('.alternativa')
                        .classList.add('errada');

                }

                feedback.className =
                    'feedback errado';

                feedback.innerHTML =
                    '<i class="fa-solid fa-circle-xmark"></i> ' +
                    '<strong>Resposta incorreta.</strong> ' +
                    explicacoes[questao];

            }

        });


        const notaFinal =
            (acertos / total) * 10;


        document.getElementById('nota').textContent =
            notaFinal.toFixed(1).replace('.', ',');


        let mensagem = '';


        if (notaFinal >= 9) {

            mensagem =
                'Excelente! Você demonstrou ótimo domínio dos conceitos de genética.';

        } else if (notaFinal >= 7) {

            mensagem =
                'Muito bem! Você compreendeu boa parte dos conceitos. Continue revisando para melhorar ainda mais.';

        } else if (notaFinal >= 5) {

            mensagem =
                'Bom começo! Revise os conteúdos de genética e tente novamente para reforçar seus conhecimentos.';

        } else {

            mensagem =
                'Continue estudando! Revise os conceitos de DNA, genes, hereditariedade e leis de Mendel e tente novamente.';

        }


        document.getElementById('mensagem').textContent =
            mensagem;


        const resultado =
            document.getElementById('resultado');


        resultado.style.display = 'block';


        resultado.scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });

    }


    function tentarNovamente() {

        document
            .querySelectorAll('input[type="radio"]')
            .forEach(function(input) {

                input.checked = false;

            });


        document
            .querySelectorAll('.alternativa')
            .forEach(function(alternativa) {

                alternativa.classList.remove(
                    'correta',
                    'errada'
                );

            });


        document
            .querySelectorAll('.feedback')
            .forEach(function(feedback) {

                feedback.className = 'feedback';

                feedback.innerHTML = '';

            });


        document.getElementById('resultado')
            .style.display = 'none';


        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

    }

</script>

</body>

</html>