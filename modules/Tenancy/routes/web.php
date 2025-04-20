<?php

use Illuminate\Support\Facades\Route;
use Modules\Tenancy\App\Http\Controllers\Admin\ClientController as AdminClientController;
use Modules\Tenancy\App\Http\Controllers\TenancyController;
use Modules\Tenancy\app\Livewire\Admin\Client\Index;
use Modules\Tenancy\app\Livewire\Admin\Client\Show;

Route::middleware(['auth', 'verified'])->group(function () {
    // Auth users
    // Route::resource('clients', ClientController::class)->names('client');

    // Admins
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('clients', AdminClientController::class)->except(['index', 'show'])->names('client');
        Route::get('clients', Index::class)->name('client.index');
        Route::get('clients/{client}', Show::class)->name('client.show');

        // Client user impersonation
        Route::get('clients/{client}/login/{user}', [TenancyController::class, 'login_as_client_user'])->name('client.login_as');
    });
});
