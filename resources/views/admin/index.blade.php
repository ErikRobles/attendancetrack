@extends('admin.admin_master')
@section('title', 'Lionsfield | Admin')
@section('admin')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @if(Auth::user()->role == 'Admin')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">       
                <h3>{{ $teacherCount }}</h3>
                <p>Teachers</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $attendanceCount }}</h3>

                <p>Attendance Records</p>
              </div>
              <div class="icon">
                <i class="ion ion-filing"></i>
              </div>
              {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $ontimeCount }}</h3>

                <p>On Time</p>
              </div>
              <div class="icon">
                <i class="ion ion-happy"></i>
              </div>
              {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                {{-- <h3>{{ $absentCount}}</h3> --}}
                <h3>{{ $cancelledOffTimeCount + $cancelledOnTimeCount + $absentCount }}</h3>

                <p>Absences</p>
              </div>
              <div class="icon">
                <i class="ion ion-bonfire"></i>
              </div>
              {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    @endif

    @if(Auth::user()->role == 'Teacher')
    <!-- Main content -->
     <!-- Content Wrapper. Contains page content -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          @foreach($portal_exams as $key => $exam)
          <?php
          $val=$key+1;
          if(strtotime(date('Y-m-d'))> strtotime($exam['exam_date'])){
              $cls = "bg-danger";
          } else {
              if($val%2==0) {
                  $cls = "bg-info";
              } else {
                  $cls = "bg-success";
              }
          }
          ?>
          <div class="col-lg-6 col-6">
              <!-- small box -->
          <div class="small-box {{ $cls }}">
            <div class="inner">
              <h4>{{ $exam['title'] }}</h4>

            <p>{{ $exam['cat_name'] }}</p>
            </div>
            <div class="icon">
              <i class="fas fa-list-alt"></i>
            </div>
            @if(strtotime(date('Y-m-d')) < strtotime($exam['exam_date']))
            <a href="{{ route('admin.pages.users.user_add') }}" class="small-box-footer">Add Student <i class="fas fa-arrow-circle-right"></i></a>
            @endif 
          </div>
      </div>
      <!-- ./col -->
          @endforeach


      </div>
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

<!-- /.content-wrapper -->
      <!-- Main content -->
    @endif

    @if(Auth::user()->role == 'Student')
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <h4>To begin your exam, please click on "Exams" in the side menu.</h4>

        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    @endif
  </div>
@endsection