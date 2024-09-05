<!-- Start Header -->
<header class="header axil-header header-style-5">
    <!-- Start Mainmenu Area  -->
    <div id="axil-sticky-placeholder"></div>
    <div class="axil-mainmenu">
        <div class="container">
            <div class="header-navbar">
                <div class="header-brand">
                    <a href="{{ route("index") }}" class="logo logo-dark">
                        <img src="{{ url('/') }}/storage/{{ siteSetting()->logo }}" alt="Site Logo">
                    </a>
                    <a href="{{ route("index") }}" class="logo logo-light">
                        <img src="{{ url('/') }}/storage/{{ siteSetting()->logo }}" alt="Site Logo">
                    </a>
                </div>
                <div class="header-main-nav">
                    <!-- Start Mainmanu Nav -->
                    <nav class="mainmenu-nav">
                        <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                        <div class="mobile-nav-brand">
                            <a href="{{ route("index") }}" class="logo">
                                <img src="{{ url('/') }}/storage/{{ siteSetting()->logo }}" alt="Site Logo">
                            </a>
                        </div>
                        <ul class="mainmenu">
                            <li><a href="{{ route("index") }}">Ana səhifə</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Kateqoriyalar</a>
                                <ul class="axil-submenu">
                                    @forelse(productCategory() as $category)
                                        <li><a href="{{ route("category.single", $category->slug ?? "") }}">{{ $category->name }}</a></li>
                                    @empty
                                        No Data !
                                    @endforelse
                                </ul>
                            </li>
                            <li><a href="{{ route("contact") }}">Əlaqə</a></li>
                        </ul>
                    </nav>
                    <!-- End Mainmanu Nav -->
                </div>
                <div class="header-action">
                    <ul class="action-list">
                        <li class="axil-search d-xl-block d-none">
                            <input type="search" class="placeholder product-search-input" name="search2" id="search2" value="" maxlength="128" placeholder="Məhsul axtar" autocomplete="off">
                            <button type="submit" class="icon wooc-btn-search">
                                <i class="flaticon-magnifying-glass"></i>
                            </button>
                        </li>
                        <li class="axil-search d-xl-none d-block">
                            <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                <i class="flaticon-magnifying-glass"></i>
                            </a>
                        </li>
                        <li class="shopping-cart">
                            <a href="#" class="cart-dropdown-btn">
                                <span class="cart-count">3</span>
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </li>
                        <li class="my-account">
                            <a href="javascript:void(0)">
                                <i class="flaticon-person"></i>
                            </a>
                            <div class="my-account-dropdown">
                                @if(\Illuminate\Support\Facades\Auth::guard('customer')->check())
                                    <div class="login-btn">
                                        <a href="{{ route("dashboard") }}" class="axil-btn btn-bg-primary">Profil</a>
                                    </div>
                                @else
                                <div class="login-btn">
                                    <a href="{{ route("auth.login") }}" class="axil-btn btn-bg-primary">Giriş</a>
                                </div>
                                <div class="reg-footer text-center">Hesabın yoxdur ? <a href="{{ route("auth.register") }}" class="btn-link">Qeydiyyat</a></div>
                                @endif
                            </div>
                        </li>
                        <li class="axil-mobile-toggle">
                            <button class="menu-btn mobile-nav-toggler">
                                <i class="flaticon-menu-2"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
<!-- End Header -->
