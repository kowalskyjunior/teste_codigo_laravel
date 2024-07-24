<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaccionadoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('faccionados', FaccionadoController::class);
});

require __DIR__.'/auth.php';
