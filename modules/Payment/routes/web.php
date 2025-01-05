<?php

use Illuminate\Support\Facades\Route;
use Modules\Payment\App\Http\Controllers\PaymentController;
use Modules\Payment\App\Http\Controllers\PaymentMethodController;
use Modules\Payment\app\Livewire\Index;

Route::middleware(['auth', 'verified'])->group(function () {
    // Route::resource('payment-methods', PaymentMethodController::class)->names('payment-methods');

    Route::resource('payments', PaymentController::class)->except(['index'])->names('payments');
    Route::get('payments', Index::class)->name('payments.index');
});
