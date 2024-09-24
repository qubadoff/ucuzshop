@php
    use Illuminate\Support\Facades\Auth;
@endphp
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
                                    @if(Auth::guard('customer')->check())
                                        <div class="product-action-wrapper d-flex-center">
                                            <!-- Start Quentity Action  -->
                                            <div class="pro-qty">
                                                <input type="text" id="quantity" value="1">
                                            </div>
                                            <!-- End Quentity Action  -->

                                            <!-- Start Product Action  -->
                                            <ul class="product-action d-flex-center mb--0">
                                                <li class="add-to-cart">
                                                    <button class="axil-btn btn-bg-primary" id="add-to-cart-btn">Səbətə
                                                        at
                                                    </button>
                                                </li>
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

    <!-- Popup -->
    <div id="cart-popup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <p>Ürün sepete başarıyla eklendi!</p>
        </div>
    </div>

    <style>
        /* Popup arka plan */
        .popup {
            display: block; /* Başlangıçta görünmez */
            position: fixed;
            z-index: 9999; /* Üst katmanda göster */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Yarı şeffaf arka plan */
        }

        /* Popup içeriği */
        .popup-content {
            position: relative;
            margin: 15% auto;
            padding: 20px;
            width: 300px;
            background-color: white;
            border-radius: 10px;
            text-align: center;
        }

        /* Kapatma butonu */
        .close {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
        }

    </style>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            const addToCartBtn = document.getElementById('add-to-cart-btn');
            const quantityInput = document.getElementById('quantity');
            const popup = document.getElementById('cart-popup');
            const closePopup = document.querySelector('.close');

            // Sepete ekle butonuna tıklama işlemi
            addToCartBtn.addEventListener('click', function () {
                const productId = {{ $product->id }};  // Product ID dinamik olmalı, bu örnekte sabit
                const quantity = quantityInput.value;

                // AJAX ile sepete ekleme isteği
                fetch('{{ route('cart.add') }}', {  // Route kullanarak URL'yi dinamik yapın
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'  // CSRF token dinamik olarak alınır
                    },
                    body: JSON.stringify({
                        product_id: productId,
                        quantity: quantity
                    })
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error("Network response was not ok");
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            // Popup aç
                            popup.style.display = 'block';
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);  // Hata durumunda mesajı yakala
                    });
            });

            // Popup kapatma işlemi
            closePopup.addEventListener('click', function () {
                popup.style.display = 'none';
            });

            window.onclick = function (event) {
                if (event.target === popup) {
                    popup.style.display = 'none';
                }
            };
        });

    </script>

@endsection
