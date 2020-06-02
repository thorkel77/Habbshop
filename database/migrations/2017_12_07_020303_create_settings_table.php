<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('settings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('key', 100)->nullable()->unique();
			$table->string('display_name')->nullable();
			$table->text('value', 65535);
			$table->text('details', 65535);
			$table->string('type', 100)->nullable();
			$table->integer('order')->default(1);
			$table->string('group')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('settings');
	}

}
