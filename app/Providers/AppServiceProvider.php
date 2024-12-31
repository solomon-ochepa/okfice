<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /**
         * Implicitly grant roles all permissions
         *
         * This works in the app by using gate-related functions like auth()->user->can() and @can()
         * NOTE: Gate::after rules need to return null rather than false, else it will interfere with normal policy operation.
         */
        Gate::after(fn ($user, $ability) => $user->hasRole(['super-admin', 'admin', 'developer']) ? true : null);

        Paginator::useBootstrap();

        if ($this->app->environment('production')) {
            URL::forceScheme('https');
            request(null)->server->set('HTTPS', request(null)->header('X-Forwarded-Proto', 'https') === 'https' ? 'on' : 'off');
        }
    }
}
