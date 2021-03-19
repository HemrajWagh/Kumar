<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{	
	protected $table='flats';
   protected $fillable = [
         'flat_id','flat_type','status','building_id','Name','Email','Mobile','Address','City','State'
    ];
}
