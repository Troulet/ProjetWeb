<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('EnterpriseTableSeeder');
		$this->command->info('Enterprise table seeded!');

		$this->call('LocalisationTableSeeder');
		$this->command->info('Localisation table seeded!');

		$this->call('InternshipTableSeeder');
		$this->command->info('Internship table seeded!');

		$this->call('UsersTableSeeder');
		$this->command->info('Users table seeded!');

		$this->call('StudentTableSeeder');
		$this->command->info('Student table seeded!');

		$this->call('PilotTableSeeder');
		$this->command->info('Pilot table seeded!');

		$this->call('AdministratorTableSeeder');
		$this->command->info('Administrator table seeded!');
	}
}