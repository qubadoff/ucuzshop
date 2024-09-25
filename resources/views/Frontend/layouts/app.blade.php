<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}assets/images/favicon.png">

    <!-- CSS  ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/vendor/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/vendor/sal.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/vendor/base.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/style.min.css">

</head>


<body class="sticky-header">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser.
<![endif]-->
<a href="#" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>

@include('Frontend.layouts.includes.header')

@yield('content')

@include('Frontend.layouts.includes.footer')


<!-- Header Search Modal End -->
<div class="header-search-modal" id="header-search-modal">
    <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
    <div class="header-search-wrap">
        <div class="card-header">
            <form action="#">
                <div class="input-group">
                    <input type="search" class="form-control" name="prod-search" id="prod-search" placeholder="Məhsul axtar">
                    <button type="submit" class="axil-btn btn-bg-primary"><i class="far fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="card-body">
            <div class="search-result-header">
                <h6 class="title">24 Result Found</h6>
                <a href="shop.html" class="view-all">View All</a>
            </div>
            <div class="psearch-results">
                <div class="axil-product-list">
                    <div class="thumbnail">
                        <a href="single-product.html">
                            <img src="assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="product-rating">
                                <span class="rating-icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fal fa-star"></i>
                            </span>
                            <span class="rating-number"><span>100+</span> Reviews</span>
                        </div>
                        <h6 class="product-title"><a href="single-product.html">Media Remote</a></h6>
                        <div class="product-price-variant">
                            <span class="price current-price">$29.99</span>
                            <span class="price old-price">$49.99</span>
                        </div>
                        <div class="product-cart">
                            <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                            <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Search Modal End -->


<div class="cart-dropdown" id="cart-dropdown">
    <div class="cart-content-wrap">
        <div class="cart-header">
            <h2 class="header-title">Səbət</h2>
            <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
        </div>
        <div class="cart-body">
            <ul class="cart-item-list">
                @forelse(cartItems() as $item)
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="{{ route("products.single", ['slug' => $item->product->slug]) }}"><img src="{{ url('/') }}/storage/{{ $item->product->cover_image }}" alt="{{ $item->product->name }}"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{ route("products.single", ['slug' => $item->product->slug]) }}">{{ $item->product->name }}</a></h3>
                            <div class="item-price">{{ $item->product->price }}<span class="currency-symbol"> ₼</span></div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="15">
                            </div>
                        </div>
                    </li>
                @empty
                    Səbət boşdur !
                @endforelse
            </ul>
        </div>
        <div class="cart-footer">
            <h3 class="cart-subtotal">
                <span class="subtotal-title">Ümumi:</span>
                <span class="subtotal-amount">$610.00</span>
            </h3>
            <div class="group-btn">
                <a href="{{ route("cart.index") }}" class="axil-btn btn-bg-primary viewcart-btn">Səbətə bax</a>
                <a href="checkout.html" class="axil-btn btn-bg-secondary checkout-btn">Sifariş et</a>
            </div>
        </div>
    </div>
</div>

<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="{{ asset('/') }}assets/js/vendor/modernizr.min.js"></script>
<!-- jQuery JS -->
<script src="{{ asset('/') }}assets/js/vendor/jquery.js"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('/') }}assets/js/vendor/popper.min.js"></script>
<script src="{{ asset('/') }}assets/js/vendor/bootstrap.min.js"></script>
<script src="{{ asset('/') }}assets/js/vendor/slick.min.js"></script>
<script src="{{ asset('/') }}assets/js/vendor/js.cookie.js"></script>
<script src="{{ asset('/') }}assets/js/vendor/jquery-ui.min.js"></script>
<script src="{{ asset('/') }}assets/js/vendor/jquery.ui.touch-punch.min.js"></script>
<script src="{{ asset('/') }}assets/js/vendor/jquery.countdown.min.js"></script>
<script src="{{ asset('/') }}assets/js/vendor/sal.js"></script>
<script src="{{ asset('/') }}assets/js/vendor/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('/') }}assets/js/vendor/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('/') }}assets/js/vendor/isotope.pkgd.min.js"></script>
<script src="{{ asset('/') }}assets/js/vendor/counterup.js"></script>
<script src="{{ asset('/') }}assets/js/vendor/waypoints.min.js"></script>

<!-- Main JS -->
<script src="{{ asset('/') }}assets/js/main.js"></script>

</body>
</html>
