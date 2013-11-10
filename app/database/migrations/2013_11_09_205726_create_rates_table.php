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
			//foreign key id fields should always be unsigned integer
			$table->integer('employee_id')->unsigned();
			$table->foreign('employee_id')->references('id')->on('employees');	
			$table->date('startdate');
			$table->date('enddate')->nullable();
			$table->float('DaysPerAnnum')->default(10);
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