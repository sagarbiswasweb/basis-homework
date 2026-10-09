@extends('frontend.master')

@section('content')
    <main>
        <div class="slider-area">
            <!-- Slider -->
            <div class="block-slider block-slider4">
                <ul class="" id="bxslider-home4">


                    {{-- slider data showed dynamically --}}

                    @foreach ($sliderinfoes as $sliderInfo)
                        <li>
                            <img src="{{ asset('/') }}{{ $sliderInfo['img'] }}" alt="Slide">
                            <div class="caption-group">
                                <h2 class="caption title">
                                    {{ $sliderInfo['name'][0] }} <span class="primary">{{ $sliderInfo['name'][1] }}
                                        <strong>{{ $sliderInfo['name'][2] }}</strong></span>
                                </h2>
                                <h4 class="caption subtitle">{{ $sliderInfo['des'] }}</h4>
                                <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                            </div>
                        </li>
                    @endforeach



                </ul>
            </div>
            <!-- ./Slider -->
        </div> <!-- End slider area -->

        <div class="promo-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-promo promo1">
                            <i class="fa fa-refresh"></i>
                            <p>30 Days return</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-promo promo2">
                            <i class="fa fa-truck"></i>
                            <p>Free shipping</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-promo promo3">
                            <i class="fa fa-lock"></i>
                            <p>Secure payments</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-promo promo4">
                            <i class="fa fa-gift"></i>
                            <p>New products</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End promo area -->

        <div class="maincontent-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest-product">
                            <h2 class="section-title">Latest Products</h2>
                            <div class="product-carousel">




                                {{-- showing product data  --}}

                                @foreach ($productinfoes as $productInfo)
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="{{ asset('/') }}{{ $productInfo['img'] }}" alt="">
                                            <div class="product-hover">
                                                <a href="#" class="add-to-cart-link"><i
                                                        class="fa fa-shopping-cart"></i>
                                                    Add to cart</a>
                                                <a href="single-product.html" class="view-details-link"><i
                                                        class="fa fa-link"></i> See details</a>
                                            </div>
                                        </div>

                                        <h2><a href="single-product.html">{{ $productInfo['des'] }}</a></h2>

                                        <div class="product-carousel-price">
                                            <ins>{{ $productInfo['new_price'] }}</ins>
                                            <del>{{ $productInfo['prev_price'] }}</del>
                                        </div>
                                    </div>
                                @endforeach




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End main content area -->

        <div class="brands-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="brand-wrapper">
                            <div class="brand-list">


                                {{-- brand image dynamic data  --}}
                                @foreach ($brandimages as $brandImgVal)
                                    <img src="{{ asset('/') }}{{ $brandImgVal }}" alt="">
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End brands area -->

        <div class="product-widget-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-product-widget">
                            <h2 class="product-wid-title">Top Sellers</h2>
                            <a href="" class="wid-view-more">View All</a>


                            {{-- topsefller item dynamic data  --}}

                            @foreach ($topsellers as $topSellerVal)
                                <div class="single-wid-product">
                                    <a href="single-product.html"><img src="{{ asset('/') }}{{ $topSellerVal['img'] }}"
                                            alt="" class="product-thumb"></a>
                                    <h2><a href="single-product.html">{{ $topSellerVal['des'] }}</a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins>{{ $topSellerVal['new_price'] }}</ins>
                                        <del>{{ $topSellerVal['prev_price'] }}</del>
                                    </div>
                                </div>
                            @endforeach




                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-product-widget">
                            <h2 class="product-wid-title">Recently Viewed</h2>
                            <a href="#" class="wid-view-more">View All</a>

                            {{-- recently viewed dynamic data  --}}

                            @foreach ($recentlyviewed as $recentlyViewedVal)
                                <div class="single-wid-product">
                                    <a href="single-product.html"><img
                                            src="{{ asset('/') }}{{ $recentlyViewedVal['img'] }}" alt=""
                                            class="product-thumb"></a>
                                    <h2><a href="single-product.html">{{ $recentlyViewedVal['des'] }}</a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins>{{ $recentlyViewedVal['new_price'] }}</ins>
                                        <del>{{ $recentlyViewedVal['prev_price'] }}</del>
                                    </div>
                                </div>
                            @endforeach





                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-product-widget">
                            <h2 class="product-wid-title">Top New</h2>
                            <a href="#" class="wid-view-more">View All</a>


                            @foreach ($topnew as $topNewVal)
                                <div class="single-wid-product">
                                    <a href="single-product.html"><img
                                            src="{{ asset('/') }}{{$topNewVal["img"]}}"
                                            alt="" class="product-thumb"></a>
                                    <h2><a href="single-product.html">{{$topNewVal["des"]}}</a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins>{{$topNewVal["new_price"]}}</ins> <del>{{$topNewVal["prev_price"]}}</del>
                                    </div>
                                </div>
                            @endforeach




                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End product widget area -->
    </main>
@endsection
