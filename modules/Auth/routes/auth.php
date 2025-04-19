<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use Modules\Auth\app\Livewire\Actions\Logout;
use Modules\Auth\app\Livewire\ConfirmPassword;
use Modules\Auth\app\Livewire\ForgotPassword;
use Modules\Auth\app\Livewire\Login;
use Modules\Auth\app\Livewire\Register;
use Modules\Auth\app\Livewire\ResetPassword;
use Modules\Auth\app\Livewire\VerifyEmail;

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
    Route::get('forgot-password', ForgotPassword::class)->name('password.request');
    Route::get('reset-password/{token}', ResetPassword::class)->name('password.reset');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', VerifyEmail::class)->name('verification.notice');
    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
    Route::get('confirm-password', ConfirmPassword::class)->name('password.confirm');
});

Route::post('logout', Logout::class)->name('logout');
