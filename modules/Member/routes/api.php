<?php

use Illuminate\Support\Facades\Route;
use Modules\Member\App\Http\Controllers\MemberController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('member', MemberController::class)->names('member');
});
