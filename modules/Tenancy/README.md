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
