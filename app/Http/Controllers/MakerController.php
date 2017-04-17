<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Maker; // using the Maker definition
use App\Http\Requests\CreateMakerRequest; // using the CreateMakerRequest Definition
use App\Vehicle;

class MakerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() // does not take parameter or values as it will show all the data inside makers
	{
		$makers = Maker::all(); // fetching all the value from the database (*)
		return response()->json(['data' => $makers], 200); // returning the response in json format with status 200 code
		//
	}

	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateMakerRequest $request) // stroe method takes the CreateMakerRequest value or Request
	{
		$values = $request->only(['name','phone']); // verify the values we receive is only name and phone in an array
		
		Maker::create($values); // creating an instance of Maker, create will receive the values
		return response()->json(['message'=>'Maker Correctly added'], 200); //message in json to notify the data was inserted correctly

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) // show method takes parameter $id to find the data
	{
		$maker = Maker::find($id); // fetching the data that matches the $id and store the values in the variable $maker
		if(!$maker) // id didn't find the $maker return following
		{
			return response()->json(['message'=>'This maker does not exist', 'code' => 404], 404); // error message in json format with code 404 error
		}
		return response()->json(['data' => $maker], 200); // if the data matches return the data in json format with code 200
		//
	}

	

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreateMakerRequest $request, $id)
	{
		$maker = Maker::find($id);
		if(!$maker) // id didn't find the $maker return following
		{
			return response()->json(['message'=>'This maker does not exist', 'code' => 404], 404); // error message in json format with code 404 error
		}
		$name = $request->get('name');
		$phone = $request->get('phone');

		$maker->name = $name;
		$maker->phone = $phone;

		$maker->save();
		return response()->json(['message' => 'The Maker has been updated'], 200); // if the data matches return the data in json format with code 200

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
		$maker = Maker::find($id);
		if(!$maker) // id didn't find the $maker return following
		{
			return response()->json(['message'=>'This maker does not exist', 'code' => 404], 404); // error message in json format with code 404 error
		}

		$vehicles = $maker->vehicles;
		if(sizeof($vehicles) > 0)
		{
			return response()->json(['message'=>'This maker has associated vehicles. Delete the vehicles first.', 'code' => 409], 409);
		}

		$maker->delete();
		return response()->json(['message'=>'This maker has been deleted'], 200);

	}

}
