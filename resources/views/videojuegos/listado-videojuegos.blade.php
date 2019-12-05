{{-- interpolacion de llaves para mostrar el contenido de las variables --}}
<h1>{{$titulo}}</h1>
<h1>{{$listado_videojuegos[2]}}</h1>

{{-- condicion ternaria (mostrar si existe) --}}
{{-- php --}}
<?= isset($creador) ? $creador : 'No hay creador'; ?>
{{-- blade --}}
{{ $creador or 'No hay creador'}}

<!-- Condicionales blade -->
<!-- si titulo da true -->
@if( $titulo && count($listado_videojuegos) >= 5 )
    <h1>El titulo existe y es este {{$titulo}}</h1>
@elseif($titulo)
    <h1>El titulo existe y el listado no es mayor a 5</h1>
@else
    <h1>El titulo no existe</h1>
@endif

