<h1>{{$titulo}}</h1>
<p>Acción index() del controlador VideojuegoController</p>

@if(isset($pagina))
<h3>La pagina es {{$pagina}}</h3>
@endif

Con action()
<!-- action() que vaya al metodo detalle() de VideojuegoController -->
<a href="{{ action('VideojuegoController@detalle') }}">Ir a detalle</a> <br>

Con route()
<!-- o con route() con el nombre de la ruta comprobando con comando: php artisan route:list -->
<a href="{{ route('detalle.videojuego') }}">Ir a detalle</a>