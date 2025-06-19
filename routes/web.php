<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('index');
Route::get('/create', [BookController::class, 'create'])->name('create');
Route::post('/save', [BookController::class, 'saveBook'])->name('saveBook');;
