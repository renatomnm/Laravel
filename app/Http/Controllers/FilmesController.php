<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;

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
      return view('adicionarFilme');
    }

    public function gravarFilme(Request $request){
      $filme = Filme::create([
        'title'=> $request->input('title'),
        'rating'=>$request->input('rating'),
        'release_date'=> '2018-08-30'
      ]);

      $filme->save();
    }
}
