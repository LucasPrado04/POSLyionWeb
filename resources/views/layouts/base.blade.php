<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
</head>
<body>
    <section class="head_cont">
        @include('partes.header') <!-- Header incluido dentro del section -->
        @include('partes.head') <!-- Head incluido dentro del section -->
        @include('principal')
        
        <!-- Aquí va el contenido dinámico de la vista -->
        @yield('contenido')
    </section>

    <footer>
        @include('partes.footer') <!-- Footer fuera del section -->
    </footer>
</body>
</html>