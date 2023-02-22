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
                                        <li id="img-1"><img src="../assets/images/layout-1/slider/1.1.png" class="img-fluid" alt="slider"></li>
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
                                        <li id="img-2"><img src="../assets/images/layout-1/slider/1.2.png" class="img-fluid" alt="slider"></li>
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
                                        <li id="img-3"><img src="../assets/images/layout-1/slider/1.3.png" class="img-fluid" alt="slider"></li>
                                    </ul>
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        <h4>march special</h4>
                                        <h1>leather bag</h1>
                                        <h2>minimum 60% off</h2>
                                        <a href="product-page(left-sidebar).html" class="btn btn-normal">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-3 pl-0 offer-banner">
                    <div class="offer-banner-img">
                        <img src="../assets/images/layout-1/offer-banner.png" alt="offer-banner" class="img-fluid  ">
                    </div>
                    <div class="banner-contain">
                        <div>
                            <a href="product-page(left-sidebar).html">
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
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                        </a>
                                    </div>
                                    <div class="product-back">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                        </a>
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                            <i  data-feather="shopping-cart"></i>
                                        </button>
                                        <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                            <i  data-feather="heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                            <i  data-feather="eye"></i>
                                        </a>
                                        <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                            <i  data-feather="refresh-cw"></i>
                                        </a>
                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                    <div class="on-sale1">
                                        on sale
                                    </div>
                                </div>
                                <div class="product-detail detail-inline ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(left-sidebar).html">
                                                <h6 class="price-title">
                                                    sony xperia z5
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 58.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 24.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/2.jpg" class="img-fluid  " alt="product">
                                        </a>
                                    </div>
                                    <div class="product-back">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/a2.jpg" class="img-fluid  " alt="product">
                                        </a>
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                            <i  data-feather="shopping-cart"></i>
                                        </button>
                                        <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                            <i  data-feather="heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                            <i  data-feather="eye"></i>
                                        </a>
                                        <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                            <i  data-feather="refresh-cw"></i>
                                        </a>
                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                    <div class="on-sale1">
                                        on sale
                                    </div>
                                </div>
                                <div class="product-detail detail-inline ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(left-sidebar).html">
                                                <h6 class="price-title">
                                                    Double Door Refrigerator
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 147.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 110.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                        </a>
                                    </div>
                                    <div class="product-back">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                        </a>
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                            <i  data-feather="shopping-cart"></i>
                                        </button>
                                        <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                            <i  data-feather="heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                            <i  data-feather="eye"></i>
                                        </a>
                                        <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                            <i  data-feather="refresh-cw"></i>
                                        </a>
                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                    <div class="on-sale1">
                                        on sale
                                    </div>
                                </div>
                                <div class="product-detail detail-inline ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(left-sidebar).html">
                                                <h6 class="price-title">
                                                    nikon d5003
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 264.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 210.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                        </a>
                                    </div>
                                    <div class="product-back">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                        </a>
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                            <i  data-feather="shopping-cart"></i>
                                        </button>
                                        <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                            <i  data-feather="heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                            <i  data-feather="eye"></i>
                                        </a>
                                        <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                            <i  data-feather="refresh-cw"></i>
                                        </a>
                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                    <div class="on-sale1">
                                        on sale
                                    </div>
                                </div>
                                <div class="product-detail detail-inline ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(left-sidebar).html">
                                                <h6 class="price-title">
                                                    Lenovo V14 Intel
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 418.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 380.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                        </a>
                                    </div>
                                    <div class="product-back">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                        </a>
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                            <i  data-feather="shopping-cart"></i>
                                        </button>
                                        <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                            <i  data-feather="heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                            <i  data-feather="eye"></i>
                                        </a>
                                        <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                            <i  data-feather="refresh-cw"></i>
                                        </a>
                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                    <div class="on-sale1">
                                        on sale
                                    </div>
                                </div>
                                <div class="product-detail detail-inline ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(left-sidebar).html">
                                                <h6 class="price-title">
                                                    coffee table
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 49.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 47.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                        </a>
                                    </div>
                                    <div class="product-back">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                        </a>
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                            <i  data-feather="shopping-cart"></i>
                                        </button>
                                        <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                            <i  data-feather="heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                            <i  data-feather="eye"></i>
                                        </a>
                                        <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                            <i  data-feather="refresh-cw"></i>
                                        </a>
                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                    <div class="on-sale1">
                                        on sale
                                    </div>
                                </div>
                                <div class="product-detail detail-inline ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(left-sidebar).html">
                                                <h6 class="price-title">
                                                    nikon d5003
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 264.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 210.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                        </a>
                                    </div>
                                    <div class="product-back">
                                        <a href="product-page(left-sidebar).html">
                                            <img src="../assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                        </a>
                                    </div>
                                    <div class="product-icon icon-inline">
                                        <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                            <i  data-feather="shopping-cart"></i>
                                        </button>
                                        <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                            <i  data-feather="heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                            <i  data-feather="eye"></i>
                                        </a>
                                        <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                            <i  data-feather="refresh-cw"></i>
                                        </a>
                                    </div>
                                    <div class="new-label1">
                                        <div>new</div>
                                    </div>
                                    <div class="on-sale1">
                                        on sale
                                    </div>
                                </div>
                                <div class="product-detail detail-inline ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(left-sidebar).html">
                                                <h6 class="price-title">
                                                    Lenovo V14 Intel
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                $ 418.21
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    $ 380.05
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <li class="current"><a href="tab-1">fashion</a></li>
                    <li class=""><a href="tab-2">electronic</a></li>
                    <li class=""><a href="tab-3">footware</a></li>
                    <li class=""><a href="tab-4">sports</a></li>
                    <li class=""><a href="tab-5">toys</a></li>
                    <li class=""><a href="tab-6">books</a></li>
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
                            <div id="tab-1" class="tab-content active default">
                                <div class="product-slide-6 product-m no-arrow">
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline ">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                sony xperia m5
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist">
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                woman hande bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 56.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 24.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                nikon camera
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 60.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 20.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                lenovo laptop
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 70.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 30.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                earphone Pouch Bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 100.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 80.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                wooden table
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 90.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 28.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                Wireless Optical Mouse
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 80.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 28.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-content ">
                                <div class="product-slide-6 product-m no-arrow">
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                Wireless Optical Mouse
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $150.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 80.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline ">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                sony xperia m5
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 120.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $100.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                woman hande bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 60.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 30.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                nikon camera
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 40.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 30.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                lenovo laptop
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 45.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 18.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                earphone Pouch Bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 180.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 120.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                wooden table
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 320.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 125.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="tab-3" class="tab-content ">
                                <div class="product-slide-6 product-m no-arrow">
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-pagplayout4e(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                wooden table
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 225.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 180.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                Wireless Optical Mouse
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $99.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 75.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline ">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                sony xperia m5
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 260.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 120.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                woman hande bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 360.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 140.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                nikon camera
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 370.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 170.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                lenovo laptop
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 76.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 40.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                earphone Pouch Bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 60.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 45.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-4" class="tab-content ">
                                <div class="product-slide-6 product-m no-arrow">
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                earphone Pouch Bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 60.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 45.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                wooden table
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 225.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 180.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                Wireless Optical Mouse
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $99.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 75.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline ">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                sony xperia m5
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 260.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 120.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                woman hande bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 360.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 140.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                nikon camera
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 370.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 170.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                lenovo laptop
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 76.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 40.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="tab-5" class="tab-content ">
                                <div class="product-slide-6 product-m no-arrow">
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                lenovo laptop
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 76.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 40.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                earphone Pouch Bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 60.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 45.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                wooden table
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 225.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 180.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                Wireless Optical Mouse
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $99.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 75.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline ">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                sony xperia m5
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 260.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 120.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                woman hande bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 360.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 140.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                nikon camera
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 370.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 170.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div id="tab-6" class="tab-content ">
                                <div class="product-slide-6 product-m no-arrow">
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                nikon camera
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 370.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 170.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                                <div class="on-sale1">
                                                    on sale
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                lenovo laptop
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 76.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 40.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                earphone Pouch Bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 60.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 45.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                wooden table
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 225.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 180.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                Wireless Optical Mouse
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $99.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 75.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline ">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                sony xperia m5
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 260.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 120.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-back">
                                                    <a href="product-page(left-sidebar).html">
                                                        <img src="../assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                                    </a>
                                                </div>
                                                <div class="product-icon icon-inline">
                                                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                                                        <i  data-feather="shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                                                        <i  data-feather="heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                                                        <i  data-feather="eye"></i>
                                                    </a>
                                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                                        <i  data-feather="refresh-cw"></i>
                                                    </a>
                                                </div>
                                                <div class="new-label1">
                                                    <div>new</div>
                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(left-sidebar).html">
                                                            <h6 class="price-title">
                                                                woman hande bag
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                            $ 360.21
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                $ 140.05
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider tab end -->



@endsection
