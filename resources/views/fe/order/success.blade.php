@extends('fe.layout')

@section('contents')

<!-- thank-you section start -->
<section class="section-big-py-space light-layout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true"></i>
                    <h2>thank you</h2>
                    <p>Payment is successfully processsed and your order is on the way</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->


<!-- order-detail section start -->
<section class="section-big-py-space mt--5 b-g-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-order">
                    <h3>your order details</h3>
                    <div class="row product-order-detail">
                        <?php
                            $total = 0;

                            if (isset($ord)) {
                                $total = $ord->total();
                                foreach($ord->details as $item) {
                                    ?>
                                        <div class="row product-order-detail">
                                            <div class="col-3"><img src="{{ asset('images/products/'.$item->product->image ) }}" alt="{{ $item->product->name }}" class="img-fluid "></div>
                                            <div class="col-3 order_detail">
                                                <div>
                                                    <h4>product name</h4>
                                                    <h5>{{$item->product->name}}</h5></div>
                                            </div>
                                            <div class="col-3 order_detail">
                                                <div>
                                                    <h4>quantity</h4>
                                                    <h5>{{$item->quantity}}</h5></div>
                                            </div>
                                            <div class="col-3 order_detail">
                                                <div>
                                                    <h4>price</h4>
                                                    <h5>${{$item->product->getCurrentPrice()}}</h5></div>
                                            </div>
                                        </div>
                                    <?php
                                }
                            } else {
                                ?>

                                <li>No products</li>
                                <?php

                            }
                        ?>

                    </div>
                    <div class="total-sec">
                        <ul>
                            <li>subtotal <span>$ {{ number_format($total, 2) }}</span></li>
                        </ul>
                    </div>
                    <div class="final-total">
                        <h3>total <span>$ {{ number_format($total, 2) }}</span></h3></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row order-success-sec">
                    @if (isset($ord))
                    <div class="col-sm-6">
                        <h4>summary</h4>
                        <ul class="order-detail">
                            <li>order ID: {{ $ord->id }}</li>
                            <li>Order Date: {{ $ord->created_at->format('M d, Y') }}</li>
                            <li>Order Total: $ {{number_format($total, 2)}}</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h4>shipping information</h4>
                        <ul class="order-detail">
                            <li>Name: {{ $ord->shipping_name }}</li>
                            <li>Phone: {{ $ord->shipping_phone }}</li>
                            <li>Email: {{ $ord->shipping_email }}</li>
                            <li>Address: {{ $ord->shipping_address }}</li>
                        </ul>
                    </div>
                    <div class="col-sm-12 payment-mode">
                        <h4>payment method</h4>
                        <p>Cash on delivery (COD).</p>
                    </div>
                    <div class="col-md-12">
                        <div class="delivery-sec">
                            <h3>expected date of delivery</h3>
                            <h2>{{ $ord->shipping_time->format('M d, Y') }}</h2></div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->
@endsection
