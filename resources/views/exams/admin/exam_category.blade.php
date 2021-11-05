@extends('admin.admin_master')
@section('title', 'Lionsfield | Exam Category')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
                  <h3 class="card-title">Category List</h3>

                  <div class="card-tools">
                    <a class="btn btn-info btn-sm" href="javascript:;" data-toggle="modal" data-target="#myModal">Add New</a>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover datatable" id="categoryTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th style="width: 10%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($category as $key => $cat)
                            <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $cat['name'] }}</td>
                            @if($cat['status'] == 1)
                            <td><input class="category_status" data-id="{{ $cat['id'] }}" type="checkbox" name="status" checked></td>
                            @else
                            <td><input class="category_status" data-id="{{ $cat['id'] }}"  type="checkbox" name="status"></td>
                            @endif
                                <td>
                                    <div class="float-right">
                                        <form method="get" action="{{ route('edit_category', $cat['id']) }}" style="display: inline;">
                                            @csrf
                                            @method('post')
                                        <button class="btn btn-primary btn-sm" type="submit">Edit</button>
                                        </form>
                                    <form method="get" action="{{ route('delete_category', $cat['id']) }}" style="display: inline;">
                                        @csrf
                                        {{-- @method('delete') --}}
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
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
            <h4 class="modal-title">Add New Category</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
        {{-- <form method="POST" action="{{ url('admin/add_new_category') }}" class="database_operation" data-ajax="false"> --}}
            <form method="POST" action="{{ route('add_new_category') }}" class="database_operation">
            @csrf
          <div class="row">
              <div class="col-sm-12">
                  <div class="form-group">
                      <label>Enter Category Name</label>
                      <input type="text" name="name" placeholder="Enter Category Name" class="form-control" required="required">
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                        {{-- <button type="submit" class="btn btn-primary">Add</button> --}}
                        <button class="btn btn-primary">Add Category</button>
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
      $('#categoryTable').DataTable();
  } );
  </script>
  @endsection
