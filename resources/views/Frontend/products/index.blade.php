@extends('Frontend.layouts.app')

@section('title', 'Məhsullar')

@section('content')
    <!--================= Shop Section Start Here =================-->
    <div class="rts-shop-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="shop-product-topbar">
                        <span class="items-onlist">
                            Göstərilir {{ ($allProducts->currentPage() - 1) * $allProducts->perPage() + 1 }}
                            - {{ min($allProducts->currentPage() * $allProducts->perPage(), $allProducts->total()) }}
                            dən {{ $allProducts->total() }} nəticə
                        </span>
                        <div class="filter-area">
                            <p class="select-area">
                                <select class="select">
                                    <option value="*">Göstər</option>
                                    <option value=".popular">Ucuzdan bahaya</option>
                                    <option value=".best-rate">Bahadan ucuza</option>
                                </select>
                            </p>
                        </div>
                    </div>
                    <div class="products-area products-area3">
                        <div class="row justify-content-center">

                            @forelse($allProducts as $product)
                                <div class="col-xl-4 col-md-4 col-sm-6">
                                    <div class="product-item product-item2 element-item1">
                                        <a class='product-image' href='{{ route("products.single", ["slug" => $product->slug]) }}'>
                                            <img src="{{ url('/') }}/storage/{{ $product->cover_image }}" alt="product-image">
                                        </a>
                                        <div class="bottom-content">
                                            <a class='product-name' href='{{ route("products.single", ["slug" => $product->slug]) }}'>{{ $product->name }}</a>
                                            <div class="action-wrap">
                                                <span class="product-price">{{ $product->price }} AZN</span>
                                                <a class='addto-cart' href='cart.html'>
                                                    <i class="fal fa-shopping-cart"></i>
                                                    Səbətə at
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                No Data !
                            @endforelse
                        </div>
                    </div>
                    <div class="product-pagination-area mt--20">
                        {{ $allProducts->links('Frontend.layouts.customPagination') }}
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="side-sticky">
                        <div class="shop-side-action">
                            <div class="action-item">
                                <div class="action-top">
                                    <span class="action-title">Kateqoriyalar</span>
                                </div>
                                @forelse($allCategories as $category)
                                    <div class="category-item">
                                        <div class="category-item-inner">
                                            <div class="category-title-area">
                                                <span class="point"></span>
                                                <span class="category-title">
                                                <a href="{{ route("category.single", ["slug" => $category->slug]) }}">
                                                    {{ $category->name }}
                                                </a>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    No Data !
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Shop Section Section End Here =================-->
@endsection
