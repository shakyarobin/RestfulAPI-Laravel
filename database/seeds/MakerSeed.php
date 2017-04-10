<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Maker; // importing maker difiniton

use Faker\Factory as Faker; // import to use faker data creator and specify alias Faker

class MakerSeed extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create(); // creating an instance of faker

		for($i=0; $i<6; $i++){ // loop through 5 times to generate 5 random data (maker)

			Maker::create // instance of create
			([ // an array

				//'id' =>,
				'name' => $faker->word(), // generate random word for name. word is a method.
				'phone' =>$faker->randomDigit(5) // generate random number for phone no.

			]);
		}	
	}
}
