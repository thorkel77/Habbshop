<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product_product', function(Blueprint $table)
		{
			$table->foreign('product2_id')->references('id')->on('products')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('product_id')->references('id')->on('products')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product_product', function(Blueprint $table)
		{
			$table->dropForeign('product_product_product2_id_foreign');
			$table->dropForeign('product_product_product_id_foreign');
		});
	}

}
