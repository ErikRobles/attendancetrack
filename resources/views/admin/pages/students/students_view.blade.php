@extends('admin.admin_master')
@section('title', 'Lionsfield | Students')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper p-3"> 
<h1>All Students</h1>
<div class="row">
    <div class="col-12">
        <a href="{{ route('admin.pages.users.user_add') }}" class="btn btn-success btn-rounded mb-3">Add Student</a>
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
                <th>Student Name</th>
                <th>Student's Company</th>
                <th>Student's Level</th>
                <th>Student's Teacher</th>
                <th>Student's Email</th>
                <th>Current Registered Exam</th>
                <th>Exam Result</th>
                <th>Status</th>
                {{-- <th>Created At</th> --}}
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($allData as $student)
              <tr>
                <td>{{ $student->name }}</td>
                <td>{{ ($student->company_id !=Null) ? $student['getCompanyRelation']['name'] : "No Registered Company Listed"}}</td>
                <td>{{ ($student->level_id !=Null) ? $student['getLevelRelation']['name'] : "No Level Listed" }}</td>
                <td>{{ ($student->teacher_id !=Null) ? $student['getTeacherRelation']['name'] : "No Teacher Listed" }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ ($student->exam !=Null) ? $student['oexExams']['title'] : "Not yet Assigned" }}</td>
                <td>N/A</td>
                @if($student['status']== 1)
                <td><input data-id="{{ $student['id'] }}" class="student_status" type="checkbox" name="status" checked></td>
                 @else
                 <td><input data-id="{{ $student['id'] }}" class="student_status" type="checkbox" name="status"></td>
                 @endif
                {{-- <td>{{ date('m-d-Y', strtotime($student->created_at)) }}</td> --}}
                <td>
                  <div style="display: flex; flex-direction: row;">
                    <form action="{{ route('admin.pages.students.edit', $student->id) }}" method="get">
                      <button class="d-inline-block btn btn-primary btn-sm mr-1"  type="submit" value="">
                        <i class="fas fa-pencil-alt"></i>
                      </button>
                    </form>
                    <form action="{{ route('admin.pages.students.delete', $student->id) }}" method="get">
                      <button class="d-inline-block btn btn-danger btn-sm" value="Delete" type="submit" style="display: inline;">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </form>
                  </div>
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