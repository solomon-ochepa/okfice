<?php

use Illuminate\Support\Facades\Route;
use Modules\Tenant\App\Http\Controllers\Api\TenantController;

Route::middleware(['auth:api'])->prefix('v1')->group(function () {
    Route::apiResource('tenants', TenantController::class)->names('tenant');
});
