@extends('layouts.modelo')

@section('content')
  @forelse ($filmes as $filme)
  <li>
    <p>Nome do filme: {{ $filme->title }} </p>
    <p>Classificação: {{ $filme->rating }}</p>
    @if(isset($filme->genero))
    <p>Nome do Genero: {{ $filme->genero->name }} </p>
    @endif

    @foreach($filme->atores as $ator)
      {{ $ator->first_name }} {{ $ator->last_name }}  - 
    @endforeach
  </li>

  @empty
  <h1>Não existem filmes para exibir</h1>
  @endforelse

@endsection
