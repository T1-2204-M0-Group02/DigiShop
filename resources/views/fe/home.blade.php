@extends('fe.layout')

@section('contents')
    <!--slider start-->
    <section class="theme-slider section-pt-space home-slide">
        <div class="custom-container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 offset-xl-2 px-abjust">
                    <div class="slide-1 no-arrow">
                        <div>
                            <div class="slider-banner">
                                <div class="slider-img">
                                    <ul class="layout2-slide-1">
                                        <li id="img-1"><img src="{{ asset('assets/images/layout-1/slider/2.2.jpg') }}" class="img-fluid" alt="slider"></li>
                                    </ul>
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        <h4>the best</h4>
                                        <h1>loffer shoes</h1>
                                        <h2>minimum 30% off</h2>
                                        <a href="product-page(left-sidebar).html" class="btn btn-normal">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slider-banner">
                                <div class="slider-img">
                                    <ul class="layout2-slide-2">
                                        <li id="img-2"><img src="{{ asset('assets/images/layout-1/slider/2.2.jpg') }}" class="img-fluid" alt="slider"></li>
                                    </ul>
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        <h4>cinema festival</h4>
                                        <h1>reflex camera</h1>
                                        <h2>minimum 40% off</h2>
                                        <a href="product-page(left-sidebar).html" class="btn btn-normal">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slider-banner">
                                <div class="slider-img">
                                    <ul class="layout2-slide-3">
                                        <li id="img-3"><img src="{{ asset('assets/images/layout-1/slider/2.2.jpg') }}" class="img-fluid" alt="slider"></li>
                                    </ul>
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        <h4>march special</h4>
                                        <h1>leather bag</h1>
                                        <h2>minimum 60% off</h2>
                                        <a href="#" class="btn btn-normal">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-3 pl-0 offer-banner">
                    <div class="offer-banner-img">
                        <img src="{{ asset('assets/images/layout-1/slider/3.1.jpg') }}" alt="offer-banner" class="img-fluid h-100" >
                    </div>
                    <div class="banner-contain">
                        <div>
                            <a href="#">
                                <h5>Special Offer for you</h5>
                                <div class="discount-offer">
                                    <h1>50%</h1>
                                    <sup>off</sup>
                                </div >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider end-->

    <!--title start-->
    <div class="title1 section-my-space">
        <h4>Sale Products</h4>
    </div>
    <!--title end-->

    <!--product start-->
    <section class="product section-pb-space mb--5">
        <div class="container">
            <div class="row">
                <div class="col pr-0">
                    <div class="product-slide-6 no-arrow">
                        @foreach($products as $product)
                            @if($product->sale > 0)
                            <div>
                                <div class="product-box">
                                    <div class="product-imgbox">
                                        <div class="product-front">
                                            <a href="product-page(left-sidebar).html">
                                                <img src="{{ asset('images/'.$product->image) }}" class="img-fluid  " alt="product">
                                            </a>
                                        </div>
                                        <div class="product-icon icon-inline ">
                                            <button class="tooltip-top w-100 add-to-cart" data-id="{{ $product->id }}">
                                                <i data-feather="shopping-cart"></i>
                                            </button>

                                        </div>
                                        @if($product->sale > 0)
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        @endif

                                    </div>
                                    <div class="product-detail detail-inline ">
                                        <div class="detail-title">
                                            <div class="detail-left">

                                                <a href="product-page(left-sidebar).html">
                                                    <h6 class="price-title">
                                                        {{ $product->name }}
                                                    </h6>
                                                </a>
                                            </div>
                                            <div class="detail-right">
                                                @if($product->sale > 0)
                                                    <div class="check-price">
                                                        {{ $product->price }}
                                                    </div>
                                                @endif

                                                <div class="price">
                                                    <div class="price">
                                                        @php
                                                            $currentPrice = 0;
                                                            if ($product->sale >0) {
                                                                $currentPrice = $product->price - ($product->price * $product->sale) / 100;
                                                            } else {
                                                                $currentPrice = $product->price;
                                                            }
                                                        @endphp
                                                        $ {{ $currentPrice }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product end-->

    <!--tab product-->
    <section class="section-pt-space" >
        <div class="tab-product-main">
            <div class="tab-prodcut-contain">
                <ul class="tabs tab-title">
                    @if($categories)
                    @foreach($categories as $category)
                        <li class="{{ $category->id == $categories[0]->id ? 'current' : '' }}"><a href="tab-{{ $category->id }}">{{$category->name}}</a></li>
                    @endforeach

                    @endif
                </ul>
            </div>
        </div>
    </section>
    <!--tab product-->

    <!-- slider tab  -->
    <section class="section-py-space ratio_square product">
        <div class="container">
            <div class="row">
                <div class="col pr-0">
                    <div class="theme-tab product mb--5">
                        <div class="tab-content-cls ">
                            @foreach($categories as $category)
                            <div id="tab-{{ $category->id }}" class="tab-content {{ $category->id == $categories[0]->id ? 'active default' : '' }}">
                                <div class="product-slide-6 product-m no-arrow">
                                        @foreach($products as $product)
                                            @if($product->category_id == $category->id)
                                            <div>
                                            <div class="product-box">
                                                    <div class="product-imgbox">
                                                        <div class="product-front">
                                                            <a href="#">
                                                                <img src="{{ asset('images/'.$product->image) }}" class="img-fluid" alt="{{ $product->name }}">
                                                            </a>
                                                        </div>
                                                        <div class="product-icon icon-inline">
                                                            <button class="tooltip-top w-100 add-to-cart" data-id="{{ $product->id }}">
                                                                <i data-feather="shopping-cart"></i>
                                                            </button>
                                                        </div>
                                                        @if($product->sale > 0)
                                                            <div class="on-sale1">
                                                                on sale
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="product-detail detail-inline ">
                                                        <div class="detail-title">
                                                            <div class="detail-left">
                                                                <a href="product-page(left-sidebar).html">
                                                                    <h6 class="price-title">
                                                                        {{$product->name}}
                                                                    </h6>
                                                                </a>
                                                            </div>
                                                            <div class="detail-right">
                                                                @if($product->sale > 0)
                                                                    <div class="check-price">
                                                                        {{ $product->price }}
                                                                    </div>
                                                                @endif
                                                                <div class="price">
                                                                    <div class="price">
                                                                        @php

                                                                        $currentPrice = 0;
                                                                        if ($product->sale >0) {
                                                                            $currentPrice = $product->price - ($product->price * $product->sale) / 100;
                                                                        } else {
                                                                            $currentPrice = $product->price;
                                                                        }
                                                                        @endphp
                                                                        $ {{ $currentPrice }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider tab end -->

@endsection
@section("myjs")
    <script>
        const url = "{{ Route('addCart') }}"

        $(document).ready(function() {
            $('.add-to-cart').click(function(e) {
                e.preventDefault(); // bỏ tác dụng của link
                let pid = $(this).data("id"); // lấy id từ data-id
                // let quantity = $('input[name="product-quatity"]').val();
                let quantity = 1;
                // dùng jquery ajax gửi request về server
                $.ajax({
                    type: 'post',
                    url: url,     // url?pid=3&quantity=1&_token=23423
                    data: {
                        pid: pid,
                        quantity: quantity,
                        _token: '{{ csrf_token() }}',
                    }, success: function(data) {
                        alert('add product to cart successful.');
                    }
                });
            });
        });
    </script>
@endsection
