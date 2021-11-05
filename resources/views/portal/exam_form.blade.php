@extends('admin.admin_master')
@section('title', 'Lionsfield | Exam Form')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Exams</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Manage Exams</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">

                <div class="card-body">
                    <div class="row">
                       <div class="col-sm-6">
                        <h3 class="text-center">{{ $exam_title }}</h3>
                       </div>
                       {{-- <div class="col-sm-6">
                        <h3 class="text-center"><span class="float-right">{{ date('M d,Y', strtotime($exam_date)) }}</span></h3>
                       </div> --}}
                    </div>
                <form method="post" action="{{ route('exam_form_sub') }}">
                    @csrf

                <input type="hidden" name="id" value="{{ $id }}">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Enter Name</label>
                                <input type="text" name="name" placeholder="Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Enter Email</label>
                                <input type="email" name="email" placeholder="Email" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Enter Phone Number (optional)</label>
                                <input type="text" name="mobile_no" placeholder="Phone" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Enter Password</label>
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <button class="btn btn-info text-white">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
                <!-- /.card-body -->

                <!-- /.card-footer-->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>

  </div>
  <!-- /.content-wrapper -->
  @endsection

