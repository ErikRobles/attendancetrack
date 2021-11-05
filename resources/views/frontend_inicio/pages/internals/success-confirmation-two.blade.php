@extends('frontend_inicio.inicio_master')
@section('title', 'Lionsfield | Confirmar Pago')
@section('frontend_two')
<div class="spacerdiv mt-5 mb-5 pt-2">
    <div class="extra-space" style="padding: 50px;"></div>
</div>

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="{{ asset('frontend/assets/img/green-check-mark.png')}}" style="width: 50%;" />
        </div>
        <div class=" col-md-6 d-flex align-items-center justify-content-center">
            <h2 class="text-success" style="font-size: 26px;">You payment has been <br>made
                successfully<br><span class="text-success" style="font-size: 22px;">Thank You!</span></h2>

        </div>
    </div>
</div>
<div class="extra-space" style="padding: 50px; margin-bottom: 50px;"></div>
@endsection