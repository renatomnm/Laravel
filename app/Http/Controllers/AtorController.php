<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtorController extends Controller
{
  public function directory(){
    return view('atores');
  }
}
