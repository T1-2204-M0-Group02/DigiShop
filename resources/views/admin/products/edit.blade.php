<x-admin-layout>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Edit Product
                            <small>Digishop Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{ Route('admin.dashboard.index') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ Route('admin.products.index') }}">Product List</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div>
            </div>
        </div>
        <form action="{{ Route('admin.products.update',$product->id) }}" method="post" enctype="multipart/form-data" class="row product-adding">
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
                                <select id="category_id" name="category_id"class="custom-select form-control" required="">
                                    <option value="">--Select--</option>
                                    @foreach ($category as $category )
                                    <option value="{{ $category->id }}" selected="{{ $product->category_id === $category }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label"><span>*</span> Product Price</label>
                                <input name="price" class="form-control" id="validationCustom02" value="{{ $product->price }}"  type="number" required="">
                            </div>

                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label">Sale(%)</label>
                                <input name="sale" class="form-control" id="validationCustom03" value="{{ $product->sale }}" type="number" required="">
                            </div>
                            
                            <div class="form-group">
                                <label for="photo" class="col-form-label">Product Image</label>
                                <br>
                                <img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->image }}" width="60px" class="mb-2">
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
                                    <textarea id="editor1" name="description" cols="10" rows="4">
                                        {{ $product->description }}    
                                    </textarea> 
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="product-buttons text-center">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Container-fluid Ends-->

</x-admin-layout>