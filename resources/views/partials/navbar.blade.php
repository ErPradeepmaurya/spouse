    <!-- PRELOADER -->
    <div id="preloader">
        <div class="plod">
            <span class="lod1"><img src="images/loder/1.png" alt="" loading="lazy"></span>
            <span class="lod2"><img src="images/loder/2.png" alt="" loading="lazy"></span>
            <span class="lod3"><img src="images/loder/3.png" alt="" loading="lazy"></span>
        </div>
    </div>
    <!-- END PRELOADER -->

    <!-- MAIN MENU -->
    <div class="hom-top">
        <div class="container">
            <div class="row">
                <div class="hom-nav">
                    <!-- LOGO -->
                    <div class="logo">
                        <a href="{{ route('index') }}" class="logo-brand">
                            <img src="images/logo/Spouse-Logo.png" alt="" loading="lazy" class="ic-logo">
                        </a>
                    </div>
                    <!-- EXPLORE MENU -->
                    <div class="bl">
                        <ul>
                            <li class="smenu-pare">
                                <span class="smenu">All pages</span>
                                <div class="smenu-open smenu-multi">
                                    <div class="container">
                                        <div class="row">
                                            <div class="multi-col">
                                                <div class="inn">
                                                    <ul>
                                                        <li><a href="{{ route('login') }}">Hindu</a></li>
                                                        <li><a href="{{ route('login') }}">Muslim</a></li>
                                                        <li><a href="{{ route('login') }}">Christian</a></li>
                                                        <li><a href="{{ route('login') }}">Sikh</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="multi-col">
                                                <div class="inn">
                                                    <ul>
                                                        <li><a href="{{ route('login') }}">Parsi</a></li>
                                                        <li><a href="{{ route('login') }}">Jain</a></li>
                                                        <li><a href="{{ route('login') }}">Buddhist</a></li>
                                                        <li><a href="{{ route('login') }}">Jewish</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="multi-col">
                                                <div class="inn">
                                                    <ul>
                                                        <li><a href="{{ route('login') }}">No Religion</a></li>
                                                        <li><a href="{{ route('login') }}">Spiritual</a></li>
                                                        <li><a href="{{ route('login') }}">Other</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{ route('about') }}">About</a></li>
                        </ul>
                    </div>
                    <!-- USER PROFILE -->
                    <div class="head-pro d-flex align-items-center">
                        <img src="images/profiles/1.jpg" alt="" loading="lazy" class="me-2 rounded-circle"
                            style="width: 40px; height: 40px;">
                        <h4 class="mt-3"><a href="{{ route('login') }}" class="text-decoration-none"
                                style="font-weight: 500">Login</a>
                        </h4>
                    </div>

                </div>

                <!--MOBILE MENU-->
                <div class="mob-menu">
                    <div class="mob-me-ic">
                        <span class="mobile-menu">
                            <li><a href="{{ route('login') }}">Login</a></li>
                        </span>
                    </div>
                </div>
                <!--END MOBILE MENU-->
            </div>
        </div>
    </div>
    </div>
    <!-- END -->

    <!-- EXPLORE MENU POPUP -->
    <div class="mob-me-all mobile_menu">
        <div class="mob-me-clo"><img src="images/icon/close.svg" alt=""></div>
        <div class="mv-bus">
            <ul>

                {{-- <li><a href="{{ route('about') }}">Sign-up</a></li> --}}
            </ul>
        </div>
    </div>
