<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCuponsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cupons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code');
			$table->date('starting_date');
			$table->date('ending_date');
			$table->enum('discount_type', ['percent', 'unity']);
			$table->decimal('discount_value');
			$table->integer('quantity')->unsigned();
			$table->boolean('available');
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
		Schema::drop('cupons');
	}

}
