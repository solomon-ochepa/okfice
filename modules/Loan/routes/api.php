<?php

use Illuminate\Support\Facades\Route;
use Modules\Loan\App\Http\Controllers\LoanController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('loan', LoanController::class)->names('loan');
});
