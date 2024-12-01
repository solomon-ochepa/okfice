<?php

use Illuminate\Support\Facades\Route;
use Modules\Withdraw\App\Http\Controllers\WithdrawController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('withdraw', WithdrawController::class)->names('withdraw');
});
