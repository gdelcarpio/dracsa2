<?php

use Dracsa\Entities\Product;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_ES');


			Product::create([
				'name' => 'JAPONES MIYOTA QUARTZ',
				'description' => $faker->text,
				'guarantee' => $faker->numberBetween(1,24),
				'brand_id' => $faker->randomElement([1, 2, 3, 4, 5]),
				'genre_id' => $faker->randomElement([1, 2, 3])
			]);

			Product::create([
				'name' => 'RELOJ FESTINA',
				'description' => $faker->text,
				'guarantee' => $faker->numberBetween(1,24),
				'brand_id' => $faker->randomElement([1, 2, 3, 4, 5]),
				'genre_id' => $faker->randomElement([1, 2, 3])
			]);

			Product::create([
				'name' => 'RELOJ FESTINO A1',
				'description' => $faker->text,
				'guarantee' => $faker->numberBetween(1,24),
				'brand_id' => $faker->randomElement([1, 2, 3, 4, 5]),
				'genre_id' => $faker->randomElement([1, 2, 3])
			]);

			Product::create([
				'name' => 'SWISS MADE QUARTZ',
				'description' => $faker->text,
				'guarantee' => $faker->numberBetween(1,24),
				'brand_id' => $faker->randomElement([1, 2, 3, 4, 5]),
				'genre_id' => $faker->randomElement([1, 2, 3])
			]);

			Product::create([
				'name' => 'JAPAN MODE QUARTZ',
				'description' => $faker->text,
				'guarantee' => $faker->numberBetween(1,24),
				'brand_id' => $faker->randomElement([1, 2, 3, 4, 5]),
				'genre_id' => $faker->randomElement([1, 2, 3])
			]);
	}
}