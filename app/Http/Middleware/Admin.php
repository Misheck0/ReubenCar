<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            // Redirect to login if not authenticated
            return redirect('/login');
        }

        // Check if the authenticated user is an admin
        if (Auth::user()->role !== 'admin') {
            // Redirect to home page if the user is not an admin
            return redirect('/');
        }

        // Allow access to admin if authenticated and is an admin
        return $next($request);
    }
}
