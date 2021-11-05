@extends('frontend.frontend_master')
@section('title', 'Lionsfield | Toyota')
@section('frontend')
<div class="container">
    <div class="col-wrapper breathe">
      <div class="col-a"><img src="{{ asset('frontend/assets/img/toyota.jpg') }}"></div>
      <div class="col-b">
        <h2 class="pb-5">Toyota</h2>
        <hr>
        <h3 class="pt-5">Description</h3><br>
        <p>We helped a Top Director in achieving his international goals.</p>
        <div class="col-wrapper-2">
          <div class="col-c">
            <h4>Client:</h4><br>
            <h4>Skills Used:</h4><br>
            <h4>Tags:</h4><br>
            <h4>Demo Link:</h4>
          </div>
          <div class="col-d">
            <h4><span class="corp-profile">Toyota</span></h4><br>
            <h4><span class="corp-profile">Training</span></h4><br>
            <h4><span class="corp-profile">business, training</span></h4><br>
            <h4> <span class="corp-profile">www.toyota.com</span></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection