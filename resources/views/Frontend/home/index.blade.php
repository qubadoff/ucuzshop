@extends('Frontend.layouts.app')

@section('title', 'Ana səhifə')

@section('content')
    <!--================= Recent Products Section Start Here =================-->
    <div class="rts-recent_products-section section-gap">
        <div class="container">
            <div class="recent-products-header section-header section-header3">
                <span class="section-title-2 mb--5">Ən son əlavə edilənlər</span>
                <div class="section-line mb-0"><img src="{{ asset('/') }}assets/images/items/curlyline.png" alt="line"></div>
            </div>
            <div class="products-area products-area3">
                <div class="row justify-content-center">
                    @forelse(latestProducts() as $product)
                        <div class="col-lg-15 col-md-4 col-sm-6">
                            <div class="product-item product-item2 element-item3">
                                <a class='product-image' href="{{ route("products.single", ['slug' => $product->slug]) }}">
                                    <img src="{{ url('/') }}/storage/{{ $product->cover_image }}" alt="product-image">
                                </a>
                                <div class="bottom-content">
                                    <span class="product-catagory">{{ $product->category->name }}</span>
                                    <a class='product-name' href='{{ route("products.single", ['slug' => $product->slug]) }}'>{{ $product->name }}</a>
                                    <div class="action-wrap">
                                        <span class="product-price">{{ $product->price }} AZN</span>
                                        <a class='addto-cart' href='#'><i class="fal fa-shopping-cart"></i> Səbətə at</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        No data !
                    @endforelse
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a class='all-products-link' href='{{ route("products.all") }}'>Bütün məhsullar <i
                        class="fal fa-long-arrow-right ml--10"></i></a>
            </div>
        </div>
    </div>
@endsection
