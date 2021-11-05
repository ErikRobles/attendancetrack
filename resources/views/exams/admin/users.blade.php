@extends('layouts.app')
@section('title', 'Lionsfield | Manage Students')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    @include('layouts.messages')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Manage Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Registered Users List</h3>
                  <div class="card-tools">
                    <a class="btn bg-purple text-white btn-sm" href="javascript:;" data-toggle="modal" data-target="#myModal">Add New</a>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover datatable" id="dataTables-example1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                           <tr>
                           <td>{{ $user['id'] }}</td>
                           <td>{{ $user['name'] }}</td>
                           <td>{{ $user['email'] }}</td>
                           <td>{{ $user['role_as'] }}</td>
                           <td>
                            <a href="{{ url('admin/edit_user/'. $user['id']) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ url('admin/delete_user/' . $user['id']) }}" class="btn btn-danger btn-sm">Delete</a>
                           </td>
                           </tr>
                           @endforeach
                        {{-- @endforeach --}}
                        </tbody>
                        <tfoot>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->

                <!-- /.card-footer-->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>

    <!-- /.content-header -->

      <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Add New User</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('admin/add_new_user') }}" class="database_operation">
            {{ csrf_field() }}
        {{ method_field('POST') }}
          <div class="row">
              <div class="col-sm-12">
                  <div class="form-group">
                      <label>Enter User Name</label>
                      <input type="text" name="name" placeholder="Enter User Name" class="form-control" required="required">
                  </div>
                  <div class="form-group">
                    <label>Enter User Email</label>
                    <input type="email" name="email" placeholder="Enter User Email" class="form-control" required="required">
                </div>
                  <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="password" placeholder="Enter Password" class="form-control" required="required">
                </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add</button>

                    </div>
                  </div>

              </div>
          </div>
        </form>
        </div>

      </div>

    </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
  @endsection


