<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostulateTable extends Migration {

	public function up()
	{
		Schema::create('Postulate', function(Blueprint $table) {
			$table->integer('id_Internship')->unsigned();
			$table->integer('id_Student')->unsigned();
			$table->timestamps();
			$table->binary('Curiculum_Vitae');
			$table->binary('Motivation_Letter');
			$table->integer('Response_State');
			$table->date('Application_Date');
			$table->string('Mail_Content', 300);
		});
	}

	public function down()
	{
		Schema::drop('Postulate');
	}
}