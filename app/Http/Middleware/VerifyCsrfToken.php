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
        'https://api.bewedoc.ru/room/add',
        'https://api.bewedoc.ru/roole/add',
        'https://api.bewedoc.ru/gamer/add'
    ];
}
