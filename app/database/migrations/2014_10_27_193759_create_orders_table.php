<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->decimal('amount');
			$table->string('description');
			$table->dateTime('delivery_date');
			$table->decimal('tax');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

			$table->integer('payment_id')->unsigned();
			$table->foreign('payment_id')->references('id')->on('payments');

			$table->integer('status_id')->unsigned();
			$table->foreign('status_id')->references('id')->on('status');
			
			$table->integer('cupon_id')->nullable()->unsigned();
			$table->foreign('cupon_id')->references('id')->on('cupons');

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
		Schema::drop('orders');
	}

}
