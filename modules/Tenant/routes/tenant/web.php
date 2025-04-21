<?php

// declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\Tenant\App\Http\Controllers\Tenant\TenantController;

Route::get('/', [TenantController::class, 'home'])->name('home');
Route::get('dashboard', [TenantController::class, 'dashboard'])->name('dashboard');

// Impersonate a tenant user from the central domain
Route::get('/impersonate/{token}', [TenantController::class, 'impersonate'])->name('tenant.impersonate');
