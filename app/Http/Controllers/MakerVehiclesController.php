<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Maker; //using the definiton Maker
use App\Vehicle; //using the definiton Vehicle

class MakerVehiclesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id) //this method take $id parameter to find the maker
	{
		$maker = Maker::find($id); // fetching the data that matches $id and store in variable $maker
		if(!$maker) // if not found return folowing error message.
		{
			return response()->json(['message'=>'This maker does not exist', 'code' => 404], 404);// error message in json format with code 404
		}
		return response()->json(['data' => $maker->vehicles], 200); // returns all the vehicles that belong to makers $id in json format with code 200. $maker->vehicles = vehicles belong to makers. please check the route:list makers/{makers}/vehicles.
		//
	}

	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id,$vehicleId) // takes the parameter $id as maker and $vehicleId as Vehicle to find the data
	{
		$maker = Maker::find($id); // first check if the maker exist
		if(!$maker) // if not return followin error message in json format with code 404
		{
			return response()->json(['message'=>'This maker does not exist', 'code' => 404], 404);// error message in json
		}
		$vehicle = $maker->vehicles->find($vehicleId); // if found maker then takes the second paramether $vehicleId and returns if Vehicle exist or not 
		if(!$vehicle) // if not retrun following error
		{
			return response()->json(['message'=>'This vehicle does not exist for this maker', 'code' => 404], 404);// error message in jaon with code 404
		}
		return response()->json(['data' => $vehicle], 200); // if found returns vehicle of that maker
		//return response()->json(['data' => $maker->vehicles->find($vehicleId)], 200);
		//
	}

	

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
