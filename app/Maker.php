<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{

	protected $table = 'makers'; // Creating a table called makers

	protected $primaryKey = 'id'; // defining a primary key

	protected $fillable = ['name', 'phone']; // fillable attribute name and phone. id is not specified as it will be set to auto increment in database also updated_at and Created_at is a timestamp at the database

	protected $hidden = ['id', 'updated_at','created_at']; // hiding the attributes


	// creating a public function that defines a relation between vehicles and maker. Maker hasMany Vehicles.
	public function vehicles()
	{
		return $this -> hasMany('App\Vehicle');
	}

}
