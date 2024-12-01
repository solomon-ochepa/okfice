<?php

use Illuminate\Support\Facades\Route;
use Modules\Group\App\Http\Controllers\GroupController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('group', GroupController::class)->names('group');
});
