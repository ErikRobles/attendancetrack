@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper p-3">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add User Information</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('admin.pages.users.store') }}" method="post"  autocomplete="off">
            @csrf
           
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter User Name" autocomplete="off" value="{{ old('name') }}">
                          </div>
                    </div><!--End col md 6-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email" autocomplete="off" value="{{ old('email') }}">
                          </div>
                    </div><!--End col md 6-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password Min 8 Characters & Must contain 1 Uppercase Letter 1 Number and a symbol '@#*!()%+' etc."  autocomplete="new-password">
                            <div class="alert-danger"> {{ $errors->first('password') }}</div>
                          </div>
                    </div><!--End col md 6-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" class="custom-select">
                                <option value="">Please Select Role</option>
                                <option value="Admin">Admin</option>
                                <option value="Teacher">Teacher</option>
                            </select>
                          </div>
                </div><!--End Row-->

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Add User</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

    </div>
</div>
</div>
@endsection