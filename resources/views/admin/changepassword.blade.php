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
                        <form>
                            <!--PROFILE BIO-->
                            <div class="edit-pro-parti">
                                <div class="form-group">
                                    <label class="lb">New Password:</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Enter New Password" name="password">
                                </div>
                                <div class="form-group">
                                    <label class="lb">Confirm Password:</label>
                                    <input type="password" class="form-control" id="pwd"
                                        placeholder="Enter Confirm Password" name="c_password">
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
