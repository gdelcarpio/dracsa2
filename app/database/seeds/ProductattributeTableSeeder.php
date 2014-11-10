<?php

use Dracsa\Entities\Productattribute;
use Faker\Factory as Faker;

class ProductattributeTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 15) as $index)
		{
			Productattribute::create([
				'attribute_id'	=> $faker->numberBetween(1,6),
				'product_id' 		=> $faker->numberBetween(1,5),
				'value' 				=> $faker->city
			]);
		}
	}
}