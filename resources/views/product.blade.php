@extends('layouts.frontend')
@section('content')

    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider-area pt-100">
        <div class="container-fluid position-relative">
            <div class="slider-active">
                <div class="single-slider">
                    <div class="slider-bg">
                        <div class="row no-gutters align-items-center ">
                            <div class="col-lg-4 col-md-5">
                                <div class="slider-product-image d-none d-md-block">
                                    <img src="assets/images/slider/1.jpg" alt="Slider">
                                    <div class="slider-discount-tag">
                                        <p>-50% <br> OFF</p>
                                    </div>
                                </div> <!-- slider product image -->
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                    <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Sofa</span> and <span>Armchairs</span></h1>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">One day however a small line of blind text by the name of Lorem Ipsum <br> decided to leave for the far World of Grammar.</p>
                                    <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1.5s">Explore More <i class="lni-chevron-right"></i></a>
                                </div> <!-- slider product content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- single slider -->

                <div class="single-slider">
                        <div class="slider-bg">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-4 col-md-5">
                                    <div class="slider-product-image d-none d-md-block">
                                        <img src="assets/images/slider/3.jpg" alt="Slider">
                                        <div class="slider-discount-tag">
                                            <p>-20% <br> OFF</p>
                                        </div>
                                    </div> <!-- slider product image -->
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="slider-product-content">
                                        <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Winter</span> Sale! is <span>Here</span></h1>
                                        <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">One day however a small line of blind text by the name of Lorem Ipsum <br> decided to leave for the far World of Grammar.</p>
                                        <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1.5s">Explore More <i class="lni-chevron-right"></i></a>
                                    </div> <!-- slider product content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                </div> <!-- single slider -->

                <div class="single-slider">
                        <div class="slider-bg">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-4 col-md-5">
                                    <div class="slider-product-image d-none d-md-block">
                                        <img src="assets/images/slider/2.jpg" alt="Slider">
                                        <div class="slider-discount-tag">
                                            <p>FREE<br> QUOTE</p>
                                        </div>
                                    </div> <!-- slider product image -->
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="slider-product-content">
                                        <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Get</span> a Free <span>Quote</span></h1>
                                        <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">One day however a small line of blind text by the name of Lorem Ipsum <br> decided to leave for the far World of Grammar.</p>
                                        <a class="main-btn" href="#contact" data-animation="fadeInUp" data-delay="1.5s">Contact Us <i class="lni-chevron-right"></i></a>
                                    </div> <!-- slider product content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                </div> <!-- single slider -->
            </div> <!-- slider active -->
            <div class="slider-social">
                <div class="row justify-content-end">
                    <div class="col-lg-7 col-md-6">
                        <ul class="social text-right">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- container fluid -->
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== DISCOUNT PRODUCT PART START ======-->

    <section id="discount-product" class="discount-product pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-discount-product mt-30">
                        <div class="product-image">
                            <img src="assets/images/discount-product/product-1.jpg" alt="Product">
                        </div> <!-- product image -->
                        <div class="product-content">
                            <h4 class="content-title mb-15">High-quality furnitures <br> For your home</h4>
                            <a href="#">View Collection <i class="lni-chevron-right"></i></a>
                        </div> <!-- product content -->
                    </div> <!-- single discount product -->
                </div>
                <div class="col-lg-6">
                    <div class="single-discount-product mt-30">
                        <div class="product-image">
                            <img src="assets/images/discount-product/product-2.jpg" alt="Product">
                        </div> <!-- product image -->
                        <div class="product-content">
                            <h4 class="content-title mb-15">Hot Offer <br> Discount up to 80%</h4>
                            <a href="#">View Collection <i class="lni-chevron-right"></i></a>
                        </div> <!-- product content -->
                    </div> <!-- single discount product -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== DISCOUNT PRODUCT PART ENDS ======-->

    <!--====== PRODUCT PART START ======-->

    <section id="product" class="product-area pt-100 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="collection-menu text-center mt-30">
                        <h4 class="collection-tilte">OUR COLLECTION</h4>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="active" id="v-pills-furniture-tab" data-toggle="pill" href="#v-pills-furniture" role="tab" aria-controls="v-pills-furniture" aria-selected="true">Furniture</a>

                            <a id="v-pills-decorative-tab" data-toggle="pill" href="#v-pills-decorative" role="tab" aria-controls="v-pills-decorative" aria-selected="false">Decorative</a>

                            <a id="v-pills-lighting-tab" data-toggle="pill" href="#v-pills-lighting" role="tab" aria-controls="v-pills-lighting" aria-selected="false">Lighting</a>

                            <a id="v-pills-outdoor-tab" data-toggle="pill" href="#v-pills-outdoor" role="tab" aria-controls="v-pills-outdoor" aria-selected="false">Outdoor</a>

                            <a id="v-pills-storage-tab" data-toggle="pill" href="#v-pills-storage" role="tab" aria-controls="v-pills-storage" aria-selected="false">Storage</a>
                        </div> <!-- nav -->
                    </div> <!-- collection menu -->
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-furniture" role="tabpanel" aria-labelledby="v-pills-furniture-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">

                                    @if(isset($products))
                                        @foreach($products as $product)
                                        <div class="col-md-4">
                                            <div class="single-product-items">
                                                <div class="product-item-image">
                                                    <a href="#">
                                                        <img src="{{$product->image_name}}" alt="Product" height="320px">
                                                    </a>
                                                    <div class="product-discount-tag">
                                                        <p>-$50</p>
                                                    </div>
                                                </div>
                                                <div class="product-item-content text-center mt-30">
                                                    <h5 class="product-title"><a href="#">{{$product->name}}</a></h5>
                                                    <ul class="rating">
                                                        <li><i class="lni-star-filled"></i></li>
                                                        <li><i class="lni-star-filled"></i></li>
                                                        <li><i class="lni-star-filled"></i></li>
                                                        <li><i class="lni-star-filled"></i></li>
                                                    </ul>
                                                    <span class="regular-price">${{$product->price}}</span>
                                                    <span class="discount-price">${{$product->sale_price}}</span>
                                                    <add-to-cart-button product-id="{{$product->id}}"
                                                        user-id="{{auth()->user()->id ?? 0}}"
                                                    />
                                                </div>
                                            </div> <!-- single product items -->
                                        </div>
                                        @endforeach
                                    @endif

                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->

                        <div class="tab-pane fade" id="v-pills-decorative" role="tabpanel" aria-labelledby="v-pills-decorative-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-1.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-3.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-1.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->

                        <div class="tab-pane fade" id="v-pills-lighting" role="tabpanel" aria-labelledby="v-pills-lighting-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-1.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-3.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-1.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->

                        <div class="tab-pane fade" id="v-pills-outdoor" role="tabpanel" aria-labelledby="v-pills-outdoor-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-1.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-3.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-1.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->

                        <div class="tab-pane fade" id="v-pills-storage" role="tabpanel" aria-labelledby="v-pills-storage-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-1.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-3.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-1.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->
                    </div> <!-- tab content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRODUCT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="service" class="services-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-30">
                        <h5 class="mb-15">Our Story</h5>
                        <h3 class="title mb-15">Build Your Sweet Home</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-left mt-45">
                        <div class="services">
                            <img src="assets/images/services/services.jpg" alt="">
                            <a href="#" class="main-btn mt-30">Read More <i class="lni-chevron-right"></i></a>
                        </div> <!-- services btn -->
                    </div> <!-- services left -->
                </div>
                <div class="col-lg-6">

                    <div class="services-right mt-45">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-sm-8">
                                <div class="single-services text-center">
                                    <div class="services-icon">
                                        <i class="lni-grid-alt"></i>
                                    </div>
                                    <div class="services-content mt-20">
                                        <h5 class="title mb-10">Furnitures</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                                    </div>
                                </div> <!-- single services -->

                                <div class="single-services text-center mt-30">
                                    <div class="services-icon">
                                        <i class="lni-ruler-pencil"></i>
                                    </div>
                                    <div class="services-content mt-20">
                                        <h5 class="title mb-10">Decoration</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                                    </div>
                                </div> <!-- single services -->
                            </div>
                            <div class="col-md-6 col-sm-8">
                                <div class="single-services text-center mt-30">
                                    <div class="services-icon">
                                        <i class="lni-customer"></i>
                                    </div>
                                    <div class="services-content mt-20">
                                        <h5 class="title mb-10">Consultancy</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                                    </div>
                                </div> <!-- single services -->

                                <div class="single-services text-center mt-30">
                                    <div class="services-icon">
                                        <i class="lni-support"></i>
                                    </div>
                                    <div class="services-content mt-20">
                                        <h5 class="title mb-10">Custom Orders</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                                    </div>
                                </div> <!-- single services -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- services right -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== SHOWCASE PART START ======-->

    <section id="showcase" class="showcase-area pt-100 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="showcase-title pt-25">
                        <h2 class="title">Showcase</h2>
                    </div> <!-- showcase title -->
                </div>
                <div class="col-lg-6">
                    <div class="showcase-title pt-25">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
                    </div> <!-- showcase title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="showcase-active mt-65">
                        <div class="single-showcase">
                            <img src="assets/images/showcase/t-1.jpg" alt="Testimonial">
                            <a href="#" class="main-btn">Full Preview</a>
                        </div> <!-- single showcase -->
                        <div class="single-showcase">
                            <img src="assets/images/showcase/t-2.jpg" alt="Testimonial">
                            <a href="#" class="main-btn">Full Preview</a>
                        </div> <!-- single showcase -->
                    </div> <!-- showcase active -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SHOWCASE PART ENDS ======-->

    <!--====== TEAM PART START ======-->

    <section id="team" class="team-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-25">
                        <h3 class="title mb-15">Our Expert Team</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="assets/images/team/t-1.jpg"
                             alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">Celina Gomez</a></h4>
                            <span>FOUNDER</span>
                            <ul class="social mt-15">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single temp -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="assets/images/team/t-2.jpg"
                             alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">Patric Green</a></h4>
                            <span>Consultant</span>
                            <ul class="social mt-15">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single temp -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="assets/images/team/t-3.jpg"
                             alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">Mark Parker</a></h4>
                            <span>Business Manager</span>
                            <ul class="social mt-15">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single temp -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="assets/images/team/t-4.jpg"
                             alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">Daryl Dixon</a></h4>
                            <span>Marketing Manager</span>
                            <ul class="social mt-15">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single temp -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial-area pt-200">
        <div class="testimonial-bg bg_cover" style="background-image: url(assets/images/testimonial/ts-bg.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <div class="testimonial-content">
                        <div class="testimonial-active">
                            <div class="single-testimonial">
                                <i class="lni-quotation"></i>
                                <p class="mb-30">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor inc ididunt ut labore et dolore magna aliqua.</p>
                                <h6 class="title">Roma De Suza</h6>
                                <span>- CEO, Tesla</span>
                            </div> <!-- single testimonial -->
                            <div class="single-testimonial">
                                <i class="lni-quotation"></i>
                                <p class="mb-30">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor inc ididunt ut labore et dolore magna aliqua.</p>
                                <h6 class="title">Lisa White</h6>
                                <span>- Designer, Walmart</span>
                            </div> <!-- single testimonial -->
                        </div> <!-- testimonial active -->
                    </div> <!-- testimonial content -->
                </div>
                <div class="col-lg-7 col-md-4">
                    <div class="testimonial-play text-right d-none d-md-block">
                        <a class="Video-popup" href="https://www.youtube.com/watch?v=l8ccw7BMrMA"><i class="lni-play"></i></a>
                    </div> <!-- testimonial play -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--======  BLOG PART START ======-->

    <section id="blog" class="blog-area pt-125">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-25">
                        <h3 class="title mb-15">From The Blog</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/blog/b-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <div class="content">
                                <h4 class="title"><a href="#">Rowan an orangutan known  & loved</a></h4>
                                <span>25 JULY, 2022</span>
                            </div>
                            <div class="meta d-flex justify-content-between align-items-center">
                                <div class="meta-admin d-flex align-items-center">
                                    <div class="image">
                                        <a href="#"><img src="assets/images/blog/admin.jpg" alt="Admin"></a>
                                    </div>
                                    <div class="admin-title">
                                        <h6 class="title"><a href="#">J. PARKER</a></h6>
                                    </div>
                                </div>  <!-- meta admin -->
                                <div class="meta-icon">
                                    <ul>
                                        <li><a href="#"><i class="lni-share"></i></a></li>
                                        <li><a href="#"><i class="lni-heart"></i></a></li>
                                    </ul>
                                </div> <!-- meta icon -->
                            </div> <!-- meta -->
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/blog/b-2.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <div class="content">
                                <h4 class="title"><a href="#">Rowan an orangutan known  & loved</a></h4>
                                <span>25 JULY, 2022</span>
                            </div>
                            <div class="meta d-flex justify-content-between align-items-center">
                                <div class="meta-admin d-flex align-items-center">
                                    <div class="image">
                                        <a href="#"><img src="assets/images/blog/admin.jpg" alt="Admin"></a>
                                    </div>
                                    <div class="admin-title">
                                        <h6 class="title"><a href="#">J. PARKER</a></h6>
                                    </div>
                                </div>  <!-- meta admin -->
                                <div class="meta-icon">
                                    <ul>
                                        <li><a href="#"><i class="lni-share"></i></a></li>
                                        <li><a href="#"><i class="lni-heart"></i></a></li>
                                    </ul>
                                </div> <!-- meta icon -->
                            </div> <!-- meta -->
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/blog/b-3.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <div class="content">
                                <h4 class="title"><a href="#">Rowan an orangutan known  & loved</a></h4>
                                <span>25 JULY, 2022</span>
                            </div>
                            <div class="meta d-flex justify-content-between align-items-center">
                                <div class="meta-admin d-flex align-items-center">
                                    <div class="image">
                                        <a href="#"><img src="assets/images/blog/admin.jpg" alt="Admin"></a>
                                    </div>
                                    <div class="admin-title">
                                        <h6 class="title"><a href="#">J. PARKER</a></h6>
                                    </div>
                                </div>  <!-- meta admin -->
                                <div class="meta-icon">
                                    <ul>
                                        <li><a href="#"><i class="lni-share"></i></a></li>
                                        <li><a href="#"><i class="lni-heart"></i></a></li>
                                    </ul>
                                </div> <!-- meta icon -->
                            </div> <!-- meta -->
                        </div>
                    </div> <!-- single blog -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--======  BLOG PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="contact-title text-center">
                        <h2 class="title">Get In Touch</h2>
                    </div> <!-- contact title -->
                </div>
            </div> <!-- row -->
            <div class="contact-box mt-70">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info pt-25">
                            <h4 class="info-title">Contact Info</h4>
                            <ul>
                                <li>
                                    <div class="single-info mt-30">
                                        <div class="info-icon">
                                            <i class="lni-phone-handset"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>+88 1234 56789</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                                <li>
                                    <div class="single-info mt-30">
                                        <div class="info-icon">
                                            <i class="lni-envelope"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>contact@yourmail.com</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                                <li>
                                    <div class="single-info mt-30">
                                        <div class="info-icon">
                                            <i class="lni-home"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>203, Envato Labs, Behind Alis Steet,Australia</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                            </ul>
                        </div> <!-- contact info -->
                    </div>
                    <div class="col-lg-8">

                        <contact-us /> <!-- row -->

                    </div>
                </div> <!-- row -->
            </div> <!-- contact box -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <section id="footer" class="footer-area">
        <div class="container">
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="footer-logo mt-40" style="margin-bottom: 30px; text-align: center;">
                            <ul class="footer-social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer logo -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright pt-15 pb-15">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p>Crafted by Sebastian.M</a></p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!--  footer copyright -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TO TOP PART ENDS ======-->

@endsection

@section('scripts')

@endsection
