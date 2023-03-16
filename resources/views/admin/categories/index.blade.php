<x-admin-layout>
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Category
                                <small>DigiShop Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="{{ Route('admin.index') }}"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item active">Category</li>
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
                            <h5>Categories</h5>
                        </div>
                        <div class="card-body">

                            <form class="mb-3" action="{{ Route('admin.categories.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="category-image" class="form-label">Category Image</label>
                                        <input id="photo" name="photo" class="form-control" type="file">
                                    </div>
                                    <div class="col">
                                        <label for="name" class="form-label">Category name</label>
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="col d-flex">
                                        <button type="submit" class="btn btn-secondary mt-auto mb-3">Add Category</button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <div id="basicScenario" class="product-physical jsgrid"
                                     style="position: relative; height: auto; width: 100%;">
                                    <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                        <table class="jsgrid-table">
                                            <tbody>
                                            <tr class="jsgrid-header-row">
                                                <th class="jsgrid-header-cell jsgrid-header"
                                                    style="width: 50px;">ID
                                                </th>
                                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header"
                                                    style="width: 50px;">Image
                                                </th>
                                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header"
                                                    style="width: 100px;">Categories
                                                </th>
                                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header" style="width: 30px;"></th>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="jsgrid-grid-body">
                                        <table class="jsgrid-table">
                                            <tbody>
                                            @foreach($categories as $category)
                                            <tr class="jsgrid-row jsgrid-selected-row ">
                                                <td class="jsgrid-cell" style="width: 50px;">{{ $category->id }}</td>
                                                <td class="jsgrid-cell" style="width: 50px;">
                                                    @if (!empty($category->image))
                                                        <img src="{{ asset('images/categories/' .$category->image) }}" alt="{{ $category->name }}" style="width:100px; height:auto;">
                                                    @endif
                                                </td>
                                                <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">{{ $category->name }}</td>
                                                <td class="jsgrid-cell jsgrid-align-center" style="width: 30px;">
                                                    <form action="{{ Route('admin.categories.destroy', $category->id) }}" method="post" style="display:inline-block">
                                                        @csrf
                                                        @method("delete")
                                                        <button type="submit" class="btn " style="padding: 0.2rem 0.5rem;">
                                                            <i data-feather="trash-2" style="width: 20px; height: 20px; color: black;"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                        
                                        </table>
                                    </div>
                                    @if(Session::has('message'))
                                        <div class="text-end">{{ Session::get('message') }}</div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
</x-admin-layout>
