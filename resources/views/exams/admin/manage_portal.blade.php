@extends('admin.admin_master')
@section('title', 'Lionsfield | Manage Portal')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Portal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Manage Portal</li>
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
                  <h3 class="card-title">Portal List</h3>

                  <div class="card-tools">
                    <a class="btn btn-info btn-sm" href="javascript:;" data-toggle="modal" data-target="#myModal">Add New</a>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover datatable" id="portalTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($portal as $key => $p1)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $p1['name'] }}</td>
                                    <td>{{ $p1['email'] }}</td>
                                    <td>{{ $p1['mobile_no'] }}</td>
                                    <td>
                                        @if($p1['status']==1)
                                            <input data-id="{{ $p1['id'] }}" class="portal_status" type="checkbox"  name="status" checked></td>
                                        @else
                                            <input data-id="{{ $p1['id'] }}" class="portal_status" type="checkbox" name="status"></td>
                                        @endif
                                    <td>
                                        <a href="{{ route('edit_portal', $p1['id']) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ route('delete_portal', $p1['id']) }}"class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
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
      <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Add New Portal</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">

            <form method="POST" action="{{ route('add_new_portal') }}" class="database_operation">
            @csrf
       
          <div class="row">
              <div class="col-sm-12">
                  <div class="form-group">
                      <label>Enter Name</label>
                      <input type="text" name="name" placeholder="Enter Portal Name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Enter Email</label>
                    <input type="email" name="email" placeholder="Enter Email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Enter Phone Number(optional)</label>
                    <input type="text" name="mobile_no" placeholder="Enter Phone Number" class="form-control">
                </div>
                <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="password" placeholder="Enter Password" class="form-control">
                </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                        {{-- <button type="submit" class="btn btn-primary">Add</button> --}}
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
  <script>
    $(document).ready( function () {
      $('#portalTable').DataTable();
  } );
  </script>
  @endsection


