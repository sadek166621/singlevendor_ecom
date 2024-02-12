<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class VendorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Assuming you have a 'role' column in your users table

        $userRole = Auth::guard('admin')->user()->role;
        if(Auth::guard('admin')->check()){
            if ($userRole !== 2) {
                abort(404);
            }
        }
        return $next($request);
    }
}
