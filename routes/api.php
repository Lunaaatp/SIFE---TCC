<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\RfidController;
use App\Http\Controllers\ControllersApi\AuthApiController;
use App\Http\Controllers\ControllersApi\FrequenciaApiController;
use App\Http\Controllers\ControllersApi\ReconhecimentoFacialController;

// =====================================================
// PÚBLICAS (sem token)
// =====================================================

// Login do app -> devolve o token
Route::post('/login', [AuthApiController::class, 'login']);

// RFID: o ESP32 não faz login, por isso ficam fora do token
Route::post('/rfid/presenca',          [TurmaController::class, 'registrarPresencaRFID']);
Route::post('/rfid/cadastro/iniciar',  [RfidController::class, 'ativarCadastro']);
Route::get('/rfid/status',             [RfidController::class, 'status']);
Route::post('/rfid/capturar',          [RfidController::class, 'capturar']);
Route::post('/rfid/cadastro/cancelar', [RfidController::class, 'cancelarCadastro']);


// =====================================================
// PROTEGIDAS (exigem Authorization: Bearer <token>)
// =====================================================

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthApiController::class, 'logout']);

    // TURMAS E ALUNOS
    Route::get('/turmas',              [TurmaController::class, 'getTurmasApi']);
    Route::get('/turmas/{id}/alunos',  [TurmaController::class, 'getAlunosDaTurma']);
    Route::get('/alunos',              [AlunoController::class, 'apiIndex']);
    Route::post('/cadastrar-com-foto', [AlunoController::class, 'cadastrarComFoto']);

    // FREQUÊNCIA
    Route::get('/frequencia',  [FrequenciaApiController::class, 'index']);
    Route::post('/frequencia', [FrequenciaApiController::class, 'salvarFrequencia']);

    // RECONHECIMENTO FACIAL
    Route::post('/reconhecimento/cadastrar', [ReconhecimentoFacialController::class, 'cadastrar']);
    Route::post('/reconhecimento/reconhecer', [ReconhecimentoFacialController::class, 'reconhecer']);
});