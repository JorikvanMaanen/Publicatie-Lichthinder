<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::get('account-created', function () {
    return view('layouts.auth.account-created');
})->name('auth.account-created');

Route::middleware(['auth', 'approved'])->group(function () {
    Route::view('home', 'home')->name('home');
    Route::view('vieuw/richtlijn', 'richtlijn')->name('richtlijn');
    Route::get('richtlijn/document', function () {
        $response = response()->file(storage_path('app/private/richtlijn.pdf'));
        $response->setPrivate();
        $response->headers->addCacheControlDirective('no-store');

        return $response;
    })->name('richtlijn.document');
    Route::view('admin/users', 'admin.users')
        ->middleware('can:manage-users')
        ->name('admin.users');
});

require __DIR__.'/settings.php';
