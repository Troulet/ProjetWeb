<?php

use Illuminate\Database\Seeder;
use \Administrator;

class AdministratorTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('Administrator')->delete();

		// Administrator Profile
		Administrator::create(array(
				'Users_id' => 3,	
				'Localisation_id' => 1
			));
	}
}
