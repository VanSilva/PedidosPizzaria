@extends('adminlte::page')

@section('content')
  <h3>Novo Pedido</h3>

  @if($errors->any())
    <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  {!! Form::open(['route'=>'pedidos.store']) !!}

    <div class="form-group">
      {!! Form::label('pizza', 'Pizza:') !!}
      {!! Form::text('pizza', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('entregador', 'Entregador:') !!}
      {!! Form::text('entregador', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('funcionario', 'Funcionario:') !!}
      {!! Form::text('funcionario', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('nome_cliente', 'Nome do Cliente:') !!}
      {!! Form::text('nome_cliente', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('horario', 'Horário do Pedido:') !!}
      {!! Form::text('horario', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('endereco', 'Endereço:') !!}
      {!! Form::text('endereco', null, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Criar Pedido Pizza', ['class'=>'btn btn-primary']) !!}
      {!! Form::reset('Limpar', ['class'=>'btn btn-default'])!!}
    </div>

  {!! Form::close() !!}
@stop