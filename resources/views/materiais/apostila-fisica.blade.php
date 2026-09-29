<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Apostila — Cinemática | SIFE</title>

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

        .lista {
            margin: 12px 0;
            padding-left: 22px;
            color: #627991;
            font-size: 13px;
            line-height: 1.8;
        }

        .lista li {
            margin-bottom: 5px;
        }

        /* FÓRMULAS */

        .formula {
            margin: 18px 0;
            padding: 18px;
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
            padding: 18px;
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
            padding: 18px;
            margin-top: 15px;
            background: #f3f6f9;
            border-radius: 12px;
            color: #627991;
            font-size: 13px;
            line-height: 1.7;
        }

        .destaque i {
            color: #d92f3d;
            margin-right: 7px;
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

        /* RESUMO */

        .resumo-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-top: 15px;
        }

        .resumo-item {
            padding: 16px;
            background: #f8fafc;
            border-radius: 12px;
            border: 1px solid #edf2f7;
        }

        .resumo-item strong {
            display: block;
            color: #071b35;
            margin-bottom: 6px;
            font-size: 13px;
        }

        .resumo-item span {
            color: #627991;
            font-size: 12px;
            line-height: 1.6;
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

            .resumo-grid {
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

            <a href="{{ route('apostilaFisicaPdf') }}" class="btn-baixar">
                <i class="fa-solid fa-download"></i>
                Baixar
            </a>

        </div>

        <div class="titulo-pequeno">
            APOSTILA DE FÍSICA
        </div>

        <h1 class="titulo-principal">
            Cinemática
        </h1>

        <p class="subtitulo">
            Aprenda os principais conceitos relacionados ao movimento dos corpos,
            suas velocidades, acelerações e posições.
        </p>

    </div>


    <!-- 1. INTRODUÇÃO -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-person-running"></i>
            </div>

            <h2>1. O que é Cinemática?</h2>

        </div>

        <p>
            A Cinemática é a parte da Física que estuda o movimento dos corpos
            sem se preocupar com as causas que provocam esse movimento.
        </p>

        <p>
            Para estudar um movimento, analisamos grandezas como posição,
            deslocamento, tempo, velocidade e aceleração.
        </p>

        <div class="destaque">

            <i class="fa-solid fa-circle-info"></i>

            <strong>Importante:</strong>
            a Cinemática descreve como um corpo se movimenta.
            As causas do movimento são estudadas principalmente pela Dinâmica.

        </div>

    </section>


    <!-- 2. REFERENCIAL -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-location-dot"></i>
            </div>

            <h2>2. Referencial e posição</h2>

        </div>

        <p>
            Para determinar se um corpo está em movimento ou em repouso,
            precisamos escolher um referencial.
        </p>

        <p>
            Um corpo está em <strong>movimento</strong> quando sua posição
            muda em relação ao referencial escolhido.
        </p>

        <p>
            Um corpo está em <strong>repouso</strong> quando sua posição
            permanece constante em relação ao referencial.
        </p>

        <div class="exemplo">

            <strong>Exemplo:</strong>

            <p>
                Uma pessoa sentada dentro de um ônibus está em repouso
                em relação ao ônibus, mas está em movimento em relação
                a uma pessoa parada na rua.
            </p>

        </div>

    </section>


    <!-- 3. TRAJETÓRIA -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-route"></i>
            </div>

            <h2>3. Trajetória</h2>

        </div>

        <p>
            A trajetória é o caminho percorrido por um corpo durante seu movimento.
        </p>

        <p>
            Dependendo do caminho realizado, podemos ter diferentes tipos
            de trajetória.
        </p>

        <ul class="lista">

            <li>
                <strong>Trajetória retilínea:</strong> o corpo se movimenta em linha reta.
            </li>

            <li>
                <strong>Trajetória curvilínea:</strong> o corpo percorre uma curva.
            </li>

            <li>
                <strong>Trajetória circular:</strong> o corpo percorre uma circunferência.
            </li>

        </ul>

    </section>


    <!-- 4. DESLOCAMENTO -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-arrows-left-right"></i>
            </div>

            <h2>4. Deslocamento</h2>

        </div>

        <p>
            O deslocamento indica a diferença entre a posição final e a
            posição inicial de um corpo.
        </p>

        <div class="formula">
            ΔS = S<sub>f</sub> − S<sub>i</sub>
        </div>

        <p>
            Onde:
        </p>

        <ul class="lista">

            <li><strong>ΔS</strong> = deslocamento;</li>
            <li><strong>Sf</strong> = posição final;</li>
            <li><strong>Si</strong> = posição inicial.</li>

        </ul>

        <div class="exemplo">

            <strong>Exemplo:</strong>

            <p>
                Um carro parte da posição 10 m e chega à posição 50 m.
            </p>

            <p>
                ΔS = 50 − 10
            </p>

            <p>
                <strong>ΔS = 40 m</strong>
            </p>

        </div>

    </section>


    <!-- 5. VELOCIDADE MÉDIA -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-gauge-high"></i>
            </div>

            <h2>5. Velocidade média</h2>

        </div>

        <p>
            A velocidade média relaciona o deslocamento realizado por um
            corpo com o intervalo de tempo necessário para realizar esse movimento.
        </p>

        <div class="formula">
            V<sub>m</sub> = ΔS / Δt
        </div>

        <p>
            Onde:
        </p>

        <ul class="lista">

            <li><strong>Vm</strong> = velocidade média;</li>
            <li><strong>ΔS</strong> = deslocamento;</li>
            <li><strong>Δt</strong> = intervalo de tempo.</li>

        </ul>

        <div class="exemplo">

            <strong>Exemplo:</strong>

            <p>
                Um carro percorre 120 km em 2 horas.
            </p>

            <p>
                Vm = 120 / 2
            </p>

            <p>
                <strong>Vm = 60 km/h</strong>
            </p>

        </div>

    </section>


    <!-- 6. MOVIMENTO UNIFORME -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-road"></i>
            </div>

            <h2>6. Movimento Uniforme (MU)</h2>

        </div>

        <p>
            No Movimento Uniforme, a velocidade do corpo permanece constante
            ao longo do tempo.
        </p>

        <p>
            Como a velocidade não muda, o corpo percorre distâncias iguais
            em intervalos de tempo iguais.
        </p>

        <div class="formula">
            S = S<sub>0</sub> + V · t
        </div>

        <p>
            Essa é a chamada <strong>função horária da posição</strong>.
        </p>

        <ul class="lista">

            <li><strong>S</strong> = posição final;</li>
            <li><strong>S0</strong> = posição inicial;</li>
            <li><strong>V</strong> = velocidade;</li>
            <li><strong>t</strong> = tempo.</li>

        </ul>

        <div class="exemplo">

            <strong>Exemplo:</strong>

            <p>
                Um ciclista está na posição 20 m e se movimenta com velocidade
                constante de 5 m/s. Qual será sua posição após 10 segundos?
            </p>

            <p>
                S = 20 + 5 · 10
            </p>

            <p>
                S = 20 + 50
            </p>

            <p>
                <strong>S = 70 m</strong>
            </p>

        </div>

    </section>


    <!-- 7. MOVIMENTO UNIFORMEMENTE VARIADO -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-arrow-trend-up"></i>
            </div>

            <h2>7. Movimento Uniformemente Variado (MUV)</h2>

        </div>

        <p>
            No Movimento Uniformemente Variado, a velocidade do corpo varia
            de maneira constante ao longo do tempo.
        </p>

        <p>
            Isso significa que o corpo apresenta uma aceleração constante.
        </p>

        <div class="formula">
            V = V<sub>0</sub> + a · t
        </div>

        <p>
            Onde:
        </p>

        <ul class="lista">

            <li><strong>V</strong> = velocidade final;</li>
            <li><strong>V0</strong> = velocidade inicial;</li>
            <li><strong>a</strong> = aceleração;</li>
            <li><strong>t</strong> = tempo.</li>

        </ul>

        <h3>Equação da posição no MUV</h3>

        <div class="formula">
            S = S<sub>0</sub> + V<sub>0</sub>t + (a · t²) / 2
        </div>

    </section>


    <!-- 8. ACELERAÇÃO -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-bolt"></i>
            </div>

            <h2>8. Aceleração</h2>

        </div>

        <p>
            A aceleração indica a rapidez com que a velocidade de um corpo
            varia ao longo do tempo.
        </p>

        <div class="formula">
            a = ΔV / Δt
        </div>

        <p>
            Uma aceleração positiva pode indicar aumento da velocidade,
            enquanto uma aceleração negativa pode indicar redução da velocidade,
            dependendo do sentido adotado para o movimento.
        </p>

        <div class="exemplo">

            <strong>Exemplo:</strong>

            <p>
                Um carro aumenta sua velocidade de 10 m/s para 30 m/s
                em 5 segundos.
            </p>

            <p>
                a = (30 − 10) / 5
            </p>

            <p>
                <strong>a = 4 m/s²</strong>
            </p>

        </div>

    </section>


    <!-- 9. QUEDA LIVRE -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-arrow-down"></i>
            </div>

            <h2>9. Queda livre</h2>

        </div>

        <p>
            A queda livre é um movimento em que um corpo cai sob a ação
            da gravidade, desprezando-se a resistência do ar.
        </p>

        <p>
            Próximo à superfície da Terra, costuma-se utilizar:
        </p>

        <div class="formula">
            g ≈ 10 m/s²
        </div>

        <p>
            Em uma queda livre, a velocidade do corpo aumenta à medida
            que ele cai.
        </p>

        <div class="destaque">

            <i class="fa-solid fa-lightbulb"></i>

            Em exercícios escolares, quando o valor da gravidade não for
            informado, normalmente é utilizado <strong>g = 10 m/s²</strong>.

        </div>

    </section>


    <!-- 10. UNIDADES -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-ruler"></i>
            </div>

            <h2>10. Principais unidades de medida</h2>

        </div>

        <div class="tabela-container">

            <table>

                <thead>

                    <tr>
                        <th>Grandeza</th>
                        <th>Unidade SI</th>
                        <th>Símbolo</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>Posição</td>
                        <td>metro</td>
                        <td>m</td>
                    </tr>

                    <tr>
                        <td>Deslocamento</td>
                        <td>metro</td>
                        <td>m</td>
                    </tr>

                    <tr>
                        <td>Tempo</td>
                        <td>segundo</td>
                        <td>s</td>
                    </tr>

                    <tr>
                        <td>Velocidade</td>
                        <td>metro por segundo</td>
                        <td>m/s</td>
                    </tr>

                    <tr>
                        <td>Aceleração</td>
                        <td>metro por segundo ao quadrado</td>
                        <td>m/s²</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- 11. CONVERSÃO -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-arrow-right-arrow-left"></i>
            </div>

            <h2>11. Conversão de velocidade</h2>

        </div>

        <p>
            Em muitos exercícios é necessário converter a velocidade
            de quilômetros por hora para metros por segundo.
        </p>

        <div class="formula formula-pequena">
            1 m/s = 3,6 km/h
        </div>

        <p>
            Para transformar <strong>km/h em m/s</strong>, dividimos por 3,6.
        </p>

        <div class="formula formula-pequena">
            V(m/s) = V(km/h) ÷ 3,6
        </div>

        <p>
            Para transformar <strong>m/s em km/h</strong>, multiplicamos por 3,6.
        </p>

        <div class="formula formula-pequena">
            V(km/h) = V(m/s) × 3,6
        </div>

        <div class="exemplo">

            <strong>Exemplo:</strong>

            <p>
                72 km/h em m/s:
            </p>

            <p>
                72 ÷ 3,6 = <strong>20 m/s</strong>
            </p>

        </div>

    </section>


    <!-- 12. RESUMO -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-book"></i>
            </div>

            <h2>12. Resumo rápido</h2>

        </div>

        <div class="resumo-grid">

            <div class="resumo-item">

                <strong>Referencial</strong>

                <span>
                    Ponto ou sistema utilizado para analisar o movimento.
                </span>

            </div>

            <div class="resumo-item">

                <strong>Deslocamento</strong>

                <span>
                    Diferença entre a posição final e a posição inicial.
                </span>

            </div>

            <div class="resumo-item">

                <strong>Velocidade média</strong>

                <span>
                    Relaciona o deslocamento com o intervalo de tempo.
                </span>

            </div>

            <div class="resumo-item">

                <strong>Movimento Uniforme</strong>

                <span>
                    Movimento com velocidade constante.
                </span>

            </div>

            <div class="resumo-item">

                <strong>Aceleração</strong>

                <span>
                    Indica a variação da velocidade ao longo do tempo.
                </span>

            </div>

            <div class="resumo-item">

                <strong>MUV</strong>

                <span>
                    Movimento em que a aceleração permanece constante.
                </span>

            </div>

        </div>

    </section>


    <!-- FÓRMULAS PRINCIPAIS -->

    <section class="secao">

        <div class="secao-titulo">

            <div class="icone">
                <i class="fa-solid fa-square-root-variable"></i>
            </div>

            <h2>Fórmulas principais</h2>

        </div>

        <div class="formula formula-pequena">
            ΔS = S<sub>f</sub> − S<sub>i</sub>
        </div>

        <div class="formula formula-pequena">
            V<sub>m</sub> = ΔS / Δt
        </div>

        <div class="formula formula-pequena">
            S = S<sub>0</sub> + V · t
        </div>

        <div class="formula formula-pequena">
            V = V<sub>0</sub> + a · t
        </div>

        <div class="formula formula-pequena">
            S = S<sub>0</sub> + V<sub>0</sub>t + (a · t²) / 2
        </div>

        <div class="formula formula-pequena">
            a = ΔV / Δt
        </div>

    </section>


</div>

</body>

</html>