@extends('adminlte::page')

@section('content')
  <h3>Editando Ingrediente: {{ $ingrediente->descr }}</h3>

  @if($errors->any())
    <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  {!! Form::open(['route'=> ["ingredientes.update", 'id'=>$ingrediente->id], 'method'=>'put']) !!}

    <div class="form-group">
      {!! Form::label('descr', 'Descrição:') !!}
      {!! Form::text('descr', $ingrediente->descr, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Editar Ingrediente', ['class'=>'btn btn-primary']) !!}
      {!! Form::reset('Limpar', ['class'=>'btn btn-default'])!!}
    </div>
  {!! Form::close() !!}
@stop