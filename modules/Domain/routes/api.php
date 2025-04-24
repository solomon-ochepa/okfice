<?php

use Illuminate\Support\Facades\Route;
use Modules\Domain\App\Http\Controllers\DomainController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('domain', DomainController::class)->names('domain');
});
