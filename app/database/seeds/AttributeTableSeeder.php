<?php

use Dracsa\Entities\Attribute;

class AttributeTableSeeder extends Seeder {

	public function run()
	{
		Attribute::create([
			'name' 				=> 'Tipo',
			'description' => 'Tipo de Reloj'
		]);

		Attribute::create([
			'name' 				=> 'Sexo',
			'description' => 'Tipo de Producto'
		]);

		Attribute::create([
			'name' 				=> 'Material',
			'description' => 'Material del producto'
		]);
		
		Attribute::create([
			'name' 				=> 'Cristal',
			'description' => 'Tipo de cristal del Reloj'
		]);

		Attribute::create([
			'name' 				=> 'Movimiento',
			'description' => 'Movimiento del Reloj'
		]);
		
		Attribute::create([
			'name' 				=> 'Resistencia',
			'description' => 'Resistencia del Reloj ATM'
		]);
	}
}