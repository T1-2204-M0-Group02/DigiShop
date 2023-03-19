
<x-admin-layout>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Product List
                            <small>DigiShop Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{ Route('admin.index') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Product List</li>
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
                        <h5>Product List</h5>
                    </div>
                    <div class="card-body order-datatable">
                      <table class="display jsgrid" id="basic-1">
                          <thead>
                          <tr>
                              <th>Product Id</th>
                              <th>Product Image</th>
                              <th>Product Name</th>
                              <th>Created At</th>
                              <th>Price</th>
                              <th>Sale(%)</th>
                              <th>Current Price</th>
                              <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach ($prods as $item )
                            <tr>
                                <td>{{$item->id  }}</td>
                                <td>
                                    @if (!empty($item->image))
                                    <img src="{{ asset('images/products/' .$item->image) }}" alt="{{ $item->name }}" style="height: 50px; width: 50px;">
                                    @endif
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->sale }}</td>
                                <td>{{ $item->getCurrentPrice() }}</td>
                                <td>
                                    <a href="{{ Route('admin.products.edit',$item->id) }}">
                                        <button  class="jsgrid-button jsgrid-edit-button" type="edit"></button>
                                    </a>
                                    <form action="{{ Route('admin.products.destroy', $item->id) }}" 
                                        method="post" style="display:inline-block">
                                        @csrf
                                        @method("delete")
                                        <button
                                        class="jsgrid-button jsgrid-delete-button"
                                        type="submit"
                                        title="Delete"></button>
                                    </form>
                                </td>
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
