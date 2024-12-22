<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FileController;

Route::middleware(['auth'])->group(function () {
    Route::get('/', [FileController::class, 'index']);
    Route::post('/upload', [FileController::class, 'upload']);
    Route::delete('/files/{id}', [FileController::class, 'destroy']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();

