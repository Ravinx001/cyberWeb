<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
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

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
