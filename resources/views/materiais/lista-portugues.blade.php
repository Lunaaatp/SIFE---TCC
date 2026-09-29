<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista — Interpretação de Texto | SIFE</title>

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

        .voltar {
            height: 45px;
            padding: 0 20px;

            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

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

        a.btn-baixar {
            height: 45px;

            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            padding: 0 20px;

            border-radius: 12px;

            background: #f3f6f9;
            color: #627991;

            text-decoration: none !important;
            font-size: 13px;
            font-weight: 800;

            transition: 0.2s;
        }

        a.btn-baixar:hover {
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

        /* CABEÇALHO DA ATIVIDADE */

        .exercicio-header {
            background: white;
            border: 1px solid #edf2f7;
            border-radius: 18px;
            padding: 24px;
            margin-bottom: 20px;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
        }

        .header-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .icone-exercicio {
            width: 50px;
            height: 50px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 13px;
            font-size: 20px;
        }

        .header-info h2 {
            margin: 0;
            color: #071b35;
            font-size: 20px;
            font-weight: 800;
        }

        .header-info p {
            margin: 5px 0 0;
            color: #7b8794;
            font-size: 12px;
        }

        .contador {
            padding: 10px 15px;
            background: #f3f6f9;
            color: #627991;
            border-radius: 10px;
            font-size: 12px;
            font-weight: 800;
            white-space: nowrap;
        }

        /* TEXTO */

        .texto-leitura {
            background: white;
            border: 1px solid #edf2f7;
            border-radius: 18px;
            padding: 28px;
            margin-bottom: 20px;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
        }

        .texto-label {
            color: #d92f3d;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .texto-leitura h3 {
            margin: 0 0 18px;
            color: #071b35;
            font-size: 20px;
            font-weight: 800;
        }

        .texto-leitura p {
            margin: 0 0 14px;
            color: #536273;
            font-size: 14px;
            line-height: 1.8;
        }

        .texto-leitura p:last-child {
            margin-bottom: 0;
        }

        /* QUESTÕES */

        .questoes {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .questao {
            background: white;
            border: 1px solid #edf2f7;
            border-radius: 16px;
            padding: 22px;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.025);

            transition: 0.2s;
        }

        .questao:hover {
            border-color: #e4e9ee;
        }

        .numero-questao {
            width: 34px;
            height: 34px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 10px;

            font-size: 13px;
            font-weight: 800;

            flex-shrink: 0;
        }

        .questao-topo {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 15px;
        }

        .pergunta {
            margin: 4px 0 0;

            color: #071b35;
            font-size: 14px;
            font-weight: 700;
            line-height: 1.6;
        }

        .resposta {
            width: 100%;
            min-height: 48px;

            border: 1px solid #e1e7ed;
            border-radius: 10px;

            padding: 12px 14px;

            outline: none;

            color: #2d3436;
            font-family: 'Inter', sans-serif;
            font-size: 13px;

            resize: vertical;

            transition: 0.2s;
        }

        .resposta:focus {
            border-color: #d92f3d;
            box-shadow: 0 0 0 3px rgba(217, 47, 61, 0.08);
        }

        .resposta-correta {
            border-color: #39a96b !important;
            background: #f1fbf5 !important;
        }

        .resposta-errada {
            border-color: #d92f3d !important;
            background: #fff5f5 !important;
        }

        .feedback {
            display: none;
            margin-top: 10px;
            padding: 10px 12px;

            border-radius: 9px;

            font-size: 12px;
            line-height: 1.5;
        }

        .feedback-correto {
            display: block;
            background: #f1fbf5;
            color: #278052;
        }

        .feedback-errado {
            display: block;
            background: #fff3f3;
            color: #c62838;
        }

        /* FINALIZAR */

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
            border: none;

            padding: 13px 25px;

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

        /* RESULTADO */

        #resultado {
            display: none;
            margin-top: 20px;
            padding: 25px;

            background: #f8fafc;

            border: 1px solid #edf2f7;
            border-radius: 15px;
        }

        .resultado-icone {
            font-size: 28px;
            color: #d92f3d;
            margin-bottom: 10px;
        }

        .resultado-titulo {
            margin: 0;
            color: #071b35;
            font-size: 20px;
            font-weight: 800;
        }

        .nota {
            margin-top: 8px;
            color: #627991;
            font-size: 14px;
        }

        .btn-tentar {
            margin-top: 15px;

            padding: 10px 18px;

            border: none;
            border-radius: 10px;

            background: #071b35;
            color: white;

            font-size: 12px;
            font-weight: 700;

            cursor: pointer;
        }

        /* RESPONSIVO */

        @media (max-width: 700px) {

            .container-principal {
                padding: 25px 15px 45px;
            }

            .titulo-principal {
                font-size: 25px;
            }

            .exercicio-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .botoes-topo {
                flex-wrap: wrap;
            }

            .texto-leitura,
            .questao,
            .area-finalizar {
                padding: 20px;
            }

        }

    </style>

</head>

<body>

<div class="container-principal">

    <!-- TOPO -->

    <div class="topo">

        <div class="botoes-topo">

            <a href="{{ route('materiaisPortugues') }}" class="voltar">
                <i class="fa-solid fa-arrow-left"></i>
                Voltar para materiais
            </a>

            <a href="{{ route('listaPortuguesPdf') }}" class="btn-baixar">
                <i class="fa-solid fa-download"></i>
                Baixar
            </a>

        </div>

        <div class="titulo-pequeno">
            ATIVIDADE DE PORTUGUÊS
        </div>

        <h1 class="titulo-principal">
            Lista — Interpretação de Texto
        </h1>

        <p class="subtitulo">
            Leia o texto com atenção e responda às questões abaixo.
        </p>

    </div>


    <!-- CABEÇALHO -->

    <div class="exercicio-header">

        <div class="header-info">

            <div class="icone-exercicio">
                <i class="fa-solid fa-book-open"></i>
            </div>

            <div>

                <h2>
                    Interpretação de Texto
                </h2>

                <p>
                    Leia, interprete e responda às questões.
                </p>

            </div>

        </div>

        <div class="contador">
            10 questões
        </div>

    </div>


    <!-- TEXTO -->

    <div class="texto-leitura">

        <div class="texto-label">
            TEXTO PARA LEITURA
        </div>

        <h3>
            O valor das pequenas atitudes
        </h3>

        <p>
            Muitas vezes, acreditamos que grandes mudanças dependem de
            grandes ações. No entanto, pequenas atitudes realizadas todos
            os dias também podem transformar a nossa realidade.
        </p>

        <p>
            Ajudar uma pessoa, respeitar as diferenças, cuidar do ambiente
            e tratar os outros com educação são exemplos de atitudes simples
            que podem fazer diferença na sociedade.
        </p>

        <p>
            Quando cada pessoa compreende que suas ações podem influenciar
            outras pessoas, percebe que a responsabilidade pela construção
            de um mundo melhor não pertence apenas aos governos ou às
            instituições. Ela também começa nas escolhas feitas no
            cotidiano.
        </p>

        <p>
            Por isso, atitudes aparentemente pequenas podem produzir
            resultados importantes quando são praticadas de maneira
            constante e consciente.
        </p>

    </div>


    <!-- QUESTÕES -->

    <div class="questoes">


        <!-- QUESTÃO 1 -->

        <div class="questao">

            <div class="questao-topo">

                <div class="numero-questao">
                    1
                </div>

                <div class="pergunta">
                    Qual é o tema principal do texto?
                </div>

            </div>

            <textarea
                class="resposta"
                id="q1"
                placeholder="Digite sua resposta..."
            ></textarea>

            <div class="feedback" id="feedback1"></div>

        </div>


        <!-- QUESTÃO 2 -->

        <div class="questao">

            <div class="questao-topo">

                <div class="numero-questao">
                    2
                </div>

                <div class="pergunta">
                    Segundo o texto, grandes mudanças dependem apenas de grandes ações?
                </div>

            </div>

            <textarea
                class="resposta"
                id="q2"
                placeholder="Digite sua resposta..."
            ></textarea>

            <div class="feedback" id="feedback2"></div>

        </div>


        <!-- QUESTÃO 3 -->

        <div class="questao">

            <div class="questao-topo">

                <div class="numero-questao">
                    3
                </div>

                <div class="pergunta">
                    Cite duas pequenas atitudes mencionadas no texto.
                </div>

            </div>

            <textarea
                class="resposta"
                id="q3"
                placeholder="Digite sua resposta..."
            ></textarea>

            <div class="feedback" id="feedback3"></div>

        </div>


        <!-- QUESTÃO 4 -->

        <div class="questao">

            <div class="questao-topo">

                <div class="numero-questao">
                    4
                </div>

                <div class="pergunta">
                    Quem, de acordo com o texto, é responsável pela construção de um mundo melhor?
                </div>

            </div>

            <textarea
                class="resposta"
                id="q4"
                placeholder="Digite sua resposta..."
            ></textarea>

            <div class="feedback" id="feedback4"></div>

        </div>


        <!-- QUESTÃO 5 -->

        <div class="questao">

            <div class="questao-topo">

                <div class="numero-questao">
                    5
                </div>

                <div class="pergunta">
                    Por que as pequenas atitudes podem produzir resultados importantes?
                </div>

            </div>

            <textarea
                class="resposta"
                id="q5"
                placeholder="Digite sua resposta..."
            ></textarea>

            <div class="feedback" id="feedback5"></div>

        </div>


        <!-- QUESTÃO 6 -->

        <div class="questao">

            <div class="questao-topo">

                <div class="numero-questao">
                    6
                </div>

                <div class="pergunta">
                    O texto apresenta uma visão positiva ou negativa sobre pequenas atitudes? Explique.
                </div>

            </div>

            <textarea
                class="resposta"
                id="q6"
                placeholder="Digite sua resposta..."
            ></textarea>

            <div class="feedback" id="feedback6"></div>

        </div>


        <!-- QUESTÃO 7 -->

        <div class="questao">

            <div class="questao-topo">

                <div class="numero-questao">
                    7
                </div>

                <div class="pergunta">
                    Qual é o sentido da palavra “cotidiano” no texto?
                </div>

            </div>

            <textarea
                class="resposta"
                id="q7"
                placeholder="Digite sua resposta..."
            ></textarea>

            <div class="feedback" id="feedback7"></div>

        </div>


        <!-- QUESTÃO 8 -->

        <div class="questao">

            <div class="questao-topo">

                <div class="numero-questao">
                    8
                </div>

                <div class="pergunta">
                    O que significa dizer que nossas ações podem influenciar outras pessoas?
                </div>

            </div>

            <textarea
                class="resposta"
                id="q8"
                placeholder="Digite sua resposta..."
            ></textarea>

            <div class="feedback" id="feedback8"></div>

        </div>


        <!-- QUESTÃO 9 -->

        <div class="questao">

            <div class="questao-topo">

                <div class="numero-questao">
                    9
                </div>

                <div class="pergunta">
                    Qual mensagem o autor deseja transmitir ao leitor?
                </div>

            </div>

            <textarea
                class="resposta"
                id="q9"
                placeholder="Digite sua resposta..."
            ></textarea>

            <div class="feedback" id="feedback9"></div>

        </div>


        <!-- QUESTÃO 10 -->

        <div class="questao">

            <div class="questao-topo">

                <div class="numero-questao">
                    10
                </div>

                <div class="pergunta">
                    Dê um exemplo de uma atitude simples que pode contribuir para melhorar a sociedade.
                </div>

            </div>

            <textarea
                class="resposta"
                id="q10"
                placeholder="Digite sua resposta..."
            ></textarea>

            <div class="feedback" id="feedback10"></div>

        </div>


    </div>


    <!-- FINALIZAR -->

    <div class="area-finalizar">

        <button class="btn-finalizar" onclick="corrigirAtividade()">
            <i class="fa-solid fa-check"></i>
            Finalizar atividade
        </button>

        <div id="resultado">

            <div class="resultado-icone">
                <i class="fa-solid fa-circle-check"></i>
            </div>

            <h3 class="resultado-titulo">
                Atividade finalizada!
            </h3>

            <div class="nota" id="nota"></div>

            <button class="btn-tentar" onclick="tentarNovamente()">
                Tentar novamente
            </button>

        </div>

    </div>

</div>


<script>

function normalizar(texto) {

    return texto
        .toLowerCase()
        .normalize("NFD")
        .replace(/[\u0300-\u036f]/g, "")
        .trim();

}


function contemAlguma(texto, palavras) {

    const resposta = normalizar(texto);

    return palavras.some(function(palavra) {
        return resposta.includes(normalizar(palavra));
    });

}


function corrigirAtividade() {

    let acertos = 0;

    const respostas = [];

    for (let i = 1; i <= 10; i++) {

        respostas[i] = document.getElementById("q" + i).value;

    }


    // QUESTÃO 1

    if (
        contemAlguma(respostas[1], [
            "pequenas atitudes",
            "valor das pequenas atitudes",
            "importancia das pequenas atitudes",
            "mudanca por meio de pequenas atitudes"
        ])
    ) {

        acertos++;

        marcarCorreta(1, "Resposta correta!");

    } else {

        marcarErrada(1, "O texto destaca a importância das pequenas atitudes.");

    }


    // QUESTÃO 2

    if (
        contemAlguma(respostas[2], [
            "nao",
            "não",
            "pequenas acoes",
            "pequenas atitudes"
        ])
    ) {

        acertos++;

        marcarCorreta(2, "Resposta correta!");

    } else {

        marcarErrada(2, "Não. O texto afirma que pequenas atitudes também podem gerar mudanças.");

    }


    // QUESTÃO 3

    if (
        contemAlguma(respostas[3], [
            "ajudar",
            "respeitar",
            "cuidar",
            "educacao",
            "educação"
        ])
    ) {

        acertos++;

        marcarCorreta(3, "Resposta correta!");

    } else {

        marcarErrada(3, "Exemplos: ajudar uma pessoa, respeitar as diferenças, cuidar do ambiente e tratar os outros com educação.");

    }


    // QUESTÃO 4

    if (
        contemAlguma(respostas[4], [
            "cada pessoa",
            "as pessoas",
            "todos",
            "sociedade"
        ])
    ) {

        acertos++;

        marcarCorreta(4, "Resposta correta!");

    } else {

        marcarErrada(4, "A responsabilidade também pertence a cada pessoa.");

    }


    // QUESTÃO 5

    if (
        contemAlguma(respostas[5], [
            "constante",
            "praticadas de maneira constante",
            "continuamente",
            "todos os dias",
            "frequencia"
        ])
    ) {

        acertos++;

        marcarCorreta(5, "Resposta correta!");

    } else {

        marcarErrada(5, "As atitudes podem gerar resultados importantes quando praticadas de maneira constante e consciente.");

    }


    // QUESTÃO 6

    if (
        contemAlguma(respostas[6], [
            "positiva",
            "positivo",
            "importantes",
            "podem transformar",
            "podem fazer diferenca"
        ])
    ) {

        acertos++;

        marcarCorreta(6, "Resposta correta!");

    } else {

        marcarErrada(6, "A visão apresentada é positiva, pois o texto mostra que pequenas atitudes podem fazer diferença.");

    }


    // QUESTÃO 7

    if (
        contemAlguma(respostas[7], [
            "dia a dia",
            "diaadia",
            "todos os dias",
            "vida diaria",
            "vida diária",
            "rotina"
        ])
    ) {

        acertos++;

        marcarCorreta(7, "Resposta correta!");

    } else {

        marcarErrada(7, "“Cotidiano” significa aquilo que acontece no dia a dia.");

    }


    // QUESTÃO 8

    if (
        contemAlguma(respostas[8], [
            "influenciar",
            "servir de exemplo",
            "afetar",
            "mudar o comportamento",
            "outras pessoas"
        ])
    ) {

        acertos++;

        marcarCorreta(8, "Resposta correta!");

    } else {

        marcarErrada(8, "Nossas atitudes podem influenciar o comportamento e as escolhas de outras pessoas.");

    }


    // QUESTÃO 9

    if (
        contemAlguma(respostas[9], [
            "pequenas atitudes",
            "cada pessoa",
            "mundo melhor",
            "responsabilidade",
            "atitudes simples"
        ])
    ) {

        acertos++;

        marcarCorreta(9, "Resposta correta!");

    } else {

        marcarErrada(9, "A mensagem principal é que atitudes simples e conscientes podem contribuir para um mundo melhor.");

    }


    // QUESTÃO 10

    if (
        contemAlguma(respostas[10], [
            "ajudar",
            "respeitar",
            "cuidar",
            "reciclar",
            "educacao",
            "educação",
            "preservar",
            "doar"
        ])
    ) {

        acertos++;

        marcarCorreta(10, "Resposta correta!");

    } else {

        marcarErrada(10, "Exemplos: ajudar alguém, respeitar as diferenças ou cuidar do ambiente.");

    }


    const nota = (acertos / 10) * 10;

    document.getElementById("resultado").style.display = "block";

    document.getElementById("nota").innerHTML =
        "<strong>Você acertou " +
        acertos +
        " de 10 questões.</strong><br>" +
        "Nota: " +
        nota.toFixed(1) +
        " / 10";

    document.getElementById("resultado").scrollIntoView({
        behavior: "smooth",
        block: "center"
    });

}


function marcarCorreta(numero, mensagem) {

    const campo = document.getElementById("q" + numero);
    const feedback = document.getElementById("feedback" + numero);

    campo.classList.remove("resposta-errada");
    campo.classList.add("resposta-correta");

    feedback.className = "feedback feedback-correto";

    feedback.innerHTML =
        '<i class="fa-solid fa-circle-check"></i> ' +
        mensagem;

}


function marcarErrada(numero, mensagem) {

    const campo = document.getElementById("q" + numero);
    const feedback = document.getElementById("feedback" + numero);

    campo.classList.remove("resposta-correta");
    campo.classList.add("resposta-errada");

    feedback.className = "feedback feedback-errado";

    feedback.innerHTML =
        '<i class="fa-solid fa-circle-xmark"></i> ' +
        mensagem;

}


function tentarNovamente() {

    for (let i = 1; i <= 10; i++) {

        const campo = document.getElementById("q" + i);
        const feedback = document.getElementById("feedback" + i);

        campo.value = "";

        campo.classList.remove(
            "resposta-correta",
            "resposta-errada"
        );

        feedback.style.display = "none";

    }

    document.getElementById("resultado").style.display = "none";

    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });

}

</script>

</body>
</html>