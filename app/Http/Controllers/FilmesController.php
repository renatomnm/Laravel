<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;
use App\Genero;

class FilmesController extends Controller
{
    function procurarFilmeId($id){
      $filmes = ["Toy Story","Procurando Nemo","Avatar","Star Wars: Episódio V","Up","Mary e Max"];
      $resultado = "";
      if(isset($filmes[$id])){
        $resultado = $filmes[$id];
      } else {
        $resultado = "o filme com o Id " . $id . " não existe";
      }
      return $resultado;
    }

    function procurarFilmeNome($nome){
      $filmes = ["Toy Story","Procurando Nemo","Avatar","Star Wars: Episódio V","Up","Mary e Max"];
      $resultado = "O filme " . $nome . " não existe";
      $id = 0;
      foreach($filmes as $f) {
        if($f == $nome){
          $resultado = $id . " - " . $nome;
          break;
        }
        $id++;
      }
      return $resultado;
    }

    public function todososFilmes(){
      $filmes = Filme::all();
      return view('todososFilmes')->with('filmes',$filmes);
    }

    public function buscarFilme($id){
      $filme = Filme::find($id);
      return view('dadosdofilme')->with('filme',$filme);
    }

    public function adicionarFilme(){
      $generos = Genero::all();
      return view('adicionarFilme')->with('generos',$generos);
    }

    public function gravarFilme(Request $request){
      $request->validate([
        'title' => 'required|unique:movies|max:240',
        'rating' => 'required|numeric|between:1,10',
        'awards' => 'required|numeric',
        'length' => 'required|numeric',
        'release_date' => 'required'
      ]);

      $filme = Filme::create([
        'title'=> $request->input('title'),
        'rating'=>$request->input('rating'),
        'awards' => $request->input('awards'),
        'length' => $request->input('length'),
        'release_date'=> $request->input('release_date'),
        'genre_id' =>$request->input('genre_id')
      ]);

      $filme->save();
      return redirect('/filmes');
    }
}
