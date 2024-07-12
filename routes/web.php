<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function () {
        Route::get('curso', 'index')->name('cursos.index');
        Route::get('curso/create', 'create')->name('cursos.create');
        Route::post('curso', 'store')->name('curso.store');
        Route::get('curso/{curso}', 'show')->name('cursos.show');
        Route::get('curso/{curso}/edit', 'edit')->name('cursos.edit');
        Route::put('curso/{curso}', 'update')->name('cursos.update');
    }
);
