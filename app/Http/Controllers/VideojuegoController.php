<?php

namespace LaravelApp\Http\Controllers;

use Illuminate\Http\Request;

class VideojuegoController extends Controller
{
    public function index($pagina = 1){
        $titulo = 'Listado de mis videojuegos';
        return view('videojuego.index', [
            'titulo' => $titulo,
            'pagina' => $pagina
        ]);
    }

    public function detalle(){
        return view('videojuego.detalle');
    }
}
