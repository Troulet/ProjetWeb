<?php

use Illuminate\Database\Seeder;
use \Users;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('Users')->delete();

		// Student
		Users::create(array(
				'Mail' => student@viacesi.fr,
				'Password' => student
			));

		// Pilot
		Users::create(array(
				'Mail' => pilot@viacesi.fr,
				'Password' => pilot
			));

		// Administrator
		Users::create(array(
				'Mail' => administrator@viacesi.fr,
				'Password' => administrator
			));
	}
}