<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // If User is not logged in
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userRole = Auth::user()->role;

        // Worker
        if ($userRole == 1) {
            return redirect()->route('worker.dashboard');
        }

        // Supervisor
        else if ($userRole == 2) {
            return redirect()->route('supervisor.dashboard');
        }

        // Manager
        else if ($userRole == 3) {
            return redirect()->route('manager.dashboard');
        }

        // Admin
        else if ($userRole == 4) {
            return $next($request);
        }

        // No Login
        else {
            return redirect('/');
        }

    }
}
