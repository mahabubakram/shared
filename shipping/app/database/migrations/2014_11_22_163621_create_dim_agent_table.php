<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimAgentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('dim_agent', function($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address')->nullable();
            $table->smallInteger('location_id')->nullable();
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

        Schema::dropIfExists('dim_agent');
	}

}
