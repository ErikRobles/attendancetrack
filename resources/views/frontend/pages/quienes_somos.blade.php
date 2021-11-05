@extends('frontend.frontend_master')
@section('title', 'Lionsfield | Quienes Somos')
@section('frontend')
<div class="jumbotron quienes img-fluid">
    <div class="container color-change">
      <div class="caption caption text-center pt-5" data-aos="slide-left" data-aos-delay="10" data-aos-duration="1000">
        LIONSFIELD MÉXICO</div>
      <div class="sub-caption text-center pb-5" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
        LIDERAZGO EN CAPACITACIÓN DE IDIOMAS</div>
      <div class="text-center">
        <button class="btn custom-button text-uppercase text-center" data-aos="fade-up" data-aos-delay="900"
          data-aos-duration="1000"> <a class="text-white" href="{{ route('contacto') }}">Solicite Una Clase Demo Gratis
          </a></button>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <h4 class="text-uppercase">Lionsfield México</h4>
        <h5 class="quienes-sub-title">Capacitación de Alto Rendimiento</h5>
        <p class="quienes-body-text">
          En Lionsfield somos un equipo profesional dedicado a la Capacitación Empresarial de Alto Nivel. Una marca de
          <span class="bolded">Magisterial Education America </span>con sede en los Estados Unidos enfocada a la
          aplicación de la tecnología en la Educación. Desde el año 2003 proveemos capacitación empresarial en lenguas
          extranjeras para empresas, con especialidad en el idioma Inglés. Somos un equipo de profesionales que pone a
          su disposición los mejores capacitadores, tecnología de punta y servicio de excelencia.</p>
      </div>
      <div class="col-12 col-md-6">
        <div data-aos="zoom-in-down" data-aos-delay="10" data-aos-duration="1000">
          <h4 class="title">IMPACTO EN DESEMPEÑO</h4>
          <div id="progressbar1" line-progressbar data-percentage="100" data-duration="1500"
            data-progress-color="#eb5858"><span class="sr-only">100%</span>100%</div>
          <h4 class="title">ESTUDIANTES AVANZADOS</h4>
          <div id="progressbar2" line-progressbar data-percentage="75" data-duration="2000"
            data-progress-color="#eb5858"><span class="sr-only">75%</span>75%</div>
          <h4 class="title">CLIENTES EMPRESARIALES</h4>
          <div id="progressbar3" line-progressbar data-percentage="85" data-duration="2500"
            data-progress-color="#eb5858"><span class="sr-only">85%</span>85%</div>
          <h4 class="title">PROGRAMAS INTEGRALES</h4>
          <div id="progressbar4" line-progressbar data-percentage="60" data-duration="3000"
            data-progress-color="#eb5858"><span class="sr-only">60%</span>60%</div>
          <h4 class="title">ESTUDIANTES DE NIVEL DIRECTIVO</h4>
          <div id="progressbar5" line-progressbar data-percentage="71" data-duration="3900"
            data-progress-color="#eb5858"><span class="sr-only">71%</span>71%</div>
        </div>
      </div>
    </div>
  </div>
  <div class="about-section-2">
    <div class="ab-sec-2-wrapper text-center">
      <h1 class="blog-heading text-uppercase text-center pt-5 pb-5"><span
          class="blog-heading-span text-center">EXCELENCIA ACADÉMICA</span><br>EN ENSEÑANZA DEL IDIOMA INGLÉS</h1>
      <div class="row">
        <div class="col-12 col-md-4 pb-3">
          <div class="aos-init" data-aos="flip-left" data-aos-delay="600" data-aos-duration="1000"><img
              class="research pt-3 pb-3" src="{{ asset('frontend/assets/img/quality.png') }}"></div>
          <h6>PROFESIONALES</h6>
          <p class="about-section-text"></p>Con 14 años de experiencia, nos hemos consolidado como el único instituto de
          alta calidad y rendimiento en enseñanza de lenguas extranjeras para ejecutivos y compañías en México.
        </div>
        <div class="col-12 col-md-4 pb-3">
          <div class="aos-init" data-aos="flip-left" data-aos-delay="600" data-aos-duration="1000"><img
              class="research pt-3 pb-3" src="{{ asset('frontend/assets/img/pen-tip.png') }}"></div>
          <h6>EXPERTOS</h6>
          <p class="about-section-text"></p>Profesores Certificados con años de experiencia impartiendo clases a
          ejecutivos de alto nivel. Somos expertos en las necesidades de nuestros clientes referentes al aprendizaje y
          dominio del idioma.
        </div>
        <div class="col-12 col-md-4 pb-3">
          <div class="aos-init" data-aos="flip-left" data-aos-delay="600" data-aos-duration="1000"><img
              class="research pt-3 pb-3" src="{{ asset('frontend/assets/img/charity.png') }}"></div>
          <h6>CONFIABLES</h6>
          <p class="about-section-text"></p>Somos una institución seria y profesional. Tenemos un alto valor ético
          compartido por nuestros asesores y maestros.
        </div>
        <div class="col-12 col-md-4 pb-3">
          <div class="aos-init" data-aos="flip-left" data-aos-delay="600" data-aos-duration="1000"><img
              class="research pt-3 pb-3" src="{{ asset('frontend/assets/img/map.png') }}"></div>
          <h6>FLEXIBLES</h6>
          <p class="about-section-text"></p>Nuestro equipo de desarrollo académico se mantiene al tanto de las mejores y
          más innovadoras propuestas en enseñanza del idioma inglés a nivel global para adaptarnos a las nuevas
          tendencias.
        </div>
        <div class="col-12 col-md-4 pb-3">
          <div class="aos-init" data-aos="flip-left" data-aos-delay="600" data-aos-duration="1000"><img
              class="research pt-3 pb-3" src="{{ asset('frontend/assets/img/book-with-bookmark.png') }}"></div>
          <h6>DEDICADOS</h6>
          <p class="about-section-text"></p>Tomamos en serio la enseñanza de idiomas. Hacemos de sus objetivos, nuestros
          objetivos, para lograr excelentes resultados en su aprendizaje y fluidez conversacional.
        </div>
        <div class="col-12 col-md-4 pb-5">
          <div class="aos-init" data-aos="flip-left" data-aos-delay="600" data-aos-duration="1000"><img
              class="research pt-3 pb-3" src="{{ asset('frontend/assets/img/agreement.png') }}"></div>
          <h6>SERVICIALES</h6>
          <p class="about-section-text"></p>Nuestros ejecutivos de cuenta, están pendientes del avance, y progreso de
          cada alumno, aportando ideas para mejorar la experiencia de aprendizaje y que nuestros alumnos siempre
          obtengan los mejores beneficios profesionales.
        </div>
      </div>
    </div>
    <div class="hero">
      <div class="row">
        <div class="col-12 col-md-6">
          <h2 class="quienes-2-heading-span text-uppercase text-left pt-5 pb-5"><span
              class="quienes-2-title text-center">Lo más <br>importante</span><br>Son Sus<br>Objetivos</h2>
          <p class="quienes-text-white">Nuestra razón de existir es ayudar en el logro de sus objetivos. Para nosotros
            su inversión debe verse reflejada en resultados, por lo que no escatimamos en calidad educativa para
            brindarle la mejor y más productiva experiencia de aprendizaje.</p>
        </div>
        <div class="col-12 col-md-6">
          <p class="red-backdrop">Ya sea en clases personalizadas individuales para ejecutivos de alto nivel o en grupos
            de capacitación empresarial, ofrecemos la mejor calidad educativa y un servicio de primer nivel. En la
            actualidad somos la única institución enfocada en su totalidad a la impartición de clases de inglés para
            empresas, y nuestro mercado nos exige resultados de excelencia.</p>
          <div class="col-programs aos-init" data-aos="flip-down">
            <p class="ml-0 mr-0"><span style="color: #fff; font-size: 16px;">ALTA CALIDAD <br>EDUCATIVA</span></p>
            <p></p>
          </div>
          <div class="col-programs aos-init" data-aos="flip-down" data-aos-duration="900">
            <p><span style="color: #fff; font-size: 16px;">SERVICIO DE CLASE <br>MUNDIAL</span></p>
            <p></p>
          </div>
          <div class="col-programs aos-init" data-aos="flip-down" data-aos-duration="900">
            <p><span style="color: #fff; font-size: 16px;">RESULTADOS <br>MENSURABLES</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3 mb-3 pt-5">
    <div class="heading text-center">COMPRUÉBELO HOY MISMO </div>
    <div class="subheading text-center">Solicite una Clase Demo Sin Compromiso</div>
    <div class="heading-underline">
      <div class="bgrect"></div>
      <div class="triangle"></div>
    </div>
  </div>
  <div class="container pt-3">
    <div class="text-center">
      <button class="btn custom-button-3 p-2 mb-4 text-uppercase text-center"> <a class="text-white"
          href="/contacto">Solicite Una Clase Demo </a></button>
    </div>
  </div>
  <div class="images-section pt-3 pb-3">
    <div class="container pt-5 pb-5">
      <div class="owl-carousel owl-theme">
        <div class="item"><img class="grey" src="{{ asset('frontend/assets/img/Renault-e1437433948637.jpg') }}" alt=""></div>
        <div class="item"><img class="grey" src="{{ asset('frontend/assets/img/hsbc.jpg') }}" alt=""></div>
        <div class="item"><img class="grey" src="{{ asset('frontend/assets/img/hiab.jpg') }}" alt=""></div>
        <div class="item"><img class="grey" src="{{ asset('frontend/assets/img/ge.jpg') }}" alt=""></div>
        <div class="item"><img class="grey" src="{{ asset('frontend/assets/img/holiday-inn.jpg') }}" alt=""></div>
        <div class="item"><img class="grey" src="{{ asset('frontend/assets/img/toyota.jpg') }}" alt=""></div>
      </div>
    </div>
  </div>
@endsection