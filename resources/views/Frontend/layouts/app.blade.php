<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="{{ asset('/') }}assets/images/fav.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}assets/images/fav.png">
    <!--================= Bootstrap V5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/bootstrap.min.css">
    <!--================= Font Awesome 5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/all.min.css">
    <!--================= RT Icons CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/rt-icons.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/animate.min.css">
    <!--================= Magnific popup Plugin =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/magnific-popup.css">
    <!--================= Swiper Slider Plugin =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/swiper-bundle.min.css">
    <!--================= Mobile Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/metisMenu.css">
    <!--================= Preloader CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/preloader.css">
    <!--================= Main Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/rtsmenu.css">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/variables/variable3.css">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/main.css">
</head>

<body>

<!--================= Preloader Section Start Here =================-->
<div id="weiboo-load">
    <div class="preloader-new">
        <svg class="cart_preloader" role="img" aria-label="Shopping cart_preloader line animation"
             viewBox="0 0 128 128" width="128px" height="128px" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="8">
                <g class="cart__track" stroke="hsla(0,10%,10%,0.1)">
                    <polyline points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80" />
                    <circle cx="43" cy="111" r="13" />
                    <circle cx="102" cy="111" r="13" />
                </g>
                <g class="cart__lines" stroke="currentColor">
                    <polyline class="cart__top" points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80"
                              stroke-dasharray="338 338" stroke-dashoffset="-338" />
                    <g class="cart__wheel1" transform="rotate(-90,43,111)">
                        <circle class="cart__wheel-stroke" cx="43" cy="111" r="13" stroke-dasharray="81.68 81.68"
                                stroke-dashoffset="81.68" />
                    </g>
                    <g class="cart__wheel2" transform="rotate(90,102,111)">
                        <circle class="cart__wheel-stroke" cx="102" cy="111" r="13" stroke-dasharray="81.68 81.68"
                                stroke-dashoffset="81.68" />
                    </g>
                </g>
            </g>
        </svg>
    </div>
</div>
<!--================= Preloader End Here =================-->

<div class="anywere anywere-home"></div>

