<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('event_name');
			$table->text('description');
			$table->string('contact_id');
			$table->timedate('start_date');
			$table->timedate('end_date');
			$table->string('event_description');
			$table->string('event_logo_image_1');
			$table->string('event_logo_image_2');
			$table->string('facebook');
			$table->text('notes');
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
		Schema::drop('events');
	}

}
