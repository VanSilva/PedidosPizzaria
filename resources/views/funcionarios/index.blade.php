@extends('adminlte::page')

@section('content')
  <h1>Funcionarios</h1>
  <table class="table table-stripe table-bordered table-hover">
    <thead>
      <th>Nome</th>
      <th>Ações</th>
    </thead>

    <tbody>
      @foreach($funcionarios as $funcionario)
      <tr>
        <td>{{ $funcionario->nome }}</td>
        <td>
        <a href="{{ route('funcionarios.edit', ['id'=>$funcionario->id])  }}" class="btn-sm btn-success">Editar</a>
        <a href="{{ route('funcionarios.destroy', ['id'=>$funcionario->id])  }}" class="btn-sm btn-danger">Remover</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ route('funcionarios.create', [])  }}" class="btn btn-info">Adicionar</a>
@stop