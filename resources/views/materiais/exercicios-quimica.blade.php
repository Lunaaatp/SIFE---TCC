<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercícios — Estequiometria | SIFE</title>

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
            gap: 10px;
            align-items: center;
            margin-bottom: 22px;
        }

        .voltar,
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
        }

        /* AVISO */

        .aviso {
            display: flex;
            align-items: flex-start;
            gap: 12px;

            background: #fff5f5;
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
            font-size: 17px;
            margin-top: 2px;
        }

        .aviso strong {
            color: #071b35;
        }

        /* QUESTÕES */

        .questao {
            background: white;
            border: 1px solid #edf2f7;
            border-radius: 18px;

            padding: 24px;
            margin-bottom: 16px;

            box-shadow:
                0 5px 18px rgba(0, 0, 0, 0.035);

            transition: 0.2s;
        }

        .questao:hover {
            transform: translateY(-1px);
        }

        .numero {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            width: 32px;
            height: 32px;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 9px;

            font-size: 13px;
            font-weight: 800;

            margin-bottom: 12px;
        }

        .pergunta {
            color: #071b35;
            font-size: 14px;
            font-weight: 700;
            line-height: 1.7;

            margin-bottom: 15px;
        }

        /* ALTERNATIVAS */

        .alternativas {
            display: flex;
            flex-direction: column;
            gap: 9px;
        }

        .alternativa {
            display: flex;
            align-items: center;
            gap: 10px;

            padding: 12px 14px;

            border: 1px solid #edf2f7;
            border-radius: 10px;

            cursor: pointer;

            color: #627991;
            font-size: 13px;

            transition: 0.2s;
        }

        .alternativa:hover {
            background: #f8fafb;
            border-color: #dfe6ec;
        }

        .alternativa input {
            accent-color: #d92f3d;
            cursor: pointer;
        }

        .letra {
            font-weight: 800;
            color: #071b35;
            min-width: 22px;
        }

        /* FEEDBACK */

        .feedback {
            display: none;

            margin-top: 15px;
            padding: 13px 15px;

            border-radius: 10px;

            font-size: 12px;
            line-height: 1.6;
        }

        .feedback.correto {
            display: block;
            background: #eefaf2;
            color: #287a46;
            border: 1px solid #ccebd7;
        }

        .feedback.errado {
            display: block;
            background: #fff1f1;
            color: #b52b37;
            border: 1px solid #f2c9cd;
        }

        /* BOTÃO FINALIZAR */

        .area-botao {
            text-align: center;
            margin-top: 25px;
        }

        .btn-finalizar {
            border: none;

            height: 48px;
            padding: 0 28px;

            border-radius: 12px;

            background: #d92f3d;
            color: white;

            font-size: 13px;
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

            background: #071b35;
            color: white;

            border-radius: 18px;

            padding: 28px;
            margin-top: 25px;

            text-align: center;
        }

        .resultado.mostrar {
            display: block;
        }

        .resultado-icone {
            width: 50px;
            height: 50px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto 12px;

            background: rgba(255,255,255,0.10);
            border-radius: 13px;

            font-size: 20px;
        }

        .resultado h2 {
            margin: 0 0 8px;

            font-size: 22px;
            font-weight: 800;
        }

        .nota {
            font-size: 35px;
            font-weight: 800;

            margin: 8px 0;
        }

        .mensagem {
            color: #dce5ee;
            font-size: 13px;
        }

        /* TENTAR NOVAMENTE */

        .btn-novamente {
            margin-top: 18px;

            height: 44px;
            padding: 0 22px;

            border: 1px solid rgba(255,255,255,0.25);
            border-radius: 11px;

            background: transparent;
            color: white;

            font-size: 12px;
            font-weight: 700;

            cursor: pointer;

            transition: 0.2s;
        }

        .btn-novamente:hover {
            background: white;
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

            .questao {
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

            <a href="{{ route('materiais.quimica') }}" class="voltar">
                <i class="fa-solid fa-arrow-left"></i>
                Voltar para materiais
            </a>

            <a href="{{ route('exerciciosQuimicaPdf') }}" class="btn-baixar">
                <i class="fa-solid fa-download"></i>
                Baixar
            </a>

        </div>

        <div class="titulo-pequeno">
            EXERCÍCIOS DE QUÍMICA
        </div>

        <h1 class="titulo-principal">
            Estequiometria
        </h1>

        <p class="subtitulo">
            Lista de exercícios para praticar cálculos estequiométricos.
        </p>

    </div>


    <!-- AVISO -->

    <div class="aviso">

        <i class="fa-solid fa-circle-info"></i>

        <div>

            <strong>Dica:</strong>
            antes de resolver os cálculos, confira se a equação química
            está balanceada e identifique corretamente a proporção entre
            os reagentes e produtos.

        </div>

    </div>


    <!-- QUESTÃO 1 -->

    <div class="questao">

        <div class="numero">1</div>

        <div class="pergunta">

            Considere a reação:

            <br><br>

            2H₂ + O₂ → 2H₂O

            <br><br>

            Qual é a proporção, em mol, entre H₂ e O₂?

        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q1" value="A">
                <span class="letra">A)</span>
                1 : 1
            </label>

            <label class="alternativa">
                <input type="radio" name="q1" value="B">
                <span class="letra">B)</span>
                2 : 1
            </label>

            <label class="alternativa">
                <input type="radio" name="q1" value="C">
                <span class="letra">C)</span>
                1 : 2
            </label>

            <label class="alternativa">
                <input type="radio" name="q1" value="D">
                <span class="letra">D)</span>
                2 : 2
            </label>

        </div>

        <div id="feedback-q1" class="feedback"></div>

    </div>


    <!-- QUESTÃO 2 -->

    <div class="questao">

        <div class="numero">2</div>

        <div class="pergunta">

            Na reação:

            <br><br>

            N₂ + 3H₂ → 2NH₃

            <br><br>

            Quantos mols de NH₃ podem ser produzidos a partir
            de 1 mol de N₂, considerando H₂ em quantidade suficiente?

        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q2" value="A">
                <span class="letra">A)</span>
                1 mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q2" value="B">
                <span class="letra">B)</span>
                2 mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q2" value="C">
                <span class="letra">C)</span>
                3 mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q2" value="D">
                <span class="letra">D)</span>
                4 mol
            </label>

        </div>

        <div id="feedback-q2" class="feedback"></div>

    </div>


    <!-- QUESTÃO 3 -->

    <div class="questao">

        <div class="numero">3</div>

        <div class="pergunta">

            Considere:

            <br><br>

            2Na + Cl₂ → 2NaCl

            <br><br>

            Qual é a massa molar aproximada do NaCl?

            <br><br>

            Dados: Na = 23 g/mol e Cl = 35,5 g/mol.

        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q3" value="A">
                <span class="letra">A)</span>
                35,5 g/mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q3" value="B">
                <span class="letra">B)</span>
                46 g/mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q3" value="C">
                <span class="letra">C)</span>
                58,5 g/mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q3" value="D">
                <span class="letra">D)</span>
                60,5 g/mol
            </label>

        </div>

        <div id="feedback-q3" class="feedback"></div>

    </div>


    <!-- QUESTÃO 4 -->

    <div class="questao">

        <div class="numero">4</div>

        <div class="pergunta">

            Na reação:

            <br><br>

            CaCO₃ → CaO + CO₂

            <br><br>

            Qual massa de CaCO₃ é necessária para produzir
            44 g de CO₂?

            <br><br>

            Dados: Ca = 40, C = 12 e O = 16.

        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q4" value="A">
                <span class="letra">A)</span>
                44 g
            </label>

            <label class="alternativa">
                <input type="radio" name="q4" value="B">
                <span class="letra">B)</span>
                50 g
            </label>

            <label class="alternativa">
                <input type="radio" name="q4" value="C">
                <span class="letra">C)</span>
                100 g
            </label>

            <label class="alternativa">
                <input type="radio" name="q4" value="D">
                <span class="letra">D)</span>
                120 g
            </label>

        </div>

        <div id="feedback-q4" class="feedback"></div>

    </div>


    <!-- QUESTÃO 5 -->

    <div class="questao">

        <div class="numero">5</div>

        <div class="pergunta">

            Na combustão do metano:

            <br><br>

            CH₄ + 2O₂ → CO₂ + 2H₂O

            <br><br>

            Quantos mols de O₂ são necessários para reagir
            completamente com 3 mols de CH₄?

        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q5" value="A">
                <span class="letra">A)</span>
                2 mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q5" value="B">
                <span class="letra">B)</span>
                3 mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q5" value="C">
                <span class="letra">C)</span>
                5 mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q5" value="D">
                <span class="letra">D)</span>
                6 mol
            </label>

        </div>

        <div id="feedback-q5" class="feedback"></div>

    </div>


    <!-- QUESTÃO 6 -->

    <div class="questao">

        <div class="numero">6</div>

        <div class="pergunta">

            Na reação:

            <br><br>

            2H₂ + O₂ → 2H₂O

            <br><br>

            Qual é a massa de água produzida a partir de
            2 mol de H₂?

            <br><br>

            Dados: H = 1 g/mol e O = 16 g/mol.

        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q6" value="A">
                <span class="letra">A)</span>
                18 g
            </label>

            <label class="alternativa">
                <input type="radio" name="q6" value="B">
                <span class="letra">B)</span>
                24 g
            </label>

            <label class="alternativa">
                <input type="radio" name="q6" value="C">
                <span class="letra">C)</span>
                36 g
            </label>

            <label class="alternativa">
                <input type="radio" name="q6" value="D">
                <span class="letra">D)</span>
                40 g
            </label>

        </div>

        <div id="feedback-q6" class="feedback"></div>

    </div>


    <!-- QUESTÃO 7 -->

    <div class="questao">

        <div class="numero">7</div>

        <div class="pergunta">

            Na reação:

            <br><br>

            2Al + 3Cl₂ → 2AlCl₃

            <br><br>

            Qual quantidade de Cl₂ é necessária para reagir
            com 4 mols de Al?

        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q7" value="A">
                <span class="letra">A)</span>
                2 mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q7" value="B">
                <span class="letra">B)</span>
                4 mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q7" value="C">
                <span class="letra">C)</span>
                6 mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q7" value="D">
                <span class="letra">D)</span>
                8 mol
            </label>

        </div>

        <div id="feedback-q7" class="feedback"></div>

    </div>


    <!-- QUESTÃO 8 -->

    <div class="questao">

        <div class="numero">8</div>

        <div class="pergunta">

            A massa molar do CO₂ é:

            <br><br>

            Dados: C = 12 g/mol e O = 16 g/mol.

        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q8" value="A">
                <span class="letra">A)</span>
                28 g/mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q8" value="B">
                <span class="letra">B)</span>
                32 g/mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q8" value="C">
                <span class="letra">C)</span>
                44 g/mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q8" value="D">
                <span class="letra">D)</span>
                48 g/mol
            </label>

        </div>

        <div id="feedback-q8" class="feedback"></div>

    </div>


    <!-- QUESTÃO 9 -->

    <div class="questao">

        <div class="numero">9</div>

        <div class="pergunta">

            Considere a reação:

            <br><br>

            2KClO₃ → 2KCl + 3O₂

            <br><br>

            Quantos mols de O₂ são produzidos a partir
            de 2 mols de KClO₃?

        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q9" value="A">
                <span class="letra">A)</span>
                1 mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q9" value="B">
                <span class="letra">B)</span>
                2 mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q9" value="C">
                <span class="letra">C)</span>
                3 mol
            </label>

            <label class="alternativa">
                <input type="radio" name="q9" value="D">
                <span class="letra">D)</span>
                4 mol
            </label>

        </div>

        <div id="feedback-q9" class="feedback"></div>

    </div>


    <!-- QUESTÃO 10 -->

    <div class="questao">

        <div class="numero">10</div>

        <div class="pergunta">

            Na reação:

            <br><br>

            C + O₂ → CO₂

            <br><br>

            Qual massa de CO₂ é produzida quando 12 g de carbono
            reagem completamente com oxigênio?

            <br><br>

            Dados: C = 12 g/mol e CO₂ = 44 g/mol.

        </div>

        <div class="alternativas">

            <label class="alternativa">
                <input type="radio" name="q10" value="A">
                <span class="letra">A)</span>
                12 g
            </label>

            <label class="alternativa">
                <input type="radio" name="q10" value="B">
                <span class="letra">B)</span>
                22 g
            </label>

            <label class="alternativa">
                <input type="radio" name="q10" value="C">
                <span class="letra">C)</span>
                32 g
            </label>

            <label class="alternativa">
                <input type="radio" name="q10" value="D">
                <span class="letra">D)</span>
                44 g
            </label>

        </div>

        <div id="feedback-q10" class="feedback"></div>

    </div>


    <!-- BOTÃO -->

    <div class="area-botao">

        <button class="btn-finalizar" onclick="corrigirAtividade()">
            <i class="fa-solid fa-check"></i>
            Finalizar atividade
        </button>

    </div>


    <!-- RESULTADO -->

    <div id="resultado" class="resultado">

        <div class="resultado-icone">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>

        <h2>
            Resultado
        </h2>

        <div id="nota" class="nota">
            0,0
        </div>

        <div id="mensagem" class="mensagem">
        </div>

        <button class="btn-novamente" onclick="tentarNovamente()">
            <i class="fa-solid fa-rotate-right"></i>
            Tentar novamente
        </button>

    </div>

