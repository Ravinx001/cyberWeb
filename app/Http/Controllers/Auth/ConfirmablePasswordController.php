<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
    public function show(): View
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        if (
            !Auth::guard('web')->validate([
                'email' => $request->user()->email,
                'password' => $request->password,
            ])
        ) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        $userRole = $request->user()->role;
        $customRoute = '';

        // Worker
        if ($userRole == 1) {
            $customRoute = 'worker.dashboard';
        }

        // Supervisor
        else if ($userRole == 2) {
            $customRoute = 'supervisor.dashboard';
        }

        // Manager
        else if ($userRole == 3) {
            $customRoute = 'manager.dashboard';
        }

        // Admin
        else if ($userRole == 4) {
            $customRoute = 'admin.dashboard';
        }

        // No Login
        else {
            return redirect('/');
        }

        return redirect()->intended(route($customRoute, absolute: false));
    }
}
