@extends('adminlte::page')

@section('content')
  @foreach($ingredientes as $ingrediente)
    <li>{{ $ingrediente-> descr }}</li>
    <br>
  @endforeach
@stop