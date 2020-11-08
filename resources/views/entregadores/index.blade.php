@extends('adminlte::page')

@section('content')
<h1>Entregadores</h1>
  <table class="table table-stripe table-bordered table-hover">
    <thead>
      <th>Nome</th>
    </thead>

    <tbody>
      @foreach($entregadores as $entregador)
      <tr>
        <td>{{ $entregador->nome }}</td>
        <br>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop