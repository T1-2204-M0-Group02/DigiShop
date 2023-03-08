<x-admin-layout>\
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
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>    
                </div>
            </div>
        </div>
        <form action="{{ Route('admin.products.update',$product->id) }}" method="post" class=" card-body">
            @csrf
            @method('put')  
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>General</h5>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Name</label>
                                <input name="name" class="form-control" id="validationCustom01" value="{{ $product->name }}" type="text" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"><span>*</span> Categories</label>
                                <select id="category_id" value="{{ $product->category }}" name="category_id"class="custom-select form-control" required="">
                                    <option value="">--Select--</option>
                                   @foreach ($category as $item )
                                
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                         
                                   @endforeach
                                        </select>
                    </div>
                        
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label"><span>*</span> Product Price</label>
                                <input name="price" class="form-control" id="validationCustom02" value="{{ $product->price }}"  type="number" required="">
                            </div>
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label"><span>*</span> Sale(%)</label>
                                <input name="sale" class="form-control" id="validationCustom03" value="{{ $product->sale }}" type="number" required="">
                            </div>
                        
                            <label class="col-form-label pt-0"> Product Upload</label>
                            <input type="file" value="{{ $product->image }}" name="images">
                            
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="Update" class="btn btn-success">
            
        </form>
    </div>
    <!-- Container-fluid Ends-->

</x-admin-layout>