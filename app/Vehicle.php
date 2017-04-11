<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

	protected $table = 'vehicles'; // creating a table called vehicles

	protected $primaryKey = 'serie'; // setting a primary key called serie

	protected $fillable = ['color', 'power', 'capacity','speed','maker_id'];// creating other table item but has not specified a serie as it will be set to auto increment in database, created_at and updated_at are timestamp in database but has not mentioned in fillable attributes.

	protected $hidden = ['serie', 'created_at', 'updated_at','maker_id']; // we want our primary key 'serie' to be hidden so as as created_at and updated_at


	// defining a public function at defines a relation of maker and vehicle. Vehicle belongs to Maker
	public function maker()
	{
		return $this -> belongsTo('App\Maker'); // Maker is stored inside App foler so defining the full scope.
	}

}
