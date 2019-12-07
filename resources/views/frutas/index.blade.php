<h1>Listado de frutas</h1>
<ul>
    {{-- por cada iteracción creame una variable --}}
    @foreach($frutas as $fruta)
        <li>{{$fruta->nombre}}</li>
    @endforeach
</ul>