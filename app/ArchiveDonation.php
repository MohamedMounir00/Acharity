<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchiveDonation extends Model
{
    protected $table = 'archive_donations';

     public function offices_rel(){
     return $this->belongsTo('App\Office', 'office_id');

     }
     public function cat_rel(){
     return $this->belongsTo('App\Catogrey','cat_id');

     }

     public function user_rel(){
     return $this->belongsTo('App\User','user_id');

     }
     public function order_rell(){
     return $this->belongsTo('App\Order','order_id');

     }
}
