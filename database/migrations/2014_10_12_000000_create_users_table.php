<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\User;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('username')->unique();
			$table->string('password', 60);
			$table->rememberToken();
			$table->timestamps(); 
		});
		$user = new User;
		$user->name = 'feri';
		$user->username = 'feriyansyah10';
		$user->password = \Hash::make('feri12345');
		$user->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
