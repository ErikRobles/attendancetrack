@extends('frontend_inicio.inicio_master')
@section('frontend_two')
<div class="jumbotron inicio">
    <div class="container color-change">
        <div class="caption caption text-center pt-5 mb-2" data-aos="fade-up" data-aos-delay="50"
            data-aos-duration="1000">CLASES DE INGLÉS DE NEGOCIOS EN VIVO</div>
        <div class="sub-caption text-center pb-5" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000">
            Con Maestros Nativos Online</div>
        <div class="text-center">
            <button class="btn custom-button text-uppercase text-center mt-2" data-aos="fade-up"
                data-aos-delay="2000" data-aos-duration="1000"> <a class="text-white" href="{{ route('contact_us') }}">Solicita Atención Personalizada
                </a></button>
        </div>
    </div>
</div>
<div class="container pb-3 mb-3">
    <div class="heading text-center">PRACTICA CON MAESTROS NATIVOS EN ESTADOS UNIDOS, CANADÁ O INGLATERRA</div>
    <div class="subheading text-center">Temas
        de Negocios, Administración, Finanzas, etc.</div>
    <div class="heading-underline">
        <div class="bgrect"></div>
        <div class="triangle"></div>
    </div>
</div>
<div class="container-3 pt-3">
    <div class="column text-center mb-3 mt-3">
        <div class="aligned-evenly">
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="1000"
                data-aos-delay="0"><i class="fa fa-4x fa-graduation-cap"></i></div>
            <h6 class="small-p-headers">MAESTROS NATIVOS</h6>
            <p class="infosec">Ponte en contacto con Maestros Americanos que te ayudaran a practicar tu inglés como
                si
                estuvieras en el extranjero.</p>
            <div class="aos-init" data-aos="zoom-in-down" data-aos-duration="1000"><a class="custom-link"
                    href="#price-plan">CONSULTA NUESTROS PLANES</a></div>
        </div>
    </div>

    <div class="column text-center mb-3 mt-3">
        <div class="aligned-evenly">
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="1000"
                data-aos-delay="0"><i class="fa fa-money-bill-wave fa-4x"></i></div>
            <h6 class="small-p-headers">MÉTODO DE NEGOCIOS</h6>
            <p class="infosec">Aprende Inglés útil para tu vida profesional o laboral en el extranjero. Haz
                negocios y conquista el mercado internacional.
            </p>
            <div class="aos-init" data-aos="zoom-in-down" data-aos-duration="1000"><a class="custom-link"
                    href="{{ route('metodo') }}">SABER MÁS</a></div>
        </div>
    </div>
    <div class="column text-center mb-3 mt-3">
        <div class="aligned-evenly">
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="1000"
                data-aos-delay="0"><i class="fa fa-users fa-4x"></i></div>
            <h6 class="small-p-headers">GRUPAL O INDIVIDUAL</h6>
            <p class="infosec">Únete a un grupo de ejecutivos para aprender en conjunto o contrata una clase uno a
                uno
                para que la clase se enfoque solo en tí.</p>
            <div class="aos-init" data-aos="zoom-in-down" data-aos-duration="1000"><a class="custom-link"
                    href="{{ route('metodo') }}">SABER MÁS</a></div>
        </div>

    </div>
    <div class="column text-center mb-3 mt-3">
        <div class="aligned-evenly">
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="1000"
                data-aos-delay="0"> <i class="fa fa-heartbeat fa-4x"></i></div>
            <h6 class="small-p-headers">EN VIVO</h6>
            <p class="infosec">Todas nuestras lecciones son en tiempo real. Interactúa con tu maestro todo el
                tiempo,
                en
                sesiones en vivo y en directo desde el extranjero.</p>
            <div class="aos-init" data-aos="zoom-in-down" data-aos-duration="1000"><a class="custom-link"
                    href="{{ route('contact_us') }}">SOLICITA INFORMACIÓN</a></div>
        </div>
    </div>
