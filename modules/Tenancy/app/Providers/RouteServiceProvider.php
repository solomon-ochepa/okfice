<?php

namespace Modules\Tenancy\App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $name = 'Tenancy';

    /**
     * Define the routes for the application.
     */
    public function map(): void
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapWebRoutes(): void
    {
        foreach (config('tenancy.central_domains') as $domain) {
            Route::domain($domain)->group(function () {
                Route::middleware('web')->group(module_path($this->name, '/routes/web.php'));
            });
        }
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     */
    protected function mapApiRoutes(): void
    {
        foreach (config('tenancy.central_domains') as $domain) {
            Route::domain($domain)->group(function () {
                Route::middleware('api')->prefix('api')->name('api.')->group(module_path($this->name, '/routes/api.php'));
            });
        }
    }
}
