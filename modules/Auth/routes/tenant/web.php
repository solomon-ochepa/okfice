<?php

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;

/**
 * Universal Routes are routes that are available to both central and tenant domains.
 */
Route::middleware(['universal', InitializeTenancyByDomainOrSubdomain::class])->group(function () {
    require module_path('Auth', 'routes/auth.php');
})->name('auth.welcome');
