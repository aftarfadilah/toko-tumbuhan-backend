<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tumbuhan extends Model
{
  //
  protected $table = 'tumbuhan';
  protected $fillable = ['title', 'body'];
}
