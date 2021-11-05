@extends('frontend_inicio.inicio_master')
@section('title', 'Lionsfield | Clase Grupal')
@section('frontend_two')
<div class="spacerdiv mt-5 mb-5 pt-2"></div>
<div class="container mt-5 d-flex justify-content-center">
  <div
    class="text-center bg-white shadow rounded price center purchase-card mt-5 mb-5 pb-5"
  >
    <h4 class="pt-1 title-2">Clase Grupal</h4>
    <h1>
      <span style="font-size: 60px; font-family: 'Lato', sans-serif"
        >$107<span class="usd">USD</span>
        <!-- <span style="text-decoration: line-through; font-size: 12px; font-family: 'Lato', sans-serif"
        >$107<span class="usd">USD</span> -->
    </h1>
    <!-- <h1>
        <span style="font-size: 40px; font-family: 'Lato', sans-serif"
        >$80.56<span class="usd">USD</span>
    </h1> -->
    <p class="middle-month mt-1">Mensuales</p>
    <hr />
    <p>2 clases de 1 hora por semana</p>
    <p>6 Alumnos Máximo por Clase</p>
    <p>Maestro Nativo</p>
    <p>Clases Conversacionales</p>
    <p>Inicio de clases cada 1er día hábil del mes</p>
    <p>Sujeto a disponibilidad</p>
    <p>Horario fijo</p>
    <p>*<small style="font-size: 14px">Impuestos incluído</small></p>
    <p style="font-size: 15px; padding-top: 10px" class="mb-3">
      Si tienes Dudas<br /><a
        style="text-decoration: underline"
        href="{{ route('contact_us')  }}"
        >solicita una llamada telefonica</a
      >
    </p>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="Z3UTC6BVE5RTU">
        <input type="image" src="https://www.paypalobjects.com/en_US/MX/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
    <!-- XMAS SPECIAL -->
    <!-- <form
      action="https://www.paypal.com/cgi-bin/webscr"
      method="post"
      target="_top"
    >
      <input type="hidden" name="cmd" value="_s-xclick" />
      <input type="hidden" name="hosted_button_id" value="KG6K296ZY695Y" />
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
<div class="spacerdiv"><p>&nbsp;</p></div>
@endsection
