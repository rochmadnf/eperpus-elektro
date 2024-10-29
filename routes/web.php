<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', [Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/handle', [Controllers\Console\FileController::class, 'search'])->name("handle.search");
Route::get('/handle/{id}', [Controllers\Console\FileController::class, 'show'])->name('handle.file.show');


Route::get('/login', [Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/login', [Controllers\Auth\LoginController::class, 'submit']);

Route::middleware('auth')->prefix('console')->group(function () {
    Route::get('/', [Controllers\Console\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', function () {
        return view('pages.console.users');
    })->name('users');

    Route::controller(Controllers\Console\FileController::class)->prefix('files')->group(function () {
        Route::get('/', 'index')->name('files');
        Route::get('/create', 'create')->name('files.create');
    });

    Route::post('/logout', [Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});
