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

<form action="/user/edit" method="POST">
    @csrf
    {{ method_field('PUT') }}

    <div>
      <label>Nome</label>
      <input type="text" name="name" value={{$user->name}} >
    </div>

    <div>
      <label>Email</label>
      <input type="text" name="email" value={{$user->email}}>
    </div>

    <div>
      <label>Telefone</label>
      <input type="number" name="phone" value={{$user->email}}>
    </div>

    <button type="submit">editar Ator</button>
</form>
@endsection
