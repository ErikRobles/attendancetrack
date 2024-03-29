@extends('admin.admin_master')
@section('title', 'Lionsfield | Add Question')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Exam Question</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Exam Question</li>
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
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($questions as $key => $question)
                               <tr>
                                 <td>{{ $key+1 }}</td>
                                 <td>{{ $question['question'] }}</td>
                                 <td>{{ $question['ans'] }}</td>
                                 <td>
                                     @if($question['status']=="1")
                                        <input class="question_status" data-id="{{ $question['id'] }}" type="checkbox" checked name="status">
                                     @else
                                        <input class="question_status" data-id="{{ $question['id'] }}" type="checkbox" name="status">
                                    @endif
                                 </td>
                                 <td>
                                     <a href="{{ url('exams/admin/delete_question/'. $question['id'] ) }}" class="btn btn-danger btn-sm">Delete</a>
                                     <a href="{{ url('exams/admin/update_question/'. $question['id']) }}" class="btn btn-info btn-sm text-white">Update</a>
                                 </td>
                               </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
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
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Add New Question</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('add_new_question') }}" class="database_operation">
           @csrf
        
            <input type="hidden" name="exam_id" value="{{ Request::segment(4) }}">
          <div class="row">
              <div class="col-sm-12">
                  <div class="form-group">
                      <label>Enter Question</label>
                      <input type="text" name="question" placeholder="Enter Question" class="form-control" required="required">
                  </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Enter Option 1</label>
                    <input class="form-control" type="text" required="required" name="option1" placeholder="Enter Option 1">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Enter Option 2</label>
                    <input class="form-control" type="text" required="required" name="option2" placeholder="Enter Option 2">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Enter Option 3</label>
                    <input class="form-control" type="text" required="required" name="option3" placeholder="Enter Option 3">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Enter Option 4</label>
                    <input class="form-control" type="text" required="required" name="option4" placeholder="Enter Option 4">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                    <label for="">Enter Correct Answer</label>
                    <input class="form-control" type="text" required="required" name="ans" placeholder="Enter Correct Answer">
                </div>
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
      $('#dataTables-example1').DataTable();
  } );
  </script>  @endsection

