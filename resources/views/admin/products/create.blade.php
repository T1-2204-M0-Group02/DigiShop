<x-admin-layout>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>ADD Product
                            <small>Digishop Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Digital</li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <div class="container-fluid">
          <form class="row product-adding" action="{{Route('admin.products.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>General</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <div class="form-group">
                                    <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Name</label>
                                    <input name="name" class="form-control" id="validationCustom01" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label"><span>*</span> Categories</label>
                                    <select id="category_id" name="category_id"class="custom-select form-control" required="">
                                        <option value="">--Select--</option>
                                        @foreach ($category as $item )
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            
                                <div class="form-group">
                                    <label for="validationCustom02" class="col-form-label"><span>*</span> Product Price</label>
                                    <input name="price" class="form-control" id="validationCustom02" type="number" required="" step="any" min="0">
                                </div>

                                <div class="form-group">
                                    <label for="validationCustom02" class="col-form-label">Sale(%)</label>
                                    <input name="sale" class="form-control" id="validationCustom03" type="number" required="" step="any" min="0">
                                </div>

                                <div class="form-group">
                                    <label for="photo" class="col-form-label">Product Image</label>
                                    <input id="photo" name="photo" type="file" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Add Description</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation mb-5">
                                <div class="form-group mb-0">
                                    <div class="description-sm">
                                        <textarea id="editor1" name="description" cols="10" rows="4"></textarea> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="product-buttons text-center">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </div>
</x-admin-layout>