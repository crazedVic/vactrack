<?php

use Illuminate\Database\Migrations\Migration;

class CreateCalenderyearsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//create Employee table
		Schema::create('calendar_years',function($table){
			$table->increments('id');
			$table->boolean('active')->default(1);
			$table->integer('year')->unique();
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
		Schema::dropIfExists('calendar_years');
	}

}