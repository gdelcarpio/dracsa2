<?php

use Dracsa\Entities\District;
use Faker\Factory as Faker;

class DistrictTableSeeder extends Seeder {

	public function run()
	{
		District::create([
			'name'					=> 'La Molina',
			'code' 					=> '14',
			'province_id' => '1'
		]);

		District::create([
			'name'					=> 'Ate',
			'code' 					=> '15',
			'province_id' => '1'
		]);

		District::create([
			'name'					=> 'Lince',
			'code' 					=> '13',
			'province_id' => '1'
		]);

		District::create([
			'name'					=> 'La Victoria',
			'code' 					=> '16',
			'province_id' => '1'
		]);

		District::create([
			'name'					=> 'San Isidro',
			'code' 					=> '20',
			'province_id' => '1'
		]);
	}
}