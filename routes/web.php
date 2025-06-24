<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/libri/dettaglio-prodotto/{book}', [PageController::class, 'detail'])->name('detail');


Route::middleware(['auth'])->group(function () {
    //lista libri
    Route::get('/libri', [BookController::class, 'index'])->name('index');
    //creazione/salvataggio
    Route::get('/libri/create', [BookController::class, 'create'])->name('create');
    Route::post('/libri/save', [BookController::class, 'saveBook'])->name('saveBook');;
    //mostra
    Route::get('/libri/mostra/{book}', [BookController::class, 'show'])->name('show');;
    //form di modifica GET e update (POST)
    Route::get('/libri/modifica/{book}', [BookController::class, 'edit'])->name('edit');
    Route::put('/libri/aggiorna/{book}', [BookController::class, 'update'])->name('update');
    //rotta di cancellazione
    Route::delete('/libri/{book}', [BookController::class, 'destroy'])->name('destroy');
    Route::resource('authors', AuthorController::class);
});
