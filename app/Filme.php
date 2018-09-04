<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
  protected $table = 'movies';
  protected $fillable = ['title','rating', 'release_date'];

  public function genero(){
    return $this->hasOne(Genero::class,'id','genre_id');
  }
}
