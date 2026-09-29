<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Visualizar Material - Matemática | SIFE</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">

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
            background: #f4f7f9;
            font-family: 'Inter', sans-serif;
            color: #071b35;
        }

        .container-principal {
            max-width: 1250px;
            margin: 0 auto;
            padding: 25px 28px 70px;
        }

        /* VOLTAR */

        .voltar {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #758ba3;
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 25px;
            transition: .2s;
        }

        .voltar:hover {
            color: #d92f3d;
        }

        /* CABEÇALHO */

        .cabecalho {
            margin-bottom: 25px;
        }

        .titulo-pequeno {
            color: #60758c;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 1.5px;
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

        /* CARD PRINCIPAL */

        .visualizacao {
            background: white;
            border-radius: 28px;
            box-shadow: 0 8px 30px rgba(15, 42, 70, .05);
            overflow: hidden;
        }

        /* TOPO DO MATERIAL */

        .material-cabecalho {
            padding: 28px 32px;
            border-bottom: 1px solid #edf1f5;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .material-info-topo {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .icone-material {
            width: 62px;
            height: 62px;
            border-radius: 17px;
            background: #f9dfe1;
            color: #d92f3d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
        }

        .material-nome {
            margin: 0 0 5px;
            font-size: 21px;
            font-weight: 800;
        }

        .material-descricao {
            margin: 0;
            color: #91a6bb;
            font-size: 13px;
            font-weight: 600;
        }

        .botoes-topo {
            display: flex;
            gap: 10px;
        }

        .btn-topo {
            height: 43px;
            padding: 0 17px;
            border-radius: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 800;
            transition: .2s;
        }

        .btn-voltar-material {
            background: #f3f6f9;
            color: #627991;
        }

        .btn-voltar-material:hover {
            background: #e8edf2;
            color: #071b35;
        }

        .btn-download {
            background: #d92f3d;
            color: white;
        }

        .btn-download:hover {
            background: #b9212e;
            color: white;
        }

        /* INFORMAÇÕES */

        .informacoes {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            padding: 22px 32px;
            background: #fafbfd;
            border-bottom: 1px solid #edf1f5;
        }

        .informacao {
            background: white;
            border-radius: 12px;
            padding: 11px 15px;
            min-width: 130px;
        }

        .informacao-label {
            display: block;
            color: #9aafc4;
            font-size: 10px;
            font-weight: 800;
            margin-bottom: 4px;
        }

        .informacao-valor {
            color: #243b55;
            font-size: 12px;
            font-weight: 800;
        }

        /* ÁREA DO DOCUMENTO */

        .documento-area {
            padding: 35px;
        }

        .documento {
            max-width: 850px;
            min-height: 900px;
            margin: auto;
            background: white;
            border: 1px solid #e5eaf0;
            border-radius: 8px;
            padding: 55px 65px;
            box-shadow: 0 5px 20px rgba(15, 42, 70, .06);
        }

        .documento h2 {
            font-size: 27px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .linha-vermelha {
            width: 60px;
            height: 4px;
            background: #d92f3d;
            border-radius: 5px;
            margin-bottom: 30px;
        }

        .documento h3 {
            font-size: 19px;
            font-weight: 800;
            margin-top: 30px;
            margin-bottom: 12px;
        }

        .documento p {
            color: #52677d;
            font-size: 14px;
            line-height: 1.8;
        }

        .formula {
            background: #fff3f3;
            border-left: 4px solid #d92f3d;
            border-radius: 8px;
            padding: 18px 20px;
            margin: 20px 0;
            font-size: 17px;
            font-weight: 800;
            color: #243b55;
        }

        .exemplo {
            background: #f7f9fb;
            border-radius: 12px;
            padding: 20px;
            margin-top: 15px;
        }

        .exemplo strong {
            color: #071b35;
        }

        .exemplo p {
            margin: 8px 0 0;
        }

        /* RODAPÉ DO DOCUMENTO */

        .documento-footer {
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid #e5eaf0;
            color: #9aafc4;
            font-size: 12px;
            text-align: center;
        }

        /* ACESSIBILIDADE */

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
            box-shadow: 0 5px 15px rgba(0,0,0,.15);
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
            box-shadow: 0 4px 15px rgba(0,0,0,.2);
            cursor: pointer;
            z-index: 1000;
        }

        /* RESPONSIVIDADE */

        @media(max-width: 800px) {

            .container-principal {
                padding: 20px 15px 60px;
            }

            .titulo-principal {
                font-size: 28px;
            }

            .material-cabecalho {
                flex-direction: column;
                align-items: flex-start;
            }

            .botoes-topo {
                width: 100%;
            }

            .btn-topo {
                flex: 1;
            }

            .documento-area {
                padding: 15px;
            }

            .documento {
                padding: 30px 25px;
                min-height: auto;
            }

        }

        @media(max-width: 500px) {

            .material-info-topo {
                align-items: flex-start;
            }

            .icone-material {
                width: 52px;
                height: 52px;
                min-width: 52px;
            }

            .material-nome {
                font-size: 17px;
            }

            .informacao {
                width: 100%;
            }

        }

    </style>
</head>

<body>

<div class="container-principal">

    <!-- VOLTAR -->

    <a href="{{ route('materiaisMatematica') }}" class="voltar">
        <i class="fa-solid fa-arrow-left"></i>
        Voltar para materiais
    </a>


    <!-- CABEÇALHO -->

    <div class="cabecalho">

        <div class="titulo-pequeno">
            VISUALIZAÇÃO DE MATERIAL
        </div>

        <h1 class="titulo-principal">
            Material de Matemática
        </h1>

        <p class="subtitulo">
            Visualize o conteúdo disponibilizado pelo seu professor.
        </p>

    </div>


    <!-- VISUALIZAÇÃO -->

    <div class="visualizacao">


        <!-- CABEÇALHO DO MATERIAL -->

        <div class="material-cabecalho">

            <div class="material-info-topo">

                <div class="icone-material">
                    <i class="fa-solid fa-file-pdf"></i>
                </div>

                <div>

                    <h2 class="material-nome">
                        Apostila — Funções do 1º Grau
                    </h2>

                    <p class="material-descricao">
                        Conteúdo completo sobre funções do primeiro grau.
                    </p>

                </div>

            </div>


            <div class="botoes-topo">


                <a
                    href="#"
                    class="btn-topo btn-download">

                    <i class="fa-solid fa-download"></i>
                    Baixar

                </a>

            </div>

        </div>


        <!-- INFORMAÇÕES -->

        <div class="informacoes">

            <div class="informacao">

                <span class="informacao-label">
                    PROFESSOR
                </span>

                <span class="informacao-valor">
                    Prof. Marcos Oliveira
                </span>

            </div>


            <div class="informacao">

                <span class="informacao-label">
                    PUBLICADO
                </span>

                <span class="informacao-valor">
                    25/08/2026
                </span>

            </div>


            <div class="informacao">

                <span class="informacao-label">
                    FORMATO
                </span>

                <span class="informacao-valor">
                    PDF
                </span>

            </div>


            <div class="informacao">

                <span class="informacao-label">
                    TAMANHO
                </span>

                <span class="informacao-valor">
                    2,4 MB
                </span>

            </div>

        </div>


        <!-- DOCUMENTO -->

        <div class="documento-area">

            <div class="documento">

                <h2>
                    Funções do 1º Grau
                </h2>

                <div class="linha-vermelha"></div>


                <h3>
                    1. Introdução
                </h3>

                <p>
                    Uma função do primeiro grau é uma relação matemática
                    representada pela expressão:
                </p>


                <div class="formula">

                    f(x) = ax + b

                </div>


                <p>
                    Nessa expressão, <strong>a</strong> e
                    <strong>b</strong> são números reais e
                    <strong>a ≠ 0</strong>.
                    O valor de <strong>a</strong> representa o coeficiente
                    angular da função, enquanto <strong>b</strong>
                    representa o coeficiente linear.
                </p>


                <h3>
                    2. Coeficiente angular
                </h3>

                <p>
                    O coeficiente angular indica a inclinação da reta
                    representada pela função no plano cartesiano.
                </p>


                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Na função f(x) = 2x + 3, o número 2 é o
                        coeficiente angular.
                    </p>

                </div>


                <h3>
                    3. Coeficiente linear
                </h3>

                <p>
                    O coeficiente linear corresponde ao ponto em que
                    a reta intercepta o eixo Y.
                </p>


                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Na função f(x) = 2x + 3, o número 3 é o
                        coeficiente linear.
                    </p>

                </div>


                <h3>
                    4. Exemplo de resolução
                </h3>

                <p>
                    Considere a função:
                </p>


                <div class="formula">

                    f(x) = 3x + 2

                </div>


                <p>
                    Para encontrar o valor da função quando
                    x = 4, basta substituir o valor de x:
                </p>


                <div class="formula">

                    f(4) = 3 · 4 + 2
                    <br>
                    f(4) = 12 + 2
                    <br>
                    <strong>f(4) = 14</strong>

                </div>


                <h3>
                    5. Representação gráfica
                </h3>

                <p>
                    O gráfico de uma função do primeiro grau é
                    representado por uma reta. Dependendo do valor
                    do coeficiente angular, essa reta poderá ser
                    crescente ou decrescente.
                </p>


                <h3>
                    6. Resumo
                </h3>

                <p>
                    Para resolver problemas envolvendo funções do
                    primeiro grau, é importante identificar os
                    coeficientes, compreender a relação entre as
                    variáveis e saber interpretar a representação
                    gráfica da função.
                </p>


                <div class="documento-footer">

                    Material didático — Matemática<br>

                    SIFE — Sistema Inteligente de Frequência Escolar

                </div>

            </div>

        </div>

    </div>

</div>


<!-- ACESSIBILIDADE -->

<div class="vlibras" title="Acessibilidade">

    <i class="fa-solid fa-hands"></i>

</div>


<div class="acessibilidade" title="Opções de acessibilidade">

    <i class="fa-solid fa-universal-access"></i>

</div>


</body>
</html>
```
