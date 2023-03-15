<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/boards', [BoardController::class, 'index'])->name('board.index');
