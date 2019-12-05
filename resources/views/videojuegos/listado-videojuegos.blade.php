@include('includes.header')

{{-- interpolacion de llaves para mostrar el contenido de las variables --}}
<h1>{{$titulo}}</h1>
<h1>{{$listado_videojuegos[2]}}</h1>


<!-- CONDICIONALES BLADE -->
<!-- si titulo da true -->
@if( $titulo && count($listado_videojuegos) >= 5 )
    <h1>El titulo existe y es este {{$titulo}}</h1>
@elseif($titulo)
    <h1>El titulo existe y el listado no es mayor a 5</h1>
@else
    <h1>El titulo no existe</h1>
@endif

<hr>

<!-- BUCLE FOR -->
@for($i = 1; $i <= 20; $i++)
    El número es {{$i}} <br>
@endfor

<hr>

<!-- BUCLE WHILE -->
<?php $contador = 1 ?>
@while($contador < 50)
    @if($contador % 2 == 0)
        Número par: {{$contador}} <br>
    @endif
    <?php $contador++ ?>
@endwhile

<!-- FOREACH (Para recorrer arrays) -->
<!-- $listado_videojuegos es la misma varibale que seteamos en el enrrutador web.php -->
@foreach($listado_videojuegos as $videojuego)
    <p>El videojuego es: {{$videojuego}}</p>
@endforeach


@include('includes.footer')