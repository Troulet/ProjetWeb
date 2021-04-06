<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostulateTable extends Migration {

	public function up()
	{
		Schema::create('Postulate', function(Blueprint $table) {
			$table->integer('Internship_id')->unsigned();
			$table->integer('Student_id')->unsigned();
			$table->timestamps();
			$table->binary('Curiculum_Vitae');
			$table->binary('Motivation_Letter');
			$table->integer('Response_State');
			$table->string('Mail_Content', 300);
		});
	}

	public function down()
	{
		Schema::drop('Postulate');
	}
}
