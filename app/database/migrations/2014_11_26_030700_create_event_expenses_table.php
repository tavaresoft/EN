<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventExpensesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_expenses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('event_id');
			$table->string('type_id');//charity - band members - vendors - door money, etc.
			$table->string('amount');
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
		Schema::drop('event_expenses');
	}

}
