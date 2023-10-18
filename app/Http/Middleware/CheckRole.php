<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (auth()->check()) {
            $user = auth()->user();
            if ($user->role === $role) {
                return $next($request);
            }
        }

        if ($role === 'pencaker') {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login');
        }
    }
}
