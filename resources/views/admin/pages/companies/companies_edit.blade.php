@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper p-3">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Company</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('admin.pages.companies.update', $allData->id) }}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Name</label>
                            <input type="text" name="name" value="{{ $allData->name }}" class="form-control" placeholder="Enter User Name">
                          </div>
                    </div><!--End col md 12-->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Contact One</label>
                            <input type="text" name="contact1" value="{{ $allData->contact1 }}" class="form-control" placeholder="Enter email">
                          </div>
                    </div><!--End col md 3-->
                    
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Contact Two</label>
                            <input type="text" name="contact2" value="{{ $allData->contact2 }}" class="form-control" placeholder="Enter email">
                          </div>
                    </div><!--End col md 3-->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Phone One</label>
                            <input type="text" name="phone1" value="{{ $allData->phone1 }}" class="form-control" placeholder="Enter email">
                          </div>
                    </div><!--End col md 3-->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Phone Two</label>
                            <input type="text" name="phone2" value="{{ $allData->phone2 }}" class="form-control" placeholder="Enter email">
                          </div>
                    </div><!--End col md 3-->
                </div><!--End Row-->

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Edit Company</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

    </div>
</div>
</div>
@endsection