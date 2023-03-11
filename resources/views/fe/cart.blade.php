@extends('fe.layout')

@section('contents')

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
  <div class="container">
      <div class="row">
          <div class="col">
              <div class="breadcrumb-contain">
                  <div>
                      <h2>cart</h2>
                      <ul>
                          <li><a href="javascript:void(0)">home</a></li>
                          <li><i class="fa fa-angle-double-right"></i></li>
                          <li><a href="javascript:void(0)">cart</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- breadcrumb End -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--section start-->
<section class="cart-section section-big-py-space b-g-light">
  <div class="custom-container">
      <div class="row">
          <div class="col-sm-12">
              <table class="table cart-table table-responsive-xs">
                  <?php
                        $total = 0;

                        if (Session::has('cart')) {
                            ?>
                            <thead>
                                <tr class="table-head">
                                    <th scope="col">image</th>
                                    <th scope="col">product name</th>
                                    <th scope="col">price</th>
                                    <th scope="col">quantity</th>
                                    <th scope="col">action</th>
                                    <th scope="col">total</th>
                                </tr>
                                </thead>
                            <?php
                            foreach(Session::get('cart') as $item) {
                                $total += $item->quantity * $item->product->price;

                                ?>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../assets/images/layout-3/product/1.jpg" alt="cart"  class=" "></a>
                                        </td>
                                        <td><a href="javascript:void(0)">{{ $item->product->name }}</a>
                                            <div class="mobile-cart-content">
                                                <div class="col-xs-3">
                                                    <div class="qty-box">
                                                        <div class="input-group">
                                                            <input type="text" name="quantity" class="form-control input-number" min = "0" value="{{ $item->quantity }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-3">
                                                    <h2 class="td-color">${{ $item->product->price }}</h2></div>
                                                <div class="col-xs-3">
                                                    <h2 class="td-color">
                                                        <div class="delete">
                                                            <button id="{{ $item->product->id }}" onclick="removeItem(this.id)">X</button>
                                                            {{-- <a href="#" class="btn btn-delete" title="" data-id="{{ $item->product->id }}">
                                                                <i class="ti-close"></i>
                                                            </a> --}}
                                                        </div>
                                                    </h2></div>
                                            </div>
                                        </td>
                                        <td>
                                            {{-- <script type="text/javascript">
                                                jQuery(function($) {
                                                    $('#product-total-price').text(parseInt($('#quantity').val()) * parseInt($('#price').text().slice(1)));
                                                    
                                                    $('#quantity').on('input', function() {
                                                        $('#product-total-price').text(parseInt($('#quantity').val()) * parseInt($('#price').text().slice(1)));
                                                    });
                                                });
                                            </script> --}}
                                            <h2 id="price">${{ $item->product->price }}</h2>
                                        </td>
                                        <td>
                                            <h2>{{ $item->quantity }}</h2>
                                            {{-- <div class="qty-box"> --}}
                                                {{-- <div class="input-group"> --}}
                                                    {{-- <input id="quantity" type="text" data-max="120" pattern="[0-9]*" name="quantity" class="form-control input-number" min = "0" value="{{ $item->quantity }}"> --}}
                                                    {{-- <input style="font-size:21px;" type="button" value="+" onclick='' class=""> --}}
                                                    {{-- <input style="font-size:21px;" type="button" value="-" onclick='' class=""> --}}
                                                {{-- </div> --}}
                                            {{-- </div> --}}
                                        </td>
                                        <td>
                                            <div class="delete">
                                                <button id="{{ $item->product->id }}" onclick="removeItem(this.id)">X</button>

                                                {{-- <a href="#" class="btn btn-delete" title="" data-id="{{ $item->product->id }}">
                                                    <i class="ti-close"></i>
                                                </a> --}}
                                              </div>
                                        </td>
                                        <td>
                                            <h2 id="product-total-price" class="td-color">${{ $item->product->price * $item->quantity }}</h2>
                                        </td>
                                    </tr>
                                    </tbody>
                                <?php
                            }
                        } else {
                            ?>
                                <li class="pr-cart-item" colspan="5">No Product</li>
                            <?php
                        }
                  ?>
                  {{-- <tbody>
                  <tr>
                      <td>
                          <a href="javascript:void(0)"><img src="../assets/images/layout-3/product/1.jpg" alt="cart"  class=" "></a>
                      </td>
                      <td><a href="javascript:void(0)">cotton shirt</a>
                          <div class="mobile-cart-content">
                              <div class="col-xs-3">
                                  <div class="qty-box">
                                      <div class="input-group">
                                          <input type="text" name="quantity" class="form-control input-number" value="1">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xs-3">
                                  <h2 class="td-color">$63.00</h2></div>
                              <div class="col-xs-3">
                                  <h2 class="td-color"><a href="javascript:void(0)" class="icon"><i class="ti-close"></i></a></h2></div>
                          </div>
                      </td>
                      <td>
                          <h2>$63.00</h2></td>
                      <td>
                          <div class="qty-box">
                              <div class="input-group">
                                  <input type="number" name="quantity" class="form-control input-number" value="1">
                              </div>
                          </div>
                      </td>
                      <td><a href="javascript:void(0)" class="icon"><i class="ti-close"></i></a></td>
                      <td>
                          <h2 class="td-color">$4539.00</h2></td>
                  </tr>
                  </tbody> --}}

              </table>
              <table class="table cart-table table-responsive-md">
                  <tfoot>
                  <tr>
                      <td>total price :</td>
                      <td>
                          <h2>${{ $total }}</h2></td>
                  </tr>
                  </tfoot>
              </table>
          </div>
      </div>
      <div class="row cart-buttons">
          <div class="col-12"><a href="javascript:void(0)" class="btn btn-normal">continue shopping</a> <a href="javascript:void(0)" class="btn btn-normal ms-3">check out</a></div>
      </div>
  </div>
</section>
<!--section end-->


@endsection

<script src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
<script>
    function removeItem(pid) {
        $.ajax({
            type: 'post',
            url: "{{ Route('removeCart') }}",     // url?pid=3&quantity=1&_token=23423
            data: {
                pid: pid, 
                _token: '{{ csrf_token() }}',
            }, success: function(data) {
                // alert('update cart success.')
                location.reload();
            }
        });
    }
</script>