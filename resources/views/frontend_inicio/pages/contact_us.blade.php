<!DOCTYPE html>
<html lang="es" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164983394-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-164983394-1');
  </script>




  <meta charset="utf-8" />
  <link rel="shortcut icon" href="favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <!-- Bootstrap core CSS-->
  <link href="./stylesheets/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link href="./stylesheets/owl.carousel.min.css" rel="stylesheet">
  <link href="./stylesheets/owl.theme.default.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="./scss/style.css">

  <title>Lionsfield | Contacto</title>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark transparent-nav-custom fixed-top" id="navbar"><a class="navbar-brand"
      href="inicio.html"><img class="pb-2 logo-image" src="./assets/img/logo.png" alt="Lionsfield brand Logo" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"><span
        class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="inicio.html" class="text-center nav-link"><i class="fa fa-home"></i><br />Inicio
            <span class="sr-only">(current)</span></a></li>
        <li class="nav-item"><a href="about-us.html" class="text-center nav-link"> <i
              class="fa fa-users"></i><br />Quienes Somos</a></li>

        <li class="nav-item"><a href="metodo.html" class="text-center nav-link"><i
              class="fa fa-cogs"></i><br />Metodología</a></li>
        <li class="nav-item"><a href="contact-us.html" class="text-center nav-link"><i
              class="fas fa-file-signature"></i><br />Contacto</a></li>
      </ul>
    </div>
  </nav>
  <div class="jumbotron contact-us img-fluid">
    <div class="container color-change">
      <div class="align-evenly">
        <div class="caption pb-3 caption text-center pt-5" data-aos="fade-up" data-aos-delay="800"
          data-aos-duration="1000">CONTÁCTANOS</div>
        <div class="sub-caption text-center text-uppercase pb-5" data-aos="fade-up" data-aos-delay="1600"
          data-aos-duration="1500">SERÁ UN PLACER ATENDERTE</div>
      </div>
    </div>
  </div>
  <div class="container-2">
    <div class="row">
      <div class="col-md-8">
        <main>
          <h5 class="contact-form-header mb-3">Solicitud de Contacto</h5>
          <p class="content-2">
            Por favor, proporciona los siguientes datos para recibir mayor información. A la brevedad, uno de nuestros
            ejecutivos te atenderá. Siéntete seguro, tus datos se encuentran progetidos por nuestra política de
            privacidad, la cual puedes consultar al final de esta página.</p>
          <form class="contact-form pb-3" method="post" id="contactform" action="contactform-2.php">
              @csrf
            <div class="form-row">
              <div class="form-group col-md-10">
                <label class="content-2" for="name">Nombre Completo (Campo Requerido)</label>
                <input placeholder="Nombre" class="form-control" name="name" id="name" type="text"
                  oninvalid="this.setCustomValidity('Por favor introduce su nombre completo')"
                  oninput="this.setCustomValidity('')" required />
              </div>
              <br /><br />
              <div class="form-group col-md-10">
                <label class="content-2" for="empresa">Empresa</label>
                <input placeholder="Empresa" class="form-control" name="empresa" id="empresa" type="text" />
              </div>
              <br /><br />
              <div class="form-group col-md-10">
                <label class="content-2" for="mail">Correo (Campo Requerido)</label>
                <input placeholder="Correo" class="form-control" type="email" name="mail" id="mail"
                  oninvalid="setCustomValidity('')" oninput="setCustomValidity('')" required />
              </div>
              <br /><br />
              <div class="form-group col-md-7">
                <label class="content-2" for="tel1">Teléfono (Campo Requerido)</label>
                <input placeholder="Teléfono a 10 dígitos" class="form-control" type="tel" name="tel1"
                  pattern="^\d{10}$" id="tel" oninvalid="setCustomValidity('')" oninput="setCustomValidity('')"
                  required />
              </div>
              <br /><br />
              <div class="form-group col-md-3">
                <label class="content-2" for="tel3">Extensión</label>
                <input placeholder="Ext." class="form-control" type="number" name="tel3" id="ext" />
              </div>
              <br /><br />
              <div class="form-group col-md-6">
                <label class="content-2" for="tel2">Teléfono Celular</label>
                <input placeholder="Teléfono Celular" class="form-control" type="tel" name="tel2" pattern="^\d{10}$"
                  id="tel" />
              </div>
              <div class="form-group  country col-md-4">
                <label for="pais" style="color: #999999;">País / Región</label><br>
                <select name="pais"
                  style="padding: 7px; color: #495057; border-radius: 5px; width: 100%; border:solid 1px #c4c4c4;">
                  <option value="AF">Afganistán</option>
                  <option value="AL">Albania</option>
                  <option value="DE">Alemania</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AQ">Antártida</option>
                  <option value="AG">Antigua y Barbuda</option>
                  <option value="AN">Antillas Holandesas</option>
                  <option value="SA">Arabia Saudí</option>
                  <option value="DZ">Argelia</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaiyán</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrein</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BE">Bélgica</option>
                  <option value="BZ">Belice</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermudas</option>
                  <option value="BY">Bielorrusia</option>
                  <option value="MM">Birmania</option>
                  <option value="BO">Bolivia</option>
                  <option value="BA">Bosnia y Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BR">Brasil</option>
                  <option value="BN">Brunei</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="BT">Bután</option>
                  <option value="CV">Cabo Verde</option>
                  <option value="KH">Camboya</option>
                  <option value="CM">Camerún</option>
                  <option value="CA">Canadá</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CY">Chipre</option>
                  <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comores</option>
                  <option value="CG">Congo</option>
                  <option value="CD">Congo, República Democrática del</option>
                  <option value="KR">Corea</option>
                  <option value="KP">Corea del Norte</option>
                  <option value="CI">Costa de Marfíl</option>
                  <option value="CR">Costa Rica</option>
                  <option value="HR">Croacia (Hrvatska)</option>
                  <option value="CU">Cuba</option>
                  <option value="DK">Dinamarca</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egipto</option>
                  <option value="SV">El Salvador</option>
                  <option value="AE">Emiratos Árabes Unidos</option>
                  <option value="ER">Eritrea</option>
                  <option value="SI">Eslovenia</option>
                  <option value="ES">España</option>
                  <option value="US">Estados Unidos</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Etiopía</option>
                  <option value="FJ">Fiji</option>
                  <option value="PH">Filipinas</option>
                  <option value="FI">Finlandia</option>
                  <option value="FR">Francia</option>
                  <option value="GA">Gabón</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GD">Granada</option>
                  <option value="GR">Grecia</option>
                  <option value="GL">Groenlandia</option>
                  <option value="GP">Guadalupe</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GY">Guayana</option>
                  <option value="GF">Guayana Francesa</option>
                  <option value="GN">Guinea</option>
                  <option value="GQ">Guinea Ecuatorial</option>
                  <option value="GW">Guinea-Bissau</option>
                  <option value="HT">Haití</option>
                  <option value="HN">Honduras</option>
                  <option value="HU">Hungría</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IQ">Irak</option>
                  <option value="IR">Irán</option>
                  <option value="IE">Irlanda</option>
                  <option value="BV">Isla Bouvet</option>
                  <option value="CX">Isla de Christmas</option>
                  <option value="IS">Islandia</option>
                  <option value="KY">Islas Caimán</option>
                  <option value="CK">Islas Cook</option>
                  <option value="CC">Islas de Cocos o Keeling</option>
                  <option value="FO">Islas Faroe</option>
                  <option value="HM">Islas Heard y McDonald</option>
                  <option value="FK">Islas Malvinas</option>
                  <option value="MP">Islas Marianas del Norte</option>
                  <option value="MH">Islas Marshall</option>
                  <option value="UM">Islas menores de Estados Unidos</option>
                  <option value="PW">Islas Palau</option>
                  <option value="SB">Islas Salomón</option>
                  <option value="SJ">Islas Svalbard y Jan Mayen</option>
                  <option value="TK">Islas Tokelau</option>
                  <option value="TC">Islas Turks y Caicos</option>
                  <option value="VI">Islas Vírgenes (EEUU)</option>
                  <option value="VG">Islas Vírgenes (Reino Unido)</option>
                  <option value="WF">Islas Wallis y Futuna</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italia</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japón</option>
                  <option value="JO">Jordania</option>
                  <option value="KZ">Kazajistán</option>
                  <option value="KE">Kenia</option>
                  <option value="KG">Kirguizistán</option>
                  <option value="KI">Kiribati</option>
                  <option value="KW">Kuwait</option>
                  <option value="LA">Laos</option>
                  <option value="LS">Lesotho</option>
                  <option value="LV">Letonia</option>
                  <option value="LB">Líbano</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libia</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lituania</option>
                  <option value="LU">Luxemburgo</option>
                  <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                  <option value="MG">Madagascar</option>
                  <option value="MY">Malasia</option>
                  <option value="MW">Malawi</option>
                  <option value="MV">Maldivas</option>
                  <option value="ML">Malí</option>
                  <option value="MT">Malta</option>
                  <option value="MA">Marruecos</option>
                  <option value="MQ">Martinica</option>
                  <option value="MU">Mauricio</option>
                  <option value="MR">Mauritania</option>
                  <option value="YT">Mayotte</option>
                  <option value="MX" selected>México</option>
                  <option value="FM">Micronesia</option>
                  <option value="MD">Moldavia</option>
                  <option value="MC">Mónaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="MS">Montserrat</option>
                  <option value="MZ">Mozambique</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Níger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="NF">Norfolk</option>
                  <option value="NO">Noruega</option>
                  <option value="NC">Nueva Caledonia</option>
                  <option value="NZ">Nueva Zelanda</option>
                  <option value="OM">Omán</option>
                  <option value="NL">Países Bajos</option>
                  <option value="PA">Panamá</option>
                  <option value="PG">Papúa Nueva Guinea</option>
                  <option value="PK">Paquistán</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Perú</option>
                  <option value="PN">Pitcairn</option>
                  <option value="PF">Polinesia Francesa</option>
                  <option value="PL">Polonia</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="UK">Reino Unido</option>
                  <option value="CF">República Centroafricana</option>
                  <option value="CZ">República Checa</option>
                  <option value="ZA">República de Sudáfrica</option>
                  <option value="DO">República Dominicana</option>
                  <option value="SK">República Eslovaca</option>
                  <option value="RE">Reunión</option>
                  <option value="RW">Ruanda</option>
                  <option value="RO">Rumania</option>
                  <option value="RU">Rusia</option>
                  <option value="EH">Sahara Occidental</option>
                  <option value="KN">Saint Kitts y Nevis</option>
                  <option value="WS">Samoa</option>
                  <option value="AS">Samoa Americana</option>
                  <option value="SM">San Marino</option>
                  <option value="VC">San Vicente y Granadinas</option>
                  <option value="SH">Santa Helena</option>
                  <option value="LC">Santa Lucía</option>
                  <option value="ST">Santo Tomé y Príncipe</option>
                  <option value="SN">Senegal</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leona</option>
                  <option value="SG">Singapur</option>
                  <option value="SY">Siria</option>
                  <option value="SO">Somalia</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="PM">St Pierre y Miquelon</option>
                  <option value="SZ">Suazilandia</option>
                  <option value="SD">Sudán</option>
                  <option value="SE">Suecia</option>
                  <option value="CH">Suiza</option>
                  <option value="SR">Surinam</option>
                  <option value="TH">Tailandia</option>
                  <option value="TW">Taiwán</option>
                  <option value="TZ">Tanzania</option>
                  <option value="TJ">Tayikistán</option>
                  <option value="TF">Territorios franceses del Sur</option>
                  <option value="TP">Timor Oriental</option>
                  <option value="TG">Togo</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad y Tobago</option>
                  <option value="TN">Túnez</option>
                  <option value="TM">Turkmenistán</option>
                  <option value="TR">Turquía</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UA">Ucrania</option>
                  <option value="UG">Uganda</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistán</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VE">Venezuela</option>
                  <option value="VN">Vietnam</option>
                  <option value="YE">Yemen</option>
                  <option value="YU">Yugoslavia</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabue</option>
                </select>
              </div>
              <br /><br />

              <div class="form-group col-md-10">
                <label class="content-2" for="mensaje">Mensaje (Campo Requerido)</label>
                <textarea placeholder="Mensaje" class="form-control" name="mensaje" id="message" type="text"></textarea>
              </div>
              <br /><br />

              <br /><br />
            </div>
            <div class="g-recaptcha" data-sitekey="6LdQid8ZAAAAAF_Stq_7uV5Rjl1yZLrlaYE4TBIC"></div>
            <div class="form-group sweet-stuff">
                <label for="faxonly">Fax Only
                 <input type="checkbox" name="faxonly" id="faxonly" />
                </label>
               </div>
            <input style="float: left; margin-bottom: 30px;" class="mt-3 btn btn-dark" type="submit" value="ENVIAR"
              name="submit" />
            <br /><br />
          </form>
        </main>
      </div>
      <div class="col-md-4">
        <h5 class="contact-form-header mb-3">Acerca de Lionsfield</h5>
        <p class="content-2">
          Somos una empresa de capacitación empresarial propiedad de Magisterial Education América, con sede en los
          Estados Unidos de América. Con más de 13 años en el mercado, ponemos a su disposición nuestro programa de
          inglés de negocios en México.</p>
        <h5 class="contact-form-header mb-3">Horarios de Atención</h5>
        <p class="content-2"><strong>Lunes a Viernes: </strong>9am - 6:00pm </p>
        <h5 class="contact-form-header mb-3">Información de Contacto</h5>
        <p class="content-2"><strong>Dirección</strong><br />Arquímedes 130, Piso 5.<br />
          Col. Polanco V Sección<br /> CDMX, C.P. 11560</p>
        <p class="content-2"><strong>Correo Electrónico</strong><br />atencion@lionsfield.mx</p>
        <p class="aviso"><a href="privacy.html">Aviso de Privacidad</a></p>
      </div>
    </div>
  </div>
  <footer class="footer" role="contentinfo">
    <div class="footer-wrapper-content-area">
      <div class="row">
        <div class="columnA">
          <h3 class="footer-header">ACERCA DE LIONSFIELD</h3>
          <p class="footer-text">Somos una empresa de capacitaci&oacute;n empresarial propiedad de Magisterial Education
            America, con sede en los Estados Unidos de Am&eacute;rica. Con m&aacute;s de 15 a&ntilde;os en el
            mercado, ponemos a su disposici&oacute;n nuestro programa de capacitaci&oacute;n en Hispanoamérica.</p>
          <br /><br />
          <h3 class="footer-header">AVISO DE PRIVACIDAD</h3>
          <p><a href="privacy.html" style="font-size: 16px; color: #fff;">Haga clic aqu&iacute;</a></p>
        </div>
        <div class="columnB">
          <h3 class="footer-header">NUESTROS CLIENTES</h3><br />
          <div class="columnBinner">
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="0"><img
                src="./assets/img/a.jpg" alt="" /></div>
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="50"><img
                src='./assets/img/b.jpg' alt="" /></div>
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100"><img
                src='./assets/img/c.jpg' alt="" /></div>
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150"><img
                src='./assets/img/d.jpg' alt="" /></div>
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200"><img
                src='./assets/img/e.jpg' alt="" /></div>
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="250"><img
                src='./assets/img/f.jpg' alt="" /></div>
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300"><img
                src='./assets/img/g.jpg' alt="" /></div>
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="350"><img
                src='./assets/img/h.jpg' alt="" /></div>
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="400"><img
                src='./assets/img/i.jpg' alt="" /></div>
          </div><br />
        </div>
      </div>
      <div class="copyright-bar">
        <p class="copyright">
          &copy;
          Copyright <a class="company" href="inicio.html" title="Lionsfield"><span
              style="font-weight: bold; color: #fff;">Magisterial Education America,
              LLC</span></a><br />&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Smart Start Theme by <a
            href="https://www.rrspark.com"><span style="font-weight: bold; color: #fff;">RR Spark</span></a>
        </p>
      </div>
    </div>
  </footer>
  <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="./scripts/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
  <script src="./scripts/owl.carousel.min.js"></script>
  <script src="./scripts/popper.min.js"></script>
  <script src="./scripts/bootstrap.min.js"></script>
  <script src="./scripts/jquery.counterup.min.js"></script>

