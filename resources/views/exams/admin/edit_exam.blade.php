@extends('admin.admin_master')
@section('title', 'Lionsfield | Edit Exam')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Exam</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Exam</li>
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
                    <form method="post" action="{{ route('edit_exam_sub') }}" class="database_operation">
                        @csrf
                    <input type="hidden" name="id" value="{{ $exam->id }}">
                      <div class="row">
                          <div class="col-sm-12">
                              <div class="form-group">
                                  <label>Enter Exam Title</label>
                              <input type="text" value="{{ $exam->title }}" name="title" placeholder="Enter Exam Title" class="form-control" required="required">
                              </div>
                              <div class="form-group">
                                <label>Select Exam Date</label>
                                <input type="date" value="{{ $exam->exam_date }}" name="exam_date" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Select Exam Category</label>
                                <select name="exam_category" class="form-control" required="required">
                                        <option value="">Select</option>
                                    @foreach($category as $cat)
                                        @if($exam->category==$cat['id'])
                                        <option value="{{ $cat['id'] }}" selected>{{ $cat['name'] }}</option>
                                        @else
                                        <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                                        @endif
                                    @endforeach
                                </select>
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
