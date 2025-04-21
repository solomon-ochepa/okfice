<?php

// declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\Tenant\App\Http\Controllers\Tenant\TenantController;

Route::get('/', [TenantController::class, 'home'])->name('home');
Route::get('dashboard', [TenantController::class, 'dashboard'])->name('dashboard');

// User impersonation
Route::get('login/{token}', [TenantController::class, 'login_as'])->name('login_as');
