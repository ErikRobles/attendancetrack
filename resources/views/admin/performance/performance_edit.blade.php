@extends('admin.admin_master')
@section('title', 'Lionsfield | Edit Performance')
@section('admin')
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
                                      <option value="{{ $allData['student']['id'] }}" {{ ($allData['student']['id'] == $allData->student_id) ? "selected" : "" }}>{{ $allData['student']['name'] }}</option>
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
                              <select name="last_unit_covered" class="form-control">
                                  <option value="" selected disabled>Last Unit Covered</option>
                                  <option value="1" {{ ($allData->last_unit_covered == "1") ? "selected" : "" }}>1</option>
                                  <option value="2" {{ ($allData->last_unit_covered == "2") ? "selected" : "" }}>2</option>
                                  <option value="3" {{ ($allData->last_unit_covered == "3") ? "selected" : "" }}>3</option>
                                  <option value="4" {{ ($allData->last_unit_covered == "4") ? "selected" : "" }}>4</option>
                                  <option value="5" {{ ($allData->last_unit_covered == "5") ? "selected" : "" }}>5</option>
                                  <option value="6" {{ ($allData->last_unit_covered == "6") ? "selected" : "" }}>6</option>
                                  <option value="7" {{ ($allData->last_unit_covered == "7") ? "selected" : "" }}>7</option>
                                  <option value="8" {{ ($allData->last_unit_covered == "8") ? "selected" : "" }}>8</option>
                                  <option value="9" {{ ($allData->last_unit_covered == "9") ? "selected" : "" }}>9</option>
                                  <option value="10" {{ ($allData->last_unit_covered == "10") ? "selected" : "" }}>10</option>
                                  <option value="11" {{ ($allData->last_unit_covered == "11") ? "selected" : "" }}>11</option>
                                  <option value="12" {{ ($allData->last_unit_covered == "12") ? "selected" : "" }}>12</option>
                                  <option value="13" {{ ($allData->last_unit_covered == "13") ? "selected" : "" }}>13</option>
                                  <option value="14" {{ ($allData->last_unit_covered == "14") ? "selected" : "" }}>14</option>
                                  <option value="15" {{ ($allData->last_unit_covered == "15") ? "selected" : "" }}>15</option>
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
                            <input name="last_page_viewed" type="number" value="{{ $allData->last_page_viewed }}" class="form-control" placeholder="Enter page number">                            
                          </div>
                        </div>
                          {{-- End form Group --}}    
                      </div>
                      {{-- End Col md 3 --}}

                      <div class="col-md-3">
                        <div class="form-group">
                          <h5>Exam Type </h5>
                          <div class="controls">
                              <select name="exam_type" class="form-control">
                                  <option value="" disabled>Select Exam Type</option>
                                  <option value="End of Unit Review" {{ ($allData->last_unit_covered == "End of Unit Review") ? "selected" : "" }}>End of Unit Review</option>
                                  <option value="Progress Test 1-3" {{ ($allData->last_unit_covered == "Progress Test 1-3") ? "selected" : "" }}>Progress Test 1-3</option>
                                  <option value="Progress Test 4-6" {{ ($allData->last_unit_covered == "Progress Test 4-6") ? "selected" : "" }}>Progress Test 4-6</option>
                                  <option value="Progress Test 7-9" {{ ($allData->last_unit_covered == "Progress Test 7-9") ? "selected" : "" }}>Progress Test 7-9</option>
                                  <option value="Progress Test 10-12" {{ ($allData->last_unit_covered == "Progress Test 10-12") ? "selected" : "" }}>Progress Test 10-12</option>
                                  <option value="Progress Test 13-15" {{ ($allData->last_unit_covered == "Progress Test 13-15") ? "selected" : "" }}>Progress Test 13-15</option>
                                  <option value="Exit Test" {{ ($allData->last_unit_covered == "Exit Test") ? "selected" : "" }}>Exit Test</option>
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
@endsection