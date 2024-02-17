<footer class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <a class="navbar-brand" href="{{route('home')}}">
                    <input type="hidden" name="" id="header_img_alter" value="{{get_setting('site_footer_logo')->value}}">
                    <input type="hidden" name="" id="header_img" value="{{get_setting('site_logo')->value}}">
                    <img id="my-img" src="{{asset(get_setting('site_logo')->value)}}" alt="logo" class="main-img"
                         onmouseover="newImg(this)" onmouseout="oldImg(this)" style="width: 100%; height: 55%">
                </a>
                <p class="mt-2" align="justify">{{get_setting('short_description')->value}}</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="{{get_setting('facebook_url')->value}}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="{{get_setting('instagram_url')->value}}"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href="{{get_setting('twitter_url')->value}}"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="{{get_setting('youtube_url')->value}}"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="{{get_setting('linkedin_url')->value}}"><i class="fab fa-linkedin-in"></i></a>
                </div>

            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Let Us Help You</h4>
                <a class="btn btn-link" href="@if(Auth::user() && Auth::user()->role == 3) {{route('dashboard')}} @else {{route('login')}} @endif">@if(Auth::user() && Auth::user()->role == 3)Your Account @else Log in @endif</a>
                <a class="btn btn-link" href="{{route('page.contact')}}">Contact Us</a>
                <a class="btn btn-link" href="{{route('page.about')}}">About Us</a>
                <a class="btn btn-link" href="{{route('page.policy')}}">Privacy Policy</a>
                <a class="btn btn-link" href="{{route('page.terms')}}">Terms & Condition</a>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-1"><i class="fa fa-map-marker-alt me-3"></i>{{get_setting('business_address')->value}}</p>
                <p class="mb-1"><i class="fa fa-phone-alt me-2"></i>{{get_setting('phone')->value}}</p>
{{--                <p class="mb-1"><i class="fa fa-phone-alt me-2"></i>+88 01700 000000</p>--}}
                <p class="mb-1"><i class="fa fa-envelope me-2"></i>{{get_setting('email')->value}}</p>

            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Happy Shopping</h4>
                <p>Easy To Life</p>
                <div class="d-flex">
                    <div>
                        <a href="#"><img style="width: 150px;" class="bg-light btn"
                                src="{{asset('FrontEnd')}}/assect/img/resources/payment.png" alt=""></a>
                    </div>
                    <div>
                        <a href="#"><img class="bg-light w-75 btn ms-2" src="{{asset('FrontEnd')}}/assect/img/resources/play.png"
                                alt=""></a>
                        <a href="#"><img class="bg-light w-75 btn ms-2 mt-2" src="{{asset('FrontEnd')}}/assect/img/resources/appstore.png"
                                alt=""></a>
                        <a href="#"><img class="bg-light w-75 btn ms-2 mt-2"
                                src="{{asset('FrontEnd')}}/assect/img/resources/appgallery.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="{{route('home')}}">BOKCHO</a> || All Right Reserved.

                    Designed By || <a class="border-bottom" href="https://skydreamit.com/" target="_blank">Sky Dream IT</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
{{--                        <a href="#">Ad's Choice</a>--}}
{{--                        <a href="#">Cookies</a>--}}
                        <a href="{{route('page.help')}}">Help</a>
                        <a href="{{route('page.faq')}}">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
