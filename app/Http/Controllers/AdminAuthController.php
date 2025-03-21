<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminUser; // Assuming the model for the admin is AdminUser
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('admin.login');  // Your login view
    }

    // Handle the login
    public function login(Request $request)
    {
        // Validate the input data
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Check the admin credentials
        if (Auth::guard('admin')->attempt([
            'email' => $validated['email'],
            'password' => $validated['password']
        ], $request->remember)) {
            return redirect()->route('admin.dashboard');  // Redirect to the admin dashboard
        }

        // If authentication fails, redirect back with error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Handle the logout
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
