<?php

use Illuminate\Database\Seeder;
use \Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('Users')->delete();

		// Student
		Users::create(array(
				'email' => 'student@viacesi.fr',
				'password' => Hash::make('student'),
                'First_Name' => 'Tristan',
				'Last_name' => 'Roulet'
			));

		// Pilot
		Users::create(array(
				'email' => 'pilot@viacesi.fr',
				'password' => Hash::make('pilot'),
                'First_Name' => 'Manu',
				'Last_name' => 'Iacobellis'
			));

		// Administrator
		Users::create(array(
				'email' => 'administrator@viacesi.fr',
				'password' => Hash::make('administrator'),
                'First_Name' => 'Jean-Aymeric',
				'Last_name' => 'Diet'
			));
	}
}
