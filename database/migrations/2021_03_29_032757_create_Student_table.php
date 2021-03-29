<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentTable extends Migration {

	public function up()
	{
		Schema::create('Student', function(Blueprint $table) {
			$table->integer('Users_id')->unsigned();
			$table->string('Mail', 50);
			$table->string('Password', 50);
			$table->string('Promotion', 30);
			$table->string('First_Name', 50);
			$table->string('Last_name', 50);
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