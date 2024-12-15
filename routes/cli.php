<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Output\BufferedOutput;

Route::middleware(['auth', 'verified'])->prefix('cli')->name('cli.')->group(function () {
    Route::get('/', function (Request $request) {
        Config::set('app.env', 'local');
        Config::set('app.debug', true);

        $output = new BufferedOutput;

        Artisan::call(($request->command ?? 'optimize:clear').' -n', [], $output);

        // Display the output
        return nl2br(e($output->fetch()));
    })->name('index');

    Route::get('/optimize:clear', function (Request $request) {
        Config::set('app.env', 'local');
        Config::set('app.debug', true);

        $output = new BufferedOutput;

        Artisan::call(($request->command ?? 'optimize:clear').' -n', [], $output);

        // Display the output
        return nl2br(e($output->fetch()));
    })->name('optimize.clear');

    Route::get('/storage', function () {
        Config::set('app.env', 'local');
        Config::set('app.debug', true);

        $output = new BufferedOutput;

        Artisan::call('storage:link -n --force', [], $output);

        // Display the output
        return nl2br(e($output->fetch()));
    })->name('storage');

    // Migrate base and all modules migrations
    Route::get('/migrate', function (Request $request) {
        Config::set('app.env', 'local');
        Config::set('app.debug', true);

        $output = new BufferedOutput;
        $queries = $request->only(['--path']);

        Artisan::call('migrate --force', $queries, $output);

        // Display the output
        return nl2br(e($output->fetch()));
    })->name('migrate');

    // Migrate a specific module
    Route::get('/module:migrate/{module?}', function (Request $request, ?string $module = null) {
        Config::set('app.env', 'local');
        Config::set('app.debug', true);

        $output = new BufferedOutput;

        $queries = $request->query();
        $module = $module ?? '--all';

        Artisan::call("module:migrate {$module} --force", $queries, $output);

        // Display the output
        return nl2br(e($output->fetch()));
    })->name('module.migrate');

    Route::get('/module:migrate-refresh/{module?}', function (Request $request, ?string $module = null) {
        Config::set('app.env', 'local');
        Config::set('app.debug', true);

        $output = new BufferedOutput;

        $queries = $request->query();
        $module = $module ?? '--all';

        Artisan::call("module:migrate-refresh {$module} --force", $queries, $output);

        // Display the output
        return nl2br(e($output->fetch()));
    })->name('module.migrate.refresh');

    Route::get('/module:migrate-rollback/{module?}', function (Request $request, ?string $module = null) {
        Config::set('app.env', 'local');
        Config::set('app.debug', true);

        $output = new BufferedOutput;

        $queries = $request->query();
        $module = $module ?? '--all';

        Artisan::call("module:migrate-rollback {$module} --force", $queries, $output);

        // Display the output
        return nl2br(e($output->fetch()));
    })->name('module.migrate.rollback');

    Route::get('/module:migrate-reset/{module?}', function (Request $request, ?string $module = null) {
        Config::set('app.env', 'local');
        Config::set('app.debug', true);

        $output = new BufferedOutput;

        $queries = $request->query();
        $module = $module ?? '--all';

        Artisan::call("module:migrate-reset {$module} --force", $queries, $output);

        // Display the output
        return nl2br(e($output->fetch()));
    })->name('module.migrate.reset');

    Route::get('/module:migrate-status/{module?}', function (Request $request, ?string $module = null) {
        Config::set('app.env', 'local');
        Config::set('app.debug', true);

        $output = new BufferedOutput;

        $queries = $request->query();
        $module = $module ?? '--all';

        Artisan::call("module:migrate-status {$module} --force", $queries, $output);

        // Display the output
        return nl2br(e($output->fetch()));
    })->name('module.migrate.status');

    Route::get('/db:seed', function (Request $request) {
        Config::set('app.env', 'local');
        Config::set('app.debug', true);

        $output = new BufferedOutput;

        $queries = $request->query();

        Artisan::call('module:seed --force', $queries, $output);

        // Display the output
        return nl2br(e($output->fetch()));
    })->name('db:seed');

    Route::get('/module:seed/{module?}', function (Request $request, ?string $module = null) {
        Config::set('app.env', 'local');
        Config::set('app.debug', true);

        $output = new BufferedOutput;

        $queries = $request->query();
        $module = $module ?? '--all';

        Artisan::call("module:seed {$module} --force", $queries, $output);

        // Display the output
        return nl2br(e($output->fetch()));
    })->name('module.seed');
});