</div>
<div class="clear"></div>

<div class="wrapper mt-5">
    <div class="container">
        <h2 class="pt-5 nuestros-clientes text-center">ALGUNOS DE NUESTROS VALIOSOS CLIENTES</h2>
        <p class="pt-3 light">Nos sentimos orgullosos y honrados de haber contribuido a la capacitación en diversas
            empresas nacionales e internacionales.</p>
    </div>
</div>
<div class="gallery backdrop">
    <figure class="gallery__item gallery__item--1 overlay">
        <img class="grow gallery__img" src="{{ asset('frontend/assets/img/Renault-e1437433948637.jpg') }}" alt="Gallery 1 Renault" />
        <div class="text-overlay-above">
            <div class="text-content-above text-center"><a class="text-white" href="{{ route('renault_2') }}"><i
                        class="fa fa-eye fa-2x circle-icon"></i></a></div>
        </div>
        <div class="text-overlay">
            <div class="text-content text-center"> <a href="{{ route('renault_2') }}">
                    <h3 class="text-white">Renault</h3>
                </a><a href="{{ route('renault_2') }}">
                    <p class="corporate-hover">Business Client</p>
                </a></div>
        </div>
    </figure>
    <figure class="gallery__item gallery__item--2 overlay"><img class="gallery__img" src="{{ asset('frontend/assets/img/hsbc.jpg') }}"
            alt="Gallery 2 Banco HSBC" />
        <div class="text-overlay-above">
            <div class="text-content-above text-center"><a class="text-white" href="{{ route('hsbc_2') }}"><i
                        class="fa fa-eye fa-2x circle-icon"></i></a></div>
        </div>
        <div class="text-overlay">
            <div class="text-content text-center"><a href="{{ route('hsbc_2') }}">
                    <h3 class="text-white">HSBC</h3>
                </a><a href="{{ route('hsbc_2') }}">
                    <p class="corporate-hover">Business Client</p>
                </a></div>
        </div>
    </figure>
    <figure class="gallery__item gallery__item--3 overlay"><img class="gallery__img" src="{{ asset('frontend/assets/img/ge.jpg') }}"
            alt="Gallery 3 GE" />
        <div class="text-overlay-above">
            <div class="text-content-above text-center"><a class="text-white" href="{{ route('ge_2') }}"><i
                        class="fa fa-eye fa-2x circle-icon"></i></a></div>
        </div>
        <div class="text-overlay">
            <div class="text-content text-center"><a href="{{ route('ge_2') }}">
                    <h3 class="text-white">GE</h3>
                </a><a href="{{ route('ge_2') }}"></a>
                <p class="corporate-hover">Business Client</p>
            </div>
        </div>
    </figure>
    <figure class="gallery__item gallery__item--4 overlay"><img class="gallery__img"
            src="{{ asset('frontend/assets/img/holiday-inn.jpg') }}" alt="Gallery 4 Holiday Inn" />
        <div class="text-overlay-above">
            <div class="text-content-above text-center"><a class="text-white" href="{{ route('holiday_inn_2') }}"><i
                        class="fa fa-eye fa-2x circle-icon"></i></a></div>
        </div>
        <div class="text-overlay">
            <div class="text-content text-center"> <a href="{{ route('holiday_inn_2') }}">
                    <h3 class="text-white">Holiday Inn</h3>
                </a><a href="{{ route('holiday_inn_2') }}">
                    <p class="corporate-hover">Business Client</p>
                </a></div>
        </div>
    </figure>
    <figure class="gallery__item gallery__item--5 overlay"><img class="gallery__img" src="{{ asset('frontend/assets/img/toyota.jpg') }}"
            alt="Gallery 5 Toyota corporación" />
        <div class="text-overlay-above">
            <div class="text-content-above text-center"><a class="text-white" href="{{ route('toyota_2') }}"><i
                        class="fa fa-eye fa-2x circle-icon"></i></a></div>
        </div>
        <div class="text-overlay">
            <div class="text-content text-center"><a href="{{ route('toyota_2') }}">
                    <h3 class="text-white">Toyota</h3>
                </a><a href="{{ route('toyota_2') }}">
                    <p class="corporate-hover">Business Client</p>
                </a></div>
        </div>
    </figure>
    <figure class="gallery__item gallery__item--6 overlay"><img class="gallery__img" src="{{ asset('frontend/assets/img/hiab.jpg') }}"
            alt="Gallery 6 hiab corporación" />
        <div class="text-overlay-above">
            <div class="text-content-above text-center"><a class="text-white" href="{{ route('hiab_2') }}"><i
                        class="fa fa-eye fa-2x circle-icon"></i></a></div>
        </div>
        <div class="text-overlay">
            <div class="text-content text-center"><a href="{{ route('hiab_2') }}">
                    <h3 class="text-white">Hiab</h3>
                </a><a href="{{ route('hiab_2') }}">
                    <p class="corporate-hover">Business Client</p>
                </a></div>
        </div>
    </figure>
