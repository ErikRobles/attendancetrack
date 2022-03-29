@extends('admin.admin_master')
@section('title', 'Lionsfield | Zoom Attendance')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper p-3">
<h1>Zoom Attendance Report</h1>
<div class="row">
    <div class="col-12">
        {{-- <a href="{{ route('admin.pages.attendance.attendance_add') }}" class="btn btn-success btn-rounded mb-3">Add Attendance</a> --}}
      <div class="card">
        <div class="card-header mb-2">
          <h3 class="card-title">Zoom Attendance Report</h3>

          <div class="card-tools">
            
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-2">
<table class="table table-hover text-nowrap" id="attendance_table">
    <thead>
        <tr>
            <td>User Name</td>
            <td>Join Time</td>
            <td>Leave Time</td>
            <td>Duration</td>
        </tr>
    </thead>
    <tbody>
        @foreach($zooms as $zoom)
        <tr>
            <td>{{$zoom->user_name}}</td>
            <td>{{$zoom->join_time}}</td>
            <td>{{$zoom->leave_time}}</td>
            <td>{{$zoom->duration}}</td>
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
