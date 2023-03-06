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
                        <div id="basicScenario" class="product-list digital-product"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    @php
        

    @endphp
    @section('myjs')
    <script>
        'use strict';
        (function() {
            var db = {
                loadData: function(filter) {
                    return $.grep(this.clients, function(client) {
                        return (!filter.Name || client.Name.indexOf(filter.Name) > -1)
                            && (!filter.Action || client.Action === filter.Action)
                            && (!filter.ProductCategory || client.ProductCategory.indexOf(filter.ProductCategory) > -1)
                            && (!filter.ProductsubCategory || client.ProductsubCategory === filter.ProductsubCategory)
                            && (filter.Married === undefined || client.Married === filter.Married);
                    });
                },
                insertItem: function(insertingClient) {
                    this.clients.push(insertingClient);
                },
                updateItem: function(updatingClient) { },

                deleteItem: function(deletingClient) {
                    var clientIndex = $.inArray(deletingClient, this.clients);
                    this.clients.splice(clientIndex, 1);
                }
            };

           
            window.db = db;
            db.clients = [
                {
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

    </script>
    @endsection
</x-admin-layout>

