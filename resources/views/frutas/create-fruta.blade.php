<h1>Crear una fruta</h1>

<form action="{{ action('FrutasController@save') }}" method="POST">

    {{ csrf_field() }}

    <label for="nombre">Nombre de la fruta:</label>
    <input type="text" name="nombre"><br>
    <label for="descripcion">descripcion de la fruta:</label>
    <input type="text" name="descripcion"><br>
    <input type="submit" value="guardar">
</form>