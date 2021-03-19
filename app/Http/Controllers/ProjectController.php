<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Building;
use App\Project;
use App\Flat;

class ProjectController extends Controller
{
 	public function index(Request $request)
 	{
 			// dd($request->all());
 		$project=Project::all();
 		$building=DB::table("buildings")
 		->where('project_id',$request->get('id'))
 		->get();
 		return view('addProject',compact('project','building'));

 	}
 	public function create(Request $request)
 	{
 		$project=new Project;
	    $project->projects=$request->text;
	    $project->save();
	    return 'Done';
 	}
 	public function delete(Request $request){
 		Project::where('id',$request->id)->delete();
 		return $request->all();
 	}	


 	public function getAllData(Request $request)
 	{	
 		// dd($request->all());
 		// dd('hi');
 		$project=Project::all();

 		$building=DB::table("buildings")
 		->where('project_id',$request)
 		->get();
 		// dd($building);
 		// return $building;
 		$flat=Flat::where('building_id','=','2')
 		->get();
 		 // dd($flat);
 		// return redirect('addProject');
 		return view('addProject',compact('project','building','flat'));
 	}

 	public function getBuild(Request $request){
 		// dd($request->all());
 		$project=Project::all();
 		$building=DB::table("buildings")
 		->where('project_id',$request->get('id'))
 		->get();
 		// dd($building);
 		return $building;
 		// return view('addProject',['building' =>$building]);
 		// return view('addProject',compact('project','building'));
 	}

 	public function getflatType(Request $request)
 	{
 		$flat=DB::table("flats")
 		->where('building_id',$request->get('id'))
 		// ->where('building_id',$request->get('id'))
 		->get();
 		// dd($flat);
 		return $flat;	
 	}

 	public function getFlatNo(Request $request)
 	{	
 		$flatType=DB::table("flats")
 		->where('building_id',$request->get('id'))
 		->get();
 		// dd($flatType);
 		return $flatType;	
 	}

 	

 	 
 	public function store(Request $request){
 			// alert($request);
 			// dd($request);
 	    	$flatDetails= new Flat;
 	    	$flatDetails->Name=$request->input('Name');
 	    	$flatDetails->Email=$request->input('email');
 	    	$flatDetails->Mobile=$request->input('Mobile');
 	    	$flatDetails->Address=$request->input('Address');
 	    	$flatDetails->City=$request->input('City');
 	    	$flatDetails->State=$request->input('State');

 	    	$flatDetails->save();    
 	    }    

 	


}