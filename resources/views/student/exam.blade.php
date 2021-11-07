@extends('admin.admin_master')
@section('title', 'Lionsfield | Exams')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Exams</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Exams</li>
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
                    <table class="table table-striped table-bordered table-hover datatable" id="dataTables-example1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Exam Title</th>
                                <th>Exam Date</th>
                                <th>Status</th>
                                <th>Result</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                               <td>1</td>
                              <td>{{ $student_info->oexExams->title }}</td>
                              <td>{{ $student_info->oexExams->exam_date }}</td>
                              <td>
                                @if(strtotime($student_info->oexExams->exam_date) < strtotime(date('Y-m-d')))
                                    Unavailable
                                @elseif(strtotime($student_info->oexExams->exam_date) == strtotime(date('Y-m-d')))
                                    Running
                                @else
                                    Ongoing
                                @endif
                              </td>
                              <td>
                                  <?php  if($exam_join) {
                                      echo $exam_join->yes_ans . '/' . ($exam_join->yes_ans + $exam_join->no_ans);
                                  } ?>
                              </td>
                              <td>
                                  @if(strtotime($student_info->oexExams->exam_date)  > strtotime(date('Y-m-d')))
                                    @if(!$exam_join)
                                        <a href="{{ route('take_exam', $student_info->exam) }}" class="btn btn-info bg-purple">Take Exam</a>
                                    @endif
                                  @endif
                              </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Exam Title</th>
                                <th>Exam Date</th>
                                <th>Status</th>
                                <th>Result</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                    @if(isset($result_info))
                      <a href="{{ route('show_result', $result_info->id) }}" class="btn btn-info mt-3">Exam result</a>
                    @endif
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

