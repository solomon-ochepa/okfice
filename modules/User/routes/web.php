<?php

use Illuminate\Support\Facades\Route;
use Modules\User\App\Http\Controllers\Admin\UserController;
use Modules\User\App\Http\Controllers\ProfileController;
use Modules\User\app\Livewire\Admin\Index;

// User profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// /admin
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::redirect('/', 'admin/dashboard');
    Route::get('dashboard', fn () => view('user::livewire.admin.dashboard'))->middleware(['permission:admin.dashboard'])->name('dashboard');

    // /admin/users
    Route::resource('users', UserController::class)->except(['index'])->names('user');
    Route::get('users', Index::class)->name('user.index');
    Route::patch('users', [UserController::class, 'update'])->name('user.update');
});
