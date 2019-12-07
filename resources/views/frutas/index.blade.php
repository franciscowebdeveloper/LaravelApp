<h1>Listado de frutas</h1>
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