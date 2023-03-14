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
                              <th>Payment Status</th>
                              <th>Payment Method</th>
                              <th>Order Status</th>
                              <th>Date</th>
                              <th>Total</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td>#51240</td>
                              <td>
                                  <div class="d-flex">
                                      <img src="{{ asset('assets/images/layout-1/product/1.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                  </div>
                              </td>
                              <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                              <td>Paypal</td>
                              <td><span class="badge badge-success">Delivered</span></td>
                              <td>Dec 10,18</td>
                              <td>$54671</td>
                          </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Container-fluid Ends-->
</x-admin-layout>
