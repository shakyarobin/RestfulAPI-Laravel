<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Vehicle; // using the definiton vehicle

class VehicleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() // we only have the index method for vehicles and do not take any parameter. it will display all the values from inside vehicle table.
	{
		$vehicles = Vehicle::all(); // fetching all the data. all()=>*.
		return response()->json(['data' => $vehicles], 200); // returning the values from the database in json format with code 200
		//
	}

	

}
