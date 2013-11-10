<?php

class EmployeesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('employees')->truncate();

		$employees = array(
            array(
            'name' => 'Edward Norton',
            'hiredate' => new DateTime('2012-05-26'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ),
            array(
            'name' => 'John Carter',
            'hiredate' => new DateTime('2011-03-12'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ),
            array(
            'name' => 'Sally Field',
            'hiredate' => new DateTime('2010-05-01'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ),
            array(
            'name' => 'Timothy Hutton',
            'hiredate' => new DateTime('2008-11-01'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ),
            array(
            'name' => 'Patricia Sykes',
            'hiredate' => new DateTime('2013-02-01'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            )
		);

		// Uncomment the below to run the seeder
		DB::table('employees')->insert($employees);
	}

}
