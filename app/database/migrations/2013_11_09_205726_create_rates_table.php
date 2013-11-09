<?php

use Illuminate\Database\Migrations\Migration;

class CreateRatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rates',function($table){
			$table->increments('id');
			//foreign key id fields should always be unsignedinteger
			$table->unsignedinteger('employee_id');
			$table->foreign('employee_id')->references('id')->on('employees');	
			$table->date('startdate');
			$table->date('enddate');
			$table->float('DaysPerAnnum');
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
		Schema::dropIfExists('rates');
	}

}