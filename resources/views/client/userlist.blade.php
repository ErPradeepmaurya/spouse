@extends('client.clientLayout.app')
@section('title', 'Home Page')
@section('content')
    <div class="pan-rhs">
        <div class="row main-head">
            <div class="col-md-4">
                <div class="tit">
                    <h1>User List</h1>
                </div>
            </div>
            <div class="col-md-8">
                <nav aria-label="breadcrumb" class="d-flex justify-content-end">
                    <a href="{{ route('client.add_user') }}" class="cta cta-grn">Add New User</a>
                </nav>
            </div>
        </div>
        <div class="row" style="max-height: 500px; overflow-y:scroll;">
            <div class="col-md-12">
                <div class="box-com box-qui box-lig box-tab">
                    <div class="tit">
                        <h3>Join requests</h3>
                        <p>New request profiles, waiting for admin approvals</p>
                        <div class="dropdown">
                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="dropdown">
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="admin-settings.html#new-user-request">New user request
                                        setting</a></li>
                                <li><a class="dropdown-item" href="admin-settings.html#new-user-request">Approval
                                        setting</a></li>
                            </ul>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Profile</th>
                                <th>Phone</th>
                                <th>Request date</th>
                                <th>Request time</th>
                                <th>Payment</th>
                                <th>Plan type</th>
                                <th>Approve</th>
                                <th>More</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="prof-table-thum">
                                        <div class="pro">
                                            <img src="../images/profiles/3.jpg" alt="">
                                        </div>
                                        <div class="pro-info">
                                            <h5>Ashley emyy</h5>
                                            <p>ashleyipsum@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>01 321-998-91</td>
                                <td>22, Feb 2024</td>
                                <td>10:30 AM</td>
                                <td><span class="hig-blu">Paid</span></td>
                                <td><span class="hig-grn">Premium</span></td>
                                <td><span class="cta cta-grn">Approve</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                            <li><a class="dropdown-item" href="#">Billing info</a></li>
                                            <li><a class="dropdown-item" href="#">View more details</a></li>
                                            <li><a class="dropdown-item" href="#">View profile</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection()
