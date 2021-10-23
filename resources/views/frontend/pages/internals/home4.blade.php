@extends('frontend.frontend_master')
@section('frontend')
<div class="jumbotron">
    <div class="container color-change">
        <div class="caption caption text-center pt-5" data-aos="slide-left" data-aos-delay="50"
            data-aos-duration="1000">INGLÉS DE NEGOCIOS</div>
        <div class="sub-caption text-center pb-5" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000">
            PARA CONQUISTAR MERCADOS INTERNACIONALES</div>
        <div class="text-center">
            <button class="btn custom-button text-uppercase text-center" data-aos="fade-up" data-aos-delay="2000"
                data-aos-duration="1000"> <a class="text-white" href="{{ route('contacto') }}">Solicite Una Clase Demo Gratis
                </a></button>
        </div>
    </div>
</div>
<div class="container pb-3 mb-3">
    <div class="heading text-center">CLASES DE INGLÉS DE NEGOCIOS. </div>
    <div class="subheading text-center">Para Dominar el Mercado Internacional</div>
    <div class="heading-underline">
        <div class="bgrect"></div>
        <div class="triangle"></div>
    </div>
</div>
<div class="container pt-3">
    <div class="column text-center mb-3 mt-3">
        <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="1000"
            data-aos-delay="0"><img src="{{ asset('frontend/assets/img/icono1.png') }}" alt="" /></div>
        <h6 class="small-p-headers">CALIDAD</h6>
        <p class="infosec">Estamos orgullosos de proporcionar la más alta calidad en la enseñanza, los mejores
            profesores y el mejor material de negocios disponible a nivel mundial.</p>
        <div class="aos-init" data-aos="zoom-in-down" data-aos-duration="1000"><a class="custom-link"
                href="{{ route('contacto') }}">SOLICITE UNA CLASE DEMO</a></div>
    </div>

    <div class="column text-center mb-3 mt-3">
        <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="1000"
            data-aos-delay="0"><img src="{{ asset('frontend/assets/img/icono2.png') }}" alt="" /></div>
        <h6 class="small-p-headers">ESTRATEGIA</h6>
        <p class="infosec">La combinaci&oacute;n de la calidad, servicio y experiencia son nuestra estrat&eacute;gia
            para alcanzar los mejores resultados en la capacitaci&oacute;n.</p>
        <div class="aos-init" data-aos="zoom-in-down" data-aos-duration="1000"><a class="custom-link"
                href="{{ route('contacto') }}">SABER MÁS</a></div>
    </div>
    <div class="column text-center mb-3 mt-3">
        <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="1000"
            data-aos-delay="0"><img src="{{ asset('frontend/assets/img/iconoacadem.png') }}" alt="" /></div>
        <h6 class="small-p-headers">RESULTADOS</h6>
        <p class="infosec">Nuestros estudiantes logran las mejores puntuaciones en los exámenes TOEFL, TOEIC,
            Cambridge ESOL, IELTS, etc. Gracias a la calidad de la enseñanza y a nuestra Metodotología del más alto
            nivel.</p>
        <div class="aos-init" data-aos="zoom-in-down" data-aos-duration="1000"><a class="custom-link"
                href="{{ route('contacto') }}">SABER MÁS</a></div>
    </div>
    <div class="column text-center mb-3 mt-3">
        <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="1000"
            data-aos-delay="0"><img src="{{ asset('frontend/assets/img/iconomoney.png') }}" alt="" /></div>
        <h6 class="small-p-headers">VALOR</h6>
        <p class="infosec">Si piensa invertir en su educación, piense en los mejores. <br /><br />"Los buenos
            profesores son costosos, pero los malos maestros cuestan aún más”. ~ Bob Talbert</p>
        <div class="aos-init" data-aos="zoom-in-down" data-aos-duration="1000"><a class="custom-link"
                href="{{ route('contacto') }}">SOLICITE UNA CLASE DEMO</a></div>
    </div>
</div>
<div class="clear"></div>

