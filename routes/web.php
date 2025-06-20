<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
//lista libri
Route::get('/', [BookController::class, 'index'])->name('index');
//creazione/salvataggio
Route::get('/create', [BookController::class, 'create'])->name('create');
Route::post('/save', [BookController::class, 'saveBook'])->name('saveBook');;
//mostra
Route::get('/mostra/{book}', [BookController::class, 'show'])->name('show');;
//form di modifica GET e update (POST)
Route::get('/modifica/{book}', [BookController::class, 'edit'])->name('edit');
Route::put('/aggiorna/{book}', [BookController::class, 'update'])->name('update');
//rotta di cancellazione
Route::delete('/{book}', [BookController::class, 'destroy'])->name('destroy');
