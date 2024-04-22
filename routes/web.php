<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
|------------------
| Web
|-----------
|
| Here
| routes
| be
|
*/

Route::get('/', HomeController::class);
Route::get('curso', [CursoController::class, 'index']);
Route::get('curso/create', [CursoController::class, 'create']);
Route:: get('curso/{curso}', [CursoController::class, 'show']);
