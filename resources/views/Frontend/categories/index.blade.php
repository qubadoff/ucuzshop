@extends('Frontend.layouts.app')

@section('title', "Kateqoriya - " . $category->name)

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
                                <li class="axil-breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                            </ul>
                            <h1 class="title">{{ $category->name }} kateqoriyası</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->
        <!-- Start Shop Area  -->
        <div class="axil-shop-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="axil-shop-top">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="category-select">
                                        <!-- Start Single Select  -->
                                        <select class="single-select">
                                            <option>Qiymət aralığı</option>
                                            <option>0 - 100</option>
                                            <option>100 - 500</option>
                                            <option>500 - 1000</option>
                                            <option>1000 - 1500</option>
                                        </select>
                                        <!-- End Single Select  -->

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="category-select mt_md--10 mt_sm--10 justify-content-lg-end">
                                        <!-- Start Single Select  -->
                                        <select class="single-select">
                                            <option>Sıralama</option>
                                            <option>Sort by Name</option>
                                            <option>Sort by Price</option>
                                            <option>Sort by Viewed</option>
                                        </select>
                                        <!-- End Single Select  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row--15">
                    @forelse($products as $product)
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="axil-product product-style-one has-color-pick mt--40">
                                <div class="thumbnail">
                                    <a href="{{ route("products.single", $product->slug ?? "") }}">
                                        <img src="{{ url('/') }}/storage/{{ $product->cover_image ?? "" }}" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="select-option"><a href="{{ route("products.single", $product->slug ?? "") }}">Ətraflı</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="{{ route("products.single", $product->slug ?? "") }}">{{ $product->name }}</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">{{ $product->price }} azn</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        No data !
                    @endforelse
                </div>
                <div class="text-center pt--30">
                    {{ $products->links('pagination::bootstrap-4') }}
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Shop Area  -->
    </main>
@endsection
