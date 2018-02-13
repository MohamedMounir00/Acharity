<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'donations';
    public function offices_rel(){
     return $this->belongsTo('App\Office', 'office_id');

     }
     public function cat_rel(){
     return $this->belongsTo('App\Catogrey','cat_id');

     }

     public function user_rel(){
     return $this->belongsTo('App\User','user_id');

     }
}
