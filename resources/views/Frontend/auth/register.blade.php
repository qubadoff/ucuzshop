@extends('Frontend.layouts.app')

@section('title', 'Qeyd ol')

@section('content')

    <!--login-area start-->
    <div class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mr-10">
                    <div class="login-form">
                        <div class="section-title">
                            <h2>Qeyd ol</h2>
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

                                <form method="POST" action="{{ route("auth.registerPost") }}">
                                    @csrf
                                    @method("POST")
                                    <div class="form">
                                        <input type="text" name="name" class="form-control"  placeholder="Ad və soyad" required />
                                    </div>
                                    <div class="form">
                                        <input type="text" name="phone" class="form-control" placeholder="Telefon nömrəsi" required />
                                    </div>
                                    <div class="form">
                                        <input type="password" name="password" class="form-control" placeholder="Şifrə" required />
                                    </div>
                                    <div class="form">
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Təkrar şifrə" required />
                                    </div>
                                    <div class="form">
                                        <button type="submit" name="submit" class="btn">Qeyd ol</button>
                                    </div>
                                    <a class="forgot-password" href="{{ route("auth.login") }}">Hesabın var ? Daxil ol</a>
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
