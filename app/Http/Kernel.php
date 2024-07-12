<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        // ...
        'verified' => \App\Http\Middleware\EnsureEmailIsVerified::class,
    ];
    
}