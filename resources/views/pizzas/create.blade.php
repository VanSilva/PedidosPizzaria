@extends('adminlte::page')

@section('content')
  
  @if($errors->any())
    <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  <div class="card">
    <div class="card-header" style="background: lightgrey">
        <h3>Nova Pizza</h3>
    </div>

    <div class="card-body">

      {!! Form::open(['route'=>'pizzas.store']) !!}

        <div class="form-group">
          {!! Form::label('sabor', 'Sabor:') !!}
          {!! Form::text('sabor', null, ['class'=>'form-control', 'required']) !!}
        </div>
        <hr />

        <h4>Ingredientes</h4>
        <div class="input_fields_wrap"></div>
        <br>

        <button style="float:right" class="add_field_button btn btn-default">Adicionar Ingrediente</button>
        
        <br>
        <hr />

        <div class="form-group">
          {!! Form::submit('Criar Pizza', ['class'=>'btn btn-primary']) !!}
          {!! Form::reset('Limpar', ['class'=>'btn btn-default'])!!}
        </div>

      {!! Form::close() !!}

    </div>
  </div>

@stop

@section('js')
	<script>
		$(document).ready(function(){
			var wrapper = $(".input_fields_wrap");
			var add_button = $(".add_field_button");
			var x=0;
			$(add_button).click(function(e){
			x++;
			var newField = '<div><div style="width:94%; float:left" id="ator">{!! Form::select("ingredientes[]", \App\Ingrediente::orderBy("descr")->pluck("descr","id")->toArray(), null, ["class"=>"form-control", "required", "placeholder"=>"Selecione um ingrediente"]) !!}</div><button type="button" class="remove_field btn btn-danger btn-circle"><i class="fa fa-times"></button></div>';
			$(wrapper).append(newField);
		});
		$(wrapper).on("click",".remove_field", function(e){
			e.preventDefault(); 
			$(this).parent('div').remove(); 
			x--;
		});
		})
	</script>

@stop