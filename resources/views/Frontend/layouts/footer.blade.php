<!--================= Footer Start Here =================-->
<div class="footer footer-2 footer-3">
    <div class="container">
        <div class="footer-inner">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-6 box-widget-col">
                    <div class="footer-widget footer-box-widget">
                        <a class='logo' href='{{ route("index") }}'><img src="{{ url('/') }}/storage/{{ siteSetting()->logo }}" alt="umart-logo"></a>
                        <div class="quick-contact">
                            <div class="phone contact-item">
                                <div class="icon"><img src="{{ asset('/') }}assets/images/icons/24clock.png" alt="chat-icon">
                                </div>
                                <div class="contact-info">
                                    <a href="tel:{{ siteSetting()->phone }}" class="service-time info">{{ siteSetting()->phone }}</a>
                                    <span class="title">7/24</span>
                                </div>
                            </div>
                            <div class="email contact-item">
                                <div class="icon"><img src="{{ asset('/') }}assets/images/icons/mail.png" alt="phone-icon">
                                </div>
                                <div class="contact-info">
                                    <a href="mailto:{{ siteSetting()->email }}"
                                       class="email-address info">{{ siteSetting()->email }}</a>
                                    <span class="title">7/24</span>
                                </div>
                            </div>
                        </div>
                        <ul class="social-links-footer2" style="padding-bottom: 100px;">
                            <li><a class="platform fb" target="_blank" href="http://facebook.com/"><i
                                        class="fab fa-facebook"></i></a>
                            </li>
                            <li><a class="platform yt" target="_blank" href="http://youtube.com/"><i
                                        class="fab fa-youtube"></i></a>
                            </li>
                            <li><a class="platform ttr" target="_blank" href="http://twitter.com/"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h3 class="footer-widget-title">Haqqımızda</h3>
                        <p class="widget-text">{{ siteSetting()->description }}</p>
                    </div>
                </div>
                <div class="col-lg-13 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h3 class="footer-widget-title">Digər</h3>
                        <ul class="widget-items cata-widget">
                            <li class="widget-list-item"><a href="{{ route("contact") }}">Əlaqə</a></li>
                            <li class="widget-list-item"><a href="#0">Qaydalar</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-13 col-md-6 col-sm-6">
                    <h3 class="footer-widget-title">Hesab</h3>
                    <ul class="footer-widget">
                        <li class="widget-list-item"><a href="{{ route("auth.login") }}">Daxil ol</a></li>
                        <li class="widget-list-item"><a href="{{ route("auth.register") }}">Qeyd ol</a></li>
                        <li class="widget-list-item"><a href="#0">Şifrəni sıfırla</a></li>
                    </ul>
                </div>
                <div class="col-lg-25 col-md-6 col-sm-6">
                    <h3 class="footer-widget-title">Yeniliklərdən xəbər al</h3>
                    <div class="footer-widget newsletter-widget">
                        <div class="input-div">
                            <input type="email" placeholder="Email adresinizi yazın">
                        </div>
                        <a href="#0" class="subscribe-btn">Abunə ol <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottombar">
                <div class="app-download">
                    <span class="download-text">Mobil proqramımız ilə daha rahat</span>
                    <a href="#" target="_blank" class="download-store"><img
                            src="{{ asset('/') }}assets/images/items/appstore.jpg" alt=""></a>
                    <a href="#" target="_blank" class="download-store"><img
                            src="{{ asset('/') }}assets/images/items/playstore.jpg" alt=""></a>
                </div>
                <div class="payment-methods"><img src="{{ asset('/') }}assets/images/footer/payment2.svg" alt="payment-methods">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="footer-bottom-inner">
                <span class="copyright">
                    <a href="https://burncode.org/" class="brand" target="_blank">
                        Burncode LLC
                    </a>
                </span>
            </div>
        </div>
    </div>
</div>
<!--================= Footer End Here =================-->
