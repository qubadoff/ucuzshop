@extends('Frontend.layouts.app')

@section('title', 'Səbət')

@section('content')
    <main class="main-wrapper">

        <!-- Start Cart Area  -->
        <div class="axil-product-cart-area axil-section-gap">
            <div class="container">
                <div class="axil-product-cart-wrap">
                    <div class="table-responsive">
                        <table class="table axil-product-table axil-cart-table mb--40">
                            <thead>
                            <tr>
                                <th scope="col" class="product-remove"></th>
                                <th scope="col" class="product-thumbnail">Məhsul</th>
                                <th scope="col" class="product-title"></th>
                                <th scope="col" class="product-price">Qiymət</th>
                                <th scope="col" class="product-quantity">Say</th>
                                <th scope="col" class="product-subtotal">Ümumi məbləğ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($products as $product)
                                <tr>
                                    <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fal fa-times"></i></a></td>
                                    <td class="product-thumbnail"><a href="{{ route("products.single", ['slug' => $product->product->slug]) }}"><img src="{{ url('/') }}/storage/{{ $product->product->cover_image }}" alt="{{ $product->product->name }}"></a></td>
                                    <td class="product-title"><a href="{{ route("products.single", ['slug' => $product->product->slug]) }}">{{ $product->product->name }}</a></td>
                                    <td class="product-price" data-title="Price">{{ $product->product->price }}<span class="currency-symbol"> ₼</span></td>
                                    <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" value="{{ $product->quantity }}" data-product-id="{{ $product->product->id }}" min="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal">{{ $product->quantity * $product->price }}<span class="currency-symbol"> ₼</span></td>
                                </tr>
                            @empty
                                Səbət boşdur !
                            @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-xl-5 col-lg-7 offset-xl-7 offset-lg-5">
                            <div class="axil-order-summery mt--80">
                                <h5 class="title mb--20">Order Summary</h5>
                                <div class="summery-table-wrap">
                                    <table class="table summery-table mb--30">
                                        <tbody>
                                        <tr class="order-subtotal">
                                            <td>Subtotal</td>
                                            <td>$117.00</td>
                                        </tr>
                                        <tr class="order-shipping">
                                            <td>Shipping</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" id="radio1" name="shipping" checked>
                                                    <label for="radio1">Free Shippping</label>
                                                </div>
                                                <div class="input-group">
                                                    <input type="radio" id="radio2" name="shipping">
                                                    <label for="radio2">Local: $35.00</label>
                                                </div>
                                                <div class="input-group">
                                                    <input type="radio" id="radio3" name="shipping">
                                                    <label for="radio3">Flat rate: $12.00</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="order-tax">
                                            <td>State Tax</td>
                                            <td>$8.00</td>
                                        </tr>
                                        <tr class="order-total">
                                            <td>Total</td>
                                            <td class="order-total-amount">$125.00</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="checkout.html" class="axil-btn btn-bg-primary checkout-btn">Process to Checkout</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Cart Area  -->
    </main>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            const quantityInputs = document.querySelectorAll('.quantity-input');

            quantityInputs.forEach(input => {
                const productId = input.getAttribute('data-product-id');

                // Butonları doğru şekilde seçin
                const plusButton = input.closest('.pro-qty').querySelector('.plus');
                const minusButton = input.closest('.pro-qty').querySelector('.minus');

                // Artı butonuna tıklama olayı
                plusButton.addEventListener('click', function () {
                    input.value = parseInt(input.value) + 1;
                    updateQuantity(productId, input.value);
                });

                // Eksi butonuna tıklama olayı
                minusButton.addEventListener('click', function () {
                    if (input.value > 1) {
                        input.value = parseInt(input.value) - 1;
                        updateQuantity(productId, input.value);
                    }
                });
            });

            function updateQuantity(productId, quantity) {
                fetch('{{ route('cart.update') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        product_id: productId,
                        quantity: quantity
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            console.log('Quantity updated successfully');
                        } else {
                            console.error('Failed to update quantity:', data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        });
    </script>

@endsection
