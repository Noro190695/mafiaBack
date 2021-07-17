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
        'https://bewedoc.ru/server/api/room/add',
        'https://bewedoc.ru/server/api/roole/add',
        'https://bewedoc.ru/server/api/gamer/add'
    ];
}
