<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resumo — Células e Organelas | SIFE</title>

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

        /* AVISO */

        .aviso {
            display: flex;
            align-items: flex-start;
            gap: 12px;

            margin-bottom: 20px;
            padding: 16px 18px;

            background: #fff7f7;
            border-left: 4px solid #d92f3d;

            border-radius: 10px;

            color: #627991;
            font-size: 13px;
            line-height: 1.7;
        }

        .aviso i {
            color: #d92f3d;
            font-size: 17px;
            margin-top: 2px;
        }

        /* SEÇÕES */

        .secao {
            background: white;

            border: 1px solid #edf2f7;
            border-radius: 18px;

            padding: 28px;
            margin-bottom: 20px;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.035);
        }

        .cabecalho-secao {
            display: flex;
            align-items: center;
            gap: 14px;

            margin-bottom: 18px;
        }

        .icone-secao {
            width: 46px;
            height: 46px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 12px;

            font-size: 18px;
            flex-shrink: 0;
        }

        .numero {
            color: #d92f3d;

            font-size: 11px;
            font-weight: 800;

            letter-spacing: 1px;

            margin-bottom: 3px;
        }

        .cabecalho-secao h2 {
            margin: 0;

            color: #071b35;

            font-size: 20px;
            font-weight: 800;
        }

        .secao p {
            color: #627991;

            font-size: 13px;
            line-height: 1.8;

            margin-bottom: 12px;
        }

        /* CARDS */

        .grid-organelas {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;

            margin-top: 18px;
        }

        .card-organela {
            padding: 18px;

            background: #f8fafb;

            border: 1px solid #edf2f7;
            border-radius: 12px;

            transition: 0.2s;
        }

        .card-organela:hover {
            transform: translateY(-2px);
        }

        .card-organela h3 {
            margin: 0 0 8px;

            color: #071b35;

            font-size: 14px;
            font-weight: 800;
        }

        .card-organela p {
            margin: 0;

            color: #627991;

            font-size: 12px;
            line-height: 1.7;
        }

        .tag {
            display: inline-block;

            margin-bottom: 9px;

            padding: 5px 9px;

            border-radius: 7px;

            background: #fff3f3;
            color: #d92f3d;

            font-size: 10px;
            font-weight: 800;
        }

        /* DESTAQUE */

        .destaque {
            margin-top: 18px;

            padding: 16px 18px;

            background: #fff7f7;

            border-left: 4px solid #d92f3d;

            border-radius: 10px;

            color: #627991;

            font-size: 13px;
            line-height: 1.7;
        }

        .destaque strong {
            color: #071b35;
        }

        /* LISTA */

        .lista {
            margin: 12px 0 0;
            padding-left: 22px;

            color: #627991;

            font-size: 13px;
            line-height: 1.8;
        }

        .lista li {
            margin-bottom: 6px;
        }

        /* COMPARAÇÃO */

        .tabela-container {
            overflow-x: auto;
            margin-top: 18px;
        }

        .tabela {
            width: 100%;
            border-collapse: collapse;

            font-size: 12px;
        }

        .tabela th {
            padding: 13px;

            background: #071b35;
            color: white;

            text-align: left;

            font-weight: 700;
        }

        .tabela td {
            padding: 13px;

            border-bottom: 1px solid #edf2f7;

            color: #627991;
        }

        .tabela tr:nth-child(even) {
            background: #f8fafb;
        }

        /* RESUMO FINAL */

        .resumo-final {
            background: #071b35;
            color: white;

            border-radius: 18px;

            padding: 28px;

            margin-bottom: 20px;
        }

        .resumo-final h2 {
            margin: 0 0 15px;

            font-size: 20px;
            font-weight: 800;
        }

        .resumo-final ul {
            margin: 0;

            padding-left: 20px;

            font-size: 13px;
            line-height: 1.9;
        }

        /* BOTÕES */

        .botoes-acoes {
            display: flex;
            gap: 10px;
            align-items: center;
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

            .secao,
            .resumo-final {
                padding: 20px;
            }

            .grid-organelas {
                grid-template-columns: 1fr;
            }

            .acoes-topo,
            .botoes-acoes {
                flex-direction: column;
                align-items: stretch;
            }

            .voltar,
            .btn-baixar,
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

        <div class="acoes-topo">

            <a href="{{ route('materiais.biologia') }}" class="voltar">

                <i class="fa-solid fa-arrow-left"></i>

                Voltar para materiais

            </a>

            <a href="{{ route('resumoBiologiaPdf') }}" class="btn-baixar">

                <i class="fa-solid fa-download"></i>

                Baixar

            </a>

        </div>

        <div class="titulo-pequeno">
            RESUMO DE BIOLOGIA
        </div>

        <h1 class="titulo-principal">
            Células e Organelas
        </h1>

        <p class="subtitulo">
            Resumo sobre estrutura celular, tipos de células
            e principais organelas e suas funções.
        </p>

    </div>


    <!-- AVISO -->

    <div class="aviso">

        <i class="fa-solid fa-circle-info"></i>

        <span>
            <strong>Dica de estudo:</strong>
            memorize primeiro as três estruturas básicas da célula:
            membrana plasmática, citoplasma e material genético.
            Depois, associe cada organela à sua principal função.
        </span>

    </div>


    <!-- 1 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-circle"></i>
            </div>

            <div>

                <div class="numero">
                    01 — CONCEITO
                </div>

                <h2>
                    O que é uma célula?
                </h2>

            </div>

        </div>

        <p>
            A célula é a unidade básica estrutural e funcional
            dos seres vivos. Organismos podem ser formados por
            uma única célula ou por muitas células especializadas.
        </p>

        <div class="destaque">

            <strong>Teoria celular:</strong>
            todos os seres vivos são constituídos por células,
            a célula é a unidade básica da vida e novas células
            surgem a partir de células preexistentes.

        </div>

    </section>


    <!-- 2 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-border-all"></i>
            </div>

            <div>

                <div class="numero">
                    02 — ESTRUTURA
                </div>

                <h2>
                    Partes básicas da célula
                </h2>

            </div>

        </div>

        <div class="grid-organelas">

            <div class="card-organela">

                <span class="tag">
                    ESTRUTURA
                </span>

                <h3>
                    Membrana plasmática
                </h3>

                <p>
                    Envolve a célula e controla a entrada e saída
                    de substâncias, contribuindo para a manutenção
                    do equilíbrio interno.
                </p>

            </div>

            <div class="card-organela">

                <span class="tag">
                    ESTRUTURA
                </span>

                <h3>
                    Citoplasma
                </h3>

                <p>
                    Região localizada entre a membrana plasmática
                    e o núcleo nas células eucarióticas. Contém
                    o citosol e diversas estruturas celulares.
                </p>

            </div>

            <div class="card-organela">

                <span class="tag">
                    MATERIAL GENÉTICO
                </span>

                <h3>
                    Material genético
                </h3>

                <p>
                    Contém as informações necessárias para o
                    funcionamento, desenvolvimento e reprodução
                    das células.
                </p>

            </div>

            <div class="card-organela">

                <span class="tag">
                    EUCARIONTE
                </span>

                <h3>
                    Núcleo
                </h3>

                <p>
                    Estrutura delimitada por membrana que abriga
                    a maior parte do material genético nas células
                    eucarióticas.
                </p>

            </div>

        </div>

    </section>


    <!-- 3 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-microscope"></i>
            </div>

            <div>

                <div class="numero">
                    03 — TIPOS CELULARES
                </div>

                <h2>
                    Procariontes e eucariontes
                </h2>

            </div>

        </div>

        <div class="tabela-container">

            <table class="tabela">

                <thead>

                    <tr>

                        <th>Característica</th>

                        <th>Procarionte</th>

                        <th>Eucarionte</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Núcleo delimitado</td>

                        <td>Não possui</td>

                        <td>Possui</td>

                    </tr>

                    <tr>

                        <td>Material genético</td>

                        <td>Fica na região do nucleoide</td>

                        <td>Principalmente dentro do núcleo</td>

                    </tr>

                    <tr>

                        <td>Organelas membranosas</td>

                        <td>Não possui</td>

                        <td>Possui</td>

                    </tr>

                    <tr>

                        <td>Exemplos</td>

                        <td>Bactérias e arqueias</td>

                        <td>Animais, plantas, fungos e protistas</td>

                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- 4 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-gears"></i>
            </div>

            <div>

                <div class="numero">
                    04 — ORGANELAS
                </div>

                <h2>
                    Principais organelas celulares
                </h2>

            </div>

        </div>

        <div class="grid-organelas">

            <div class="card-organela">

                <h3>
                    Ribossomos
                </h3>

                <p>
                    Participam da síntese de proteínas.
                </p>

            </div>

            <div class="card-organela">

                <h3>
                    Mitocôndrias
                </h3>

                <p>
                    Participam da respiração celular e da produção
                    de ATP, principal moeda energética da célula.
                </p>

            </div>

            <div class="card-organela">

                <h3>
                    Retículo endoplasmático rugoso
                </h3>

                <p>
                    Possui ribossomos associados e participa da
                    produção e do transporte de proteínas.
                </p>

            </div>

            <div class="card-organela">

                <h3>
                    Retículo endoplasmático liso
                </h3>

                <p>
                    Atua na síntese de lipídios e participa de
                    outros processos metabólicos.
                </p>

            </div>

            <div class="card-organela">

                <h3>
                    Complexo de Golgi
                </h3>

                <p>
                    Modifica, organiza e direciona proteínas e
                    outras substâncias para diferentes destinos.
                </p>

            </div>

            <div class="card-organela">

                <h3>
                    Lisossomos
                </h3>

                <p>
                    Contêm enzimas digestivas e participam da
                    digestão intracelular e da reciclagem de componentes.
                </p>

            </div>

            <div class="card-organela">

                <h3>
                    Peroxissomos
                </h3>

                <p>
                    Participam de reações metabólicas e da
                    decomposição de determinadas substâncias.
                </p>

            </div>

            <div class="card-organela">

                <h3>
                    Centríolos
                </h3>

                <p>
                    Participam da organização dos microtúbulos
                    e da formação do fuso durante a divisão celular
                    em células animais.
                </p>

            </div>

        </div>

    </section>


    <!-- 5 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-leaf"></i>
            </div>

            <div>

                <div class="numero">
                    05 — CÉLULA VEGETAL
                </div>

                <h2>
                    Estruturas características das células vegetais
                </h2>

            </div>

        </div>

        <div class="grid-organelas">

            <div class="card-organela">

                <h3>
                    Parede celular
                </h3>

                <p>
                    Estrutura externa à membrana plasmática que
                    proporciona proteção e sustentação à célula vegetal.
                </p>

            </div>

            <div class="card-organela">

                <h3>
                    Cloroplastos
                </h3>

                <p>
                    Organelas que realizam a fotossíntese nas células
                    vegetais e de algas.
                </p>

            </div>

            <div class="card-organela">

                <h3>
                    Vacúolo
                </h3>

                <p>
                    Estrutura que pode armazenar água, íons,
                    pigmentos e outras substâncias, contribuindo
                    para o equilíbrio celular.
                </p>

            </div>

        </div>

    </section>


    <!-- 6 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-bolt"></i>
            </div>

            <div>

                <div class="numero">
                    06 — ENERGIA
                </div>

                <h2>
                    Mitocôndria e cloroplasto
                </h2>

            </div>

        </div>

        <p>
            Algumas organelas estão diretamente relacionadas ao
            metabolismo energético.
        </p>

        <div class="grid-organelas">

            <div class="card-organela">

                <span class="tag">
                    RESPIRAÇÃO CELULAR
                </span>

                <h3>
                    Mitocôndria
                </h3>

                <p>
                    Participa da respiração celular, processo pelo qual
                    a célula obtém energia a partir de moléculas orgânicas,
                    com produção de ATP.
                </p>

            </div>

            <div class="card-organela">

                <span class="tag">
                    FOTOSSÍNTESE
                </span>

                <h3>
                    Cloroplasto
                </h3>

                <p>
                    Realiza a fotossíntese em células vegetais e de algas,
                    utilizando energia luminosa para produzir matéria
                    orgânica.
                </p>

            </div>

        </div>

    </section>


    <!-- 7 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-truck-fast"></i>
            </div>

            <div>

                <div class="numero">
                    07 — TRANSPORTE
                </div>

                <h2>
                    Transporte pela membrana
                </h2>

            </div>

        </div>

        <div class="grid-organelas">

            <div class="card-organela">

                <h3>
                    Difusão simples
                </h3>

                <p>
                    Movimento de substâncias através da membrana,
                    geralmente do local de maior concentração para
                    o de menor concentração, sem gasto direto de ATP.
                </p>

            </div>

            <div class="card-organela">

                <h3>
                    Osmose
                </h3>

                <p>
                    Movimento de água através de uma membrana
                    semipermeável em resposta à diferença de concentração
                    de solutos.
                </p>

            </div>

            <div class="card-organela">

                <h3>
                    Difusão facilitada
                </h3>

                <p>
                    Transporte passivo realizado com auxílio de
                    proteínas presentes na membrana.
                </p>

            </div>

            <div class="card-organela">

                <h3>
                    Transporte ativo
                </h3>

                <p>
                    Transporte que utiliza energia, geralmente na forma
                    de ATP, para mover substâncias contra seu gradiente
                    de concentração.
                </p>

            </div>

        </div>

    </section>


    <!-- 8 -->

    <section class="secao">

        <div class="cabecalho-secao">

            <div class="icone-secao">
                <i class="fa-solid fa-boxes-stacked"></i>
            </div>

            <div>

                <div class="numero">
                    08 — RESUMO DAS ORGANELAS
                </div>

                <h2>
                    Tabela para memorizar
                </h2>

            </div>

        </div>

        <div class="tabela-container">

            <table class="tabela">

                <thead>

                    <tr>

                        <th>Estrutura</th>

                        <th>Principal função</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>Membrana plasmática</td>
                        <td>Controle da entrada e saída de substâncias</td>
                    </tr>

                    <tr>
                        <td>Núcleo</td>
                        <td>Armazenamento da maior parte do material genético</td>
                    </tr>

                    <tr>
                        <td>Ribossomo</td>
                        <td>Síntese de proteínas</td>
                    </tr>

                    <tr>
                        <td>Mitocôndria</td>
                        <td>Respiração celular e produção de ATP</td>
                    </tr>

                    <tr>
                        <td>Retículo rugoso</td>
                        <td>Síntese e transporte de proteínas</td>
                    </tr>

                    <tr>
                        <td>Retículo liso</td>
                        <td>Síntese de lipídios e metabolismo</td>
                    </tr>

                    <tr>
                        <td>Complexo de Golgi</td>
                        <td>Modificação, organização e distribuição de substâncias</td>
                    </tr>

                    <tr>
                        <td>Lisossomo</td>
                        <td>Digestão intracelular</td>
                    </tr>

                    <tr>
                        <td>Peroxissomo</td>
                        <td>Reações metabólicas e decomposição de substâncias</td>
                    </tr>

                    <tr>
                        <td>Centríolo</td>
                        <td>Organização dos microtúbulos</td>
                    </tr>

                    <tr>
                        <td>Cloroplasto</td>
                        <td>Fotossíntese</td>
                    </tr>

                    <tr>
                        <td>Vacúolo</td>
                        <td>Armazenamento e equilíbrio celular</td>
                    </tr>

                    <tr>
                        <td>Parede celular</td>
                        <td>Proteção e sustentação</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- RESUMO FINAL -->

    <section class="resumo-final">

        <h2>
            <i class="fa-solid fa-book-open"></i>
            Resumo rápido para a prova
        </h2>

        <ul>

            <li>
                <strong>Célula:</strong>
                unidade básica estrutural e funcional dos seres vivos.
            </li>

            <li>
                <strong>Membrana plasmática:</strong>
                controla a entrada e saída de substâncias.
            </li>

            <li>
                <strong>Citoplasma:</strong>
                região onde ficam o citosol e diversas estruturas celulares.
            </li>

            <li>
                <strong>Núcleo:</strong>
                abriga a maior parte do material genético nas células eucarióticas.
            </li>

            <li>
                <strong>Ribossomos:</strong>
                síntese de proteínas.
            </li>

            <li>
                <strong>Mitocôndrias:</strong>
                respiração celular e produção de ATP.
            </li>

            <li>
                <strong>Complexo de Golgi:</strong>
                modifica, organiza e distribui substâncias.
            </li>

            <li>
                <strong>Lisossomos:</strong>
                digestão intracelular.
            </li>

            <li>
                <strong>Cloroplastos:</strong>
                realização da fotossíntese.
            </li>

            <li>
                <strong>Vacúolos:</strong>
                armazenamento e equilíbrio celular.
            </li>

            <li>
                <strong>Procariontes:</strong>
                não possuem núcleo delimitado por membrana.
            </li>

            <li>
                <strong>Eucariontes:</strong>
                possuem núcleo delimitado e organelas membranosas.
            </li>

        </ul>

    </section>


    <!-- BOTÕES FINAIS -->

    <div class="botoes-acoes">

        <a href="{{ route('materiais.biologia') }}" class="btn-voltar-final">

            <i class="fa-solid fa-arrow-left"></i>

            Voltar para materiais

        </a>

        <a href="{{ route('resumoBiologiaPdf') }}" class="btn-baixar-final">

            <i class="fa-solid fa-download"></i>

            Baixar

        </a>

    </div>

</div>

</body>

</html>