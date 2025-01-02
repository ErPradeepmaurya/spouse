@extends('admin.adminLayout.app')
@section('title', 'Home Page')
@section('content')
    <div class="pan-rhs">
        <div class="row main-head">
            <div class="col-md-4">
                <div class="tit">
                    <h1>Add new client</h1>
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
                        <form>
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h1>Basic info</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <label class="lb">Name:</label>
                                            <input type="text" class="form-control" placeholder="Enter your full name"
                                                name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <label class="lb">Email:</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Enter email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <label class="lb">Phone:</label>
                                            <input type="number" class="form-control" id="phone"
                                                placeholder="Enter phone number" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label class="lb">Gender:</label>
                                        <select class="form-select chosen-select" data-placeholder="Select your Gender">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <label class="lb">Password:</label>
                                            <input type="password" class="form-control" id="pwd"
                                                placeholder="Enter password" name="pswd">
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <label class="lb">Date of birth:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <label class="lb">Age:</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <label class="lb">Fathers name:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <label class="lb">Mothers name:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END PROFILE BIO-->
                            <!--PROFILE BIO-->
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h1>Address </h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label class="lb">Country:</label>
                                        <select class="form-select chosen-select" data-placeholder="Select your City">
                                            <option>Chennai</option>
                                            <option>Newyork</option>
                                            <option>London</option>
                                            <option>Chicago</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label class="lb">State:</label>
                                        <select class="form-select chosen-select" data-placeholder="Select your City">
                                            <option>Chennai</option>
                                            <option>Newyork</option>
                                            <option>London</option>
                                            <option>Chicago</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label class="lb">City:</label>
                                        <select class="form-select chosen-select" data-placeholder="Select your City">
                                            <option>Chennai</option>
                                            <option>Newyork</option>
                                            <option>London</option>
                                            <option>Chicago</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label class="lb">Pin Code:</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="col-md-8 form-group">
                                        <div class="form-group">
                                            <label class="lb">Address:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END PROFILE BIO-->
                            <!--PROFILE BIO-->
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h1>Job & Education</h1>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="lb">Job type:</label>
                                            <select class="form-select chosen-select"
                                                data-placeholder="Select your Hobbies">
                                                <option>Business</option>
                                                <option>Employee</option>
                                                <option>Government</option>
                                                <option>Jobless</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="lb">Company name:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="lb">Salary:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="lb">Job total experience:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="lb">Degree:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END PROFILE BIO-->
                            <!--PROFILE BIO-->
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h4>Media</h4>
                                    <h1>Social media</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">WhatsApp:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Facebook:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Instagram:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">X:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Youtube:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Linkedin:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--END PROFILE BIO-->
                            <button type="submit" class="cta-full cta-colr">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
