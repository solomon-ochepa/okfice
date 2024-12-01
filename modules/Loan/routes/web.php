<?php

use Illuminate\Support\Facades\Route;
use Modules\Loan\App\Http\Controllers\LoanController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('loan', LoanController::class)->names('loan');
});
