<?php

use Illuminate\Support\Facades\Route;

/**
 * Universal Routes are routes that are available to both central and tenant domains.
 */
Route::middleware(['universal'])->group(function () {
    require __DIR__.'/auth.php';
})->name('auth.welcome');
