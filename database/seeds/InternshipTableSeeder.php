<?php

use Illuminate\Database\Seeder;
use \Internship;

class InternshipTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('Internship')->delete();

		// Internship Thales
		Internship::create(array(
				'Description' => 'Stage chez Thales au post de sous-fifre du dieu JAD',
				'Skills_researched' => 'Savoir coder en C++',
				'Promotion_researched' => 'A2 Informatique',
				'Internship_Duration' => '4mois',
				'Salary' => 500,
				'Offer_Date' => 2021/01/04,
				'Number_Of_Places' => 2,
				'Contact' => 'contact@thales.fr',
				'Enterprise_id' => 1,
				'Localisation_id' => 1
			));
	}
}
