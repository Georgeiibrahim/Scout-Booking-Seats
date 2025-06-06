<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // return redirect()->route('userlogin');
         if (!Auth::guard('admin')->check()) {
            return redirect()->route('adminlogin')->with('error_auth', 'Please Login First');
        }
        return $next($request);
 
        // return $next($request);
    }
}
