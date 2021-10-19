@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper p-3">
<h1>All Users</h1>
<div class="row">
    <div class="col-12">
        <a href="{{ route('admin.pages.users.user_add') }}" class="btn btn-success btn-rounded mb-3">Add User</a>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Registered Users</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>User</th>
                <th>Role</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ date('m-d-Y', strtotime($user->created_at)) }}</td>
                <td>
                    <a href="{{ route('admin.pages.users.edit_user', $user->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.pages.users.delete', $user->id) }}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
@endsection