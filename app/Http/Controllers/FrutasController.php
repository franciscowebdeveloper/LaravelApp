<?php

namespace LaravelApp\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutasController extends Controller
{
    public function index(){
        // obtener todos los registros de la tabla frutas
        $frutas = DB::table('frutas')->get();

        // como espera un array hay que mandarle como parametro un array con los valores
        return view('frutas.index', [
            // índice frutas
            'frutas' => $frutas
        ]);
    }
}
