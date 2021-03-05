<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});


Route::get('/inicio', [App\Http\Controllers\InicioController::class, 'index'])->name('inicio');
Route::get('/sobrenos', [App\Http\Controllers\SobrenosController::class, 'index'])->name('sobrenos');
Route::get('/amostra', [App\Http\Controllers\AmostraController::class, 'index'])->name('amostra');
Route::get('/resultado/{id}', [App\Http\Controllers\PerguntasController::class, 'resultado'])->name('resultado');


// ROTAS DAS PERGUNTAS

Route::get('/perguntas1/{id}', [App\Http\Controllers\PerguntasController::class, 'index1'])->name('perguntas1');
Route::get('/perguntas2/{id}', [App\Http\Controllers\PerguntasController::class, 'index2'])->name('perguntas2');
Route::get('/perguntas3/{id}', [App\Http\Controllers\PerguntasController::class, 'index3'])->name('perguntas3');
Route::get('/perguntas4/{id}', [App\Http\Controllers\PerguntasController::class, 'index4'])->name('perguntas4');

// ROTAS DOS RESULTADOS

Route::post('/resultado1', [App\Http\Controllers\PerguntasController::class, 'resultado1'])->name('resultado1');
Route::post('/resultado2', [App\Http\Controllers\PerguntasController::class, 'resultado2'])->name('resultado2');
Route::post('/resultado3', [App\Http\Controllers\PerguntasController::class, 'resultado3'])->name('resultado3');
Route::post('/resultado4', [App\Http\Controllers\PerguntasController::class, 'resultado4'])->name('resultado4');

