@extends('admin.admin_master')
@section('title', 'Lionsfield | Add Performance')
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
          <form action="{{ route('performance_store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="form-group">
                            <label for="teacher">Teacher's Name</label>
                            <input class="form-control" type="text" name="teacher_id" value="{{ Auth::user()->name; }}">
                        </div> 
                    </div>
                
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="date">Select Date</label>
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="date" required>  
                        </div>
                    </div><!--End col md 12-->
                </div><!--end row-->

                {{-- <div class="add_item">
                </div>  --}}

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                          <h5>Student Name <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <select name="student_id[]" required class="form-control student-name" id="student_name">
                                  <option value="" selected disabled>Select Student Name</option>
                                  @foreach($students as $student)
                                    <option value="{{ $student->id }}" data-level-id="{{$student->level_id}}">{{ $student->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                        </div>
                          {{-- End form Group --}}    
                      </div>
                      {{-- End Col md 3 --}}

                      <div class="col-md-3">
                        <div class="form-group">
                          <h5>Student Level <span class="text-danger">*</span></h5>
                      <div class="controls">
                      <select name="level_id[]" id="level_id" class="form-control" >
                       {{-- get level_id for user with matching id --}}
                        <option value="1">Survivor</option>
                        <option value="2">Elementary</option>
                        <option value="3">Pre-intermediate</option>
                        <option value="4">Intermediate</option>
                        <option value="5">Upper Intermediate</option>
                        <option value="6">Advanced</option>
                       
                      </select>
                    </div>
                  </div>
                  {{-- End form Group --}} 
                </div>
                {{-- End Col md 3 --}}
              
                      <div class="col-md-3" id="last_unit_inputs">
                        <div class="form-group select">
                          <h5>Last Unit Covered </h5>
                          <div class="controls">
                        <select class="form-control" name="last_unit_covered[]" id="lastUnitCovered" required>
                          <option value="" selected disabled>Last Unit Covered</option>                         
                                @include('admin.performance_partials.servUnit')
                                @include('admin.performance_partials.elemUnit')
                                @include('admin.performance_partials.preUnit')
                                @include('admin.performance_partials.intUnit')
                                @include('admin.performance_partials.uppUnit')                             
                                @include('admin.performance_partials.advUnit')                               
                                @include('admin.performance_partials.speUnit')                                                                                      
                        </select>
                          </div>
                        </div>
                      </div>
                 
                      {{-- End Col md 3 --}}
                   

                      <div class="col-md-3">
                        <div class="form-group">
                      <h5>Last Page Viewed <span class="text-danger">*</span></h5>
                      <div class="controls">
                          @include('admin.performance_partials.lastUnitCoveredPartial')  
                        </div>
                      </div>
                      </div>

                    {{-- End Col md 3 --}}  
                    </div> {{--End of Row--}}
                        
                    <div class="row">

                      <div class="col-md-4" id="progress_inputs_next">
                        <div class="form-group select">
                          <h5>Rate Your Student </h5>
                          <div class="controls">
                        <select class="form-control" name="student_progress[]" id="student_progress_next" required>
                          <option value="" selected disabled>Rate Student's Progress</option>                         
                          @include('admin.performance_partials.lastTopicCoveredProgressPartial')                                                          
                        </select>
                          </div>
                        </div>
                      </div>
                    
                      {{-- End Col md 4 --}}

                      <div class="col-md-4">
                        <div class="form-group">
                          <h5>Exam Type </h5>
                          <div class="controls">
                            <select class="form-control" name="exam_type[]" id="exam_type" required>
                              <option value="" selected disabled>Exam Taken</option>
                              @foreach($exam_titles as $exam)
                              <option value="{{ $exam->title }}">{{ $exam->title }}</option>
                            @endforeach 
                            </select>                          
                          </div>
                        </div>
                          {{-- End form Group --}}    
                      </div>
                      {{-- End Col md 4 --}}

                      <div class="col-md-4">
                        <div class="form-group">
                          <h5>Exam Score </h5>
                          <div class="controls">
                            <input name="exam_score[]" type="number" class="form-control" placeholder="Enter Exam Score">                            
                          </div>
                        </div>
                          {{-- End form Group --}}    
                      </div>
                      {{-- End Col md 4 --}}

                      <div class="col-md-12">
                        <div class="form-group">
                          <h5>Comments </h5>
                            <textarea class="form-control" name="comments[]" placeholder="Add Comments about your student's progress here."></textarea>  
                        </div>
                    </div><!--End col md 12-->
{{--                       
                      <div class="col-md-2" style="padding-top: 25px;">
                        <span class="btn btn-success addeventmore" title="Add another student progress report"><i class="fa fa-plus-circle"></i></span>
                      </div> --}}
                      
                </div><!--End Row-->
                {{-- <br> <br> --}}
            </div><!--End add_item row-->
            
            </div>
            <!-- /.card-body -->


            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit Progress Report</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

    </div>
</div>
</div>



  {{-- <script>
    $(document).ready(function() {
      let counter = 0;
      $(document).on("click", ".addeventmore", function () {
        let whole_extra_item_add = $('#whole_extra_item_add').html();
        $(this).closest(".add_item").append(whole_extra_item_add);
        counter++;
      });
      $(document).on("click", ".removeeventmore", function (event) {
        $(this).closest(".delete_whole_extra_item_add").remove();
        counter -= 1;
      });
    });
  </script> --}}

  <script src="{{ asset('js/performance-scripts/lastUnitCovered.js') }}"></script>
  {{-- <script src="{{ asset('js/performance-scripts/lastUnitCoveredNext.js') }}"></script> --}}
  <script>
  
    (function() {
      const studentName = document.querySelector('#student_name');
      const levelEl = document.querySelector('#level_id');
     
      // console.log(studentName);

      const levelToUnit = {
        '1': 'survival',
        '2': 'elementary',
        '3': 'pre-intermediate',
        '4': 'intermediate',
        '5': 'upper-intermediate',
        '6': 'advanced',
        '7': 'specialty',
      }

      

      const hideAllLevels = () => {
        document.querySelectorAll('[data-type="survival"]').forEach(el => { el.style.display = 'none'; });
        document.querySelectorAll('[data-type="elementary"]').forEach(el => { el.style.display = 'none'; });
        document.querySelectorAll('[data-type="pre-intermediate"]').forEach(el => { el.style.display = 'none'; });
        document.querySelectorAll('[data-type="intermediate"]').forEach(el => { el.style.display = 'none'; });
        document.querySelectorAll('[data-type="upper-intermediate"]').forEach(el => { el.style.display = 'none'; });
        document.querySelectorAll('[data-type="advanced"]').forEach(el => { el.style.display = 'none'; });
        document.querySelectorAll('[data-type="specialty"]').forEach(el => { el.style.display = 'none'; });
      }

      

      studentName.addEventListener('change', function(e) {
        const index = e.target.selectedIndex;
        const options = e.target.options;
        const sel = options[index];
        const level = sel.dataset.levelId;
       
        
        levelEl.value = level;
        
        hideAllLevels();  // hide all levels
        document.querySelectorAll(`[data-type="${levelToUnit[level]}"]`).forEach(el => el.style.display = 'block');
      });

      const defIndex = studentName.selectedIndex;
      levelEl.value = studentName.options[defIndex].dataset.levelId;
     

      
      hideAllLevels();
      
      
    })();

    </script>

@endsection