<?php

use Illuminate\Support\Facades\Route;
use Modules\Deposit\App\Http\Controllers\DepositController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('deposit', DepositController::class)->names('deposit');
});
