<!-- FOOTER -->
<section class="wed-hom-footer">
    <div class="container">
        <div class="row foot-supp">
            <h2><span>Free support:</span> +92 (8800) 68 - 8960 &nbsp;&nbsp;|&nbsp;&nbsp; <span>Email:</span>
                info@example.com
            </h2>
        </div>
        <div class="row wed-foot-link wed-foot-link-1">
            <div class="col-md-4">
                <h4>Get In Touch</h4>
                <p>Address: 3812 Lena Lane City Jackson Mississippi</p>
                <p>Phone: <a href="tel:+01 0000000000">+91 0000000000</a></p>
                <p>Email: <a href="mailto:info@example.com">info@example.com</a></p>
            </div>
            <div class="col-md-4">
                <h4>HELP &amp; SUPPORT</h4>
                <ul>
                    <li><a href="{{ route('about') }}">About company</a>
                    </li>
                    <li><a href="{{ route('contact') }}">Contact us</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 fot-soc">
                <h4>SOCIAL MEDIA</h4>
                <ul>
                    <li><a href="#!"><img src="images/social/1.png" alt="" loading="lazy"></a></li>
                    <li><a href="#!"><img src="images/social/2.png" alt="" loading="lazy"></a></li>
                    <li><a href="#!"><img src="images/social/3.png" alt="" loading="lazy"></a></li>
                    <li><a href="#!"><img src="images/social/5.png" alt="" loading="lazy"></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- COPYRIGHTS -->
<section>
    <div class="cr">
        <div class="container">
            <div class="row">
                <p>Copyright © <span id="cry">2025</span> <a href="#!" target="_blank">Itwedream</a>
                    All rights reserved.</p>
            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/select-opt.js"></script>
<script src="js/slick.js"></script>
<script src="js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Toastr JS -->
<script>
    @if (session('success'))
        toastr.success('{{ session('success') }}');
    @endif

    @if (session('error'))
        toastr.error('{{ session('error') }}');
    @endif

    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "3000"
    };
</script>
