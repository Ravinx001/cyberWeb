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

            // User
            if ($userRole == 1) {
                $customRoute = 'user.dashboard';
            }

            // Admin
            else if ($userRole == 2) {
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
