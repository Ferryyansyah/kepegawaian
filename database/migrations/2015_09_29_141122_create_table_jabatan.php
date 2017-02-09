<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJabatan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jabatan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kode_jabatan');
			$table->string('nama_jabatan');
			$table->string('gaji_jabatan');
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
		Schema::drop('jabatan');
	}

}
