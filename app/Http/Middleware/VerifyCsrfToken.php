<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'pembelian/*','pembelian','pembelian/create','pembelian/store','pembelian/show','pembelian/edit','pembelian/update','pembelian/destroy'
    ];
}
