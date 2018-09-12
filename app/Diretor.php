<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diretor extends Model
{
  protected $table = 'directors';
  protected $fillable = ['first_name','last_name','birth_date'];

}
