<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\CategoryController;

Route::get('/',[GameController::class,'index'])->name('games.index');
Route::get('/games/{game}/detail', [GameController::class, 'show'])->name('games.show');

Route::get('/games/create', [GameController::class, 'create'])->name('games.create');
Route::post('/games/store', [GameController::class, 'store'])->name('games.store');

Route::get('/games/{game}/edit',[GameController::class,'edit'])->name('games.edit');
Route::put('/games/{game}/update',[GameController::class,'update'])->name('games.update');

Route::delete('/games/{game}/destroy', [GameController::class, 'destroy'])->name('games.destroy');

Route::get('/games/category/{category}',[CategoryController::class, 'games'])->name('category.games');

Route::get('/games/console/{console}/',[ConsoleController::class, 'games'])->name('console.games');
