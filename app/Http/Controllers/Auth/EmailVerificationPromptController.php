<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
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

        return $request->user()->hasVerifiedEmail()
            ? redirect()->intended(route($customRoute, absolute: false))
            : view('auth.verify-email');
    }
}
