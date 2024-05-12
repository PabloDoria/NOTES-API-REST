<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\ClasificacionController;
use App\Http\Controllers\NotaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('clasificacion', ClasificacionController::class);
Route::put('/clasificacion/{id}', [ClasificacionController::class, 'update']);
Route::delete('/clasificacion/{id}', [ClasificacionController::class, 'destroy']);

Route::resource('nota', NotaController::class);
Route::put('/nota/{id}', [AutorController::class, 'update']);
Route::delete('/nota/{id}', [AutorController::class, 'destroy']);

Route::resource('autor', AutorController::class);
Route::put('/autor/{id}', [AutorController::class, 'update']);
Route::delete('/autor/{id}', [AutorController::class, 'destroy']);



