<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeluargasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('keluargas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_pasangan');
			$table->string('tgl_lahir_pasangan');
			$table->string('nama_ayah');
			$table->string('tgl_lahir_ayah');
			$table->string('nama_ibu');
			$table->string('tgl_lahir_ibu');
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
		Schema::drop('keluargas');
	}

}
