@extends('Frontend.layouts.app')

@section('title', "Məhsul - " . $product->name)

@section('content')
    <main class="main-wrapper">
        <!-- Start Shop Area  -->
        <div class="axil-single-product-area axil-section-gap pb--0 bg-color-white">
            <div class="single-product-thumb mb--40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mb--40">
                            <div class="row">
                                <div class="col-lg-10 order-lg-2">
                                    <div class="single-product-thumbnail-wrap zoom-gallery">
                                        <div class="single-product-thumbnail product-large-thumbnail-3 axil-product">
                                            @foreach($product->image as $image)
                                                <div class="thumbnail">
                                                    <a href="{{ asset('storage/' . $image) }}" class="popup-zoom">
                                                        <img src="{{ asset('storage/' . $image) }}" alt="Product Image">
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="product-quick-view position-view">
                                            <a href="{{ asset('storage/' . $product->image[0]) }}" class="popup-zoom">
                                                <i class="far fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 order-lg-1">
                                    <div class="product-small-thumb-3 small-thumb-wrapper">
                                        @foreach($product->image as $image)
                                            <div class="small-thumb-img">
                                                <img src="{{ asset('storage/' . $image) }}" alt="thumb image">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mb--40">
                            <div class="single-product-content">
                                <div class="inner">
                                    <h2 class="product-title">{{ $product->name }}</h2>
                                    <span class="price-amount">{{ $product->price }} azn</span>
                                    <p class="description">
                                        {{ $product->description }}
                                    </p>
                                    <!-- Start Product Action Wrapper  -->
                                    @if(\Illuminate\Support\Facades\Auth::guard('customer')->check())
                                        <div class="product-action-wrapper d-flex-center">
                                            <!-- Start Quentity Action  -->
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                            <!-- End Quentity Action  -->

                                            <!-- Start Product Action  -->
                                            <ul class="product-action d-flex-center mb--0">
                                                <li class="add-to-cart"><a href="cart.html" class="axil-btn btn-bg-primary">Səbətə at</a></li>
                                            </ul>
                                            <!-- End Product Action  -->
                                        </div>
                                    @else
                                        Məhsulu satın almaq üçün <a href="{{ route("auth.login") }}"> Giriş et </a><br/>
                                        Hesabın yoxdur ? <a href="{{ route("auth.register") }}"> Qeyd ol </a>
                                    @endif
                                    <!-- End Product Action Wrapper  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .single-product-thumb -->
        </div>
        <!-- End Shop Area  -->
    </main>
@endsection
