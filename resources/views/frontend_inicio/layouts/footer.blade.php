<footer class="footer" role="contentinfo">
    <div class="footer-wrapper-content-area">
        <div class="row">
            <div class="columnA">
                <h3 class="footer-header">ACERCA DE LIONSFIELD</h3>
                <p class="footer-text">Somos una empresa de capacitaci&oacute;n empresarial propiedad de <a
                        href="https://lionsfield.com" class="text-white">Magisterial Education
                        America</a>, con sede en los Estados Unidos de Am&eacute;rica. Con m&aacute;s de 15
                    a&ntilde;os en
                    el
                    mercado, ponemos a su disposici&oacute;n nuestro programa de capacitaci&oacute;n en
                    Hispanoamérica.</p>
                <br /><br />
                <h3 class="footer-header">AVISO DE PRIVACIDAD</h3>
                <p><a href="{{ route('aviso_de_privacidad_2') }}" style="font-size: 16px; color: #fff;">Haga clic aqu&iacute;</a></p>
                <br>
                <h3 class="footer-header text-white"><a href="contact-us.html" class="text-white">CONTÁCTANOS</a>
                </h3>
            </div>
            <div class="columnB">
                <h3 class="footer-header">NUESTROS CLIENTES</h3><br />
                <div class="columnBinner">
                    <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="0">
                        <img src="{{ asset('frontend/assets/img/a.jpg') }}" alt="subway restaurante logo" /></div>
                    <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-delay="50"><img src='{{ asset('frontend/assets/img/b.jpg') }}' alt="logo shcp" /></div>
                    <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-delay="100"><img src='{{ asset('frontend/assets/img/c.jpg') }}' alt="logo sedesol" /></div>
                    <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-delay="150"><img src='{{ asset('frontend/assets/img/d.jpg') }}' alt="logo renault" /></div>
                    <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-delay="200"><img src='{{ asset('frontend/assets/img/e.jpg') }}' alt="logo iusacell" /></div>
                    <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-delay="250"><img src='{{ asset('frontend/assets/img/f.jpg') }}' alt="logo ge" /></div>
                    <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-delay="300"><img src='{{ asset('frontend/assets/img/g.jpg') }}' alt="logo galarias el triumfo" /></div>
                    <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-delay="350"><img src='{{ asset('frontend/assets/img/h.jpg') }}' alt="logo grupo elior" /></div>
                    <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-delay="400"><img src='{{ asset('frontend/assets/img/i.jpg') }}' alt="logo assa abloy" /></div>
                </div><br />
            </div>
        </div>
        <div class="copyright-bar">
            <p class="copyright">
                &copy;
                Copyright <a class="company" href="https://lionsfield.com" title="Lionsfield"><span
                        style="font-weight: bold; color: #fff;">Magisterial Education America,
                        LLC</span></a><br />&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Smart Start Theme by <a
                    href="https://www.rrspark.com"><span style="font-weight: bold; color: #fff;">RR Spark</span></a>
            </p>
        </div>
    </div>
</footer>
<!-- <script src="./scripts/popup.js"></script> -->
<script src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="{{ asset('frontend/scripts/owl.carousel.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
<script src="{{ asset('frontend/scripts/jquery.counterup.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{ asset('frontend/scripts/jquery.lineProgressbar.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    @if(Session::has('message'))
    let type = "{{ Session::get('alert-type', 'info') }}" 
    switch (type) {
      case 'info': 
        toastr.info("{{ Session::get('message') }}");
        break;
      case 'success': 
      toastr.success("{{ Session::get('message') }}");
        break;
      case 'warning': 
      toastr.warning("{{ Session::get('message') }}");
        break;
      case 'error': 
      toastr.error("{{ Session::get('message') }}");
        break;
    }
    @endif
  </script>
<script>
    $(document).ready(function () {
        $('.carousel').carousel()
    });
</script>
<script>
    $(document).ready(function () {
        AOS.init();
    });
</script>
<script>
    $(document).ready(function () {
        $('.owl-carousel-2').owlCarousel({
            rtl: true,
            loop: true,
            item: 6,
            dots: false,
            margin: 10,
            center: true,
            nav: true,
            navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
            startPosition: 1,
            responsive: {
                0: {
                    items: 1
                },
                574: {
                    items: 1
                },
                850: {
                    items: 3
                },
                1100: {
                    items: 5
                },
                1400: {
                    items: 6
                },
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            rtl: true,
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                636: {
                    items: 3
                },
                900: {
                    items: 4
                },
            }
        });
    });
</script>



<script>
    $(document).ready(function () {
        $('.counter-1').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>
<script src="{{ asset('frontend/scripts/wow.min.js') }}"></script>
<script>new WOW().init();</script>
<script>
    $(document).ready(function () {
        var previousScroll = 0;
        $(window).scroll(function () {
            var currentScroll = $(this).scrollTop();
            if (currentScroll > previousScroll) {
                //Direction: Down
                $("#navbar").fadeOut(2000);
            } else {
                //Direction: Up
                $("#navbar").fadeIn();
            }
            previousScroll = currentScroll;
            if (currentScroll == 0) {
                $("#navbar").css("position", "relative");
            } else {
                $("#navbar").css("position", "fixed");
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        // Add smooth scrolling to all links
        $("a").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 80
                }, 1600, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>