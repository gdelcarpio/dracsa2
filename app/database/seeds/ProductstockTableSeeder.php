<?php

use Dracsa\Entities\Productstock;
use Faker\Factory as Faker;

class ProductstockTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			Productstock::create([
				'price' => $faker->numberBetween(200,500),
				'stock' => $faker->randomDigit,
				'sku'   => $faker->unixTime,
				'visible' => $faker->randomElement([1, 0]),
				'offering_price' => $faker->numberBetween(20,300),
				'starting_offer' => $faker->dateTime,
				'ending_offer' => $faker->dateTime,
				'product_id' => $faker->numberBetween(1,5),
				'color_id' =>$faker->numberBetween(1,15),
				'size_id' =>$faker->numberBetween(1,5)

			]);
		}
	}

}