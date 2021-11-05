@extends('layouts.portal')
@section('title', 'Lionsfield | Exam Form')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    @include('layouts.messages')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Exam Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Update Exam Form</li>
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
                <form action="{{ url('portal/student_exam_info') }}" method="get">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Enter Email</label>
                                <input type="text" required="required" name="email" class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="">Enter Phone Number</label>
                                <input type="text" name="mobile_no" class="form-control" placeholder="Enter Phone Number">
                            </div>
                            <div class="form-group">
                                <label for="">Select Exam</label>
                                <select name="exam" class="form-control">
                                    <option value="">Select</option>
                                    @foreach($exams as $exam)
                                    <option value="{{ $exam['id'] }}">{{ $exam['title'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <button class="btn btn-info float-right text-white">Search</button>
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

