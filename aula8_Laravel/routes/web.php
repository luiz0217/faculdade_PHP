<?php

use App\Http\Controllers\clientes;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\prod;
use App\Http\Controllers\SobreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/sobre', [SobreController::class,'sobre'])->name('sobre');
Route::get('/mercado',[prod::class,'Produto1'])->name('mercado');
Route::get('/bbuy',[prod::class,'Produto2'])->name('bbuy');
Route::get('/tnt',[prod::class,'Produto3'])->name('tnt');
Route::get('/clientes',[clientes::class,'clientes'])->name('clientes');
//Route::get('/contato', [ContatoController::class,'contato'])->name('contato');
