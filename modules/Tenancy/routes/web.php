<?php

use Illuminate\Support\Facades\Route;
use Modules\Tenancy\App\Http\Controllers\Admin\ClientController as AdminClientController;
use Modules\Tenancy\App\Http\Controllers\TenancyController;
use Modules\Tenancy\app\Livewire\Index;
use Modules\Tenancy\app\Livewire\Show;

Route::middleware(['auth', 'verified'])->group(function () {
    // Auth users
    // Route::resource('clients', ClientController::class)->names('clients');

    // Admins
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('clients', AdminClientController::class)->except(['index', 'show'])->names('clients');
        Route::get('clients', Index::class)->name('clients.index');
        Route::get('clients/{client}', Show::class)->name('clients.show');

        // Client user impersonation
        Route::get('clients/{client}/login/{user}', [TenancyController::class, 'login_as_client_user'])->name('client.login_as');
    });
});
