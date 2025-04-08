<?php

use Illuminate\Support\Facades\Route;
use Modules\Tenancy\App\Http\Controllers\Admin\TenantController as AdminTenantController;
use Modules\Tenancy\App\Http\Controllers\TenancyController;
use Modules\Tenancy\app\Livewire\Index;
use Modules\Tenancy\app\Livewire\Show;

Route::middleware(['auth', 'verified'])->group(function () {
    // Auth users
    // Route::resource('tenants', TenantController::class)->names('tenants');

    // Admins
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('tenants', AdminTenantController::class)->except(['index', 'show'])->names('tenants');
        Route::get('tenants', Index::class)->name('tenants.index');
        Route::get('tenants/{tenant}', Show::class)->name('tenants.show');

        // Tenant user impersonation
        Route::get('tenants/{tenant}/login/{user}', [TenancyController::class, 'login_as_tenant_user'])->name('tenant.login_as');
    });
});
