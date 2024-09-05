<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Qeydiyyat</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}assets/images/favicon.png">

    <!-- CSS
    ============================================ -->

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


<body>
<div class="axil-signin-area">

    <!-- Start Header -->
    <div class="signin-header">
        <div class="row align-items-center">
            <div class="col-sm-4">
                <a href="{{ route("index") }}" class="site-logo"><img src="{{ url('/') }}/storage/{{ siteSetting()->logo }}" alt="logo"></a>
            </div>
            <div class="col-sm-8">
                <div class="singin-header-btn">
                    <p>Artıq hesabın var ?</p>
                    <a href="{{ route("auth.login") }}" class="axil-btn btn-bg-secondary sign-up-btn">Daxil ol</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <div class="axil-signin-banner bg_image bg_image--9">
                <h3 class="title">Elə indi qeydiyyatdan keç. Sistemin sizə yaratdığı bir çox xidmətlərdən faydalan !</h3>
            </div>
        </div>
        <div class="col-lg-6 offset-xl-2">
            <div class="axil-signin-form-wrap">
                <div class="axil-signin-form">
                    <h3 class="title">Qeydiyyat</h3>
                    <p class="b2 mb--55">Məlumatlarınızı daxil edin</p>

                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                \Illuminate\Support\Facades\Session::forget('success');
                            @endphp
                        </div>
                    @endif
                    @if($errors->any())
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @endif

                    <br/>

                    <form method="POST" action="{{ route("auth.registerPost") }}" class="singin-form">
                        @csrf
                        @method("POST")
                        <div class="form-group">
                            <label>Ad və Soyad</label>
                            <input type="text" class="form-control" name="name" value="Əli Priyev" required>
                        </div>
                        <div class="form-group">
                            <label>Telefon nömrəsi</label>
                            <input type="text" class="form-control" name="phone" value="+994508683623" required>
                        </div>
                        <div class="form-group">
                            <label>Şifrə</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group">
                            <label>Təkrar şifrə</label>
                            <input type="password" class="form-control" name="password_confirmation" required>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between">
                            <button type="submit" name="submit" class="axil-btn btn-bg-primary submit-btn">Qeyd ol</button>
                        </div>
                    </form>
                </div>
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
