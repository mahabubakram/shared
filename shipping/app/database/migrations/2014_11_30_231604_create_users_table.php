<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name', 30);
            $table->string('email', 50);
            $table->string('password', 64);
            $table->string('user_type', 20);
            $table->string('address', 60);
            $table->smallInteger('location_id');
            $table->string('phone', 20)->nullable();
            $table->string('mobile', 20)->nullable();
            // required for Laravel 4.1.26
            $table->string('remember_token', 100)->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::drop('users');
	}

}
