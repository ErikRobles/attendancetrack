@extends('admin.admin_master')
@section('title', 'Lionsfield | Update Question')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Exam Question</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Update Question</li>
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
                    <form method="POST" action="{{ route('edit_question_inner') }}" class="database_operation">
                      @csrf                    
                        <input type="hidden" name="id" value="{{ $question[0]['id'] }}">
                      <div class="row">
                          <div class="col-sm-12">
                              <div class="form-group">
                                  <label>Enter Question</label>
                              <input type="text" value="{{ $question[0]['question'] }}" name="question" placeholder="Enter Question" class="form-control">
                              </div>
                          </div>
                          <?php $options = json_decode($question[0]['options']); ?>
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Enter Option 1</label>
                            <input class="form-control" type="text" value="{{ $options->option1 }}" name="option1" placeholder="Enter Option 1">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Enter Option 2</label>
                                <input class="form-control" type="text" value="{{ $options->option2 }}" name="option2" placeholder="Enter Option 2">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Enter Option 3</label>
                                <input class="form-control" type="text" value="{{ $options->option3 }}" name="option3" placeholder="Enter Option 3">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Enter Option 4</label>
                                <input class="form-control" type="text" value="{{ $options->option4 }}" name="option4" placeholder="Enter Option 4">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Enter Correct Answer</label>
                                <input class="form-control" type="text" value="{{ $question[0]['ans'] }}" name="ans" placeholder="Enter Correct Answer">
                            </div>
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

  </div>
  <!-- /.content-wrapper -->
  @endsection

