@extends('layouts.modelo')

@section('content')
  <h1>{{$ator->getNomeCompleto()}}</h1>
  <h2>Avaliação do ator: {{$ator->rating}}</h2>
  <h2>Filme Favorito do ator: {{$ator->favorite_movie_id}}</h2>
@endsection
