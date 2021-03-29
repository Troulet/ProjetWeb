<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalisationTable extends Migration {

	public function up()
	{
		Schema::create('Localisation', function(Blueprint $table) {
			$table->increments('id', true);
			$table->string('Localisation', 50);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Localisation');
	}
}