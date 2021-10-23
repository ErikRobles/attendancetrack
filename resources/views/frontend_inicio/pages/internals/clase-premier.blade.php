@extends('frontend_inicio.inicio_master')
@section('frontend_two')
<div class="spacerdiv mt-5 mb-5 pt-2"></div>
<div class="container mt-5 d-flex justify-content-center">
  <div class="text-center bg-white shadow rounded price center mt-5 mb-5">
    <h4 class="pt-1 title-2">Clase Premier</h4>
    <h1 class="pb-2">
      <span style="font-size: 40px; font-family: 'Lato', sans-serif"
        >$797*<span class="usd">USD</span></span
      >
    </h1>
    <!-- <h1 class="pb-2">
      <span
        style="
          text-decoration: line-through;
          font-size: 12px;
          font-family: 'Lato', sans-serif;
        "
        >$797*<span class="usd">USD</span></span
      >
    </h1>
    <h1 class="pb-2">
      <span style="font-size: 40px; font-family: 'Lato', sans-serif"
        >$604.17*<span class="usd">USD</span></span
      >
    </h1> -->
    <p class="monthly">Mensuales</p>
    <hr />
    <p>5 clases de 1 hora por semana</p>
    <p>Clases Uno a Uno</p>
    <p>
      CLASES DE INGLÉS ESPECIALIZADO<br />
      DE ALTO NIVEL
    </p>
    <p>(Finanzas, Ingeniería, Legal, etc.)</p>
    <p>Maestro Nativo Particular</p>
    <p>Horario Fijo a tu conveniencia</p>
    <p>*<small style="font-size: 14px">Impuestos incluído</small></p>

    <p style="font-size: 15px; padding-top: 10px">
      Si tienes Dudas<br /><a
        style="text-decoration: underline"
        href="{{ route('contact_us')  }}"
        >solicita una llamada telefonica</a
      >
    </p>

    <form
      class="mt-3"
      action="https://www.paypal.com/cgi-bin/webscr"
      method="post"
      target="_top"
     
    >
      <input type="hidden" name="lc" value="MX" />
      <input type="hidden" name="cmd" value="_s-xclick" />
      <input type="hidden" name="hosted_button_id" value="W3KALY9QL9VAS" />
      <input
        type="image"
        style="height: 65px"
        src="https://www.paypalobjects.com/en_US/MX/i/btn/btn_subscribeCC_LG.gif"
        border="0"
        name="submit"
        alt="PayPal - The safer, easier way to pay online!"
      />
      <img
        alt=""
        border="0"
        src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"
        width="2"
        height="2"
      />
    </form>
    <!-- XMAS SPECIAL -->
    <!-- <form
      action="https://www.paypal.com/cgi-bin/webscr"
      method="post"
      target="_top"
    >
      <input type="hidden" name="cmd" value="_s-xclick" />
      <input type="hidden" name="hosted_button_id" value="2EL6DHARSG4S4" />
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

    <!--      
<form class="mt-3" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="GGJ2Y3AZE9W7C">
<input type="image" style="height: 65px;" src="https://www.paypalobjects.com/en_US/MX/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
-->
  </div>
</div>
<div class="spacerdiv"><p>&nbsp;</p></div>

@endsection