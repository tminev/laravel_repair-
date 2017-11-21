<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Autor;
use App\Mybook;
class Book extends Model
{
           protected $fillable = [
        'name', 'autor_id','total_pages',
    ];
     public function autor(){
    	return $this->belongsTo('App\Autor');
    }
     public function mybook(){
    	return $this->hasOne('App\Mybook');
    }
}

