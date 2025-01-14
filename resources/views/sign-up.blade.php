@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

    <!-- REGISTER -->
    <section>
        <div class="login">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="shadow-lg p-4 rounded bg-white">
                        <div class="form-tit text-center">
                            <h1>Sign up to Matrimony</h1>
                            <p>Already a member? <a href="{{ route('login') }}">Login</a></p>
                        </div>
                        <div class="form-login">
                            <form action="{{ route('store.sign-up') }}" method="POST">
                                @csrf
                                {{-- <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="lb">Profile:</label>
                                        <select name="profile_name" class="form-select">
                                            <option value="">- Select -</option>
                                            <option value="MySelf">MySelf</option>
                                            <option value="My Son">My Son</option>
                                            <option value="My Doughter">My Doughter</option>
                                            <option value="My Brother">My Brother</option>
                                            <option value="My Sister">My Sister</option>
                                            <option value="My Friend">My Friend</option>
                                            <option value="My Relative">My Relative</option>
                                        </select>
                                        @error('profile_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="lb">Gender:</label>
                                        <select name="gender" class="form-select">
                                            <option value="">- Select -</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        @error('gender')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="lb">Full Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter your full name"
                                            name="name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- <div class="form-group col-sm-6">
                                        <label class="lb">Date of birth:</label>
                                        <input type="date" class="form-control" placeholder="Enter your full name"
                                            name="dob">
                                        @error('dob')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div> --}}
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="lb">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email"
                                            name="email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group col-sm-6">
                                        <label class="lb">Phone:</label>
                                        <input type="number" class="form-control" id="phone"
                                            placeholder="Enter phone number" name="phone">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div> --}}
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="lb">Password:</label>
                                        <input type="password" class="form-control" id="pwd"
                                            placeholder="Enter password" name="password" minlength="8">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="agree"> Remember me
                                        </label>
                                    </div> --}}
                                    <button type="submit" class="btn btn-primary w-100">Create Account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
@endsection
