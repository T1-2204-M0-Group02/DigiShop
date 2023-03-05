<x-admin-layout>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>ADD Product
                            <small>Bigdeal Admin panel</small>
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
          <form class="row product-adding" action="{{Route('admin.products.store')}}" method="put" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                                    <label for="validationCustomtitle" class="col-form-label pt-0"><span>*</span> Slug</label>
                                    <input name="slug" class="form-control" id="validationCustomtitle" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label"><span>*</span> Categories</label>
                                    <select name="category_id"class="custom-select form-control" required="">
                                        <option value="">--Select--</option>
                                        <option value="1">eBooks</option>
                                        <option value="2">Graphic Design</option>
                                        <option value="3">3D Impact</option>
                                        <option value="4">Application</option>
                                        <option value="5">Websites</option>
                                            </select>
                        </div>
                            
                                <div class="form-group">
                                    <label for="validationCustom02" class="col-form-label"><span>*</span> Product Price</label>
                                    <input name="price" class="form-control" id="validationCustom02" type="text" required="">
                                </div>
                            
                                <label class="col-form-label pt-0"> Product Upload</label>
                                <input type="file" name="photo">
                                
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
                                    <button type="button" class="btn btn-light">Discard</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </form>
    </div>
</x-admin-layout>