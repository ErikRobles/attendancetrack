@extends('admin.admin_master')
@section('admin')
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
                            <input class="form-control" type="text" name="name" value="{{ Auth::user()->name; }}">
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Month</label>
                            <select name="month" id="" class="form-select form-control" required>
                                <option value="">Select Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>    
                        </div>
                    </div><!--End col md 6-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Day</label>
                            <select name="day" id="" class="form-select form-control" required>
                                <option value="">Select Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>  
                        </div>
                    </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Select Company</label>
                                <select name="teacher_id" id=""  class="form-select form-control">
                                    <option value="">Select Company</option>
                                    @foreach($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div> --}}
                    <!--End col md 6-->
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Select Level</label>
                            <select name="level_id" id="" class="form-select form-control">
                                <option value="">Select Student Level</option>
                                @foreach($levels as $level)
                                <option value="{{ $level->id }}">{{ $level->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}
                    <!--End col md 6-->
                    
                </div><!--End Row-->

            </div>
            <!-- /.card-body -->

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th rowspan="2" class="text-center" style="vertical-align: middle; width: 15%;">Student List</th>
                                    <th colspan="5" class="text-center" style="vertical-align: middle;width:30%;">Attendance Status</th>
                                </tr>
                                <tr>
                                    <th class="text-center btn present_all bg-primary" style="display:table-cell;">On Time</th>
                                    <th class="text-center btn leave_all bg-primary" style="display:table-cell;">On Leave</th>
                                    <th class="text-center btn absent_all bg-primary" style="display:table-cell;">Absent</th>
                                    <th class="text-center btn absent_all bg-primary" style="display:table-cell;">15 min Late</th>
                                    <th class="text-center btn absent_all bg-primary" style="display:table-cell;">30 min late</th>

                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach($students as $key => $student)
                                <input type="hidden" name="student_id[]" value="{{ $student->id }}">
                                <tr id="div{{$student->id}}" class="text-center">
                                    <td>{{ $student->name }}</td>
                                    <td colspan="5">
                                        <div class="switch-toggle switch-3 switch-candy d-flex justify-content-between">
                                            <input type="radio" name="attend_status{{$key}}" id="ontime{{$key}}" value="On Time">
                                            <label for="present{{$key}}">On Time</label>
                                            <input type="radio" name="attend_status{{$key}}" id="onleave{{$key}}" value="On Leave">
                                            <label for="leave{{$key}}">On Leave</label>
                                            <input type="radio" name="attend_status{{$key}}" id="absent{{$key}}" value="Absent">
                                            <label for="absent{{$key}}">Absent</label>
                                            <input type="radio" name="attend_status{{$key}}" id="fifteenlate{{$key}}" value="15 Min Late">
                                            <label for="absent{{$key}}">15 Minutes Late</label>
                                            <input type="radio" name="attend_status{{$key}}" id="thirtylate{{$key}}" value="30 Min Late">
                                            <label for="absent{{$key}}">30 Minutes Late</label>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div> <!--End col md 12-->   
            </div>  <!--End Row 2-->  

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Add Attendance</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

    </div>
</div>
</div>
@endsection