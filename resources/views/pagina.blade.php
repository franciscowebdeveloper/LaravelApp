<!-- heredamos de la plantilla maestra -->
@extends('layouts.layout-master')

@section('titulo', 'página genérica')

@section('header')
    <h1>Hola</h1>
@stop

@section('content')
    <h1>Contenido de la página genérica</h1>
<!-- para que pare de añadir contenido a ese bloque  -->
@stop