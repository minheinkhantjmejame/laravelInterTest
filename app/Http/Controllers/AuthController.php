<?php

namespace App\Http\Controllers;

use App\Models\HrAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    
    public function register(Request $request)
    {

        
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:hr_accounts',
            'password' => 'required|string|min:8',
        ]);

        // Create a new HR account
        $hrAccount = HrAccount::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password
            'subscription_type' => 'free', // Default subscription type
            'subscription_active' => true, // Subscription is active by default
        ]);
        

        // Log in the user after registration
        Auth::guard('hr')->login($hrAccount);
        session(['hr_name' => $hrAccount->first_name . ' ' . $hrAccount->last_name]);
        return redirect()->route('hr.login'); // Redirect to HR dashboard
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
    
        // Use the correct guard (hr guard defined in config/auth.php)
        if (Auth::guard('hr')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            $hrAccount = Auth::guard('hr')->user();
            session(['hr_name' => $hrAccount->first_name . ' ' . $hrAccount->last_name]);
            return redirect()->route('hr.dashboard');
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    

}
