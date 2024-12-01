<?php

use Illuminate\Support\Facades\Route;
use Modules\Withdraw\App\Http\Controllers\WithdrawController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('withdraw', WithdrawController::class)->names('withdraw');
});
