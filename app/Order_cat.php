<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_cat extends Model
{
    protected $table = 'order_cats';
    public function order_rel(){

 		return $this->hasMany('App\Order');
 	}
}

