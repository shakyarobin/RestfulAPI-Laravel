<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateMakerRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() //rules of fillable
	{
		return 
		[
		'name' => 'required', // name is required
		'phone' => 'required' // phone isrequired
			//
		];
	}
	//once we have the rules we have to redefine the response
	public function response(array $errors) // response method, if the validation is failed we have to return http response, something went worng
	{
		return response()->json(['message'=>'you should specify the name and the phone for the new maker', 'code' =>422], 422); // in json format
	}

}
