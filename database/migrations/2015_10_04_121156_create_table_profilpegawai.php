<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfilpegawai extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profilpegawai', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nik');
			$table->string('nama');
			$table->string('tanggal_lahir');
			$table->string('level');
			$table->string('lokasi_kerja');
			$table->string('unit_kerja');
			$table->string('jabatan');
			$table->string('status_aktif');
			$table->string('status_kawin');
			$table->string('nomor_sk');
			$table->string('tanggal_sk');
			$table->string('alamat');
			$table->string('rt_rw');
			$table->string('kode_pos');
			$table->string('tlp');
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
		Schema::drop('profilpegawai');
	}

}
