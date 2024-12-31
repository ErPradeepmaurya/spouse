<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function changepassword()
    {
        return view('admin.changepassword');
    }

    public function create_client()
    {
        return view('admin.add_client');
    }

    public function clientlist()
    {
        return view('admin.clientlist');
    }

    public function userlist()
    {
        return view('admin.userlist');
    }

    public function create_user()
    {
        return view('admin.add_user');
    }
}
