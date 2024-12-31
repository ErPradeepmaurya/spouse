<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show the admin login form
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle the admin login request
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard(config('adminauth.defaults.guard'))->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // public function login(Request $request)
    // {
    //     // Validate the incoming request credentials
    //     $credentials = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     // Attempt to authenticate using the guard specified in the config
    //     if (Auth::guard(config('adminauth.defaults.guard'))->attempt($credentials)) {
    //         $request->session()->regenerate();

    //         // After successful login, check the user's role
    //         $user = Auth::guard(config('adminauth.defaults.guard'))->user();

    //         // Redirect based on the user's role
    //         if ($user->role === 'super_admin') {
    //             return redirect()->intended('/admin/dashboard');  // Super Admin dashboard
    //         }

    //         return redirect()->intended('/admin/dashboard');  // Admin dashboard
    //     }

    //     // If authentication fails, return with error message
    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ]);
    // }

    // Handle the admin logout request
    public function logout(Request $request)
    {
        Auth::guard(config('adminauth.defaults.guard'))->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
