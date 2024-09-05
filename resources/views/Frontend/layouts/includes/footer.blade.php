<!-- Start Footer Area  -->
<footer class="axil-footer-area footer-style-1 footer-dark">
    <!-- Start Footer Top Area  -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!-- Start Single Widget  -->
                <div class="col-md-3 col-sm-12">
                    <div class="axil-footer-widget">
                        <div class="logo mb--30">
                            <a href="{{ route("index") }}">
                                <img class="light-logo" src="{{ url('/') }}/storage/{{ siteSetting()->logo }}" alt="Logo Images">
                            </a>
                        </div>
                        <div class="inner">
                            <p>{{ siteSetting()->location }}</p>
                            <div class="social-share">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-md-3 col-sm-4">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Məlumatlar</h5>
                        <div class="inner">
                            <ul>
                                @forelse(pages() as $page)
                                    <li><a href="{{ route("page", ['slug' => $page['slug']]) }}">{{ $page->name }}</a></li>
                                @empty
                                    Səhifə yoxdur !
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-md-3 col-sm-4">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Hesab</h5>
                        <div class="inner">
                            <ul>
                                @if(\Illuminate\Support\Facades\Auth::guard('customer')->check())
                                    <li><a href="{{ route("dashboard") }}">Profil</a></li>
                                    <li><a href="{{ route("logout") }}">Çıxış</a></li>
                                @else
                                    <li><a href="{{ route("auth.login") }}">Daxil ol</a></li>
                                    <li><a href="{{ route("auth.register") }}">Qeyd ol</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-md-3 col-sm-4">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Dəstək</h5>
                        <div class="inner">
                            <ul>
                                <li><a href="{{ route("contact") }}">Bizimlə Əlaqə</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
            </div>
        </div>
    </div>
    <!-- End Footer Top Area  -->
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-default separator-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-12">
                    <div class="copyright-left d-flex flex-wrap justify-content-xl-start justify-content-center">
                        <ul class="quick-link">
                            <li>Powered by  <a href="https://burncode.org" target="_blank"> Burncode LLC</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
                        <ul class="payment-icons-bottom quick-link">
                            <li><img src="{{ asset('/') }}assets/images/icons/cart/cart-1.png" alt="paypal cart"></li>
                            <li><img src="{{ asset('/') }}assets/images/icons/cart/cart-2.png" alt="paypal cart"></li>
                            <li><img src="{{ asset('/') }}assets/images/icons/cart/cart-3.png" alt="paypal cart"></li>
                            <li><img src="{{ asset('/') }}assets/images/icons/cart/cart-6.png" alt="paypal cart"></li>
                            <li><img src="{{ asset('/') }}assets/images/icons/cart/cart-5.png" alt="paypal cart"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
</footer>
<!-- End Footer Area  -->
