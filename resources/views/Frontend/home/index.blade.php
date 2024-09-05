@extends('Frontend.layouts.app')


@section('title', 'Ana səhifə')

@section('content')
    <main class="main-wrapper">
        <div class="axil-product-area bg-color-white axil-section-gap pb--0">
            <div class="container">
                <div class="product-area pb--20">
                    <div class="axil-isotope-wrapper">
                        <div class="product-isotope-heading">
                            <div class="section-title-wrapper">
                                <h2 class="title">Ən son əlavə olunan məhsullar</h2>
                            </div>
                        </div>
                        <div class="row row--15 isotope-list">
                            @forelse(latestProducts() as $product)
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30 product music">
                                    <div class="axil-product product-style-one">
                                        <div class="thumbnail">
                                            <a href="{{ route("products.single", $product->slug ?? "") }}">
                                                <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="{{ url('/') }}/storage/{{ $product->cover_image }}" alt="{{ $product->cover_image }}">
                                            </a>
                                            <div class="product-hover-action">
                                                <ul class="cart-action">
                                                    <li class="select-option"><a href="{{ route("products.single", $product->slug ?? "") }}">Ətraflı</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">
                                                <h5 class="title"><a href="{{ route("products.single", $product->slug ?? "") }}">{{ $product->name }} <span class="verified-icon"><i class="fas fa-badge-check"></i></span></a></h5>
                                                <div class="product-price-variant">
                                                    <span class="price current-price">{{ $product->price }} azn</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                No Data !
                            @endforelse
                        </div>

                        {{ latestProducts()->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