<div class="wrapper mt-5">
    <div class="container">
        <h2 class="pt-5 nuestros-clientes text-center">ALGUNOS DE NUESTROS VALIOSOS CLIENTES</h2>
        <p class="pt-3 light">Nos sentimos orgullosos y honrados por la oportunidad de contribuir a la capacitación
            en diversas empresas nacionales e internacionales. </p>
    </div>
</div>
<div class="gallery backdrop">
    <figure class="gallery__item gallery__item--1 overlay">
        <img class="grow gallery__img" src="{{ asset('frontend/assets/img/Renault-e1437433948637.jpg') }}" alt="Gallery 1" />
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
    <figure class="gallery__item gallery__item--2 overlay"><img class="gallery__img" src="{{ asset('frontend//assets/img/hsbc.jpg') }}"
            alt="Gallery 2" />
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
            alt="Gallery 3" />
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
    <figure class="gallery__item gallery__item--4 overlay"><img class="gallery__img"
            src="{{ asset('frontend/assets/img/holiday-inn.jpg') }}" alt="Gallery 4" />
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
            alt="Gallery 5" />
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
            alt="Gallery 6" />
        <div class="text-overlay-above">
            <div class="text-content-above text-center"><a class="text-white" href="{{ route('hiab') }}"><i
                        class="fa fa-eye fa-2x circle-icon"></i></a></div>
        </div>
        <div class="text-overlay">
            <div class="text-content text-center"><a href="{{ route('hiab') }}">
                    <h3 class="text-white">Hiab</h3>
                </a><a href="{{ route('hiab') }}">
                    <p class="corporate-hover">Business Client</p>
                </a></div>
        </div>
    </figure>
</div>
<div class="container pt-5">
    <div class="col-wrapper">
        <div class="col-a">
            <div class="aos-init" data-aos="fade-up" data-aos-duration="1000"><img
                    src="{{ asset('frontend/assets/img/ipadOK-935x1024.jpg') }}" alt="ipad" /></div>
        </div>
        <div class="col-b">
            <div class="aos-init" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="text-uppercase al-dia">Al día con la</h1><span
                    class="text-uppercase tech mb-5">Tecnología</span>
                <p class="pt-5 pb-5">La tecnología avanza de manera increíble, y nos preciamos de mantenemos
                    actualizados con las nuevas herramientas y novedades pedagógicas para brindarle la mejor
                    experiencia de aprendizaje.</p>
                <button class="custom-button-2 text-uppercase mb-5"><a href="{{ route('metodologia') }}">Ver
                        Detalles</a></button>
            </div>
        </div>
    </div>
