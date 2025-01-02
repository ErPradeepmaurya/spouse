@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

    <!-- BANNER & SEARCH -->
    <section>
        <div class="str">
            <div class="hom-head">
                <div class="container">
                    <div class="row">
                        <div class="hom-ban">
                            <div class="ban-tit">
                                <span><i class="no1">#1</i> Matrimony</span>
                                <h1>Find your<br><b>Right Match</b> here</h1>
                                <p>Most trusted Matrimony Brand in the World.</p>
                            </div>
                            <div class="ban-search chosenini">
                                <form>
                                    <ul>
                                        <li class="sr-look">
                                            <div class="form-group">
                                                <label>I'm looking for</label>
                                                <select class="chosen-select">
                                                    <option value="">I'm looking for</option>
                                                    <option value="Men">Men</option>
                                                    <option value="Women">Women</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="sr-age">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <select class="chosen-select">
                                                    <option value="">Age</option>
                                                    <option value="">18 to 30</option>
                                                    <option value="">31 to 40</option>
                                                    <option value="">41 to 50</option>
                                                    <option value="">51 to 60</option>
                                                    <option value="">61 to 70</option>
                                                    <option value="">71 to 80</option>
                                                    <option value="">81 to 90</option>
                                                    <option value="">91 to 100</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="sr-reli">
                                            <div class="form-group">
                                                <label>Religion</label>
                                                <select class="chosen-select">
                                                    <option>Religion</option>
                                                    <option>Any</option>
                                                    <option>Hindu</option>
                                                    <option>Muslim</option>
                                                    <option>Jain</option>
                                                    <option>Christian</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="sr-cit">
                                            <div class="form-group">
                                                <label>City</label>
                                                <select class="chosen-select">
                                                    <option>Location</option>
                                                    <option>Any location</option>
                                                    <option>Chennai</option>
                                                    <option>New york</option>
                                                    <option>Perth</option>
                                                    <option>London</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="sr-btn">
                                            <input type="submit" value="Search">
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- BANNER SLIDER -->
    <section>
        <div class="hom-ban-sli">
            <div>
                <ul class="ban-sli">
                    <li>
                        <div class="image">
                            <img src="images/ban-bg.jpg" alt="" loading="lazy">
                        </div>
                    </li>
                    <li>
                        <div class="image">
                            <img src="images/banner.jpg" alt="" loading="lazy">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- QUICK ACCESS -->
    <section>
        <div class="str home-acces-main">
            <div class="container">
                <div class="row">
                    <!-- BACKGROUND SHAPE -->
                    <div class="wedd-shap">
                        <span class="abo-shap-1"></span>
                        <span class="abo-shap-4"></span>
                    </div>
                    <!-- END BACKGROUND SHAPE -->

                    <div class="home-tit">
                        <p>Quick Access</p>
                        <h2><span>Our Services</span></h2>
                        <span class="leaf1"></span>
                        <span class="tit-ani-"></span>
                    </div>
                    <div class="home-acces">
                        <ul class="hom-qui-acc-sli">
                            <li>
                                <div class="wow fadeInUp hacc hacc1" data-wow-delay="0.1s">
                                    <div class="con">
                                        <img src="images/icon/user.png" alt="" loading="lazy">
                                        <h4>Browse Profiles</h4>
                                        <p>1200+ Profiles</p>
                                        <a href="all-profiles.html">View more</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="wow fadeInUp hacc hacc2" data-wow-delay="0.2s">
                                    <div class="con">
                                        <img src="images/icon/gate.png" alt="" loading="lazy">
                                        <h4>Wedding</h4>
                                        <p>1200+ Profiles</p>
                                        <a href="wedding-video.html">View more</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="wow fadeInUp hacc hacc3" data-wow-delay="0.3s">
                                    <div class="con">
                                        <img src="images/icon/couple.png" alt="" loading="lazy">
                                        <h4>All Services</h4>
                                        <p>1200+ Profiles</p>
                                        <a href="services.html">View more</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="wow fadeInUp hacc hacc4" data-wow-delay="0.4s">
                                    <div class="con">
                                        <img src="images/icon/hall.png" alt="" loading="lazy">
                                        <h4>Join Now</h4>
                                        <p>Start for free</p>
                                        <a href="plans.html">Get started</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="wow fadeInUp hacc hacc3" data-wow-delay="0.3s">
                                    <div class="con">
                                        <img src="images/icon/photo-camera.png" alt="" loading="lazy">
                                        <h4>Photo gallery</h4>
                                        <p>1200+ Profiles</p>
                                        <a href="photo-gallery.html">View more</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="wow fadeInUp hacc hacc4" data-wow-delay="0.4s">
                                    <div class="con">
                                        <img src="images/icon/cake.png" alt="" loading="lazy">
                                        <h4>Blog & Articles</h4>
                                        <p>Start for free</p>
                                        <a href="blog.html">Get started</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- TRUST BRANDS -->
    <section>
        <div class="hom-cus-revi">
            <div class="container">
                <div class="row">
                    <div class="home-tit">
                        <p>trusted brand</p>
                        <h2><span>Trust by <b class="num">1500</b>+ Couples</span></h2>
                        <span class="leaf1"></span>
                        <span class="tit-ani-"></span>
                    </div>
                    <div class="slid-inn cus-revi">
                        <ul class="slider3">
                            <li>
                                <div class="cus-revi-box">
                                    <div class="revi-im">
                                        <img src="images/user/1.jpg" alt="" loading="lazy">
                                        <i class="cir-com cir-1"></i>
                                        <i class="cir-com cir-2"></i>
                                        <i class="cir-com cir-3"></i>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                    <h5>Jack danial</h5>
                                    <span>New york</span>
                                </div>
                            </li>
                            <li>
                                <div class="cus-revi-box">
                                    <div class="revi-im">
                                        <img src="images/user/2.jpg" alt="" loading="lazy">
                                        <i class="cir-com cir-1"></i>
                                        <i class="cir-com cir-2"></i>
                                        <i class="cir-com cir-3"></i>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                    <h5>Jack danial</h5>
                                    <span>New york</span>
                                </div>
                            </li>
                            <li>
                                <div class="cus-revi-box">
                                    <div class="revi-im">
                                        <img src="images/user/3.jpg" alt="" loading="lazy">
                                        <i class="cir-com cir-1"></i>
                                        <i class="cir-com cir-2"></i>
                                        <i class="cir-com cir-3"></i>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                    <h5>Jack danial</h5>
                                    <span>New york</span>
                                </div>
                            </li>
                            <li>
                                <div class="cus-revi-box">
                                    <div class="revi-im">
                                        <img src="images/user/5.jpg" alt="" loading="lazy">
                                        <i class="cir-com cir-1"></i>
                                        <i class="cir-com cir-2"></i>
                                        <i class="cir-com cir-3"></i>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                    <h5>Jack danial</h5>
                                    <span>New york</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="cta-full-wid">
                        <a href="#!" class="cta-dark">More customer reviews</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- BANNER -->
    <section>
        <div class="str">
            <div class="ban-inn ban-home">
                <div class="container">
                    <div class="row">
                        <div class="hom-ban">
                            <div class="ban-tit">
                                <span><i class="no1">#1</i> Wedding Website</span>
                                <h2>Why choose us</h2>
                                <p>Most Trusted and premium Matrimony Service in the World.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- START -->
    <section>
        <div class="ab-sec2">
            <div class="container">
                <div class="row">
                    <ul>
                        <li>
                            <div class="animate animate__animated animate__slower" data-ani="animate__flipInX"
                                data-dely="0.1">
                                <img src="images/icon/prize.png" alt="" loading="lazy">
                                <h4>Genuine profiles</h4>
                                <p>Contact genuine profiles with 100% verified mobile</p>
                            </div>
                        </li>
                        <li>
                            <div class="animate animate__animated animate__slower" data-ani="animate__flipInX"
                                data-dely="0.3">
                                <img src="images/icon/trust.png" alt="" loading="lazy">
                                <h4>Most trusted</h4>
                                <p>The most trusted wedding matrimony brand lorem</p>
                            </div>
                        </li>
                        <li>
                            <div class="animate animate__animated animate__slower" data-ani="animate__flipInX"
                                data-dely="0.6">
                                <img src="images/icon/rings.png" alt="" loading="lazy">
                                <h4>2000+ weddings</h4>
                                <p>Lakhs of peoples have found their life partner</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- ABOUT START -->
    <section>
        <div class="ab-wel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ab-wel-lhs">
                            <span class="ab-wel-3"></span>
                            <img src="images/about/1.jpg" alt="" loading="lazy" class="ab-wel-1">
                            <img src="images/couples/20.jpg" alt="" loading="lazy" class="ab-wel-2">
                            <span class="ab-wel-4"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ab-wel-rhs">
                            <div class="ab-wel-tit">
                                <h2>Welcome to <em>Wedding matrimony</em></h2>
                                <p>Best wedding matrimony It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout. </p>
                                <p> <a href="plans.html">Click here to</a> Start you matrimony service now.</p>
                            </div>
                            <div class="ab-wel-tit-1">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't look even slightly believable.</p>
                            </div>
                            <div class="ab-wel-tit-2">
                                <ul>
                                    <li>
                                        <div>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <h4>Enquiry <em>+01 2242 3366</em></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <h4>Get Support <em>info@example.com</em></h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- COUNTS START -->
    <section>
        <div class="ab-cont">
            <div class="container">
                <div class="row">
                    <ul>
                        <li>
                            <div class="ab-cont-po">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <div>
                                    <h4>2K</h4>
                                    <span>Couples pared</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="ab-cont-po">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <div>
                                    <h4>4000+</h4>
                                    <span>Registerents</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="ab-cont-po">
                                <i class="fa fa-male" aria-hidden="true"></i>
                                <div>
                                    <h4>1600+</h4>
                                    <span>Mens</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="ab-cont-po">
                                <i class="fa fa-female" aria-hidden="true"></i>
                                <div>
                                    <h4>2000+</h4>
                                    <span>Womens</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- RECENT COUPLES -->
    <section>
        <div class="hom-couples-all">
            <div class="container">
                <div class="row">
                    <div class="home-tit">
                        <p>trusted brand</p>
                        <h2><span>Recent Couples</span></h2>
                        <span class="leaf1"></span>
                        <span class="tit-ani-"></span>
                    </div>
                </div>
            </div>
            <div class="hom-coup-test">
                <ul class="couple-sli">
                    <li>
                        <div class="hom-coup-box">
                            <span class="leaf"></span>
                            <img src="images/couples/6.jpg" alt="" loading="lazy">
                            <div class="bx">
                                <h4>Dany & July <span>New York</span></h4>
                                <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="hom-coup-box">
                            <span class="leaf"></span>
                            <img src="images/couples/7.jpg" alt="" loading="lazy">
                            <div class="bx">
                                <h4>Dany & July <span>New York</span></h4>
                                <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="hom-coup-box">
                            <span class="leaf"></span>
                            <img src="images/couples/8.jpg" alt="" loading="lazy">
                            <div class="bx">
                                <h4>Dany & July <span>New York</span></h4>
                                <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="hom-coup-box">
                            <span class="leaf"></span>
                            <img src="images/couples/9.jpg" alt="" loading="lazy">
                            <div class="bx">
                                <h4>Dany & July <span>New York</span></h4>
                                <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="hom-coup-box">
                            <span class="leaf"></span>
                            <img src="images/couples/10.jpg" alt="" loading="lazy">
                            <div class="bx">
                                <h4>Dany & July <span>New York</span></h4>
                                <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="hom-coup-box">
                            <span class="leaf"></span>
                            <img src="images/couples/3.jpg" alt="" loading="lazy">
                            <div class="bx">
                                <h4>Dany & July <span>New York</span></h4>
                                <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="hom-coup-box">
                            <span class="leaf"></span>
                            <img src="images/couples/4.jpg" alt="" loading="lazy">
                            <div class="bx">
                                <h4>Dany & July <span>New York</span></h4>
                                <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="hom-coup-box">
                            <span class="leaf"></span>
                            <img src="images/couples/5.jpg" alt="" loading="lazy">
                            <div class="bx">
                                <h4>Dany & July <span>New York</span></h4>
                                <a href="wedding.html" class="sml-cta cta-dark">View more</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- FIND YOUR MATCH BANNER -->
    <section>
        <div class="str count">
            <div class="container">
                <div class="row">
                    <div class="fot-ban-inn">
                        <div class="lhs">
                            <h2>Find your perfect Match now</h2>
                            <p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry.</p>
                            <a href="sign-up.html" class="cta-3">Register Now</a>
                            <a href="sign-up.html" class="cta-4">Help & Support</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
@endsection