@extends('adminlte::page')

@section('content')
  @foreach($funcionarios as $funcionario)
    <li>{{ $funcionario-> nome }}</li>
    <br>
  @endforeach
@stop