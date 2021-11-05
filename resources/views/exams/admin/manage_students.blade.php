@extends('admin.admin_master')
@section('title', 'Lionsfield | Manage Students')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-wrapper p-3">
  <h1>All Students</h1>
  <div class="row">
      <div class="col-12">
          <a href="{{ route('admin.pages.students.add') }}" class="btn btn-success btn-rounded mb-3">Add Student</a>
        <div class="card p-3">
          <div class="card-header">
            <h3 class="card-title">All Registered Students</h3>
  
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
            <table class="table table-hover text-nowrap" id="studentTable">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Student Name</th>
                  <th>Student's Company</th>
                  <th>Student's Level</th>
                  <th>Student's Teacher</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($allData as $student)
                <tr>
                  <td>{{ $student->id }}</td>
                  <td>{{ $student->name }}</td>
                  <td>{{ $student['getCompanyRelation']['name']}}</td>
                  <td>{{ $student['getLevelRelation']['name'] }}</td>
                  <td>{{ $student['getTeacherRelation']['name'] }}</td>
                  <td>{{ date('m-d-Y', strtotime($student->created_at)) }}</td>
                  <td>
                      <a href="{{ route('admin.pages.students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                      <a href="{{ route('admin.pages.students.delete', $student->id) }}" class="btn btn-danger">Delete</a>
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
      $('#studentTable').DataTable();
  } );
  </script>
  @endsection