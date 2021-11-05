<!DOCTYPE html>
<html lang="es">

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
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description"
        content="Clases de inglés de Negocios en vivo. Practica con maestros nativos en los Estados Unidos, Canadá o Inglaterra. Temas de negocios, administración, finanzas y más">
    <link rel="alternate" href="{{ route('home') }}" hreflang="es-mx">
    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link href="{{ asset('frontend/stylesheets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/stylesheets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
     <!--Toastr-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <link rel="stylesheet" href="{{ asset('frontend/scss/style.css') }}">
    <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->

    <title>@yield('title')</title>
</head>
<style>
    div.sweet-stuff {
    display: none;
}
</style>