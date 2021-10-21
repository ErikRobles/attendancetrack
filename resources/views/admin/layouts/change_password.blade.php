@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper p-3">
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Change Password</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('password.update') }}" method="post">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputPassword1">Current Password</label>
                <input type="password" name="oldpassword" class="form-control" id="current_password" placeholder="Current Password">
                @error('oldpassword') 
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
              <div class="form-group">
                <label for="exampleInputPassword1">New Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="New Password">
                @error('password') 
                    <span class="text-danger">{{ $message }}</span>
                @enderror  
            </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password">
                @error('password_confirmation') 
                    <span class="text-danger">{{ $message }}</span>
                @enderror  
            </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Change Password</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (left) -->
    </div>
    <!-- /.row -->
  </div>
</div><!--end main container div-->
@endsection