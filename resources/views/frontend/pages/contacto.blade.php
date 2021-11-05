@extends('frontend.frontend_master')
@section('title', 'Lionsfield | Contacto')
@section('frontend')
<div class="jumbotron contactenos img-fluid">
    <div class="container color-change">
      <div class="caption pb-3 caption text-center pt-5" data-aos="slide-left" data-aos-delay="10"
        data-aos-duration="1000">CONTÁCTENOS</div>
      <div class="sub-caption text-center text-uppercase pb-5" data-aos="fade-up" data-aos-delay="20"
        data-aos-duration="1000">SERÁ UN PLACER ATENDERLE</div>
    </div>
  </div>
  <div class="container-2 p-2">
    <div class="row">
      @if(Session::has('success'))
      <div class="alert alert-success">
          {{ Session::get('success') }}
          @php
              Session::forget('success');
          @endphp
      </div>
      @endif
      <div class="col-md-8">
        <main class="p-2">
          <h5 class="contact-form-header mb-3">Solicitud de Contacto</h5>
          <p class="content-2">
            Por favor, proporcione los siguientes datos para recibir mayor información. A la brevedad, uno de nuestros
            ejecutivos le atenderá. Siéntase seguro, sus datos se encuentran progetidos por nuestra política de
            privacidad, la cual puede consultar al final de esta página. </p>
          <form class="contact-form pb-3" method="post" id="contactform" action="{{ route('contact-form.store') }}">
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
                <label class="content-2" for="empresa">Empresa (Campo Requerido)</label>
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
              <div class="form-group col-md-10">
                <label class="content-2" for="tel2">Teléfono Celular</label>
                <input placeholder="Teléfono Celular" class="form-control" type="tel" name="tel2" pattern="^\d{10}$"
                  id="tel" />
              </div>
              <br /><br />
              <div class="form-group col-md-10">
                <label class="content-2" for="message">Mensaje (Campo Requerido)</label>
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
      <div class="col-md-4 p-2">
        <h5 class="contact-form-header mb-3">Acerca de Lionsfield</h5>
        <p class="content-2">
          Somos una empresa de capacitación empresarial propiedad de Magisterial Education América, con sede en los
          Estados Unidos de América. Con más de 13 años en el mercado, ponemos a su disposición nuestro programa de
          inglés de negocios en México.</p>
        <h5 class="contact-form-header mb-3">Horarios de Atención</h5>
        <p class="content-2"><strong>Lunes a Viernes: </strong>9am - 6:00pm </p>
        <h5 class="contact-form-header mb-3">Información de Contacto</h5>
        <p class="content-2"><strong>Address</strong><br />Arquímedes 130, Piso 5.<br />
          Col. Polanco V Sección<br /> CDMX, C.P. 11560</p>
        <p class="content-2"><strong>Correo Electrónico</strong><br />atencion@lionsfield.mx</p>
        <p class="aviso"><a href="{{ route('aviso_de_privacidad') }}">Aviso de Privacidad</a></p>
      </div>
    </div>
  </div>
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
@endsection