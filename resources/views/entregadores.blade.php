@extends('adminlte::page')

@section('content')
  @foreach($entregadores as $entregador)
    <li>{{ $entregador-> nome }}</li>
    <br>
  @endforeach
@stop