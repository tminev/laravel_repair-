<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
           protected $fillable = [
        'name', 'born_date','city',
    ];
     public function Autor(){
    	return $this->belongsTo('App\Autor');
    }
}
