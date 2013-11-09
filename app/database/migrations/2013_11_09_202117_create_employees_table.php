<?php

use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//create Employee table
		Schema::create('employees',function($table){
			$table->increments('id');
			$table->string('name')->unique();
			$table->date('hiredate');
			$table->date('terminationdate');
			$table->integer('probationMonths');
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
		Schema::dropIfExists('employees');
	}

}