<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePicturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pictures', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('item_id');
			$table->string('image_1');
			$table->string('image_2');
			$table->string('image_3');
			$table->string('image_4');
			$table->string('image_5');
			$table->string('image_6');
			$table->string('image_7');
			$table->string('image_8');
			$table->string('image_9');
			$table->string('image_10');
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
		Schema::drop('pictures');
	}

}
