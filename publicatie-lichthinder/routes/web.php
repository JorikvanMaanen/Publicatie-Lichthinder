<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::get('account-created', function () {
    return view('layouts.auth.account-created');
})->name('auth.account-created');

Route::middleware(['auth', 'approved'])->group(function () {
    Route::view('home', 'home')->name('home');
    Route::view('vieuw/richtlijn', 'richtlijn')->name('richtlijn');
    Route::get('vieuw/richtlijn/pdf', function () {
        $path = storage_path('pdf/richtlijn.pdf');

        abort_unless(is_file($path), 404);

        $response = response()->file($path, ['Content-Type' => 'application/pdf']);
        $response->headers->set('Cache-Control', 'private, no-store, no-cache, must-revalidate');
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        return $response;
    })->name('richtlijn.pdf');
    Route::view('admin/users', 'admin.users')
        ->middleware('can:manage-users')
        ->name('admin.users');
});

require __DIR__.'/settings.php';
