<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Autor;
class Book extends Model
{
           protected $fillable = [
        'name', 'autor_id','total_pages',
    ];
     public function Autor(){
    	return $this->belongsTo('App\Autor');
    }
}
