<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddNewUser;
use App\Models\Contact;
use Illuminate\Database\QueryException;
use App\Mail\EmailConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function getlogin()
    {
        return view('login');
    }
    public function getsignup()
    {
        return view('sign-up');
    }
    public function getDashboard()
    {
        return view('dashboard');
    }

    public function storeSignup(Request $request)
    {
        // dd($request->all());
        $verificationToken = Str::random(64);

        $userData = AddNewUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'email_verification_token' => $verificationToken,
        ]);

        $this->sendVerificationEmail($userData);

        return redirect()->back()->with('success', 'Account created! Please check your email to verify.');
    }


    protected function sendVerificationEmail($userData)
    {
        $verificationLink = route('email.confirmation', $userData->email_verification_token);

        Mail::send('emails.confirmation', ['link' => $verificationLink], function ($message) use ($userData) {
            $message->to($userData->email);
            $message->subject('Verify Your Email Address');
        });
    }

    public function confirmEmail($token)
    {
        $userData = AddNewUser::where('email_verification_token', $token)->first();

        if (!$userData) {
            return redirect('/')->with('error', 'Invalid or expired token.');
        }

        $userData->update([
            'email_verification_token' => null,
            'is_verified' => true,
        ]);

        return redirect('/')->with('success', 'Email verified successfully!');
    }



    // public function storeSignup(Request $request)
    // {
    //     // Validate the form data
    //     // dd($request->all());
    //     $validatedData = $request->validate([
    //         'profile_name' => 'required|string|max:255',
    //         'gender' => 'required|string',
    //         'name' => 'required|string|max:255',
    //         'dob' => 'required|date',
    //         'email' => 'required|email|unique:users,email',
    //         'phone' => 'required|numeric',
    //         'password' => 'required|string|min:8',
    //         // 'age' => 'required|numeric',
    //         // 'height' => 'required|string',
    //         // 'weight' => 'required|string',
    //         // 'fathers_name' => 'required|string',
    //         // 'fathers_job' => 'nullable|string',
    //         // 'mothers_name' => 'nullable|string',
    //         // 'mothers_job' => 'nullable|string',
    //         // 'total_family' => 'required|numeric',
    //         // 'total_brother' => 'nullable|numeric',
    //         // 'total_sister' => 'nullable|numeric',
    //         // 'country' => 'required|string',
    //         // 'state' => 'required|string',
    //         // 'city' => 'required|string',
    //         // 'pin_code' => 'required|string',
    //         // 'address' => 'required|string',
    //         // 'job_type' => 'required|string',
    //         // 'company_name' => 'nullable|string',
    //         // 'salary' => 'required|string',
    //         // 'experience' => 'nullable|string',
    //         // 'degree' => 'required|string',
    //         // 'college' => 'nullable|string',
    //         // 'school' => 'nullable|string',
    //         // 'hobbies' => 'nullable|string',
    //         // 'whatsapp' => 'nullable|string',
    //         // 'facebook' => 'nullable|string',
    //         // 'instagram' => 'nullable|string',
    //         // 'x' => 'nullable|string',
    //         // 'youtube' => 'nullable|string',
    //         // 'linkedin' => 'nullable|string',
    //     ]);

    //     // Save data to the database
    //     try {
    //         $user = new AddNewUser();
    //         $user->profile_name = $validatedData['profile_name'];
    //         $user->gender = $validatedData['gender'];
    //         $user->name = $validatedData['name'];
    //         $user->email = $validatedData['email'];
    //         // $user->email_token = Str::random(40);
    //         $user->dob = $validatedData['dob'] ?? null;
    //         $user->phone = $validatedData['phone'];
    //         $user->password = bcrypt($validatedData['password']);
    //         // $user->age = $validatedData['age'] ?? null;
    //         // $user->height = $validatedData['height'] ?? null;
    //         // $user->weight = $validatedData['weight'] ?? null;
    //         // $user->fathers_name = $validatedData['fathers_name'] ?? null;
    //         // $user->fathers_job = $validatedData['fathers_job'] ?? null;
    //         // $user->mothers_name = $validatedData['mothers_name'] ?? null;
    //         // $user->mothers_job = $validatedData['mothers_job'] ?? null;
    //         // $user->total_family = $validatedData['total_family'] ?? null;
    //         // $user->total_brother = $validatedData['total_brother'] ?? null;
    //         // $user->total_sister = $validatedData['total_sister'] ?? null;
    //         // $user->country = $validatedData['country'] ?? null;
    //         // $user->state = $validatedData['state'] ?? null;
    //         // $user->city = $validatedData['city'] ?? null;
    //         // $user->pin_code = $validatedData['pin_code'] ?? null;
    //         // $user->address = $validatedData['address'] ?? null;
    //         // $user->job_type = $validatedData['job_type'] ?? null;
    //         // $user->company_name = $validatedData['company_name'] ?? null;
    //         // $user->salary = $validatedData['salary'] ?? null;
    //         // $user->experience = $validatedData['experience'] ?? null;
    //         // $user->degree = $validatedData['degree'] ?? null;
    //         // $user->college = $validatedData['college'] ?? null;
    //         // $user->school = $validatedData['school'] ?? null;
    //         // $user->hobbies = $validatedData['hobbies'] ?? null;
    //         // $user->whatsapp = $validatedData['whatsapp'] ?? null;
    //         // $user->facebook = $validatedData['facebook'] ?? null;
    //         // $user->instagram = $validatedData['instagram'] ?? null;
    //         // $user->x = $validatedData['x'] ?? null;
    //         // $user->youtube = $validatedData['youtube'] ?? null;
    //         // $user->linkedin = $validatedData['linkedin'] ?? null;
    //         $user->save();
    //         // $details = [
    //         //     'name' => $user->name,
    //         //     'confirmation_link' => route('email.confirmation', ['token' => $user->email_token]),
    //         // ];

    //         // Mail::to($user->email)->send(new EmailConfirmation($details));

    //         return redirect()->route('login')->with('success', 'User added successfully!');
    //     } catch (QueryException $e) {
    //         if ($e->errorInfo[1] == 1062) {
    //             return back()->withErrors(['email' => 'The email address is already registered.'])->withInput();
    //         }
    //     }
    // }



    public function getabout()
    {
        return view('about');
    }

    public function getcontact()
    {
        return view('contact');
    }

    public function storeContact(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required|string|max:100',
            'lname' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric',
            'gender' => 'required|string',
            'dob' => 'required|date',
            'message' => 'required|string|max:255',
        ]);

        // Save data to the database
        $user = new Contact();
        $user->fname = $validatedData['fname'];
        $user->lname = $validatedData['lname'];
        $user->email = $validatedData['email'];
        $user->phone = $validatedData['phone'];
        $user->gender = $validatedData['gender'];
        $user->dob = $validatedData['dob'];
        $user->message = $validatedData['message'];

        $user->save();

        return redirect()->route('contact')->with('success', 'We’ve successfully received your enquiry and will get back to you shortly.');
    }
}
