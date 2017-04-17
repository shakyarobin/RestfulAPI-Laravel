<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Maker; //using the definiton Maker
use App\Vehicle; //using the definiton Vehicle
use App\Http\Requests\CreateVehicleRequest; // using the definition


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
	public function store(CreateMakerRequest $request, $makerId) // takes the parameter $request and $makerId
	{
		$maker = Maker::find($makerId); // check if the $makerId exist in given instance
		if(!$maker) // if not return followin error message in json format with code 404
		{
			return response()->json(['message'=>'This maker does not exist', 'code' => 404], 404);// error message in json
		}

		$values = $request->all(); // fetch all the request values
		$maker->vehicles()->create($values); // maker is obtaining the vehicles relations and call create method sending the $values. store all the values received from request and store within the relation of makersId.

		return response()->json(['message' => 'the vehicle associated was created'], 201); // message success in json format


		//Vehicle::create($values);	 we cannot do this 
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
	public function update(CreateVehicleRequest $request, $makerId, $vehicleId)
	{
		$maker = Maker::find($makerId);
		if(!$maker) // id didn't find the $maker return following
		{
			return response()->json(['message'=>'This maker does not exist', 'code' => 404], 404); // error message in json format with code 404 error
		}
		$vehicle = $maker->vehicles->find($vehicleId);
		if(!$vehicle) // id didn't find the $vehicle return following
		{
			return response()->json(['message'=>'This vehicle does not exist', 'code' => 404], 404); // error message in json format with code 404 error
		}
		$color = $request->get('color');
		$power = $request->get('power');
		$capacity = $request->get('capacity');
		$speed = $request->get('speed');

		$vehicle->color = $color;
		$vehicle->power = $power;
		$vehicle->capacity = $capacity;
		$vehicle->speed = $speed;

		$vehicle->save();
		return response()->json(['message' => 'The Vehicle has been updated'], 200); // if the data matches return the data in json format with code 200

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
