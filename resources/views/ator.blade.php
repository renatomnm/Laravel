@extends('layouts.modelo')

@section('content')
  <h1>{{$ator->id}} : {{$ator->getNomeCompleto()}}</h1>
  <h2>Avaliação do ator: {{$ator->rating}}</h2>
@endsection
