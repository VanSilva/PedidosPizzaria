@extends('adminlte::page')

@section('content')
  <h1>Ingredientes</h1>
  <table class="table table-stripe table-bordered table-hover">
    <thead>
      <th>Descricao</th>
      <th>Ações</th>
    </thead>

    <tbody>
      @foreach($ingredientes as $ingrediente)
      <tr>
        <td>{{ $ingrediente->descr }}</td>
        <td>
        <a href="{{ route('ingredientes.edit', ['id'=>$ingrediente->id])  }}" class="btn-sm btn-success">Editar</a>
        <a href="{{ route('ingredientes.destroy', ['id'=>$ingrediente->id])  }}" class="btn-sm btn-danger">Remover</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $ingredientes->links() }}
  
  <a href="{{ route('ingredientes.create', [])  }}" class="btn btn-info">Adicionar</a>
@stop