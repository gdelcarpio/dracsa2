<?php
use Dracsa\Entities\Brand;

class BrandTableSeeder extends Seeder {

	public function run()
	{

			Brand::create([
				'name' => 'Bulova'
			]);

			Brand::create([
				'name' => 'Caravelle'
			]);

			Brand::create([
				'name' => 'Festina'
			]);

			Brand::create([
				'name' => 'Guess'
			]);

			Brand::create([
				'name' => 'Mulco'
			]);
	}

}