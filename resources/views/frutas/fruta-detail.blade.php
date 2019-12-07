<h1>{{$fruta->nombre}}</h1>

<p>
    {{$fruta->descripcion}}
</p>

{{-- le pasamos como parametro a la url la id --}}
<a href="{{ action('FrutasController@delete', ['id' => $fruta->id]) }}">Borrar fruta</a>