<?php

use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\PainelProfessorController;
use App\Http\Controllers\ComunicadoController;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| PÁGINAS PÚBLICAS & AUTENTICAÇÃO
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // OBS: renomeada para evitar conflito com 'password.update' (usada abaixo)
    Route::get('/profile/password', [ProfileController::class, 'password'])
        ->name('profile.password');

    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])
        ->name('profile.password.update');

});

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::get('/', function () {
    return view('signin');
})->name('welcome');

Route::get('/signin', function () {
    return view('signin');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::post('/signup', [AuthController::class, 'register'])->name('register.store');
Route::post('/signin', [AuthController::class, 'login'])->name('login.auth');


/*
|--------------------------------------------------------------------------
| ROTAS PROTEGIDAS (REQUER AUTENTICAÇÃO)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // NAVEGAÇÃO GERAL
    Route::get('/button', function () { return view('button'); })->name('button');
    Route::get('/chart', function () { return view('chart'); })->name('chart');
    Route::get('/index', [EventoController::class, 'index'])->name('index');
    Route::get('/widget', [DashboardController::class, 'index'])->name('widget');

    // TURMAS
    Route::get('/table', [TurmaController::class, 'table'])->name('table');
    Route::get('/turmas', [TurmaController::class, 'table'])->name('turmas.index');
    Route::get('/turmas/criar', [TurmaController::class, 'criar'])->name('turmas.criar');
    Route::post('/turmas/salvar', [TurmaController::class, 'salvar'])->name('turmas.salvar');

    // PERFIL E CONFIGURAÇÕES
    Route::get('/profile', function () { return view('profile'); })->name('profile');
    Route::get('/password', function () { return view('password'); })->name('password.view');
    Route::get('/perfil/editar', function () { return view('edit-profile'); })->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // ALTERAR SENHA (movidas para dentro do middleware auth)
    Route::get('/alterar-senha', [PasswordController::class, 'show'])->name('password.show');
    Route::post('/alterar-senha', [PasswordController::class, 'update'])->name('password.update');

    // FREQUÊNCIA
    Route::get('/frequencia', [TurmaController::class, 'frequencia'])->name('frequencia');
    Route::post('/frequencia/alterar/{id}', [TurmaController::class, 'alterarStatus']);
    Route::get('/frequencia-professor', [TurmaController::class, 'frequenciaProfessor'])->name('frequencia-professor');
    Route::post('/frequencia/salvar', [TurmaController::class, 'salvarFrequencia'])->name('frequencia.salvar');

    // GERENCIAMENTO DE ALUNOS
    Route::get(
        '/typography',
        [AlunoController::class, 'index']
    )->name('typography');

    Route::get(
        '/alunos/criar',
        [AlunoController::class, 'criar']
    )->name('alunos.criar');

    Route::post(
        '/alunos/salvar',
        [AlunoController::class, 'salvar']
    )->name('alunos.salvar');

    Route::get(
        '/alunos/{id}/visualizar',
        [AlunoController::class, 'visualizar']
    )->name('alunos.visualizar');

    Route::put(
        '/alunos/{id}/atualizar',
        [AlunoController::class, 'atualizar']
    )->name('alunos.atualizar');
    // Route::get('/gerenciar-alunos', [AdminController::class, 'gerenciarAlunos'])->name('gerenciar.alunos');

    // ÁREA DO ALUNO
    Route::get('/alunos-acesso', function () { return view('alunos-acesso'); })->name('aluno-acesso');
    Route::get('/perfilAluno', function () { return view('perfilAluno'); })->name('perfilAluno');
    Route::get('/notasAluno', [AlunoController::class, 'notasAluno'])->name('notasAluno');
    Route::get('/frequenciaAluno', function () { return view('frequenciaAluno'); })->name('frequenciaAluno');
    Route::get('/materiaAluno', function () { return view('materiaAluno'); })->name('materiaAluno');
    Route::get('/eventosAluno', function () { return view('eventosAluno'); })->name('eventosAluno');
    Route::get('/eventos-aluno', [EventoController::class, 'eventosAluno'])->name('eventosAluno.auth');
    Route::get('/perfil-aluno', function () { return view('perfilAluno'); })->name('perfilAluno.auth');
    

    // PAINEL E AÇÕES DO PROFESSOR
    Route::get('/painel-professor', function () {
        $totalTurmas = DB::table('Turmas')->get();
        return view('painel-professor', compact('totalTurmas'));
    })->name('painel-professor');

    Route::get('/turmas-professor', [ProfessorController::class, 'turmasProfessor'])->name('turmasProfessor');
    Route::get('/notas-professor', [ProfessorController::class, 'notasProfessor'])->name('notas-professor');
    Route::post('/notas/salvar', [ProfessorController::class, 'salvarNotas'])->name('notas.salvar');
    Route::get('/perfil-professor', function () { return view('perfil-professor'); })->name('perfil-professor');

    // MATERIAIS PROFESSOR
    Route::get('/materiais-professor', [MaterialController::class, 'index'])->name('materiais-professor');
    Route::get('/materiais-professor-adicionar', [MaterialController::class, 'create'])->name('materiais-professor-adicionar');
    Route::post('/professor/materiais', [MaterialController::class, 'store'])->name('materiais-professor-store');

    // COMUNICADOS & EVENTOS
    Route::get('/comunicados-professor', function () { return view('comunicados-professor'); })->name('comunicados-professor');
    Route::post('/comunicados/salvar', function (Request $request) {
        return back()->with('sucesso', 'Comunicado enviado com sucesso!');
    })->name('comunicados.store');

    Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');
    Route::get('/eventos/criar', [EventoController::class, 'create'])->name('adicionar-evento');
    Route::post('/eventos/salvar', [EventoController::class, 'store'])->name('eventos.store');

    Route::get('/editar-evento', function () {
        return view('editar-evento');
    })->name('editar-evento');

    // RELATÓRIOS PDF
    Route::get('/dashboard-pdf', [ProfessorController::class, 'exportarDashboardPdf'])->name('dashboard.pdf');
    Route::get('/notas-pdf', [AlunoController::class, 'gerarPdfNotas'])->name('notas.pdf');

    // LOGOUT
    Route::post('/logout', function (Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    })->name('logout');

});

Route::get('/materiais/fisica', function () {
    return view('materiais.fisica');
})->name('materiais.fisica');


Route::get('/materiais/historia', function () {
    return view('materiais.historia');
})->name('materiais.historia');


Route::get('/materiais/biologia', function () {
    return view('materiais.biologia');
})->name('materiais.biologia');

Route::get('/materiais/quimica', function () {
    return view('materiais.quimica');
})->name('materiais.quimica');


Route::get('/notas-professor', [NotaController::class, 'index'])->name('notas-professor');

// Rota da API AJAX para obter os alunos
Route::get('/obter-alunos-turma', [NotaController::class, 'obterAlunosTurma'])->name('obter-alunos-turma');

Route::post('/salvar-notas', [NotaController::class, 'salvarNotas'])->name('salvar-notas');

Route::get('/painel-professor', [PainelProfessorController::class, 'index'])->name('painel-professor');

// Rota para visualizar a página
Route::get('/comunicados-professor', [ComunicadoController::class, 'index'])->name('comunicados.index');

// Rota para processar o envio do formulário

Route::get('/comunicados-professor', [ComunicadoController::class, 'index'])->name('comunicados-professor');

// Rota de envio do formulário
Route::post('/comunicados-professor', [ComunicadoController::class, 'store'])->name('comunicados.store');

Route::get('/relatorios/{id_turma}', function ($id_turma) {
    return view('relatorios', compact('id_turma'));
})->name('relatorios');


Route::get('/materiais/matematica', function () {
    return view('materiais.matematica');
})->name('materiaisMatematica');

Route::get('/materiais/matematica/visualizar', function () {
    return view('materiais.visualizar-matematica');
})->name('visualizarMatematica');

Route::get('/materiais/matematica/exercicios-equacoes', function () {
    return view('materiais.exercicios-equacoes');
})->name('exerciciosEquacoes');

Route::get('/materiais/matematica/resumo', function () {
    return view('materiais.resumo-matematica');
})->name('resumoMatematica');

Route::get('/materiais/matematica/revisao', function () {
    return view('materiais.revisao-matematica');
})->name('revisaoMatematica');

Route::get('/materiais/matematica/trabalho', function () {
    return view('materiais.trabalho-matematica');
})->name('trabalhoMatematica');

use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/materiais/matematica/trabalho/pdf', function () {
    $pdf = Pdf::loadView('materiais.trabalho-matematica');

    return $pdf->download('trabalho-matematica.pdf');
})->name('trabalhoMatematicaPdf');

Route::get('/materiais/matematica/revisao/pdf', function () {
    $pdf = Pdf::loadView('materiais.revisao-matematica');

    return $pdf->download('revisao-matematica.pdf');
})->name('revisaoMatematicaPdf');

Route::get('/materiais/matematica/resumo/pdf', function () {
    $pdf = Pdf::loadView('materiais.resumo-matematica');

    return $pdf->download('resumo-matematica.pdf');
})->name('resumoMatematicaPdf');

Route::get('/materiais/matematica/exercicios-equacoes/pdf', function () {
    $pdf = Pdf::loadView('materiais.exercicios-equacoes');

    return $pdf->download('lista-exercicios-equacoes.pdf');
})->name('exerciciosEquacoesPdf');

Route::get('/materiais/matematica/apostila', function () {
    return view('materiais.apostila-matematica');
})->name('apostilaMatematica'); 

Route::get('/materiais/matematica/apostila/pdf', function () {

    $pdf = Pdf::loadView('materiais.apostila-matematica');

    return $pdf->download('apostila-funcoes-1-grau.pdf');

})->name('apostilaMatematicaPdf');

Route::get('/materiais/matematica/videoaula', function () {
    return view('materiais.videoaula-matematica');
})->name('videoaulaMatematica');


Route::get('/materiais/portugues', function () {
    return view('materiais.portugues');
})->name('materiaisPortugues');

Route::get('/materiais/portugues/apostila', function () {
    return view('materiais.apostila-portugues');
})->name('apostilaPortugues');

Route::get('/materiais/portugues/apostila/pdf', function () {
    $pdf = Pdf::loadView('materiais.apostila-portugues');
    return $pdf->download('apostila-gramatica.pdf');
})->name('apostilaPortuguesPdf');

Route::get('/materiais/portugues/lista', function () {
    return view('materiais.lista-portugues');
})->name('listaPortugues');

Route::get('/materiais/portugues/lista/pdf', function () {
    $pdf = Pdf::loadView('materiais.lista-portugues');
    return $pdf->download('lista-interpretacao-de-texto.pdf');
})->name('listaPortuguesPdf');

Route::get('/materiais/portugues/videoaula', function () {
    return view('materiais.videoaula-portugues');
})->name('videoaulaPortugues');

Route::get('/materiais/portugues/resumo', function () {
    return view('materiais.resumo-portugues');
})->name('resumoPortugues');

Route::get('/materiais/portugues/resumo/pdf', function () {
    $pdf = Pdf::loadView('materiais.resumo-portugues');
    return $pdf->download('resumo-figuras-de-linguagem.pdf');
})->name('resumoPortuguesPdf');

Route::get('/materiais/fisica/apostila', function () {
    return view('materiais.apostila-fisica');
})->name('apostilaFisica');

Route::get('/materiais/fisica/apostila/pdf', function () {
    $pdf = Pdf::loadView('materiais.apostila-fisica');

    return $pdf->download('apostila-cinematica.pdf');
})->name('apostilaFisicaPdf');

Route::get('/materiais/fisica/lista', function () {
    return view('materiais.lista-fisica');
})->name('listaFisica');

Route::get('/materiais/fisica/lista/pdf', function () {
    $pdf = Pdf::loadView('materiais.lista-fisica');

    return $pdf->download('lista-movimento-uniforme.pdf');
})->name('listaFisicaPdf');

Route::get('/materiais/fisica/videoaula', function () {
    return view('materiais.videoaula-fisica');
})->name('videoaulaFisica');

Route::get('/materiais/fisica/resumo', function () {
    return view('materiais.resumo-fisica');
})->name('resumoFisica');

Route::get('/materiais/fisica/resumo/pdf', function () {
    $pdf = Pdf::loadView('materiais.resumo-fisica');

    return $pdf->download('resumo-dinamica.pdf');
})->name('resumoFisicaPdf');

Route::get('/materiais/historia/apostila', function () {
    return view('materiais.apostila-historia');
})->name('apostilaHistoria');

Route::get('/materiais/historia/apostila/pdf', function () {
    $pdf = Pdf::loadView('materiais.apostila-historia');

    return $pdf->download('apostila-revolucao-industrial.pdf');
})->name('apostilaHistoriaPdf');

Route::get('/materiais/historia/resumo', function () {
    return view('materiais.resumo-historia');
})->name('resumoHistoria');

Route::get('/materiais/historia/resumo/pdf', function () {
    $pdf = Pdf::loadView('materiais.resumo-historia');

    return $pdf->download('resumo-primeira-guerra-mundial.pdf');
})->name('resumoHistoriaPdf');

Route::get('/materiais/historia/era-vargas', function () {
    return view('materiais.material-historia');
})->name('materialEraVargas');

Route::get('/materiais/historia/era-vargas/pdf', function () {
    $pdf = Pdf::loadView('materiais.material-historia');

    return $pdf->download('material-era-vargas.pdf');
})->name('materialEraVargasPdf');

Route::get('/materiais/historia/lista', function () {
    return view('materiais.lista-historia');
})->name('listaHistoria');

Route::get('/materiais/historia/lista/pdf', function () {
    $pdf = Pdf::loadView('materiais.lista-historia');

    return $pdf->download('lista-brasil-republica.pdf');
})->name('listaHistoriaPdf');

Route::get('/materiais/historia/revisao', function () {
    return view('materiais.revisao-historia');
})->name('revisaoHistoria');

Route::get('/materiais/historia/revisao/pdf', function () {
    $pdf = Pdf::loadView('materiais.revisao-historia');

    return $pdf->download('revisao-historia-do-brasil.pdf');
})->name('revisaoHistoriaPdf');

Route::get('/materiais/historia/videoaula', function () {
    return view('materiais.videoaula-historia');
})->name('videoaulaHistoria');

Route::get('/materiais/biologia/apostila', function () {
    return view('materiais.apostila-biologia');
})->name('apostilaBiologia');

Route::get('/materiais/biologia/apostila/pdf', function () {
    $pdf = Pdf::loadView('materiais.apostila-biologia');

    return $pdf->download('apostila-genetica.pdf');
})->name('apostilaBiologiaPdf');

Route::get('/materiais/biologia/resumo', function () {
    return view('materiais.resumo-biologia');
})->name('resumoBiologia');

Route::get('/materiais/biologia/resumo/pdf', function () {
    $pdf = Pdf::loadView('materiais.resumo-biologia');

    return $pdf->download('resumo-celulas-e-organelas.pdf');
})->name('resumoBiologiaPdf');

Route::get('/materiais/biologia/videoaula', function () {
    return view('materiais.videoaula-biologia');
})->name('videoaulaBiologia');

Route::get('/materiais/biologia/lista', function () {
    return view('materiais.lista-biologia');
})->name('listaBiologia');

Route::get('/materiais/biologia/lista/pdf', function () {
    $pdf = Pdf::loadView('materiais.lista-biologia');

    return $pdf->download('lista-exercicios-genetica.pdf');
})->name('listaBiologiaPdf');

Route::get('/materiais/biologia/evolucao', function () {
    return view('materiais.material-biologia');
})->name('materialEvolucao');

Route::get('/materiais/biologia/evolucao/pdf', function () {
    $pdf = Pdf::loadView('materiais.material-biologia');

    return $pdf->download('material-evolucao.pdf');
})->name('materialEvolucaoPdf');

Route::get('/materiais/biologia/revisao', function () {
    return view('materiais.revisao-biologia');
})->name('revisaoBiologia');

Route::get('/materiais/biologia/revisao/pdf', function () {
    $pdf = Pdf::loadView('materiais.revisao-biologia');

    return $pdf->download('revisao-citologia.pdf');
})->name('revisaoBiologiaPdf');

Route::get('/materiais/quimica/apostila', function () {
    return view('materiais.apostila-quimica');
})->name('apostilaQuimica');

Route::get('/materiais/quimica/apostila/pdf', function () {
    $pdf = Pdf::loadView('materiais.apostila-quimica');

    return $pdf->download('apostila-tabela-periodica.pdf');
})->name('apostilaQuimicaPdf');

Route::get('/materiais/quimica/lista', function () {
    return view('materiais.lista-quimica');
})->name('listaQuimica');

Route::get('/materiais/quimica/lista/pdf', function () {
    $pdf = Pdf::loadView('materiais.lista-quimica');

    return $pdf->download('lista-ligacoes-quimicas.pdf');
})->name('listaQuimicaPdf');

Route::get('/materiais/quimica/videoaula', function () {
    return view('materiais.videoaula-quimica');
})->name('videoaulaQuimica');

Route::get('/materiais/quimica/resumo', function () {
    return view('materiais.resumo-quimica');
})->name('resumoQuimica');

Route::get('/materiais/quimica/resumo/pdf', function () {
    $pdf = Pdf::loadView('materiais.resumo-quimica');

    return $pdf->download('resumo-acidos-e-bases.pdf');
})->name('resumoQuimicaPdf');

Route::get('/materiais/quimica/material', function () {
    return view('materiais.material-quimica');
})->name('materialQuimica');

Route::get('/materiais/quimica/material/pdf', function () {
    $pdf = Pdf::loadView('materiais.material-quimica');

    return $pdf->download('material-quimica-organica.pdf');
})->name('materialQuimicaPdf');

Route::get('/materiais/quimica/exercicios', function () {
    return view('materiais.exercicios-quimica');
})->name('exerciciosQuimica');

Route::get('/materiais/quimica/exercicios/pdf', function () {
    $pdf = Pdf::loadView('materiais.exercicios-quimica');

    return $pdf->download('exercicios-estequiometria.pdf');
})->name('exerciciosQuimicaPdf');