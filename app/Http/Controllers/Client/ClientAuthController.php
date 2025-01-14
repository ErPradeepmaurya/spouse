<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientAuthController extends Controller
{
    // Show the admin login form
    public function showClientLoginForm()
    {
        return view('client.login');
    }

    public function clientLogin(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('client')->attempt($credentials)) {
            // dd('hhh');
            $request->session()->regenerate();
            session()->flash('success', 'Login successful!');
            return redirect()->intended('/client/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials is wrong !',
        ])->with('error', 'Login failed. Please check your credentials.');
    }


    public function clientLogout(Request $request)
    {
        Auth::guard('client')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session()->flash('success', 'Logged Out successful!');
        return redirect('/client/login');
    }
}
