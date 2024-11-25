<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\OrcamentoController;

// Rota para a página de listagem de orçamentos
Route::get('/orcamentos', [OrcamentoController::class, 'index'])->name('orcamentos.index');

// Rota para exibir o formulário de criação de orçamento
Route::get('/orcamentos/create', [OrcamentoController::class, 'create'])->name('orcamentos.create');

// Rota para armazenar o novo orçamento
Route::post('/orcamentos', [OrcamentoController::class, 'store'])->name('orcamentos.store');

// Rota para editar um orçamento
Route::get('/orcamentos/{id}/edit', [OrcamentoController::class, 'edit'])->name('orcamentos.edit');

// Rota para atualizar o orçamento
Route::put('/orcamentos/{id}', [OrcamentoController::class, 'update'])->name('orcamentos.update');

// Rota para excluir o orçamento
Route::delete('/orcamentos/{id}', [OrcamentoController::class, 'destroy'])->name('orcamentos.destroy');


Route::resource('orcamentos', OrcamentoController::class);