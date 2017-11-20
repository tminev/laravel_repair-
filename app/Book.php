<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Autor;
class Book extends Model
{
           protected $fillable = [
        'name', 'autor_id','total_pages',
    ];
     public function autor(){
    	return $this->belongsTo('App\Autor');
    }
}
