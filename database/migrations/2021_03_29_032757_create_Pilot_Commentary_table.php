<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePilotCommentaryTable extends Migration {

	public function up()
	{
		Schema::create('Pilot_Commentary', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('Internship_Difficulty');
			$table->integer('Level_Of_Knowledge');
			$table->integer('Work_Environment');
			$table->string('Commentary', 300);
			$table->integer('Pilot_id')->unsigned();
			$table->integer('Enterprise_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Pilot_Commentary');
	}
}