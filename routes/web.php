<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\ClasificacionController;
use App\Http\Controllers\NotaController;

Route::get('/', function () {
    return view('welcome');
});
