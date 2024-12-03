<?php

use Illuminate\Support\Facades\Route;
use Modules\User\App\Http\Controllers\ProfileController;
use Modules\User\App\Http\Controllers\UserController;
use Modules\User\app\Livewire\Index;

// Admin
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UserController::class)->except(['index'])->names('user');
    Route::get('users', Index::class)->name('user.index');
    Route::put('/users', [UserController::class, 'update'])->name('users.update');
});

// User profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
