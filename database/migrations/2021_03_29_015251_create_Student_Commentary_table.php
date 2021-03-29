<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentCommentaryTable extends Migration {

	public function up()
	{
		Schema::create('Student_Commentary', function(Blueprint $table) {
			$table->increments('id', true);
			$table->integer('Internship_Difficulty');
			$table->integer('Level_Of_Knowledge');
			$table->integer('Work_Environment');
			$table->integer('Tutor_Lead');
			$table->integer('Infrastructure');
			$table->integer('Accessibility');
			$table->string('Commentary', 300);
			$table->integer('id_Student')->unsigned();
			$table->integer('id_Enterprise')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Student_Commentary');
	}
}