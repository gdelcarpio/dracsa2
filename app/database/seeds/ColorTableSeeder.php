<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Dracsa\Entities\Color;

class ColorTableSeeder extends Seeder {

	public function run()
	{

		Color::create([
				'name' => 'Único',
				'code' => '#FFFFFF'
			]);


		$faker = Faker::create('es_ES');

		foreach(range(1, 15) as $index)
		{
			Color::create([
				'name' => $faker->colorName,
				'code' => $faker->hexcolor
			]);
		}
	}

}