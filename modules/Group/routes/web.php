<?php

use Illuminate\Support\Facades\Route;
use Modules\Group\App\Http\Controllers\GroupController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('group', GroupController::class)->names('group');
});
