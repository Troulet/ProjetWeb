<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Internship', function(Blueprint $table) {
			$table->foreign('id_Enterprise')->references('id')->on('Enterprise')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Internship', function(Blueprint $table) {
			$table->foreign('id_Localisation')->references('id')->on('Localisation')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Student', function(Blueprint $table) {
			$table->foreign('id')->references('id')->on('Internship')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Student', function(Blueprint $table) {
			$table->foreign('id_Localisation')->references('id')->on('Localisation')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Pilot', function(Blueprint $table) {
			$table->foreign('id')->references('id')->on('Users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Pilot', function(Blueprint $table) {
			$table->foreign('id_Localisation')->references('id')->on('Localisation')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Administrator', function(Blueprint $table) {
			$table->foreign('id')->references('id')->on('Users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Administrator', function(Blueprint $table) {
			$table->foreign('id_Localisation')->references('id')->on('Localisation')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Student_Commentary', function(Blueprint $table) {
			$table->foreign('id_Student')->references('id')->on('Student')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Student_Commentary', function(Blueprint $table) {
			$table->foreign('id_Enterprise')->references('id')->on('Enterprise')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Pilot_Commentary', function(Blueprint $table) {
			$table->foreign('id_Pilot')->references('id')->on('Pilot')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Pilot_Commentary', function(Blueprint $table) {
			$table->foreign('id_Enterprise')->references('id')->on('Enterprise')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Postulate', function(Blueprint $table) {
			$table->foreign('id_Internship')->references('id')->on('Internship')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Postulate', function(Blueprint $table) {
			$table->foreign('id_Student')->references('id')->on('Student')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Inform_Step3', function(Blueprint $table) {
			$table->foreign('id_Pilot')->references('id')->on('Pilot')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Inform_Step3', function(Blueprint $table) {
			$table->foreign('id_Student')->references('id')->on('Student')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Inform_Step4', function(Blueprint $table) {
			$table->foreign('id_Administrator')->references('id')->on('Administrator')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Inform_Step4', function(Blueprint $table) {
			$table->foreign('id_Pilot')->references('id')->on('Pilot')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Inform_Step5', function(Blueprint $table) {
			$table->foreign('id_Administrator')->references('id')->on('Administrator')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Inform_Step6', function(Blueprint $table) {
			$table->foreign('id_Administrator')->references('id')->on('Administrator')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('Internship', function(Blueprint $table) {
			$table->dropForeign('Internship_id_Enterprise_foreign');
		});
		Schema::table('Internship', function(Blueprint $table) {
			$table->dropForeign('Internship_id_Localisation_foreign');
		});
		Schema::table('Student', function(Blueprint $table) {
			$table->dropForeign('Student_id_foreign');
		});
		Schema::table('Student', function(Blueprint $table) {
			$table->dropForeign('Student_id_Localisation_foreign');
		});
		Schema::table('Pilot', function(Blueprint $table) {
			$table->dropForeign('Pilot_id_foreign');
		});
		Schema::table('Pilot', function(Blueprint $table) {
			$table->dropForeign('Pilot_id_Localisation_foreign');
		});
		Schema::table('Administrator', function(Blueprint $table) {
			$table->dropForeign('Administrator_id_foreign');
		});
		Schema::table('Administrator', function(Blueprint $table) {
			$table->dropForeign('Administrator_id_Localisation_foreign');
		});
		Schema::table('Student_Commentary', function(Blueprint $table) {
			$table->dropForeign('Student_Commentary_id_Student_foreign');
		});
		Schema::table('Student_Commentary', function(Blueprint $table) {
			$table->dropForeign('Student_Commentary_id_Enterprise_foreign');
		});
		Schema::table('Pilot_Commentary', function(Blueprint $table) {
			$table->dropForeign('Pilot_Commentary_id_Pilot_foreign');
		});
		Schema::table('Pilot_Commentary', function(Blueprint $table) {
			$table->dropForeign('Pilot_Commentary_id_Enterprise_foreign');
		});
		Schema::table('Postulate', function(Blueprint $table) {
			$table->dropForeign('Postulate_id_Internship_foreign');
		});
		Schema::table('Postulate', function(Blueprint $table) {
			$table->dropForeign('Postulate_id_Student_foreign');
		});
		Schema::table('Inform_Step3', function(Blueprint $table) {
			$table->dropForeign('Inform_Step3_id_Pilot_foreign');
		});
		Schema::table('Inform_Step3', function(Blueprint $table) {
			$table->dropForeign('Inform_Step3_id_Student_foreign');
		});
		Schema::table('Inform_Step4', function(Blueprint $table) {
			$table->dropForeign('Inform_Step4_id_Administrator_foreign');
		});
		Schema::table('Inform_Step4', function(Blueprint $table) {
			$table->dropForeign('Inform_Step4_id_Pilot_foreign');
		});
		Schema::table('Inform_Step5', function(Blueprint $table) {
			$table->dropForeign('Inform_Step5_id_Administrator_foreign');
		});
		Schema::table('Inform_Step6', function(Blueprint $table) {
			$table->dropForeign('Inform_Step6_id_Administrator_foreign');
		});
	}
}