<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('dim_location', function($table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('thana', 30);
            $table->string('district', 30);
            $table->string('division', 30);
            $table->tinyInteger('is_inner_city')->default(0);
            $table->boolean('active')->default(true);
            $table->timestamps();

            $table->engine = 'InnoDB';
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('dim_location');
	}

}
