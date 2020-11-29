@extends('layouts.default')

@section('content')
  <h1>Pedidos Pizza</h1>

  {!! Form::open(['name'=>'form_name', 'route'=>'pedidos']) !!}
  <div class="sidebar-form">
    <div class="input-group">
      <input type="text" name="desc_filtro" class="form-control" style="width:80% !important;" placeholder="Pesquisa...">
      <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </div>
{!! Form::close() !!}

<a href="{{ route('pedidos.create', [])  }}" class="btn btn-info">Adicionar</a>
<br><br>

  <table class="table table-stripe table-bordered table-hover">
    <thead>
      <th>Pizza</th>
      <th>Tamanho</th>
      <th>Entregador</th>
      <th>Funcionário</th>
      <th>Nome do Cliente</th>
      <th>Hora Pedido</th>
      <th>Endereço</th>
      <th>Ações</th>
    </thead>

    <tbody>
      @foreach($pedidos as $pedido)
      <tr>
        <td>{{ $pedido->pizza->sabor }}</td>
        <td>{{ $pedido->tamanho }}</td>
        <td>{{ $pedido->entregador->nome }}</td>
        <td>{{ $pedido->funcionario->nome }}</td>
        <td>{{ $pedido->nome_cliente }}</td>
        <td>{{ $pedido->horario }}</td>
        <td>{{ $pedido->endereco }}</td>
        <td>
        <a href="{{ route('pedidos.edit', ['id'=>$pedido->id])  }}" class="btn-sm btn-success">Editar</a>
        <a href="#" onclick="return ConfirmaExclusao({{$pedido->id}})" class="btn-sm btn-danger">Remover</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $pedidos->links() }}
  
@stop

@section('table-delete')
"pedidos"
@endsection