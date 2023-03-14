@extends('fe.layout')

@section('contents')
<!-- breadcrumb start -->
<div class="breadcrumb-main ">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="breadcrumb-contain">
          <div>
            <h2>Shop</h2>
            <ul>
              <li><a href="{{ Route('home') }}">home</a></li>
              <li><i class="fa fa-angle-double-right"></i></li>
              <li><a href="javascript:void(0)">Shop</a></li>
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
                  @if ($categories->isEmpty())
                    No Category
                  @else
                  @foreach ($categories as $category)
                  <div class="custom-control custom-checkbox  form-check collection-filter-checkbox">
                    <input type="checkbox" class="custom-control-input form-check-input" id="category_{{ $category->id }}">
                    <label class="custom-control-label form-check-label" for="category_{{ $category->name }}">{{ $category->name }}</label>
                  </div>
                  @endforeach
                  @endif
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
          <!-- silde-bar colleps block end here -->
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
                  </div>
                  <div class="product-wrapper-grid category-6 product">
                    <div class="row">
                      @if ($products->isEmpty())
                        No product found
                      @else
                      @foreach ($products as $product)
                      <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-grid-box">
                        <div class="product-box">
                          <div class="product-imgbox">
                            <div class="product-front">
                              <a href="{{ Route('product.details', $product->slug) }}"> <img src="{{ asset('images/'.$product->image) }}" class="img-fluid  " alt="{{ $product->name }}"></a>
                            </div>
                          </div>
                          <div class="product-detail detail-center detail-inverse">
                            <div class="detail-title">
                              <div class="detail-left">
                                <a href="{{ Route('product.details', $product->slug) }}">
                                  <h6 class="price-title">
                                    {{ $product->name }}
                                  </h6> </a>
                              </div>
                              <div class="detail-right">
                                <div class="check-price"> {{ $product->price }} </div>
                                <div class="price">
                                  <div class="price"> {{ $product->price }} </div>
                                </div>
                              </div>
                            </div>
                            <div class="icon-detail">
                               <a class="tooltip-top add-cartnoty w-100" href="{{ Route('addCart') }}"> <i  data-feather="shopping-cart"></i> </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      @endif
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