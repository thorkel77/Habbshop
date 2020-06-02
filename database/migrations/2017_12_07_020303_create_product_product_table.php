<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_product', function(Blueprint $table)
		{
			$table->integer('product_id')->unsigned()->index();
			$table->integer('product2_id')->unsigned()->index();
			$table->primary(['product_id','product2_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_product');
	}

}
