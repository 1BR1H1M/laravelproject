<!-- resources/views/admin/pages.blade.php -->

@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1 class="text-center"><b>Arepas Salome</b></h1>
@stop

@section('content')
    <div class="container">
        <h5 class="text-center">¡Bienvenido! <b>{{ Auth::user()->name }}</b>, desde aquí podrás comprar tu comidita</h5>
        <!-- Agrega aquí el contenido específico de tu vista -->
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
