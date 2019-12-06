<h1>Formulario</h1>
<form action="{{ action('VideojuegoController@recibirDatosFormulario') }}" method="POST">

    {{-- IMPORTANTE!! proteger formulario para ataques con funcion csrf_field() de laravel  --}}
    {{ csrf_field() }}
    {{-- END -- IMPORTANTE!! proteger formulario para ataques con funcion csrf_field() de laravel  --}}

    <label for="user">User</label>
    <input type="text" name="user"><br>
    <label for="email">Email</label>
    <input type="email" name="email"><br>
    <label for="password">Password</label>
    <input type="password"><br>
    <button type="submit" name="password">Enviar</button>
</form>