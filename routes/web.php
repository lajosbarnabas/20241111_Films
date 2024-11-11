<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/films');
Route::get('/films', [FilmController::class, 'index']);
Route::get('/films/{id}', [FilmController::class, 'show']);

Route::get('/directors', [FilmController::class, 'directors']);
Route::get('/directors/{director}', [FilmController::class, 'filmsOfDirector']);

Route::post('/films/search-by-title', [FilmController::class, 'searchByTitle']);
