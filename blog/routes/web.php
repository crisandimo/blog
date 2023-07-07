<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use Illuminate\Database\Query\IndexHint;

Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function () {
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
});

// Como se definen rutas sin agrupar
// Route::get('cursos',[CursoController::class, 'index']);
// Route::get('cursos/create',[CursoController::class, 'create']);
// Route::get('cursos/{course}',[CursoController::class, 'show']);