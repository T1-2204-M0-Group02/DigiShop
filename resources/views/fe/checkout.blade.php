
@extends('fe.layout')

@section('contents')
<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>checkout</h2>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
<section class="section-big-py-space b-g-light">
    <div class="custom-container">
        <div class=" main-content-area">
            <?php
            $total = 0;

            if (Session::has('cart')) {
                foreach(Session::get('cart') as $item) {
                    $total += $item->quantity * $item->product->price;
                }
            }
            ?>
            <form action="{{ Route('processCheckout') }}" method="post" name="frm-billing">
              @csrf
            <div class="wrap-address-billing">
              <h3 class="box-title">Billing Address</h3>
              
                <p class="row-in-form">
                  <label for="name">Name<span>*</span></label>
                  <input id="name" type="text" name="shipping_name" value="" placeholder="Your name">
                </p>
                <p class="row-in-form">
                  <label for="email">Email Addreess:</label>
                  <input id="email" type="email" name="shipping_email" value="" placeholder="Type your email">
                </p>
                <p class="row-in-form">
                  <label for="phone">Phone number<span>*</span></label>
                  <input id="phone" type="number" name="shipping_phone" value="" placeholder="10 digits format">
                </p>
                <p class="row-in-form">
                  <label for="add">Address:</label>
                  <input id="add" type="text" name="shipping_address" value="" placeholder="Street at apartment number">
                </p>
            </div>
            <div class="summary summary-checkout">
              <div class="summary-item payment-method">
                <h4 class="title-box">Payment Method</h4>
                <p class="summary-info"><span class="title">Check / Money order</span></p>
                <p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
                <div class="choose-payment-methods">
                  <label class="payment-method">
                    <input name="payment-method" id="payment-method-bank" value="bank" type="radio">
                    <span>COD</span>
                  </label>
                  <label class="payment-method">
                    <input name="payment-method" id="payment-method-visa" value="visa" type="radio">
                    <span>visa</span>
                  </label>
                  <label class="payment-method">
                    <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
                    <span>Paypal</span>
                  </label>
                </div>
                <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">{{$total}}đ</span></p>
                <button type="submit" class="btn btn-medium">Place order now</button>
              </div>
              <div class="summary-item shipping-method">
                <h4 class="title-box f-title">Shipping method</h4>
                <p class="summary-info"><span class="title">Flat Rate</span></p>
                <p class="summary-info"><span class="title">Fixed $50.00</span></p>
                {{-- <h4 class="title-box">Discount Codes</h4>
                <p class="row-in-form">
                  <label for="coupon-code">Enter Your Coupon code:</label>
                  <input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">	
                </p>
                <a href="#" class="btn btn-small">Apply</a> --}}
              </div>
            </div>
            </form>
        </div>
        <div class="checkout-page contact-page">
            <div class="checkout-form">
                <form>
                    <div class="row">

                        {{-- <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-details theme-form  section-big-mt-space">
                                <div class="order-box">
                                    <div class="title-box">
                                        <div>Product <span>Price</span></div>
                                    </div>
                                    <ul class="qty">
                                        {{-- <li>Pink Slim Shirt × 1 <span>$25.10</span></li>
                                        {{-- <li>SLim Fit Jeans × 1 <span>$555.00</span></li>
                                        <?php
                                        $total = 0;

                                        if (Session::has('cart')) {
                                            foreach(Session::get('cart') as $item) {
                                                $total += $item->quantity * $item->product->price;
                                                ?>
                                                <li>{{$item->product->name}} x {{ $item->quantity }} <span>${{ $item->product->price }}</span></li>
                                                <?php
                                            }
                                        } else {
                                            ?>

                                            <li>No products</li>
                                            <?php

                                        }
                                        ?>
                                    </ul>
                                    <ul class="sub-total">
                                        <li>Subtotal <span class="count">${{ $total }}</span></li>
                                        <li>Shipping
                                            <div class="shipping">
                                                <div class="shopping-option">
                                                    <input type="checkbox" name="free-shipping" id="free-shipping">
                                                    <label for="free-shipping">Free Shipping</label>
                                                </div>
                                                <div class="shopping-option">
                                                    <input type="checkbox" name="local-pickup" id="local-pickup">
                                                    <label for="local-pickup">Local Pickup</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="total">
                                        <li>Total <span class="count">${{ $total }}</span></li>
                                    </ul>
                                </div>
                                <div class="payment-box">
                                    <div class="upper-box">
                                        <div class="payment-options">
                                            <ul>
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-1" checked="checked">
                                                        <label for="payment-1">Check Payments<span class="small-text">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-2">
                                                        <label for="payment-2">Cash On Delivery<span class="small-text">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option paypal">
                                                        <input type="radio" name="payment-group" id="payment-3">
                                                        <label for="payment-3">PayPal</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-right"><a href="{{ Route("ordersuccess") }}" class="btn-normal btn">Place Order</a></div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- section end -->

@endsection
