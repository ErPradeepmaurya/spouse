@extends('admin.adminLayout.app')
@section('title', 'Home Page')
@section('content')
    <div class="pan-rhs">
        <div class="row main-head">
            <div class="col-md-4">
                <div class="tit">
                    <h1>Change Password</h1>
                </div>
            </div>
            <div class="col-md-8">
                <nav aria-label="breadcrumb" class="d-flex justify-content-end">
                    <a href="{{ route('admin.dashboard') }}" class="cta cta-grn">Back</a>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box-com box-qui box-lig box-form">
                    <div class="form-inp">
                        <form method="post" action="{{ route('admin.updatePassword') }}">
                            @csrf
                            <div class="edit-pro-parti row">
                                <div class="col-md-4 form-group">
                                    <label class="lb">Old Password:</label>
                                    <input type="password" class="form-control" name="old_password"
                                        placeholder="Enter Old Password">
                                    @error('old_password')
                                        <div class="error-message text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group">
                                    <label class="lb">New Password:</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Enter New Password">
                                    @error('password')
                                        <div class="error-message text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group">
                                    <label class="lb">Confirm Password:</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                        placeholder="Enter Confirm Password">
                                    @error('password_confirmation')
                                        <div class="error-message text-danger">The new password and confirm password do not
                                            match.</div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="cta-full cta-colr">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
