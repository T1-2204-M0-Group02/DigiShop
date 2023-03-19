@extends('fe.layout')

@section('contents')

<body class="b-g-light">


<!-- breadcrumb start -->
<div class="breadcrumb-main">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>orders</h2>
                        <ul>
                            <li><a href="{{ Route('home') }}">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="{{ Route('orders') }}">orders</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="cart-section order-history section-big-py-space">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">product</th>
                        <th scope="col">description</th>
                        <th scope="col">price</th>
                        <th scope="col">detail</th>
                        <th scope="col">status</th>
                    </tr>
                    </thead>
                    @if($orders->isEmpty())
                    <tbody>
                        <tr>
                            <td>No Orders yet, go <a href="{{ Route('products') }}">shop</a> now!</td>
                        </tr>
                    </tbody>
                    @else
                    @foreach ($orders as $order)
                    <tbody>
                    @foreach ($order->details as $detail)
                    <tr>
                        <td>
                            <a href="{{ Route('product.details', $detail->product->slug) }}"><img src="{{ asset('images/products/'.$detail->product->image) }}" alt="product" class="img-fluid  "></a>
                        </td>
                        <td><a href="{{ Route('product.details', $detail->product->slug) }}">order no: <span class="dark-data">{{ $order->id }}</span> <br>{{ $detail->product->name }}</a>
                        </td>
                        <td>
                            <h4>$ {{ $detail->price }}</h4></td>
                        <td>
                            <span>Quantity: {{ $detail->quantity }}</span>
                        </td>
                        <td>
                            <div class="responsive-data">
                                <h4 class="price">$ {{ $detail->price }}</h4>
                                <span>Quantity: {{ $detail->quantity }}</span>
                            </div>
                            <span class="dark-data">{{ $order->getStatusString($order->status) }}</span> {{ $order->shipping_time->format('M d, Y') }}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    @endforeach
                    @endif
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-12 pull-right"><a href="{{ Route('products') }}" class="btn btn-normal btn-sm">shop more</a></div>
        </div>
    </div>
</section>
<!--section end-->

@endsection