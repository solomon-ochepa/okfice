<?php

use Illuminate\Support\Facades\Route;
use Modules\Tenancy\App\Http\Controllers\TenancyController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('tenancies', TenancyController::class)->names('tenancy');
});
