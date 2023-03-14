<x-admin-layout>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
      <div class="page-header">
          <div class="row">
              <div class="col-lg-6">
                  <div class="page-header-left">
                      <h3>Users
                          <small>DigiShop Admin panel</small>
                      </h3>
                  </div>
              </div>
              <div class="col-lg-6">
                  <ol class="breadcrumb pull-right">
                      <li class="breadcrumb-item"><a href="{{ Route('admin.index') }}"><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item active">Users</li>
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
                      <h5>Manage User</h5>
                  </div>
                  <div class="card-body order-datatable">
                      <table class="display" id="basic-1">
                          <thead>
                          <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Phone</th>
                              <th>Email</th>
                              <th>Address</th>
                              <th>Provider</th>
                              <th>Role</th>
                              <th>Date</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->provider }}</td>
                                    <td>{{ $user->is_admin ? 'Admin' : 'User'}}</td>
                                    <td>{{ $user->created_at }}</td>
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
