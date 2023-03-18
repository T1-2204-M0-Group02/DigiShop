@extends('fe.layout')

@section('contents')
<!-- breadcrumb start -->
<div class="breadcrumb-main ">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="breadcrumb-contain">
          <div>
            <h2>Products</h2>
            <ul>
              <li><a href="{{ Route('home') }}">home</a></li>
              <li><i class="fa fa-angle-double-right"></i></li>
              <li><a href="javascript:void(0)">Products</a></li>
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
            {{-- <form action="{{ Route('filter') }}" method="GET"> --}}
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
                            <input  type="checkbox" 
                                    name="category" 
                                    value="{{ $category->id }}" 
                                    class="custom-control-input form-check-input" 
                                    id="category_{{ $category->id }}"
                                    @if (in_array($category->id, explode(',', request()->input('filter.category'))))
                                    checked
                                    @endif
                                    >
                            <label class="custom-control-label form-check-label" for="category_{{ $category->id }}">{{ $category->name }}</label>
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
                        <input id="price" class="js-range-slider" type="text" name="price" value="" data-type="double"/>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <button id="filter" class="btn btn-normal" >Filter</button>
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
                  {{ $products->links('vendor\pagination\custom') }}
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
                e.preventDefault();
                let pid = $(this).data("id");
                // let quantity = $('input[name="product-quatity"]').val();
                let quantity = 1;
                $.ajax({
                    type: 'post',
                    url: url,   
                    data: {
                        pid: pid,
                        quantity: quantity,
                        _token: '{{ csrf_token() }}',
                    }, success: function(data) {
                        $('.item-count-contain')[0].innerHTML = data.length;
                    }
                });
            });
        });

        function getIds(checkboxName) {
            let checkBoxes = document.getElementsByName(checkboxName);
            let ids = Array.prototype.slice.call(checkBoxes)
                            .filter(ch => ch.checked==true)
                            .map(ch => ch.value);
            return ids;
        }

        function filterResults () {
            let catagoryIds = getIds("category");
            let price = document.getElementById("price").value.split(';');
            let href = 'products?';
            
            if(price.length) {
                href += 'filter[price_between]=' + price;
            }

            if(catagoryIds.length) {
                href += '&filter[category]=' + catagoryIds;
            }

            $(".js-range-slider").ionRangeSlider({
                type: "double",
                grid: true,
                min: 0,
                max: 2000,
                from: 200,
                to: 1800,
                prefix: "$"
            });
            document.location.href=href;
        }

        document.getElementById("filter").addEventListener("click", filterResults);

        let price$ = "{{ request()->input('filter.price_between') }}".split(',');
        console.log(price$);
        $(".js-range-slider").ionRangeSlider({
            type: "double",
            grid: true,
            min: 0,
            max: 2500,
            from: price$[0] || 200,
            to: price$[1] || 2300,
            prefix: "$"
        });
    </script>
@endsection