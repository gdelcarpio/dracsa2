<?php

use Dracsa\Entities\Size;
use Faker\Factory as Faker;

class SizeTableSeeder extends Seeder {

	public function run()
	{
		Size::create([
			'name' => 'Única'
		]);

		Size::create([
			'name' => 'S'
		]);
		
		Size::create([
			'name' => 'M'
		]);

		Size::create([
			'name' => 'L'
		]);
		
		Size::create([
			'name' => 'XL'
		]);
	}
}