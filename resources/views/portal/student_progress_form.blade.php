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
            <h1 class="m-0 text-dark">Student Progress Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Student Progress Form</li>
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
                  <form action="prog_form_sub" method="POST">
                  {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="teacherName">Enter Teacher's Name</label>
                          <input type="text" name="teacherName" class="form-control" value="">
                        </div>
                        <div class="form-group">
                          <label for="teacherName">Enter Student's Name</label>
                          <input type="text" name="studentName" class="form-control" placeholder="Enter Student's Name">
                        </div>
                        <div class="form-group">
                          <label for="teacherName">Enter Teacher's Name</label>
                          <select class="form-control" name="studentLevel">
                            <option value="">Select Student's Level...</option>
                            <option value="survivor">Survivor</option>
                            <option value="elementary">Elementary</option>
                            <option value="preInt">Pre-Intermediate</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="upperInt">Upper Intermediate</option>
                            <option value="advanced">Advanced</option>
                            <option value="specialized">Specialized</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                          <label for="lastPage">Enter Last Page of Book Worked on</label>
                          <input type="text" name="lastPage" class="form-control" placeholder="Enter Last Page Worked on">
                        </div>
                        <div class="form-group">
                          <label for="teacherName">Enter Student's Last Unit Exam</label>
                          <input type="text" name="lastUnit" class="form-control" placeholder="Enter Last Unit Exam">
                        </div>
                        <div class="form-group">
                          <label for="teacherName">Enter Student's Last Unit Score</label>
                          <input type="text" name="unitScore" class="form-control" placeholder="Enter Last Unit Score">
                        </div>
                        <button class="btn btn-info float-right text-white">Submit</button>

                      </div>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

            

  </div>
  <!-- /.content-wrapper -->
  @endsection

