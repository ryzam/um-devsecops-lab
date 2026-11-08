<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // SENGAJA tidak selamat: perlindungan CSRF dimatikan untuk laluan ini.
        $middleware->preventRequestForgery(except: ['guestbook', 'login', 'api/*']);
        // SENGAJA tidak selamat: cookie "session" tidak disulitkan, jadi klien boleh memalsukannya.
        $middleware->encryptCookies(except: ['session']);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*') || $request->expectsJson(),
        );
    })->create();
