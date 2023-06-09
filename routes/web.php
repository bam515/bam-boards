<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/boards', [BoardController::class, 'index'])->name('board.index');

Route::get('/boards/{board}', [BoardController::class, 'show'])->where('board', '[0-9]+')->name('board.show');

Route::get('/boards/create', [BoardController::class, 'create'])->name('board.create');

Route::post('/boards', [BoardController::class, 'store'])->name('board.store');

Route::get('/boards/{board}/edit', [BoardController::class, 'edit'])->name('board.edit');

Route::put('/boards/{board}', [BoardController::class, 'update'])->name('board.update');

Route::delete('/boards/{board}', [BoardController::class, 'delete'])->name('board.delete');
