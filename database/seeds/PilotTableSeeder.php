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
				'Mail' => pilot@viacesi.fr,
				'Password' => pilot,
				'Promotion' => A2Informatique,
				'First_Name' => Manu,
				'Last_name' => Iacobellis,
				'Localisation_id' => 1
			));
	}
}