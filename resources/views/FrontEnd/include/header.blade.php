<header>
    <!-- Desktop Nav Star-->
    <section class="d-none d-lg-block">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 left-item">
                        <ul>
                            <li><a class="text-light" href="#">Save More on App</a></li>
                            <li class="text-light">|</li>
                            <li><a class="text-light" href="#">Gift Cards</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 right-item">
                        <ul>
                            <li><a class="text-light" href="#">Daily Deals</a></li>
                            <li class="text-light">|</li>
                            <li class="dropdown">
                                <a class="text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-globe"></i> EN
                                </a>
                                <ul class="dropdown-menu px-3 py-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Bangla
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            English
                                        </label>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav">
            <nav id="navbar_top" class="navbar navbar-expand-lg nav-bg">
                <div class="container">
{{--                    <!-- <a class="navbar-brand" href="#"><img src="{{asset('FrontEnd')}}/assect/img/logo/Bokcho logo1-final.png" alt="logo"></a> -->--}}
{{--                    <a class="navbar-brand" href="{{ route('home') }}"><img src="{{asset('FrontEnd')}}/assect/img/logo/favicon.png" alt="logo"><span>O</span>KCH<span>Ô</span></a>--}}
                    <a class="navbar-brand header-img" href="{{ route('home') }}" >
                        <input type="hidden" name="" id="header_img_alter" value="{{get_setting('site_footer_logo')->value}}">
                        <input type="hidden" name="" id="header_img" value="{{get_setting('site_logo')->value}}">
                        <img id="my-img" src="{{asset(get_setting('site_logo')->value)}}" alt="logo" class="main-img" onmouseover="newImg(this)" onmouseout="oldImg(this)" style="width: 100%">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="ms-auto d-flex " action="{{ route('product.search')}}" method="post">
                            @csrf
                            <input class="form-control me-2 search-box search" type="text" onfocus="search_result_show()" onblur="search_result_hide()"  name="search" placeholder="Search here..." >
                            <button class="btn search-icon" type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            @auth
                            <li class="nav-item">

                                <a class="nav-link" href="{{route('dashboard')}}" title="Dashboard">@if(Auth::user()->profile_image) <img src="{{asset(Auth::user()->profile_image)}}" class="rounded-circle" height="35px" width="35px" alt="no image"> @endif {{Str::before(Auth::user()->name, ' ')}}</a>
                            </li>
                            <li class="nav-item">
                                <span class="nav-link text-light">|</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                    {{-- <input type="hidden" name="_token" value="b8pKiZMLijvc35fMBZ3dt1aArKjvbBGZm9F4WUhW"> --}}
                                </form>
                            </li>
                            @endauth
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Log in</a>
                            </li>
                            <li class="nav-item">
                                <span class="nav-link text-light">|</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Sign up</a>
                            </li>
                            @endguest
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" aria-current="page" href="#"><i--}}
{{--                                        class="fa-regular fa-heart"></i><span class="">0</span></a>--}}
{{--                            </li>--}}
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('cart.show') }}"><i
                                        class="fa-solid fa-cart-plus"><span class="cartQty">0</span></i></a>
                            </li>
                        </ul>
                    </div>


                </div>

            </nav>
            <div class="row">
                <div class="col-md-6 m-auto" >
                    <div class=" searchProducts" style="position: absolute;z-index: 99999; margin-left: 40px"></div>
                </div>
            </div>
        </div>


    </section>
    <!-- Desktop Nav End-->

    <!-- Mobile Nav Start -->
    <section class="d-block d-lg-none">
        <div class="mobile-header-top px-5">
            <div class="mobile-header-top-icon">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-phone"></i></a></li>
                    <li><a href="#"><i class="fa-regular fa-envelope"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="mobile-nav">
            <nav id="mobile_navbar_top" class="navbar py-2 nav-bg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('FrontEnd')}}/assect/img/logo/favicon.png" alt="logo"><span>O</span>KCH<span>Ô</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-start nav-bg" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <a href="{{route('home')}}"><h5 class="navbar-brand" ><img src="{{asset('FrontEnd')}}/assect/img/logo/favicon.png" alt="logo"><span>O</span>KCH<span>Ô</span></h5></a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close" style="color: aliceblue;"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav flex-grow-1 pe-3">
                                <li class="dropdown-item"><a href="{{route('category_list.index')}}">All Categories<span></span></a></li>
                                @foreach($categories as $category)
                                    <li class="dropdown-item"><a href="{{route('product.category', $category->slug)}}">
                                        {{$category->name_en}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container mb-2">
            <form class="ms-auto d-flex " action="{{ route('product.search')}}" method="post">
                @csrf
                <input class="form-control me-2 search-box search mt-2" type="text" onfocus="search_result_show()" id="mobile_search" onblur="search_result_hide()"  name="search" placeholder="Search here..." >
                <button class="btn search-icon" type="submit"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div class="m-auto searchProducts" style="position: absolute;z-index: 99999;"></div>
        </div>

        <div>
            <nav class='mobile'>
                <ul>
                    <li><a href='{{route('home')}}'><span><i class="fa-solid fa-house-chimney"></i>
                            </span><span>Home</span></a></li>

                    <li><a href='{{ route('cart.show') }}'><span><i class="fa-solid fa-cart-shopping"></i> <small class="cartQty">0</small></span>
                            <span>Cart</span></a> </li>

                   <li><a href='{{ route('category_list.index') }}'><span><i class="fas fa-list"></i></span>
                           <span>Category</span></a></li>
                    <li>
                        @auth
                        <a href='{{ route('dashboard') }}'>
                            <span>
                                <i class="fa-regular fa-user" style="margin-left: 9px;">
                                    </i>
                                </span>
                                <span>Profile</span>
                            </a>
                        @endauth
                        @guest
                        <a href='{{ route('login') }}'>
                            <span>
                                <i class="fa-regular fa-user" style="margin-left: 9px;">
                                    </i>
                                </span>
                                <span>Profile</span>
                            </a>
                        @endguest
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- Mobile Nav End -->

</header>

