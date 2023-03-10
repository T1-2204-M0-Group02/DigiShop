@extends('fe.layout')

@section('contents')
<!-- breadcrumb start -->
<div class="breadcrumb-main ">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="breadcrumb-contain">
          <div>
            <h2>Product</h2>
            <ul>
              <li><a href="index.html">home</a></li>
              <li><i class="fa fa-angle-double-right"></i></li>
              <li><a href="javascript:void(0)">Product</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
<section class="section-big-py-space ratio_asos b-g-light">
  <div class="collection-wrapper">
    <div class="custom-container">
      <div class="row">
        <div class="col-sm-3 collection-filter category-page-side">
          <!-- side-bar colleps block stat -->
          <div class="collection-filter-block creative-card creative-inner category-side">
            <!-- brand filter start -->
            <div class="collection-mobile-back">
              <span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
            <div class="collection-collapse-block open">
              <h3 class="collapse-block-title mt-0">brand</h3>
              <div class="collection-collapse-block-content">
                <div class="collection-brand-filter">
                  <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                    <input type="checkbox" class="custom-control-input form-check-input" id="zara">
                    <label class="custom-control-label form-check-label" for="zara">Iphone</label>
                  </div>
                  <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                    <input type="checkbox" class="custom-control-input form-check-input" id="vera-moda">
                    <label class="custom-control-label form-check-label" for="vera-moda">SamSung</label>
                  </div>
                  <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                    <input type="checkbox" class="custom-control-input form-check-input" id="forever-21">
                    <label class="custom-control-label form-check-label" for="forever-21">Xiomi</label>
                  </div>
                  <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                    <input type="checkbox" class="custom-control-input form-check-input" id="roadster">
                    <label class="custom-control-label form-check-label" for="roadster">Google Pixel</label>
                  </div>
                  <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                    <input type="checkbox" class="custom-control-input form-check-input" id="only">
                    <label class="custom-control-label form-check-label" for="only">only</label>
                  </div>
                </div>
              </div>
            </div>
            
          


            <!-- price filter start here -->
            <div class="collection-collapse-block border-0 open">
              <h3 class="collapse-block-title">price</h3>
              <div class="collection-collapse-block-content">
                <div class="filter-slide">
                  <input class="js-range-slider" type="text" name="my_range" value="" data-type="double"/>
                </div>
              </div>
            </div>
          </div>
         
          <!-- side-bar single product slider end -->
      

        </div>
        <div class="collection-content col">
          <div class="page-main-content">
            <div class="row">
              <div class="col-sm-12">
               
                <div class="collection-product-wrapper">
                  <div class="product-top-filter">
                    <div class="row">
                      <div class="col-xl-12">
                        <div class="filter-main-btn"><span class="filter-btn  "><i class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                      </div>
                    </div>
                   
                        
                  <div class="product-wrapper-grid category-6 product">
                    <div class="row">
                      <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-grid-box">
                        <div class="product-box">
                          <div class="product-imgbox">
                            <div class="product-front">
                              <a href="product-page(left-sidebar).html"> <img src="{{asset('assets/images/layout-4/product/r7.jpg') }}" class="img-fluid  " alt="product"> </a>
                            </div>
                            <div class="product-back">
                              <a href="product-page(left-sidebar).html"> <img src="{{asset('assets/images/layout-4/product/r7.jpg') }}" class="img-fluid  " alt="product"> </a>
                            </div>


                          </div>
                          <div class="product-detail detail-center detail-inverse">
                            <div class="detail-title">
                              <div class="detail-left">
                                <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                <a href="product-page(left-sidebar).html">
                                  <h6 class="price-title">
                                    realme not 7
                                  </h6> </a>
                              </div>
                              <div class="detail-right">
                                <div class="check-price"> $60.21 </div>
                                <div class="price">
                                  <div class="price"> $50.05 </div>
                                </div>
                              </div>
                            </div>
                            <div class="icon-detail">
                               <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i  data-feather="shopping-cart"></i> </button>
                              <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" > <i  data-feather="heart"></i> </a>
                              <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"> <i  data-feather="eye"></i> </a>
                              <a href="compare.html" class="tooltip-top" data-tippy-content="Compare"> <i  data-feather="refresh-cw"></i> </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-grid-box">
                        <div class="product-box">
                          <div class="product-imgbox">
                            <div class="product-front">
                              <a href="product-page(left-sidebar).html"> <img src="{{asset('assets/images/layout-4/product/13.jpg')}}" class="img-fluid  " alt="product"> </a>
                            </div>
                            <div class="product-back">
                              <a href="product-page(left-sidebar).html"> <img src="{{asset('assets/images/layout-4/product/13.jpg')}}" class="img-fluid  " alt="product"> </a>
                            </div>


                          </div>
                          <div class="product-detail detail-center detail-inverse">
                            <div class="detail-title">
                              <div class="detail-left">
                                <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                <a href="product-page(left-sidebar).html">
                                  <h6 class="price-title">
                                  13 ProMax
                                  </h6> </a>
                              </div>
                              <div class="detail-right">
                                <div class="check-price"> $56.21 </div>
                                <div class="price">
                                  <div class="price"> $ 24.05 </div>
                                </div>
                              </div>
                            </div>
                              
                              
                              
                              
                              
                              
                              
                              
                               <div class="icon-detail">
                               <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i  data-feather="shopping-cart"></i> </button>
                              <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" > <i  data-feather="heart"></i> </a>
                              <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"> <i  data-feather="eye"></i> </a>
                              <a href="compare.html" class="tooltip-top" data-tippy-content="Compare"> <i  data-feather="refresh-cw"></i> </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-grid-box">
                        <div class="product-box">
                          <div class="product-imgbox">
                            <div class="product-front">
                              <a href="product-page(left-sidebar).html"> <img src="{{asset('assets/images/layout-4/product/ss.jpg')}}" class="img-fluid  " alt="product"> </a>
                            </div>
                            <div class="product-back">
                              <a href="product-page(left-sidebar).html"> <img src="{{asset('assets/images/layout-4/product/ss.jpg')}}" class="img-fluid  " alt="product"> </a>
                            </div>
                          </div>
                          <div class="product-detail detail-center detail-inverse">
                            <div class="detail-title">
                              <div class="detail-left">
                                <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                <a href="product-page(left-sidebar).html">
                                  <h6 class="price-title">
                                    SamSUng Glaxy 21
                                  </h6> </a>
                              </div>
                              <div class="detail-right">
                                <div class="check-price"> $90.21 </div>
                                <div class="price">
                                  <div class="price"> $70.05 </div>
                                </div>
                              </div>
                            </div>
                            <div class="icon-detail">
                               <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i  data-feather="shopping-cart"></i> </button>
                              <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" > <i  data-feather="heart"></i> </a>
                              <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"> <i  data-feather="eye"></i> </a>
                              <a href="compare.html" class="tooltip-top" data-tippy-content="Compare"> <i  data-feather="refresh-cw"></i> </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-grid-box">
                        <div class="product-box">
                          <div class="product-imgbox">
                            <div class="product-front">
                              <a href="product-page(left-sidebar).html"> <img src="{{asset('assets/images/layout-4/product/sn.jpg')}}" class="img-fluid  " alt="product"> </a>
                            </div>
                            <div class="product-back">
                              <a href="product-page(left-sidebar).html"> <img src="{{asset('assets/images/layout-4/product/sn.jpg')}}" class="img-fluid  " alt="product"> </a>
                            </div>

                          </div>
                          <div class="product-detail detail-center detail-inverse">
                            <div class="detail-title">
                              <div class="detail-left">
                                <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                <a href="product-page(left-sidebar).html">
                                  <h6 class="price-title">
                                    Sony Xp
                                  </h6> </a>
                              </div>
                              <div class="detail-right">
                                <div class="check-price"> $ 70.21 </div>
                                <div class="price">
                                  <div class="price"> $ 44.05 </div>
                                </div>
                              </div>
                            </div>
                            <div class="icon-detail">
                               <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i  data-feather="shopping-cart"></i> </button>
                              <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" > <i  data-feather="heart"></i> </a>
                              <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"> <i  data-feather="eye"></i> </a>
                              <a href="compare.html" class="tooltip-top" data-tippy-content="Compare"> <i  data-feather="refresh-cw"></i> </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-grid-box">
                        <div class="product-box">
                          <div class="product-imgbox">
                            <div class="product-front">
                              <a href="product-page(left-sidebar).html"> <img src="{{asset('assets/images/layout-4/product/14.jpg')}}" class="img-fluid  " alt="product"> </a>
                            </div>
                            <div class="product-back">
                              <a href="product-page(left-sidebar).html"> <img src="{{asset('assets/images/layout-4/product/14.jpg')}}" class="img-fluid  " alt="product"> </a>
                            </div>


                          </div>
                          <div class="product-detail detail-center detail-inverse">
                            <div class="detail-title">
                              <div class="detail-left">
                                <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                <a href="product-page(left-sidebar).html">
                                  <h6 class="price-title">
                                   Iphone 14ProMAx
                                  </h6> </a>
                              </div>
                              <div class="detail-right">
                                <div class="check-price"> $ 56.21 </div>
                                <div class="price">
                                  <div class="price"> $ 24.05 </div>
                                </div>
                              </div>
                            </div>
                            <div class="icon-detail">
                               <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i  data-feather="shopping-cart"></i> </button>
                              <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" > <i  data-feather="heart"></i> </a>
                              <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"> <i  data-feather="eye"></i> </a>
                              <a href="compare.html" class="tooltip-top" data-tippy-content="Compare"> <i  data-feather="refresh-cw"></i> </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-grid-box">
                        <div class="product-box">
                          <div class="product-imgbox">
                            <div class="product-front">
                              <a href="product-page(left-sidebar).html"> <img src="{{asset('assets/images/layout-4/product/px.jpg')}}" class="img-fluid  " alt="product"> </a>
                            </div>
                            <div class="product-back">
                              <a href="product-page(left-sidebar).html"> <img src="{{asset('assets/images/layout-4/product/px.jpg')}}" class="img-fluid  " alt="product"> </a>
                            </div>


                          </div>
                          <div class="product-detail detail-center detail-inverse">
                            <div class="detail-title">
                              <div class="detail-left">
                                <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                <a href="product-page(left-sidebar).html">
                                  <h6 class="price-title">
                                     Pixel 7
                                  </h6> </a>
                              </div>
                              <div class="detail-right">
                                <div class="check-price"> $ 57.21 </div>
                                <div class="price">
                                  <div class="price"> $ 30.05 </div>
                                </div>
                              </div>
                            </div>
                            <div class="icon-detail">
                               <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <i  data-feather="shopping-cart"></i> </button>
                              <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" > <i  data-feather="heart"></i> </a>
                              <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"> <i  data-feather="eye"></i> </a>
                              <a href="compare.html" class="tooltip-top" data-tippy-content="Compare"> <i  data-feather="refresh-cw"></i> </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      
                     
                     
                    
                      
                    </div>
                  </div>
                  <div class="product-pagination">
                    <div class="theme-paggination-block">
                      <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-12">
                          <nav aria-label="Page navigation">
                            <ul class="pagination">
                              <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a></li>
                              <li class="page-item "><a class="page-link" href="javascript:void(0)">1</a></li>
                              <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                              <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                              <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li>
                            </ul>
                          </nav>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12">
                          <div class="product-search-count-bottom">
                            <h5>Showing Products 1-24 of 10 Result</h5></div>
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
<!-- section End -->

@endsection