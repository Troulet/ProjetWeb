<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Internship', function(Blueprint $table) {
			$table->foreign('Enterprise_id')->references('id')->on('Enterprise')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Internship', function(Blueprint $table) {
			$table->foreign('Localisation_id')->references('id')->on('Localisation')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Student', function(Blueprint $table) {
			$table->foreign('Users_id')->references('id')->on('Internship')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Student', function(Blueprint $table) {
			$table->foreign('Localisation_id')->references('id')->on('Localisation')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Pilot', function(Blueprint $table) {
			$table->foreign('Users_id')->references('id')->on('Users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Pilot', function(Blueprint $table) {
			$table->foreign('Localisation_id')->references('id')->on('Localisation')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Administrator', function(Blueprint $table) {
			$table->foreign('Users_id')->references('id')->on('Users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Administrator', function(Blueprint $table) {
			$table->foreign('Localisation_id')->references('id')->on('Localisation')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Student_Commentary', function(Blueprint $table) {
			$table->foreign('Student_id')->references('Users_id')->on('Student')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Student_Commentary', function(Blueprint $table) {
			$table->foreign('Enterprise_id')->references('id')->on('Enterprise')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Pilot_Commentary', function(Blueprint $table) {
			$table->foreign('Pilot_id')->references('Users_id')->on('Pilot')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Pilot_Commentary', function(Blueprint $table) {
			$table->foreign('Enterprise_id')->references('id')->on('Enterprise')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Postulate', function(Blueprint $table) {
			$table->foreign('Internship_id')->references('id')->on('Internship')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Postulate', function(Blueprint $table) {
			$table->foreign('Student_id')->references('Users_id')->on('Student')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Inform_Step3', function(Blueprint $table) {
			$table->foreign('Pilot_id')->references('Users_id')->on('Pilot')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Inform_Step3', function(Blueprint $table) {
			$table->foreign('Student_id')->references('Users_id')->on('Student')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Inform_Step4', function(Blueprint $table) {
			$table->foreign('Administrator_id')->references('Users_id')->on('Administrator')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Inform_Step4', function(Blueprint $table) {
			$table->foreign('Pilot_id')->references('Users_id')->on('Pilot')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Inform_Step5', function(Blueprint $table) {
			$table->foreign('Administrator_id')->references('Users_id')->on('Administrator')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Inform_Step6', function(Blueprint $table) {
			$table->foreign('Administrator_id')->references('Users_id')->on('Administrator')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('Internship', function(Blueprint $table) {
			$table->dropForeign('Internship_Enterprise_id_foreign');
		});
		Schema::table('Internship', function(Blueprint $table) {
			$table->dropForeign('Internship_Localisation_id_foreign');
		});
		Schema::table('Student', function(Blueprint $table) {
			$table->dropForeign('Student_Users_id_foreign');
		});
		Schema::table('Student', function(Blueprint $table) {
			$table->dropForeign('Student_Localisation_id_foreign');
		});
		Schema::table('Pilot', function(Blueprint $table) {
			$table->dropForeign('Pilot_Users_id_foreign');
		});
		Schema::table('Pilot', function(Blueprint $table) {
			$table->dropForeign('Pilot_Localisation_id_foreign');
		});
		Schema::table('Administrator', function(Blueprint $table) {
			$table->dropForeign('Administrator_Users_id_foreign');
		});
		Schema::table('Administrator', function(Blueprint $table) {
			$table->dropForeign('Administrator_Localisation_id_foreign');
		});
		Schema::table('Student_Commentary', function(Blueprint $table) {
			$table->dropForeign('Student_Commentary_Student_id_foreign');
		});
		Schema::table('Student_Commentary', function(Blueprint $table) {
			$table->dropForeign('Student_Commentary_Enterprise_id_foreign');
		});
		Schema::table('Pilot_Commentary', function(Blueprint $table) {
			$table->dropForeign('Pilot_Commentary_Pilot_id_foreign');
		});
		Schema::table('Pilot_Commentary', function(Blueprint $table) {
			$table->dropForeign('Pilot_Commentary_Enterprise_id_foreign');
		});
		Schema::table('Postulate', function(Blueprint $table) {
			$table->dropForeign('Postulate_Internship_id_foreign');
		});
		Schema::table('Postulate', function(Blueprint $table) {
			$table->dropForeign('Postulate_Student_id_foreign');
		});
		Schema::table('Inform_Step3', function(Blueprint $table) {
			$table->dropForeign('Inform_Step3_Pilot_id_foreign');
		});
		Schema::table('Inform_Step3', function(Blueprint $table) {
			$table->dropForeign('Inform_Step3_Student_id_foreign');
		});
		Schema::table('Inform_Step4', function(Blueprint $table) {
			$table->dropForeign('Inform_Step4_Administrator_id_foreign');
		});
		Schema::table('Inform_Step4', function(Blueprint $table) {
			$table->dropForeign('Inform_Step4_Pilot_id_foreign');
		});
		Schema::table('Inform_Step5', function(Blueprint $table) {
			$table->dropForeign('Inform_Step5_Administrator_id_foreign');
		});
		Schema::table('Inform_Step6', function(Blueprint $table) {
			$table->dropForeign('Inform_Step6_Administrator_id_foreign');
		});
	}
}