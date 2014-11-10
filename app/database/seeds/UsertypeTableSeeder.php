<?php

use Dracsa\Entities\Usertype;
use Faker\Factory as Faker;

class UsertypeTableSeeder extends Seeder {

	public function run()
	{
		Usertype::create([
			'name' 				=> 'admin',
			'description' => 'Administrador de la web'
		]);

		Usertype::create([
			'name' 				=> 'customer',
			'description' => 'Cliente del negocio'
		]);
	}
}