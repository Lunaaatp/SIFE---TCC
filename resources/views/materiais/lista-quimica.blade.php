<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista — Ligações Químicas | SIFE</title>

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
            line-height: 1.7;
        }

        /* CARD PRINCIPAL */

        .atividade {
            background: white;
            border-radius: 18px;
            padding: 30px;

            border: 1px solid #edf2f7;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
        }

        /* QUESTÃO */

        .questao {
            padding: 22px 0;
            border-bottom: 1px solid #edf2f7;
        }

        .questao:first-child {
            padding-top: 0;
        }

        .questao:last-of-type {
            border-bottom: none;
        }

        .numero-questao {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            width: 34px;
            height: 34px;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 9px;

            font-size: 12px;
            font-weight: 800;

            margin-bottom: 10px;
        }

        .pergunta {
            margin: 0 0 15px;

            color: #071b35;

            font-size: 14px;
            font-weight: 700;

            line-height: 1.7;
        }

        /* ALTERNATIVAS */

        .alternativas {
            display: grid;
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
            gap: 12px;

            width: 100%;

            padding: 13px 15px;

            background: #f8fafb;

            border: 1px solid #edf2f7;

            border-radius: 11px;

            color: #627991;

            font-size: 12px;
            line-height: 1.5;

            cursor: pointer;

            transition: 0.2s;
        }

        .alternativa label:hover {
            background: #fff7f7;
            border-color: #f0c9cd;
        }

        .letra {
            display: flex;
            align-items: center;
            justify-content: center;

            width: 28px;
            height: 28px;

            flex-shrink: 0;

            background: white;

            border: 1px solid #dfe6ec;

            border-radius: 8px;

            color: #627991;

            font-size: 11px;
            font-weight: 800;
        }

        .alternativa input:checked + label {
            background: #fff3f3;
            border-color: #d92f3d;
            color: #071b35;
        }

        .alternativa input:checked + label .letra {
            background: #d92f3d;
            border-color: #d92f3d;
            color: white;
        }

        /* FEEDBACK */

        .feedback {
            display: none;

            margin-top: 10px;
            padding: 11px 13px;

            border-radius: 9px;

            font-size: 11px;
            line-height: 1.6;
        }

        .feedback.correto {
            background: #eef9f1;
            color: #287a43;
            border: 1px solid #ccebd5;
        }

        .feedback.errado {
            background: #fff0f0;
            color: #b72d38;
            border: 1px solid #f3ced1;
        }

        /* BOTÃO FINALIZAR */

        .area-finalizar {
            margin-top: 25px;
            padding-top: 25px;

            border-top: 1px solid #edf2f7;

            text-align: center;
        }

        .btn-finalizar {
            width: 100%;
            height: 48px;

            border: none;
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

            margin-top: 20px;
            padding: 22px;

            border-radius: 14px;

            background: #f3f6f9;

            text-align: center;
        }

        .resultado-titulo {
            margin: 0 0 7px;

            color: #071b35;

            font-size: 18px;
            font-weight: 800;
        }

        .nota {
            margin: 8px 0;

            color: #d92f3d;

            font-size: 32px;
            font-weight: 800;
        }

        .mensagem {
            margin: 0;

            color: #627991;

            font-size: 12px;
            line-height: 1.6;
        }

        .btn-tentar {
            margin-top: 15px;

            height: 42px;

            padding: 0 18px;

            border: none;

            border-radius: 10px;

            background: white;

            color: #627991;

            font-size: 12px;
            font-weight: 800;

            cursor: pointer;

            transition: 0.2s;
        }

        .btn-tentar:hover {
            background: #e8edf2;
            color: #071b35;
        }

        /* BOTÕES FINAIS */

        .botoes-acoes {
            display: flex;
            gap: 10px;
            align-items: center;

            margin-top: 25px;
        }

        .btn-voltar-final,
        .btn-baixar-final {
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

        .btn-voltar-final {
            background: #fff3f3;
            color: #d92f3d;
        }

        .btn-voltar-final:hover {
            background: #d92f3d;
            color: white;
        }

        .btn-baixar-final {
            background: #f3f6f9;
            color: #627991;
        }

        .btn-baixar-final:hover {
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

            .atividade {
                padding: 20px;
            }

            .botoes-topo {
                flex-wrap: wrap;
            }

            .botoes-acoes {
                flex-direction: column;
            }

            .btn-voltar-final,
            .btn-baixar-final {
                width: 100%;
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

            <a href="{{ route('listaQuimicaPdf') }}" class="btn-baixar">

                <i class="fa-solid fa-download"></i>

                Baixar

            </a>

        </div>

        <div class="titulo-pequeno">

            LISTA DE EXERCÍCIOS — QUÍMICA

        </div>

        <h1 class="titulo-principal">

            Ligações Químicas

        </h1>

        <p class="subtitulo">

            Exercícios para revisar ligações iônicas,
            covalentes e metálicas.

        </p>

    </div>


    <!-- ATIVIDADE -->

    <div class="atividade">


        <!-- QUESTÃO 1 -->

        <div class="questao">

            <div class="numero-questao">01</div>

            <p class="pergunta">

                1. O que caracteriza principalmente uma ligação iônica?

            </p>

            <div class="alternativas">

                <div class="alternativa">

                    <input type="radio" name="q1" id="q1a" value="A">

                    <label for="q1a">
                        <span class="letra">A</span>
                        Compartilhamento de elétrons entre dois ametais.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q1" id="q1b" value="B">

                    <label for="q1b">
                        <span class="letra">B</span>
                        Transferência de elétrons e atração entre íons de cargas opostas.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q1" id="q1c" value="C">

                    <label for="q1c">
                        <span class="letra">C</span>
                        Compartilhamento de prótons entre os átomos.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q1" id="q1d" value="D">

                    <label for="q1d">
                        <span class="letra">D</span>
                        Formação de uma nuvem de elétrons exclusiva dos ametais.
                    </label>

                </div>

            </div>

            <div class="feedback" id="feedback-q1"></div>

        </div>


        <!-- QUESTÃO 2 -->

        <div class="questao">

            <div class="numero-questao">02</div>

            <p class="pergunta">

                2. Em uma ligação covalente, os átomos geralmente:

            </p>

            <div class="alternativas">

                <div class="alternativa">

                    <input type="radio" name="q2" id="q2a" value="A">

                    <label for="q2a">
                        <span class="letra">A</span>
                        Compartilham pares de elétrons.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q2" id="q2b" value="B">

                    <label for="q2b">
                        <span class="letra">B</span>
                        Transferem todos os seus prótons.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q2" id="q2c" value="C">

                    <label for="q2c">
                        <span class="letra">C</span>
                        Perdem necessariamente todos os elétrons.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q2" id="q2d" value="D">

                    <label for="q2d">
                        <span class="letra">D</span>
                        Formam exclusivamente íons positivos.
                    </label>

                </div>

            </div>

            <div class="feedback" id="feedback-q2"></div>

        </div>


        <!-- QUESTÃO 3 -->

        <div class="questao">

            <div class="numero-questao">03</div>

            <p class="pergunta">

                3. Qual das alternativas apresenta um exemplo de composto
                predominantemente iônico?

            </p>

            <div class="alternativas">

                <div class="alternativa">

                    <input type="radio" name="q3" id="q3a" value="A">

                    <label for="q3a">
                        <span class="letra">A</span>
                        NaCl
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q3" id="q3b" value="B">

                    <label for="q3b">
                        <span class="letra">B</span>
                        CO₂
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q3" id="q3c" value="C">

                    <label for="q3c">
                        <span class="letra">C</span>
                        O₂
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q3" id="q3d" value="D">

                    <label for="q3d">
                        <span class="letra">D</span>
                        CH₄
                    </label>

                </div>

            </div>

            <div class="feedback" id="feedback-q3"></div>

        </div>


        <!-- QUESTÃO 4 -->

        <div class="questao">

            <div class="numero-questao">04</div>

            <p class="pergunta">

                4. A ligação entre dois átomos de oxigênio na molécula O₂
                é classificada como:

            </p>

            <div class="alternativas">

                <div class="alternativa">

                    <input type="radio" name="q4" id="q4a" value="A">

                    <label for="q4a">
                        <span class="letra">A</span>
                        Iônica.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q4" id="q4b" value="B">

                    <label for="q4b">
                        <span class="letra">B</span>
                        Covalente.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q4" id="q4c" value="C">

                    <label for="q4c">
                        <span class="letra">C</span>
                        Metálica.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q4" id="q4d" value="D">

                    <label for="q4d">
                        <span class="letra">D</span>
                        Nuclear.
                    </label>

                </div>

            </div>

            <div class="feedback" id="feedback-q4"></div>

        </div>


        <!-- QUESTÃO 5 -->

        <div class="questao">

            <div class="numero-questao">05</div>

            <p class="pergunta">

                5. A ligação metálica ocorre principalmente entre:

            </p>

            <div class="alternativas">

                <div class="alternativa">

                    <input type="radio" name="q5" id="q5a" value="A">

                    <label for="q5a">
                        <span class="letra">A</span>
                        Átomos de metais.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q5" id="q5b" value="B">

                    <label for="q5b">
                        <span class="letra">B</span>
                        Apenas gases nobres.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q5" id="q5c" value="C">

                    <label for="q5c">
                        <span class="letra">C</span>
                        Apenas ametais.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q5" id="q5d" value="D">

                    <label for="q5d">
                        <span class="letra">D</span>
                        Hidrogênio e gases nobres.
                    </label>

                </div>

            </div>

            <div class="feedback" id="feedback-q5"></div>

        </div>


        <!-- QUESTÃO 6 -->

        <div class="questao">

            <div class="numero-questao">06</div>

            <p class="pergunta">

                6. Uma característica comum dos metais relacionada à
                ligação metálica é:

            </p>

            <div class="alternativas">

                <div class="alternativa">

                    <input type="radio" name="q6" id="q6a" value="A">

                    <label for="q6a">
                        <span class="letra">A</span>
                        Baixa capacidade de conduzir eletricidade.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q6" id="q6b" value="B">

                    <label for="q6b">
                        <span class="letra">B</span>
                        Boa condução de eletricidade.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q6" id="q6c" value="C">

                    <label for="q6c">
                        <span class="letra">C</span>
                        Ausência completa de elétrons.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q6" id="q6d" value="D">

                    <label for="q6d">
                        <span class="letra">D</span>
                        Formação obrigatória de moléculas isoladas.
                    </label>

                </div>

            </div>

            <div class="feedback" id="feedback-q6"></div>

        </div>


        <!-- QUESTÃO 7 -->

        <div class="questao">

            <div class="numero-questao">07</div>

            <p class="pergunta">

                7. Qual alternativa relaciona corretamente o tipo de
                ligação ao processo predominante?

            </p>

            <div class="alternativas">

                <div class="alternativa">

                    <input type="radio" name="q7" id="q7a" value="A">

                    <label for="q7a">
                        <span class="letra">A</span>
                        Iônica — compartilhamento de elétrons.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q7" id="q7b" value="B">

                    <label for="q7b">
                        <span class="letra">B</span>
                        Covalente — transferência completa de elétrons.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q7" id="q7c" value="C">

                    <label for="q7c">
                        <span class="letra">C</span>
                        Metálica — elétrons deslocalizados entre átomos metálicos.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q7" id="q7d" value="D">

                    <label for="q7d">
                        <span class="letra">D</span>
                        Covalente — transferência de prótons.
                    </label>

                </div>

            </div>

            <div class="feedback" id="feedback-q7"></div>

        </div>


        <!-- QUESTÃO 8 -->

        <div class="questao">

            <div class="numero-questao">08</div>

            <p class="pergunta">

                8. O que acontece quando um átomo de sódio (Na) forma
                um íon Na⁺?

            </p>

            <div class="alternativas">

                <div class="alternativa">

                    <input type="radio" name="q8" id="q8a" value="A">

                    <label for="q8a">
                        <span class="letra">A</span>
                        Ganha um próton.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q8" id="q8b" value="B">

                    <label for="q8b">
                        <span class="letra">B</span>
                        Perde um elétron.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q8" id="q8c" value="C">

                    <label for="q8c">
                        <span class="letra">C</span>
                        Ganha dois elétrons.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q8" id="q8d" value="D">

                    <label for="q8d">
                        <span class="letra">D</span>
                        Perde um próton.
                    </label>

                </div>

            </div>

            <div class="feedback" id="feedback-q8"></div>

        </div>


        <!-- QUESTÃO 9 -->

        <div class="questao">

            <div class="numero-questao">09</div>

            <p class="pergunta">

                9. Em uma ligação iônica entre sódio (Na) e cloro (Cl),
                qual situação ocorre?

            </p>

            <div class="alternativas">

                <div class="alternativa">

                    <input type="radio" name="q9" id="q9a" value="A">

                    <label for="q9a">
                        <span class="letra">A</span>
                        O sódio perde um elétron e o cloro ganha um elétron.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q9" id="q9b" value="B">

                    <label for="q9b">
                        <span class="letra">B</span>
                        Ambos os átomos perdem elétrons.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q9" id="q9c" value="C">

                    <label for="q9c">
                        <span class="letra">C</span>
                        Ambos os átomos compartilham igualmente todos os elétrons.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q9" id="q9d" value="D">

                    <label for="q9d">
                        <span class="letra">D</span>
                        O cloro perde um elétron e o sódio ganha um elétron.
                    </label>

                </div>

            </div>

            <div class="feedback" id="feedback-q9"></div>

        </div>


        <!-- QUESTÃO 10 -->

        <div class="questao">

            <div class="numero-questao">10</div>

            <p class="pergunta">

                10. Qual alternativa apresenta corretamente os três
                principais tipos de ligações químicas estudados nesta atividade?

            </p>

            <div class="alternativas">

                <div class="alternativa">

                    <input type="radio" name="q10" id="q10a" value="A">

                    <label for="q10a">
                        <span class="letra">A</span>
                        Iônica, covalente e metálica.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q10" id="q10b" value="B">

                    <label for="q10b">
                        <span class="letra">B</span>
                        Nuclear, magnética e térmica.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q10" id="q10c" value="C">

                    <label for="q10c">
                        <span class="letra">C</span>
                        Orgânica, nuclear e elétrica.
                    </label>

                </div>

                <div class="alternativa">

                    <input type="radio" name="q10" id="q10d" value="D">

                    <label for="q10d">
                        <span class="letra">D</span>
                        Ácida, básica e neutra.
                    </label>

                </div>

            </div>

            <div class="feedback" id="feedback-q10"></div>

        </div>


        <!-- FINALIZAR -->

        <div class="area-finalizar">

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

            <h2 class="resultado-titulo">

                Resultado da atividade

            </h2>

            <div class="nota" id="nota">

                0,0

            </div>

            <p class="mensagem" id="mensagem"></p>

            <button
                type="button"
                class="btn-tentar"
                onclick="tentarNovamente()"
            >

                <i class="fa-solid fa-rotate-right"></i>

                Tentar novamente

            </button>

        </div>


        <!-- BOTÕES -->

        <div class="botoes-acoes">

            <a
                href="{{ route('materiais.quimica') }}"
                class="btn-voltar-final"
            >

                <i class="fa-solid fa-arrow-left"></i>

                Voltar para materiais

            </a>

            <a
                href="{{ route('listaQuimicaPdf') }}"
                class="btn-baixar-final"
            >

                <i class="fa-solid fa-download"></i>

                Baixar

            </a>

        </div>


    </div>

</div>


<script>

    const respostasCorretas = {

        q1: "B",

        q2: "A",

        q3: "A",

        q4: "B",

        q5: "A",

        q6: "B",

        q7: "C",

        q8: "B",

        q9: "A",

        q10: "A"

    };


    const explicacoes = {

        q1: "A ligação iônica envolve transferência de elétrons e atração eletrostática entre íons de cargas opostas.",

        q2: "Na ligação covalente, os átomos compartilham pares de elétrons.",

        q3: "O NaCl é um composto iônico formado pela interação entre Na⁺ e Cl⁻.",

        q4: "Como os dois átomos de oxigênio são ametais, eles estabelecem uma ligação covalente.",

        q5: "A ligação metálica ocorre entre átomos de elementos metálicos.",

        q6: "A presença de elétrons deslocalizados contribui para a boa condução elétrica dos metais.",

        q7: "Na ligação metálica, os elétrons podem estar deslocalizados no conjunto de átomos metálicos.",

        q8: "O Na⁺ é formado quando o átomo de sódio perde um elétron.",

        q9: "O sódio perde um elétron, formando Na⁺, enquanto o cloro recebe esse elétron, formando Cl⁻.",

        q10: "Os três tipos principais estudados são ligação iônica, ligação covalente e ligação metálica."

    };


    function corrigirAtividade() {

        let acertos = 0;

        let respondidas = 0;

        for (let i = 1; i <= 10; i++) {

            const nome = "q" + i;

            const selecionada =
                document.querySelector(
                    'input[name="' + nome + '"]:checked'
                );

            const feedback =
                document.getElementById(
                    "feedback-" + nome
                );

            if (selecionada) {

                respondidas++;

                if (
                    selecionada.value ===
                    respostasCorretas[nome]
                ) {

                    acertos++;

                    feedback.className =
                        "feedback correto";

                    feedback.innerHTML =
                        '<i class="fa-solid fa-circle-check"></i> ' +
                        "<strong>Resposta correta!</strong> " +
                        explicacoes[nome];

                } else {

                    feedback.className =
                        "feedback errado";

                    feedback.innerHTML =
                        '<i class="fa-solid fa-circle-xmark"></i> ' +
                        "<strong>Resposta incorreta.</strong> " +
                        "A alternativa correta é " +
                        "<strong>" +
                        respostasCorretas[nome] +
                        "</strong>. " +
                        explicacoes[nome];

                }

            } else {

                feedback.className =
                    "feedback errado";

                feedback.innerHTML =
                    '<i class="fa-solid fa-circle-exclamation"></i> ' +
                    "<strong>Questão não respondida.</strong> " +
                    "A alternativa correta é " +
                    "<strong>" +
                    respostasCorretas[nome] +
                    "</strong>. " +
                    explicacoes[nome];

            }

            feedback.style.display = "block";

        }


        const notaFinal = acertos;

        document.getElementById("nota").textContent =
            notaFinal.toFixed(1).replace(".", ",");


        let mensagem = "";

        if (notaFinal === 10) {

            mensagem =
                "Excelente! Você acertou todas as questões e demonstrou domínio sobre ligações químicas.";

        } else if (notaFinal >= 8) {

            mensagem =
                "Muito bom! Você apresentou um ótimo desempenho. Revise apenas os conceitos das questões que errou.";

        } else if (notaFinal >= 6) {

            mensagem =
                "Bom trabalho! Você já domina parte do conteúdo, mas vale revisar os tipos de ligações químicas.";

        } else if (notaFinal >= 4) {

            mensagem =
                "Continue estudando! Revise principalmente as diferenças entre ligações iônicas, covalentes e metálicas.";

        } else {

            mensagem =
                "É importante revisar o conteúdo antes de tentar novamente. Comece pelos conceitos básicos de cada tipo de ligação.";

        }


        document.getElementById("mensagem").textContent =
            mensagem;


        const resultado =
            document.getElementById("resultado");

        resultado.style.display = "block";


        resultado.scrollIntoView({
            behavior: "smooth",
            block: "center"
        });

    }


    function tentarNovamente() {

        for (let i = 1; i <= 10; i++) {

            const nome = "q" + i;

            const alternativas =
                document.querySelectorAll(
                    'input[name="' + nome + '"]'
                );

            alternativas.forEach(function(input) {

                input.checked = false;

            });


            const feedback =
                document.getElementById(
                    "feedback-" + nome
                );

            feedback.style.display = "none";

            feedback.innerHTML = "";

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