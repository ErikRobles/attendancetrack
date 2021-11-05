@extends('frontend_inicio.inicio_master')
@section('title', 'Lionsfield | How the Brain Works')
@section('frontend_two')
<div class="container breathe">
    <img class="pt-5 image-fluid" src="{{ ('frontend/assets/img/brain.jpg') }}">
    <h1 class="pt-3">How the Brain Learns…</h1>
    <div class="meta-author author pt-3 pb-3">
      <div class="fa fa-user-o"> <a href="{{ route('erik_2') }}" title="Posts by Erik James Robles" rel="author">Erik Robles
          <div class="fa fa-comment-o"> <a href="#">0</a></div></a></div>
    </div>
    <p class="blog">Today, we introduce a new category for teachers and people interested in learning in general. This
      post comes from another fellow blogger and we hope that you enjoy the information that it contains. Thank you.</p>
    <p class="blog"> <a href="https://englishworkshopmexico.wordpress.com/2012/02/07/how-the-brain-learns/">Read
        more…</a></p>
    <div class="blog-col-wrapper pb-5">
      <div class="col-1"><img src="{{ ('frontend/assets/img/f1.jpg') }}"></div>
      <div class="col-2">
        <p class="written">Written by<br><span class="blog-author"> Erik James Robles</span></p>
      </div>
    </div>
  </div>
@endsection