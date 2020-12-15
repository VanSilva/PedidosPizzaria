@extends('layouts.default')

@section('content')
<h1>Entregadores</h1>

{!! Form::open(['name'=>'form_name', 'route'=>'entregadores']) !!}
  <div class="sidebar-form">
    <div class="input-group">
      <input type="text" name="desc_filtro" class="form-control" style="width:80% !important;" placeholder="Pesquisa...">
      <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </div>
{!! Form::close() !!}

<a href="{{ route('entregadores.create', [])  }}" class="btn btn-info">Adicionar</a>
<br><br>

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
        <a href="{{ route('entregadores.edit', ['id'=>\Crypt::encrypt($entregador->id)])  }}" class="btn-sm btn-success">Editar</a>
        <a href="#" onclick="return ConfirmaExclusao({{$entregador->id}})" class="btn-sm btn-danger">Remover</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $entregadores->links() }}

@stop

@section('table-delete')
"entregadores"
@endsection