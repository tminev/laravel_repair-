<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
        protected $fillable = [
        'name', 'born_date','city', 'bio',
    ];
     public function Books(){
    	return $this->hasOne('App\Book');
    }
}
