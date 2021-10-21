@extends('frontend.frontend_master')
@section('frontend')
<div class="jumbotron certificate img-fluid">
    <div class="container color-change">
        <div class="caption pb-3 caption text-center pt-5" data-aos="slide-left" data-aos-delay="1"
            data-aos-duration="1000">CERTIFICACIONES</div>
        <div class="sub-caption text-center text-uppercase pb-5" data-aos="fade-up" data-aos-delay="2"
            data-aos-duration="1000">Con Validez Internacional</div>
        <div class="text-center">
            <button class="btn custom-button text-uppercase text-center" data-aos="fade-up" data-aos-delay="900"
                data-aos-duration="1000"> <a class="text-white" href="{{ route('contacto') }}">Solicite Una Clase Demo Gratis
                </a></button>
        </div>
    </div>
</div>
<div class="title-wrapper">
    <h4 class="text-center pb-1">Reconocimiento Mundial del Dominio del Idioma Inglés</h4>
    <div class="line">
        <div class="hr-theme-slash-2">
            <div class="hr-line"></div>
            <div class="hr-icon"><i class="fa fa-star"> </i></div>
            <div class="hr-line"></div>
        </div>
    </div>
</div>
<div class="image-wrapper-4 pb-3">
    <div class="row">
        <div class="col-md-4">
            <div class="" data-aos="fade-right" data-aos-delay="1" data-aos-duration="1000"> <img
                    src="{{ asset('frontend/assets/img/CAMBBRIDGE.png') }}" /></div>
            <h6>Cambridge ESOL</h6>
            <p>Los exámenes Cambridge English son aceptados por más de 20,000 universidades, empresas y gobiernos de
                todo el mundo. Éstos exámenes pueden dar acceso a la educación superior, mejorar las oportunidades
                de empleo y, debido a su reconocimiento
                global, aumentar las opciones académicas o laborales.</p>
        </div>
        <div class="col-md-4">
            <div class="" data-aos="fade-in" data-aos-delay="1" data-aos-duration="2000"><img
                    src="{{ asset('frontend/assets/img/ETS.png') }}" /></div>
            <h6>ETS</h6>
            <p>ETS desarrolla, imparte y califica más de 50 millones de exámenes al año en más de 180 países, en más
                de 9,000 centros de todo el mundo. Diseña evaluaciones con una perspectiva de industria líder, una
                investigación rigurosa y un compromiso inquebrantable con la calidad, de manera que ayuden a las
                comunidades educativas y los lugares de trabajo a tomar decisiones informadas.</p>
        </div>
        <div class="col-md-4">
            <div class="" data-aos="fade-left" data-aos-delay="1" data-aos-duration="1000"><img
                    src="{{ asset('frontend/assets/img/STPS.png') }}" /></div>
            <h6>STPS</h6>
            <p>Somos una institucion, especializada en la capacitación, contamos con personal docente, instalaciones
                y equipo para brindar servicios de capacitación a las empresas, así como aquellos instructores
                independientes dedicados a prestar tales servicios y que cuentan con la autorización y registro por
                parte de la Secretaría.</p>
        </div>
    </div>
</div>
<div class="metodo-wrapper-2 pt-5 pb-5">
    <div class="title-wrapper">
        <h4 class="text-center">Nuestro Proceso de Certificación
            <div class="line">
                <div class="hr-theme-slash-2">
                    <div class="hr-line"></div>
                    <div class="hr-icon star-2"><i class="fa fa-star"> </i></div>
                    <div class="hr-line"></div>
                </div>
            </div>
        </h4>
        <div class="empty-space"></div>
        <div class="progress-steps-wrapper">
            <div class="row">
              <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 holder">
                <div class="step">
                  <span><i class="fa fa-lightbulb-o fa-4x circle-icon-3"></i>
                    <div class="done">Examen de Colocación</div>
                  </span>
                </div>
                <div class="red-line"></div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 holder">
                <div class="step done">
                  <span><i class="fa fa-bolt fa-4x circle-icon-3"></i>
                    <div class="done">Estudio del Curso</div>
                  </span>
                </div>
                <div class="red-line"></div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 holder">
                <div class="step done">
                  <span><i class="fa fa-pencil fa-4x circle-icon-4"></i>
                    <div class="done">Niveles Avanzados</div>
                  </span>
                </div>
                <div class="red-line"></div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 holder">
                <div class="step done">
                  <span><i class="fa fa-laptop fa-4x circle-icon-4"></i>
                    <div class="done">Preparación para Certificación</div>
                  </span>
                </div>
                <div class="red-line"></div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 holder">
                <div class="step done">
                  <span><i class="fa fa-code fa-4x circle-icon-4"></i>
                    <div class="done">Aplicación de Exámen Estandarizado</div>
                  </span>
                </div>
                <div class="red-line"></div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 holder">
                <div class="step done">
                  <span><i class="fa fa-rocket fa-4x circle-icon-4"></i>
                    <div class="done">Certificación</div>
                  </span>
                </div>
                <div class="red-line"></div>
              </div>
            </div>
          </div>
    </div>
