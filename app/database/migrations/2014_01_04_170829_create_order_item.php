<?php

use Illuminate\Database\Migrations\Migration;

class CreateOrderItem extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_items', function($table)
		{
			$table->increments('id');
			$table->integer('book_id');
			$table->integer('order_id');
			$table->integer('qty');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_items');
	}

}