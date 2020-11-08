@extends('adminlte::page')

@section('content')
  <h3>Novo Funcionário</h3>

  {!! Form::open(['url'=>'funcionarios/store']) !!}

    <div class="form-group">
      {!! Form::label('nome', 'Nome:') !!}
      {!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Criar Funcionario', ['class'=>'btn btn-primary']) !!}
      {!! Form::reset('Limpar', ['class'=>'btn btn-default'])!!}
    </div>

  {!! Form::close() !!}
@stop