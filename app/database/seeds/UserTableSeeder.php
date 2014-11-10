<?php

use Dracsa\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_ES');

		foreach(range(1, 50) as $index)
		{
			User::create([
				'name' => $faker->firstName,
				'lastname' => $faker->lastName,
				'email'   => $faker->email,
				'password' => '123456',
				'address' => $faker->address,
				'birth' => $faker->date,
				'usertype_id' => '2',
				'available' => $faker->numberBetween(0,1),
				'phone' => $faker->phoneNumber,
				'dni' => $faker->randomNumber($nbDigits = 8),
				'department_id' =>'1',
				'province_id' =>'1',
				'district_id' =>$faker->numberBetween(1,5)
			]);
		}
	}

}