<!--================= Header Section Start Here =================-->
<header id="rtsHeader">
    <div class="navbar-wrapper">
        <div class="navbar-part navbar-part navbar-part3">
            <div class="container">
                <div class="navbar-inner navbar-inner2">
                    <a class='logo' href='{{ route("index") }}'><img src="{{ url('/') }}/storage/{{ siteSetting()->logo }}" alt="umart-logo"></a>
                    <div class="navbar-search-area">
                        <div class="search-input-inner">
                            <select class="custom-select">
                                <option value="hide">Kateqoriyalar</option>
                                @forelse(productCategory() as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @empty
                                    No Data
                                @endforelse
                            </select>
                            <div class="input-div">
                                <div class="search-input-icon">
                                    <i class="rt-search mr--10"></i>Axtar</div>
                                <input class="search-input input4" type="text" placeholder="Axtar">
                            </div>
                        </div>
                    </div>
                    <div class="header-action-items header-action-items1">
                        <div class="cart action-item">
                            <div class="cart-nav">
                                <div class="cart-icon icon"><i class="rt-cart"></i><span
                                        class="wishlist-dot icon-dot">3</span></div>
                            </div>
                        </div>
                        <a class='account' href='{{ route("dashboard") }}'><i class="rt-user-2"></i></a>
                    </div>
                    <div class="hamburger"><span></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-sticky lower-navbar-sticky">
        <div class="navbar-part navbar-part2 lower-navbar">
            <div class="container">
                <div class="navbar-inner">
                    <a class='logo' href='{{ route("index") }}'><img src="{{ url('/') }}/storage/{{ siteSetting()->logo }}" alt="umart-logo"></a>
                    <div class="rts-menu">
                        <nav class="menus menu-toggle">
                            <ul class="nav__menu">
                                @forelse(productCategory() as $category)
                                    <li><a class='menu-item' href='{{ route("products.all") }}'>{{ $category->name }}</a></li>
                                @empty
                                    No Data !
                                @endforelse
                            </ul>
                        </nav>
                    </div>
                    <div class="quick-contact">
                        <a href="tel:{{  siteSetting()->phone }}" class="phone contact-item"><i class="rt-phone-flip"></i> {{  siteSetting()->phone }} <span
                                class="separator"></span></a>
                        <a href="mailto:{{  siteSetting()->email }}" class="email contact-item"><i class="rt-envelope"></i> {{  siteSetting()->email }} </a>
                    </div>
                    <div class="hamburger"><span></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-bar">
        <div class="cart-header">
            <h3 class="cart-heading">Səbət</h3>
            <div class="close-cart"><i class="fal fa-times"></i></div>
        </div>
        <div class="product-area">
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="{{ asset('/') }}assets/images/slider/image1.jpg" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Test 1</span>
                        <div class="item-wrapper">
                            <span class="product-qnty">3 ×</span>
                            <span class="product-price">$198.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="3" />
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-bottom-area">
            <span class="total-price">Cəm: <span class="price">0 AZN</span></span>
            <a class='checkout-btn cart-btn' href='#'>Sifariş et</a>
            <a class='view-btn cart-btn' href='#'>Səbətə bax</a>
        </div>
    </div>
    <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="offset-sidebar">
            <a class="hamburger-1 mobile-hamburger-1 mobile-hamburger-2 ml--30" href="#"><span><i class="rt-xmark"></i></span></a>
        </div>
        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu side-mobile-menu1 side-mobile-menu2">
            <ul id="mobile-menu-active">
                <li><a class='mm-link' href='{{ route("products.all") }}'>Bütün məhsullar</a></li>
                @forelse(productCategory() as $category)
                    <li><a class='mm-link' href='{{ route("category.single", ['slug' => $category->slug]) }}'>{{ $category->name }}</a></li>
                @empty
                    No Data !
                @endforelse
            </ul>
        </nav>
        <!-- side-mobile-menu end -->
    </aside>


    @yield('content')

    @include('Frontend.layouts.footer')


<!--================= Scroll to Top Start =================-->
<div class="scroll-top-btn scroll-top-btn1 scroll-top-btn2"><i class="fas fa-angle-up arrow-up"></i><i class="fas fa-circle-notch"></i></div>
<!--================= Scroll to Top End =================-->

<!--================= Jquery latest version =================-->
<script src="{{ asset('/') }}assets/js/vendors/jquery-3.6.0.min.js"></script>
<!--================= Bootstrap latest version =================-->
<script src="{{ asset('/') }}assets/js/vendors/bootstrap.min.js"></script>
<!--================= Wow.js =================-->
<script src="{{ asset('/') }}assets/js/vendors/wow.min.js"></script>
<!--================= Swiper Slider =================-->
<script src="{{ asset('/') }}assets/js/vendors/swiper-bundle.min.js"></script>
<!--================= Nice Select =================-->
<script src="{{ asset('/') }}assets/js/vendors/jquery.nice-select.js"></script>
<!--================= metisMenu Plugin =================-->
<script src="{{ asset('/') }}assets/js/vendors/metisMenu.min.js"></script>
<!--================= Main Menu Plugin =================-->
<script src="{{ asset('/') }}assets/js/vendors/rtsmenu.js"></script>
<!--================= Magnefic Popup Plugin =================-->
<script src="{{ asset('/') }}assets/js/vendors/isotope.pkgd.min.js"></script>
<!--================= Magnefic Popup Plugin =================-->
<script src="{{ asset('/') }}assets/js/vendors/jquery.magnific-popup.min.js"></script>
<!--================= Main Script =================-->
<script src="{{ asset('/') }}assets/js/main.js"></script>
</header>
</body>
