<?php

use Illuminate\Support\Facades\Route;
use Modules\Member\App\Http\Controllers\MemberController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('member', MemberController::class)->names('member');
});
