<?php

use App\Http\Controllers\JogosEliminatorias\JogosEliminatoriasController;
use App\Http\Controllers\JogosGrupos\JogoGruposController;
use App\Http\Controllers\Palpites\PalpitesController;
use App\Http\Controllers\Pontos\PontosController;
use App\Http\Controllers\Times\TimesController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('times', [TimesController::class, 'index']);

Route::get('jogos-grupos', [JogoGruposController::class, 'all']);
Route::put('jogos-grupos/{id}', [JogoGruposController::class, 'update']);

Route::get('jogos-eliminatorias', [JogosEliminatoriasController::class, 'all']);
Route::put('jogos-eliminatorias/{id}', [JogosEliminatoriasController::class, 'update']);



Route::get('palpites-fase-grupos', [PalpitesController::class, 'allFaseGrupo']);
Route::get('palpites-fase-eliminatorias', [PalpitesController::class, 'allFaseEliminatorias']);
Route::post('palpites', [PalpitesController::class, 'create']);

Route::get('pontos', [PontosController::class, 'all']);
