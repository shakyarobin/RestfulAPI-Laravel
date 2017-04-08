<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VehiclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicles', function(Blueprint $table)
		{
			$table->increments('serie'); // serie is primary key for the table
			$table->string('color'); // added attributes from color to makers_id with associated types
			$table->integer('power');
			$table->float('capacity');
			$table->float('speed');
			$table->integer('maker_id')->unsigned(); // it need to be unsigned first
			$table->foreign('maker_id')->references('id')->on('makers'); // defining a foregin key to id in makers (referencing)
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vehicles');
	}

}
