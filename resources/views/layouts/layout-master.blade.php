<!DOCTYPE HTML>
<html lang="es">
    <head>
    <meta charset="utf-8" />
    <title>Titulo - @yield('titulo')</title>
    </head>
    <body>
        <hr>
        @section('header')
            <h1>Cabecera de la web (master)</h1>
        @show
        <hr>
        <div class="container">
            <!-- llamamos a la variable content -->
            @yield('content')
        </div>
        <hr>
        @section('footer')
            <h1>Pie de página (master)</h1>
        @show
        <hr>
    </body>

</html>