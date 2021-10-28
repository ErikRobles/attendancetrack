@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper p-3">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add Performance</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="form-group">
                            <label for="teacher">Teacher's Name</label>
                            <input class="form-control" type="text" name="teacher_id" value="{{ Auth::user()->name; }}">
                        </div> 
                    </div>
                </div><!--end row-->
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Add Question</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

    </div>
</div>
</div>
@endsection