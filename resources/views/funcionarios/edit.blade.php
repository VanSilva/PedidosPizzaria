@extends('adminlte::page')

@section('content')
  <h3>Editando Funcionario: {{ $funcionario->nome }}</h3>

  @if($errors->any())
    <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  {!! Form::open(['route'=> ["funcionarios.update", 'id'=>$funcionario->id], 'method'=>'put']) !!}

    <div class="form-group">
      {!! Form::label('nome', 'Nome:') !!}
      {!! Form::text('nome', $funcionario->nome, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Editar Funcionario', ['class'=>'btn btn-primary']) !!}
      {!! Form::reset('Limpar', ['class'=>'btn btn-default'])!!}
    </div>

  {!! Form::close() !!}
@stop