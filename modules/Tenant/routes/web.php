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

        // Impersonate a tenant user from the central domain
        Route::get('tenants/{tenant}/impersonate/{user}', [TenantController::class, 'impersonate'])->name('tenant.impersonate');
    });
});
