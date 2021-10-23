@extends('frontend_inicio.inicio_master')
@section('frontend_two')
<div class="spacerdiv mt-5 mb-5 pt-2">
    <div class="extra-space" style="padding: 50px;"></div>
</div>

<div class="container mt-5">
    <div class="row mt-5">
        <div class=" col-md-12 d-flex align-items-center justify-content-center">
            <h2 class="text-success" style="font-size: 26px;">Tu órden ha sido cancelada satisfactoriamente,
                lamentamos mucho que te vayas, pero si aún tienes dudas sobre los beneficios de un tutor profesional
                nativo en línea, no dudes en contactarnos!</h2><br>


        </div>
        <button type="button" class="btn btn-success mt-3 ml-3"><a class="text-white"
                href="{{ route('contact_us') }}">Contáctanos</a></button>
    </div>
</div>
<div class="extra-space" style="padding: 50px; margin-bottom: 50px;"></div>
@endsection