</div>
<div class="wrapper darkback">
    <div class="container">
        <h1 class="nuestros-clientes text-uppercase mt-5 pt-5 pb-3 text-center">Que Dicen Nuestros Clientes </h1>
        <div class="carousel slide" id="myCarousel" data-ride="carousel" data-interval="9000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div>
                        <div class="testimonial-item">
                            <blockquote>
                                <h4 class="testimonial-text text-center">Debido a mi trabajo tengo que viajar mucho
                                    a los Estados Unidos y mis clases de inglés me han ayudado a tener negociaciones
                                    menos estresantes. Desde el principio mis clases han sido entretenidas y he
                                    disfrutado de ellas, gracias a sus diferentes estrategias de enseñanza he
                                    aprendido muchos conceptos.</h4>
                                <p class="testimonial-author text-center pb-5 pt-3">Arturo Escalona, Gerente de
                                    Logística</p><br /><br />
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div>
                        <div class="testimonial-item">
                            <blockquote>
                                <h4 class="testimonial-text text-center">Lionsfield me ha ayudado a encontrar la
                                    solución para seguir aprendiendo inglés. Sus profesores están comprometidos con
                                    la enseñanza.</h4>
                                <p class="testimonial-author text-center pb-5 pt-3">Alberto Serratos - CEO Areas
                                    México</p><br /><br />
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div>
                        <div class="testimonial-item">
                            <blockquote>
                                <h4 class="testimonial-text text-center">Sus cursos me ayudaron a especializarme en
                                    las áreas que me interesaban, y lo que es más importante, vinieron a mi oficina,
                                    lo que hizo que la experiencia fuese más conveniente. Ahora tengo mayor
                                    confianza ya que mis habilidades han aumentado significativamente gracias a los
                                    profesores amables que siempre están dispuestos a ayudarte.</h4>
                                <p class="testimonial-author text-center pb-5 pt-3">Erika Alvarado, Ministro de
                                    Finanzas - SAT</p><br /><br />
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper-lightback pb-5">
    <div class="container">
        <h1 class="blog-heading text-uppercase text-center pt-5 pb-5"><span class="blog-heading-span">Un Vistazo a
                nuestro </span>BLOG</h1>
        <p class="light">En nuestro Blog proporcionamos algunos consejos y sugerencias adicionales para nuestros
            estudiantes.</p>
    </div>
    <div class="owl-carousel owl-theme">
        <div class="active">
            <div class="blog-box p-3 mt-4"><a class="blog-title p-2 text-center"
                    href="{{ route('win_win') }}">Win All or Win-Win?</a>
                <p class="blog p-1">The article we are going to look at talks about the attitude with which one must
                    face in a negotiation, the spirit in which...</p>
                <div class="meta-author author pt-3 pb-3"><i class="fa fa-user-o"><a href="{{ route('erik') }}"
                            title="Posts by Erik James Robles" rel="author">Erik Robles</a><i
                            class="fa fa-comment"><a href="#">0</a></i></i></div>
            </div>
        </div>
        <div>
            <div class="blog-box p-3 mt-4"><a class="blog-title p-2 text-center" href="{{ route('terrible') }}">A Terrible and
                    Terrific Christmas</a>
                <p class="blog p-1">Here is a Story that one of our students shared with us about her Christmas trip
                    to the United States. It was Christmas...</p>
                <div class="meta-author author pt-3 pb-3"><i class="fa fa-user-o"><a href="{{ route('erik') }}"
                            title="Posts by Erik James Robles" rel="author">Erik Robles</a><i
                            class="fa fa-comment"><a href="#">0</a></i></i></div>
            </div>
        </div>
        <div>
            <div class="blog-box p-3 mt-4"><a class="blog-title p-2 text-center" href="{{ route('mergers') }}">Mergers and
                    Acquisitions</a>
                <p class="blog p-1">Today&rsquo;s word search is about Mergers and Acquisitions. Make sure to click
                    on each word and follow the link to find the...</p>
                <div class="meta-author author pt-3 pb-3"><i class="fa fa-user-o"><a href="{{ route('erik') }}"
                            title="Posts by Erik James Robles" rel="author">Erik Robles</a><i
                            class="fa fa-comment"><a href="#">0</a></i></i></div>
            </div>
        </div>
        <div>
            <div class="blog-box p-3 mt-4"><a class="blog-title p-2 text-center"
                    href="{{ route('aviso_de_privacidad') }}">Aviso de Privacidad Intregal</a>
                <p class="blog p-1">El presente documento constituye el Aviso de privacidad de Privacidad para
                    efectos de lo dispuesto en la Ley Federal de...</p>
                <div class="meta-author author pt-3 pb-3"><i class="fa fa-user-o"><a href="{{ route('admin') }}"
                            title="Posts by Administrador" rel="author">Administrador</a><i
                            class="fa fa-comment"><a href="#">0</a></i></i></div>
            </div>
        </div>
        <div>
            <div class="blog-box p-3 mt-4"><a class="blog-title p-2 text-center" href="{{ route('how_the_brain_works') }}">How
                    the Brain Learns...</a>
                <p class="blog p-1">Today, we introduce a new category for teachers and people interested in
                    learning in general. This post comes from another fellow...</p>
                <div class="meta-author author pt-3 pb-3"><i class="fa fa-user-o"><a href="{{ route('erik') }}"
                            title="Posts by Erik James Robles" rel="author">Erik Robles</a><i
                            class="fa fa-comment"><a href="#">0</a></i></i></div>
            </div>
        </div>
    </div>
</div>
@endsection