<h1>Listado de frutas</h1>
<h3><a href="{{ action('FrutasController@create')}}">Crear fruta</a></h3>
 {{-- Estado -> (si existe la sesion 'status' que se muestre el mensaje, son sesiones flash, es decir solo duran una vez ya que si recargamos no lo procesa) --}} 
 @if(session('status'))
 <p style="background: green;">
     {{session('status')}}
 </p>
  {{-- End Estado --}}
@endif
<ul>
    {{-- por cada iteracción creame una variable --}}
    @foreach($frutas as $fruta)
        <li>
            {{-- le añadimos la id del objeto que estamos recorriendo en ese momento para que se añada a la url --}}
            <a href="{{ action('FrutasController@detail', ['id' => $fruta->id]) }}">
                {{$fruta->nombre}}
            </a>
        </li>
    @endforeach
</ul>