<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderdetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orderdetails', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('order_id')->unsigned();
			$table->foreign('order_id')->references('id')->on('orders');

			$table->integer('product_stock_id')->unsigned();
			$table->foreign('product_stock_id')->references('id')->on('productstocks');

			$table->string('description');
			$table->integer('quantity')->unsigned();
			$table->decimal('price');

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
		Schema::drop('orderdetails');
	}

}
