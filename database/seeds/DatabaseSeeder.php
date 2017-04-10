<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Maker; //import maker defiination since we are using maker

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // tell database to ignore primary key and foreigh key definition as it will through error if try to delete these from the table.
		Maker::truncate(); // truncate all the data. everytime we run the seed the existing data will be delete and insert a new data instead of adding and access the data.

		Model::unguard();

		// $this->call('UserTableSeeder'); 
		 $this->call('MakerSeed'); // this is the seed we will run
		 $this->call('VehiclesSeed'); // this is the seed we will run
	}

}
