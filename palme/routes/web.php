<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaureatController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\FilmController;

Route::get('/listelaureats', [LaureatController::class, 'listeLaureats'])->name('liste_laureats');
Route::get('/listefilms', [FilmController::class, 'listeFilms'])->name('films.listefilms');
Route::get('/laureats/{id}/edit', [LaureatController::class, 'edit'])->name('laureats.edit');
Route::put('/laureats/{id}', [LaureatController::class, 'update'])->name('laureats.update');
Route::delete('/laureats/{id}', [LaureatController::class, 'destroy'])->name('laureats.destroy');
Route::get('/', [AccueilController::class, 'acceuil'])->name('accueil');