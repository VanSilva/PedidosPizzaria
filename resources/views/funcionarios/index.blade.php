@extends('adminlte::page')

@section('content')
  <h1>Funcionarios</h1>
  <table class="table table-stripe table-bordered table-hover">
    <thead>
      <th>Nome</th>
    </thead>

    <tbody>
      @foreach($funcionarios as $funcionario)
      <tr>
        <td>{{ $funcionario->nome }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop