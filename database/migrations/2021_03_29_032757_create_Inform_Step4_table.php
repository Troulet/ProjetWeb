<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformStep4Table extends Migration {

	public function up()
	{
		Schema::create('Inform_Step4', function(Blueprint $table) {
			$table->integer('Administrator_id')->unsigned();
			$table->integer('Pilot_id')->unsigned();
			$table->binary('Validation_Sheet');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Inform_Step4');
	}
}