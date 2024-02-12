<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // If the user is authenticated and is admin, take the action
        if (Auth()->user()->role == 'logistic-user') {
            return $next($request);
        }

        // If user is not authenticated, take them to the login page
        return redirect()->route('login')->with('error', 'Please log in to access this page');
    }
}