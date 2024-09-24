<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
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
            $customRoute = 'worker.dashboard';
        }

        // No Login
        else {
            return redirect('/');
        }

        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route($customRoute, absolute: false) . '?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended(route($customRoute, absolute: false) . '?verified=1');
    }
}
