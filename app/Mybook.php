<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DB;
class Mybook extends Model
{

	 protected $fillable = [
        'user_id', 'book_id',
    ];
     public function book(){
    	return $this->belongsTo('App\Book');
    }
     public function user(){
    	return $this->belongsTo('App\User');
    }

    
    

}
