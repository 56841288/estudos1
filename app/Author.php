<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
     protected $fillable = ['nome','email'];
     public function articles()
     {
     	return $this->hasMany('App\article');
     }
}

