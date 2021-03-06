<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;

class GeneroController extends Controller
{
  public function show($id){
    $genero = Genero::find($id);
    return view('genero')->with('genero',$genero);
  }

  public function showAll(){
    $generos = Genero::all();
    return view('todososGeneros')->with('generos',$generos);
  }

}