</div>
<div class="red-wrapper pt-5 pb-5">
    <div class="container">
        <h4 class="red-wrapper-heading text-center text-white">Common European Framework of Reference for Languages
            (CEFR)</h4>
        <div class="line">
            <div class="hr-theme-slash-3">
                <div class="hr-line"></div>
                <div class="hr-icon star-3"><i class="fa fa-star"> </i></div>
                <div class="hr-line"></div>
            </div>
        </div>
        <div class="red-wrapper-text text-center text-white"> Además de las Certificaciones anteriores, todos
            nuestros cursos están pareados con los niveles del <strong> CEFR</strong> que está definiendo el
            estándar internacional para el dominio de la lengua. </div>
    </div>
    <div class="container pt-3">
        <div class="text-center"><button class="btn custom-button-3 p-2 mb-4 text-uppercase text-center"
                style="background-color:#dd3333;"> <a class="text-white"
                    href="https://es.wikipedia.org/wiki/Marco_Com%C3%BAn_Europeo_de_Referencia_para_las_lenguas">Saber
                    más sobre el CEFR </a></button></div>
    </div>
</div>
<div class="title-wrapper pt-5">
    <h4 class="text-center pb-1">Resultados Superiores</h4>
    <div class="line mb-5">
        <div class="hr-theme-slash-2">
            <div class="hr-line"></div>
            <div class="hr-icon"><i class="fa fa-star"> </i></div>
            <div class="hr-line"> </div>
        </div>
    </div>
</div>
<div class="image-wrapper-4 pb-3">
    <div class="row pb-3">
        <div class="col-lg-4">
            <div class="float-right satisfaction-icon" data-aos="flip-left" data-aos-duration="2000"><i
                    class="fa fa-diamond fa-2x circle-icon"></i></div>
            <h5 class="satisfaction">Puntuaciones más Altas</h5>
            <p class="satisfaction-text pb-5 mb-3">Nuestros alumnos obtienen puntuaciones muy superiores en los
                exámenes de certificación estandarizados.</p>
            <div class="float-right satisfaction-icon" data-aos="flip-left" data-aos-duration="2000"><i
                    class="fa fa-graduation-cap graduation-cap-alt fa-2x circle-icon"></i></div>
            <h5 class="satisfaction">Certificaciones Propias</h5>
            <p class="satisfaction-text pb-5 mb-3">En Lionsfield también ofrecemos certificaciones propias que
                crecen en reconocimiento en áreas de Recursos Humanos.</p>
            <div class="float-right satisfaction-icon" data-aos="flip-left" data-aos-duration="2000"><i
                    class="fa fa-cog fa-2x circle-icon"></i></div>
            <h5 class="satisfaction">Certificaciones Propias</h5>
            <p class="satisfaction-text pb-5 mb-3">Ofrecemos cursos individuales de preparación para exámenes
                especializados como Cambridge ESOL, TOEIC, TOEFL, IELTS, ETC.</p>
        </div>
        <div class="col-lg-4">
            <div data-aos="fade-in" data-aos-duration="1500">
                <img class="pb-5 mb-3" src="{{ asset('frontend/assets/img/29z4hn5.png') }}" />
            </div>
        </div>
        <div class="col-lg-4">
            <div class="float-left satisfaction-icon" data-aos="flip-left" data-aos-duration="2000"><i
                    class="fa fa-money fa-2x circle-icon"></i></div>
            <h5 class="satisfaction-right">Certificaciones de Negocios</h5>
            <p class="satisfaction-text-right pb-5 mb-3">Contamos con cursos de preparación para exámenes
                especializados en inglés de negocios, como BULATS y BEC</p>
            <div class="float-left satisfaction-icon" data-aos="flip-left" data-aos-duration="2000"><i
                    class="fa fa-bullhorn fa-2x circle-icon" style="padding: 16.5px 16px;"></i></div>
            <h5 class="satisfaction-right">Comunicación Efectiva</h5>
            <p class="satisfaction-text-right pb-5 mb-3">Porque el nivel del idioma es más evidente al hablarlo,
                también ofrecemos cursos de conversación y perfeccionamiento del idioma inglés.</p>
            <div class="float-left satisfaction-icon" data-aos="flip-left" data-aos-duration="2000"><i
                    class="fa fa-user fa-2x circle-icon text-white" style="padding: 16.5px 22px;"></i></div>
            <h5 class="satisfaction-right">Examenes de Colocación</h5>
            <p class="satisfaction-text-right pb-5 mb-3">Para una evaluación rápida y efectiva del nivel del dominio
                del idioma de su personal, ofrecemos examenes de colocación que nos permiten saber el nivel de
                conocimiento del inglés de candidatos o colaboradores.</p>
        </div>
    </div>
</div>
@endsection