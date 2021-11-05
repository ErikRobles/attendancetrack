@extends('layouts.app')
@section('title', 'Lionsfield | Manage Users')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    @include('layouts.messages')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Edit User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <div class="card-tools">

                  </div>
                </div>
                <div class="card-body">
                    <form method="get" action="{{ url('admin/edit_user_sub') }}" class="database_operation">
                        {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <input type="hidden" name="id" value="{{ $user['id'] }}">
                      <div class="row">
                          <div class="col-sm-12">
                              <div class="form-group">
                                  <label>Enter User Name</label>
                              <input type="text" value="{{ $user->name }}" name="name" placeholder="Enter User Name" class="form-control" required="required">
                              </div>
                              <div class="form-group">
                                <label>Enter User Email</label>
                              <input type="email" value="{{ $user->email }}" name="email" placeholder="Enter User Email" class="form-control" required="required">
                            </div>
                              <div class="form-group">
                                <label>Enter Password</label>
                                <input type="password" name="password" placeholder="Enter Password" class="form-control">
                            </div>
                              <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                              </div>

                          </div>
                      </div>
                    </form>
                </div>
                <!-- /.card-body -->

                <!-- /.card-footer-->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>
  </div>
  <!-- /.content-wrapper -->
  @endsection


