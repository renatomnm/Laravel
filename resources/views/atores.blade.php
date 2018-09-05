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
      @foreach ($atores as $ator)
        <a href="ator\buscar\{{ $ator->id }}"> <br>{{ $ator->getNomeCompleto() }}</a>
      @endforeach

      {{ $atores->links() }}
    @endsection
  </body>
</html>
