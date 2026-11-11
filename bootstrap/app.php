<?php

<<<<<<< HEAD
use App\Http\Middleware\Authenticate;
=======
>>>>>>> 596e555460e862e73aa1f31c51a9f5935a72f795
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
<<<<<<< HEAD
        $middleware->alias([
            'auth' => Authenticate::class,
        ]);
=======
        //
>>>>>>> 596e555460e862e73aa1f31c51a9f5935a72f795
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
