# Tenancy
Base module for the Saas multi-tenancy setup

### Required modules
- Domain module
- Tenant module

## Structure
```
modules
  └─ Tenancy
    ├─ app
    │  └─ Providers
    │     ├─ EventServiceProvider.php
    │     └─ TenancyServiceProvider.php
    ├─ config
    │  ├─ config.php
    │  └─ tenancy.php
    ├─ database
    │  └─ seeders
    │     ├─ TenancyDatabaseSeeder.php
    │     └─ TenantsDatabaseSeeders.php
    ├─ resources
    │  ├─ assets
    |  |  ├─ js
    │  |  |  └─ app.js
    |  |  └─ sass
    |  |    └─ app.scss
    │  └─ views
    │     └─ components
    │        ├─ layouts
    │        │  ├─ app.blade.php
    │        │  └─ guest.blade.php
    │        └─ themes
    │           └─ guest
    │              ├─ header.blade.php
    │              └─ search.blade.php
    ├─ routes
    ├─ tests
    │  ├─ Feature
    │  └─ Unit
    ├─ composer.json
    ├─ module.json
    ├─ package.json
    ├─ README.md
    └─ vite.config.js
```

## Routes registration

Both the Central and Tenant routes are binded in the `TenancyServiceProvider` `mapRoutes()` method.
```php
    protected function mapRoutes()
    {
        $this->app->booted(function () {
            $this->central_domains();
            $this->tenant_domains();
        });
    }
```
---

### `bootstrap/app.php`
Disable root routes (e.g. `web: __DIR__.'/../routes/web.php'`, `api: __DIR__.'/../routes/api.php'`, etc.) registration from `bootstrap/app.php`
```php
    ->withRouting(
        // web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
```
---

### `RouteServiceProvider::map()`
Disable modules' routes registration via the module's Service Provider (e.g. ).
```php
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->app->register(EventServiceProvider::class);
        // $this->app->register(RouteServiceProvider::class);
    }
```
or via the `RouteServiceProvider`
```php

    /**
     * Define the routes for the application.
     */
    public function map(): void
    {
        // $this->mapApiRoutes();
        // $this->mapWebRoutes();
    }
```
---

## Universal routes [#](https://tenancyforlaravel.com/docs/v3/features/universal-routes)
First, enable the `UniversalRoutes` feature by uncommenting the following line in your `tenancy.features` config.
```php
# config/tenancy.php
Stancl\Tenancy\Features\UniversalRoutes::class,
```

Next, go to your `bootstrap/app.php` file and add the following middleware group:
```php
->withMiddleware(function (Middleware $middleware) {
    $middleware->group('universal', []);
})
```

We will use this middleware group as a "flag" on the route, to mark it as a universal route. We don't need any actual middleware inside the group.

Then, create a route like this:
```php
Route::get('/foo', function () {
    // ...
})->middleware(['universal', InitializeTenancyByDomainOrSubdomain::class]);
```

### Livewire integration [#](https://tenancyforlaravel.com/docs/v3/integrations/livewire/)

add the following in TenancyServiceProvider (or any other provider):
```php
public function boot(): void
{
    // ...

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle)
            ->middleware(
                'web',
                'universal',
                InitializeTenancyByDomain::class,
            );
    });
}
```

To make file uploads work on Livewire 3, set the following in any service provider:
```php
FilePreviewController::$middleware = ['web', 'universal', InitializeTenancyByDomain::class];
```

And change `livewire.temporary_file_upload.middleware` to include the tenancy middleware as well:
```php
// config/livewire.php

'middleware' => ['throttle:60,1', 'universal', InitializeTenancyByDomain::class],
```
