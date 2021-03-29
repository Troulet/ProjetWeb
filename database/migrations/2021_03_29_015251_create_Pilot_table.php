<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePilotTable extends Migration {

	public function up()
	{
		Schema::create('Pilot', function(Blueprint $table) {
			$table->integer('id')->unsigned();
			$table->string('Mail', 50);
			$table->string('Password', 50);
			$table->string('Promotion', 30);
			$table->string('First_Name', 50);
			$table->string('Last_name', 50);
			$table->integer('id_Localisation')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Pilot');
	}
}