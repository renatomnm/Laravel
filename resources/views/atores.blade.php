<h1>Atores</h1>
@forelse ($atores as $ator)
<li> {{ $ator->getNomeCompleto() }} </li>

@empty
<h1>Não existem filmes para exibir</h1>
@endforelse
