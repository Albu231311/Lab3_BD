<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('cursos', CursoController::class);
Route::resource('estudiantes', App\Http\Controllers\EstudianteController::class);
//Route::resource('cursos', App\Http\Controllers\CursoController::class);

