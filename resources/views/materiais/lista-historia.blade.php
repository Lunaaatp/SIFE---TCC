<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista — Brasil República | SIFE</title>

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

        /* INFORMAÇÕES */

        .info-atividade {
            display: flex;
            align-items: center;
            gap: 12px;

            margin-bottom: 20px;
            padding: 15px 18px;

            background: #fff7f7;
            border-left: 4px solid #d92f3d;

            border-radius: 10px;

            color: #627991;
            font-size: 13px;
            line-height: 1.6;
        }

        .info-atividade i {
            color: #d92f3d;
            font-size: 17px;
        }

        /* QUESTÕES */

        .questao {
            background: white;

            border: 1px solid #edf2f7;
            border-radius: 18px;

            padding: 25px;
            margin-bottom: 18px;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
        }

        .numero-questao {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            width: 34px;
            height: 34px;

            margin-bottom: 12px;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 10px;

            font-size: 13px;
            font-weight: 800;
        }

        .pergunta {
            margin: 0 0 18px;

            color: #071b35;
            font-size: 15px;
            font-weight: 800;
            line-height: 1.6;
        }

        .alternativas {
            display: flex;
            flex-direction: column;
            gap: 9px;
        }

        .alternativa {
            position: relative;
        }

        .alternativa input {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .alternativa label {
            display: flex;
            align-items: center;

            width: 100%;

            padding: 13px 15px;

            background: #f8fafb;

            border: 1px solid #edf2f7;
            border-radius: 11px;

            color: #627991;

            font-size: 13px;
            line-height: 1.5;

            cursor: pointer;

            transition: 0.2s;
        }

        .alternativa label:hover {
            border-color: #d92f3d;
            background: #fff7f7;
        }

        .alternativa input:checked + label {
            border-color: #d92f3d;
            background: #fff3f3;
            color: #071b35;
            font-weight: 700;
        }

        .letra {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            width: 28px;
            height: 28px;

            margin-right: 10px;

            background: white;
            border: 1px solid #e5e9ee;

            border-radius: 8px;

            color: #627991;

            font-size: 12px;
            font-weight: 800;

            flex-shrink: 0;
        }

        /* FEEDBACK */

        .feedback {
            display: none;

            margin-top: 15px;
            padding: 13px 15px;

            border-radius: 10px;

            font-size: 12px;
            font-weight: 700;
            line-height: 1.6;
        }

        .feedback.correto {
            background: #edf9f0;
            color: #2e7d32;
            border: 1px solid #c8e6c9;
        }

        .feedback.incorreto {
            background: #fff1f1;
            color: #c62828;
            border: 1px solid #ffcdd2;
        }

        .questao.respondida-correta {
            border-color: #a5d6a7;
        }

        .questao.respondida-incorreta {
            border-color: #ef9a9a;
        }

        /* BOTÃO FINALIZAR */

        .area-finalizar {
            margin-top: 25px;

            background: white;

            border: 1px solid #edf2f7;
            border-radius: 18px;

            padding: 25px;

            text-align: center;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
        }

        .btn-finalizar {
            width: 100%;
            height: 50px;

            border: none;
            border-radius: 12px;

            background: #d92f3d;
            color: white;

            font-size: 14px;
            font-weight: 800;

            cursor: pointer;

            transition: 0.2s;
        }

        .btn-finalizar:hover {
            background: #b71c1c;
            transform: translateY(-1px);
        }

        /* RESULTADO */

        .resultado {
            display: none;

            margin-top: 20px;
            padding: 25px;

            background: #071b35;
            color: white;

            border-radius: 16px;

            text-align: center;
        }

        .resultado .icone-resultado {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .resultado h2 {
            margin: 0 0 7px;

            font-size: 21px;
            font-weight: 800;
        }

        .resultado p {
            margin: 0;

            color: #dbe4ed;

            font-size: 13px;
        }

        .nota {
            margin: 15px 0;

            font-size: 38px;
            font-weight: 800;
        }

        .btn-tentar {
            margin-top: 18px;

            height: 43px;
            padding: 0 20px;

            border: none;
            border-radius: 11px;

            background: white;
            color: #071b35;

            font-size: 13px;
            font-weight: 800;

            cursor: pointer;

            transition: 0.2s;
        }

        .btn-tentar:hover {
            transform: translateY(-1px);
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
            .area-finalizar {
                padding: 20px;
            }

            .acoes-topo {
                flex-direction: column;
                align-items: stretch;
            }

            .voltar,
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

        <div class="acoes-topo">

            <a href="{{ route('materiais.historia') }}" class="voltar">
                <i class="fa-solid fa-arrow-left"></i>
                Voltar para materiais
            </a>

            <a href="{{ route('listaHistoriaPdf') }}" class="btn-baixar">
                <i class="fa-solid fa-download"></i>
                Baixar
            </a>

        </div>

        <div class="titulo-pequeno">
            LISTA DE EXERCÍCIOS — HISTÓRIA
        </div>

        <h1 class="titulo-principal">
            Brasil República
        </h1>

        <p class="subtitulo">
            Lista de exercícios sobre os principais períodos
            da República brasileira.
        </p>

    </div>


    <!-- INFORMAÇÃO -->

    <div class="info-atividade">

        <i class="fa-solid fa-circle-info"></i>

        <span>
            Responda às 10 questões abaixo. Ao finalizar,
            você receberá sua nota e poderá visualizar o feedback
            de cada questão.
        </span>

    </div>


    <!-- QUESTÃO 1 -->

    <div class="questao" id="questao1">

        <div class="numero-questao">01</div>

        <p class="pergunta">
            Em que ano foi proclamada a República no Brasil?
        </p>

        <div class="alternativas">

            <div class="alternativa">
                <input type="radio" name="q1" id="q1a" value="A">
                <label for="q1a">
                    <span class="letra">A</span>
                    1822
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q1" id="q1b" value="B">
                <label for="q1b">
                    <span class="letra">B</span>
                    1889
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q1" id="q1c" value="C">
                <label for="q1c">
                    <span class="letra">C</span>
                    1891
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q1" id="q1d" value="D">
                <label for="q1d">
                    <span class="letra">D</span>
                    1930
                </label>
            </div>

        </div>

        <div class="feedback" id="feedback1"></div>

    </div>


    <!-- QUESTÃO 2 -->

    <div class="questao" id="questao2">

        <div class="numero-questao">02</div>

        <p class="pergunta">
            O período conhecido como República Velha corresponde,
            de forma geral, ao período entre:
        </p>

        <div class="alternativas">

            <div class="alternativa">
                <input type="radio" name="q2" id="q2a" value="A">
                <label for="q2a">
                    <span class="letra">A</span>
                    1889 e 1930
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q2" id="q2b" value="B">
                <label for="q2b">
                    <span class="letra">B</span>
                    1930 e 1945
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q2" id="q2c" value="C">
                <label for="q2c">
                    <span class="letra">C</span>
                    1945 e 1964
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q2" id="q2d" value="D">
                <label for="q2d">
                    <span class="letra">D</span>
                    1964 e 1985
                </label>
            </div>

        </div>

        <div class="feedback" id="feedback2"></div>

    </div>


    <!-- QUESTÃO 3 -->

    <div class="questao" id="questao3">

        <div class="numero-questao">03</div>

        <p class="pergunta">
            Durante a Primeira República, a política brasileira
            foi fortemente marcada pelo poder das oligarquias estaduais.
            Qual expressão é associada à influência política de
            São Paulo e Minas Gerais?
        </p>

        <div class="alternativas">

            <div class="alternativa">
                <input type="radio" name="q3" id="q3a" value="A">
                <label for="q3a">
                    <span class="letra">A</span>
                    Política do café com leite
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q3" id="q3b" value="B">
                <label for="q3b">
                    <span class="letra">B</span>
                    Política dos governadores
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q3" id="q3c" value="C">
                <label for="q3c">
                    <span class="letra">C</span>
                    Estado Novo
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q3" id="q3d" value="D">
                <label for="q3d">
                    <span class="letra">D</span>
                    República da Espada
                </label>
            </div>

        </div>

        <div class="feedback" id="feedback3"></div>

    </div>


    <!-- QUESTÃO 4 -->

    <div class="questao" id="questao4">

        <div class="numero-questao">04</div>

        <p class="pergunta">
            A Revolução de 1930 provocou uma importante mudança
            política no Brasil. Quem chegou ao poder após esse movimento?
        </p>

        <div class="alternativas">

            <div class="alternativa">
                <input type="radio" name="q4" id="q4a" value="A">
                <label for="q4a">
                    <span class="letra">A</span>
                    Juscelino Kubitschek
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q4" id="q4b" value="B">
                <label for="q4b">
                    <span class="letra">B</span>
                    Getúlio Vargas
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q4" id="q4c" value="C">
                <label for="q4c">
                    <span class="letra">C</span>
                    João Goulart
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q4" id="q4d" value="D">
                <label for="q4d">
                    <span class="letra">D</span>
                    Tancredo Neves
                </label>
            </div>

        </div>

        <div class="feedback" id="feedback4"></div>

    </div>


    <!-- QUESTÃO 5 -->

    <div class="questao" id="questao5">

        <div class="numero-questao">05</div>

        <p class="pergunta">
            Qual período da história brasileira foi marcado pelo
            governo autoritário de Getúlio Vargas entre 1937 e 1945?
        </p>

        <div class="alternativas">

            <div class="alternativa">
                <input type="radio" name="q5" id="q5a" value="A">
                <label for="q5a">
                    <span class="letra">A</span>
                    República da Espada
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q5" id="q5b" value="B">
                <label for="q5b">
                    <span class="letra">B</span>
                    Estado Novo
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q5" id="q5c" value="C">
                <label for="q5c">
                    <span class="letra">C</span>
                    República Velha
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q5" id="q5d" value="D">
                <label for="q5d">
                    <span class="letra">D</span>
                    Nova República
                </label>
            </div>

        </div>

        <div class="feedback" id="feedback5"></div>

    </div>


    <!-- QUESTÃO 6 -->

    <div class="questao" id="questao6">

        <div class="numero-questao">06</div>

        <p class="pergunta">
            O período da história brasileira iniciado com o golpe
            militar de 1964 e encerrado em 1985 ficou conhecido como:
        </p>

        <div class="alternativas">

            <div class="alternativa">
                <input type="radio" name="q6" id="q6a" value="A">
                <label for="q6a">
                    <span class="letra">A</span>
                    Estado Novo
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q6" id="q6b" value="B">
                <label for="q6b">
                    <span class="letra">B</span>
                    República Oligárquica
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q6" id="q6c" value="C">
                <label for="q6c">
                    <span class="letra">C</span>
                    Ditadura Militar
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q6" id="q6d" value="D">
                <label for="q6d">
                    <span class="letra">D</span>
                    República da Espada
                </label>
            </div>

        </div>

        <div class="feedback" id="feedback6"></div>

    </div>


    <!-- QUESTÃO 7 -->

    <div class="questao" id="questao7">

        <div class="numero-questao">07</div>

        <p class="pergunta">
            Qual acontecimento marcou o início da chamada
            Nova República no Brasil?
        </p>

        <div class="alternativas">

            <div class="alternativa">
                <input type="radio" name="q7" id="q7a" value="A">
                <label for="q7a">
                    <span class="letra">A</span>
                    Proclamação da República
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q7" id="q7b" value="B">
                <label for="q7b">
                    <span class="letra">B</span>
                    Revolução de 1930
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q7" id="q7c" value="C">
                <label for="q7c">
                    <span class="letra">C</span>
                    Redemocratização após o fim da Ditadura Militar
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q7" id="q7d" value="D">
                <label for="q7d">
                    <span class="letra">D</span>
                    Revolução Constitucionalista
                </label>
            </div>

        </div>

        <div class="feedback" id="feedback7"></div>

    </div>


    <!-- QUESTÃO 8 -->

    <div class="questao" id="questao8">

        <div class="numero-questao">08</div>

        <p class="pergunta">
            A Constituição Federal de 1988 é considerada um marco
            importante da redemocratização brasileira. Ela ficou
            conhecida como:
        </p>

        <div class="alternativas">

            <div class="alternativa">
                <input type="radio" name="q8" id="q8a" value="A">
                <label for="q8a">
                    <span class="letra">A</span>
                    Constituição Cidadã
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q8" id="q8b" value="B">
                <label for="q8b">
                    <span class="letra">B</span>
                    Constituição Imperial
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q8" id="q8c" value="C">
                <label for="q8c">
                    <span class="letra">C</span>
                    Constituição Republicana
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q8" id="q8d" value="D">
                <label for="q8d">
                    <span class="letra">D</span>
                    Constituição Provisória
                </label>
            </div>

        </div>

        <div class="feedback" id="feedback8"></div>

    </div>


    <!-- QUESTÃO 9 -->

    <div class="questao" id="questao9">

        <div class="numero-questao">09</div>

        <p class="pergunta">
            Qual presidente ficou conhecido pelo Plano de Metas,
            pela construção de Brasília e pelo lema
            "50 anos em 5"?
        </p>

        <div class="alternativas">

            <div class="alternativa">
                <input type="radio" name="q9" id="q9a" value="A">
                <label for="q9a">
                    <span class="letra">A</span>
                    Getúlio Vargas
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q9" id="q9b" value="B">
                <label for="q9b">
                    <span class="letra">B</span>
                    Juscelino Kubitschek
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q9" id="q9c" value="C">
                <label for="q9c">
                    <span class="letra">C</span>
                    Fernando Henrique Cardoso
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q9" id="q9d" value="D">
                <label for="q9d">
                    <span class="letra">D</span>
                    João Goulart
                </label>
            </div>

        </div>

        <div class="feedback" id="feedback9"></div>

    </div>


    <!-- QUESTÃO 10 -->

    <div class="questao" id="questao10">

        <div class="numero-questao">10</div>

        <p class="pergunta">
            Qual alternativa apresenta uma sequência correta
            de períodos da República brasileira?
        </p>

        <div class="alternativas">

            <div class="alternativa">
                <input type="radio" name="q10" id="q10a" value="A">
                <label for="q10a">
                    <span class="letra">A</span>
                    República Velha → Era Vargas → Ditadura Militar → Nova República
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q10" id="q10b" value="B">
                <label for="q10b">
                    <span class="letra">B</span>
                    Era Vargas → República Velha → Nova República → Ditadura Militar
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q10" id="q10c" value="C">
                <label for="q10c">
                    <span class="letra">C</span>
                    Ditadura Militar → República Velha → Era Vargas → Nova República
                </label>
            </div>

            <div class="alternativa">
                <input type="radio" name="q10" id="q10d" value="D">
                <label for="q10d">
                    <span class="letra">D</span>
                    Nova República → Era Vargas → República Velha → Ditadura Militar
                </label>
            </div>

        </div>

        <div class="feedback" id="feedback10"></div>

    </div>


    <!-- FINALIZAR -->

    <div class="area-finalizar">

        <button class="btn-finalizar" onclick="corrigirAtividade()">

            <i class="fa-solid fa-check"></i>
            Finalizar atividade

        </button>

        <div class="resultado" id="resultado">

            <div class="icone-resultado">
                <i class="fa-solid fa-trophy"></i>
            </div>

            <h2>
                Atividade concluída!
            </h2>

            <div class="nota" id="nota">
                0,0
            </div>

            <p id="mensagemResultado">
                Confira o feedback das questões.
            </p>

            <button class="btn-tentar" onclick="tentarNovamente()">

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
        q3: "A",
        q4: "B",
        q5: "B",
        q6: "C",
        q7: "C",
        q8: "A",
        q9: "B",
        q10: "A"
    };


    const explicacoes = {

        q1: "A República foi proclamada em 15 de novembro de 1889.",

        q2: "A chamada República Velha corresponde, de forma geral, ao período de 1889 a 1930.",

        q3: "A expressão 'política do café com leite' está associada à predominância política de São Paulo e Minas Gerais durante a Primeira República.",

        q4: "Getúlio Vargas chegou ao poder após a Revolução de 1930.",

        q5: "O Estado Novo foi o período autoritário do governo Vargas entre 1937 e 1945.",

        q6: "A Ditadura Militar brasileira teve início em 1964 e terminou em 1985.",

        q7: "A Nova República está relacionada ao processo de redemocratização iniciado após o fim da Ditadura Militar.",

        q8: "A Constituição Federal de 1988 ficou conhecida como Constituição Cidadã.",

        q9: "Juscelino Kubitschek governou entre 1956 e 1961 e ficou marcado pelo Plano de Metas e pela construção de Brasília.",

        q10: "A sequência correta é: República Velha → Era Vargas → Ditadura Militar → Nova República."

    };


    function corrigirAtividade() {

        let acertos = 0;
        let respondidas = 0;

        for (let i = 1; i <= 10; i++) {

            const questao = "q" + i;

            const selecionada = document.querySelector(
                'input[name="' + questao + '"]:checked'
            );

            const questaoElemento = document.getElementById(
                "questao" + i
            );

            const feedback = document.getElementById(
                "feedback" + i
            );

            if (selecionada) {

                respondidas++;

                if (selecionada.value === respostasCorretas[questao]) {

                    acertos++;

                    questaoElemento.classList.remove(
                        "respondida-incorreta"
                    );

                    questaoElemento.classList.add(
                        "respondida-correta"
                    );

                    feedback.className =
                        "feedback correto";

                    feedback.innerHTML =
                        '<i class="fa-solid fa-circle-check"></i> ' +
                        "Resposta correta! " +
                        explicacoes[questao];

                } else {

                    questaoElemento.classList.remove(
                        "respondida-correta"
                    );

                    questaoElemento.classList.add(
                        "respondida-incorreta"
                    );

                    feedback.className =
                        "feedback incorreto";

                    feedback.innerHTML =
                        '<i class="fa-solid fa-circle-xmark"></i> ' +
                        "Resposta incorreta. " +
                        explicacoes[questao];

                }

            } else {

                feedback.className =
                    "feedback incorreto";

                feedback.innerHTML =
                    '<i class="fa-solid fa-circle-exclamation"></i> ' +
                    "Questão não respondida.";

            }

            feedback.style.display = "block";

        }


        const nota = (acertos / 10) * 10;

        document.getElementById("nota").textContent =
            nota.toFixed(1).replace(".", ",");


        let mensagem = "";

        if (nota === 10) {

            mensagem =
                "Excelente! Você acertou todas as questões.";

        } else if (nota >= 8) {

            mensagem =
                "Muito bem! Você demonstrou um ótimo conhecimento sobre o tema.";

        } else if (nota >= 6) {

            mensagem =
                "Bom trabalho! Revise alguns conteúdos para melhorar ainda mais.";

        } else {

            mensagem =
                "Continue estudando! Revise os períodos da República brasileira e tente novamente.";

        }


        if (respondidas < 10) {

            mensagem +=
                " Você respondeu " +
                respondidas +
                " de 10 questões.";

        }


        document.getElementById("mensagemResultado").textContent =
            mensagem;

        document.getElementById("resultado").style.display =
            "block";


        document.getElementById("resultado").scrollIntoView({
            behavior: "smooth",
            block: "center"
        });

    }


    function tentarNovamente() {

        for (let i = 1; i <= 10; i++) {

            const questaoElemento =
                document.getElementById("questao" + i);

            const feedback =
                document.getElementById("feedback" + i);

            questaoElemento.classList.remove(
                "respondida-correta",
                "respondida-incorreta"
            );

            feedback.style.display = "none";

            const selecionadas =
                document.querySelectorAll(
                    'input[name="q' + i + '"]'
                );

            selecionadas.forEach(function(input) {
                input.checked = false;
            });

        }

        document.getElementById("resultado").style.display =
            "none";

        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });

    }

</script>

</body>

</html>