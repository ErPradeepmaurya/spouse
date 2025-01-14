<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\AddNewUser;
use App\Models\Admin;

class ClientController extends Controller
{
    public function clientDashboard()
    {
        // dd(Auth::guard('admin'));
        return view('client.dashboard');
    }

    public function changepassword()
    {
        return view('client.changepassword');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ], [
            'password.confirmed' => 'The new password and confirmation password do not match.',
        ]);

        $client = Auth::guard('client')->user();
        if (!Hash::check($request->old_password, $client->password)) {
            return back()->withErrors(['old_password' => 'The old password is incorrect.']);
        }
        $client = Client::find(Auth::guard('client')->id());
        $client->update([
            'password' => Hash::make($request->password)
        ]);
        return back()->with('success', 'Password updated successfully.');
    }


    // public function create_client()
    // {
    //     return view('admin.add_client');
    // }

    // public function clientlist()
    // {
    //     return view('admin.clientlist');
    // }

    public function userlist()
    {
        return view('client.userlist');
    }

    public function createUser()
    {
        return view('client.add_user');
    }

    public function storeUser(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'create_ac_type' => 'required|string|max:50',
            'profile_name' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric',
            'password' => 'required|string|min:8',
            'gender' => 'required|string',
            'dob' => 'required|date',
            'age' => 'required|numeric',
            'height' => 'required|string',
            'weight' => 'required|string',
            'fathers_name' => 'required|string',
            'fathers_job' => 'nullable|string',
            'mothers_name' => 'nullable|string',
            'mothers_job' => 'nullable|string',
            'total_family' => 'required|numeric',
            'total_brother' => 'nullable|numeric',
            'total_sister' => 'nullable|numeric',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'pin_code' => 'required|string',
            'address' => 'required|string',
            'job_type' => 'required|string',
            'company_name' => 'nullable|string',
            'salary' => 'required|string',
            'experience' => 'nullable|string',
            'degree' => 'required|string',
            'college' => 'nullable|string',
            'school' => 'nullable|string',
            'hobbies' => 'nullable|string',
            'whatsapp' => 'nullable|string',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'x' => 'nullable|string',
            'youtube' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ]);

        // Save data to the database
        $user = new AddNewUser();
        $user->profile_name = $validatedData['profile_name'];
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->phone = $validatedData['phone'];
        $user->password = bcrypt($validatedData['password']);
        $user->gender = $validatedData['gender'];
        $user->dob = $validatedData['dob'] ?? null;
        $user->age = $validatedData['age'] ?? null;
        $user->height = $validatedData['height'] ?? null;
        $user->weight = $validatedData['weight'] ?? null;
        $user->fathers_name = $validatedData['fathers_name'] ?? null;
        $user->fathers_job = $validatedData['fathers_job'] ?? null;
        $user->mothers_name = $validatedData['mothers_name'] ?? null;
        $user->mothers_job = $validatedData['mothers_job'] ?? null;
        $user->total_family = $validatedData['total_family'] ?? null;
        $user->total_brother = $validatedData['total_brother'] ?? null;
        $user->total_sister = $validatedData['total_sister'] ?? null;
        $user->country = $validatedData['country'] ?? null;
        $user->state = $validatedData['state'] ?? null;
        $user->city = $validatedData['city'] ?? null;
        $user->pin_code = $validatedData['pin_code'] ?? null;
        $user->address = $validatedData['address'] ?? null;
        $user->job_type = $validatedData['job_type'] ?? null;
        $user->company_name = $validatedData['company_name'] ?? null;
        $user->salary = $validatedData['salary'] ?? null;
        $user->experience = $validatedData['experience'] ?? null;
        $user->degree = $validatedData['degree'] ?? null;
        $user->college = $validatedData['college'] ?? null;
        $user->school = $validatedData['school'] ?? null;
        $user->hobbies = $validatedData['hobbies'] ?? null;
        $user->whatsapp = $validatedData['whatsapp'] ?? null;
        $user->facebook = $validatedData['facebook'] ?? null;
        $user->instagram = $validatedData['instagram'] ?? null;
        $user->x = $validatedData['x'] ?? null;
        $user->youtube = $validatedData['youtube'] ?? null;
        $user->linkedin = $validatedData['linkedin'] ?? null;
        $user->save();

        return redirect()->route('client.userlist')->with('success', 'User added successfully!');
    }
}
