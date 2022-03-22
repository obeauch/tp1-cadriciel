<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\InitController;
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
    return view('index');
});

Route::get('/init', [InitController::class, 'index']);
Route::get('/films', [FilmController::class, 'films']);

// ordre entre films/chercher et films/{id} important pour ne pas créer de conflit
Route::get('/films/chercher', [FilmController::class, 'rechercher']);
Route::get('/films/{id}', [FilmController::class, 'show']);



