@extends('admin.admin_master')
@section('title', 'Lionsfield | Add User')
@section('admin')
<div class="content-wrapper p-3">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add User Information</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('admin.pages.users.store') }}" method="post"  autocomplete="off">
            @csrf
           
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter User Name" autocomplete="off" value="{{ old('name') }}">
                          </div>
                    </div><!--End col md 6-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email" autocomplete="off" value="{{ old('email') }}">
                          </div>
                    </div><!--End col md 6-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password Min 8 Characters & Must contain 1 Uppercase Letter 1 Number and a symbol '@#*!()%+' etc."  autocomplete="new-password">
                            <div class="alert-danger"> {{ $errors->first('password') }}</div>
                          </div>
                    </div><!--End col md 6-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" class="custom-select">
                                <option value="">Please Select Role</option>
                                <option value="Admin">Admin</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Student">Student</option>
                            </select>
                          </div>
                </div><!--End Row-->

                <div class="col-md-12">
                  <h4>Student Info Section <small style="font-size: 14px;">(Leave blank if user is not a student)</small> </h4>
                  <hr>
                </div>
               <!-- Student Info-->
               <div class="col-md-3">
                <div class="form-group">
                    <label for="company">Student's Company</label>
                    <select name="company_id" id="" class="form-select form-control">
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

        <div class="col-md-3">
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

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Add User</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

    </div>
</div>
</div>
@endsection