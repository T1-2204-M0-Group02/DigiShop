
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
                    <div class="card-body">
                        <div id="basicScenario" class="product-list digital-product jsgrid"
                            style="position: relative; height: auto; width: 100%;">
                            <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                <table class="jsgrid-table">
                                    <tbody>
                                        <tr class="jsgrid-header-row">
                                            <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable"
                                                style="width: 30px;">Id</th>
                                            <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                                style="width: 50px;">Image</th>
                                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">
                                                Product Title</th>
                                            <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable"
                                                style="width: 30px;">Sale(%)</th>
                                            <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable"
                                                style="width: 50px;">Price</th>
                                            <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable"
                                                style="width: 50px;">Action</th>
                                           
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="jsgrid-grid-body">
                                <table class="jsgrid-table">
                                    <tbody>
                                        @foreach ($prods as $item )

                                        <tr class="jsgrid-row">
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 30px;">{{$item->id  }}</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;">
                                                @if (!empty($item->image))
                                                <img src="{{ asset('images/' .$item->image) }}" alt="{{ $item->name }}" style="height: 50px; width: 50px;">
                                                @endif
                                            </td>
                                            <td class="jsgrid-cell" style="width: 100px;">{{$item->name }}</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 30px;">{{ $item->sale }}</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">{{ $item->price }}</td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                                <a href="{{ Route('admin.products.edit',$item->id) }}">
                                                    <button  class="jsgrid-button jsgrid-edit-button" type="edit"></button>
                                                </a>
                                                <form action="{{ Route('admin.products.destroy', $item->id) }}" method="post" style="display:inline-block">
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
        </div>
    </div>
    <!-- Container-fluid Ends-->
    @php
        
    @endphp
     @section('myjs')
        {{-- <script>
            'use strict';
            (function() {
                var db = {
                    loadData: function(filter) {
                        return $.grep(this.clients, function(client) {
                            return (!filter.Name || client.Name.indexOf(filter.Name) > -1) &&
                                (!filter.Action || client.Action === filter.Action) &&
                                (!filter.ProductCategory || client.ProductCategory.indexOf(filter
                                    .ProductCategory) > -1) &&
                                (!filter.ProductsubCategory || client.ProductsubCategory === filter
                                    .ProductsubCategory) &&
                                (filter.Married === undefined || client.Married === filter.Married);
                        });
                    },
                    insertItem: function(insertingClient) {
                        this.clients.push(insertingClient);
                    },
                    updateItem: function(updatingClient) {},

                    deleteItem: function(deletingClient) {
                        var clientIndex = $.inArray(deletingClient, this.clients);
                        this.clients.splice(clientIndex, 1);
                    }
                };


                window.db = db;
                db.clients = [{
                        "Id": "{{ 1 }}",
                        "Product": "../assets/images/digital-product/web-dev.jpg",
                        "Product Title": "Websites",
                        "Entry Type": "Add",
                        "Sale(%)": "10",
                        "Quantity": "5",
                    },

                    {
                        "Id": "{{ 2 }}",
                        "Product": "../assets/images/layout-4/r7.png",
                        "Product Title": "realme",
                        "Entry Type": "Add",
                        "Sale(%)": "10",
                        "Quantity": "5",
                    }

                ];

            }());
        </script> --}}
    @endsection
</x-admin-layout>
