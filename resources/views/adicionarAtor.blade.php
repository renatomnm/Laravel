@extends('layouts.modelo')

@section('content')

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="/actor/adicionar" method="POST">
    @csrf
    {{ method_field('POST') }}

    <div>
      <label>Nome do Ator</label>
      <input type="text" name="first_name">
    </div>

    <div>
      <label>Sobrenome do Ator</label>
      <input type="text" name="last_name">
    </div>

    <div>
      <label>Avaliação</label>
      <input type="number" name="rating">
    </div>

    <div>
      <label>Id Filme Favorito</label>
      <input type="number" name="favorite_movie_id">
    </div>

    <button type="submit">adicionar Ator</button>
</form>
@endsection
