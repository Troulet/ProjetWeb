<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInternshipTable extends Migration {

	public function up()
	{
		Schema::create('Internship', function(Blueprint $table) {
			$table->increments('id', true);
			$table->string('Description', 300);
			$table->string('Skills_researched', 300);
			$table->string('Promotion_researched', 30);
			$table->string('Internship_Duration');
			$table->decimal('Salary', 15,3);
			$table->date('Offer_Date');
			$table->integer('Number_Of_Places');
			$table->string('Contact', 50);
			$table->integer('Enterprise_id')->unsigned();
			$table->integer('Localisation_id')->unsigned();
            $table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Internship');
	}
}
