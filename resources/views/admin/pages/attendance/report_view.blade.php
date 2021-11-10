@extends('admin.admin_master')
@section('title', 'Lionsfield | Attendance')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper p-3">
<h1>General Attendance Report</h1>
<div class="row">
    <div class="col-12">
        {{-- <a href="{{ route('admin.pages.attendance.attendance_add') }}" class="btn btn-success btn-rounded mb-3">Add Attendance</a> --}}
      <div class="card">
        <div class="card-header mb-2">
          <h3 class="card-title">General Attendance Report</h3>

          <div class="card-tools">
            
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-2">
          <table class="table table-hover text-nowrap" id="attendance_table">
            <thead>
              <tr>
                <th>Date</th>             
                <th>Company</th>
                <th>Assigned Teacher</th>
                <th>Student</th>
                <th>Attend Status</th>
                <th>Action</th>
              </tr>
            </thead>  
            <tbody>
                @foreach($attendances as $attend)
              <tr>
                <td>{{  ($attend->date !=Null) ? date('m-d-Y', strtotime($attend->date)) : "No data Yet."  }}</td>
                <td>{{  (isset($attend['getCompanyRelation']['name'])) ? $attend['getCompanyRelation']['name'] : "No data yet." }}</td>
                <td>{{ ($attend->teacher_id !=Null) ? $attend['getTeacherRelation']['name'] : "No Teacher Listed" }}</td>                
                <td>{{  ($attend->student->name !=Null) ? $attend->student->name : "No Student Listed"  }}</td>
                <td>{{ ($attend->attend_status !=Null) ? $attend->attend_status : "No Data Available" }}</td>

                <td>
                    <a href="{{ route('admin.pages.attendance.attendance_edit', $attend->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.pages.attendance.attendance_delete', $attend->id) }}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
<script>
  $(document).ready( function () {
    $('#attendance_table').DataTable();
} );
</script>
@endsection