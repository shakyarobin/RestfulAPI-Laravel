<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('makers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name'); // added attributes name as string before migrate
			$table->integer('phone'); // added attributes phone as integer before migrate
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
		Schema::drop('makers');
	}

}
