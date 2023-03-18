<x-admin-layout>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Orders
                        <small>Bigdeal Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{ Route('admin.index') }}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Orders</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Manage Order</h5>
                </div>
                <div class="card-body order-datatable">
                    <table class="display" id="basic-1">
                        <thead>
                        <tr>
                            <th>Order Id</th>
                            <th>Product</th>
                            <th>Shipping Name</th>
                            <th>Shipping Phone</th>
                            <th>Shipping Email</th>
                            <th>Shipping Address</th>
                            <th>Order Status</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td>#{{ $order->id }}</td>
                                <td>
                                    <div class="d-flex">
                                        @foreach ($order->details as $detail)
                                        <img src="{{ asset('images/products/'.$detail->product->image) }}" alt="{{ $detail->product->name }}" class="img-fluid img-30 me-2 ">
                                        @endforeach
                                    </div>
                                </td>
                                <td>{{ $order->shipping_name }}</td>
                                <td>{{ $order->shipping_phone }}</td>
                                <td>{{ $order->shipping_email }}</td>
                                <td>{{ $order->shipping_address }}</td>
                                <td>{{ $order->status->value }}</td>
                                <td>{{ $order->created_at }}</td>
                            </tr>   
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
</x-admin-layout>
