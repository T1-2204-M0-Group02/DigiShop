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
                          <li><a href="{{ Route('home') }}">home</a></li>
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
                                $total += $item->quantity * $item->product->getCurrentPrice();
                                ?>
                                    <tbody id="tbody_{{ $item->product->id }}">
                                    <tr>
                                        <td>
                                            <a href="{{ Route('product.details', $item->product->slug) }}"><img src="{{ asset('images/products/'.$item->product->image) }}" alt="{{ $item->product->name }}"  class=" "></a>
                                        </td>
                                        <td><a href="{{ Route('product.details', $item->product->slug) }}">{{ $item->product->name }}</a>
                                            <div class="mobile-cart-content flex-column">
                                                <div class="col-xs-3">
                                                    <div class="qty-box">
                                                        <div class="input-group">
                                                            <div class="qty-box qty-input">
                                                                <div class="input-group">
                                                                <button class="qty-minus qty-btn"></button>
                                                                <input class="qty-adj form-control" type="number" name="product-quantity" data-id="{{ $item->product->id }}" class="form-control input-number" min="1" value="{{ $item->quantity }}" disabled/>
                                                                <button class="qty-plus qty-btn"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-3">
                                                    <h2 class="td-color">$ {{ number_format($item->product->getCurrentPrice(), 2) }}</h2>
                                                </div>
                                                <div class="col-xs-3">
                                                    <h2 class="td-color">
                                                        <div class="delete">
                                                            <button  class="btn btn-delete" id="{{ $item->product->id }}" onclick="removeItem(this.id)"><i class="ti-close"></i></button>
                                                        </div>
                                                    </h2>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h2>$ <span id="price">{{ number_format($item->product->getCurrentPrice(), 2) }}</span></h2>
                                        </td>
                                        <td>
                                            <div class="qty-box">
                                                <div class="input-group qty-input">
                                                    <button class="qty-minus qty-btn"></button>
                                                    <input class="qty-adj form-control" type="number" name="product-quantity" class="form-control input-number" min="1" value="{{ $item->quantity }}" data-id="{{ $item->product->id }}" disabled/>
                                                    <button class="qty-plus qty-btn"></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="delete">
                                                <button class="btn btn-delete" id="{{ $item->product->id }}" onclick="removeItem(this.id)"><i class="ti-close"></i></button>
                                              </div>
                                        </td>
                                        <td>
                                            <h2 class="td-color">$ <span class="product-total-price">{{ number_format($item->product->getCurrentPrice() * $item->quantity, 2) }}</span></h2>
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
              </table>
              <table class="table cart-table table-responsive-md">
                  <tfoot>
                  <tr>
                      <td>total price :</td>
                      <td>
                          <h2 >$ <span id="total-price">{{ number_format($total, 2) }}</span></h2></td>
                  </tr>
                  </tfoot>
              </table>
          </div>
      </div>
      <div class="row cart-buttons">
          <div class="col-12">
            <a href="{{ Route('clearCart') }}" class="btn btn-normal me-3">Clear Cart</a>
            <a href="{{ Route('products') }}" class="btn btn-normal">continue shopping</a>
            <a href="{{ Route('checkout') }}" class="btn btn-normal ms-3">check out</a>
        </div>
      </div>
  </div>
</section>
<!--section end-->

@endsection

@section('myjs')
<script>
    function removeItem(pid) {
        $.ajax({
            type: 'post',
            url: "{{ Route('removeCart') }}",
            data: {
                pid: pid, 
                _token: '{{ csrf_token() }}',
            }, success: function(data) {
                $('.item-count-contain')[0].innerHTML = data.cart.length;
                $(`#tbody_${pid}`).remove();
                $('#total-price')[0].innerHTML = formatNumber(data.total);
            }
        });
    }

    $(".qty-input").on('click', '.qty-btn', function() {
        event.preventDefault();
        var _this = $(this),
            _input = _this.siblings('input[name=product-quantity]');
        let pid = _input.data('id');
        let quantity = _input.val();
        
        $.ajax({
            type: 'post',
            url: "{{ Route('changeCart') }}",
            data: {
                pid: pid,
                quantity: quantity,
                _token: '{{ csrf_token() }}'
            },
            success: function (data) {
                $(`#tbody_${pid} .product-total-price`)[0].innerHTML = formatNumber(data.subtotal);
                $('#total-price')[0].innerHTML = formatNumber(data.total);
            }
        });
    })

    function formatNumber(number)
    {
        number = number.toFixed(2) + '';
        x = number.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
</script>
@endsection