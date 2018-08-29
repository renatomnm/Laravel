<h1>Atores</h1>
@forelse ($atores as $ator)
<a href="ator\{{ $ator->id }}"> <br>{{ $ator->getNomeCompleto() }}</a>

@empty
<h1>Não existem filmes para exibir</h1>
@endforelse