</div>
<div class="container-3 pt-5">
    <div class="col-wrapper">
        <div class="col-a">
            <div class="aos-init" data-aos="fade-up" data-aos-duration="1000"><img
                    src="{{ asset('frontend/assets/img/ipadOK-935x1024.jpg') }}" alt="ipad" /></div>
        </div>
        <div class="col-b">
            <div class="aos-init" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="text-uppercase al-dia">APRENDE INGLÉS</h1><span class="text-uppercase tech mb-5">DESDE TU
                    CASA U OFICINA</span>
                <p class="pt-5 pb-5">Sin tráfico, sin inconvenientes. En cualquiera de tus dispositivos (PC, Tablet,
                    Smartphone) y en cualquier plataforma que te resulte conveniente.</p>
                <button class="custom-button-2 text-uppercase mb-5"><a href="{{ route('metodo') }}">Ver
                        Detalles</a></button>
            </div>

        </div>
    </div>
</div>

<!--Price Plans-->

<div class="wrapper-red store-backdrop" id="price-plan">
    <div class="container-fluid mb-5">
        <h2 class="pt-4 nuestros-clientes text-center">ELIJE EL MEJOR PLAN</h2>
        <div class="text-center">
            <i class="fa fa-2x fa-star text-white" aria-hidden="true"></i>

        </div>
        <div class="container-3 p-4">
            <p class="light text-white">Tenemos planes que se ajustan a tus necesidades. ¡Prueba uno y si te
                agrada, puedes escalar a los demás!
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="column2">
                
                    <div class="price first p-3 bg-white shadow rounded tag-holder text-center overlay-soldout">
                       
                        <!-- <img class="xmas-tags" src="../assets/img/xmastag-1.png" alt=""> -->
                        <!--
                        <div class="the-overlay">

                        </div>
                        
                        <img class="sold-out" src="./assets/img/sold-out.png"
                            alt="etiqueta diciendo agotado en inglés">
                        <p class="sold-out-text">Servicio Agotado <br>Por favor checa de nuevo en unos días
                        </p>
                    -->
                        <h4 class="pt-1 title-2">Clase Grupal</h4>
                        <h1 class="pb-2 main-price"><span style="font-size: 50px;font-family:'Lato', sans-serif;">$107*<span class="usd">USD</span>
                        </h1>
                        <p class="monthly">Mensuales</p>
                        <hr>
                        <p>2 clases de 1 hora por semana</p>
                        <p>6 Alumnos Máximo por Clase</p>
                        <p>Maestro Nativo
                        </p>
                        <p>Clases Conversacionales
                        </p>
                        <p>Inicio de clases cada 1er día hábil del mes</p>
                        <p>Sujeto a disponibilidad</p>
                        <p>Horario fijo</p>
                        <div class="button-holder mb-1">
                            <a href="{{ route('clases-grupales') }}"><button type="button" class="btn .btn-lg bg-grey btn-outline-secondary mt-3 p-3"><span
                                    style="font-size: 20px;">¡Inscríbete hoy!</span></button></a>
                        </div>
                        <p>*<small style="font-size: 14px;">Impuestos incluído</small></p>


                    </div>

                </div>


                <div class="column2 middle">
                    <div class="text-center tag-holder bg-white shadow rounded price center">
                        
                        <!-- <img class="xmas-tags" src="../assets/img/xmastag-2.png" alt=""> -->
                        <h4 class="pt-1 title-2">Clase Individual</h4>
                        <h1 class="main-price"><span style="font-size: 60px;font-family:'Lato', sans-serif;">$319*<span
                                    class="usd">USD</span></span>
                        </h1>
                        <p class="middle-month">Mensuales</p>
                        <hr>
                        <p>2 clases de 1 hora por semana</p>
                        <p>Clases Uno a Uno</p>
                        <p>Maestro Nativo Particular</p>
                        <p>Exclusivo para ti</p>
                        <p>Inglés de Negocios</p>
                        <p>Horario Fijo a tu conveniencia</p>
                        <div class="button-holder mt-3 mb-2">
                            <a href="{{ route('clases-individuales')  }}"><button type="button"
                                    class="btn btn-lg bg-grey btn-danger mt-5 p-3"><span
                                        style="font-size: 20px; color: #fff; text-decoration: none;">¡Inicia tus
                                        clases ya!</span>
                                </button></a>
                            <p style="font-size: 15px; padding-top: 10px;">Si tienes Dudas<br><a
                                    style="text-decoration: underline;" href="contact-us.html">solicita una
                                    llamada telefonica</a></p>
                                    <p>*<small style="font-size: 14px;">Impuestos incluído</small></p>

                        </div>


                    </div>

                </div>

                <div class="column2">
                    <div class="text-center tag-holder bg-white shadow rounded p-3 price last">
                        <!-- <img class="xmas-tags2" src="../assets/img/xmastag-3.png" alt=""> -->
                        <h4 class="pt-1 title-2">Clase Premier</h4>
                        <h1 class="pb-2 main-price"><span style="font-size: 40px;font-family:'Lato', sans-serif;">$797*<span
                                    class="usd">USD</span></span>
                        </h1>
                        <p class="monthly">Mensuales</p>
                        <hr>
                        <p>5 clases de 1 hora por semana
                        </p>
                        <p>Clases Uno a Uno</p>
                        <p>CLASES DE INGLÉS ESPECIALIZADO<br>
                            DE ALTO NIVEL</p>
                        <p>(Finanzas, Ingeniería, Legal, etc.)</p>
                        <p>Maestro Nativo Particular</p>
                        <p>Horario Fijo a tu conveniencia</p>
                        <div class="button-holder mb-4">
                            <a href="{{ route('clase-premier') }}"><button type="button"
                                    class="btn .btn-lg bg-grey btn-outline-secondary mt-3 p-3"><span
                                        style="font-size: 20px;">¡Avanza hoy!</span></button></a>

                            <p>*<small style="font-size: 14px;">Impuestos incluído</small></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!--end price plan-->
