<?php

use Illuminate\Support\Facades\Route;
use Modules\Tenant\App\Http\Controllers\Admin\TenantController as AdminTenantController;
use Modules\Tenant\App\Http\Controllers\TenantController;
use Modules\Tenant\app\Livewire\Admin\Index;
use Modules\Tenant\app\Livewire\Admin\Show;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('tenants', TenantController::class)->names('tenant');

    // Admins
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('tenants', AdminTenantController::class)->except(['index', 'show'])->names('tenant');
        Route::get('tenants', Index::class)->name('tenant.index');
        Route::get('tenants/{tenant}', Show::class)->name('tenant.show');

        // Tenant user impersonation
        Route::get('tenants/{tenant}/login/{user}', [TenantController::class, 'login_as_tenant_user'])->name('tenant.login_as');
    });
});
