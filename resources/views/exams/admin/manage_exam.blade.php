@extends('admin.admin_master')
@section('title', 'Lionsfield | Manage Exam')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Exams</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Manage Exams</li>
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
                  <h3 class="card-title">Exams List</h3>

                  <div class="card-tools">
                    <a class="btn btn-info text-white btn-sm" href="javascript:;" data-toggle="modal" data-target="#myModal">Add New</a>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover datatable" id="dataTables-example1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Exam Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($exams as $key => $exam)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $exam['title'] }}</td>
                                <td>{{ $exam['cat_name'] }}</td>
                                <td>{{ $exam['exam_date'] }}</td>
                                {{-- <td><input type="checkbox" name="status"></td> --}}
                                @if($exam['status']== 1)
                            <td><input class="exam_status" data-id="{{ $exam['id'] }}" type="checkbox" name="status" checked></td>
                            @else
                            <td><input class="exam_status" data-id="{{ $exam['id'] }}"  type="checkbox" name="status"></td>
                            @endif
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('edit_exam', $exam['id']) }}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="{{ route('delete_exam', $exam['id']) }}">Delete</a>
                                <a class="btn bg-purple btn-sm" href="{{ route('add_question', $exam['id']) }}">Add question</a>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Exam Date</th>
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
            <h4 class="modal-title">Add New Exam</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
        {{-- <form method="POST" action="{{ url('admin/add_new_category') }}" class="database_operation" data-ajax="false"> --}}
            <form method="POST" action="{{ route('add_new_exam') }}" class="database_operation">
            @csrf
          <div class="row">
              <div class="col-sm-12">
                  <div class="form-group">
                      <label>Enter Exam Title</label>
                      <input type="text" name="title" placeholder="Enter Exam Title" class="form-control" required="required">
                  </div>
                  <div class="form-group">
                    <label>Select Exam Date</label>
                    <input type="date" name="exam_date" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Select Exam Category</label>
                    <select name="category" name="exam_category" class="form-control" required="required">
                            <option value="">Select</option>
                        @foreach($category as $cat)
                            <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                        @endforeach
                    </select>
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
  @endsection

