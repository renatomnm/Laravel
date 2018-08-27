<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
    function procurarFilmeId($id){
      $resultado = "";
      $filmes = ["Toy Story","Procurando Nemo","Avatar","Star Wars: Episódio V","Up","Mary e Max"];
      if(isset($filmes[$id])){
        $resultado = $filmes[$id];
      } else {
        $resultado = "o filme com o Id " . $id . " não existe";
      }
      return $resultado;
    }
}
