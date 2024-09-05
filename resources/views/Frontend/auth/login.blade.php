<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Giriş</title>
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
                    <p>Hesabın yoxdur ?</p>
                    <a href="{{ route("auth.register") }}" class="axil-btn btn-bg-secondary sign-up-btn">Qeyd ol</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <div class="axil-signin-banner bg_image bg_image--9">
                <h3 class="title">Profilinə daxil olaraq xidmətlərimizdən yararlan !</h3>
            </div>
        </div>
        <div class="col-lg-6 offset-xl-2">
            <div class="axil-signin-form-wrap">
                <div class="axil-signin-form">
                    <h3 class="title">Giriş</h3>
                    <p class="b2 mb--55">Məlumatlarınızı daxil edin</p>

                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                \Illuminate\Support\Facades\Session::forget('success');
                            @endphp
                        </div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                            @php
                                \Illuminate\Support\Facades\Session::forget('error');
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

                    <form method="POST" action="{{ route("auth.loginPost") }}" class="singin-form">
                        @csrf
                        @method("POST")
                        <div class="form-group">
                            <label>Telefon nömrəsi</label>
                            <input type="text" class="form-control" name="phone" value="+994508683623" required>
                        </div>
                        <div class="form-group">
                            <label>Şifrə</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between">
                            <button type="submit" name="submit" class="axil-btn btn-bg-primary submit-btn">Daxil ol</button>
                            <a href="{{ route("auth.login") }}" class="forgot-btn">Şifrəni unutdun ?</a>
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
