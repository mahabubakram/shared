<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocToMainCenterMappingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('loc_to_main_center_mapping', function ($table) {
            $table->increments('id');
            $table->smallInteger('location_id');
            $table->smallInteger('main_center_id');
            $table->tinyInteger('min_delivery_days')->default(0);
            $table->tinyInteger('max_delivery_days')->default(1);
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
        Schema::dropIfExists('loc_to_main_center_mapping');
	}

}
