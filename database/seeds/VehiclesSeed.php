<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Vehicle; // importing Vehicle difinition

use Faker\Factory as Faker; // import to use faker data creator and specify alias Faker

class VehiclesSeed extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create(); // creating an instance of faker

		for($i=0; $i<30; $i++){ // loop through 30 times to generate 5 random data (vehicles)

			Vehicle::create // instance of create 
			([

				//'id' =>,
				'color' =>$faker->safeColorName(), // calling method safeColorName 
				'power' =>$faker->randomNumber(), // calling method randomNumber
				'capacity'=>$faker->randomFloat(), // calling method randomFloat 
				'speed'=>$faker->randomFloat(), // calling method randomFloat
				'maker_id'=>$faker->numberBetween(1,5) // for  foreign key association with (makers) with the id between 1 and 5

			]);
		}	
	}
}
