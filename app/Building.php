<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    
    protected $table='buildings';	
     protected $fillable = [
         'building_id','building_name','project_id'
    ];
}
