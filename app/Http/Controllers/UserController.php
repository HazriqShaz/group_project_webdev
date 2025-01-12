<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to find the user by name
        $user = User::where('name', $request->name)->first();

        // Debugging: Check if user is found
        if (!$user) {
            return back()->withErrors(['name' => 'User not found.']);
        }

        // If the user is found and the password matches (without hashing)
        if ($user && $user->password === $request->password) {
            // Log the user in
            Auth::login($user);

            // Debugging: Check if login was successful
            if (Auth::check()) {
                return redirect()->route('dashboard');
            } else {
                return back()->withErrors(['name' => 'Login failed.']);
            }
        }

        // If authentication fails
        return back()->withErrors([
            'name' => 'Invalid credentials.',
        ]);
    }

    public function logout(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the CSRF token
        $request->session()->regenerateToken();

        // Redirect the user to the login page or home page
        return redirect()->route('showLoginForm');
    }
}
