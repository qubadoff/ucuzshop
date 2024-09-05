@extends('Frontend.layouts.app')

@section('title', $page->name)

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
                                <li class="axil-breadcrumb-item active" aria-current="page">{{ $page->name }}</li>
                            </ul>
                            <h1 class="title">{{ $page->name }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->

        <!-- Start Privacy Policy Area  -->
        <div class="axil-privacy-area axil-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="axil-privacy-policy">
                            {!! $page->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Privacy Policy Area  -->
    </main>
@endsection
