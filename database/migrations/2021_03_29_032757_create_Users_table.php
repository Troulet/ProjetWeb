<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('Users', function(Blueprint $table) {
			$table->increments('id', true);
			$table->string('email', 50)->index();
			$table->string('Password', 200);
            $table->string('First_Name', 50);
			$table->string('Last_name', 50);
			$table->timestamps();
			$table->rememberToken('rememberToken');
		});
	}

	public function down()
	{
		Schema::drop('Users');
	}
}
