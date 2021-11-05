@extends('admin.admin_master')
@section('title', 'Lionsfield | Edit Attendance')
@section('admin')

<div class="content-wrapper p-3">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Attendance</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('admin.pages.attendance.attendance_update', $allData->id) }}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Teacher's Name: <em>{{ $teachers->attendance->name }}</em></h4>
                    </div>
                    <div class="col-md-12" style="display:none;">
                        <div class="form-group">
                            <label for="teacher">Teacher's Name: <em>{{ $teachers->attendance->name }}</em></label>
                            <p><strong>Id:</strong> </p>
                            <input class="form-control" type="text" name="teacher_id" value="{{ $allData->teacher_id }}">
                        </div> 
                    </div>
                
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Date</label>
                            <input class="form-control" type="date" name="date" value="{{ $allData->date }}">  
                        </div>
                    </div><!--End col md 12-->
                </div><!--end row-->
               

                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                          <h5>Student Name <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <select name="student_id" required class="form-control">
                                      <option value="{{ $allData->student_id }}">{{ $allData->student->name }}</option>
                              </select>
                          </div>
                        </div>
                          {{-- End form Group --}}    
                      </div>
                      {{-- End Col md 5 --}}
                      <div class="col-md-5">
                        <div class="form-group">
                          <h5>Attendance Status <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <select name="attend_status" required class="form-control">
                                  <option value="" disabled>Select Attendance Status</option>
                                  <option value="On Time" {{ ($allData->attend_status == 'On Time') ? "selected" : ""  }}>On Time</option>
                                  <option value="On Leave" {{ ($allData->attend_status == 'On Leave') ? "selected" : ""  }}>On Leave</option>
                                  <option value="Absent" {{ ($allData->attend_status == 'Absent') ? "selected" : ""  }}>Absent</option>
                                  <option value="15 min Late" {{ ($allData->attend_status == '15 min Late') ? "selected" : ""  }}>15 Minutes Late</option>
                                  <option value="30 min Late" {{ ($allData->attend_status == '30 min Late') ? "selected" : ""  }}>30 Minutes Late</option>
                                  <option value="45 min Late" {{ ($allData->attend_status == '45 min Late') ? "selected" : ""  }}>45 Minutes Late</option>
                                </select>
                          </div>
                        </div>
                          {{-- End form Group --}}    
                      </div>
                      {{-- End Col md 5 --}}
                    
                          
                      
                     
                </div><!--End Row-->
            </div>
            <!-- /.card-body -->


            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update Attendance</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

    </div>
</div>
</div>


@endsection