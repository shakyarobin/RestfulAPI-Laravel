<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateVehicleRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true; // need to be true else will have forbidden error
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() // rules as required
	{
		return 
		[
		'color' => 'required',
		'power' => 'required',
		'capacity' => 'required',
		'speed' => 'required',
			//
		];
	}
	public function response(array $errors) // response method, if the validation is failed we have to return http response, something went worng
	{
		return response()->json(['message'=>$errors, 'code' =>422], 422); // in json format
	}

}
