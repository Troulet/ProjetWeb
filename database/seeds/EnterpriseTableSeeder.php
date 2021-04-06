<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;
use \Enterprise;

class EnterpriseTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('Enterprise')->delete();

		// Thalès
		Enterprise::create(array(
				'Enterprise_Name' => 'Thales',
				'Activity_Sector' => 'Informatique',
				'Localisation_id' => 1
			));
	}
}
