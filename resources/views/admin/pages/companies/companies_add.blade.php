@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper p-3">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add Company</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('admin.pages.companies.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Company Name">
                          </div>
                    </div><!--End col md 12-->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contact Person One</label>
                            <input type="text" name="contact1" class="form-control" placeholder="Enter contact person one">
                          </div>
                    </div><!--End col md 3-->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contact Person Two</label>
                            <input type="text" class="form-control" name="contact2" placeholder="Enter contact person two">
                          </div>
                    </div><!--End col md 3-->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone One</label>
                            <input type="text" class="form-control" name="phone1" placeholder="Enter Phone">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone Two</label>
                            <input type="text" class="form-control" name="phone2" placeholder="Enter Phone Two">
                        </div>
                    </div>
                </div><!--End Row-->

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Add Company</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

    </div>
</div>
</div>
@endsection