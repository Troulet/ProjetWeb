<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnterpriseTable extends Migration {

	public function up()
	{
		Schema::create('Enterprise', function(Blueprint $table) {
			$table->increments('id', true);
			$table->string('Enterprise_Name', 50);
			$table->string('Activity_Sector', 50);
			$table->integer('Cesi_Student_Taken');
			$table->integer('Localisation_id')->unsigned();
            $table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Enterprise');
	}
}
