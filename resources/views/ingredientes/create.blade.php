@extends('adminlte::page')

@section('content')
  <h3>Novo Ingrediente</h3>

  {!! Form::open(['url'=>'ingredientes/store']) !!}

    <div class="form-group">
      {!! Form::label('descr', 'Descrição:') !!}
      {!! Form::text('descr', null, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Criar Ingrediente', ['class'=>'btn btn-primary']) !!}
      {!! Form::reset('Limpar', ['class'=>'btn btn-default'])!!}
    </div>
  {!! Form::close() !!}
@stop