@extends('frontend_inicio.inicio_master')
@section('title', 'Lionsfield | Clase Individual')
@section('frontend_two')
<div class="spacerdiv mt-5 mb-5 pt-2 pb-5"></div>
<div class="container mt-5 d-flex justify-content-center mb-5">
  <div class="text-center bg-white shadow rounded price center mt-5 mb-5">
    <h4 class="pt-1 title-2">Clase Individual</h4>
    <h1>
      <span style="font-size: 60px; font-family: 'Lato', sans-serif"
        >$319*<span class="usd">USD</span></span
      >
    </h1>
    <!-- <h1>
      <span
        style="
          text-decoration: line-through;
          font-size: 12px;
          font-family: 'Lato', sans-serif;
        "
        >$319*<span class="usd">USD</span></span
      >
    </h1> -->
    <!-- <h1>
      <span style="font-size: 40px; font-family: 'Lato', sans-serif"
        >$241.67*<span class="usd">USD</span></span
      >
    </h1> -->
    <p class="middle-month">Mensuales</p>
    <hr />
    <p>2 clases de 1 hora por semana</p>
    <p>Clases Uno a Uno</p>
    <p>Maestro Nativo Particular</p>
    <p>Exclusivo para ti</p>
    <p>Inglés de Negocios</p>
    <p>Horario Fijo a tu conveniencia</p>
    <p style="font-size: 15px; padding-top: 10px">
      Si tienes Dudas<br /><a
        style="text-decoration: underline"
        href="{{ route('contact_us')  }}"
        >solicita una llamada telefonica</a
      >
    </p>
    <p>*<small style="font-size: 14px">Impuestos incluído</small></p>

    <form
      action="https://www.paypal.com/cgi-bin/webscr"
      method="post"
      target="_top"
      class="mb-5"
    >
      <input type="hidden" name="cmd" value="_s-xclick" />
      <input type="hidden" name="hosted_button_id" value="DBMXPS8PCYB22" />
      <input
        type="image"
        src="https://www.paypalobjects.com/en_US/MX/i/btn/btn_subscribeCC_LG.gif"
        border="0"
        name="submit"
        alt="PayPal - The safer, easier way to pay online!"
      />
      <img
        alt=""
        border="0"
        src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"
        width="1"
        height="1"
      />
    </form>
    <!-- XMAS SPECIAL -->
    <!-- <form
      action="https://www.paypal.com/cgi-bin/webscr"
      method="post"
      target="_top"
    >
      <input type="hidden" name="cmd" value="_s-xclick" />
      <input type="hidden" name="hosted_button_id" value="VPGKY9XAZLDXG" />
      <input
        type="image"
        src="https://www.paypalobjects.com/en_US/MX/i/btn/btn_subscribeCC_LG.gif"
        border="0"
        name="submit"
        alt="PayPal - The safer, easier way to pay online!"
      />
      <img
        alt=""
        border="0"
        src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"
        width="1"
        height="1"
      />
    </form> -->
  </div>
</div>

<div class="spacerdiv mt-5 mb-5 pt-2 pb-5"></div>
@endsection