<?php

use Dracsa\Entities\Province;
use Faker\Factory as Faker;

class ProvinceTableSeeder extends Seeder {

	public function run()
	{
			Province::create([
				'name'					=> 'Lima',
				'code' 					=> '01',
				'department_id' => '1'
			]);
	}

}