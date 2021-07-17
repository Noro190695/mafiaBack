<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'http://127.0.0.1:8000/api/room/add',
        'http://127.0.0.1:8000/api/roole/add',
        'http://127.0.0.1:8000/api/gamer/add'
    ];
}
