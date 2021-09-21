@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Economía Minera</h1>
@stop

@section('content')
<div class="card border-secondary mb-3" style="max-width: 180rem;">
  <div class="card-header text-center"> <b> BIENVENIDO </b></div>
  <div class="card-body text-secondary text-center">
    <h5 class="card-body">¡Buen día!</h5>
    <p class="card-text">Le damos la bienvenida al nuevo sistema de ventas del negocio del barrio. </p>
  </div>
</div>
    
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
