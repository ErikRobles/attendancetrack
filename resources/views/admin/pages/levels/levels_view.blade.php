@extends('admin.admin_master')
@section('title', 'Lionsfield | Levels')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper p-3">
<h1>All Levels</h1>
<div class="row">
    <div class="col-12">
        <a href="{{ route('admin.pages.levels.add') }}" class="btn btn-success btn-rounded mb-3">Add Level</a>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Levels</h3>

          <div class="card-tools">
           
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive">
          <table class="table table-hover text-nowrap" id="levelsTable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Level Name</th>
                <th>Created At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($levels as $level)
              <tr>
                <td>{{ $level->id }}</td>
                <td>{{ $level->name }}</td>
                <td>{{ date('m-d-Y', strtotime($level->created_at)) }}</td>
                <td>
                    <a href="{{ route('admin.pages.levels.edit', $level->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.pages.levels.delete', $level->id) }}" class="btn btn-danger">Delete</a>
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
    $('#levelsTable').DataTable();
} );
</script>
@endsection