@extends('frontend_inicio.inicio_master')
@section('frontend_two')
<div class="jumbotron metodo img-fluid" id="jumbotron">
    <div class="container color-change">
      <div class="caption pb-3 caption text-center pt-5" data-aos="fade-up" data-aos-delay="500"
        data-aos-duration="1000">¡APROVECHA TU TIEMPO!</div>
      <div class="sub-caption text-center pb-5" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000">
        INGLÉS PROFESIONAL EN LÍNEA HASTA TU CASA U OFICINA</div>
      <div class="text-center">
        <button class="btn custom-button text-uppercase text-center" data-aos="fade-up" data-aos-delay="1500"
          data-aos-duration="1000"> <a class="text-white" href="{{ route('price-plan') }}">CONSULTA
            NUESTROS PLANES
          </a></button>
      </div>
    </div>
  </div>
  <div class="metodo-wrapper-1 pb-3 mb-3">
    <div class="col-wrapper">
      <div class="col-a">
        <div class="" data-aos="fade-left" data-aos-delay="10" data-aos-duration="1000">
          <figure class="overlay"><img class="metodo-img" src="{{ asset('frontend/assets/img/O6CF2K0.jpg') }}">
            <div class="text-overlay-above">
              <div class="text-content-above text-center"><a class="text-white"
                  href="{{ route('price-plan') }}"><i class="fa fa-eye fa-2x circle-icon"></i></a>
              </div>
            </div>
            <div class="text-overlay">
              <div class="text-content text-center"><a href="{{ route('price-plan') }}">
                  <h3 class="text-white">compruébalo</h3>
                </a><a href="{{ route('price-plan') }}">
                  <p class="corporate-hover">Adquiere tu plan ahora</p>
                </a></div>
            </div>
          </figure>
        </div>
      </div>
      <div class="col-b">
        <div class="" data-aos="fade-right" data-aos-delay="10" data-aos-duration="1000"><span
            class="metodo-top-heading">Clases Grupales Online</span>
          <h2 class="metodo-sub-heading mb-2">PORQUE LA INTERACCIÓN EN GRUPO ES INTERESANTE</h2>
          <p>
            En nuestras clases grupales podrás conocer amigos y participar en grupo. Las clases en grupo son divertidas
            y a veces controversiales. Las clases en grupo son conversacionales y su objetivo principal es que puedas
            aprender hablando, tanto con el profesor nativo como exponiendo tus ideas a tus compañeros sin importar tu
            nivel. ¡Quítate la pena de hablar en inglés frente a otras personas! Además, las clases grupales son muy
            accesibles.</p>

          <button class="btn custom-button-3 p-2 mb-4 mt-3 text-uppercase text-center"> <a class="text-white"
              href="{{ route('price-plan') }}">Inscríbete Ahora</a></button>
        </div>
      </div>
    </div>
  </div>
  <div class="metodo-wrapper-2 pt-5 pb-5 mb-3">
    <div class="col-wrapper">
      <div class="col-a">
        <div class="" data-aos="fade-in-left" data-aos-delay="10" data-aos-duration="1000"><span
            class="metodo-top-heading">Clases Privadas Online</span>
          <h2 class="metodo-sub-heading mb-2">Para Ejecutivos que buscan un Profesor Particular</h2>
          <p>
            En nuestras clases individuales, el profesor se centra exclusivamente en tí. En tus necesidades específicas,
            en tu ritmo y en tu progreso. ¿Necesitas enviar un email importante en inglés? No hay problema, nuestros
            profesores con gusto te ayudarán. Además, utilizamos un método premiado a nivel internacional: Intelligent
            Business de Pearson.</p><br><br>
        </div>
        <a class="b" href="https://www.pearson.com/english/catalogue/business-english/intelligent-business.html"
          target="_blank">
          Saber Más...</a><br><br>
        <button class="btn custom-button-3 p-2 mb-4 text-uppercase text-center"> <a class="text-white"
            href="{{ route('price-plan') }}">Inscríbete Ahora</a></button>
      </div>
      <div class="col-b">
        <div class="" data-aos="fade-right" data-aos-delay="10" data-aos-duration="1000">
          <figure class="overlay"><img class="metodo-img" src="{{ asset('frontend/assets/img/O6XN9C0.jpg') }}">
            <div class="text-overlay-above">
              <div class="text-content-above text-center"><a class="text-white"
                  href="{{ route('price-plan') }}"><i class="fa fa-eye fa-2x circle-icon"></i></a>
              </div>
            </div>
            <div class="text-overlay">
              <div class="text-content text-center"><a href="{{ route('price-plan') }}">
                  <h3 class="text-white">compruébalo</h3>
                </a><a href="{{ route('price-plan') }}">
                  <p class="corporate-hover">Adquiere tu plan ahora</p>
                </a></div>
            </div>
          </figure>
        </div>
      </div>
    </div>
  </div>
  <div class="metodo-wrapper-1 pb-3 mb-3">
    <div class="col-wrapper">
      <div class="col-a" style="padding: 0;">
        <div class="" data-aos="fade-left" data-aos-delay="10" data-aos-duration="1000"><img class="metodo-img"
            src="{{ asset('frontend/assets/img/tablet.jpg') }}"></div>
      </div>
      <div class="col-b text-center">
        <div class="" data-aos="zoom-in" data-aos-delay="10" data-aos-duration="1000"><span
            class="metodo-top-heading">Compruébalo tú mismo</span>
          <h2 class="metodo-sub-heading mb-2">Elije la mejor opción</h2>
          <p>
            A diferencia de otras empresas que ofrecen clases de inglés en línea, nuestros maestros son profesionales y
            están comprometidos con tu aprendizaje. Si buscas que tu dinero se convierta en una inversión y no en un
            gasto, inscríbete un mes con nosotros y nota la diferencia.
          </p>
          <div class="container">
            <div class="row">
              <div class="col-sm boxy mb-3 ml-2 mr-2"><span class="value counter-1">824</span>
                <div class="red-small text-uppercase pb-2">Estudiantes<br>Satisfechos</div>
              </div>
              <div class="col-sm boxy mb-3 ml-2 mr-2"><span class="value counter-1">46,890</span>
                <div class="red-small text-uppercase pb-2">Horas de Clase<br>Impartidas </div>
              </div>
              <div class="col-sm boxy mb-3 ml-2 mr-2"><span class="value counter-1">155</span>
                <div class="red-small text-uppercase pb-2">Programas <br>Implementados </div>
              </div>
            </div>
            <div class="" data-aos="zoom-in-up" data-aos-delay="10" data-aos-duration="1000">
              <div class="button-wrapper">
                <button class="btn custom-button-4 mt-5 p-2 mb-4 text-uppercase text-center"> <a class="text-white"
                    href="{{ route('price-plan') }}">Inscríbete</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="metodo-wrapper-2 pt-5 pb-5 mb-3">
    <div class="col-wrapper">
      <div class="col-a">
        <div class="" data-aos="fade-in-left" data-aos-delay="10" data-aos-duration="1000"><span
            class="metodo-top-heading">Capacitación Profesional</span>
          <h2 class="metodo-sub-heading">Al servicio de tus objetivos</h2>
        </div>
        <div class="service-box"><br><br>
          <div class="float-left">
            <div class="" data-aos="fade-in" data-aos-delay="10" data-aos-duration="1000">
              <div class="" data-aos="fade-down-right" data-aos-delay="10" data-aos-duration="1000"><i
                  class="mr-5 fa fa-bullhorn fa-2x circle-icon-2"></i></div>
            </div>
          </div>
          <div class="text-col">
            <h5 class="title-2">Comunícate en Inglés</h5>
            <p class="content">Adquiere el lenguaje de negocios y logra tus metas, o <span class="bolded">capacita a tu
                personal e incrementa su eficacia</span>.</p>
          </div>
        </div>
        <div class="service-box"><br><br>
          <div class="float-left">
            <div class="" data-aos="fade-in" data-aos-delay="10" data-aos-duration="1000">
              <div class="wow rotateInDownLeft" data-aos="fade-down-right" data-aos-delay="10" data-aos-duration="1000">
                <i class="mr-5 fa fa-map-marker fa-2x circle-icon-2"></i></div>
            </div>
          </div>
          <div class="text-col">
            <h5 class="title-2">Aprende en cualquier lugar</h5>
            <p class="content">Evita el tráfico de la ciudad y maximiza el aprovechamiento de tu tiempo y el de tu
              equipo de trabajo.</p>
          </div>
        </div>
        <div class="service-box"><br><br>
          <div class="float-left extra-margin">
            <div class="" data-aos="fade-in" data-aos-delay="10" data-aos-duration="1000">
              <div class="" data-aos="fade-down-right" data-aos-delay="10" data-aos-duration="1000"><i
                  class="mr-5 fa fa-thumbs-up fa-2x circle-icon-2" style="margin-bottom: 100px;"></i></div>
            </div>
          </div>
          <div class="text-col">
            <h5 class="title-2 no-wrap-text">Comunica tus ideas efectivamente</h5>
            <p class="content">Con nuestras Clases Conversacionales: Comprende, Explica tus Ideas y Haz Negocios en
              Inglés. Haz del Idioma una herramienta de éxito.</p>
          </div>
        </div>
      </div>
      <div class="col-b"><img src="{{ asset('frontend/assets/img/shutterstock_439214011.jpg') }}"></div>
    </div>
  </div>
  <div class="metodo-wrapper-1 pb-3 mb-3 text-center"><span class="metodo-top-heading">Calidad Educativa</span>
    <h2 class="metodo-sub-heading">Centrada en nuestros Alumnos </h2>
    <p>
      Porque la metodología es únicamente buena cuando rinde resultados, nos actualizamos constantemente para coadyuvar
      a tu aprendizaje efectivo del idioma Inglés. Hemos implementado varios programas de capacitación extensivos en
      empresas líderes del mercado. No dudes en contactarnos si requieres una explicación más detallada de nuestra
      metodología o de nuestro programa de capacitación empresarial.
    </p><br>
    <button class="btn custom-button-3 p-2 mb-4 text-uppercase text-center"> <a class="text-white"
        href="{{ route('contact_us') }}">CONTÁCTANOS Y COMPRUÉBALO</a></button>
  </div>
@endsection