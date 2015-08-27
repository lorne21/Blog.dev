<?php

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$this->createNewUser();
		$this->createFakerUser();
	}

	protected function createNewUser()
	{
		$user = new User();
		$user->first_name = $_ENV['USER_FIRST_NAME'];
		$user->last_name = $_ENV['USER_LAST_NAME'];
		$user->email = $_ENV['USER_EMAIL'];
		$user->password = $_ENV['USER_PASS'];
		$user->save(); 
	}

	protected function createFakerUser()
	{

		$faker = Faker::create();
        for($i=1; $i<=9; $i++)
        {
            $user = new User();
            $user->first_name = $faker->firstName;
			$user->last_name = $faker->lastName;
			$user->email = $faker->email;
			$user->password = $faker->password;
			$user->save();
        }

	}

}