<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }


    public function handle($request, Closure $next, $role)
    {
        if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->role === $role) {
            return $next($request);
        }
        abort(403, 'Unauthorized access.');
    }
}
