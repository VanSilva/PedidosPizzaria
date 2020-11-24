@extends('adminlte::page')

@section('content')
  <h3>Novo Pizza</h3>
  
  @if($errors->any())
    <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  {!! Form::open(['route'=>'pizzas.store']) !!}

    <div class="form-group">
      {!! Form::label('sabor', 'Sabor:') !!}
      {!! Form::text('sabor', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('ingredientes', 'Ingredientes:') !!}
      {!! Form::text('ingredientes', null, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Criar Pizza', ['class'=>'btn btn-primary']) !!}
      {!! Form::reset('Limpar', ['class'=>'btn btn-default'])!!}
    </div>

  {!! Form::close() !!}
@stop