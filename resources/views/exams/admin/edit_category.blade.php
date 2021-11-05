@extends('admin.admin_master')
@section('title', 'Lionsfield | Edit Category')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Edit Category</li>
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

                <div class="card-body">
                    {{-- <form method="POST" action="{{ url('admin/add_new_category') }}" class="database_operation" data-ajax="false"> --}}
            <form method="post" action="{{ route('update_category', $category['id']) }}" class="database_operation">
               @csrf
              <div class="row">
                  <div class="col-sm-12">
                      <div class="form-group">
                          <label>Enter Category Name</label>
                      <input type="hidden" name="id" value="{{ $category->id }}">
                      <input type="text" name="name" value="{{ $category->name }}" placeholder="Enter Category Name" class="form-control" required="required">
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Category</button>
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
      <!-- Modal -->
  </div>
  <!-- /.content-wrapper -->
  @endsection