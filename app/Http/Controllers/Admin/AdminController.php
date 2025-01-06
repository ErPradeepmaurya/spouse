<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;

// use function Laravel\Prompts\password;

use App\Models\Admin;

class AdminController extends Controller
{
    public function dashboard()
    {
        // dd(Auth::guard('admin'));
        return view('admin.dashboard');
    }

    public function changepassword()
    {
        return view('admin.changepassword');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ], [
            'password.confirmed' => 'The new password and confirmation password do not match.',
        ]);

        $admin = Auth::guard('admin')->user();
        if (!Hash::check($request->old_password, $admin->password)) {
            return back()->withErrors(['old_password' => 'The old password is incorrect.']);
        }
        $admin = Admin::find(Auth::guard('admin')->id());
        $admin->update([
            'password' => Hash::make($request->password)
        ]);
        return back()->with('success', 'Password updated successfully.');
    }


    public function create_client()
    {
        return view('admin.add_client');
    }

    public function clientlist()
    {
        return view('admin.clientlist');
    }

    public function storeclient(Request $request)
    {
        // dd($request->all());
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients',
            'phone' => 'nullable|numeric',
            'pswd' => 'required|string|min:6',
        ]);
        try {
            // Create a new client record
            Client::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'password' => Hash::make($request->pswd),
                'dob' => $request->dob,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'pin_code' => $request->pin_code,
                'address' => $request->address,
                'job_type' => $request->job_type,
                'company_name' => $request->company_name,
                'salary' => $request->salary,
                'experience' => $request->experience,
                'degree' => $request->degree,
                'whatsapp' => $request->whatsapp,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter,
                'youtube' => $request->youtube,
                'linkedin' => $request->linkedin,
            ]);

            // return redirect()->back()->with('success', 'Client data has been saved successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
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
