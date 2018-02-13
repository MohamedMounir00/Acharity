<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catogrey extends Model
{
    protected $table = 'catogreys';

    public function donation_rell(){

 		return $this->hasMany('App\Donation');
 	}
}

