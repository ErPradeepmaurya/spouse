@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
    <section>
        <div class="str">
            <div class="ban-inn ab-ban pg-cont">
                <div class="container">
                    <div class="row">
                        <div class="hom-ban">
                            <div class="ban-tit">
                                <span>We are here to assist you.</span>
                                <h1>Contact us</h1>
                                <p>Most Trusted and premium Matrimony Service in the World.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="login pg-cont">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-sm-5 mx-2 shadow-lg p-4 rounded bg-white p-5">
                        <div class="form-tit">
                            <h4>Let's talk</h4>
                            <h1>Send your enquiry now </h1>
                        </div>
                        <div class="form-login">
                            <form method="post" action="{{ route('store.contact') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="lb">First Name:</label>
                                        <input type="text" id="name" class="form-control"
                                            placeholder="Enter your full name" name="fname" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="lb">Last Name:</label>
                                        <input type="text" id="name" class="form-control"
                                            placeholder="Enter your full name" name="lname" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="lb">Date of birth:</label>
                                        <input type="date" class="form-control" id="phone"
                                            placeholder="Enter phone number" name="dob" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="lb">Gender:</label>
                                        <select name="gender" class="form-select">
                                            <option value="">-Select-</option>
                                            <option value="Male">-ale</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="lb">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email"
                                            name="email" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="lb">Phone:</label>
                                        <input type="number" class="form-control" id="phone"
                                            placeholder="Enter phone number" name="phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Message:</label>
                                        <textarea name="message" class="form-control" id="message" placeholder="Enter message" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send Enquiry</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-5 mx-2 shadow-lg p-4 rounded bg-white p-5">
                        <ul>
                            <li>
                                <div class="we-here">
                                    <h3>Our office</h3>
                                    <p>Most Trusted and premium Matrimony Service in the World.</p>
                                    <span><i class="fa fa-phone" aria-hidden="true"></i> +92 (8800) 68 - 8960</span>
                                    <span><i class="fa fa-envelope-o" aria-hidden="true"></i> help@company.com </span>
                                    <span><i class="fa fa-map-marker" aria-hidden="true"></i> 28800 Orchard Lake Road,
                                        Suite
                                        180 Farmington Hills, U.S.A.</span>
                                </div>
                            </li>
                            <li>
                                <div class="we-cont">
                                    <img src="images/icon/trust.png" alt="">
                                    <h4>Customer Relations</h4>
                                    <p>Most Trusted and premium Matrimony Service in the World.</p>
                                    <a href="#!" class="cta-rou-line">Get Support</a>
                                </div>
                            </li>
                            <li>
                                <div class="we-cont">
                                    <img src="images/icon/telephone.png" alt="">
                                    <h4>WhatsApp Support</h4>
                                    <p>Most Trusted and premium Matrimony Service in the World.</p>
                                    <a href="#!" class="cta-rou-line">Talk to sales</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
