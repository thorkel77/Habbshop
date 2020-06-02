<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductSavesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_saves', function(Blueprint $table)
		{
			$table->integer('product_id')->unsigned()->index();
			$table->integer('user_id')->unsigned()->index();
			$table->timestamps();
			$table->primary(['product_id','user_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_saves');
	}

}
