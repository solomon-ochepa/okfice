<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('/', function (Request $request) {
        return response()->json([
            'status' => 'success',
        ]);
    })->name('api.index');
});
