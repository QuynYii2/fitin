<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        commands: __DIR__.'/../routes/console.php',
        using: function () {
            \Illuminate\Support\Facades\Route::middleware('web')
                ->prefix('admin')
                ->name('admin.')
                ->namespace('App\Http\Controllers\admin')
                ->group(base_path('routes/admin.php'));

            \Illuminate\Support\Facades\Route::middleware('web')
                ->group(base_path('routes/web.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'check-admin-auth' => \App\Http\Middleware\CheckAdminAuth::class,
            'check-detect-bot' => \App\Http\Middleware\DetectBot::class
        ]);
         $middleware->validateCsrfTokens(except: [
        'update-leave-time',
    ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
