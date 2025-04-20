<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\Tenancy\App\Http\Controllers\TenancyController;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

Route::middleware([
    'web',
    InitializeTenancyByDomainOrSubdomain::class,
    PreventAccessFromCentralDomains::class,
])->name('tenancy.')->group(function () {
    // Route::get('/', [TenancyController::class, 'home'])->name('home');
    Route::get('login/{token}', [TenancyController::class, 'login_as'])->name('login_as');
});
