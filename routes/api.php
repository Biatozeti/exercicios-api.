<?php

use App\Http\Controllers\Exercicio3;
use App\Http\Controllers\ExercicioCinco;
use App\Http\Controllers\ExercicioDois;
use App\Http\Controllers\ExercicioOito;
use App\Http\Controllers\ExercicioQuatro;
use App\Http\Controllers\ExercicioSeis;
use App\Http\Controllers\ExercicioSete;
use App\Http\Controllers\ExercicioUm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

route::post('exercicio/um',
[ExercicioUm::class, 'multiplicar']);

Route::get('exercicio/sete', 
[ExercicioSete::class, 'exibirNumeros']);

Route::post('exercicio/dois', 
[ExercicioDois::class, 'retornarMaior']);

Route::post('exercicio/quatro',
[ExercicioQuatro::class, 'verficar']);

Route::post('exercicio/3', 
[Exercicio3::class, 'media']);

Route::post('exercicio/cinco',
[ExercicioCinco::class, 'verificacao']);

Route::post('exercicio/seis',
[ExercicioSeis::class, 'idade']);

Route::post('exercicio/oito',
[ExercicioOito::class, 'tabuada']);
