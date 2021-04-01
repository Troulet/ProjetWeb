<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePilotTable extends Migration {

	public function up()
	{
		Schema::create('Pilot', function(Blueprint $table) {
			$table->integer('Users_id')->unsigned();
			$table->string('Promotion', 30);
			$table->integer('Localisation_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Pilot');
	}
}
