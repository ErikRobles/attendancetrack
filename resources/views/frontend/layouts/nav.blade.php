<nav class="navbar navbar-expand-md navbar-dark transparent-nav-custom fixed-top navbar-expand-xl" id="navbar"><a
    class="navbar-brand" href="index.html"><img class="pb-2 logo-image" src="{{ asset('frontend/assets/img/logo.png') }}"
        alt="Lionsfield brand Logo" /></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"><span
        class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="index.html" class="text-center nav-link active"><i
                    class="fa fa-home"></i><br />Inicio <span class="sr-only">(current)</span></a></li>
        <li class="nav-item"><a href="{{ route('quienes_somos') }}" class="text-center nav-link"> <i
                    class="fa fa-users"></i><br />Quienes Somos</a></li>
        <li class="nav-item"><a href="{{ route('nuestros_clientes') }}" class="text-center nav-link"> <i
                    class="fa fa-building"></i><br />Nuestros Clientes</a></li>
        <li class="nav-item"><a href="{{ route('metodologia') }}" class="text-center nav-link"><i
                    class="fa fa-line-chart"></i><br />Metodología</a></li>
        <li class="nav-item"><a href="{{ route('certificaciones') }}" class="text-center nav-link"><i
                    class="fa fa-graduation-cap"></i><br />Certificaciones</a></li>
        <li class="nav-item"><a href="{{ route('contacto') }}" class="text-center nav-link"><i
                    class="fa fa-envelope"></i><br />Contacto</a></li>
    </ul>
</div>
</nav>