<script>
const forms = document.querySelectorAll('div.g-recaptcha');
forms.forEach(form=> {
    const formParentElement = form.parentElement;

    formParentElement.addEventListener("submit", e => {
        if (grecaptcha.getResponse() === '') {
            e.preventDefault();
            alert('Por favor, marque la casilla recaptcha');
        }
    }, false)
});
</script>
  <script>AOS.init();</script>

  <script>
    $(document).ready(function () {
      $('.owl-carousel').owlCarousel({
        rtl: true,
        loop: true,
        dots: true,
        item: 3,
        margin: 2,
        center: true,
        nav: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 3
          },
        }
      });
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
  </script>
  <script>
    $(document).ready(function () {
      $('.counter-1').counterUp({
        delay: 10,
        time: 1000
      });
    });
  </script>
  <script src="./scripts/wow.min.js"></script>
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
    $('input[type="email"]')
      .on('invalid', function () {
        return this.setCustomValidity('Por favor ingresa una dirección de correo válida.');
      })
      .on('input', function () {
        return this.setCustomValidity('');
      });
    $('input[type="tel"]')
      .on('invalid', function () {
        return this.setCustomValidity('Por favor introduce un número válido de teléfono');
      })
      .on('input', function () {
        return this.setCustomValidity('');
      });
    $('input[type="name"]')
      .on('invalid', function () {
        return this.setCustomValidity('Por favor introduce su nombre completo');
      })
      .on('input', function () {
        return this.setCustomValidity('');
      });
    $('input[type="empresa"]')
      .on('invalid', function () {
        return this.setCustomValidity('Por favor introduce el nombre de su empresa');
      })
      .on('input', function () {
        return this.setCustomValidity('');
      });
    $('input[type="message"]')
      .on('invalid', function () {
        return this.setCustomValidity('Por favor introduce su mensaje');
      })
      .on('input', function () {
        return this.setCustomValidity('');
      });
  </script>
</body>

</html>