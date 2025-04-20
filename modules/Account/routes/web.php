<?php

use Illuminate\Support\Facades\Route;

// use Modules\Account\App\Http\Controllers\AccountController;

Route::middleware(['auth', 'verified'])->group(function () {
    // Route::resource('account', AccountController::class)->names('account');
});
