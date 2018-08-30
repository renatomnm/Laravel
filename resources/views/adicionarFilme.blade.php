@extends('layouts.modelo')

@section('content')
  <h1>O filme {{ end($filmes) }} foi adicionado ao arquivo</h1>

  @foreach ($filmes as $film)
    <li>{{ $film }}</li>
  @endforeach
@endsection
