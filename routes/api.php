<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\GestorController;
use App\Http\Controllers\EstacaoController;
use App\Http\Controllers\CursoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('enderecos', EnderecoController::class);
Route::apiResource('gestores', GestorController::class);
Route::apiResource('estacoes', EstacaoController::class);
Route::apiResource('cursos', CursoController::class);


