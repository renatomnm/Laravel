<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'welcomeController@index');

Route::get('/meuPrimeiroCaminho', function () {
    return "eu criei o meu primeiro caminho em Laravel";
});

Route::get('/resultado/{numero}/{numero2?}', function ($numero,$numero2=1) {
    $multi = $numero * $numero2;
    if($numero2 === 1){
      if($numero % 2 === 0){
        return "par";
      } else {
        return "impar";
      }
    } else {
      return $multi;
    }
});

Route::get('/pagina1', function(){
  return view('pagina1');
});

Route::get('/pagina2',function(){
  return view('pagina2');
});

Route::get('/pagina3',function(){
  return redirect('/');
});

Route::get('/filmes/{id}','FilmesController@procurarFilmeId');
Route::get('/filmes/procurar/{nome}','FilmesController@procurarFilmeNome');
Route::get('/filmes','FilmesController@todososFilmes');
Route::get('/filmes/db/{id}','FilmesController@buscarFilme');
Route::get('/filmes/adicionar/{filme}','FilmesController@adicionarFilme');
// Exercicio 3
Route::get('/atores','AtorController@listaTudo');
Route::get('/ator/{id}','AtorController@buscaPorID');
