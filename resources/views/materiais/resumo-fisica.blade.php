<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resumo — Dinâmica | SIFE</title>

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

        /* CARDS */

        .secao {
            background: white;
            border-radius: 18px;
            padding: 28px;
            margin-bottom: 20px;
            border: 1px solid #edf2f7;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
        }

        .secao-titulo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 18px;
        }

        .icone {
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff3f3;
            color: #d92f3d;
            border-radius: 12px;
            font-size: 17px;
            flex-shrink: 0;
        }

        .secao h2 {
            margin: 0;
            color: #071b35;
            font-size: 20px;
            font-weight: 800;
        }

        .secao h3 {
            margin: 22px 0 8px;
            color: #071b35;
            font-size: 16px;
            font-weight: 800;
        }

        .secao p {
            margin: 8px 0;
            color: #627991;
            font-size: 13px;
            line-height: 1.8;
        }

        /* LISTA */

        .lista {
            margin: 12px 0;
            padding-left: 22px;
            color: #627991;
            font-size: 13px;
            line-height: 1.8;
        }

        .lista li {
            margin-bottom: 6px;
        }

        .lista li::marker {
            color: #d92f3d;
        }

        /* FÓRMULAS */

        .formula {
            margin: 18px 0;
            padding: 17px;
            background: #f8fafc;
            border: 1px solid #edf2f7;
            border-radius: 12px;
            text-align: center;
            color: #071b35;
            font-size: 20px;
            font-weight: 800;
        }

        .formula-pequena {
            font-size: 16px;
        }

        /* EXEMPLOS */

        .exemplo {
            margin-top: 18px;
            padding: 17px 18px;
            background: #fff8f8;
            border-left: 4px solid #d92f3d;
            border-radius: 10px;
        }

        .exemplo strong {
            color: #071b35;
        }

        .exemplo p {
            margin: 6px 0;
        }

        /* DESTAQUE */

        .destaque {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-top: 18px;
            padding: 15px 16px;
            background: #f3f6f9;
            border-radius: 11px;
            color: #627991;
            font-size: 12px;
            line-height: 1.7;
        }

        .destaque i {
            color: #d92f3d;
            margin-top: 2px;
        }

        /* GRID */

        .grid-conceitos {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-top: 15px;
        }

        .card-conceito {
            padding: 17px;
            background: #f8fafc;
            border: 1px solid #edf2f7;
            border-radius: 12px;
        }

        .card-conceito strong {
            display: block;
            color: #071b35;
            font-size: 13px;
            margin-bottom: 6px;
        }

        .card-conceito span {
            color: #627991;
            font-size: 12px;
            line-height: 1.6;
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
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #edf2f7;
            color: #627991;
        }

        tr:last-child td {
            border-bottom: none;
        }

        /* RESPONSIVO */

        @media (max-width: 700px) {

            .container-principal {
                padding: 25px 15px 45px;
            }

            .titulo-principal {
                font-size: 25px;
            }

            .secao {
                padding: 20px;
            }

            .grid-conceitos {
                grid-template-columns: 1fr;
            }

            .botoes-acoes {
                flex-direction: column;
                align-items: stretch;
            }

            .btn-voltar,
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

        <div class="botoes-acoes">

            <a href="{{ route('materiais.fisica') }}" class="btn-voltar">
                <i class="fa-solid fa-arrow-left"></i>
                Voltar para materiais
            </a>

            <a href="{{ route('resumoFisicaPdf') }}" class="btn-baixar">
                <i class="fa-solid fa-download"></i>
                Baixar
            </a>

        </div>

        <div class="titulo-pequeno">
            RESUMO DE FÍSICA
        </div>

        <h1 class="titulo-principal">
            Dinâmica
        </h1>

        <p class="subtitulo">
            Revise os principais conceitos de Dinâmica, forças e
            Leis de Newton de forma simples e organizada.
        </p>

    </div>


    <!-- 1. O QUE É DINÂMICA -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-gears"></i>
            </div>

            <h2>1. O que é Dinâmica?</h2>

        </div>

        <p>
            A Dinâmica é a área da Mecânica que estuda as causas dos
            movimentos dos corpos. Ela analisa principalmente as
            forças que atuam sobre os objetos e como essas forças
            podem alterar seu movimento.
        </p>

        <div class="destaque">

            <i class="fa-solid fa-circle-info"></i>

            <span>
                Enquanto a <strong>Cinemática</strong> descreve o movimento,
                a <strong>Dinâmica</strong> procura explicar suas causas.
            </span>

        </div>

    </section>


    <!-- 2. FORÇA -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-hand"></i>
            </div>

            <h2>2. Força</h2>

        </div>

        <p>
            Força é uma interação capaz de alterar o estado de movimento
            de um corpo ou provocar uma deformação.
        </p>

        <p>
            A unidade de força no Sistema Internacional é o
            <strong>newton (N)</strong>.
        </p>

        <div class="destaque">

            <i class="fa-solid fa-lightbulb"></i>

            <span>
                Uma força possui <strong>intensidade, direção e sentido</strong>.
                Por isso, ela é uma grandeza vetorial.
            </span>

        </div>

    </section>


    <!-- 3. PRIMEIRA LEI -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-circle"></i>
            </div>

            <h2>3. Primeira Lei de Newton — Inércia</h2>

        </div>

        <p>
            A Primeira Lei de Newton é conhecida como
            <strong>Lei da Inércia</strong>.
        </p>

        <p>
            Ela afirma que um corpo tende a permanecer em repouso
            ou em movimento retilíneo uniforme quando a força resultante
            sobre ele é nula.
        </p>

        <div class="formula">
            F<sub>resultante</sub> = 0
        </div>

        <div class="exemplo">

            <strong>Exemplo:</strong>

            <p>
                Quando um ônibus freia rapidamente, os passageiros
                tendem a se deslocar para frente. Isso acontece devido
                à tendência do corpo de manter seu movimento.
            </p>

        </div>

    </section>


    <!-- 4. SEGUNDA LEI -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-arrow-trend-up"></i>
            </div>

            <h2>4. Segunda Lei de Newton</h2>

        </div>

        <p>
            A Segunda Lei de Newton relaciona a força resultante,
            a massa e a aceleração de um corpo.
        </p>

        <div class="formula">
            F = m · a
        </div>

        <p>
            Onde:
        </p>

        <ul class="lista">

            <li><strong>F</strong> = força resultante, em newtons (N);</li>
            <li><strong>m</strong> = massa, em quilogramas (kg);</li>
            <li><strong>a</strong> = aceleração, em m/s².</li>

        </ul>

        <div class="exemplo">

            <strong>Exemplo:</strong>

            <p>
                Um objeto possui massa de 5 kg e aceleração de 4 m/s².
                Qual é a força resultante?
            </p>

            <p>
                F = 5 · 4
            </p>

            <p>
                <strong>F = 20 N</strong>
            </p>

        </div>

    </section>


    <!-- 5. TERCEIRA LEI -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-arrows-left-right"></i>
            </div>

            <h2>5. Terceira Lei de Newton — Ação e Reação</h2>

        </div>

        <p>
            A Terceira Lei de Newton afirma que para toda ação existe
            uma reação de mesma intensidade e direção, mas em sentido contrário.
        </p>

        <div class="formula">
            F<sub>ação</sub> = −F<sub>reação</sub>
        </div>

        <div class="exemplo">

            <strong>Exemplo:</strong>

            <p>
                Quando uma pessoa empurra uma parede, ela exerce uma
                força sobre a parede. A parede exerce uma força de
                reação sobre a pessoa.
            </p>

        </div>

        <div class="destaque">

            <i class="fa-solid fa-circle-info"></i>

            <span>
                As forças de ação e reação atuam em
                <strong>corpos diferentes</strong>.
            </span>

        </div>

    </section>


    <!-- 6. PESO -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-weight-hanging"></i>
            </div>

            <h2>6. Força Peso</h2>

        </div>

        <p>
            A força peso é a força gravitacional exercida pela Terra
            sobre um corpo.
        </p>

        <div class="formula">
            P = m · g
        </div>

        <p>
            Onde:
        </p>

        <ul class="lista">

            <li><strong>P</strong> = peso, em newtons (N);</li>
            <li><strong>m</strong> = massa, em quilogramas (kg);</li>
            <li><strong>g</strong> = aceleração da gravidade.</li>

        </ul>

        <div class="exemplo">

            <strong>Exemplo:</strong>

            <p>
                Um objeto possui massa de 10 kg. Considerando
                g = 10 m/s², qual é seu peso?
            </p>

            <p>
                P = 10 · 10
            </p>

            <p>
                <strong>P = 100 N</strong>
            </p>

        </div>

    </section>


    <!-- 7. NORMAL -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-table"></i>
            </div>

            <h2>7. Força Normal</h2>

        </div>

        <p>
            A força normal é uma força de contato exercida por uma
            superfície sobre um corpo apoiado nela.
        </p>

        <p>
            Ela é perpendicular à superfície de contato.
        </p>

        <div class="destaque">

            <i class="fa-solid fa-lightbulb"></i>

            <span>
                Em uma situação simples, com um objeto parado sobre
                uma superfície horizontal e sem outras forças verticais,
                a força normal pode ter o mesmo módulo que o peso.
            </span>

        </div>

    </section>


    <!-- 8. ATRITO -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-shoe-prints"></i>
            </div>

            <h2>8. Força de Atrito</h2>

        </div>

        <p>
            A força de atrito surge do contato entre superfícies e
            atua de modo a dificultar o movimento ou a tendência de movimento.
        </p>

        <p>
            O atrito pode ser classificado principalmente em:
        </p>

        <ul class="lista">

            <li>
                <strong>Atrito estático:</strong>
                atua quando não existe deslizamento entre as superfícies.
            </li>

            <li>
                <strong>Atrito cinético:</strong>
                atua quando existe deslizamento entre as superfícies.
            </li>

        </ul>

        <div class="exemplo">

            <strong>Exemplo:</strong>

            <p>
                Ao empurrar uma caixa sobre o chão, a força de atrito
                atua no sentido contrário ao movimento da caixa.
            </p>

        </div>

    </section>


    <!-- 9. RESULTANTE -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-calculator"></i>
            </div>

            <h2>9. Força Resultante</h2>

        </div>

        <p>
            A força resultante é a soma vetorial de todas as forças
            que atuam sobre um corpo.
        </p>

        <div class="formula">
            F<sub>R</sub> = ΣF
        </div>

        <p>
            Quando a força resultante é diferente de zero, o corpo
            apresenta aceleração.
        </p>

        <p>
            Quando a força resultante é igual a zero, a aceleração
            é nula.
        </p>

        <div class="destaque">

            <i class="fa-solid fa-circle-info"></i>

            <span>
                A força resultante determina a aceleração do corpo
                de acordo com a Segunda Lei de Newton.
            </span>

        </div>

    </section>


    <!-- 10. DIFERENÇA MASSA E PESO -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-scale-balanced"></i>
            </div>

            <h2>10. Massa × Peso</h2>

        </div>

        <div class="tabela-container">

            <table>

                <thead>

                    <tr>
                        <th>Massa</th>
                        <th>Peso</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>Quantidade de matéria de um corpo.</td>
                        <td>Força gravitacional que atua sobre o corpo.</td>
                    </tr>

                    <tr>
                        <td>Medida em quilogramas (kg).</td>
                        <td>Medido em newtons (N).</td>
                    </tr>

                    <tr>
                        <td>Não depende diretamente da gravidade local.</td>
                        <td>Depende da aceleração da gravidade.</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- 11. RESUMO RÁPIDO -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-book-open"></i>
            </div>

            <h2>11. Resumo rápido</h2>

        </div>

        <div class="grid-conceitos">

            <div class="card-conceito">

                <strong>Dinâmica</strong>

                <span>
                    Estuda as causas dos movimentos.
                </span>

            </div>

            <div class="card-conceito">

                <strong>Força</strong>

                <span>
                    Interação capaz de alterar o movimento ou deformar um corpo.
                </span>

            </div>

            <div class="card-conceito">

                <strong>1ª Lei</strong>

                <span>
                    Lei da Inércia.
                </span>

            </div>

            <div class="card-conceito">

                <strong>2ª Lei</strong>

                <span>
                    F = m · a.
                </span>

            </div>

            <div class="card-conceito">

                <strong>3ª Lei</strong>

                <span>
                    Toda ação possui uma reação de mesma intensidade e direção,
                    em sentido contrário.
                </span>

            </div>

            <div class="card-conceito">

                <strong>Peso</strong>

                <span>
                    P = m · g.
                </span>

            </div>

            <div class="card-conceito">

                <strong>Normal</strong>

                <span>
                    Força exercida pela superfície sobre o corpo.
                </span>

            </div>

            <div class="card-conceito">

                <strong>Atrito</strong>

                <span>
                    Força que se opõe ao movimento ou à tendência de movimento.
                </span>

            </div>

        </div>

    </section>


    <!-- 12. FÓRMULAS -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-square-root-variable"></i>
            </div>

            <h2>12. Fórmulas importantes</h2>

        </div>

        <div class="formula formula-pequena">
            F = m · a
        </div>

        <div class="formula formula-pequena">
            P = m · g
        </div>

        <div class="formula formula-pequena">
            F<sub>R</sub> = ΣF
        </div>

        <div class="formula formula-pequena">
            F<sub>ação</sub> = −F<sub>reação</sub>
        </div>

        <div class="destaque">

            <i class="fa-solid fa-lightbulb"></i>

            <span>
                <strong>Para resolver exercícios:</strong>
                identifique primeiro todas as forças que atuam sobre
                o corpo, determine a força resultante e então aplique
                a Segunda Lei de Newton.
            </span>

        </div>

    </section>


</div>

</body>

</html>