@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper p-3">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit User Information</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('admin.pages.users.update', $allData->id) }}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Name</label>
                            <input type="text" name="name" value="{{ $allData->name }}" class="form-control" placeholder="Enter User Name">
                          </div>
                    </div><!--End col md 6-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" value="{{ $allData->email }}" class="form-control" placeholder="Enter email">
                          </div>
                    </div><!--End col md 6-->
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" class="custom-select">
                                <option value="">Please Select Role</option>
                                <option value="Admin" {{ ($allData->role == 'Admin') ? "selected" : "" }}>Admin</option>
                                <option value="Teacher" {{ ($allData->role == 'Teacher') ? "selected" : "" }}>Teacher</option>
                            </select>
                          </div>
                </div><!--End Row-->

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Edit User</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

    </div>
</div>
</div>
@endsection