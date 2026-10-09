@extends('frontend.master')

@section('content')
    <main>
        <div class="slider-area">
            <!-- Slider -->
            <div class="block-slider block-slider4">
                <ul class="" id="bxslider-home4">


                    @foreach ($sliderdata as $sliderArr)
                        <li>
                            <img src="{{ asset('/') }}{{ $sliderArr['img'] }}" alt="Slide">
                            <div class="caption-group">
                                <h2 class="caption title">
                                    {{ $sliderArr['name_first'] }} <span class="primary">{{ $sliderArr['name_second'] }}
                                        <strong>{{ $sliderArr['name_third'] }}</strong></span>
                                </h2>
                                <h4 class="caption subtitle">{{ $sliderArr['des'] }}</h4>
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



                                @foreach ($productdata as $productArr)
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="{{ asset('/') }}{{ $productArr['img'] }}" alt="">
                                            <div class="product-hover">
                                                <a href="#" class="add-to-cart-link"><i
                                                        class="fa fa-shopping-cart"></i>
                                                    Add to cart</a>
                                                <a href="{{ route('single-product') }}" class="view-details-link"><i
                                                        class="fa fa-link"></i> See details</a>
                                            </div>
                                        </div>

                                        <h2><a href="single-product.html">{{ $productArr['name'] }}</a></h2>
                                        <h6>{{ $productArr['details'] }}</h6>
                                        <div class="product-carousel-price">
                                            <ins>{{ $productArr['new_pice'] }}</ins>
                                            <del>{{ $productArr['old_price'] }}</del>
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

                                @foreach ($brandImgData as $brandImgArr)
                                    <img src="{{ asset('/') }}{{ $brandImgArr['img'] }}" alt="">
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


                            @foreach ($topsellerdata as $topSellerArr)
                                <div class="single-wid-product">
                                    <a href="single-product.html"><img src="{{ asset('/') }}{{ $topSellerArr['img'] }}"
                                            alt="" class="product-thumb"></a>
                                    <h2><a href="single-product.html">{{ $topSellerArr['des'] }}</a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins>{{ $topSellerArr['new_price'] }}</ins>
                                        <del>{{ $topSellerArr['old_price'] }}</del>
                                    </div>
                                </div>
                            @endforeach




                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-product-widget">
                            <h2 class="product-wid-title">Recently Viewed</h2>
                            <a href="#" class="wid-view-more">View All</a>



                            @foreach ($recentlyViewedData as $recentlyViewedArr)
                                <div class="single-wid-product">
                                    <a href="single-product.html"><img
                                            src="{{ asset('/') }}{{ $recentlyViewedArr['img'] }}" alt=""
                                            class="product-thumb"></a>
                                    <h2><a href="single-product.html">{{ $recentlyViewedArr['des'] }}</a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins>{{ $recentlyViewedArr['old_price'] }}</ins>
                                        <del>{{ $recentlyViewedArr['new_price'] }}</del>
                                    </div>
                                </div>
                            @endforeach




                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-product-widget">
                            <h2 class="product-wid-title">Top New</h2>
                            <a href="#" class="wid-view-more">View All</a>


                            @foreach ($topNewData as $topNewArr)
                                <div class="single-wid-product">
                                    <a href="single-product.html"><img
                                            src="{{ asset('/') }}{{$topNewArr['img']}}"
                                            alt="" class="product-thumb"></a>
                                    <h2><a href="single-product.html">{{$topNewArr['des']}}</a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins>{{$topNewArr['new_price']}}</ins> <del>{{$topNewArr['old_price']}}</del>
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
