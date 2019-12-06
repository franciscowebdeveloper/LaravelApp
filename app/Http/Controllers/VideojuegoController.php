<?php

namespace LaravelApp\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request; -> preguntar a nico autocompletado de clases de laravel

class VideojuegoController extends Controller
{
    public function index($pagina = 1){
        $titulo = 'Listado de mis videojuegos';
        return view('videojuego.index', [
            'titulo' => $titulo,
            'pagina' => $pagina
        ]);
    }

    public function detalle($year = null){
        return view('videojuego.detalle');
    }

    public function rederigir(){
        // con action()
        return redirect()->action('VideojuegoController@detalle');
        // con route()
        // return redirect()->route('detalle.videojuego');
        
    }

    public function mostrarFormulario(){
        return view('videojuego.formulario');
    }

    // hay que pasar por parametros un objeto de tipo request, es decir de la clase de laravel Request, lo declaramos arriba con 'use'
    public function recibirDatosFormulario(Request $request){
        // agarramos valores form
        $nombre = $request->input('user');
        $email = $request->input('email');

        return "El nombre es: $nombre y el email es $email";

        // print de variable
        var_dump($nombre);

        // como solicita una vista le mandamos un die() para imprimir
    }
}
