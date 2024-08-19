@extends('Frontend.layouts.app')

@section('title', 'Daxil ol')

@section('content')

    <!--login-area start-->
    <div class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mr-10">
                    <div class="login-form">
                        <div class="section-title">
                            <h2>Daxil ol</h2>
                        </div>
                        <div class="card">
                            <div class="card-body">

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

                                <form method="POST" action="{{ route("auth.loginPost") }}">
                                    @csrf
                                    @method("POST")
                                    <div class="form">
                                        <input type="text" class="form-control" name="phone" placeholder="Telefon nömrəsi" required />
                                    </div>
                                    <div class="form">
                                        <input type="password" class="form-control" name="password" placeholder="Şifrə" required />
                                    </div>
                                    <div class="form">
                                        <input type="checkbox" name="remember" class="form-check-input"/>
                                        <label for="remember" class="form-label">Məni xatırla</label>
                                    </div>
                                    <div class="form">
                                        <button type="submit" name="submit" class="btn">Daxil ol</button>
                                    </div>
                                    <a class="forgot-password" href="#">Şifrəni unutdun ?</a><br/>
                                    <a class="forgot-password" href="{{ route("auth.register") }}">Hesabın yoxdur ? Qeyd ol</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--login-area end-->

@endsection
