<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdministratorTable extends Migration {

	public function up()
	{
		Schema::create('Administrator', function(Blueprint $table) {
			$table->integer('Users_id')->unsigned();
			$table->integer('Localisation_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Administrator');
	}
}
