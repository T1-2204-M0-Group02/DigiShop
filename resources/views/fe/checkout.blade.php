
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
        <div class="checkout-page contact-page">
            <div class="checkout-form">
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Billing Details</h3></div>
                            <div class="theme-form">
                                <div class="row check-out ">

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label>First Name</label>
                                        <input required type="text" name="field-name" value="" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label>Last Name</label>
                                        <input required type="text" name="field-name" value="" placeholder="Last Name">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Phone</label>
                                        <input required pattern="[0-9]{10}" type="text" name="field-name" value="" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Email Address</label>
                                        <input required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="text" name="field-name" value="" placeholder="Email Address">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="field-label">Country</label>
                                        <select>
                                            <option>Vietnam</option>
                                            <option>India</option>
                                            <option>South Africa</option>
                                            <option>United State</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="field-label">Address</label>
                                        <input required type="text" name="field-name" value="" placeholder="Street address">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="field-label">Town / City</label>
                                        <input required type="text" name="field-name" value="" placeholder="Town / City">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <label class="field-label">State / County</label>
                                        <input required type="text" name="field-name" value="" placeholder="State / County">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <label class="field-label">Postal Code</label>
                                        <input required type="text" name="field-name" value="" placeholder="Postal Code">
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="checkbox" name="shipping-option" id="account-option"> &ensp;
                                        <label for="account-option">Create An Account?</label>
                                    </div>

                                    <input type="submit" value="Continue to checkout" class="btn">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-details theme-form  section-big-mt-space">
                                <div class="order-box">
                                    <div class="title-box">
                                        <div>Product <span>Price</span></div>
                                    </div>
                                    <ul class="qty">
                                        {{-- <li>Pink Slim Shirt × 1 <span>$25.10</span></li> --}}
                                        {{-- <li>SLim Fit Jeans × 1 <span>$555.00</span></li> --}}
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
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- section end -->

@endsection
