<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductstocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productstocks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->decimal('price');
			$table->integer('stock');
			$table->string('sku');
			$table->boolean('visible');
			$table->decimal('offering_price');
			$table->date('starting_offer');
			$table->date('ending_offer');

			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')->references('id')->on('products');

			$table->integer('color_id')->nullable()->unsigned();
			$table->foreign('color_id')->references('id')->on('colors');

			$table->integer('size_id')->nullable()->unsigned();
			$table->foreign('size_id')->references('id')->on('sizes');

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
		Schema::drop('productstocks');
	}

}
