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
    /**
     * CSRF tokens are used to protect against
     * malicious requests from other websites. APIs, being stateless,
     * don't rely on session-based CSRF protection. Therefore, API routes
     * are excluded from CSRF token verification to allow stateless communication.
     */
    '/api/*'
    ];
}
