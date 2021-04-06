<?php

use Illuminate\Database\Seeder;
use \Localisation;

class LocalisationTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('Localisation')->delete();

		// Bordeaux
		Localisation::create(array(
				'Localisation' => 'Bordeaux'
			));
	}
}
