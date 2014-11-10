<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('ColorTableSeeder');
		$this->call('BrandTableSeeder');
		$this->call('GenreTableSeeder');
		$this->call('AttributeTableSeeder');
		$this->call('SizeTableSeeder');
		$this->call('UsertypeTableSeeder');
		$this->call('DepartmentTableSeeder');
		$this->call('ProvinceTableSeeder');
		$this->call('DistrictTableSeeder');
		$this->call('ProductTableSeeder');
		$this->call('ProductattributeTableSeeder');
		$this->call('ProductstockTableSeeder');
		$this->call('UserTableSeeder');
	}

}
