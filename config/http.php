<?php

return [

    'middleware' => [
        // Allow CORS
        \Illuminate\Http\Middleware\HandleCors::class,
    ],

    'cors' => [
        'paths' => ['api/*', 'sanctum/csrf-cookie'],
        'allowed_methods' => ['*'],
        'allowed_origins' => ['*'],
        'allowed_headers' => ['*'],
        'exposed_headers' => [],
        'max_age' => 0,
        'supports_credentials' => false,
    ],

];
