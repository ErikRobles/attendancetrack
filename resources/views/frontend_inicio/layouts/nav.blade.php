<nav class="navbar navbar-expand-md navbar-dark transparent-nav-custom fixed-top" id="navbar"><a
    class="navbar-brand" href="{{ route('inicio') }}"><img class="pb-2 logo-image" src="{{ asset('frontend/assets/img/logo.png') }}"
        alt="Lionsfield brand Logo" /></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"><span
        class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="{{ route('inicio') }}" class="text-center nav-link active"><i
                    class="fa fa-home"></i><br />Inicio <span class="sr-only">(current)</span></a></li>
        <li class="nav-item"><a href="{{ route('about_us') }}" class="text-center nav-link"> <i
                    class="fa fa-users"></i><br />Quienes Somos</a></li>
        <li class="nav-item"><a href="{{ route('metodo') }}" class="text-center nav-link"><i
                    class="fa fa-cogs"></i><br />Metodología</a></li>
        <li class="nav-item"><a href="{{ route('contact_us') }}" class="text-center nav-link"><i
                    class="fas fa-file-signature"></i><br />Contacto</a></li>
    </ul>
</div>
</nav>