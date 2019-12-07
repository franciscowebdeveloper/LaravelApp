<?php

namespace LaravelApp\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutasController extends Controller
{
    public function index(){
        // obtener todos los registros de la tabla frutas
        $frutas = DB::table('frutas')
                ->orderBy('id', 'desc')
                ->get();

        // como espera un array hay que mandarle como parametro un array con los valores
        return view('frutas.index', [
            // índice frutas
            'frutas' => $frutas
        ]);
    }

    // parametro id que vendrá por la url
    public function detail($id){
        // condicion where() donde coja la misma id que le viene por parametro por la url
        //con el metodo first saca un objeto limpio, lo comprobamos haciendo un var_dump
        $fruta = DB::table('frutas')->where('id', '=', $id)->first();
        // var_dump($fruta);
        // die();
        return view('frutas.fruta-detail', [
            'fruta' => $fruta
        ]);
    }

    public function create(){
        return view ('frutas.create-fruta');
    }

     
    public function save(Request $request){
        // guardar registro
        $fruta = DB::table('frutas')->insert(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ));

        //hacemos una redirección cuando terminemos de guardar registro
        return redirect()->action('FrutasController@index');
    }
}
