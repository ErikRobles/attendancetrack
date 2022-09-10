@extends('admin.admin_master')
@section('title', 'Lionsfield | Edit Performance')
@section('admin')
{{-- @php
dd($allData['last_unit_covered'])
@endphp --}}
<div class="content-wrapper p-3">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header"> 
            <h3 class="card-title">Edit Performance</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('performance_update', $allData->id) }}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="date">Select Date</label>
                            <input class="form-control" type="date" value="{{ $allData->date }}" name="date" required>  
                        </div>
                    </div><!--End col md 12-->
                </div><!--end row-->
                <div class="add_item">

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                          <h5>Student Name <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <select name="student_id" required class="form-control" id="student_name">
                                  <option value="" selected disabled>Select Student Name</option>
                                      <option value="{{ $allData['student']['id'] }}" {{ ($allData['student']['id'] == $allData->student_id) ? "selected" : "" }} data-level-id="{{$allData['student']['level_id']}}">{{ $allData['student']['name'] }}</option>
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
                      <select name="level_id" id="level_id" class="form-control" >
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

                      <div class="col-md-3">
                        <div class="form-group">
                          <h5>Last Unit Covered </h5>
                          <div class="controls">
                              <select name="last_unit_covered" class="form-control" id="lastUnitCovered">
                                  @include('admin.performance_partials.servUnitEdit')
                                  @include('admin.performance_partials.elemUnitEdit')
                                  @include('admin.performance_partials.preUnitEdit')
                                  @include('admin.performance_partials.intUnitEdit')
                                  @include('admin.performance_partials.uppUnitEdit')                             
                                  @include('admin.performance_partials.advUnitEdit')                               
                                  @include('admin.performance_partials.speUnitEdit')     
                                </select>
                          </div>
                        </div>
                          {{-- End form Group --}}    
                      </div>
                      {{-- End Col md 3 --}}

                      <div class="col-md-3">
                        <div class="form-group">
                      <h5>Last Page Viewed <span class="text-danger">*</span></h5>
                      <div class="controls">
                          @include('admin.performance_partials.lastUnitCoveredEditPartial')
                        </div>
                      </div>
                      </div>
                    {{-- End Col md 3 --}}  

                      <div class="col-md-4" id="progress_inputs">
                        <div class="form-group select">
                          <h5>Rate Your Student </h5>
                          <div class="controls">
                        <select class="form-control" name="student_progress" id="student_progress" required>
                          <option value="" selected disabled>Rate Student's Progress</option>                         
                          <option value="1" {{ ($allData->student_progress == "1") ? "selected" : "" }}>1</option>
                          <option value="2" {{ ($allData->student_progress == "2") ? "selected" : "" }}>2</option>
                          <option value="3" {{ ($allData->student_progress == "3") ? "selected" : "" }}>3</option>
                          <option value="4" {{ ($allData->student_progress == "4") ? "selected" : "" }}>4</option>
                          <option value="5" {{ ($allData->student_progress == "5") ? "selected" : "" }}>5</option>
                          <option value="6" {{ ($allData->student_progress == "6") ? "selected" : "" }}>6</option> 
                          <option value="7" {{ ($allData->student_progress == "7") ? "selected" : "" }}>7</option>
                          <option value="8" {{ ($allData->student_progress == "8") ? "selected" : "" }}>8</option>
                          <option value="9" {{ ($allData->student_progress == "9") ? "selected" : "" }}>9</option>
                          <option value="10" {{ ($allData->student_progress == "10") ? "selected" : "" }}>10</option>                                                
                        </select>
                          </div>
                        </div>
                      </div>
                    
                      {{-- End Col md 4 --}}

                      

                      <div class="col-md-3">
                        <div class="form-group">
                          <h5>Exam Type </h5>
                          <div class="controls">
                              <select name="exam_type" class="form-control">
                                  <option value="{{$allData->exam_type}}" selected>{{$allData->exam_type }}</option>
                                   @foreach($exam_titles as $exam)
                                  <option value="{{ $exam->title }}">{{ $exam->title }}</option>
                                @endforeach 
                                </select>
                          </div>
                        </div>
                          {{-- End form Group --}}    
                      </div>
                      {{-- End Col md 3 --}}

                      <div class="col-md-4">
                        <div class="form-group">
                          <h5>Exam Score </h5>
                          <div class="controls">
                            <input name="exam_score" type="number" value="{{ $allData->exam_score }}" class="form-control" placeholder="Enter Exam Score">                            
                          </div>
                        </div>
                          {{-- End form Group --}}    
                      </div>
                      {{-- End Col md 4 --}}

                      <div class="col-md-6">
                        <div class="form-group">
                          <h5>Comments </h5>
                            <textarea class="form-control" name="comments" placeholder="Add Comments about your student's progress here.">{{ $allData->comments }}</textarea>  
                        </div>
                    </div><!--End col md 6-->
                      
                      
                      
                </div><!--End Row-->
                <br> <br>
            </div><!--End add_item row-->
            
            </div>
            <!-- /.card-body -->


            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update Progress Report</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

    </div>
</div>
</div>
<script src="{{ asset('js/performance-scripts/lastUnitCoveredEdit.js') }}"></script>
  {{-- <script src="{{ asset('js/performance-scripts/lastUnitCoveredNext.js') }}"></script> --}}
  <script>
    
    (function() {
      const studentName = document.querySelector('#student_name');
      const levelEl = document.querySelector('#level_id');
     

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

      hideAllLevels();

      const defIndex = studentName.selectedIndex;
      levelEl.value = studentName.options[defIndex].dataset.levelId;
      console.log(levelEl.value);
      document.querySelectorAll(`[data-type="${levelToUnit[levelEl.value]}"]`).forEach(el => el.style.display = 'block');
      const levelUnitEl = document.querySelector('#lastUnitCovered');

     levelUnitEl.value = "{{$allData['last_unit_covered'] }}";
     let prevUnit = levelUnitEl.value;

     levelUnitEl.addEventListener('change', function(e) {
       console.log(e.target.value, prevUnit);
       const puel =  document.querySelector('#' + prevUnit);
      puel.style.display = 'none';
      puel.querySelector('select').setAttribute('disabled', 'disabled');
      const vel = document.querySelector('#' + e.target.value);
      vel.querySelector('select').removeAttribute('disabled');
      vel.style.display = 'block';
      
      prevUnit = e.target.value;
      document.querySelector('#' + e.target.value + ' select').value = '';
     });
     document.querySelectorAll('.last_page_viewed').forEach(el => {
      el.setAttribute('disabled', 'disabled');
     });
     document.querySelector('#' + prevUnit + ' .last_page_viewed').removeAttribute('disabled');
     document.querySelector('#' + prevUnit + ' .last_page_viewed').value = "{{$allData->last_page_viewed}}";
    })();
</script>
   
@endsection