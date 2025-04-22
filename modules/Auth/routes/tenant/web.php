<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\app\Livewire\Login;

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
});
