<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/',[GameController::class,'index'])->name('games.index');
Route::get('/games/{game}/detail', [GameController::class, 'show'])->name('games.show');

Route::get('/games/create', [GameController::class, 'create'])->name('games.create');
Route::post('/games/store', [GameController::class, 'store'])->name('games.store');

Route::get('/games/{game}/edit',[GameController::class,'edit'])->name('games.edit');
Route::put('/games/{game}/update',[GameController::class,'update'])->name('games.update');

Route::delete('/games/{game}/destroy', [GameController::class, 'destroy'])->name('games.destroy');
