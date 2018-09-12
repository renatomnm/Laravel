<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
  protected $table = 'movies';
  protected $fillable = ['title','rating','release_date','awards','length','genre_id','directors_id'];

  public function genero(){
    return $this->hasOne(Genero::class,'id','genre_id');
  }

  public function atores(){
    return $this->belongsToMany(Ator::class,'actor_movie','actor_id','movie_id');
  }
}
