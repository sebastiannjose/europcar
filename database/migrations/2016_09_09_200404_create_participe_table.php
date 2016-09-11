<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participe', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome');
			$table->string('telemovel');
			$table->string('email');
			$table->string('nome_da_oficina');
			$table->string('alugueres');
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
		Schema::drop('participe');
	}

}
