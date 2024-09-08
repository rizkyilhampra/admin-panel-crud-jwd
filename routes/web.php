<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('books')->group(function () {
        Route::get('/', [BookController::class, 'index'])
            ->name('books.index');
        Route::post('/', [BookController::class, 'store'])
            ->name('books.store');
        Route::get('/create', [BookController::class, 'create'])
            ->name('books.create');
        Route::get('/{book}', [BookController::class, 'edit'])
            ->name('books.edit');
        Route::put('/{book}', [BookController::class, 'update'])
            ->name('books.update');
        Route::delete('/{book}', [BookController::class, 'destroy'])
            ->name('books.destroy');
    });

    Route::delete('/logout', [AuthController::class, 'destroy'])
        ->name('logout');
});

Route::get('/login', [AuthController::class, 'create'])
    ->name('login');
Route::post('/login', [AuthController::class, 'store'])
    ->name('login.store');
