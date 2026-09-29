<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Material — Química Orgânica | SIFE</title>

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

        /* LISTA */

        .lista {
            margin: 10px 0 0;
            padding-left: 20px;

            color: #627991;
            font-size: 13px;
            line-height: 1.8;
        }

        .lista li {
            margin-bottom: 6px;
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
            margin-bottom: 8px;
            font-size: 13px;
        }

        .formula {
            display: inline-block;
            padding: 8px 12px;

            background: #fff3f3;
            color: #d92f3d;

            border-radius: 8px;

            font-weight: 800;
            font-size: 13px;
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

            <a href="{{ route('materialQuimicaPdf') }}" class="btn-baixar">
                <i class="fa-solid fa-download"></i>
                Baixar
            </a>

        </div>

        <div class="titulo-pequeno">
            MATERIAL DE QUÍMICA
        </div>

        <h1 class="titulo-principal">
            Química Orgânica
        </h1>

        <p class="subtitulo">
            Introdução aos principais conceitos da Química Orgânica.
        </p>

    </div>


    <!-- 1. INTRODUÇÃO -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-atom"></i>
            </div>

            <h2>1. O que é Química Orgânica?</h2>

        </div>

        <p>
            A <strong>Química Orgânica</strong> é a área da Química que
            estuda principalmente os compostos de carbono, suas estruturas,
            propriedades, transformações e aplicações.
        </p>

        <p>
            Os compostos orgânicos estão presentes em diversas situações
            do cotidiano, como nos alimentos, combustíveis, medicamentos,
            plásticos, cosméticos e materiais utilizados na indústria.
        </p>

        <div class="destaque">

            <strong>Para lembrar:</strong>
            o carbono é o elemento central da Química Orgânica devido à
            sua capacidade de formar diferentes estruturas e estabelecer
            ligações com outros átomos de carbono e com diversos elementos.

        </div>

    </section>


    <!-- 2. CARBONO -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-c"></i>
            </div>

            <h2>2. O Carbono</h2>

        </div>

        <p>
            O carbono possui número atômico <strong>6</strong> e apresenta
            quatro elétrons na camada de valência. Por isso, normalmente
            realiza quatro ligações covalentes.
        </p>

        <p>
            Essa característica permite que os átomos de carbono formem
            cadeias longas, ramificadas ou cíclicas.
        </p>

        <ul class="lista">

            <li>O carbono pode ligar-se a outros átomos de carbono.</li>

            <li>Pode formar ligações simples, duplas e triplas.</li>

            <li>Pode ligar-se a elementos como H, O, N, S e halogênios.</li>

            <li>Pode formar cadeias de diferentes tamanhos e formatos.</li>

        </ul>

    </section>


    <!-- 3. CADEIAS CARBÔNICAS -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-link"></i>
            </div>

            <h2>3. Cadeias Carbônicas</h2>

        </div>

        <p>
            As <strong>cadeias carbônicas</strong> são estruturas formadas
            principalmente pela ligação entre átomos de carbono.
        </p>

        <div class="tabela-container">

            <table>

                <thead>

                    <tr>
                        <th>Classificação</th>
                        <th>Características</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>Aberta</td>
                        <td>Possui extremidades livres e não forma um ciclo.</td>
                    </tr>

                    <tr>
                        <td>Fechada</td>
                        <td>Forma um ciclo ou anel.</td>
                    </tr>

                    <tr>
                        <td>Normal</td>
                        <td>Não apresenta ramificações na cadeia principal.</td>
                    </tr>

                    <tr>
                        <td>Ramificada</td>
                        <td>Possui uma ou mais ramificações.</td>
                    </tr>

                    <tr>
                        <td>Saturada</td>
                        <td>Possui somente ligações simples entre carbonos.</td>
                    </tr>

                    <tr>
                        <td>Insaturada</td>
                        <td>Possui pelo menos uma ligação dupla ou tripla entre carbonos.</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- 4. HIDROCARBONETOS -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-fire-flame-simple"></i>
            </div>

            <h2>4. Hidrocarbonetos</h2>

        </div>

        <p>
            Os <strong>hidrocarbonetos</strong> são compostos orgânicos
            constituídos apenas por carbono e hidrogênio.
        </p>

        <div class="exemplos">

            <div class="exemplo">

                <strong>Alcanos</strong>

                <p>
                    Possuem apenas ligações simples entre os carbonos.
                </p>

                <span class="formula">
                    Ex.: CH₄
                </span>

            </div>

            <div class="exemplo">

                <strong>Alcenos</strong>

                <p>
                    Possuem pelo menos uma ligação dupla entre carbonos.
                </p>

                <span class="formula">
                    Ex.: C₂H₄
                </span>

            </div>

            <div class="exemplo">

                <strong>Alcinos</strong>

                <p>
                    Possuem pelo menos uma ligação tripla entre carbonos.
                </p>

                <span class="formula">
                    Ex.: C₂H₂
                </span>

            </div>

            <div class="exemplo">

                <strong>Aromáticos</strong>

                <p>
                    Possuem sistemas cíclicos conjugados, como o benzeno.
                </p>

                <span class="formula">
                    Ex.: C₆H₆
                </span>

            </div>

        </div>

    </section>


    <!-- 5. FUNÇÕES ORGÂNICAS -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-flask-vial"></i>
            </div>

            <h2>5. Funções Orgânicas</h2>

        </div>

        <p>
            As funções orgânicas agrupam compostos que apresentam
            determinadas características estruturais e propriedades
            semelhantes.
        </p>

        <div class="tabela-container">

            <table>

                <thead>

                    <tr>
                        <th>Função</th>
                        <th>Grupo característico</th>
                        <th>Exemplo</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>Álcool</td>
                        <td>–OH</td>
                        <td>Etanol</td>
                    </tr>

                    <tr>
                        <td>Aldeído</td>
                        <td>–CHO</td>
                        <td>Metanal</td>
                    </tr>

                    <tr>
                        <td>Cetona</td>
                        <td>C=O</td>
                        <td>Propanona</td>
                    </tr>

                    <tr>
                        <td>Ácido carboxílico</td>
                        <td>–COOH</td>
                        <td>Ácido acético</td>
                    </tr>

                    <tr>
                        <td>Éster</td>
                        <td>–COO–</td>
                        <td>Acetato de etila</td>
                    </tr>

                    <tr>
                        <td>Amina</td>
                        <td>–NH₂</td>
                        <td>Metilamina</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- 6. NOMENCLATURA -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-list-ol"></i>
            </div>

            <h2>6. Nomenclatura dos Compostos Orgânicos</h2>

        </div>

        <p>
            A nomenclatura é utilizada para identificar os compostos
            orgânicos de maneira organizada e padronizada.
        </p>

        <p>
            Em muitos compostos, o nome pode ser compreendido observando
            três elementos principais: o número de carbonos da cadeia,
            o tipo de ligação e a função orgânica.
        </p>

        <div class="exemplos">

            <div class="exemplo">

                <strong>Metano</strong>

                <span class="formula">
                    CH₄
                </span>

            </div>

            <div class="exemplo">

                <strong>Etano</strong>

                <span class="formula">
                    C₂H₆
                </span>

            </div>

            <div class="exemplo">

                <strong>Eteno</strong>

                <span class="formula">
                    C₂H₄
                </span>

            </div>

            <div class="exemplo">

                <strong>Etino</strong>

                <span class="formula">
                    C₂H₂
                </span>

            </div>

        </div>

    </section>


    <!-- 7. ISOMERIA -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-code-compare"></i>
            </div>

            <h2>7. Isomeria</h2>

        </div>

        <p>
            <strong>Isômeros</strong> são compostos que apresentam a mesma
            fórmula molecular, mas possuem estruturas ou organizações
            diferentes.
        </p>

        <div class="destaque">

            <strong>Exemplo:</strong>
            dois compostos podem apresentar a mesma quantidade de átomos
            de carbono e hidrogênio, mas possuir estruturas diferentes.
            Essa diferença pode influenciar suas propriedades.

        </div>

    </section>


    <!-- 8. REAÇÕES ORGÂNICAS -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-arrows-rotate"></i>
            </div>

            <h2>8. Principais Reações Orgânicas</h2>

        </div>

        <p>
            Os compostos orgânicos podem participar de diversas reações
            químicas. Entre os principais tipos estão:
        </p>

        <ul class="lista">

            <li>
                <strong>Combustão:</strong>
                reação de uma substância com oxigênio, geralmente liberando
                energia.
            </li>

            <li>
                <strong>Adição:</strong>
                ocorre principalmente em compostos que possuem ligações
                múltiplas.
            </li>

            <li>
                <strong>Substituição:</strong>
                um átomo ou grupo de átomos é substituído por outro.
            </li>

            <li>
                <strong>Eliminação:</strong>
                ocorre a remoção de átomos ou grupos, podendo formar
                ligações múltiplas.
            </li>

        </ul>

    </section>


    <!-- 9. COMBUSTÍVEIS -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-gas-pump"></i>
            </div>

            <h2>9. Química Orgânica no Cotidiano</h2>

        </div>

        <p>
            A Química Orgânica está presente em inúmeros produtos e
            processos utilizados diariamente.
        </p>

        <div class="tabela-container">

            <table>

                <thead>

                    <tr>
                        <th>Área</th>
                        <th>Exemplos</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>Combustíveis</td>
                        <td>Gasolina, etanol e gás natural.</td>
                    </tr>

                    <tr>
                        <td>Medicamentos</td>
                        <td>Diversos princípios ativos são compostos orgânicos.</td>
                    </tr>

                    <tr>
                        <td>Alimentos</td>
                        <td>Carboidratos, lipídios e proteínas possuem componentes orgânicos.</td>
                    </tr>

                    <tr>
                        <td>Plásticos</td>
                        <td>Produzidos a partir de polímeros orgânicos.</td>
                    </tr>

                    <tr>
                        <td>Cosméticos</td>
                        <td>Utilizam diversos compostos orgânicos em suas formulações.</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    <!-- 10. POLÍMEROS -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-shapes"></i>
            </div>

            <h2>10. Polímeros</h2>

        </div>

        <p>
            <strong>Polímeros</strong> são moléculas muito grandes formadas
            pela repetição de unidades menores chamadas monômeros.
        </p>

        <p>
            Existem polímeros naturais e sintéticos. Entre os naturais
            estão substâncias como celulose e proteínas. Entre os
            sintéticos estão diversos plásticos e fibras.
        </p>

        <div class="destaque">

            <strong>Exemplos no cotidiano:</strong>
            embalagens plásticas, garrafas, tecidos sintéticos,
            borrachas e diversos materiais utilizados na indústria.

        </div>

    </section>


    <!-- 11. IMPORTÂNCIA -->

    <section class="card-conteudo">

        <div class="card-titulo">

            <div class="icone">
                <i class="fa-solid fa-lightbulb"></i>
            </div>

            <h2>11. Importância da Química Orgânica</h2>

        </div>

        <p>
            O estudo da Química Orgânica é importante para compreender
            muitos processos presentes na natureza e no desenvolvimento
            de produtos utilizados pela sociedade.
        </p>

        <ul class="lista">

            <li>Desenvolvimento de medicamentos;</li>

            <li>Produção de combustíveis;</li>

            <li>Desenvolvimento de novos materiais;</li>

            <li>Produção de alimentos e conservantes;</li>

            <li>Fabricação de plásticos e polímeros;</li>

            <li>Produção de cosméticos;</li>

            <li>Estudo dos processos químicos dos organismos vivos.</li>

        </ul>

    </section>


    <!-- RESUMO FINAL -->

    <section class="resumo-final">

        <h2>
            <i class="fa-solid fa-graduation-cap"></i>
            Resumo para estudar
        </h2>

        <ul>

            <li>
                A <strong>Química Orgânica</strong> estuda principalmente
                os compostos de carbono.
            </li>

            <li>
                O carbono geralmente realiza <strong>quatro ligações
                covalentes</strong>.
            </li>

            <li>
                As cadeias carbônicas podem ser abertas, fechadas,
                normais, ramificadas, saturadas ou insaturadas.
            </li>

            <li>
                <strong>Hidrocarbonetos</strong> são compostos formados
                somente por carbono e hidrogênio.
            </li>

            <li>
                As <strong>funções orgânicas</strong> agrupam compostos
                com determinadas características estruturais.
            </li>

            <li>
                <strong>Isomeria</strong> ocorre quando compostos possuem
                a mesma fórmula molecular, mas estruturas diferentes.
            </li>

            <li>
                Compostos orgânicos participam de diversas reações,
                como combustão, adição, substituição e eliminação.
            </li>

            <li>
                A Química Orgânica está presente em combustíveis,
                medicamentos, alimentos, plásticos e cosméticos.
            </li>

        </ul>

    </section>


</div>

</body>

</html>