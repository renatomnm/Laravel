@extends('layouts.modelo')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title></title>
  </head>
  <body>
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
      </li>a

      @empty
      <h1>Não existem filmes para exibir</h1>
      @endforelse

      {{ $filmes->links()}}

    @endsection
  </body>
</html>
