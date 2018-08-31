@extends('layouts.modelo')

@section('content')
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

    <button type="submit" value="adicioanar filme" name="adicionar filme">
</form>
@endsection
