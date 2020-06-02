<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('seo_title')->nullable();
			$table->string('image')->default('products/placeholder.png');
			$table->string('description');
			$table->text('body', 65535);
			$table->float('price')->default(0.00);
			$table->string('purchase_url');
			$table->string('slug')->unique();
			$table->string('meta_description')->default('');
			$table->string('meta_keywords')->default('');
			$table->boolean('active')->default(1);
			$table->boolean('featured')->default(0);
			$table->integer('category_id')->nullable();
			$table->timestamps();
			$table->string('related', 250)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
