<!DOCTYPE html>
<html lang="pt-BR">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Materiais - Biologia | SIFE</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
    max-width: 1440px;
    margin: auto;
    padding: 18px 28px 60px;
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
}

.voltar:hover {
    color: #d92f3d;
}

.titulo-pequeno {
    color: #60758c;

    font-size: 14px;
    font-weight: 700;

    letter-spacing: 1.5px;

    margin-bottom: 8px;
}

.titulo-principal {
    margin: 0;

    font-size: 36px;
    font-weight: 800;
}

.subtitulo {
    color: #94a9bf;

    font-size: 16px;
    font-weight: 600;

    margin-top: 8px;
}

.materia-header {
    background: white;

    border-radius: 30px;

    padding: 30px 38px;

    margin: 30px 0 25px;

    display: flex;
    align-items: center;
    justify-content: space-between;

    box-shadow: 0 8px 25px rgba(15,42,70,.04);
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

    background: #cdeff7;

    color: #10afd2;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 30px;
}

.materia-nome {
    margin: 0 0 5px;

    font-size: 25px;
    font-weight: 800;
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

.pesquisa {
    position: relative;

    margin-bottom: 20px;
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
    height: 55px;

    border: none;
    outline: none;

    background: white;

    border-radius: 17px;

    padding: 0 20px 0 52px;

    font-size: 14px;
}

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
}

.filtro.ativo {
    background: #d92f3d;

    color: white;
}

.titulo-secao {
    display: flex;

    justify-content: space-between;

    margin-bottom: 18px;
}

.titulo-secao h2 {
    margin: 0;

    font-size: 21px;

    font-weight: 800;
}

.titulo-secao span {
    color: #9aafc4;

    font-size: 13px;
}

.grid-materiais {
    display: grid;

    grid-template-columns: repeat(2, 1fr);

    gap: 22px;
}

.card-material {
    background: white;

    border-radius: 24px;

    padding: 25px;

    box-shadow: 0 8px 25px rgba(15,42,70,.04);

    position: relative;
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
}

.material-descricao {
    margin: 0;

    color: #91a6bb;

    font-size: 13px;

    line-height: 1.5;
}

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
}

.btn-visualizar {
    background: #fff3f3;

    color: #d92f3d;
}

.btn-baixar {
    background: #f3f6f9;

    color: #627991;
}

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
}

@media(max-width:900px) {

    .grid-materiais {
        grid-template-columns: 1fr;
    }

    .materia-header {
        flex-direction: column;

        align-items: flex-start;

        gap: 20px;
    }

}

</style>

</head>

<body>

<div class="container-principal">

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


<div class="materia-header">

<div class="materia-info">

<div class="icone-materia">

<i class="fa-solid fa-dna"></i>

</div>

<div>

<h2 class="materia-nome">
Biologia
</h2>

<p class="materia-professor">
Prof. Fernando Rocha
</p>

</div>

</div>

<div class="contador">

<i class="fa-solid fa-folder-open"></i>

6 materiais

</div>

</div>


<div class="pesquisa">

<i class="fa-solid fa-magnifying-glass"></i>

<input
type="text"
id="pesquisa"
placeholder="Pesquisar materiais..."
onkeyup="pesquisar()">

</div>


<div class="filtros">

<button class="filtro ativo"
onclick="filtrar('todos',this)">
Todos
</button>

<button class="filtro"
onclick="filtrar('pdf',this)">
<i class="fa-solid fa-file-pdf"></i>
Apostilas
</button>

<button class="filtro"
onclick="filtrar('atividade',this)">
<i class="fa-solid fa-pen-to-square"></i>
Atividades
</button>

<button class="filtro"
onclick="filtrar('video',this)">
<i class="fa-solid fa-play"></i>
Videoaulas
</button>

<button class="filtro"
onclick="filtrar('resumo',this)">
<i class="fa-solid fa-book"></i>
Resumos
</button>

</div>


<div class="titulo-secao">

<h2>
Materiais disponíveis
</h2>

<span>
Atualizados recentemente
</span>

</div>


<div class="grid-materiais">


<div class="card-material" data-tipo="pdf">

<span class="novo">
NOVO
</span>

<div class="material-topo">

<div class="icone-arquivo pdf">

<i class="fa-solid fa-file-pdf"></i>

</div>

<div>

<h3 class="material-titulo">
Apostila — Genética
</h3>

<p class="material-descricao">
Material completo sobre genética e hereditariedade.
</p>

</div>

</div>


<div class="material-info">

<div class="info-item">

<span class="info-label">
PUBLICADO
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
3,1 MB
</span>

</div>

</div>


<div class="botoes-material">

<a href="{{ route('apostilaBiologia') }}" class="btn-material btn-visualizar">
        <i class="fa-solid fa-eye"></i>
        Visualizar
    </a>

    <a href="{{ route('apostilaBiologiaPdf') }}" class="btn-material btn-baixar">
        <i class="fa-solid fa-download"></i>
        Baixar
    </a>

