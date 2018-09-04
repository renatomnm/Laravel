@extends('layouts.modelo')

@section('content')
  @foreach ($atores as $ator)
    <a href="ator\buscar\{{ $ator->id }}"> <br>{{ $ator->getNomeCompleto() }}</a>
  @endforeach
@endsection
