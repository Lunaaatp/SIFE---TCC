<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resumo — Ácidos e Bases | SIFE</title>

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
        }

        /* CARDS */

        .card-conteudo {
            background: white;
            border-radius: 18px;
            padding: 25px;
            margin-bottom: 18px;

            border: 1px solid #edf2f7;

            box-shadow:
                0 5px 18px rgba(0, 0, 0, 0.035);
        }

        .card-titulo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
        }

        .icone {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 11px;

            font-size: 17px;
            flex-shrink: 0;
        }

        .card-titulo h2 {
            margin: 0;
            color: #071b35;
            font-size: 18px;
            font-weight: 800;
        }

        .card-conteudo p {
            margin: 0 0 12px;

            color: #627991;
            font-size: 13px;
            line-height: 1.75;
        }

        .card-conteudo p:last-child {
            margin-bottom: 0;
        }

        /* DESTAQUE */

        .destaque {
            padding: 18px;
            margin-top: 15px;

            background: #fff5f5;
            border-left: 4px solid #d92f3d;

            border-radius: 10px;

            color: #627991;
            font-size: 13px;
            line-height: 1.7;
        }

        .destaque strong {
            color: #071b35;
        }

        /* TABELA */

        .tabela-container {
            overflow-x: auto;
            margin-top: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }

        th {
            background: #071b35;
            color: white;
            padding: 13px;
            text-align: left;
            font-weight: 700;
        }

        td {
            padding: 13px;
            border-bottom: 1px solid #edf2f7;
            color: #627991;
        }

        tr:last-child td {
            border-bottom: none;
        }

        /* EXEMPLOS */

        .exemplos {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-top: 15px;
        }

        .exemplo {
            background: #f8fafb;
            border: 1px solid #edf2f7;
            border-radius: 12px;
            padding: 16px;
        }

        .exemplo strong {
            display: block;
            color: #071b35;
            margin-bottom: 7px;
            font-size: 13px;
        }

        .formula {
            display: inline-block;
            padding: 7px 11px;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 8px;

            font-weight: 800;
            font-size: 13px;
        }

        /* ESCALA DE PH */

        .escala-ph {
            margin-top: 18px;
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }

        .ph-item {
            text-align: center;
            padding: 12px 5px;
            border-radius: 8px;

            background: #f3f6f9;
            color: #627991;

            font-size: 11px;
            font-weight: 700;
        }

        .ph-item strong {
            display: block;
            font-size: 15px;
            color: #071b35;
            margin-bottom: 3px;
        }

        /* LISTA */

        .lista {
            margin: 10px 0 0;
            padding-left: 20px;

            color: #627991;
            font-size: 13px;
            line-height: 1.8;
        }

        .lista li {
            margin-bottom: 5px;
        }

        /* RESUMO FINAL */

        .resumo-final {
            background: #071b35;
            color: white;

            border-radius: 18px;
            padding: 25px;

            margin-top: 20px;
        }

        .resumo-final h2 {
            margin: 0 0 15px;

            font-size: 18px;
            font-weight: 800;
        }

        .resumo-final ul {
            margin: 0;
            padding-left: 20px;

            color: #dce5ee;
            font-size: 13px;
            line-height: 1.9;
        }

        /* RESPONSIVO */

        @media (max-width: 700px) {

            .container-principal {
                padding: 25px 15px 45px;
            }

            .titulo-principal {
                font-size: 25px;
            }

            .card-conteudo {
                padding: 20px;
            }

            .exemplos {
                grid-template-columns: 1fr;
            }

            .escala-ph {
                grid-template-columns: repeat(4, 1fr);
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

            <a href="{{ route('materiais.quimica') }}" class="btn-voltar">
                <i class="fa-solid fa-arrow-left"></i>
                Voltar para materiais
            </a>

            <a href="{{ route('resumoQuimicaPdf') }}" class="btn-baixar">
                <i class="fa-solid fa-download"></i>
                Baixar
            </a>

        </div>

        <div class="titulo-pequeno">
            RESUMO DE QUÍMICA
        </div>

        <h1 class="titulo-principal">
            Ácidos e Bases
        </h1>

        <p class="subtitulo">
            Resumo sobre propriedades, conceitos e aplicações de ácidos e bases.
        </p>

    </div>


    <!-- INTRODUÇÃO -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-flask"></i>
            </div>

            <h2>1. O que são Ácidos e Bases?</h2>

        </div>

        <p>
            Ácidos e bases são classes importantes de substâncias químicas
            presentes em diversas situações do cotidiano, na indústria,
            nos alimentos e nos organismos vivos.
        </p>

        <p>
            Os ácidos geralmente estão associados à liberação de íons
            <strong>H⁺</strong> em solução aquosa, enquanto as bases estão
            relacionadas à presença ou formação de íons
            <strong>OH⁻</strong>.
        </p>

        <div class="destaque">

            <strong>Importante:</strong>
            A classificação de uma substância como ácida ou básica depende
            do conceito químico utilizado. Os conceitos de Arrhenius,
            Brønsted-Lowry e Lewis apresentam diferentes formas de explicar
            o comportamento dessas substâncias.

        </div>

    </section>


    <!-- ARRHENIUS -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-atom"></i>
            </div>

            <h2>2. Conceito de Arrhenius</h2>

        </div>

        <p>
            Segundo Arrhenius, <strong>ácido</strong> é uma substância que,
            em água, libera íons H⁺, aumentando sua concentração na solução.
        </p>

        <p>
            Já uma <strong>base</strong> é uma substância que, em água,
            libera íons OH⁻.
        </p>

        <div class="exemplos">

            <div class="exemplo">

                <strong>Exemplo de ácido</strong>

                <span class="formula">
                    HCl → H⁺ + Cl⁻
                </span>

            </div>

            <div class="exemplo">

                <strong>Exemplo de base</strong>

                <span class="formula">
                    NaOH → Na⁺ + OH⁻
                </span>

            </div>

        </div>

    </section>


    <!-- PROPRIEDADES -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-vial"></i>
            </div>

            <h2>3. Propriedades dos Ácidos</h2>

        </div>

        <ul class="lista">

            <li>Possuem pH geralmente menor que 7.</li>

            <li>Podem apresentar sabor azedo, embora nunca se deva provar uma substância química para identificá-la.</li>

            <li>Alteram a cor de determinados indicadores.</li>

            <li>Podem reagir com alguns metais, liberando gás hidrogênio.</li>

            <li>Reagem com bases em processos de neutralização.</li>

            <li>Alguns ácidos são bons condutores de eletricidade quando estão em solução aquosa.</li>

        </ul>

        <div class="destaque">

            <strong>Exemplos:</strong>
            ácido clorídrico (HCl), ácido sulfúrico (H₂SO₄),
            ácido acético (CH₃COOH) e ácido carbônico (H₂CO₃).

        </div>

    </section>


    <!-- BASES -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-flask-vial"></i>
            </div>

            <h2>4. Propriedades das Bases</h2>

        </div>

        <ul class="lista">

            <li>Possuem pH geralmente maior que 7.</li>

            <li>Podem apresentar sensação escorregadia ao toque, mas substâncias químicas nunca devem ser tocadas para identificação.</li>

            <li>Alteram a cor de determinados indicadores.</li>

            <li>Podem reagir com ácidos em reações de neutralização.</li>

            <li>Algumas bases são solúveis em água e formam soluções alcalinas.</li>

        </ul>

        <div class="destaque">

            <strong>Exemplos:</strong>
            hidróxido de sódio (NaOH), hidróxido de cálcio
            (Ca(OH)₂), hidróxido de magnésio (Mg(OH)₂) e
            hidróxido de potássio (KOH).

        </div>

    </section>


    <!-- PH -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-scale-balanced"></i>
            </div>

            <h2>5. Escala de pH</h2>

        </div>

        <p>
            O pH é uma medida utilizada para indicar o grau de acidez
            ou basicidade de uma solução aquosa.
        </p>

        <div class="escala-ph">

            <div class="ph-item">
                <strong>1</strong>
                Ácido
            </div>

            <div class="ph-item">
                <strong>2</strong>
                Ácido
            </div>

            <div class="ph-item">
                <strong>3</strong>
                Ácido
            </div>

            <div class="ph-item">
                <strong>4</strong>
                Ácido
            </div>

            <div class="ph-item">
                <strong>7</strong>
                Neutro
            </div>

            <div class="ph-item">
                <strong>10</strong>
                Básico
            </div>

            <div class="ph-item">
                <strong>14</strong>
                Básico
            </div>

        </div>

        <div class="destaque">

            <strong>Regra geral:</strong>

            <br>

            pH &lt; 7 → solução ácida

            <br>

            pH = 7 → solução neutra

            <br>

            pH &gt; 7 → solução básica

        </div>

    </section>


    <!-- INDICADORES -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-eye-dropper"></i>
            </div>

            <h2>6. Indicadores Ácido-Base</h2>

        </div>

        <p>
            Indicadores ácido-base são substâncias que mudam de cor
            dependendo do meio em que estão, ajudando a identificar
            se uma solução apresenta caráter ácido ou básico.
        </p>

        <div class="tabela-container">

            <table>

                <thead>

                    <tr>
                        <th>Indicador</th>
                        <th>Uso</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>Litmus</td>
                        <td>Indica caráter ácido ou básico por mudança de cor.</td>
                    </tr>

                    <tr>
                        <td>Fenolftaleína</td>
                        <td>É utilizada principalmente para indicar meios básicos.</td>
                    </tr>

                    <tr>
                        <td>Indicador universal</td>
                        <td>Permite estimar o pH por meio de uma escala de cores.</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- ÁCIDOS FORTES E FRACOS -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-bolt"></i>
            </div>

            <h2>7. Ácidos e Bases Fortes e Fracos</h2>

        </div>

        <p>
            A força de um ácido ou de uma base está relacionada ao seu
            grau de ionização ou dissociação em água.
        </p>

        <div class="exemplos">

            <div class="exemplo">

                <strong>Ácidos fortes</strong>

                <p>
                    Apresentam grande ionização em água.
                </p>

                <span class="formula">
                    HCl • HNO₃ • H₂SO₄
                </span>

            </div>

            <div class="exemplo">

                <strong>Ácidos fracos</strong>

                <p>
                    Apresentam ionização parcial em água.
                </p>

                <span class="formula">
                    CH₃COOH • H₂CO₃
                </span>

            </div>

            <div class="exemplo">

                <strong>Bases fortes</strong>

                <p>
                    Sofrem grande dissociação em água.
                </p>

                <span class="formula">
                    NaOH • KOH
                </span>

            </div>

            <div class="exemplo">

                <strong>Bases fracas</strong>

                <p>
                    Apresentam dissociação limitada em água.
                </p>

                <span class="formula">
                    NH₃
                </span>

            </div>

        </div>

    </section>


    <!-- NEUTRALIZAÇÃO -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-arrows-rotate"></i>
            </div>

            <h2>8. Reação de Neutralização</h2>

        </div>

        <p>
            A neutralização ocorre quando um ácido reage com uma base.
            De maneira geral, essa reação produz <strong>sal e água</strong>.
        </p>

        <div class="destaque">

            <strong>Exemplo:</strong>

            <br><br>

            HCl + NaOH → NaCl + H₂O

            <br><br>

            Ácido + Base → Sal + Água

        </div>

    </section>


    <!-- BRØNSTED -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-arrows-left-right"></i>
            </div>

            <h2>9. Conceito de Brønsted-Lowry</h2>

        </div>

        <p>
            De acordo com Brønsted-Lowry, um <strong>ácido</strong> é uma
            espécie química capaz de doar prótons (H⁺).
        </p>

        <p>
            Uma <strong>base</strong> é uma espécie química capaz de
            receber prótons (H⁺).
        </p>

        <div class="destaque">

            <strong>Para lembrar:</strong>

            <br>

            Ácido → doa H⁺

            <br>

            Base → recebe H⁺

        </div>

    </section>


    <!-- APLICAÇÕES -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-house"></i>
            </div>

            <h2>10. Ácidos e Bases no Cotidiano</h2>

        </div>

        <div class="tabela-container">

            <table>

                <thead>

                    <tr>
                        <th>Substância</th>
                        <th>Exemplo de aplicação</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>Ácido acético</td>
                        <td>Presente no vinagre.</td>
                    </tr>

                    <tr>
                        <td>Ácido cítrico</td>
                        <td>Encontrado em frutas cítricas.</td>
                    </tr>

                    <tr>
                        <td>Ácido clorídrico</td>
                        <td>Presente no suco gástrico.</td>
                    </tr>

                    <tr>
                        <td>Hidróxido de magnésio</td>
                        <td>Utilizado em alguns produtos antiácidos.</td>
                    </tr>

                    <tr>
                        <td>Hidróxido de sódio</td>
                        <td>Utilizado na produção de sabões e em processos industriais.</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- DIFERENÇA -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-code-compare"></i>
            </div>

            <h2>11. Ácidos × Bases</h2>

        </div>

        <div class="tabela-container">

            <table>

                <thead>

                    <tr>
                        <th>Ácidos</th>
                        <th>Bases</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>pH geralmente menor que 7</td>
                        <td>pH geralmente maior que 7</td>
                    </tr>

                    <tr>
                        <td>Arrhenius: liberam H⁺ em água</td>
                        <td>Arrhenius: liberam OH⁻ em água</td>
                    </tr>

                    <tr>
                        <td>Brønsted-Lowry: doam H⁺</td>
                        <td>Brønsted-Lowry: recebem H⁺</td>
                    </tr>

                    <tr>
                        <td>Reagem com bases</td>
                        <td>Reagem com ácidos</td>
                    </tr>

                    <tr>
                        <td>Participam de reações de neutralização</td>
                        <td>Participam de reações de neutralização</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- RESUMO PARA PROVA -->

    <section class="resumo-final">

        <h2>
            <i class="fa-solid fa-graduation-cap"></i>
            Resumo para a prova
        </h2>

        <ul>

            <li><strong>Ácido:</strong> em Arrhenius, libera H⁺ em água.</li>

            <li><strong>Base:</strong> em Arrhenius, libera OH⁻ em água.</li>

            <li><strong>Brønsted-Lowry:</strong> ácido doa H⁺ e base recebe H⁺.</li>

            <li><strong>pH &lt; 7:</strong> meio ácido.</li>

            <li><strong>pH = 7:</strong> meio neutro.</li>

            <li><strong>pH &gt; 7:</strong> meio básico.</li>

            <li><strong>Neutralização:</strong> ácido + base → sal + água.</li>

            <li><strong>Ácido forte:</strong> apresenta grande ionização em água.</li>

            <li><strong>Base forte:</strong> apresenta grande dissociação em água.</li>

            <li>Indicadores ácido-base podem mudar de cor de acordo com o pH.</li>

        </ul>

    </section>


</div>

</body>

</html>