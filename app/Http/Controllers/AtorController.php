<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ator;

class AtorController extends Controller
{
  public function listaTudo(){
    $atores = Ator::all();
    return view('atores')->with('atores',$atores);
  }

  public function buscaPorID($id){
    $ator = Ator::find($id);
    return view('ator')->with('ator',$ator);
  }
}
