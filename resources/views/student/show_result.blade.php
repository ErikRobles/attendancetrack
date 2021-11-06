@extends('admin.admin_master')
@section('title', 'Lionsfield | Results')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Exam Results</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Exam Results</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-sm-2">
                &nbsp;
              </div>
            <div class="col-sm-8">

              <div class="card mt-4">
                <div class="card-body">
                    <h2>Basic Information</h2>
                    <table class="table">
                        <tr>
                            <td>Name:</td>
                            <td>{{ $student_info->name }}</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>{{ $student_info->email }}</td>
                        </tr>
                        <tr>
                            <td>Exam Name:</td>
                            <td>{{ $student_info->title }}</td>
                        </tr>
                        <tr>
                            <td>Exam Date:</td>
                            <td>{{ $student_info->exam_date }}</td>
                        </tr>
                    </table>
                    <h2>Result Information</h2>
                    <table class="table">
                        <tr>
                            <td>Number Correct</td>
                            <td>{{ $result_info->yes_ans }}</td>
                        </tr>
                        <tr>
                            <td>Number Incorrect</td>
                            <td>{{ $result_info->no_ans }}</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            {{-- <td>{{ round($result_info->yes_ans / ($result_info->yes_ans + $result_info->no_ans) * 100 , 1) }} %</td> --}}
                            <td>{{ $result_info->result }} %</td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>

  </div>
  <!-- /.content-wrapper -->
  @endsection


