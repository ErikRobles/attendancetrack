@extends('admin.admin_master')
@section('title', 'Lionsfield | Take Exam')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Take Exam</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Take Exam</li>
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
                       <div class="col-sm-4">
                           <h3>Time: 1 Hour</h3>
                       </div>
                       <div class="col-sm-4">
                         <div class="text-center" id="time"></div>
                            {{-- <h3 class="text-center">Timer : <span id="time" class="">60:00</span></h3> --}}
                       </div>
                       <div class="col-sm-4">
                           <h3 class="text-right">Status: Pending</h3>
                       </div>
                    </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <div class="card mt-4">
                <div class="card-body">
                <form action="{{ route('submit_question') }}" method="post">
                    @csrf
                <input type="hidden" name="exam_id" value="{{ Request::segment(3) }}">
                    <div class="row">
                        @foreach($all_question as $key => $question)
                        <div class="col-sm-12 mt-4 mb-4">
                            <p><b>{{ $key+1 }}. {{ $question['question'] }}</b></p>
                            <?php
                                $options = json_decode(json_encode(json_decode($question['options'])), true);
                            ?>
                            <input type="hidden" name="question{{ $key+1 }}" value="{{ $question['id'] }}">
                            <ul class="question_option" style="list-style: none;">
                              <li>
                                <input type="radio" id="q1" value="{{ $options['option1'] }}" name="ans{{ $key+1 }}" onmouseup="saveValue(this);"> {{ $options['option1'] }}
                                </li>
                                <li>
                                    <input type="radio" id="q2"  value="{{ $options['option2'] }}" name="ans{{ $key+1 }}" onmouseup="saveValue(this);"> {{ $options['option2'] }}
                                </li>
                                <li>
                                    <input type="radio" id="q3"  value="{{ $options['option3'] }}" name="ans{{ $key+1 }}" onmouseup="saveValue(this);"> {{ $options['option3'] }}
                                </li>
                                <li>
                                    <input type="radio" id="q4"  value="{{ $options['option4'] }}" name="ans{{ $key+1 }}" onmouseup="saveValue(this);"> {{ $options['option4'] }}
                                </li>
                                <li style="display: none;">
                                <input type="radio" checked="checked" value="0" name="ans{{ $key+1 }}"> {{ $options['option4'] }}
                                </li>
                            </ul>
                        </div>
                        @endforeach
                         <div class="col-sm-12 mt-4 mb-4">
                         <input type="hidden" name="index" value="{{ $key+1 }}">
                            <button type="submit" class="btn btn-success btn-block">Submit</button>
                         </div>
                    </div>
                </form>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>

  </div>
  <!-- /.content-wrapper -->
  @endsection


