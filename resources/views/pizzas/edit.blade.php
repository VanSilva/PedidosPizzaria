@extends('adminlte::page')

@section('content')
  <h3>Editando Pizza: {{ $pizza->sabor }}</h3>
  
  @if($errors->any())
    <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  {!! Form::open(['route'=> ["pizzas.update", 'id'=>$pizza->id], 'method'=>'put']) !!}

    <div class="form-group">
      {!! Form::label('sabor', 'Sabor:') !!}
      {!! Form::text('sabor', $pizza->sabor, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('ingredientes', 'Ingredientes:') !!}
      {!! Form::text('ingredientes', $pizza->ingredientes, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Editar Pizza', ['class'=>'btn btn-primary']) !!}
      {!! Form::reset('Limpar', ['class'=>'btn btn-default'])!!}
    </div>

  {!! Form::close() !!}
@stop