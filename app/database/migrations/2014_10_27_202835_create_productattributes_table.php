<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductattributesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productattributes', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->integer('attribute_id')->unsigned();
			$table->foreign('attribute_id')->references('id')->on('attributes');

			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')->references('id')->on('products');
			
			$table->string('value');

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
		Schema::drop('productattributes');
	}

}
