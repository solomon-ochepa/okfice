<?php

use Illuminate\Support\Facades\Route;
use Modules\Domain\App\Http\Controllers\DomainController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('domain', DomainController::class)->names('domain');
});
