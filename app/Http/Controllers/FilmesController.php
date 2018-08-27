<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
          $resultado = $id;
        }
        $id++;
      }
      return $resultado;
    }
}
