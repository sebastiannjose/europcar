<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscrevaSeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inscreva_se', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome_do_participante');
			$table->string('funcao');
			$table->string('telemovel');
			$table->string('email');
			$table->string('nome_da_oficina');
			$table->string('morada');
			$table->string('codigo_postal');
			$table->string('localidade');
			$table->string('telefone');
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
		Schema::drop('inscreva_se');
	}

}
