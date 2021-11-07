@extends('admin.admin_master')
@section('title', 'Lionsfield | Student Exam Results')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Student Exam Results</h1>
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
                            <td>{{ $result_info->userRelation->name }}</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>{{  $result_info->userRelation->email }}</td>
                        </tr>
                        <tr>
                            <td>Exam Name:</td>
                            <td>{{ ($result_info->examMasterRelation->title !=Null) ? $result_info->examMasterRelation->title : "No Data Available Yet." }}</td>
                        </tr>
                        <tr>
                            <td>Exam Date:</td>
                            <td>{{ ($result_info->examMasterRelation->exam_date !=Null) ? $result_info->examMasterRelation->exam_date : "No Data Available Yet." }}</td>
                        </tr>
                    </table>
                    <h2>Result Information</h2>
                    <table class="table">
                        <tr>
                            <td>Number Correct</td>
                            <td>{{ (!empty($result_info->yes_ans)) ? $result_info->yes_ans : "No Data Available Yet." }}</td>
                        </tr>
                        <tr>
                            <td>Number Incorrect</td>
                            <td>{{ (!empty($result_info->no_ans) || is_numeric($result_info->no_ans) ) ?$result_info->no_ans : "No Data Available Yet." }}</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            
                            <td>{{ (!empty($result_info->no_ans) || is_numeric($result_info->no_ans)) ?$result_info->result : "No data available yet." }} %</td>
                        </tr>
                    </table>
                    <a href="{{ route('exam_details', $result_info->id) }}" class="btn btn-info mt-1" target="_blank">Exam Details PDF</a>
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


