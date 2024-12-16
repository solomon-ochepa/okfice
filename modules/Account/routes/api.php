<?php

use Illuminate\Support\Facades\Route;
use Modules\Account\App\Http\Controllers\AccountController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('account', AccountController::class)->names('account');
});
