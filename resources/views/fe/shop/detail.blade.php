@extends('fe.layout')

@section('contents')

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>product</h2>
                        <ul>
                            <li><a href="{{ Route('home') }}">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
<section class="section-big-pt-space b-g-light">
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="product-right-slick">
                        <div><img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid  image_zoom_cls-0"></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product-right product-description-box ">
                        <div class="pro-group">
                          <h2>{{ $product->name }}</h2>
                          <ul class="pro-price">
                            <li>
                                @php
                                    $currentPrice = 0;
                                    if ($product->sale >0) {
                                        $currentPrice = $product->price - ($product->price * $product->sale) / 100;
                                    } else {
                                        $currentPrice = $product->price;
                                    }
                                @endphp
                                $ {{ $currentPrice }}
                            </li>
                            <li><span>$ {{ $product->price }}</span></li>
                            <li>{{ $product->sale }} %off</li>
                          </ul>

                        <div class="pro-group ">
                          <h6 class="product-title">Description</h6>
                            <div>
                                {!! $product->description !!}
                            </div>

                        </div>
                        <div class="pro-group">
                          <h6 class="product-title">Quantity</h6>
                          <div class="qty-box">
                            <div class="input-group">
                              <button class="qty-minus"></button>
                              <input class="qty-adj form-control" type="number" value="1"/>
                              <button class="qty-plus"></button>
                            </div>
                          </div>
                        </div>
                        <div class="pro-group mb-0">
                          <div class="modal-btn">
                            <button  class="btn btn-solid btn-sm add-to-cart" id="product_{{ $product->id }}">
                              add to cart
                            </button>
                          </div>
                        </div>
                        <div class="pro-group">
                          <h6 class="product-title">Delivery option</h6>
                          <ul class="delivery-services">
                            <li>
                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"><g><g><path d="M466.244,257.845l-58.193-86.841H300v-120H0v364.992h61.899c6.678,25.849,30.195,45,58.101,45s51.424-19.151,58.101-45h155.797c6.678,25.849,30.195,45,58.101,45s51.424-19.151,58.101-45H512V269.284L466.244,257.845z M135,81.003h30v60h-30V81.003z M120,430.995c-16.542,0-30-13.458-30-30s13.458-30,30-30s30,13.458,30,30S136.542,430.995,120,430.995z M270,385.995h-91.899c-6.677-25.849-30.195-45-58.101-45s-51.424,19.151-58.101,45H30v-75h240V385.995z M270,280.995H30V81.003h75v90h90v-90h75V280.995z M392,430.995c-16.542,0-30-13.458-30-30s13.458-30,30-30s30,13.458,30,30S408.542,430.995,392,430.995z M482,385.995h-31.899c-6.678-25.849-30.195-45-58.101-45s-51.424,19.151-58.101,45H300V201.003h92.041l55.715,83.143L482,292.707V385.995z"></path></g></g></svg>
                              free shipping
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
              </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->


<!-- product-tab starts -->
<section class="tab-product tab-exes mb-5 ">
  <div class="custom-container">
      <div class="row">
          <div class="col-sm-12 col-lg-12">
              <div class="creative-card creative-inner">
                  <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-selected="true">Review</a>
                          <div class="material-border"></div>
                      </li>

                      <li class="nav-item"><a class="nav-link" id="review-top-tab" data-bs-toggle="tab" href="#top-review" role="tab" aria-selected="false">Write Review</a>
                          <div class="material-border"></div>
                      </li>
                  </ul>
                  <div class="tab-content nav-material" id="top-tabContent">

                      <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="contact-top-tab">
                          <div class="mt-4">
                              @if($reviews->isEmpty())
                              This product has no reviews
                              @else
                              @foreach ($reviews as $review)
                              <div class="card">
                                <div class="card-body">
                                  <p class="p-0"><strong>{{ App\Models\User::find($review->user_id)->name }}: </strong>{{ $review->review }}</p>
                                </div>
                              </div>
                              @endforeach
                              @endif
                          </div>
                      </div>
                      <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                          @if (Auth())
                          <div class="mt-4">
                            You have to <a href="{{ Route('login') }}">sign in</a>
                          </div>
                          @else
                          <form class="theme-form pt-2" action="{{ Route('review') }}" method="POST">
                              @csrf
                              <input type="hidden" name="product_id" value="{{ $product->id }}">
                              <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">
                              <div class="row">
                                  <div class="col-md-12">
                                      <textarea id="review" name="review" class="form-control" placeholder="Wrire Your Review Here"  rows="6"></textarea>
                                  </div>
                                  <div class="col-md-12">
                                      <button class="btn btn-normal" type="submit">Submit Your Review</button>
                                  </div>
                              </div>
                          </form>    
                          @endif 
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- product-tab ends -->

<!-- related products -->
<section class="section-big-py-space  ratio_asos b-g-light">
  <div class="custom-container">
    <div class="row">
      <div class="col-12 product-related">
        <h2>related products</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12 product">
        <div class="product-slide-6 product-m no-arrow">
          @if($relatedProducts->isEmpty())
          No Related Products
          @else
          @foreach($relatedProducts as $relatedProduct)
          <div>
            <div class="product-box">
              <div class="product-imgbox">
                <div class="product-front">
                  <a href="product-page(left-sidebar).html">
                    <img src="{{ asset('images/products/'.$relatedProduct->image)}}" class="img-fluid  " alt="{{ $relatedProduct->name }}">
                  </a>
                </div>
                <div class="product-icon icon-inline">
                  <button class="tooltip-top w-100" type="submit" >
                    <i  data-feather="shopping-cart"></i>
                  </button>
                </div>

              </div>
              <div class="product-detail detail-inline ">
                <div class="detail-title">
                  <div class="detail-left">
                    <a href="{{ Route('product.details', $relatedProduct->slug) }}">
                      <h6 class="price-title">
                        {{ $relatedProduct->name }}
                      </h6>
                    </a>
                  </div>
                  <div class="detail-right">
                    <div class="check-price">
                      {{ $relatedProduct->price }}
                    </div>
                    <div class="price">
                      <div class="price">
                        @php
                            $currentPrice = 0;
                            if ($relatedProduct->sale >0) {
                                $currentPrice = $relatedProduct->price - ($relatedProduct->price * $relatedProduct->sale) / 100;
                            } else {
                                $currentPrice = $relatedProduct->price;
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
          @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
<!-- related products -->


@endsection

@section("myjs")
    <script>
        const pid = "{{ $product->id }}"
        const url = "{{ Route('addCart') }}"

        $(document).ready(function() {
            $('.add-to-cart').click(function(e) {
                e.preventDefault(); // bỏ tác dụng của link
                // let pid = $(this).data("id"); // lấy id từ data-id
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
