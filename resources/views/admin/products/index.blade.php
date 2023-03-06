
<x-admin-layout>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Product List
                            <small>Bigdeal Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Digital</li>
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
                        <h5>Product Lists</h5>
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
                                                style="width: 50px;">Product</th>
                                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">
                                                Product Title</th>
                                            <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable"
                                                style="width: 30px;">Sale(%)</th>
                                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 50px;">
                                                Entry Type</th>
                                            <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable"
                                                style="width: 50px;">Quantity</th>
                                            <th class="jsgrid-header-cell jsgrid-control-field jsgrid-align-center"
                                                style="width: 50px;"><input
                                                    class="jsgrid-button jsgrid-mode-button jsgrid-insert-mode-button"
                                                    type="button" title="Switch to inserting" fdprocessedid="4xahf">
                                            </th>
                                        </tr>
                                        <tr class="jsgrid-filter-row" style="display: table-row;">
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 30px;"><input
                                                    type="number"></td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"></td>
                                            <td class="jsgrid-cell" style="width: 100px;"><input type="text"></td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 30px;"><input
                                                    type="number"></td>
                                            <td class="jsgrid-cell" style="width: 50px;"><input type="text"></td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;"><input
                                                    type="number"></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center"
                                                style="width: 50px;"><input class="jsgrid-button jsgrid-search-button"
                                                    type="button" title="Search"><input
                                                    class="jsgrid-button jsgrid-clear-filter-button" type="button"
                                                    title="Clear filter"></td>
                                        </tr>
                                        <tr class="jsgrid-insert-row" style="display: none;">
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 30px;"><input
                                                    type="number"></td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><input
                                                    type="file"></td>
                                            <td class="jsgrid-cell" style="width: 100px;"><input type="text"></td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 30px;"><input
                                                    type="number"></td>
                                            <td class="jsgrid-cell" style="width: 50px;"><input type="text"></td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;"><input
                                                    type="number"></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center"
                                                style="width: 50px;"><input class="jsgrid-button jsgrid-insert-button"
                                                    type="button" title="Insert"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="jsgrid-grid-body">
                                <table class="jsgrid-table">
                                    <tbody>
                                        <tr class="jsgrid-row">
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 30px;">1</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><img
                                                    src="../assets/images/digital-product/web-dev.jpg"
                                                    style="height: 50px; width: 50px;"></td>
                                            <td class="jsgrid-cell" style="width: 100px;">Websites</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 30px;">10</td>
                                            <td class="jsgrid-cell" style="width: 50px;">Add</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">5</td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center"
                                                style="width: 50px;"><input class="jsgrid-button jsgrid-edit-button"
                                                    type="button" title="Edit" fdprocessedid="fbst8k"><input
                                                    class="jsgrid-button jsgrid-delete-button" type="button"
                                                    title="Delete" fdprocessedid="f7hf49"></td>
                                        </tr>
                                     
                                    </tbody>
                                      @foreach ($prods as $item )
                                      {{ $item }}
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->slug }}</td>
                                            <td>{{ $item->catetory }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->description}}</td>
                                        </tr>
                                    @if (!empty($item->product))
                                      <img src="{{ asset('images/' .$item->product) }}" alt="{{ $item->name }}" style="width:30px; height:auto;">
                                    @endif
                                    @endforeach
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
