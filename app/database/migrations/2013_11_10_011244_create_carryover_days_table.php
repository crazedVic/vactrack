<?php

use Illuminate\Database\Migrations\Migration;

class CreateCarryoverDaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carryover_days',function($table){
			$table->increments('id');
			//foreign key id fields should always be unsignedinteger
			$table->integer('employee_id')->unsigned();
			$table->foreign('employee_id')->references('id')->on('employees');
			$table->integer('calendar_year_id')->unsigned();
			$table->foreign('calendar_year_id')->references('id')->on('calendar_years');	
			$table->float('days');
			$table->string('description')->default('');
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
		Schema::dropIfExists('carryover_days');
	}

}