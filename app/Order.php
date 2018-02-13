<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

     public function user_rel(){
     return $this->belongsTo('App\User', 'user_id');

     }

     public function catord_rel(){
     return $this->belongsTo('App\Order_cat', 'cat_id');

     }
     public function acrichive_rel(){

 		return $this->hasMany('App\ArchiveDonation');
 	}

}
