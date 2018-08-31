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
<form action="/filmes/adicionar" method="POST">
    @csrf
    {{ method_field('POST') }}

    <div>
      <label>Nome do Filme</label>
      <input type="text" name="title">
    </div>

    <div>
      <label>Rating</label>
      <input type="number" name="rating">
    </div>

    <button type="submit">adicionar Filme</button>
</form>
@endsection
