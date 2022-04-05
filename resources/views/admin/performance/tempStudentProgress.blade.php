<div style="visibility: hidden;">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
      <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
        <div class="form-row">

          <div class="col-md-3">
            <div class="form-group">
              <h5>Student Name <span class="text-danger">*</span></h5>
              <div class="controls">
                  <select name="student_id[]" required class="form-control student-name" id="student_name_next">
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

          <div class="col-md-3" style="display: none;">
            <div class="form-group">
              <h5>Student Level <span class="text-danger">*</span></h5>
          <div class="controls">
          <select name="level_id[]" id="level_id_next" class="form-control" >
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
           

    <div class="col-md-3" id="last_unit_inputs_next">
      <div class="form-group select">
        <h5>Last Unit Covered </h5>
        <div class="controls">
      <select class="form-control" name="last_unit_covered[]" id="lastUnitCoveredNext" required>
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
   @include('admin.performance_partials.lastUnitCoveredNextPartial')
         
   <div class="col-md-3" id="progress_inputs_next">
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

  {{-- End Col md 3 --}}

          <div class="col-md-6">
            <div class="form-group">
              <h5>Comments </h5>
                <textarea class="form-control" name="comments[]"></textarea>  
            </div>
        </div><!--End col md 6-->
              
          <div class="col-md-2" style="padding-top: 25px;">
            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
            <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i></span>
          </div>
          
        </div>
        <br> <br>
      </div>
    </div>
  </div>