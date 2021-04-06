<?php

use Illuminate\Database\Seeder;
use \Pilot;

class PilotTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('Pilot')->delete();

		// Pilot Profile
		Pilot::create(array(
				'Users_id' => 2,
				'Promotion' => 'A2 Informatique',	
				'Localisation_id' => 1
			));
	}
}
