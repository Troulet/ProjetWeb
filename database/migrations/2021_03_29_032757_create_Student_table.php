<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentTable extends Migration {

	public function up()
	{
		Schema::create('Student', function(Blueprint $table) {
			$table->integer('Users_id')->unsigned();
			$table->string('Promotion', 30);
			$table->boolean('Representative');
			$table->string('Representative_Rights', 300);
			$table->integer('Localisation_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Student');
	}
}
