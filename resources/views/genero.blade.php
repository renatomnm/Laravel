@extends('layouts.modelo')

@section('content')
  <h1>{{ $genero->name }}</h1>
  @forelse ($genero->filmes as $filme)
  <li> {{ $filme->title }}</li>

  @empty
  <h1>Não existem filmes para exibir para este genero</h1>
  @endforelse
@endsection
