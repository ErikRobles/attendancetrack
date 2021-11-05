@extends('admin.admin_master')
@section('title', 'Lionsfield | Add Student')
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
          <form action="{{ route('admin.pages.students.store') }}" method="post" autocomplete="off">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Student Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Student Name" value="{{ old('name') }}">
                          </div>
                    </div><!--End col md 3-->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="company">Student's Company</label>
                            <select name="company_id" id="" class="form-select form-control" required>
                                <option value="">Select Company Name</option>
                                @foreach($companies as $company)
                                <option value="{{ $company->id }}" value="{{ old('company_id') }}">{{ $company->name }}</option>
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
                                <option value="{{ $level->id }}" value="{{ old('level_id') }}">{{ $level->name }}</option>
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
                                <option value="{{ $teacher->id }}" value="{{ old('teacher_id') }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Enter Student's email</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter Email" autocomplete="off" value="{{ old('email') }}">
                        </div>
                    </div><!--End col md 6-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Enter Password</label>
                            <input type="text" name="password" class="form-control" placeholder="Password must contain 8+ characters, 1 uppercase, 1 Number & 1 symbol '@#*!()%+' etc." autocomplete="off">
                            <div class="alert-danger"> {{ $errors->first('password') }}</div>

                        </div>
                    </div><!--End col md 6-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exam">Select Exam</label>
                            <select name="exam" id=""  class="form-select form-control">
                                <option value="0">Select Exam</option>
                                @foreach($exams as $exam)
                                <option value="{{ $exam['id'] }}" value="{{ old('exam') }}">{{ $exam['title'] }}</option>
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