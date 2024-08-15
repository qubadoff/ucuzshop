@extends('Frontend.layouts.app')

@section('title', 'Ana səhifə')

@section('content')

    <!--================= Banner Section Start Here =================-->
    <div class="banner banner-3">
        <div class="swiper bannerSlide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-single bg-image bg-image-3">
                        <div class="container">
                            <div class="single-inner">
                                <div class="contents">
                                    <span class="banner-pretitle-box">Hot Deal In This Week</span>
                                    <h1 class="banner-heading mb--30">Elegance <br>
                                        Hand Craft</h1>
                                    <div class="banner-action">
                                        <a class='banner-btn banner-btn2' href='product-details.html'><i
                                                class="rt-cart-shopping"></i>Shop
                                            Now</a>
                                        <div class="banner-review">
                                            <div class="review">
                                                <div class="star"><i class="fas fa-star"></i></div>
                                                <div class="star"><i class="fas fa-star"></i></div>
                                                <div class="star"><i class="fas fa-star"></i></div>
                                                <div class="star"><i class="fas fa-star"></i></div>
                                                <div class="star"><i class="fal fa-star"></i></div>
                                            </div>
                                            <span class="review-text"><span class="value">100+</span> Review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-product-thumb"><img
                                        src="assets/images/products/banner-product.jpg" alt="banner-product"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-single bg-image bg-image-3">
                        <div class="container">
                            <div class="single-inner">
                                <div class="contents">
                                    <span class="banner-pretitle-box">Hot Deal In This Week</span>
                                    <h1 class="banner-heading mb--30">Modern <br>
                                        Hand Craft</h1>
                                    <div class="banner-action">
                                        <a class="banner-btn banner-btn2" href="#0"><i
                                                class="rt-cart-shopping"></i>Shop
                                            Now</a>
                                        <div class="banner-review">
                                            <div class="review">
                                                <div class="star"><i class="fas fa-star"></i></div>
                                                <div class="star"><i class="fas fa-star"></i></div>
                                                <div class="star"><i class="fas fa-star"></i></div>
                                                <div class="star"><i class="fas fa-star"></i></div>
                                                <div class="star"><i class="fal fa-star"></i></div>
                                            </div>
                                            <span class="review-text"><span class="value">100+</span> Review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-product-thumb"><img
                                        src="assets/images/products/banner-product2.png" alt="banner-product"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-navigation">
                <div class="swiper-button-prev slider-btn prev"><i class="fal fa-long-arrow-up"></i></div>
                <div class="swiper-button-next slider-btn next"><i class="fal fa-long-arrow-down"></i>
                </div>
            </div>
        </div>
    </div>
    <!--================= Banner Section End Here =================-->

    </header>
    <!--================= Header Section End Here =================-->



    <!--================= Box Catagory Section Start Here =================-->
    <div class="rts-box-catagory-section">
        <div class="box-catagory-inner">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="catagory-box box1">
                        <a class='picture' href='category.html'><img src="assets/images/post/cata1.png"
                                                                     alt="box-picture"></a>
                        <a class='view-collection-btn' href='category.html'>View Collection</a>
                        <div class="contents">
                            <div class="icon"><img src="assets/images/icons/bell.png" alt=""></div>
                            <h2 class="box-heading">Stationary &
                                Gift Card</h2>
                        </div>
                        <span class="item-update">100 New Added</span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="catagory-box box2">
                        <a class='picture' href='category.html'><img src="assets/images/post/cata2.png"
                                                                     alt="box-picture"></a>
                        <a class='view-collection-btn' href='category.html'>View Collection</a>
                        <div class="contents">
                            <div class="icon"><img src="assets/images/icons/pins.png" alt=""></div>
                            <h2 class="box-heading">Handmade
                                Teapots & Mugs</h2>
                        </div>
                        <span class="item-update">100 New Added</span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="catagory-box box3">
                        <a class='picture' href='category.html'><img src="assets/images/post/cata3.png"
                                                                     alt="box-picture"></a>
                        <a class='view-collection-btn' href='category.html'>View Collection</a>
                        <div class="contents">
                            <div class="icon"><img src="assets/images/icons/tape.png" alt=""></div>
                            <h2 class="box-heading">Furniture Decor
                                Objects</h2>
                        </div>
                        <span class="item-update">100 New Added</span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="catagory-box box4 last-child">
                        <a class='picture' href='category.html'><img src="assets/images/post/cata4.png"
                                                                     alt="box-picture"></a>
                        <a class='view-collection-btn' href='category.html'>View Collection</a>
                        <div class="contents">
                            <div class="icon"><img src="assets/images/icons/tub.png" alt=""></div>
                            <h2 class="box-heading">Vases & <br>
                                Plant Pots</h2>
                        </div>
                        <span class="item-update">100 New Added</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Box Catagory Section End Here =================-->



    <!--================= Recent Products Section Start Here =================-->
    <div class="rts-recent_products-section section-gap">
        <div class="container">
            <div class="recent-products-header section-header section-header3">
                <span class="section-title-2 mb--5">Ən son əlavə edilənlər</span>
                <div class="section-line mb-0"><img src="assets/images/items/curlyline.png" alt="line"></div>
            </div>
            <div class="products-area products-area3">
                <div class="row justify-content-center">
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item3">
                            <a class='product-image' href='product-details.html'>
                                <img src="assets/images/products/home3/1.jpg" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a class='product-name' href='product-details.html'>Minimalist Beard Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00</span>
                                    <a class='addto-cart' href='cart.html'><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a class='product-action' href='wishlist.html'><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item2">
                            <a class='product-image image-slider-variations image-slider-variations3' href='product-details.html'>
                                <div class="swiper productSlide">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image-vari1 image-vari"><img
                                                    src="assets/images/products/home3/2.jpg" alt="product-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-vari2 image-vari"><img
                                                    src="assets/images/products/home3/7.jpg" alt="product-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-buttons">
                                    <div class="button-prev slider-btn"><i class="fal fa-long-arrow-left"></i></div>
                                    <div class="button-next slider-btn"><i class="fal fa-long-arrow-right"></i></div>
                                </div>
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a class='product-name' href='product-details.html'>Wooden Handicraft</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00 <span class="old-price">$43.00</span></span>
                                    <a class='addto-cart' href='cart.html'><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-features">
                                <div class="new-tag product-tag">NEW</div>
                                <div class="discount-tag product-tag">-35%</div>
                            </div>
                            <div class="product-actions">
                                <a class='product-action' href='wishlist.html'><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item3 popular">
                            <a class='product-image image-gallery-variations image-gallery-variations3' href='product-details.html'>
                                <div class="swiper productGallerySlide">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image-vari1 image-vari"><img
                                                    src="assets/images/products/home3/3.jpg" alt="product-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-vari2 image-vari"><img
                                                    src="assets/images/products/home3/9.jpg" alt="product-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="thumbs-area">
                                <div class="swiper productGallerySlideThumb">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image-vari1 image-vari"><img
                                                    src="assets/images/products/home3/3.jpg" alt="product-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-vari2 image-vari"><img
                                                    src="assets/images/products/home3/9.jpg" alt="product-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a class='product-name' href='product-details.html'>Minimalist Beard Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00</span>
                                    <a class='addto-cart' href='cart.html'><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a class='product-action' href='wishlist.html'><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a class='product-image' href='product-details.html'>
                                <img src="assets/images/products/home3/4.jpg" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a class='product-name' href='product-details.html'>Modern Handicraft</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00</span>
                                    <a class='addto-cart' href='cart.html'><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a class='product-action' href='wishlist.html'><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a class='product-image' href='product-details.html'>
                                <img src="assets/images/products/home3/5.jpg" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <a class='product-name' href='product-details.html'>Modern Glasses Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00</span>
                                    <a class='addto-cart' href='cart.html'><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-features">
                                <div class="new-tag product-tag">NEW</div>
                                <div class="hot-tag product-tag">HOT</div>
                            </div>
                            <div class="product-actions">
                                <a class='product-action' href='wishlist.html'><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a class='product-image' href='product-details.html'>
                                <img src="assets/images/products/home3/6.jpg" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <a class='product-name' href='product-details.html'>Adapt Camo Seamless Shorts</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00</span>
                                    <a class='addto-cart' href='cart.html'><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a class='product-action' href='wishlist.html'><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a class='product-image' href='product-details.html'>
                                <img src="assets/images/products/home3/7.jpg" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a class='product-name' href='product-details.html'>Minimalist Beard Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00</span>
                                    <a class='addto-cart' href='cart.html'><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a class='product-action' href='wishlist.html'><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a class='product-image' href='product-details.html'>
                                <img src="assets/images/products/home3/8.jpg" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <a class='product-name' href='product-details.html'>Adapt Camo Seamless Shorts</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00 <span class="old-price">$43.00</span></span>
                                    <a class='addto-cart' href='cart.html'><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-features">
                                <div class="hot-tag product-tag">HOT</div>
                                <div class="discount-tag product-tag">-35%</div>
                            </div>
                            <div class="product-actions">
                                <a class='product-action' href='wishlist.html'><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a class='product-image' href='product-details.html'>
                                <img src="assets/images/products/home3/9.jpg" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a class='product-name' href='product-details.html'>Minimalist Beard Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00</span>
                                    <a class='addto-cart' href='cart.html'><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a class='product-action' href='wishlist.html'><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a class='product-image' href='product-details.html'>
                                <img src="assets/images/products/home3/10.jpg" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a class='product-name' href='product-details.html'>Minimalist Beard Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">$31.00</span>
                                    <a class='addto-cart' href='cart.html'><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a class='product-action' href='wishlist.html'><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a class='all-products-link' href='shop.html'>Bütün məhsullar <i
                        class="fal fa-long-arrow-right ml--10"></i></a>
            </div>
        </div>
    </div>
    <!--================= Recent Products Section End Here =================-->

@endsection
