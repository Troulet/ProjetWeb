<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformStep3Table extends Migration {

	public function up()
	{
		Schema::create('Inform_Step3', function(Blueprint $table) {
			$table->integer('id_Pilot')->unsigned();
			$table->integer('id_Student')->unsigned();
			$table->binary('Validation_Sheet');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Inform_Step3');
	}
}