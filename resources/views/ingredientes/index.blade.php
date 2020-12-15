@extends('layouts.default')

@section('content')
  <h1>Ingredientes</h1>

  {!! Form::open(['name'=>'form_name', 'route'=>'ingredientes']) !!}
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
      @foreach($ingredientes as $ingrediente)
      <tr>
        <td>{{ $ingrediente->descr }}</td>
        <td>
        <a href="{{ route('ingredientes.edit', ['id'=>\Crypt::encrypt($ingrediente->id)])  }}" class="btn-sm btn-success">Editar</a>
        <a href="#" onclick="return ConfirmaExclusao({{$ingrediente->id}})" class="btn-sm btn-danger">Remover</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $ingredientes->links() }}
  
  <a href="{{ route('ingredientes.create', [])  }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
"ingredientes"
@endsection