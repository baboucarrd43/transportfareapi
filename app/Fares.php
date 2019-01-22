<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fares extends Model
{
   public $timestamps = false;
    protected $fillable = ['departure','destination','price'];
}
