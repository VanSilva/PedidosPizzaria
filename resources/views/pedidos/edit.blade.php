@extends('adminlte::page')

@section('content')
  <h3>Editando Pedido Pizza: {{ $pedido->nome_cliente }}</h3>

  @if($errors->any())
    <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  {!! Form::open(['route'=> ["pedidos.update", 'id'=>$pedido->id], 'method'=>'put']) !!}

    <div class="form-group">
      {!! Form::label('pizza', 'Pizza:') !!}
      {!! Form::select('pizza_id',
          \App\Pizza::orderBy('sabor')->pluck('sabor', 'id')->toArray(),
          $pedido->pizza_id, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('entregador', 'Entregador:') !!}
      {!! Form::select('entregador_id',
          \App\Entregador::orderBy('nome')->pluck('nome', 'id')->toArray(),
          $pedido->entregador_id, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('funcionario', 'Funcionario:') !!}
      {!! Form::select('funcionario_id',
          \App\Funcionario::orderBy('nome')->pluck('nome', 'id')->toArray(),
          $pedido->funcionario_id, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('nome_cliente', 'Nome do Cliente:') !!}
      {!! Form::text('nome_cliente', $pedido->nome_cliente, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('horario', 'Horário do Pedido:') !!}
      {!! Form::text('horario', $pedido->horario, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('endereco', 'Endereço:') !!}
      {!! Form::text('endereco', $pedido->endereco, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Editar Pedido Pizza', ['class'=>'btn btn-primary']) !!}
      {!! Form::reset('Limpar', ['class'=>'btn btn-default'])!!}
    </div>

  {!! Form::close() !!}
@stop