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
				'Mail' => administrator@viacesi.fr,
				'Password' => administrator,
				'First_Name' => Jean-Aymeric,
				'Last_name' => Diet,
				'Localisation_id' => 1
			));
	}
}