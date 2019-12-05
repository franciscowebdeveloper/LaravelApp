<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// index
Route::get('/', function () {
    // return view('welcome');
    echo "<h1>hola mundo</h1>";
});

// GET: Conseguir datos
// POST: Guardar datos
// PUT: Actualizar datos 
// DELETE: Borrar datos

// función anónima function()
Route::get('/mostrar-fecha', function () {
    // echo "<h1>Fecha Actual</h1>";
    // echo date('d-m-Y');
    // echo "<br>";
    // echo "<a href='/'>Ir a index</a>";

    // retornamos archivo para mostrar
    $titulo = 'Estoy mostrando la fecha'; 
    return view('mostrar-fecha', array(
        'titulo' => $titulo
    ));
    
});

// el interrogante dice que puede o no llegar 
Route::get('/videojuego/{titulo?}', function ($titulo = 'No hay ningun videojuego seleccionado', $year = 2019) {
    return view('videojuego', array(
        'titulo' => $titulo,
        'year' => $year
    ));

// metodo where() para indicar condiciones con expresiones regulares
})->where(array(
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]'
));

Route::get('/listado-videojuegos', function () {
    
    $titulo = "Listado de videojuegos";
    $listado_videojuegos = array('FIFA20', 'COD', 'Fortnite');

    // ponemos el nombre de la carpeta y con el . el nombre de la vista 
    // return view('videojuegos.listado-videojuegos', array(
    //     'titulo' => $titulo
    // ));

    // utilizamos el metodo with que permite adjuntar variables nuevas (el resultado es el mismo que el array())
    return view('videojuegos.listado-videojuegos')
        ->with('titulo', $titulo)
        ->with('listado_videojuegos', $listado_videojuegos);
    
});
