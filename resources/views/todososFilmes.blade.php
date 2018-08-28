@forelse ($filmes as $filme)
<li> {{$filme}} </li>

@empty
<h1>Não existem filmes para exibir</h1>
@endforelse
