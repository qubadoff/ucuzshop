@extends('Frontend.layouts.app')

@section('title', $product->name)

@section('content')
    <!--================= Product-details Section Start Here =================-->
    <div class="rts-product-details-section section-gap">
        <div class="container">
            <div class="details-product-area mb--70">
                <div class="product-thumb-area">
                    <div class="cursor"></div>
                    <div class="thumb-wrapper one filterd-items figure">
                        <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url({{ url('/storage/' . $product->cover_image) }})">
                            <img src="{{ url('/') }}/storage/{{ $product->cover_image }}" alt="product-thumb">
                        </div>
                    </div>
                    @foreach($product->image as $index => $image)
                        <div class="thumb-wrapper {{ $index + 2 }} filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url({{ url('/storage/' . $image) }})">
                                <img src="{{ url('/') }}/storage/{{ $image }}" alt="product-thumb">
                            </div>
                        </div>
                    @endforeach
                    <div class="product-thumb-filter-group">
                        <div class="thumb-filter filter-btn active" data-show=".one">
                            <img src="{{ url('/') }}/storage/{{ $product->cover_image }}" alt="product-thumb-filter">
                        </div>
                        @foreach($product->image as $index => $image)
                            <div class="thumb-filter filter-btn" data-show=".{{ $index + 2 }}">
                                <img src="{{ url('/') }}/storage/{{ $image }}" alt="product-thumb-filter">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="contents">
                    <div class="product-status">
                        <span class="product-catagory">{{ $product->category->name }}</span>
                    </div>
                    <h2 class="product-title">{{ $product->name }}</h2>
                    <span class="product-price">{{ $product->price }} AZN </span>
                    <p>
                        {{ $product->description }}
                    </p>
                    <div class="product-bottom-action">
                        <a class='addto-cart-btn action-item' href='cart.html'><i class="rt-basket-shopping"></i> Səbətə at
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Product-details Section End Here =================-->
@endsection
