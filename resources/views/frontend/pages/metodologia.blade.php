@extends('frontend.frontend_master')
@section('frontend')
<div class="jumbotron metodo img-fluid" id="jumbotron">
    <div class="container color-change">
      <div class="caption pb-3 caption text-center pt-5" data-aos="slide-left" data-aos-delay="5"
        data-aos-duration="1000">PLANES DE ESTUDIO</div>
      <div class="sub-caption text-center pb-5" data-aos="fade-up" data-aos-delay="6" data-aos-duration="1000">
        PRESENCIALES Y EN LÍNEA</div>
      <div class="text-center">
        <button class="btn custom-button text-uppercase text-center" data-aos="fade-up" data-aos-delay="900"
          data-aos-duration="1000"> <a class="text-white" href="{{ route('contacto') }}">Solicite Una Clase Demo Gratis
          </a></button>
      </div>
    </div>
  </div>
  <div class="metodo-wrapper-1 pb-3 mb-3">
    <div class="col-wrapper">
      <div class="col-a">
        <div class="" data-aos="fade-left" data-aos-delay="10" data-aos-duration="1000">
          <figure class="overlay"><img class="metodo-img" src="{{ asset('frontend/assets/img/O6CF2K0.png') }}">
            <div class="text-overlay-above">
              <div class="text-content-above text-center"><a class="text-white" href="{{ route('contacto') }}"><i
                    class="fa fa-eye fa-2x circle-icon"></i></a></div>
            </div>
            <div class="text-overlay">
              <div class="text-content text-center"><a href="{{ route('contacto') }}">
                  <h3 class="text-white">Compruébelo</h3>
                </a><a href="{{ route('contacto') }}">
                  <p class="corporate-hover">Solicite Una Clase Demo Ahora</p>
                </a></div>
            </div>
          </figure>
        </div>
      </div>
      <div class="col-b">
        <div class="" data-aos="fade-right" data-aos-delay="10" data-aos-duration="1000"><span
            class="metodo-top-heading">Clases Presenciales</span>
          <h2 class="metodo-sub-heading mb-2">Porque la interacción es fundamental</h2>
          <p>
            Nuestras Clases Presenciales de Inglés de Negocios presenciales han evolucionado rápidamente en los últimos
            años. En el programa de Inglés de Negocios de Lionsfield, es prioritario mantenernos actualizados respecto a
            las técnicas de enseñanza, por lo que ofrecemos cursos laureados a nivel internacional, desarrollados por
            las empresas líderes en enseñanza de lenguas extranjeras, tal es el caso del curso <span
              class="bolded">Intelligent Business </span>de Pearson que ha ganado múltiples reconocimientos por su
            excelencia académica y que utilizamos como base de nuestras clases in-situ.</p>
          <a class="b" href="https://www.pearson.com/english/catalogue/business-english/intelligent-business.html">
            Saber Más...</a><br><br>
          <button class="btn custom-button-3 p-2 mb-4 text-uppercase text-center"> <a class="text-white"
              href="{{ route('contacto') }}">Solicite Una Clase Demo Ahora </a></button>
        </div>
      </div>
    </div>
  </div>
  <div class="metodo-wrapper-2 pt-5 pb-5 mb-3">
    <div class="col-wrapper">
      <div class="col-a">
        <div class="" data-aos="fade-in-left" data-aos-delay="10" data-aos-duration="1000"><span
            class="metodo-top-heading">Clases En Línea</span>
          <h2 class="metodo-sub-heading mb-2">Al día con la Tecnología</h2>
          <p>
            Uno de nustros objetivos principales es brindarle flexibilidad y comodidad. La educación esta cambiando y la
            tecnología nos premite ofrecer clases en vivo con Profesores Nativos, que puede tomar desde su hogar,
            oficina, o donde usted lo prefiera, sin tener que desplazarse.</p><br><br>
        </div>
        <button class="btn custom-button-3 p-2 mb-4 text-uppercase text-center"> <a class="text-white"
            href="{{ route('contacto') }}">Clase Demo Gratis </a></button>
      </div>
      <div class="col-b">
        <div class="" data-aos="fade-right" data-aos-delay="10" data-aos-duration="1000">
          <figure class="overlay"><img class="metodo-img" src="{{ asset('frontend/assets/img/O6XN9C0.png') }}">
            <div class="text-overlay-above">
              <div class="text-content-above text-center"><a class="text-white" href="{{ route('contacto') }}"><i
                    class="fa fa-eye fa-2x circle-icon"></i></a></div>
            </div>
            <div class="text-overlay">
              <div class="text-content text-center"><a href="{{ route('contacto') }}">
                  <h3 class="text-white">Compruébelo</h3>
                </a><a href="{{ route('contacto') }}">
                  <p class="corporate-hover">Solicite Una Clase Demo Ahora</p>
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
            src="{{ asset('frontend/assets/img/tablet.png') }}"></div>
      </div>
      <div class="col-b text-center">
        <div class="" data-aos="zoom-in" data-aos-delay="10" data-aos-duration="1000"><span
            class="metodo-top-heading">Compruébelo Usted Mismo</span>
          <h2 class="metodo-sub-heading mb-2">Elija la mejor opción</h2>
          <p>
            Ponemos a su disposición lo mejor de las clases tradicionales y la vanguadia tecnológica. Permítanos
            demostrarlo en su oficina con una clase demo gratuita.</p>
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
                    href="{{ route('contacto') }}">Contáctanos</a></button>
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
          <h2 class="metodo-sub-heading">Al servicio de sus objetivos</h2>
        </div>
        <div class="service-box"><br><br>
          <div class="float-left">
            <div class="" data-aos="fade-in" data-aos-delay="10" data-aos-duration="1000">
              <div class="" data-aos="fade-down-right" data-aos-delay="10" data-aos-duration="1000"><i
                  class="mr-5 fa fa-bullhorn fa-2x circle-icon-2"></i></div>
            </div>
          </div>
          <div class="text-col">
            <h5 class="title-2">Comuníquese en Inglés</h5>
            <p class="content"></p>Adquiera el lenguaje de los negocios y logre sus metas, o capacite a su personal e
            incremente su eficacia.
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
            <h5 class="title-2">Aprenda en sus Instalaciones</h5>
            <p class="content"></p>Evite el tráfico de la ciudad y maximice el aprovechamiento de su tiempo y el de su
            equipo de trabajo
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
            <h5 class="title-2 no-wrap-text">Comunique sus Ideas Efectivamente</h5>
            <p class="content"></p>Con nuestras Clases Conversacionales: Comprenda, Explique sus Ideas y Cierre
            Proyectos en Inglés. Hága del Idioma una herramienta de éxito.
          </div>
        </div>
      </div>
      <div class="col-b"><img src="{{ asset('frontend/assets/img/shutterstock_439214011.png') }}"></div>
    </div>
  </div>
  <div class="metodo-wrapper-1 pb-3 mb-3 text-center"><span class="metodo-top-heading">Calidad Educativa</span>
    <h2 class="metodo-sub-heading">Centrada en nuestros Alumnos </h2>
    <p>
      Porque la metodología es únicamente buena, cuando rinde resultados, nos actualizamos constantemente para coadyuvar
      a su aprendizaje efectivo del idioma Inglés. <span class="bolded">Hemos implementado varios programas de
        capacitación extensivos en empresas líderes del mercado.</span>No dude en contactárnos si requiere una
      explicación más detallada de nuestra metodología o de nuestros métodos de implementación de programas de
      capacitación empresarial.</p><br>
    <button class="btn custom-button-3 p-2 mb-4 text-uppercase text-center"> <a class="text-white"
        href="{{ route('contacto') }}">Solicite Una Presentación en sus oficinas </a></button>
  </div>
@endsection