<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $table = 'offices';

	public function users_rel(){

 		return $this->hasMany('App\User');
 	}

 	public function donation_rel(){

 		return $this->hasMany('App\Donation');
 	}
    
}


//Office::users->name;

