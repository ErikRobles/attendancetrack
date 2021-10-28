@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper p-3">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add Student</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('admin.pages.students.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Student Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Student Name">
                          </div>
                    </div><!--End col md 3-->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Student's Company</label>
                            <select name="company_id" id="" class="form-select form-control">
                                <option value="">Select Company Name</option>
                                @foreach($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><!--End col md 3-->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Student's Level</label>
                            <select name="level_id" id="" class="form-select form-control">
                                <option value="">Select Student Level</option>
                                @foreach($levels as $level)
                                <option value="{{ $level->id }}">{{ $level->name }}</option>
                                @endforeach
                            </select>
                          </div>
                    </div><!--End col md 3-->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Student's Teacher</label>
                            <select name="teacher_id" id=""  class="form-select form-control">
                                <option value="">Select Teacher</option>
                                @foreach($allData as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div><!--End Row-->

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Add Student</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

    </div>
</div>
</div>
@endsection