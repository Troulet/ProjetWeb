<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformStep6Table extends Migration {

	public function up()
	{
		Schema::create('Inform_Step6', function(Blueprint $table) {
			$table->integer('Administrator_id')->unsigned();
			$table->integer('Pilot_id')->unsigned();
			$table->integer('Student_id')->unsigned();
			$table->binary('Internship_Contract');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Inform_Step6');
	}
}