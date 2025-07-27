<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class VerifyIsActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Pastikan user terautentikasi dan is_active
        if (Auth::check() && Auth::user()->is_active) {
            return $next($request);
        }

        // ❌ User nonaktif: logout dan redirect dengan pesan flash
        Auth::logout();

        abort(403, 'Your account has been deactivated.');
    }
}
