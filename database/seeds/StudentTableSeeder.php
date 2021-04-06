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
				'Promotion' => 'A2 Informatique',
				'Localisation_id' => 1
			));
	}
}