</div>

</div>


<div class="card-material" data-tipo="resumo">

<div class="material-topo">

<div class="icone-arquivo resumo">

<i class="fa-solid fa-book"></i>

</div>

<div>

<h3 class="material-titulo">
Resumo — Células e Organelas
</h3>

<p class="material-descricao">
Resumo sobre estrutura celular e principais organelas.
</p>

</div>

</div>


<div class="material-info">

<div class="info-item">

<span class="info-label">
PUBLICADO
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
PÁGINAS
</span>

<span class="info-value">
7
</span>

</div>

</div>


<div class="botoes-material">

<a href="{{ route('resumoBiologia') }}" class="btn-material btn-visualizar">
        <i class="fa-solid fa-eye"></i>
        Visualizar
    </a>

    <a href="{{ route('resumoBiologiaPdf') }}" class="btn-material btn-baixar">
        <i class="fa-solid fa-download"></i>
        Baixar
    </a>

</div>

</div>


<div class="card-material" data-tipo="video">

<div class="material-topo">

<div class="icone-arquivo video">

<i class="fa-solid fa-play"></i>

</div>

<div>

<h3 class="material-titulo">
Videoaula — DNA e RNA
</h3>

<p class="material-descricao">
Aula sobre estrutura e funções do DNA e RNA.
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
20 min
</span>

</div>

</div>


<div class="botoes-material">

  <a href="{{ route('videoaulaBiologia') }}" class="btn-material btn-visualizar">

        <i class="fa-solid fa-eye"></i>

        Visualizar

    </a>

</div>

</div>


<div class="card-material" data-tipo="atividade">

<div class="material-topo">

<div class="icone-arquivo atividade">

<i class="fa-solid fa-pen-to-square"></i>

</div>

<div>

<h3 class="material-titulo">
Lista de Exercícios — Genética
</h3>

<p class="material-descricao">
Exercícios para revisar os conceitos de genética.
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
QUESTÕES
</span>

<span class="info-value">
20
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

<a href="{{ route('listaBiologia') }}" class="btn-material btn-visualizar">
        <i class="fa-solid fa-eye"></i>
        Visualizar
    </a>

    <a href="{{ route('listaBiologiaPdf') }}" class="btn-material btn-baixar">
        <i class="fa-solid fa-download"></i>
        Baixar
    </a>

</div>

</div>


<div class="card-material" data-tipo="pdf">

<div class="material-topo">

<div class="icone-arquivo pdf">

<i class="fa-solid fa-file-pdf"></i>

</div>

<div>

<h3 class="material-titulo">
Material — Evolução
</h3>

<p class="material-descricao">
Conteúdo sobre evolução e seleção natural.
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
2,5 MB
</span>

</div>

</div>


<div class="botoes-material">

<a href="{{ route('materialEvolucao') }}" class="btn-material btn-visualizar">
        <i class="fa-solid fa-eye"></i>
        Visualizar
    </a>

    <a href="{{ route('materialEvolucaoPdf') }}" class="btn-material btn-baixar">
        <i class="fa-solid fa-download"></i>
        Baixar
    </a>

</div>

</div>


<div class="card-material" data-tipo="resumo">

<div class="material-topo">

<div class="icone-arquivo resumo">

<i class="fa-solid fa-book"></i>

</div>

<div>

<h3 class="material-titulo">
Revisão — Citologia
</h3>

<p class="material-descricao">
Material de revisão para a avaliação de Biologia.
</p>

</div>

</div>


<div class="material-info">

<div class="info-item">

<span class="info-label">
PUBLICADO
</span>

<span class="info-value">
17/08/2026
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
9
</span>

</div>

</div>


<div class="botoes-material">

<a href="{{ route('revisaoBiologia') }}" class="btn-material btn-visualizar">
        <i class="fa-solid fa-eye"></i>
        Visualizar
    </a>

    <a href="{{ route('revisaoBiologiaPdf') }}" class="btn-material btn-baixar">
        <i class="fa-solid fa-download"></i>
        Baixar
    </a>

</div>

</div>


</div>

</div>


<div class="vlibras">

<i class="fa-solid fa-hands"></i>

</div>


<div class="acessibilidade">

<i class="fa-solid fa-universal-access"></i>

</div>


<script>

function filtrar(tipo, botao) {

document.querySelectorAll('.filtro').forEach(function(btn) {

btn.classList.remove('ativo');

});

botao.classList.add('ativo');


document.querySelectorAll('.card-material').forEach(function(card) {

if (tipo === 'todos' || card.dataset.tipo === tipo) {

card.style.display = 'block';

} else {

card.style.display = 'none';

}

});

}


function pesquisar() {

const texto = document
.getElementById('pesquisa')
.value
.toLowerCase();


document.querySelectorAll('.card-material').forEach(function(card) {

if (card.innerText.toLowerCase().includes(texto)) {

card.style.display = 'block';

} else {

card.style.display = 'none';

}

});

}

</script>

</body>

</html>