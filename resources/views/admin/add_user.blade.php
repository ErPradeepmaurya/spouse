@extends('admin.adminLayout.app')
@section('title', 'Home Page')
@section('content')
    <div class="pan-rhs">
        <div class="row main-head">
            <div class="col-md-4">
                <div class="tit">
                    <h1>Add new user</h1>
                </div>
            </div>
            <div class="col-md-8">
                <nav aria-label="breadcrumb" class="d-flex justify-content-end">
                    <a href="{{ route('admin.clientlist') }}" class="cta cta-grn">Back</a>
                </nav>
            </div>
        </div>
        <div class="row" style="max-height: 500px; overflow-y:scroll;">
            <div class="col-md-12">
                <div class="box-com box-qui box-lig box-form">
                    <div class="form-inp">
                        <form action="{{ route('admin.store_user') }}" method="POST">
                            @csrf
                            <!--PROFILE BIO-->
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h1>Basic info</h1>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Profile:</label>
                                            <select class="form-select chosen-select" name="profile_name">
                                                <option value="" disabled
                                                    {{ old('profile_name') == '' ? 'selected' : '' }}>
                                                    Select Profile
                                                </option>
                                                <option value="MySelf"
                                                    {{ old('profile_name') == 'MySelf' ? 'selected' : '' }}>Myself</option>
                                                <option value="My Son"
                                                    {{ old('profile_name') == 'My Son' ? 'selected' : '' }}>My Son</option>
                                                <option value="My Daughter"
                                                    {{ old('profile_name') == 'My Daughter' ? 'selected' : '' }}>My Daughter
                                                </option>
                                                <option value="My Brother"
                                                    {{ old('profile_name') == 'My Brother' ? 'selected' : '' }}>My Brother
                                                </option>
                                                <option value="My Sister"
                                                    {{ old('profile_name') == 'My Sister' ? 'selected' : '' }}>My Sister
                                                </option>
                                                <option value="My Friend"
                                                    {{ old('profile_name') == 'My Friend' ? 'selected' : '' }}>My Friend
                                                </option>
                                                <option value="My Relative"
                                                    {{ old('profile_name') == 'My Relative' ? 'selected' : '' }}>My Relative
                                                </option>
                                            </select>

                                            @error('profile_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Name:</label>
                                            <input type="text" class="form-control" placeholder="Enter your full name"
                                                name="name" value="{{ old('name') }}">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Email:</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Enter email" name="email">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Phone:</label>
                                            <input type="number" class="form-control" id="phone"
                                                placeholder="Enter phone number" name="phone">
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Password:</label>
                                            <input type="password" class="form-control" id="pwd"
                                                placeholder="Enter password" name="password">
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Gender:</label>
                                            <select class="form-select chosen-select" name="gender">
                                                <option value="" disabled
                                                    {{ old('gender') == '' ? 'selected' : '' }}>
                                                    Select</option>
                                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male
                                                </option>
                                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                                    Female</option>
                                            </select>
                                            @error('gender')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Date of birth:</label>
                                            <input type="date" class="form-control" name="dob"
                                                placeholder="Enter Your dob">
                                            @error('dob')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Age:</label>
                                            <input type="number" class="form-control" name="age"
                                                placeholder="Enter Your Age">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Height:</label>
                                            <input type="text" class="form-control" name="height"
                                                placeholder="Enter Height">
                                            @error('height')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Weight:</label>
                                            <input type="text" class="form-control" name="weight"
                                                placeholder="Enter Weight">
                                            @error('weight')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Fathers name:</label>
                                            <input type="text" class="form-control" name="fathers_name"
                                                placeholder="Enter Fathers name">
                                            @error('fathers_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Fathers Job type:</label>
                                            <select class="form-select chosen-select" name="fathers_job">
                                                <option value="" disabled
                                                    {{ old('fathers_job') == '' ? 'selected' : '' }}>Select</option>
                                                <option value="Business"
                                                    {{ old('fathers_job') == 'Business' ? 'selected' : '' }}>Business
                                                </option>
                                                <option value="Employee"
                                                    {{ old('fathers_job') == 'Employee' ? 'selected' : '' }}>Employee
                                                </option>
                                                <option value="Government"
                                                    {{ old('fathers_job') == 'Government' ? 'selected' : '' }}>Government
                                                </option>
                                                <option value="Former"
                                                    {{ old('fathers_job') == 'Former' ? 'selected' : '' }}>Former</option>
                                                <option value="Jobless"
                                                    {{ old('fathers_job') == 'Jobless' ? 'selected' : '' }}>Jobless
                                                </option>
                                            </select>
                                            @error('fathers_job')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Mothers name:</label>
                                            <input type="text" class="form-control" name="mothers_name"
                                                placeholder="Enter Mothers Name">
                                            @error('mothers_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Mothers Job type:</label>
                                            <select class="form-select chosen-select" name="mothers_job">
                                                <option value="" disabled
                                                    {{ old('mothers_job') == '' ? 'selected' : '' }}>Select</option>
                                                <option value="Business"
                                                    {{ old('mothers_job') == 'Business' ? 'selected' : '' }}>Business
                                                </option>
                                                <option value="Employee"
                                                    {{ old('mothers_job') == 'Employee' ? 'selected' : '' }}>Employee
                                                </option>
                                                <option value="Government"
                                                    {{ old('mothers_job') == 'Government' ? 'selected' : '' }}>
                                                    Government</option>
                                                <option value="House Wife"
                                                    {{ old('mothers_job') == 'House Wife' ? 'selected' : '' }}>House
                                                    Wife
                                                </option>
                                                <option value="Jobless"
                                                    {{ old('mothers_job') == 'Jobless' ? 'selected' : '' }}>Jobless
                                                </option>
                                            </select>
                                            @error('mothers_job')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Total Family:</label>
                                            <input type="text" class="form-control" name="total_family"
                                                placeholder="Enter Total Family">
                                            @error('total_family')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Total Brother:</label>
                                            <input type="text" class="form-control" name="total_brother"
                                                placeholder="Enter Total Brothers">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Total Sister:</label>
                                            <input type="text" class="form-control" name="total_sister"
                                                placeholder="Enter Total Sister">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END PROFILE BIO-->
                            <!--PROFILE BIO-->
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h1>Address</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 form-group">
                                        <label class="lb">Country:</label>
                                        <input type="text" class="form-control" name="country"
                                            placeholder="Enter Country">
                                        @error('country')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label class="lb">State:</label>
                                        <input type="text" name="state" placeholder="Enter State"
                                            class="form-control">
                                        @error('state')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label class="lb">City:</label>
                                        <input type="text" name="city" placeholder="Enter City"
                                            class="form-control">
                                        @error('city')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label class="lb">Pin Code:</label>
                                        <input type="text" name="pin_code" placeholder="Enter Pin Code"
                                            class="form-control">
                                        @error('pin_code')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Address:</label>
                                        <input type="text" class="form-control" name="address"
                                            placeholder="Enter Address">
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- </div> --}}
                            <!--END PROFILE BIO-->
                            <!--PROFILE BIO-->
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h1>Job & Education</h1>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Job type:</label>

                                            <select class="form-select chosen-select" name="job_type">
                                                <option value="" disabled
                                                    {{ old('job_type') == '' ? 'selected' : '' }}>
                                                    Select</option>
                                                <option value="Business"
                                                    {{ old('job_type') == 'Business' ? 'selected' : '' }}>
                                                    Business
                                                </option>
                                                <option value="Employee"
                                                    {{ old('job_type') == 'Employee' ? 'selected' : '' }}>
                                                    Employee
                                                </option>
                                                <option value="Government"
                                                    {{ old('job_type') == 'Government' ? 'selected' : '' }}>Government
                                                </option>
                                                <option value="Former"
                                                    {{ old('job_type') == 'Former' ? 'selected' : '' }}>
                                                    Former</option>
                                                <option value="Jobless"
                                                    {{ old('job_type') == 'Jobless' ? 'selected' : '' }}>
                                                    Jobless
                                                </option>
                                            </select>
                                            @error('job_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Company name:</label>
                                            <input type="text" class="form-control" name="company_name"
                                                placeholder="Enter Company Name">
                                            @error('company_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Salary / Annual</label>
                                            <input type="text" class="form-control" name="salary"
                                                placeholder="Enter Salary">
                                            @error('salary')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Job total experience:</label>
                                            <input type="text" class="form-control" name="experience"
                                                placeholder="Enter Experience">
                                            @error('experience')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">Degree:</label>
                                            <input type="text" class="form-control" name="degree"
                                                placeholder="Enter Degree Name">
                                            @error('degree')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">College:</label>
                                            <input type="text" class="form-control" name="college"
                                                placeholder="Enter College Name">
                                            @error('college')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="lb">School:</label>
                                            <input type="text" class="form-control" name="school"
                                                placeholder="Enter School Name">
                                            @error('school')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="lb">Hobbies:</label>
                                                <select class="form-select" name="hobbies">
                                                    <option value="" disabled
                                                        {{ old('hobbies') == '' ? 'selected' : '' }}>
                                                        Select</option>
                                                    <option value="Modelling"
                                                        {{ old('hobbies') == 'Modelling' ? 'selected' : '' }}>
                                                        Modelling
                                                    </option>
                                                    <option value="Watching"
                                                        {{ old('hobbies') == 'Watching' ? 'selected' : '' }}>
                                                        Watching
                                                    </option>
                                                    <option value="movies"
                                                        {{ old('hobbies') == 'movies' ? 'selected' : '' }}>
                                                        movies</option>
                                                    <option value="Playing"
                                                        {{ old('hobbies') == 'Playing' ? 'selected' : '' }}>
                                                        Playing
                                                    </option>
                                                    <option value="volleyball"
                                                        {{ old('hobbies') == 'volleyball' ? 'selected' : '' }}>
                                                        volleyball
                                                    </option>
                                                    <option value="Hangout with family"
                                                        {{ old('hobbies') == 'Hangout with family' ? 'selected' : '' }}>
                                                        Hangout with family</option>
                                                    <option value="Adventure travel"
                                                        {{ old('hobbies') == 'Adventure travel' ? 'selected' : '' }}>
                                                        Adventure travel</option>
                                                    <option value="Books reading"
                                                        {{ old('hobbies') == 'Books reading' ? 'selected' : '' }}>Books
                                                        reading</option>
                                                    <option value="Music"
                                                        {{ old('hobbies') == 'Music' ? 'selected' : '' }}>Music
                                                    </option>
                                                    <option value="Cooking"
                                                        {{ old('hobbies') == 'Cooking' ? 'selected' : '' }}>
                                                        Cooking
                                                    </option>
                                                    <option value="Yoga"
                                                        {{ old('hobbies') == 'Yoga' ? 'selected' : '' }}>Yoga
                                                    </option>
                                                </select>
                                                @error('hobbies')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--END PROFILE BIO-->
                            <!--PROFILE BIO-->
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h1>Social media</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label class="lb">WhatsApp:</label>
                                        <input type="url" class="form-control" name="whatsapp"
                                            placeholder="Enter WhatsApp Link">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label class="lb">Facebook:</label>
                                        <input type="url" class="form-control" name="facebook"
                                            placeholder="Enter Facebook Link">
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label class="lb">Instagram:</label>
                                        <input type="url" class="form-control" name="instagram"
                                            placeholder="Enter Instagram Link">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label class="lb">X (Twitter):</label>
                                        <input type="url" class="form-control" name="x"
                                            placeholder="Enter X (Twitter) Link">
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label class="lb">Youtube:</label>
                                        <input type="url" class="form-control" name="youtube"
                                            placeholder="Enter YouTube Link">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label class="lb">Linkedin:</label>
                                        <input type="url" class="form-control" name="linkedin"
                                            placeholder="Enter Linkedin Link">
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
