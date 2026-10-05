<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::middleware(['auth'])->group(function () {
    Route::view('home', 'home')->name('home');
    Route::view('vieuw/richtlijn', 'richtlijn')->name('richtlijn');
});

require __DIR__.'/settings.php';