</div>


<script>

    const respostasCorretas = {

        q1: "B",
        q2: "B",
        q3: "C",
        q4: "C",
        q5: "D",
        q6: "C",
        q7: "C",
        q8: "C",
        q9: "C",
        q10: "D"

    };


    const explicacoes = {

        q1: "A proporção indicada pelos coeficientes é 2 mol de H₂ para 1 mol de O₂.",

        q2: "A equação mostra que 1 mol de N₂ produz 2 mol de NH₃.",

        q3: "A massa molar do NaCl é 23 + 35,5 = 58,5 g/mol.",

        q4: "1 mol de CaCO₃ corresponde a 100 g e produz 1 mol de CO₂, que corresponde a 44 g.",

        q5: "A proporção é 1 mol de CH₄ para 2 mol de O₂. Portanto, 3 mol de CH₄ precisam de 6 mol de O₂.",

        q6: "2 mol de H₂ produzem 2 mol de H₂O. Como 1 mol de H₂O possui 18 g, são produzidos 36 g.",

        q7: "A proporção é 2 mol de Al para 3 mol de Cl₂. Para 4 mol de Al, são necessários 6 mol de Cl₂.",

        q8: "CO₂ possui 1 átomo de carbono e 2 de oxigênio: 12 + 2 × 16 = 44 g/mol.",

        q9: "A equação indica que 2 mol de KClO₃ produzem 3 mol de O₂.",

        q10: "12 g de C correspondem a 1 mol de carbono, que produz 1 mol de CO₂, equivalente a 44 g."

    };


    function corrigirAtividade() {

        let acertos = 0;

        for (let i = 1; i <= 10; i++) {

            const nome = "q" + i;

            const selecionada = document.querySelector(
                'input[name="' + nome + '"]:checked'
            );

            const feedback = document.getElementById(
                "feedback-" + nome
            );

            if (!selecionada) {

                feedback.className = "feedback errado";

                feedback.innerHTML =
                    '<i class="fa-solid fa-circle-xmark"></i> ' +
                    'Questão não respondida. ' +
                    explicacoes[nome];

                continue;
            }

            if (selecionada.value === respostasCorretas[nome]) {

                acertos++;

                feedback.className = "feedback correto";

                feedback.innerHTML =
                    '<i class="fa-solid fa-circle-check"></i> ' +
                    '<strong>Resposta correta!</strong> ' +
                    explicacoes[nome];

            } else {

                feedback.className = "feedback errado";

                feedback.innerHTML =
                    '<i class="fa-solid fa-circle-xmark"></i> ' +
                    '<strong>Resposta incorreta.</strong> ' +
                    explicacoes[nome];

            }

        }


        const notaFinal = acertos;

        document.getElementById("nota").innerHTML =
            notaFinal.toFixed(1).replace(".", ",") + " / 10";

        let mensagem = "";

        if (notaFinal === 10) {

            mensagem = "Excelente! Você domina os conceitos de estequiometria.";

        } else if (notaFinal >= 7) {

            mensagem = "Muito bom! Você apresentou um bom domínio do conteúdo.";

        } else if (notaFinal >= 5) {

            mensagem = "Bom trabalho! Revise alguns conceitos e tente novamente.";

        } else {

            mensagem = "Continue estudando! Revise balanceamento, mol e proporções.";

        }

        document.getElementById("mensagem").innerHTML = mensagem;

        document.getElementById("resultado").classList.add("mostrar");

        window.scrollTo({
            top: document.getElementById("resultado").offsetTop - 30,
            behavior: "smooth"
        });

    }


    function tentarNovamente() {

        document
            .querySelectorAll('input[type="radio"]')
            .forEach(input => {
                input.checked = false;
            });

        document
            .querySelectorAll(".feedback")
            .forEach(feedback => {

                feedback.className = "feedback";
                feedback.innerHTML = "";

            });

        document
            .getElementById("resultado")
            .classList.remove("mostrar");

        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });

    }

</script>

</body>

</html>