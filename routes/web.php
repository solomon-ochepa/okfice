<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', fn() => view('welcome'))->name('home');
Route::redirect('/', 'dashboard')->name('home');

Route::get('dashboard', fn () => view('dashboard'))
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// 'admin/*'
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::redirect('/', 'admin/dashboard');
    Route::get('dashboard', fn () => view('livewire.admin.dashboard'))->middleware(['permission:admin.dashboard'])->name('dashboard');
});

require_once 'cli.php';
