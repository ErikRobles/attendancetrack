@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper p-3">
<h1>General Attendance Report</h1>
<div class="row">
    <div class="col-12">
        <a href="{{ route('admin.pages.attendance.attendance_add') }}" class="btn btn-success btn-rounded mb-3">Add Attendance</a>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">General Attendance Report</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Month</th>
                <th>Day</th>
                <th>Company</th>
                <th>Student</th>
                <th>Attend Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($allData as $attendance)
              <tr>
                <td>{{ $attendance->month }}</td>
                <td>{{ $attendance->day }}</td>
                <td>
                    {{ $attendance->student->company->name }}
                </td>
                <td>{{ $attendance->student->name }}</td>
                <td>{{ $attendance->attend_status }}</td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-info">Details</a>
                    <a href="" class="btn btn-danger">Delete</a>
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
@endsection