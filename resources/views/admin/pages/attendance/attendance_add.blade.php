@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper p-3">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add Attendance</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('admin.pages.attendance.attendance_store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="form-group">
                            <label for="teacher">Teacher's Name</label>
                            <input class="form-control" type="text" name="teacher_id" value="{{ Auth::user()->name; }}">
                        </div> 
                    </div>
                
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Date</label>
                            <input class="form-control" type="date" name="date">  
                        </div>
                    </div><!--End col md 12-->
                </div><!--end row-->
                <div class="add_item">

                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                          <h5>Student Name <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <select name="student_id[]" required class="form-control">
                                  <option value="" selected disabled>Select Student Name</option>
                                  @foreach($students as $student)
                                      <option value="{{ $student->id }}">{{ $student->name }}</option>
                                  @endforeach
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
                              <select name="attend_status[]" required class="form-control">
                                  <option value="" selected disabled>Select Attendance Status</option>
                                  <option value="On Time">On Time</option>
                                  <option value="On Leave">On Leave</option>
                                  <option value="Absent">Absent</option>
                                  <option value="15 min Late">15 Minutes Late</option>
                                  <option value="30 min Late">30 Minutes Late</option>
                                  <option value="45 min Late">45 Minutes Late</option>
                                </select>
                          </div>
                        </div>
                          {{-- End form Group --}}    
                      </div>
                      {{-- End Col md 5 --}}
                    
                          
                      
                      <div class="col-md-2" style="padding-top: 25px;">
                        <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                      </div>
                </div><!--End Row-->
            </div><!--End add_item row-->
            </div>
            <!-- /.card-body -->


            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit Attendance</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

    </div>
</div>
</div>

<div style="visibility: hidden;">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
      <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
        <div class="form-row">
            <div class="col-md-5">
                <div class="form-group">
                  <h5>Student Name <span class="text-danger">*</span></h5>
                  <div class="controls">
                      <select name="student_id[]" required class="form-control">
                          <option value="" selected disabled>Select Student Name</option>
                          @foreach($students as $student)
                              <option value="{{ $student->id }}">{{ $student->name }}</option>
                          @endforeach
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
                      <select name="attend_status[]" required class="form-control">
                          <option value="" selected disabled>Select Attendance Status</option>
                          <option value="On Time">On Time</option>
                          <option value="On Leave">On Leave</option>
                          <option value="Absent">Absent</option>
                          <option value="15 min Late">15 Minutes Late</option>
                          <option value="30 min Late">30 Minutes Late</option>
                          <option value="45 min Late">45 Minutes Late</option>
                        </select>
                  </div>
                </div>
                  {{-- End form Group --}}    
              </div>
              {{-- End Col md 5 --}}
              
          <div class="col-md-2" style="padding-top: 25px;">
            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
            <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      let counter = 0;
      $(document).on("click", ".addeventmore", function () {
        let whole_extra_item_add = $('#whole_extra_item_add').html();
        $(this).closest(".add_item").append(whole_extra_item_add);
        counter++;
      });
      $(document).on("click", ".removeeventmore", function (event) {
        $(this).closest(".delete_whole_extra_item_add").remove();
        counter -= 1;
      });
    });
  </script>
@endsection