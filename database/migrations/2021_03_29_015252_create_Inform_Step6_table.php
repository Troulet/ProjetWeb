<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformStep6Table extends Migration {

	public function up()
	{
		Schema::create('Inform_Step6', function(Blueprint $table) {
			$table->integer('id_Administrator')->unsigned();
			$table->integer('id_Pilot')->unsigned();
			$table->integer('id_Student')->unsigned();
			$table->binary('Internship_Contract');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Inform_Step6');
	}
}