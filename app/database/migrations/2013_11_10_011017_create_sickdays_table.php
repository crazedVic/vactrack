<?php

use Illuminate\Database\Migrations\Migration;

class CreateSickdaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sick_days',function($table){
			$table->increments('id');
			//foreign key id fields should always be unsignedinteger
			$table->unsignedinteger('employee_id');
			$table->foreign('employee_id')->references('id')->on('employees');
			$table->unsignedinteger('calendar_year_id');
			$table->foreign('calendar_year_id')->references('id')->on('calendar_years');	
			$table->integer('month');
			$table->float('days');
			$table->string('description');
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
		Schema::dropIfExists('sick_days');
	}

}