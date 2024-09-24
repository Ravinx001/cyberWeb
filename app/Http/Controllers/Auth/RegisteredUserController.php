<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('admin.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'role' => ['required', 'numeric', 'gte:1', 'lte:4'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        // event(new Registered($user));

        // Auth::login($user);

        $userRole = $user->role;

        // Worker
        if ($userRole == 1) {
            return back()->with('status', 'New Worker Account Successfully Created !');
        }

        // Supervisor
        else if ($userRole == 2) {
            return back()->with('status', 'New Supervisor Account Successfully Created !');
        }

        // Manager
        else if ($userRole == 3) {
            return back()->with('status', 'New Manager Account Successfully Created !');
        }

        // Admin
        else if ($userRole == 4) {
            return back()->with('status', 'New Admin Account Successfully Created !');
        }

        return back()->with('status', 'New Account Successfully Created !');
    }
}
