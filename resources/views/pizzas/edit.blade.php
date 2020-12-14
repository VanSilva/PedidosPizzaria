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

    <div class="w-100"></div>
      <div class="col">
        <div style="margin-bottom:20px">
          <button type="button" class="add_field_button btn btn-default">Adicionar Ingrediente</button>
        </div>
    </div>
    <div class="w-100"></div>
      <div class="col">
        <div class="input_fields_wrap">
          @foreach($ingredientes as $value)
            <div>
              <div class="form-group">
                  <label for="ingredientes" style="display: block;">Ingrediente</label>
                  <select class="form-control" readonly name="ingredientes[]" id="ingredientes" style="width:400px;float:left;cursor: not-allowed;background-color: #eee;opacity: 1;pointer-events: none;">
                    <option value="{{$value->ingrediente->id}}">{{$value->ingrediente->descr}}</option>
                  </select>&nbsp;&nbsp;
                  <button type="button" class="remove_field btn btn-danger btn-circle fa fa-times"></button>
              </div>
            </div>
          @endforeach
      </div>
    </div>

    <div class="form-group">
      {!! Form::submit('Editar Pizza', ['class'=>'btn btn-primary']) !!}
      {!! Form::reset('Limpar', ['class'=>'btn btn-default'])!!}
    </div>

    {!! Form::close() !!}
@stop


@push('js')
<script>
  $(document).ready(function() {

    var wrapper = $(".input_fields_wrap");
    var add_button = $(".add_field_button");
    var x = 0;

    $(add_button).click(function(e) {
      e.preventDefault();
      x++;
      var newField = `<div><div class="form-group">
                                <label for="ingredientes" style="display: block;">Ingrediente</label>
                                <select class="form-control" name="ingredientes[]" id="ingredientes" style="width:400px;float:left">
                                    <option value="">Selecione</option>
                                        @foreach($lista_ingredientes as $lista)
                                            <option value="{{$lista->id}}">{{$lista->descr}}</option>
                                        @endforeach
                                </select>&nbsp;&nbsp;
                                <button type="button" class="remove_field btn btn-danger btn-circle fa fa-times"></button>
                            </div></div>`;
      $(wrapper).append(newField);
    });
    $(wrapper).on("click", ".remove_field", function(e) {
      e.preventDefault();
      $(this).parent('div').remove();
      x--;
    });
  })
</script>
@endpush