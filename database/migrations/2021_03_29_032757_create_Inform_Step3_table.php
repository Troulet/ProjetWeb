<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformStep3Table extends Migration {

	public function up()
	{
		Schema::create('Inform_Step3', function(Blueprint $table) {
			$table->integer('Pilot_id')->unsigned();
			$table->integer('Student_id')->unsigned();
			$table->binary('Validation_Sheet');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Inform_Step3');
	}
}