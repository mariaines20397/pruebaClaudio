@extends('dash.index')
@section('title', 'Guia de transito')
@section('content_header')
    <h1>Planilla de guía de tránsito</h1>
@stop
@section('content')

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">N° Expediente</th>
      <th scope="col">N° productor</th>
      <th scope="col">Cantera</th>
      <th scope="col">N° guías emitidas</th>
      <th scope="col">Fecha de emisión</th>
      <th scope="col">N° guías devueltas</th>
      <th scope="col">Guias faltantes</th>
      <th scope="col">Total/Vol Peso Material</th>
      <th scope="col">Sumatoria total anual</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>1</td>
      <td>Mark</td>
      <td>123</td>
      <td>01/01/01</td>
      <td>1</td>
      <td>1</td>
      <td>1</td>
      <td>20</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
@stop