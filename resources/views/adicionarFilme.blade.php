@extends('layouts.app')

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
<html>
    <head>
        <title>Adicionar Filme</title>
    </head>
    <body>
        <form action="/filmes/adicionar" method="POST">
          @csrf
          {{ method_field('POST') }}
            <div>
                <label for="titulo">Título</label>
                <input type="text" name="title"/>
            </div>
            <div>
                <label for="classificacao">Classificação</label>
                <input type="text" name="rating"/>
            </div>
            <div>
                <label for="premios">Prêmios</label>
                <input type="text" name="awards"/>
            </div>
            <div>
                <label for="duracao">Duração</label>
                <input type="text" name="length"/>
            </div>
            <div>
                <label for="estreia">Data de estreia</label>
                <input type="text" name="release_date"/>
            </div>
            <div>
                <label>Genero</label>
                <select name="genre_id">
                    @foreach($generos as $genero)
                      <option value={{ $genero->id}}>{{ $genero->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="Adicionar Filme" name="submit"/>
        </form>
    </body>
</html>

@endsection
