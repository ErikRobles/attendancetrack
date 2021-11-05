@extends('admin.admin_master')
@section('title', 'Lionsfield | Student Performance')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper p-3">
<h1>Performance Report</h1>
<div class="row">
    <div class="col-12">
        <a href="{{ route('performance_add') }}" class="btn btn-success btn-rounded mb-3">Add Performance Record</a>
      <div class="card">
        <div class="card-header mb-2">
          <h3 class="card-title">Performance Report</h3>

          <div class="card-tools">
            
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-2">
          <table class="table table-hover text-nowrap text-center" id="attendance_table">
            <thead>
              <tr>
                <th>Date</th>             
                <th>Student</th>
                <th>Level</th>
                <th>Company</th>
                <th>Last Unit Covered</th>
                <th>Last Page Viewed</th>
                <th>Exam Type</th>
                <th>Exam Score</th>
                <th>Comments</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($performances as $performance)
              <tr>
                <td>{{ date('m-d-Y', strtotime($performance->date)) }}</td>
                <td>{{ $performance['student']['name'] }}</td>
                <td>{{ $performance->student->getLevelRelation->name }}</td>
                <td>{{$performance->student->getCompanyRelation->name }}</td>
                <td>{{ $performance->last_unit_covered }}</td>
                <td>{{ $performance->last_page_viewed }}</td>
                <td>{{ $performance->exam_type }}</td>
                <td>{{ $performance->exam_score }}</td>
                <td>{{ $performance->comments }}</td>
                <td>
                    <a href="{{ route('performance_edit', $performance->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('performance_delete', $performance->id) }}" class="btn btn-danger">Delete</a>
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