<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (Auth::check()) {
            if (auth()->user()->role == $role) {
                return $next($request);
            } else {
                return redirect('/dashboard');
            }
        }

        // If not authenticated, you might want to redirect to the login page or handle it as needed
        return redirect('/login');
    }
}
