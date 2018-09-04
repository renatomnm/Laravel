<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
  protected $table = 'genres';

  public function filmes(){
    return $this->hasMany(Filme::class,'genre_id','id');
  }
}
