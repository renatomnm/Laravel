@extends('layouts.modelo')

@section('content')
  @forelse ($generos as $genero)
    <a href="genero\show\{{ $genero->id }}"><br>{{$genero->id}} - {{ $genero->name}}</a>
  @empty
  <h1>Não existem filmes para exibir</h1>
  @endforelse
@endsection