<!-- </div> -->

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
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</div>

<div class="wrapper-lightback pb-5">
    <div class="container">
        <h1 class="blog-heading text-uppercase text-center pt-5 pb-5"><span class="blog-heading-span">Un Vistazo a
                nuestro BLOG</span></h1>
        <p class="light">En nuestro Blog proporcionamos algunos consejos y sugerencias adicionales para nuestros
            estudiantes.</p>
    </div>
    <div class="grid-container text-center">

        <div class="blog-item-1 item">
            <div class="blog-cards">
                <div class="card p-3 mt-4 d-flex justify-content-around">
                    <img src='{{ asset('frontend/assets/img/christmas.png') }}' class="blog-img"
                        alt="ornamentos navideños colgados fondo verde." />
                    <a class="blog-title p-2 text-center" href="terrible-2.html">A
                        Terrible
                        and
                        Terrific Christmas</a>
                    <p class="blog p-1">Here is a Story that one of our students shared with us about her
                        Christmas trip
                        to the United States. It was Christmas...</p>
                    <div class="meta-author author pt-3 pb-3"><i class="far fa-user"><a href="erik-2.html"
                                title="Posts by Erik James Robles" rel="author">Erik Robles</a><i
                                class="far fa-comments"><a href="#">0</a></i></i></div>
                </div>
            </div>
        </div>
        <div class="blog-item-2 item">
            <div class="blog-cards">
                <div class="card p-3 mt-4 d-flex justify-content-around">
                    <img src='{{ asset('frontend/assets/img/merger.jpg') }}' class="blog-img" />
                    <a class="blog-title p-2 text-center" href="mergers-2.html">Mergers
                        and
                        Acquisitions</a>
                    <p class="blog p-1">Today&rsquo;s word search is about Mergers and Acquisitions. Make sure
                        to click
                        on each word and follow the link to find the...</p>
                    <div class="meta-author author pt-3 pb-3"><i class="far fa-user"><a href="erik-2.html"
                                title="Posts by Erik James Robles" rel="author">Erik Robles</a><i
                                class="far fa-comments"><a href="#">0</a></i></i></div>
                </div>
            </div>
        </div>
        <div class="blog-item-3 item">
            <div class="blog-cards">
                <div class="card p-3 mt-4 d-flex justify-content-around">
                    <img src='{{ asset('frontend/assets/img/post5.jpg') }}' class="blog-img"
                        alt="Arbol mostrando 2 lados, uno muerto y el otro verde con vida" />
                    <a class="blog-title p-2 text-center" href="win-win-2.html">Win All or Win-Win?</a>
                    <p class="blog p-1">The article we are going to look at talks about the attitude with which
                        one
                        must
                        face in a negotiation, the spirit in which...</p>
                    <div class="meta-author author pt-3 pb-3"><i class="far fa-user"><a href="erik-2.html"
                                title="Posts by Erik James Robles" rel="author">Erik Robles</a><i
                                class="far fa-comments"><a href="#">0</a></i></i></div>
                </div>
            </div>
        </div>
        <div class="blog-item-4 item">
            <div class="blog-cards">
                <div class="card p-3 mt-4 d-flex justify-content-around">
                    <img src='{{ asset('frontend/assets/img/privacy.jpg') }}' class="blog-img" alt="candado con corazón" />
                    <a class="blog-title p-2 text-center" href="privacy.html">Aviso de
                        Privacidad Intregal</a>
                    <p class="blog p-1">El presente documento constituye el Aviso de privacidad de Privacidad para
                        efectos de lo dispuesto en la Ley Federal de...</p>
                    <div class="meta-author author pt-3 pb-3"><i class="far fa-user"><a href="admin-02.html"
                                title="Posts by Administrador" rel="author">Administrador</a><i
                                class="far fa-comments"><a href="#">0</a></i></i></div>
                </div>
            </div>
        </div>
        <div class="blog-item-5 item">
            <div class="blog-cards">
                <div class="card p-3 mt-4 d-flex justify-content-around">
                    <img src='{{ asset('frontend/assets/img/brain.jpg') }}' class="blog-img" alt="cerebro dentro de un foco de luz" />
                    <a class="blog-title p-2 text-center" href="how-the-brain-works-2.html">How
                        the Brain Learns...</a>
                    <p class="blog p-1">Today, we introduce a new category for teachers and people interested in
                        learning in general. This post comes from another fellow...</p>
                    <div class="meta-author author pt-3 pb-3"><i class="far fa-user"><a href="erik-2.html"
                                title="Posts by Erik James Robles" rel="author">Erik Robles</a><i
                                class="far fa-comments"><a href="#">0</a></i></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection