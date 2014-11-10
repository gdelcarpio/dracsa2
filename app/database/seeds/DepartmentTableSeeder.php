<?php

use Dracsa\Entities\Department;
use Faker\Factory as Faker;

class DepartmentTableSeeder extends Seeder {

	public function run()
	{
		Department::create([
			'name' => 'Lima',
			'code' => '01'
		]);
	}

}