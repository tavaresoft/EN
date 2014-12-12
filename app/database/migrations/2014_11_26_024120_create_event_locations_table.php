<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_locations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('contact_id');
			$table->string('email');
			$table->string('phone');
			$table->string('fax');
			$table->string('street_1');
			$table->string('street_2');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
			$table->string('website');
			$table->string('facebook');
			$table->string('twitter');
			$table->string('instagram');
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
		Schema::drop('event_locations');
	}

}
