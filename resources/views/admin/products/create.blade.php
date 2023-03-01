<x-admin-layout>
    <div class="container-fluid">
        <div class="row product-adding">
            <form action="{{ Route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="validationCustomtitle" class="col-form-label pt-0"><span>*</span> Slug</label>
                                    <input name="slug" class="form-control" id="validationCustomtitle" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label"><span>*</span> Categories</label>
                                    <select name="category_id   " class="custom-select form-control" required="">
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
                                {{-- <form  class="dropzone digits" id="singleFileUpload" action="/upload.php">
                                    <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                                        <h4 class="mb-0 f-w-600">Drop files here or click to upload.</h4>
                                    </div>
                                </form> --}}
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
                                        <input type="text" name="description">
                                        
                                        {{-- <textarea id="editor1" name="editor1" cols="10" rows="4"></textarea> --}}
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
        
    </div>
</x-admin-layout>