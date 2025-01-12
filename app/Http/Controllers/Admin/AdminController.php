<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\AddNewUser;
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


    // public function create_client()
    // {
    //     return view('admin.add_client');
    // }

    // public function clientlist()
    // {
    //     return view('admin.clientlist');
    // }

    public function create_client($id = null)
    {
        $client = null;

        if ($id) {
            // Fetch the client data for editing
            $client = Client::findOrFail($id);
        }

        // Pass client data to the view (if editing) or null (if creating)
        return view('admin.add_client', compact('client'));
    }


    public function clientlist()
    {
        // Fetch all clients from the database
        $clients = Client::all();

        // Pass the data to the view
        return view('admin.clientlist', compact('clients'));
    }



    public function storeClient(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'required|numeric',
            'gender' => 'required|string',
            'password' => 'required|min:6',
            'dob' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'nullable|string|max:255',
            'country' => 'required|string|max:255',
            'state' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'pin_code' => 'required|numeric',
            'address' => 'required|string',
            'job_type' => 'required|string',
            'company_name' => 'required|string|max:255',
            'salary' => 'nullable|numeric',
            'experience' => 'nullable|numeric',
            'degree' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|numeric',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
            'youtube' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        try {
            // Create the client
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

            // Redirect with success message
            return redirect()->route('admin.clientlist')->with('success', 'Client data has been saved successfully!');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage())->withInput();
        }
    }


    public function editClient($id)
    {
        // Find the client by ID
        $client = Client::findOrFail($id);

        // Return the edit view with the client data
        return view('admin.editClient', compact('client'));
    }


    public function updateclient(Request $request, $id)
    {
        // dd($request->all());
        $client = Client::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email,' . $client->id,
            'phone' => 'required|numeric',
            'gender' => 'required|string',
            'dob' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'nullable|string|max:255',
            'country' => 'required|string|max:255',
            'state' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'pin_code' => 'required|numeric',
            'address' => 'required|string',
            'job_type' => 'required|string',
            'company_name' => 'required|string|max:255',
            'salary' => 'nullable|numeric',
            'experience' => 'nullable|numeric',
            'degree' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|numeric',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
            'youtube' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        try {
            // Update the client data
            $client->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'gender' => $request->gender,
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

            // Redirect with success message
            return redirect()->route('admin.clientlist')->with('success', 'Client data has been updated successfully!');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage())->withInput();
        }
    }

    public function deleteClient($id)
    {
        try {
            // Find the client by ID
            $client = Client::findOrFail($id);

            // Delete the client
            $client->delete();

            // Redirect to the client list page with a success message
            return redirect()->route('admin.clientlist')->with('success', 'Client deleted successfully!');
        } catch (\Exception $e) {
            // Redirect back with an error message if something goes wrong
            return redirect()->route('admin.clientlist')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function userlist()
    {
        return view('admin.userlist');
    }

    public function createUser()
    {
        return view('admin.add_user');
    }

    public function storeUser(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
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

        return redirect()->route('admin.userlist')->with('success', 'User added successfully!');
    }
}
