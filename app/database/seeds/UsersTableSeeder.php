<?php 

/**
* 
*/
class UsersTableSeeder extends Seeder{
	public function run(){

		$faker = Faker\Factory::create();


		foreach(range(1,30) as $index)
		{
			User::create([
				'username' => $faker->word . rand(0, 1000),
				'nombre'  => $faker->word,
				'apellido_p' => $faker->word,
				'apellido_m' => $faker->word,
				'email' => $faker->email,
				'password' => $faker->word,
				'activo' => $faker->randomDigitNotNull,
				'admin' => $faker->randomDigitNotNull
				]);
		}

	}
}