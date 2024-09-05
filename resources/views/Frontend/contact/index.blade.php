@extends('Frontend.layouts.app')


@section('title', 'Əlaqə')


@section('content')
    <main class="main-wrapper">
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item"><a href="{{ route("index") }}">Ana səhifə</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">Əlaqə</li>
                            </ul>
                            <h1 class="title">Bizimlə Əlaqə</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->

        <!-- Start Contact Area  -->
        <div class="axil-contact-page-area axil-section-gap">
            <div class="container">
                <div class="axil-contact-page">
                    <div class="row row--30">
                        <div class="col-lg-8">
                            <div class="contact-form">
                                <h3 class="title mb--10">Bizə mesaj göndər</h3>
                                <p>Əməkdaşlıq və digər mövzular üçün bizə yaza bilərsiniz.</p>
                                <form id="contact-form" method="POST" action="#" class="axil-contact-form">
                                    <div class="row row--10">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="contact-name">Ad və Soyad <span>*</span></label>
                                                <input type="text" name="contact-name" id="contact-name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="contact-phone">Telefon nömrəsi <span>*</span></label>
                                                <input type="text" name="contact-phone" id="contact-phone">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="contact-message">Mesajınız</label>
                                                <textarea name="contact-message" id="contact-message" cols="1" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb--0">
                                                <button name="submit" type="submit" id="submit" class="axil-btn btn-bg-primary">Göndər</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-location mb--40">
                                <h4 class="title mb--20">Mağazamız</h4>
                                <span class="address mb--20">{{ siteSetting()->location }}</span>
                                <span class="phone">Telefon: <a href="tel:{{ siteSetting()->phone }}">{{ siteSetting()->phone }}</a></span>
                                <span class="email">Email: <a href="mailto:{{ siteSetting()->email }}">{{ siteSetting()->email }}</a></span>
                            </div>
                            <div class="opening-hour">
                                <h4 class="title mb--20">İş saatları:</h4>
                                <p>Saat : 09:00 - 21:00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Google Map Area  -->
                <div class="axil-google-map-wrap axil-section-gap pb--0">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3822.554120127887!2d49.74177247657191!3d40.45520685329583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40308577c2b81a73%3A0x6efd2ec00809fd77!2sUcuz%20Shop%20Magazasi!5e1!3m2!1sen!2saz!4v1725526696055!5m2!1sen!2saz" width="1080" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <!-- End Google Map Area  -->
            </div>
        </div>
        <!-- End Contact Area  -->
    </main>
@endsection
