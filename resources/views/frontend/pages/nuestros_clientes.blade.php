@extends('frontend.frontend_master')
@section('title', 'Lionsfield | Nuestros Clientes')
@section('frontend')
<div class="jumbotron nuestros">
    <div class="container color-change">
      <div class="caption pb-3 caption text-center pt-5" data-aos="slide-left" data-aos-delay="10"
        data-aos-duration="1000">NUESTROS CLIENTES</div>
      <div class="sub-caption text-center pb-5" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">GRACIAS
        POR PERMITIRNOS FORMAR PARTE DE SU ÉXITO</div>
      <div class="text-center">
        <button class="btn custom-button text-uppercase text-center" data-aos="fade-up" data-aos-delay="900"
          data-aos-duration="1000"> <a class="text-white" href="{{ route('contacto') }}">Solicite Una Clase Demo Gratis
          </a></button>
      </div>
    </div>
  </div>
  <div class="container pb-3 mb-3">
    <h1 class="blog-heading text-uppercase text-center pt-5 pb-5"><span class="blog-heading-span text-center">ALGUNOS
        DE</span><br>NUESTROS VALIOSOS CLIENTES</h1>
  </div>
  <div class="gallery backdrop">
    <figure class="gallery__item gallery__item--1 overlay"><img class="grow gallery__img"
        src="{{ asset('frontend/assets/img/Renault-e1437433948637.jpg') }}" alt="Gallery image 1">
      <div class="text-overlay-above">
        <div class="text-content-above text-center"><a class="text-white" href="{{ route('renault') }}"><i
              class="fa fa-eye fa-2x circle-icon"></i></a></div>
      </div>
      <div class="text-overlay">
        <div class="text-content text-center"> <a href="{{ route('renault') }}">
            <h3 class="text-white">Renault</h3>
          </a><a href="{{ route('renault') }}">
            <p class="corporate-hover">Business Client</p>
          </a></div>
      </div>
    </figure>
    <figure class="gallery__item gallery__item--2 overlay"><img class="gallery__img" src="{{ asset('frontend/assets/img/hsbc.jpg') }}"
        alt="Gallery image 2">
      <div class="text-overlay-above">
        <div class="text-content-above text-center"><a class="text-white" href="{{ route('hsbc') }}"><i
              class="fa fa-eye fa-2x circle-icon"></i></a></div>
      </div>
      <div class="text-overlay">
        <div class="text-content text-center"><a href="{{ route('hsbc') }}">
            <h3 class="text-white">HSBC</h3>
          </a><a href="{{ route('hsbc') }}">
            <p class="corporate-hover">Business Client</p>
          </a></div>
      </div>
    </figure>
    <figure class="gallery__item gallery__item--3 overlay"><img class="gallery__img" src="{{ asset('frontend/assets/img/ge.jpg') }}"
        alt="Gallery image 3">
      <div class="text-overlay-above">
        <div class="text-content-above text-center"><a class="text-white" href="{{ route('ge') }}"><i
              class="fa fa-eye fa-2x circle-icon"></i></a></div>
      </div>
      <div class="text-overlay">
        <div class="text-content text-center"><a href="{{ route('ge') }}">
            <h3 class="text-white">GE</h3>
          </a><a href="{{ route('ge') }}"></a>
          <p class="corporate-hover">Business Client</p>
        </div>
      </div>
    </figure>
    <figure class="gallery__item gallery__item--4 overlay"><img class="gallery__img" src="{{ asset('frontend/assets/img/holiday-inn.jpg') }}"
        alt="Gallery image 4">
      <div class="text-overlay-above">
        <div class="text-content-above text-center"><a class="text-white" href="{{ route('holiday_inn') }}"><i
              class="fa fa-eye fa-2x circle-icon"></i></a></div>
      </div>
      <div class="text-overlay">
        <div class="text-content text-center"> <a href="{{ route('holiday_inn') }}">
            <h3 class="text-white">Holiday Inn</h3>
          </a><a href="{{ route('holiday_inn') }}">
            <p class="corporate-hover">Business Client</p>
          </a></div>
      </div>
    </figure>
    <figure class="gallery__item gallery__item--5 overlay"><img class="gallery__img" src="{{ asset('frontend/assets/img/toyota.jpg') }}"
        alt="Gallery image 5">
      <div class="text-overlay-above">
        <div class="text-content-above text-center"><a class="text-white" href="{{ route('toyota') }}"><i
              class="fa fa-eye fa-2x circle-icon"></i></a></div>
      </div>
      <div class="text-overlay">
        <div class="text-content text-center"><a href="{{ route('toyota') }}">
            <h3 class="text-white">Toyota</h3>
          </a><a href="{{ route('toyota') }}">
            <p class="corporate-hover">Business Client</p>
          </a></div>
      </div>
    </figure>
    <figure class="gallery__item gallery__item--6 overlay"><img class="gallery__img" src="{{ asset('frontend/assets/img/hiab.jpg') }}"
        alt="Gallery image 6">
      <div class="text-overlay-above">
        <div class="text-content-above text-center"><a class="text-white" href="{{ route('hiab') }}"><i
              class="fa fa-eye fa-2x circle-icon"></i></a></div>
      </div>
      <div class="text-overlay">
        <div class="text-content text-center"><a href="/hiab">
            <h3 class="text-white">Hiab</h3>
          </a><a href="/hiab">
            <p class="corporate-hover">Business Client</p>
          </a></div>
      </div>
    </figure>
  </div>
  <div class="owl-carousel owl-theme pt-5 pb-5">
    <div class="item"><img class="grey full" src="{{ asset('frontend/assets/img/subway.png') }}" style="height: 100%;" alt=""></div>
    <div class="item"><img class="grey full" src="{{ asset('frontend/assets/img/SHCP.png') }}" style="height: 100%;" alt=""></div>
    <div class="item"><img class="grey full" src="{{ asset('frontend/assets/img/SEDESOL.png') }}" style="height: 100%;" alt=""></div>
    <div class="item"><img class="grey full" src="{{ asset('frontend/assets/img/RENAULT-icon.png') }}" style="height: 100%;" alt=""></div>
    <div class="item"><img class="grey full" src="{{ asset('frontend/assets/img/IUSACELL.png') }}" style="height: 100%;" alt=""></div>
    <div class="item"><img class="grey full" src="{{ asset('frontend/assets/img/GENERAL-ELECTRIC.png') }}" style="height: 100%;" alt=""></div>
    <div class="item"><img class="grey full" src="{{ asset('frontend/assets/img/GALERIAS-EL-TRIUNFO.png') }}" style="height: 100%;" alt="">
    </div>
    <div class="item"><img class="grey full" src="{{ asset('frontend/assets/img/ELIORGROUP.png') }}" style="height: 100%;" alt=""></div>
    <div class="item"><img class="grey full" src="{{ asset('frontend/assets/img/ASSA-ABLOY.png') }}" style="height: 100%;" alt=""></div>
    <div class="item"><img class="grey full" src="{{ asset('frontend/assets/img/AREAS.png') }}" style="height: 100%;" alt=""></div>
  </div>
@endsection