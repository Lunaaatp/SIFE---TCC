<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Materiais - Matemática | SIFE</title>

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
            padding: 0;
            background: #f4f7f9;
            font-family: 'Inter', sans-serif;
            color: #071b35;
        }

        /* =========================
           CONTAINER PRINCIPAL
        ========================= */

        .container-principal {
            max-width: 1440px;
            margin: 0 auto;
            padding: 18px 28px 60px;
        }

        /* =========================
           CABEÇALHO
        ========================= */

        .topo {
            margin-bottom: 30px;
        }

        .voltar {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #758ba3;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 22px;
            transition: 0.2s;
        }

        .voltar:hover {
            color: #d92f3d;
        }

        .titulo-pequeno {
            color: #60758c;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .titulo-principal {
            margin: 0;
            font-size: 36px;
            font-weight: 800;
            color: #071b35;
        }

        .subtitulo {
            margin-top: 8px;
            color: #94a9bf;
            font-size: 16px;
            font-weight: 600;
        }

        /* =========================
           CABEÇALHO DA MATÉRIA
        ========================= */

        .materia-header {
            background: white;
            border-radius: 30px;
            padding: 30px 38px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 8px 25px rgba(15, 42, 70, 0.04);
        }

        .materia-info {
            display: flex;
            align-items: center;
            gap: 22px;
        }

        .icone-materia {
            width: 72px;
            height: 72px;
            border-radius: 20px;
            background: #f8d4d7;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #d92f3d;
            font-size: 30px;
        }

        .materia-nome {
            margin: 0 0 5px;
            font-size: 25px;
            font-weight: 800;
            color: #071b35;
        }

        .materia-professor {
            margin: 0;
            color: #91a7bf;
            font-size: 15px;
            font-weight: 600;
        }

        .contador {
            background: #fff3f3;
            color: #d92f3d;
            border-radius: 30px;
            padding: 11px 18px;
            font-size: 14px;
            font-weight: 700;
        }

        /* =========================
           BARRA DE PESQUISA
        ========================= */

        .barra-acoes {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }

        .pesquisa {
            flex: 1;
            position: relative;
        }

        .pesquisa i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #9aafc4;
        }

        .pesquisa input {
            width: 100%;
            border: none;
            outline: none;
            background: white;
            border-radius: 17px;
            height: 55px;
            padding: 0 20px 0 52px;
            font-size: 14px;
            font-weight: 500;
            color: #071b35;
            box-shadow: 0 5px 20px rgba(15, 42, 70, 0.03);
        }

        .pesquisa input::placeholder {
            color: #a4b5c5;
        }

        /* =========================
           FILTROS
        ========================= */

        .filtros {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 28px;
        }

        .filtro {
            border: none;
            background: white;
            color: #8ca1b7;
            padding: 11px 20px;
            border-radius: 13px;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.2s;
        }

        .filtro:hover {
            color: #d92f3d;
        }

        .filtro.ativo {
            background: #d92f3d;
            color: white;
        }

        /* =========================
           TÍTULO DA SEÇÃO
        ========================= */

        .titulo-secao {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 18px;
        }

        .titulo-secao h2 {
            margin: 0;
            font-size: 21px;
            font-weight: 800;
            color: #071b35;
        }

        .titulo-secao span {
            color: #9aafc4;
            font-size: 13px;
            font-weight: 600;
        }

        /* =========================
           GRID DE MATERIAIS
        ========================= */

        .grid-materiais {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 22px;
        }

        /* =========================
           CARD MATERIAL
        ========================= */

        .card-material {
            background: white;
            border-radius: 24px;
            padding: 25px;
            box-shadow: 0 8px 25px rgba(15, 42, 70, 0.04);
            transition: 0.25s;
            position: relative;
        }

        .card-material:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(15, 42, 70, 0.08);
        }

        .novo {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #eaf8ef;
            color: #219653;
            padding: 6px 11px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 800;
        }

        .material-topo {
            display: flex;
            align-items: flex-start;
            gap: 17px;
            margin-bottom: 18px;
        }

        .icone-arquivo {
            width: 52px;
            height: 52px;
            min-width: 52px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .pdf {
            background: #f9dfe1;
            color: #d92f3d;
        }

        .atividade {
            background: #dce9ff;
            color: #367be8;
        }

        .video {
            background: #fff0c9;
            color: #efa900;
        }

        .resumo {
            background: #d9f3e8;
            color: #16915f;
        }

        .material-titulo {
            margin: 2px 0 6px;
            font-size: 17px;
            font-weight: 800;
            color: #071b35;
            padding-right: 65px;
        }

        .material-descricao {
            margin: 0;
            color: #91a6bb;
            font-size: 13px;
            font-weight: 500;
            line-height: 1.5;
        }

        /* =========================
           INFORMAÇÕES
        ========================= */

        .material-info {
            background: #f7f9fb;
            border-radius: 15px;
            padding: 14px 16px;
            display: flex;
            justify-content: space-between;
            margin-bottom: 16px;
        }

        .info-item {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .info-label {
            color: #9aafc4;
            font-size: 11px;
            font-weight: 600;
        }

        .info-value {
            color: #243b55;
            font-size: 12px;
            font-weight: 700;
        }

        /* =========================
           BOTÕES
        ========================= */

        .btn-baixar {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 13px 20px;
    border-radius: 12px;
    background: #f3f6f9;
    color: #627991;
    text-decoration: none;
    font-size: 14px;
    font-weight: 700;
    transition: 0.2s;
    margin-left: 10px;
}

.btn-baixar:hover {
    background: #e8edf2;
    color: #071b35;
    transform: translateY(-1px);
}

        .botoes-material {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .btn-material {
            height: 45px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 800;
            transition: 0.2s;
        }

        .btn-visualizar {
            background: #fff3f3;
            color: #d92f3d;
        }

        .btn-visualizar:hover {
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

        .botoes-acoes {
    display: flex;
    gap: 10px;
    align-items: center;
    margin-top: 25px;
}

.btn-baixar {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 13px 20px;
    border-radius: 12px;
    background: #f3f6f9;
    color: #627991;
    text-decoration: none;
    font-size: 14px;
    font-weight: 700;
    transition: 0.2s;
}

.btn-baixar:hover {
    background: #e8edf2;
    color: #071b35;
    transform: translateY(-1px);
}

        /* =========================
           ESTADO VAZIO
        ========================= */

        .sem-resultados {
            display: none;
            background: white;
            border-radius: 24px;
            padding: 50px;
            text-align: center;
            color: #91a6bb;
        }

        .sem-resultados i {
            font-size: 45px;
            margin-bottom: 15px;
            color: #d1dce6;
        }

        /* =========================
           ACESSIBILIDADE
        ========================= */

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
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
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
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            cursor: pointer;
            z-index: 1000;
        }

        /* =========================
           RESPONSIVIDADE
        ========================= */

        @media (max-width: 900px) {

            .grid-materiais {
                grid-template-columns: 1fr;
            }

            .materia-header {
                align-items: flex-start;
                gap: 20px;
                flex-direction: column;
            }
        }

        @media (max-width: 600px) {

            .container-principal {
                padding: 18px 16px 50px;
            }

            .titulo-principal {
                font-size: 29px;
            }

            .materia-header {
                padding: 24px;
            }

            .materia-info {
                align-items: flex-start;
            }

            .barra-acoes {
                flex-direction: column;
            }

            .grid-materiais {
                gap: 15px;
            }

            .card-material {
                padding: 20px;
            }

            
        }

    </style>

</head>

<body>

<div class="container-principal">

    <!-- =========================
         CABEÇALHO
    ========================= -->

    <div class="topo">

        <!-- BOTÃO CORRIGIDO -->
        <a href="{{ route('materiaAluno') }}" class="voltar">
            <i class="fa-solid fa-arrow-left"></i>
            Voltar para minhas matérias
        </a>

        <div class="titulo-pequeno">
            MATERIAL DIDÁTICO
        </div>

        <h1 class="titulo-principal">
            Materiais
        </h1>

        <p class="subtitulo">
            Acesse os conteúdos disponibilizados pelo seu professor.
        </p>

    </div>


    <!-- =========================
         INFORMAÇÕES DA MATÉRIA
    ========================= -->

    <div class="materia-header">

        <div class="materia-info">

            <div class="icone-materia">
                <i class="fa-solid fa-calculator"></i>
            </div>

            <div>

                <h2 class="materia-nome">
                    Matemática
                </h2>

                <p class="materia-professor">
                    Prof. Marcos Oliveira
                </p>

            </div>

        </div>

        <div class="contador">
            <i class="fa-solid fa-folder-open"></i>
            8 materiais
        </div>

    </div>


    <!-- =========================
         PESQUISA
    ========================= -->

    <div class="barra-acoes">

        <div class="pesquisa">

            <i class="fa-solid fa-magnifying-glass"></i>

            <input
                type="text"
                id="campoPesquisa"
                placeholder="Pesquisar materiais..."
                onkeyup="pesquisarMateriais()"
            >

        </div>

    </div>


    <!-- =========================
         FILTROS
    ========================= -->

    <div class="filtros">

        <button
            class="filtro ativo"
            onclick="filtrarMateriais('todos', this)">
            Todos
        </button>

        <button
            class="filtro"
            onclick="filtrarMateriais('pdf', this)">
            <i class="fa-solid fa-file-pdf"></i>
            Apostilas
        </button>

        <button
            class="filtro"
            onclick="filtrarMateriais('atividade', this)">
            <i class="fa-solid fa-pen-to-square"></i>
            Atividades
        </button>

        <button
            class="filtro"
            onclick="filtrarMateriais('video', this)">
            <i class="fa-solid fa-play"></i>
            Videoaulas
        </button>

        <button
            class="filtro"
            onclick="filtrarMateriais('resumo', this)">
            <i class="fa-solid fa-book"></i>
            Resumos
        </button>

    </div>


    <!-- =========================
         TÍTULO
    ========================= -->

    <div class="titulo-secao">

        <h2>
            Materiais disponíveis
        </h2>

        <span>
            Atualizados recentemente
        </span>

    </div>


    <!-- =========================
         GRID
    ========================= -->

    <div class="grid-materiais" id="gridMateriais">

        <!-- MATERIAL 1 -->

        <div
            class="card-material"
            data-tipo="pdf"
            data-nome="apostila funções primeiro grau">

            <span class="novo">
                NOVO
            </span>

            <div class="material-topo">

                <div class="icone-arquivo pdf">
                    <i class="fa-solid fa-file-pdf"></i>
                </div>

                <div>

                    <h3 class="material-titulo">
                        Apostila — Funções do 1º Grau
                    </h3>

                    <p class="material-descricao">
                        Conteúdo completo sobre funções do primeiro grau.
                    </p>

                </div>

            </div>

            <div class="material-info">

                <div class="info-item">

                    <span class="info-label">
                        DISPONIBILIZADO
                    </span>

                    <span class="info-value">
                        25/08/2026
                    </span>

                </div>

                <div class="info-item">

                    <span class="info-label">
                        FORMATO
                    </span>

                    <span class="info-value">
                        PDF
                    </span>

                </div>

                <div class="info-item">

                    <span class="info-label">
                        TAMANHO
                    </span>

                    <span class="info-value">
                        2,4 MB
                    </span>

                </div>

            </div>

            <div class="botoes-material">

                <a href="{{ route('apostilaMatematica') }}" class="btn-material btn-visualizar">
    <i class="fa-solid fa-eye"></i>
    Visualizar
</a>

                <a href="{{ route('apostilaMatematicaPdf') }}" class="btn-baixar">
        <i class="fa-solid fa-download"></i>
        Baixar
    </a>

            </div>

        </div>


        <!-- MATERIAL 2 -->

        <div
            class="card-material"
            data-tipo="atividade"
            data-nome="lista exercícios equações">

            <div class="material-topo">

                <div class="icone-arquivo atividade">
                    <i class="fa-solid fa-pen-to-square"></i>
                </div>

                <div>

                    <h3 class="material-titulo">
                        Lista de Exercícios — Equações
                    </h3>

                    <p class="material-descricao">
                        Exercícios para praticar equações do primeiro e segundo grau.
                    </p>
                    

                </div>

            </div>

            <div class="material-info">

                <div class="info-item">

                    <span class="info-label">
                        DISPONIBILIZADO
                    </span>

                    <span class="info-value">
                        23/08/2026
                    </span>

                </div>

                <div class="info-item">

                    <span class="info-label">
                        FORMATO
                    </span>

                    <span class="info-value">
                        PDF
                    </span>

                </div>

                <div class="info-item">

                    <span class="info-label">
                        QUESTÕES
                    </span>

                    <span class="info-value">
                        20
                    </span>

                </div>

            </div>

            <div class="botoes-material">

                <a href="{{ route('exerciciosEquacoes') }}" class="btn-material btn-visualizar">
    <i class="fa-solid fa-eye"></i>
    Visualizar
</a>

                <a href="{{ route('exerciciosEquacoesPdf') }}" class="btn-baixar">
    <i class="fa-solid fa-download"></i>
    Baixar
</a>    

            </div>

        </div>


        <!-- MATERIAL 3 -->

        <div
            class="card-material"
            data-tipo="video"
            data-nome="videoaula equação segundo grau">

            <div class="material-topo">

                <div class="icone-arquivo video">
                    <i class="fa-solid fa-play"></i>
                </div>

                <div>

                    <h3 class="material-titulo">
                        Videoaula — Equação do 2º Grau
                    </h3>

                    <p class="material-descricao">
                        Aula explicativa sobre Bhaskara e resolução de equações.
                    </p>

                </div>

            </div>

            <div class="material-info">

                <div class="info-item">

                    <span class="info-label">
                        PUBLICADO
                    </span>

                    <span class="info-value">
                        21/08/2026
                    </span>

                </div>

                <div class="info-item">

                    <span class="info-label">
                        FORMATO
                    </span>

                    <span class="info-value">
                        Vídeo
                    </span>

                </div>

                <div class="info-item">

                    <span class="info-label">
                        DURAÇÃO
                    </span>

                    <span class="info-value">
                        18 min
                    </span>

                </div>

            </div>

            <div class="botoes-material">

                <a href="{{ route('videoaulaMatematica') }}" class="btn-material btn-visualizar">
    <i class="fa-solid fa-eye"></i>
    Visualizar
</a>


            </div>

        </div>


        <!-- MATERIAL 4 -->

        <div
            class="card-material"
            data-tipo="resumo"
            data-nome="resumo funções matemáticas">

            <div class="material-topo">

                <div class="icone-arquivo resumo">
                    <i class="fa-solid fa-book"></i>
                </div>

                <div>

                    <h3 class="material-titulo">
                        Resumo — Funções Matemáticas
                    </h3>

                    <p class="material-descricao">
                        Resumo dos principais conceitos estudados em sala.
                    </p>

                </div>

            </div>

            <div class="material-info">

                <div class="info-item">

                    <span class="info-label">
                        PUBLICADO
                    </span>

                    <span class="info-value">
                        20/08/2026
                    </span>

                </div>

                <div class="info-item">

                    <span class="info-label">
                        FORMATO
                    </span>

                    <span class="info-value">
                        PDF
                    </span>

                </div>

                <div class="info-item">

                    <span class="info-label">
                        PÁGINAS
                    </span>

                    <span class="info-value">
                        6
                    </span>

                </div>

            </div>

            <div class="botoes-material">

                <a href="{{ route('resumoMatematica') }}" class="btn-material btn-visualizar">
    <i class="fa-solid fa-eye"></i>
    Visualizar
</a>

                <a href="{{ route('resumoMatematicaPdf') }}" class="btn-baixar">
        <i class="fa-solid fa-download"></i>
        Baixar
    </a>

            </div>

        </div>


        <!-- MATERIAL 5 -->

        <div
            class="card-material"
            data-tipo="pdf"
            data-nome="material revisão prova">

            <div class="material-topo">

                <div class="icone-arquivo pdf">
                    <i class="fa-solid fa-file-pdf"></i>
                </div>

                <div>

                    <h3 class="material-titulo">
                        Material de Revisão — Prova
                    </h3>

                    <p class="material-descricao">
                        Conteúdos importantes para a próxima avaliação.
                    </p>

                </div>

            </div>

            <div class="material-info">

                <div class="info-item">

                    <span class="info-label">
                        PUBLICADO
                    </span>

                    <span class="info-value">
                        18/08/2026
                    </span>

                </div>

                <div class="info-item">

                    <span class="info-label">
                        FORMATO
                    </span>

                    <span class="info-value">
                        PDF
                    </span>

                </div>

                <div class="info-item">

                    <span class="info-label">
                        TAMANHO
                    </span>

                    <span class="info-value">
                        1,8 MB
                    </span>

                </div>

            </div>

            <div class="botoes-material">

                <a href="{{ route('revisaoMatematica') }}" class="btn-material btn-visualizar">
    <i class="fa-solid fa-eye"></i>
    Visualizar
</a>

                <a href="{{ route('revisaoMatematicaPdf') }}" class="btn-baixar">
        <i class="fa-solid fa-download"></i>
        Baixar
    </a>

            </div>

        </div>


        <!-- MATERIAL 6 -->

        <div
            class="card-material"
            data-tipo="atividade"
            data-nome="trabalho matemática">

            <div class="material-topo">

                <div class="icone-arquivo atividade">
                    <i class="fa-solid fa-pen-to-square"></i>
                </div>

                <div>

                    <h3 class="material-titulo">
                        Trabalho — Matemática
                    </h3>

                    <p class="material-descricao">
                        Orientações para o trabalho avaliativo do bimestre.
                    </p>

                </div>

            </div>

            <div class="material-info">

                <div class="info-item">

                    <span class="info-label">
                        PUBLICADO
                    </span>

                    <span class="info-value">
                        15/08/2026
                    </span>

                </div>

                <div class="info-item">

                    <span class="info-label">
                        ENTREGA
                    </span>

                    <span class="info-value">
                        05/09/2026
                    </span>

                </div>

                <div class="info-item">

                    <span class="info-label">
                        FORMATO
                    </span>

                    <span class="info-value">
                        PDF
                    </span>

                </div>

            </div>

            <div class="botoes-material">

               <a href="{{ route('trabalhoMatematica') }}" class="btn-material btn-visualizar">
    <i class="fa-solid fa-eye"></i>
    Visualizar
</a>
                <a href="{{ route('trabalhoMatematicaPdf') }}" class="btn-material btn-baixar">
    <i class="fa-solid fa-download"></i>
    Baixar
</a>
            </div>

        </div>

    </div>


    <!-- =========================
         SEM RESULTADOS
    ========================= -->

    <div class="sem-resultados" id="semResultados">

        <i class="fa-solid fa-folder-open"></i>

        <h3>
            Nenhum material encontrado
        </h3>

        <p>
            Tente pesquisar por outro nome ou selecionar outra categoria.
        </p>

    </div>

</div>


<!-- =========================
     ACESSIBILIDADE
========================= -->

<div class="vlibras" title="Acessibilidade">
    <i class="fa-solid fa-hands"></i>
</div>

<div class="acessibilidade" title="Opções de acessibilidade">
    <i class="fa-solid fa-universal-access"></i>
</div>


<script>

    /* =========================
       FILTRAR MATERIAIS
    ========================= */

    function filtrarMateriais(tipo, botao) {

        const cards =
            document.querySelectorAll('.card-material');

        const botoes =
            document.querySelectorAll('.filtro');

        botoes.forEach(function(btn) {
            btn.classList.remove('ativo');
        });

        botao.classList.add('ativo');

        let encontrados = 0;

        cards.forEach(function(card) {

            if (
                tipo === 'todos' ||
                card.dataset.tipo === tipo
            ) {

                card.style.display = 'block';

                encontrados++;

            } else {

                card.style.display = 'none';

            }

        });

        document.getElementById('semResultados').style.display =
            encontrados === 0 ? 'block' : 'none';

    }


    /* =========================
       PESQUISAR
    ========================= */

    function pesquisarMateriais() {

        const pesquisa =
            document
            .getElementById('campoPesquisa')
            .value
            .toLowerCase()
            .trim();

        const cards =
            document.querySelectorAll('.card-material');

        let encontrados = 0;

        cards.forEach(function(card) {

            const nome =
                card.dataset.nome.toLowerCase();

            if (nome.includes(pesquisa)) {

                card.style.display = 'block';

                encontrados++;

            } else {

                card.style.display = 'none';

            }

        });

        document.getElementById('semResultados').style.display =
            encontrados === 0 ? 'block' : 'none';

    }

</script>

</body>

</html>

