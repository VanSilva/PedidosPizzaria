@extends('adminlte::page')

@section('content')
  <h1>Funcionarios</h1>

  {!! Form::open(['name'=>'form_name', 'route'=>'funcionarios']) !!}
  <div class="sidebar-form">
    <div class="input-group">
      <input type="text" name="desc_filtro" class="form-control" style="width:80% !important;" placeholder="Pesquisa...">
      <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </div>
{!! Form::close() !!}
<br>

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
  {{ $funcionarios->links() }}
  
  <a href="{{ route('funcionarios.create', [])  }}" class="btn btn-info">Adicionar</a>
@stop