@extends('layouts.modelo')

@section('content')
  @forelse ($filmes as $filme)
  <li> {{ $filme->title . "- (" . $filme->genero['name'] .")"}} </li>

  @empty
  <h1>Não existem filmes para exibir</h1>
  @endforelse
@endsection
