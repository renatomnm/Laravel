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

  public function addForm(){
    return view('AdicionarAtor');
  }

  public function addDB(Request $request){
    $request->validate([
      'first_name' => 'required',
      'last_name' => 'required',
      'rating' => 'required|numeric|between:1,10',
      'favorite_movie_id' => 'required|numeric'
    ]);

    $ator = Ator::create([
      'first_name'=> $request->input('first_name'),
      'last_name'=>$request->input('last_name'),
      'rating'=> $request->input('rating'),
      'favorite_movie_id' => $request->input('favorite_movie_id')
    ]);

    $ator->save();
    return redirect('/atores');
  }
}
