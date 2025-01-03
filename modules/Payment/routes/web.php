<?php

use Illuminate\Support\Facades\Route;
use Modules\Payment\App\Http\Controllers\PaymentController;
use Modules\Payment\App\Http\Controllers\PaymentMethodController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('payments', PaymentController::class)->names('payments');
    Route::resource('payment-methods', PaymentMethodController::class)->names('payment-methods');
});
