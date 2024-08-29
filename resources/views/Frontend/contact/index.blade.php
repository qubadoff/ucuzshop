@extends('Frontend.layouts.app')

@section('title', 'Əlaqə')

@section('content')

    <!--contact-area start-->
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <form class="contact-form mb-10">
                        <div class="section-header section-header5 text-start">
                            <div class="wrapper">
                                <div class="sub-content">
                                    <img class="line-1" src="{{ asset('/') }}assets/images/banner/wvbo-icon.png" alt="">
                                </div>
                                <h2 class="title">Bizə yazın</h2>
                            </div>
                        </div>
                        <div class="info-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="input-box mb-20">
                                        <input type="text" id="validationDefault01" placeholder="Ad və siyad" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="input-box mail-input mb-20">
                                        <input type="email" id="validationDefault02" placeholder="E-mail adresi"
                                               required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="input-box number-input mb-30">
                                        <input type="number" id="validationDefault03" placeholder="Telefon nömrəsi"
                                               required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="input-box text-input mb-20">
                                        <textarea name="Message" id="validationDefault05" cols="30" rows="10"
                                                  placeholder="Mesajınız..." required></textarea>
                                    </div>
                                </div>
                                <div class="col-12 mb-15">
                                    <a href="#" class="form-btn form-btn4">
                                        Göndər
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="right-side">
                        <div class="get-in-touch">
                            <h3 class="section-title2">
                                Əlaqə
                            </h3>
                            <div class="contact">
                                <ul>
                                    <li class="one">
                                        {{ siteSetting()->location }}
                                    </li>
                                    <li class="two">
                                        <a href="tel:{{ siteSetting()->phone }}">{{ siteSetting()->phone }}</a>
                                    </li>
                                    <li class="three">Vaxt: <br>
                                        7/24</li>
                                </ul>
                            </div>
                        </div>
{{--                        <div class="section-button">--}}
{{--                            <div class="btn-1">--}}
{{--                                <a href="#">Get Support On Call <i class="fal fa-headphones-alt"></i></a>--}}
{{--                            </div>--}}
{{--                            <div class="btn-2">--}}
{{--                                <a href="#">Get Direction <i class="rt-location-dot"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
            <p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3651.0452483624595!2d90.424043!3d23.781403!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3cc42b4e4b430164!2sReacThemes!5e0!3m2!1sen!2sbd!4v1656420500360!5m2!1sen!2sbd"
                    height="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </p>
        </div>
    </div>
    <!--contact-area end-->

@endsection
