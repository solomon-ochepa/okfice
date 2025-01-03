<?php

use Illuminate\Support\Facades\Route;
use Modules\Payment\App\Http\Controllers\PaymentController;
use Modules\Payment\App\Http\Controllers\PaymentMethodController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('payments', PaymentController::class)->names('payments');
    Route::apiResource('payment-methods', PaymentMethodController::class)->names('payment-methods');
});
