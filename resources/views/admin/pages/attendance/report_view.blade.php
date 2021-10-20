@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper p-3">
<h1>General Attendance Report</h1>
<div class="row">
    <div class="col-12">
        <a href="{{ route('admin.pages.attendance.attendance_add') }}" class="btn btn-success btn-rounded mb-3">Add Attendance</a>
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
                @foreach($allData as $attendance)
              <tr>
                <td>{{ date('m-d-Y', strtotime($attendance->date)) }}</td>
                <td>
                    {{ $attendance->student->company->name }}
                </td>
                <td>{{ $attendance->attendance->name }}</td>
                <td>{{ $attendance->student->name }}</td>
                <td>{{ $attendance->attend_status }}</td>
                <td>
                    <a href="{{ route('admin.pages.attendance.attendance_edit', $attendance->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.pages.attendance.attendance_delete', $attendance->id) }}" class="btn btn-danger">Delete</a>
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