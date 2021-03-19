<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;

class BuildingController extends Controller
{
   public function showbuilding(Request $request)
 	{
 		$building=Building::all();
 		// return $building;
 		return view('addProject',compact('building'));
 	}

 	 public function getFlatType(Request $request)
        {
            $flat_type= DB::table("flat_type")
            ->where("building_id",$request->building_id)
            ->pluck("flat_type","id");
            return response()->json($states);
        }

}
