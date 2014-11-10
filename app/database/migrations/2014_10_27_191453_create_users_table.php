<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{ 
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');

				$table->string('name');
        $table->string('lastname');
        $table->string('email');
        $table->string('password');
        $table->string('address');
        $table->date('birth');
        $table->integer('usertype_id')->unsigned();
        $table->boolean('available');
        $table->string('phone');
        $table->integer('dni')->unsigned();

        $table->integer('department_id')->unsigned();
        $table->integer('province_id')->unsigned();
        $table->integer('district_id')->unsigned();

        $table->foreign('usertype_id')->references('id')->on('usertypes');
        $table->foreign('department_id')->references('id')->on('departments');
        $table->foreign('province_id')->references('id')->on('provinces');
        $table->foreign('district_id')->references('id')->on('districts');

        $table->string('remember_token')->nullable();

			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
