<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * Global middleware stack.
     */
    protected $middleware = [
        \App\Http\Middleware\AgeValidation::class, // Register middleware globally
    ];

    /**
     * Middleware groups.
     */
    protected $middlewareGroups = [
        'web' => [
            // Other middlewares...
        ],

        'api' => [
            // Other middlewares...
        ],
    ];

    /**
     * Route middleware (if you want to apply middleware to specific routes)
     */
    protected $routeMiddleware = [
        'age.validation' => \App\Http\Middleware\AgeValidation::class,
    ];
}