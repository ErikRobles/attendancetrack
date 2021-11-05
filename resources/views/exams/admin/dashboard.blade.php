@extends('layouts.app')
@section('title', 'Lionsfield | Dashboard')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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
                <div class="card-header">
                  <h3 class="card-title">Registered Students List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover datatable" id="dataTables-example1">
                        <thead>
                            <tr>

                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($student_list as $std_list)
                           <tr>

                            <td>{{ $std_list['name'] }}</td>
                            <td>{{ $std_list['email'] }}</td>
                            <td>{{ $std_list['mobile_no'] }}</td>
                           </tr>
                        @endforeach
                        </tbody>
                        <tfoot>

                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->

                <!-- /.card-footer-->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <!-- Default box -->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Teachers List</h3>


                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover datatable" id="dataTables-example1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($portal as $key => $p1)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $p1['name'] }}</td>
                                        <td>{{ $p1['email'] }}</td>
                                        <td>{{ $p1['mobile_no'] }}</td>
                                        <td>
                                            @if($p1['status']==1)
                                                <input data-id="{{ $p1['id'] }}" class="portal_status" type="checkbox"  name="status" checked></td>
                                            @else
                                                <input data-id="{{ $p1['id'] }}" class="portal_status" type="checkbox" name="status"></td>
                                            @endif

                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>

                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->

                    <!-- /.card-footer-->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
            </div>
          </section>

          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <!-- Default box -->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Students Exam Result List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover datatable" id="dataTables-example1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    {{-- <th>Exam Date</th> --}}
                                    <th>Exam</th>
                                    <th>Result</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $key => $student)
                               <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $student['name'] }}</td>
                                <td>{{ $student['email'] }}</td>
                                <td>{{ $student['mobile_no'] }}</td>
                                <td>{{ $student['exam_name'] }}</td>
                                <td>{{ $student['result'] }}%</td>
                                {{-- <td>{{ $result_info->result }} %</td> --}}
                                {{-- <td>N/A</td> --}}


                                @if($student['status']== 1)
                               <td><input data-id="{{ $student['id'] }}" class="student_status" type="checkbox" name="status" checked></td>
                                @else
                                <td><input data-id="{{ $student['id'] }}" class="student_status" type="checkbox" name="status"></td>
                                @endif

                               </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                {{-- <th>Exam Date</th> --}}
                                <th>Exam</th>
                                {{-- <th>Result</th> --}}
                                <th>Results</th>
                                <th>Status</th>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->

                    <!-- /.card-footer-->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
            </div>
          </section>

          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <!-- Default box -->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Exams List</h3>

                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover datatable" id="dataTables-example1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Exam Date</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                              @foreach($exams as $key => $exam)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $exam['title'] }}</td>
                                    <td>{{ $exam['cat_name'] }}</td>
                                    <td>{{ $exam['exam_date'] }}</td>
                                    {{-- <td><input type="checkbox" name="status"></td> --}}
                                    @if($exam['status']== 1)
                                <td><input class="exam_status" data-id="{{ $exam['id'] }}" type="checkbox" name="status" checked></td>
                                @else
                                <td><input class="exam_status" data-id="{{ $exam['id'] }}"  type="checkbox" name="status"></td>
                                @endif
                                </tr>
                              @endforeach
                            </tbody>
                            <tfoot>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Exam Date</th>
                                <th>Status</th>

                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->

                    <!-- /.card-footer-->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
            </div>
          </section>

          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <!-- Default box -->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Category List</h3>


                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover datatable" id="dataTables-example1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category as $key => $cat)
                                <tr>
                                <td>{{ $cat['id'] }}</td>
                                <td>{{ $cat['name'] }}</td>
                                @if($cat['status']== 1)
                                <td><input class="category_status" data-id="{{ $cat['id'] }}" type="checkbox" name="status" checked></td>
                                @else
                                <td><input class="category_status" data-id="{{ $cat['id'] }}"  type="checkbox" name="status"></td>
                                @endif

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->

                    <!-- /.card-footer-->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
            </div>
          </section>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
