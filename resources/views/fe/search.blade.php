@extends('fe.layout')

@section('contents')
<!-- breadcrumb start -->
<div class="breadcrumb-main ">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="breadcrumb-contain">
          <div>
            <h2>Search</h2>
            <ul>
              <li><a href="{{ Route('home') }}">home</a></li>
              <li><i class="fa fa-angle-double-right"></i></li>
              <li><a href="javascript:void(0)">Search</a></li>
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
                    <div class="row justify-content-center">
                      @if ($searchProducts->isEmpty())
                        No product found
                      @else
                      @foreach ($searchProducts as $product)
                      <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-grid-box">
                        <div class="product-box">
                          <div class="product-imgbox">
                            <div class="product-front">
                              <a href="{{ Route('product.details', $product->slug) }}">
                                <div class="image-wrapper">
                                  <img src="{{ asset('images/products/'.$product->image) }}" class="img-fluid  " alt="{{ $product->name }}">
                                </div>
                              </a>
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
                               <button class="tooltip-top w-100 add-to-cart" data-id="{{ $product->id }}">
                                    <i data-feather="shopping-cart"></i>
                                </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      @endif
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
                        // alert('add product to cart successful.');
                        location.reload();
                    }
                });
            });
        });
    </script>
@endsection