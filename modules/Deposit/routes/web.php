<?php

use Illuminate\Support\Facades\Route;
use Modules\Deposit\App\Http\Controllers\DepositController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('deposit', DepositController::class)->names('deposit');
});
