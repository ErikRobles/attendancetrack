@extends('admin.admin_master')
@section('title', 'Lionsfield | FrontEnd Messages')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper p-3">
<h1>Lionsfield MX Messages</h1>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header mb-2">
          <h3 class="card-title">Lionsfield MX Front End Messages</h3>

          <div class="card-tools">
            
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-2">
          <table class="table table-hover text-nowrap" id="frontmessages_table">
            <thead>
              <tr>
                <th>Name</th>             
                <th>Company</th>
                <th>Email</th>
                <th>Primary Telephone</th>
                <th>Extension</th>
                <th>Secondary Telephone</th>
                <th>Message</th>
                <th>Created At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($frontmessages as $message)
              <tr>
                <td>{{ $message->name }}</td>
                <td>
                    {{ $message->empresa }}
                </td>
                <td>{{ $message->mail }}</td>
                <td>{{ $message->tel1 }}</td>
                <td>{{ $message->tel3 }}</td>
                <td>{{ $message->tel2 }}</td>
                <td>{{ $message->mensaje }}</td>
                <td>{{ date('d-m-Y', strtotime($message->created_at)) }}</td>  
                <td>
                  <form action="{{ route('delete_contact', $message->id) }}">
                  @csrf
                  <input type="submit" class="btn btn-danger" value="Delete">
                  </form>

                    {{-- <a href="{{ route('delete_contact', $message->id) }}" class="btn btn-danger">Delete</a> --}}
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
    $('#frontmessages_table').DataTable();
} );
</script>
@endsection