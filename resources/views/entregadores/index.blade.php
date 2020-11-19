@extends('adminlte::page')

@section('content')
<h1>Entregadores</h1>
  <table class="table table-stripe table-bordered table-hover">
    <thead>
      <th>Nome</th>
      <th>Ações</th>
    </thead>

    <tbody>
      @foreach($entregadores as $entregador)
      <tr>
        <td>{{ $entregador->nome }}</td>
        <td>
        <a href="{{ route('entregadores.edit', ['id'=>$entregador->id])  }}" class="btn-sm btn-success">Editar</a>
        <a href="{{ route('entregadores.destroy', ['id'=>$entregador->id])  }}" class="btn-sm btn-danger">Remover</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $entregadores->links() }}

  <a href="{{ route('entregadores.create', [])  }}" class="btn btn-info">Adicionar</a>
@stop