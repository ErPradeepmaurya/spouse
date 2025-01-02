<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getlogin()
    {
        return view('login');
    }
    public function getsignup()
    {
        return view('sign-up');
    }
    public function getabout()
    {
        return view('about');
    }
}
