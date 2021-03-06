<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

// |----------------------------
// GET: Conseguir datos
// POST: Guardar datos
// PUT: Actualizar datos 
// DELETE: Borrar datos
// |----------------------------

|
*/

//Command Terminal ----> php artisan route:list

// index
Route::get('/', function () {
    // return view('welcome');
    echo "<h1>hola mundo</h1>";
});
// Utilizar controlador en el fichero de rutas y su metodo
Route::get('/videojuegos/{pagina?}', 'VideojuegoController@index');

// Poner un Name a la ruta /detalle
Route::get('/detalle/{year?}', [
    'middleware' => 'testyear',
    'uses' => 'VideojuegoController@detalle',
    // indicamos el alias
    'as' => 'detalle.videojuego'
]);
Route::get('/formulario', 'VideojuegoController@mostrarFormulario');

// tipo post para recibir
Route::post('/recibir-datos-formulario', 'VideojuegoController@recibirDatosFormulario');

// Rederigir de una accion a otra o de una url a otra
Route::get('/rederigir', 'VideojuegoController@rederigir');

Route::resource('usuario', 'UsuarioController');

// RUTAS DE FRUTAS
Route::group(['prefix' => 'frutas'], function(){
    Route::get('index', 'FrutasController@index');
    Route::get('crear', 'FrutasController@create');
    Route::post('save', 'FrutasController@save');
    // parametro id
    Route::get('detail/{id}', 'FrutasController@detail');
    Route::get('delete/{id}', 'FrutasController@delete');
});



// // función anónima function()
// Route::get('/mostrar-fecha', function () {
//     // echo "<h1>Fecha Actual</h1>";
//     // echo date('d-m-Y');
//     // echo "<br>";
//     // echo "<a href='/'>Ir a index</a>";

//     // retornamos archivo para mostrar
//     $titulo = 'Estoy mostrando la fecha'; 
//     return view('mostrar-fecha', array(
//         'titulo' => $titulo
//     ));
    
// });

// // el interrogante dice que puede o no llegar 
// Route::get('/videojuego/{titulo?}', function ($titulo = 'No hay ningun videojuego seleccionado', $year = 2019) {
//     return view('videojuego', array(
//         'titulo' => $titulo,
//         'year' => $year
//     ));

// // metodo where() para indicar condiciones con expresiones regulares
// })->where(array(
//     'titulo' => '[a-zA-Z]+',
//     'year' => '[0-9]'
// ));

// Route::get('/listado-videojuegos', function () {
    
//     $titulo = "Listado de videojuegos";
//     $listado_videojuegos = array('FIFA20', 'COD', 'Fortnite');

//     // ponemos el nombre de la carpeta y con el . el nombre de la vista 
//     // return view('videojuegos.listado-videojuegos', array(
//     //     'titulo' => $titulo
//     // ));

//     // utilizamos el metodo with que permite adjuntar variables nuevas (el resultado es el mismo que el array())
//     return view('videojuegos.listado-videojuegos')
//         ->with('titulo', $titulo)
//         ->with('listado_videojuegos', $listado_videojuegos);
    
// });

// Route::get('/pagina-generica', function () {
//     return view('pagina');

// });
