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
      {!! Form::label('pizza_id', 'Pizza:') !!}
      {!! Form::select('pizza_id', 
        \App\Pizza::orderBy('sabor')->pluck('sabor', 'id')->toArray(),
          null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('entregador_id', 'Entregador:') !!}
      {!! Form::select('entregador_id', 
        \App\Entregador::orderBy('nome')->pluck('nome', 'id')->toArray(),
          null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('funcionario_id', 'Funcionario:') !!}
      {!! Form::select('funcionario_id', 
        \App\Funcionario::orderBy('nome')->pluck('nome', 'id')->toArray(),
          null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('nome_cliente', 'Nome do Cliente:') !!}
      {!! Form::text('nome_cliente', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('horario', 'Horário do Pedido:') !!}
      {!! Form::select('horario', 
        array('20:00'=>'20:00',
              '20:30'=>'20:30',
              '21:00'=>'21:00',
              '21:30'=>'21:30',
              '22:00'=>'22:00',
              '22:30'=>'22:30',
              '23:00'=>'23:00',
              '23:30'=>'23:30',
              '00:00'=>'00:00'),
              '20:00', ['class'=>'form-control', 'required']) !!}
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