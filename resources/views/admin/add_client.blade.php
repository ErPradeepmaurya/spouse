@extends('admin.adminLayout.app')
@section('title', 'Home Page')
@section('content')
    <div class="pan-rhs">
        <div class="row main-head">
            <div class="col-md-4">
                <div class="tit">
                    <h1> {{ $client ? 'Update Client' : 'Add New Client' }} </h1>
                </div>
            </div>
            <div class="col-md-8">
                <nav aria-label="breadcrumb" class="d-flex justify-content-end">
                    <a href="{{ route('admin.clientlist') }}" class="cta cta-grn">Back</a>
                </nav>
            </div>
        </div>
        <div class="row mb-5" style="max-height: 600px; overflow-y:scroll;">
            <div class="col-md-12">
                <div class="box-com box-qui box-lig box-form">
                    <div class="form-inp">
                        {{-- <form method="post" action="{{ route('admin.storeclient') }}">
                            @csrf --}}
                        <form
                            action="{{ isset($client) ? route('admin.updateclient', $client->id) : route('admin.storeclient') }}"
                            method="POST">
                            @csrf
                            @if (isset($client))
                                @method('PUT')
                            @endif
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h1>Basic info</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <label class="lb">Name:</label>
                                            <input type="text"
                                                class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                placeholder="Enter your full name" name="name"
                                                value="{{ old('name', $client->name ?? '') }}">
                                            @if ($errors->has('name'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label class="lb">Email:</label>
                                        <input type="email"
                                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                            id="email" placeholder="Enter email" name="email"
                                            value="{{ old('email', $client->email ?? '') }}">
                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label class="lb">Phone:</label>
                                        <input type="number"
                                            class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                            id="phone" placeholder="Enter phone number" name="phone"
                                            value="{{ old('phone', $client->phone ?? '') }}">
                                        @if ($errors->has('phone'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('phone') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label class="lb">Gender:</label>
                                        <select
                                            class="form-select chosen-select {{ $errors->has('gender') ? 'is-invalid' : '' }}"
                                            name="gender" data-placeholder="Select your Gender">
                                            <option value="">Select</option>
                                            <option value="Male"
                                                {{ old('gender', $client->gender ?? '') == 'Male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="Female"
                                                {{ old('gender', $client->gender ?? '') == 'Female' ? 'selected' : '' }}>
                                                Female
                                            </option>
                                        </select>
                                        @if ($errors->has('gender'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('gender') }}
                                            </div>
                                        @endif
                                    </div>

                                    @if (!isset($client))
                                        <div class="col-md-4 form-group">
                                            <label class="lb">Password:</label>
                                            <input type="password"
                                                class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                                id="pwd" placeholder="Enter password" name="password">
                                            @if ($errors->has('password'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('password') }}
                                                </div>
                                            @endif
                                        </div>
                                    @endif

                                    <div class="col-md-4 form-group">
                                        <label class="lb">Date of Birth:</label>
                                        <input type="date"
                                            class="form-control {{ $errors->has('dob') ? 'is-invalid' : '' }}"
                                            name="dob" value="{{ old('dob', $client->dob ?? '') }}">
                                        @if ($errors->has('dob'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('dob') }}
                                            </div>
                                        @endif
                                    </div>


                                    <div class="col-md-4 form-group">
                                        <label class="lb">Father's Name:</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('father_name') ? 'is-invalid' : '' }}"
                                            name="father_name"
                                            value="{{ old('father_name', $client->father_name ?? '') }}">
                                        @if ($errors->has('father_name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('father_name') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label class="lb">Mother's Name:</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('mother_name') ? 'is-invalid' : '' }}"
                                            name="mother_name"
                                            value="{{ old('mother_name', $client->mother_name ?? '') }}">
                                        @if ($errors->has('mother_name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('mother_name') }}
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            </div>

                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h1>Address </h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label class="lb">Country:</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}"
                                            name="country" placeholder="Enter Country Name"
                                            value="{{ old('country', $client->country ?? '') }}">
                                        @if ($errors->has('country'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('country') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label class="lb">State:</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}"
                                            name="state" placeholder="Enter State Name"
                                            value="{{ old('state', $client->state ?? '') }}">
                                        @if ($errors->has('state'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('state') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label class="lb">City:</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}"
                                            name="city" placeholder="Enter City Name"
                                            value="{{ old('city', $client->city ?? '') }}">
                                        @if ($errors->has('city'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('city') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label class="lb">Pin Code:</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('pin_code') ? 'is-invalid' : '' }}"
                                            name="pin_code" value="{{ old('pin_code', $client->pin_code ?? '') }}">
                                        @if ($errors->has('pin_code'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('pin_code') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-md-8 form-group">
                                        <label class="lb">Address:</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                            name="address" value="{{ old('address', $client->address ?? '') }}">
                                        @if ($errors->has('address'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('address') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                            </div>

                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h1>Job & Education</h1>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="lb">Job Type:</label>
                                            <select
                                                class="form-select chosen-select {{ $errors->has('job_type') ? 'is-invalid' : '' }}"
                                                name="job_type" data-placeholder="Select your Job Type">
                                                <option value="">Select</option>
                                                <option value="Business"
                                                    {{ old('job_type', $client->job_type ?? '') == 'Business' ? 'selected' : '' }}>
                                                    Business</option>
                                                <option value="Employee"
                                                    {{ old('job_type', $client->job_type ?? '') == 'Employee' ? 'selected' : '' }}>
                                                    Employee</option>
                                                <option value="Government"
                                                    {{ old('job_type', $client->job_type ?? '') == 'Government' ? 'selected' : '' }}>
                                                    Government
                                                </option>
                                                <option value="Jobless"
                                                    {{ old('job_type', $client->job_type ?? '') == 'Jobless' ? 'selected' : '' }}>
                                                    Jobless</option>
                                            </select>
                                            @if ($errors->has('job_type'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('job_type') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="lb">Company Name:</label>
                                            <input type="text"
                                                class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}"
                                                name="company_name"
                                                value="{{ old('company_name', $client->company_name ?? '') }}">
                                            @if ($errors->has('company_name'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('company_name') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="lb">Salary:</label>
                                            <input type="text"
                                                class="form-control {{ $errors->has('salary') ? 'is-invalid' : '' }}"
                                                name="salary" value="{{ old('salary', $client->salary ?? '') }}">
                                            @if ($errors->has('salary'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('salary') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="lb">Job Total Experience:</label>
                                            <input type="text"
                                                class="form-control {{ $errors->has('experience') ? 'is-invalid' : '' }}"
                                                name="experience"
                                                value="{{ old('experience', $client->experience ?? '') }}">
                                            @if ($errors->has('experience'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('experience') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="lb">Degree:</label>
                                            <input type="text"
                                                class="form-control {{ $errors->has('degree') ? 'is-invalid' : '' }}"
                                                name="degree" value="{{ old('degree', $client->degree ?? '') }}">
                                            @if ($errors->has('degree'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('degree') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h4>Social Media</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">WhatsApp:</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('whatsapp') ? 'is-invalid' : '' }}"
                                            name="whatsapp" value="{{ old('whatsapp', $client->whatsapp ?? '') }}">
                                        @if ($errors->has('whatsapp'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('whatsapp') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Facebook:</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}"
                                            name="facebook" value="{{ old('facebook', $client->facebook ?? '') }}">
                                        @if ($errors->has('facebook'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('facebook') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Instagram:</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}"
                                            name="instagram" value="{{ old('instagram', $client->instagram ?? '') }}">
                                        @if ($errors->has('instagram'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('instagram') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">X (Twitter):</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}"
                                            name="twitter" value="{{ old('twitter', $client->twitter ?? '') }}">
                                        @if ($errors->has('twitter'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('twitter') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">YouTube:</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('youtube') ? 'is-invalid' : '' }}"
                                            name="youtube" value="{{ old('youtube', $client->youtube ?? '') }}">
                                        @if ($errors->has('youtube'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('youtube') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">LinkedIn:</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}"
                                            name="linkedin" value="{{ old('linkedin', $client->linkedin ?? '') }}">
                                        @if ($errors->has('linkedin'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('linkedin') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- <button type="submit" class="cta-full cta-colr">Submit</button> --}}
                            <button type="submit" class="cta-full cta-colr">
                                {{ $client ? 'Update Client' : 'Create Client' }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
