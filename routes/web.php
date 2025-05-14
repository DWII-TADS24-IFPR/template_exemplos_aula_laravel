<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaControllers;
use App\Http\Controllers\DocumentoController;

// Route::get('/pessoas',[PessoaController::class,'index'])->name('pessoas.index');
// Route::get('/pessoas/create',[PessoaController::class,'create']);
// Route::post('/pessoas',[PessoaController::class,'store'])->name('pessoas.store');

// Route::get('/', function () {
//     return view('home', ['idade' => null,'frutas' => ['banana', 'maçã', 'laranja']]);
// })->name('home');

// Route::resource('/niveis', NivelController::class);

// Route::get('/relatorios', [RelatorioController::class, 'emitirRelatorio'])->name('relatorio.emitir');

// Route::get('/graficos', function (){
//     return view('graficos.index');
// })->name('graficos');


Route::get('/documentos/create',[DocumentoController::class,'create'])->name('documentos.create');
Route::post('/documentos/create',[DocumentoController::class,'store'])->name('documentos.store');
