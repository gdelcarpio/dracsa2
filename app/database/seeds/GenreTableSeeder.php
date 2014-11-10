<?php

use Faker\Factory as Faker;
use Dracsa\Entities\Genre;

class GenreTableSeeder extends Seeder {

	public function run()
	{
		Genre::create([
			'name' => 'Unisex'
		]);

		Genre::create([
			'name' => 'Hombre'
		]);
		
		Genre::create([
			'name' => 'Mujer'
		]);
	}

}