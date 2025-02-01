<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // return redirect()->route('userlogin');
        if (!Auth::guard('user')->check()) {
            return redirect()->route('userlogin')->with('error_auth', 'Please Login First');
        }
        return $next($request);
 
        // return $next($request);
    }
}
