@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Portal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Portal</li>
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
                    <form method="get" action="{{ route('edit_portal_sub') }}" class="database_operation">
                        {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" name="id" value="{{ $portal_info->id }}">
                      <div class="row">
                          <div class="col-sm-12">
                              <div class="form-group">
                                  <label>Enter Name</label>
                              <input type="text" name="name" value="{{ $portal_info->name }}" placeholder="Enter Portal Name" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Enter Email</label>
                                <input type="email" name="email" value="{{ $portal_info->email }}"  placeholder="Enter Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Enter Phone Number(optional)</label>
                                <input type="text" name="mobile_no" value="{{ $portal_info->mobile_no }}"  placeholder="Enter Phone Number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Enter Password</label>
                                <input type="password" name="password" value="{{ $portal_info->password }}"  placeholder="Enter Password" class="form-control">
                            </div>
                              <div class="col-sm-12">
                                <div class="form-group">
                                    {{-- <button type="submit" class="btn btn-primary">Add</button> --}}
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
      <!-- Modal -->

  </div>
  <!-- /.content-wrapper -->
  @endsection


