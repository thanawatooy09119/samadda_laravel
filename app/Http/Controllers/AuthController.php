<?php

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Attempt authentication in the customer table
        if (Auth::guard('customer')->attempt($credentials)) {
            return redirect()->intended('/customer/dashboard');
        }

        // Attempt authentication in the admin table
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin/dashboard');
        }

        // Attempt authentication in the seller table
        if (Auth::guard('seller')->attempt($credentials)) {
            return redirect()->intended('/seller/dashboard');
        }

        // Authentication failed
        return redirect('/login')->with('error', 'Invalid credentials');
    }
}
