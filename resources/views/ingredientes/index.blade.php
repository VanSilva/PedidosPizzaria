@extends('adminlte::page')

@section('content')
<h1>Ingredientes</h1>
  <table class="table table-stripe table-bordered table-hover">
    <thead>
      <th>Descricao</th>
    </thead>

    <tbody>
      @foreach($ingredientes as $ingrediente)
      <tr>
        <td>{{ $ingrediente->descr }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop