@extends('adminlte::page')

@section('content')
<h1>Pizzas</h1>
  <table class="table table-stripe table-bordered table-hover">
    <thead>
      <th>Sabor</th>
      <th>Ingredientes</th>
      <th>Ações</th>
    </thead>

    <tbody>
      @foreach($pizzas as $pizza)
      <tr>
        <td>{{ $pizza->sabor }}</td>
        <td>{{ $pizza->ingrediente->descr }}</td>
        <td>
        <a href="{{ route('pizzas.edit', ['id'=>$pizza->id])  }}" class="btn-sm btn-success">Editar</a>
        <a href="{{ route('pizzas.destroy', ['id'=>$pizza->id])  }}" class="btn-sm btn-danger">Remover</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $pizzas->links() }}

  <a href="{{ route('pizzas.create', [])  }}" class="btn btn-info">Adicionar</a>
@stop