<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\Tenant\App\Http\Controllers\Tenant\Api\TenantController;

Route::prefix('v1')->group(function () {
    Route::get('/', [TenantController::class, 'index'])->name('api.index');
});
