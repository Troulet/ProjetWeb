<?php

use Illuminate\Database\Seeder;
use \Student;

class StudentTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('Student')->delete();

		// Student Profile
		Student::create(array(
				'Users_id' => 1,
				'Mail' => student@viacesi.fr,
				'Password' => student,
				'Promotion' => A2Informatique,
				'First_Name' => Tristan,
				'Last_name' => Roulet,
				'Localisation_id' => 1
			));
	}
}