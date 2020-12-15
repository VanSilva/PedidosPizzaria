@extends('layouts.default')

@section('content')
<h1>Pizzas</h1>

{!! Form::open(['name'=>'form_name', 'route'=>'pizzas']) !!}
  <div class="sidebar-form">
    <div class="input-group">
      <input type="text" name="desc_filtro" class="form-control" style="width:80% !important;" placeholder="Pesquisa...">
      <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </div>
{!! Form::close() !!}

<a href="{{ route('pizzas.create', [])  }}" class="btn btn-info">Adicionar</a>
<br><br>

  <table class="table table-stripe table-bordered table-hover">
    <thead>
      <th>Sabor</th>
      <th>Ingredientes</th>
      <th>Ações</th>
    </thead>

    <tbody>
      @foreach($pizzas as $pizza)
      <tr>
        <td>{{ $pizza->sabor }}</td>
        <td>
          @foreach($pizza->ingredientes as $i)
            <li>{{ $i->ingrediente->descr }}</li>
          @endforeach
        </td>
        <td>
        <a href="{{ route('pizzas.edit', ['id'=>\Crypt::encrypt($pizza->id)])  }}" class="btn-sm btn-success">Editar</a>
        <a href="#" onclick="return ConfirmaExclusao({{$pizza->id}})" class="btn-sm btn-danger">Remover</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $pizzas->links() }}

@stop

@section('table-delete')
"pizzas"
@endsection