<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware('guest')->group(function (): void {
    Route::get('/registreren', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/registreren', [AuthController::class, 'register'])->name('register.store');

    Route::get('/inloggen', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/inloggen', [AuthController::class, 'login'])->name('login.store');
});

Route::middleware('auth')->group(function (): void {
    Route::post('/uitloggen', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [AuthController::class, 'firstPage']);
    
});
