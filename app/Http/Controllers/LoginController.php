<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // Attempt Login
        if (Auth::attempt($request->only('email', 'password'))) {

            $user = Auth::user();

            // Ensure tenant exists
            if (!$user->tenant_id) {
                Auth::logout();
                return back()->withErrors(['email' => 'This account is not linked to any organization.']);
            }

            // Role-based redirect
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.Dashboard');

                case 'pharmacist':
                    return redirect()->route('pharmacist.Dashboard');

                case 'cashier':
                    return redirect()->route('cashier.Dashboard');

                default:
                    Auth::logout();
                    return back()->withErrors(['email' => 'Role not recognized.']);
            }
        }

        return back()->withErrors([
            'email' => 'Incorrect email or password.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
