<?php

namespace App\Http\Middleware;

use Auth;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Logistic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
       
      if (!Auth::check()){
        return redirect()->route('login');
      }

      if (Auth::user()->role == 1) {
        return redirect()->route('admin');
      }
      
      if (Auth::user()->role == 2) {
        return $next($request);
      }
    }
}